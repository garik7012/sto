<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CustomField;
use App\Service;
use App\Banner;

class LayoutServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $data1 = CustomField::all();
        $data2 = [];
        for ($i = 0; $i<count($data1); $i++){
            $title = $data1[$i]["name"];
            $value = $data1[$i]['value'];
            $data2[$title] = $value;
        }
        view()->share('cfs', $data2);
        view()->share('banner', Banner::findOrFail(1));
        $services = Service::orderBy('position')->where('is_left', '1')->where('is_public', '1')->get();
        view()->share('leftServices', $services);
        $mservices = Service::orderBy('position', 'desc')->limit(9)->where('is_public', '1')->get();
        view()->share('mainServices', $mservices);
        $listServices = Service::select('id', 'title')->where('is_public', '1')->get();
        view()->share('listServices', $listServices);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
