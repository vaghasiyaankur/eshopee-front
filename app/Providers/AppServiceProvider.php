<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Model\BusinessSetting;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use App\Helpers\Frontendhelper;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {
            Paginator::useBootstrap();

            $web = BusinessSetting::all();
            $settings = Frontendhelper::get_settings($web, 'colors');
            $data = json_decode($settings['value'], true);
            $web_config = [
                'primary_color' => $data['primary'],
                'secondary_color' => $data['secondary'],
                'name' => Frontendhelper::get_settings($web, 'company_name'),
                'phone' => Frontendhelper::get_settings($web, 'company_phone'),
                'web_logo' => Frontendhelper::get_settings($web, 'company_web_logo'),
                'mob_logo' => Frontendhelper::get_settings($web, 'company_mobile_logo'),
                'fav_icon' => Frontendhelper::get_settings($web, 'company_fav_icon'),
                'email' => Frontendhelper::get_settings($web, 'company_email'),
                'about' => Frontendhelper::get_settings($web, 'about_us'),
                'footer_logo' => Frontendhelper::get_settings($web, 'company_footer_logo'),
                'copyright_text' => Frontendhelper::get_settings($web, 'company_copyright_text'),
            ];

            //language
            $language = BusinessSetting::where('type', 'language')->first();

            //currency
            \App\Helpers\Frontendhelper::currency_load();

            View::share(['web_config' => $web_config, 'language' => $language]);

            Schema::defaultStringLength(191);
        } catch (\Exception $ex) {

        }
    }
}
