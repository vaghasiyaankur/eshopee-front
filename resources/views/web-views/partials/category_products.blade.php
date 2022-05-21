<div id="tab-1-template--14217818308692__162935800064a32fb5" class="ishi-product-tab-pane ishi-fade active">
    <slider-component class="slider-mobile-gutter">
        <ul class="product-list grid product-width-4 row slider slider--tablet grid--peek" role="list">

        {{-- Feature Product --}}


            @if(count($featured_products) > 0)
                <li class="grid__item col-lg-3 col-md-6 col-sm-6 col-xs-6 slider__slide">
                    <div class="card-wrapper">
                        <div class="card card--product" tabindex="-1">
                        <div class="card__inner ">
                            <a href="products/royaloak-bell-office-table.html" class="full-unstyled-link">
                                @foreach($featured_products as $product)
                                <div class="media media--transparent media--square media--hover-effect"
                                    data-href="{{route('product',$product->slug)}}">
                                        <a class="d-block {{Session::get('direction') === "rtl" ? 'ml-2' : 'mr-2'}}"
                                            href="{{route('product',$product->slug)}}">
                                            <img
                                                    onerror="this.src='{{asset('assets/front-end/img/image-place-holder.png')}}'"
                                                    src="{{\App\Helpers\Frontendhelper::product_image_path('thumbnail')}}/{{$product['thumbnail']}}"
                                                    alt="Product"/>
                                        </a>
                                </div>
                                @endforeach

                            </a>
                            <span class="mobile-review">
                            <span class="shopify-product-reviews-badge" data-id="3566327267412"></span>
                            </span>
                            <div class="thumbnail-buttons">
                                <quickview-opener class="product-popup-modal__opener no-js-hidden btn-info quick-view" data-handle="royaloak-bell-office-table" data-modal="#qvPopupModal">
                                    <div class="product-popup-modal__button link" type="button" aria-haspopup="dialog" data-href="#qvPopupModal" data-toggle="popover" aria-expanded="false">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1050 1050">
                                        <svg x="26%" y="26%">
                                            <path d="M505.918,236.117c-26.651-43.587-62.485-78.609-107.497-105.065c-45.015-26.457-92.549-39.687-142.608-39.687
                                                c-50.059,0-97.595,13.225-142.61,39.687C68.187,157.508,32.355,192.53,5.708,236.117C1.903,242.778,0,249.345,0,255.818
                                                c0,6.473,1.903,13.04,5.708,19.699c26.647,43.589,62.479,78.614,107.495,105.064c45.015,26.46,92.551,39.68,142.61,39.68
                                                c50.06,0,97.594-13.176,142.608-39.536c45.012-26.361,80.852-61.432,107.497-105.208c3.806-6.659,5.708-13.223,5.708-19.699
                                                C511.626,249.345,509.724,242.778,505.918,236.117z M194.568,158.03c17.034-17.034,37.447-25.554,61.242-25.554
                                                c3.805,0,7.043,1.336,9.709,3.999c2.662,2.664,4,5.901,4,9.707c0,3.809-1.338,7.044-3.994,9.704
                                                c-2.662,2.667-5.902,3.999-9.708,3.999c-16.368,0-30.362,5.808-41.971,17.416c-11.613,11.615-17.416,25.603-17.416,41.971
                                                c0,3.811-1.336,7.044-3.999,9.71c-2.667,2.668-5.901,3.999-9.707,3.999c-3.809,0-7.044-1.334-9.71-3.999
                                                c-2.667-2.666-3.999-5.903-3.999-9.71C169.015,195.482,177.535,175.065,194.568,158.03z M379.867,349.04
                                                c-38.164,23.12-79.514,34.687-124.054,34.687c-44.539,0-85.889-11.56-124.051-34.687s-69.901-54.2-95.215-93.222
                                                c28.931-44.921,65.19-78.518,108.777-100.783c-11.61,19.792-17.417,41.207-17.417,64.236c0,35.216,12.517,65.329,37.544,90.362
                                                s55.151,37.544,90.362,37.544c35.214,0,65.329-12.518,90.362-37.544s37.545-55.146,37.545-90.362
                                                c0-23.029-5.808-44.447-17.419-64.236c43.585,22.265,79.846,55.865,108.776,100.783C449.767,294.84,418.031,325.913,379.867,349.04
                                                z"/>
                                        </svg>
                                    </svg>
                                    </div>
                                </quickview-opener>
                                <div class="btn-info wishlist">
                                    <div class="add-to-wishlist">
                                    <div class="show">
                                        <div class="default-wishbutton-royaloak-bell-office-table loading">
                                            <a class="add-in-wishlist-js" data-href="royaloak-bell-office-table">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1200 1200">
                                                <svg x="30%" y="30%">
                                                    <path d="M511.825,170.191c-0.14-1.786-0.298-3.155-0.44-4.095C504.22,84.955,444.691,20.73,367.434,20.73
                                                        c-44.758,0-85.66,21.18-112.442,55.516C228.835,41.679,189.491,20.73,144.97,20.73C67.976,20.73,8.584,84.52,0.937,166.557
                                                        c-0.147,0.956-0.295,2.12-0.43,3.489C-0.8,183.3,0.287,200.862,5.338,222.26c10.732,45.463,35.828,86.871,71.224,118.958
                                                        l164.828,144.92c8.028,7.059,20.042,7.085,28.101,0.062l166.037-144.683c39.134-40.728,62.393-77.366,71.616-119.584
                                                        C511.771,200.731,512.848,183.284,511.825,170.191z M465.46,212.833c-7.254,33.204-26.552,63.603-59.352,97.843L255.545,441.771
                                                        l-150.569-132.38c-28.881-26.184-49.406-60.051-58.113-96.933c-3.953-16.747-4.747-29.585-3.895-38.225
                                                        c0.075-0.764,0.393-3.072,0.393-3.072C48.849,109.384,91.478,63.397,144.97,63.397c39.823,0,73.704,24.287,90.17,63.294
                                                        c7.338,17.382,31.97,17.382,39.308,0c16.136-38.225,52.419-63.294,92.986-63.294c53.494,0,96.121,45.99,101.609,107.786
                                                        c0.147,1.242,0.187,1.586,0.245,2.333C469.993,182.541,469.174,195.811,465.46,212.833z"/>
                                                </svg>
                                                </svg>
                                                <span class="tooltip-label">Add to wishlist</span>
                                            </a>
                                        </div>
                                        <div class="loadding-wishbutton-royaloak-bell-office-table loading loader-btn" style="display: none; pointer-events: none"><a class="add_to_wishlist" data-href="royaloak-bell-office-table"><i class="fa fa-circle-o-notch fa-spin"></i></a></div>
                                        <div class="added-wishbutton-royaloak-bell-office-table loading" style="display: none;">
                                            <a class="added-wishlist add_to_wishlist" href="pages/wishlist.html">
                                                <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1200 1200">
                                                <svg x="30%" y="30%">
                                                    <path d="M511.489,167.372c-7.573-84.992-68.16-146.667-144.107-146.667c-44.395,0-85.483,20.928-112.427,55.488
                                                        c-26.475-34.923-66.155-55.488-110.037-55.488c-75.691,0-136.171,61.312-144.043,145.856c-0.811,5.483-2.795,25.045,4.395,55.68
                                                        C15.98,267.532,40.62,308.663,76.759,341.41l164.608,144.704c4.011,3.541,9.067,5.312,14.08,5.312
                                                        c4.992,0,10.005-1.749,14.016-5.248L436.865,340.13c24.704-25.771,58.859-66.048,70.251-118.251
                                                        C514.391,188.514,511.66,168.268,511.489,167.372z"/>
                                                </svg>
                                                </svg>
                                                <span class="tooltip-label">View Wishlist</span>
                                            </a>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </div>
                        <div class="card-information">
                        <div class="card-information__wrapper">
                            {{-- <div style="position: relative;text-align:center;" class="product-title1">
                                <a href="{{route('product',$product->slug)}}" style="color:black;" >
                                    {{ Str::limit($product['name'], 25) }}
                                </a>
                            </div>
                            <div class="price">
                                <dl>
                                    <div class="price__regular">
                                        @if($product->discount > 0)
                                        <strike style="font-size: 12px!important;color: grey!important;">
                                            {{\App\Helpers\Frontendhelper::currency_converter($product->unit_price)}}
                                        </strike><br>
                                    @endif
                                        {{\App\Helpers\Frontendhelper::currency_converter(
                                            $product->unit_price-(\App\Helpers\Frontendhelper::get_product_discount($product,$product->unit_price))
                                        )}}
                                    </div>
                                </dl>
                            </div> --}}
                            <div class="widget-product-meta" style="text-align: center;">
                                <span class="text-accent">
                                    <div style="position: relative;text-align:center;" class="product-title1">
                                        <a href="{{route('product',$product->slug)}}" style="color:black;" >
                                            {{ Str::limit($product['name'], 25) }}
                                        </a>
                                    </div>
                                        {{\App\Helpers\Frontendhelper::currency_converter(
                                        $product->unit_price-(\App\Helpers\Frontendhelper::get_product_discount($product,$product->unit_price))
                                        )}}
                                    @if($product->discount > 0)
                                        <strike style="font-size: 12px!important;color: grey!important;">
                                        {{\App\Helpers\Frontendhelper::currency_converter($product->unit_price)}}
                                    </strike>
                                    @endif
                                </span>
                            </div>
                            <div class="product-desc"> Faded short sleeves t-shirt with high neckline. Soft and stretchy material for a comfortable fit. Accessorize with a straw hat and you're ready for summer!
                                Sample Unordered List
                                Comodous in tempor...
                            </div>
                            <div class="product-cart">
                                <div class="cart-btn btn btn-info add-to-cart-js" data-variantid="32594705580116">
                                    <svg aria-hidden="true" focusable="false" role="presentation" class="icon" viewBox="0 0 1050 1050">
                                    <svg x="25%" y="25%">
                                        <path d="M194.59,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                            S230.235,382.711,194.59,382.711z M194.59,473.215c-14.261,0-25.858-11.597-25.858-25.858c0-14.261,11.597-25.858,25.858-25.858
                                            c14.254,0,25.858,11.597,25.858,25.858C220.448,461.617,208.851,473.215,194.59,473.215z"/>
                                        <path d="M385.941,382.711c-35.646,0-64.646,29-64.646,64.646s29,64.646,64.646,64.646c35.646,0,64.646-29,64.646-64.646
                                            S421.587,382.711,385.941,382.711z M385.941,473.215c-14.261,0-25.858-11.597-25.858-25.858
                                            c0-14.261,11.597-25.858,25.858-25.858c14.261,0,25.858,11.597,25.858,25.858C411.799,461.617,400.202,473.215,385.941,473.215z"
                                            />
                                        <path d="M498.088,126.274c-3.685-4.629-9.27-7.324-15.179-7.324H143.326l-17.629-89.095c-1.545-7.803-7.699-13.873-15.528-15.308
                                            L32.594,0.325C22.038-1.621,11.953,5.368,10.02,15.905s5.042,20.641,15.58,22.574l64.607,11.843l56.914,287.667
                                            c1.797,9.083,9.768,15.631,19.025,15.631h271.512c9.031,0,16.86-6.225,18.896-15.037l45.252-195.876
                                            C503.137,136.947,501.767,130.896,498.088,126.274z M422.233,314.833H182.074l-31.075-157.089h307.519L422.233,314.833z"/>
                                    </svg>
                                    </svg>
                                    <span> Add to cart </span>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </li>
            @endif


            </ul>
       <div class="slider-buttons no-js-hidden">
          <div class="slider-counter caption">
             <span class="slider-counter--current">1</span>
             <span aria-hidden="true"> / </span>
             <span class="visually-hidden">of</span>
             <span class="slider-counter--total"></span>
          </div>
          <button type="button" class="slider-button slider-button--prev" name="previous" aria-label="Slide left">
             <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
             </svg>
          </button>
          <button type="button" class="slider-button slider-button--next" name="next" aria-label="Slide right">
             <svg aria-hidden="true" focusable="false" role="presentation" class="icon icon-caret" viewBox="0 0 10 6">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.354.646a.5.5 0 00-.708 0L5 4.293 1.354.646a.5.5 0 00-.708.708l4 4a.5.5 0 00.708 0l4-4a.5.5 0 000-.708z" fill="currentColor"/>
             </svg>
          </button>
       </div>
    </slider-component>
    <div class="center view-all-btn">
       <a href="collections/computer.html"
          class="button"
          aria-label="View all products in the  collection"
          >
       View all
       </a>
    </div>
</div>


