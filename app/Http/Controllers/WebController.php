<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Model\Category;
use App\Model\OrderDetail;
use App\Model\Wishlist;
use App\Model\Product;
use App\Model\DealOfTheDay;
use App\Model\Review;
use App\Model\Brand;

use App\Helpers\Frontendhelper;


class WebController extends Controller
{
    public function home(){

        $home_categories = Category::where('home_status', true)->get();
        $home_categories->map(function ($data) {
            $data['products'] = Product::active()
                /*->where('category_ids', 'like', "%{$data['id']}%")*/
                ->whereJsonContains('category_ids', ["id" => (string)$data['id']])
                ->inRandomOrder()->take(12)->get();
        });
        $categories = DB::table('categories')->where('position', 0)->take(12)->get();
        //feature products finding based on selling
        $featured_products = Product::with(['reviews'])->active()
            ->where('featured', 1)
            ->withCount(['order_details'])->orderBy('order_details_count', 'DESC')
            ->take(8)
            ->get();
        //end
        $latest_products = Product::with(['reviews'])->active()->orderBy('id', 'desc')->take(8)->get();

        $bestSellProduct = OrderDetail::with('product.reviews')
            ->whereHas('product', function ($query) {
                $query->active();
            })
            ->select('product_id', DB::raw('COUNT(product_id) as count'))
            ->groupBy('product_id')
            ->orderBy("count", 'desc')
            ->take(4)
            ->get();

            //Top rated
        $topRated = Review::with('product')
        ->whereHas('product', function ($query) {
            $query->active();
        })
        ->select('product_id', DB::raw('AVG(rating) as count'))
        ->groupBy('product_id')
        ->orderBy("count", 'desc')
        ->take(4)
        ->get();

            if ($bestSellProduct->count() == 0) {
                $bestSellProduct = $latest_products;
            }

            if ($topRated->count() == 0) {
                $topRated = $bestSellProduct;
            }


        return view('index',compact('categories','featured_products','latest_products','home_categories','topRated','bestSellProduct'));
    }

    public function about_us(){
        $categories = DB::table('categories')->where('position', 0)->take(12)->get();
        return view('about-us',compact('categories'));
    }

    public function contact(){
        $categories = DB::table('categories')->where('position', 0)->take(12)->get();
        return view('contact',compact('categories'));
    }

    public function blog(){
        $categories = DB::table('categories')->where('position', 0)->take(12)->get();
        return view('blog',compact('categories'));
    }

    public function all_categories(){
            $categories = DB::table('categories')->all();
            return view('web-views.categories',compact('categories'));
    }
    public function categories_by_category($id)
    {
        $category = Category::with(['childes.childes'])->where('id', $id)->first();
        return response()->json([
            'view' => view('web-views.categories', compact('category'))->render(),
        ]);
    }
    public function product($slug)
    {
        $product = Product::active()->with(['reviews'])->where('slug', $slug)->first();
        if ($product != null) {
            $countOrder = OrderDetail::where('product_id', $product->id)->count();
            $countWishlist = Wishlist::where('product_id', $product->id)->count();
            $relatedProducts = Product::with(['reviews'])->active()->where('category_ids', $product->category_ids)->where('id', '!=', $product->id)->limit(12)->get();
            $deal_of_the_day = DealOfTheDay::where('product_id', $product->id)->where('status', 1)->first();

            return view('web-views.products.details', compact('product', 'countWishlist', 'countOrder', 'relatedProducts', 'deal_of_the_day'));
        }

        Toastr::error(translate('not_found'));
        return back();
    }

