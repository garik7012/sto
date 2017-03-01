<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\CustomField;

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
            $title = $data1[$i]["title"];
            $value = $data1[$i]['value'];
            $data2[$title] = $value;
        }
        view()->share('cfs', $data2);
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
