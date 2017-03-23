<?php

namespace App\Providers;

use SleepingOwl\Admin\Providers\AdminSectionsServiceProvider as ServiceProvider;

class AdminSectionsServiceProvider extends ServiceProvider
{

    /**
     * @var array
     */
    protected $sections = [
        \App\News::class => 'App\Http\Admin\News',
        \App\Offer::class => 'App\Http\Admin\Offers',
        \App\CustomField::class => 'App\Http\Admin\CustomFields',
        \App\Page::class => 'App\Http\Admin\Pages',
        \App\Order::class => 'App\Http\Admin\Orders',
        \App\Service::class => 'App\Http\Admin\Services',
        \App\CallBack::class => 'App\Http\Admin\CallBack',
        \App\Banner::class => 'App\Http\Admin\Banner',
    ];

    /**
     * Register sections.
     *
     * @return void
     */
    public function boot(\SleepingOwl\Admin\Admin $admin)
    {
    	//

        parent::boot($admin);
    }
}
