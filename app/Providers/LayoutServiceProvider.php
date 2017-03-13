<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CustomField;
use App\Service;

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
        $services = Service::all()->where('position', '1');
        view()->share('leftServices', $services);
        $mservices = Service::orderBy('id', 'desc')->limit(9)->get();
        view()->share('mainServices', $mservices);
        $listServices = Service::select('id', 'title')->get();
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