    public function products(Request $request)
    {
        $request['sort_by'] == null ? $request['sort_by'] == 'latest' : $request['sort_by'];

        $porduct_data = Product::active()->with(['reviews']);

        if ($request['data_from'] == 'category') {
            $products = $porduct_data->get();
            $product_ids = [];
            foreach ($products as $product) {
                foreach (json_decode($product['category_ids'], true) as $category) {
                    if ($category['id'] == $request['id']) {
                        array_push($product_ids, $product['id']);
                    }
                }
            }
            $query = $porduct_data->whereIn('id', $product_ids);
        }

        if ($request['data_from'] == 'brand') {
            $query = $porduct_data->where('brand_id', $request['id']);
        }

        if ($request['data_from'] == 'latest') {
            $query = $porduct_data->orderBy('id', 'DESC');
        }

        if ($request['data_from'] == 'top-rated') {
            $reviews = Review::select('product_id', DB::raw('AVG(rating) as count'))
                ->groupBy('product_id')
                ->orderBy("count", 'desc')->get();
            $product_ids = [];
            foreach ($reviews as $review) {
                array_push($product_ids, $review['product_id']);
            }
            $query = $porduct_data->whereIn('id', $product_ids);
        }

        if ($request['data_from'] == 'best-selling') {
            $details = OrderDetail::with('product')
                ->select('product_id', DB::raw('COUNT(product_id) as count'))
                ->groupBy('product_id')
                ->orderBy("count", 'desc')
                ->get();
            $product_ids = [];
            foreach ($details as $detail) {
                array_push($product_ids, $detail['product_id']);
            }
            $query = $porduct_data->whereIn('id', $product_ids);
        }

        if ($request['data_from'] == 'most-favorite') {
            $details = Wishlist::with('product')
                ->select('product_id', DB::raw('COUNT(product_id) as count'))
                ->groupBy('product_id')
                ->orderBy("count", 'desc')
                ->get();
            $product_ids = [];
            foreach ($details as $detail) {
                array_push($product_ids, $detail['product_id']);
            }
            $query = $porduct_data->whereIn('id', $product_ids);
        }

        if ($request['data_from'] == 'featured') {
            $query = Product::with(['reviews'])->active()->where('featured', 1);
        }

        if ($request['data_from'] == 'search') {
            $key = explode(' ', $request['name']);
            $query = $porduct_data->where(function ($q) use ($key) {
                foreach ($key as $value) {
                    $q->orWhere('name', 'like', "%{$value}%");
                }
            });
        }

        if ($request['data_from'] == 'discounted') {
            $query = Product::with(['reviews'])->active()->where('discount', '!=', 0);
        }

        if ($request['sort_by'] == 'latest') {
            $fetched = $query->latest();
        } elseif ($request['sort_by'] == 'low-high') {
            $fetched = $query->orderBy('unit_price', 'ASC');
        } elseif ($request['sort_by'] == 'high-low') {
            $fetched = $query->orderBy('unit_price', 'DESC');
        } elseif ($request['sort_by'] == 'a-z') {
            $fetched = $query->orderBy('name', 'ASC');
        } elseif ($request['sort_by'] == 'z-a') {
            $fetched = $query->orderBy('name', 'DESC');
        } else {
            $fetched = $query;
        }

        if ($request['min_price'] != null || $request['max_price'] != null) {
            $fetched = $fetched->whereBetween('unit_price', [Frontendhelper::convert_currency_to_usd($request['min_price']), Frontendhelper::convert_currency_to_usd($request['max_price'])]);
        }

        $data = [
            'id' => $request['id'],
            'name' => $request['name'],
            'data_from' => $request['data_from'],
            'sort_by' => $request['sort_by'],
            'page_no' => $request['page'],
            'min_price' => $request['min_price'],
            'max_price' => $request['max_price'],
        ];

        $products = $fetched->paginate(20)->appends($data);

        if ($request->ajax()) {
            return response()->json([
                'view' => view('web-views.products._ajax-products', compact('products'))->render()
            ], 200);
        }
        if ($request['data_from'] == 'category') {
            $data['brand_name'] = Category::find((int)$request['id'])->name;
        }
        if ($request['data_from'] == 'brand') {
            $data['brand_name'] = Brand::find((int)$request['id'])->name;
        }

        return view('web-views.products.view', compact('products', 'data'), $data);
    }


    public function category_products(Request $request){


        $request['sort_by'] == null ? $request['sort_by'] == 'latest' : $request['sort_by'];

        $porduct_data = Product::active()->with(['reviews']);


        if ($request['type'] == 'featured') {
            $query = $porduct_data->where('featured', 1)
            ->withCount(['order_details'])->orderBy('order_details_count', 'DESC')
            ->take(8)
            ->get();
        }
        if ($request['type'] == 'latest') {
            $query = $porduct_data->orderBy('id', 'DESC')->take(8)->get();
        }
        if ($request['type'] == 'top_rated') {
            $query = $porduct_data->orderBy('id', 'DESC')->take(8)->get();
        }
        if ($request['type'] == 'top_selling') {
            $query = $porduct_data->orderBy('id', 'DESC')->take(8)->get();
        }

        $featured_products = $query;

        $response = view('web-views.partials.category_products', compact('featured_products'))->render();

        return response()->json(['success' => $response], 200);
    }

}
