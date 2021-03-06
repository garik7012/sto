<?php

use SleepingOwl\Admin\Navigation\Page;

// Default check access logic
// AdminNavigation::setAccessLogic(function(Page $page) {
// 	   return auth()->user()->isSuperAdmin();
// });
//
// AdminNavigation::addPage(\App\User::class)->setTitle('test')->setPages(function(Page $page) {
// 	  $page
//		  ->addPage()
//	  	  ->setTitle('Dashboard')
//		  ->setUrl(route('admin.dashboard'))
//		  ->setPriority(100);
//
//	  $page->addPage(\App\User::class);
// });
//
// // or
//
// AdminSection::addMenuPage(\App\User::class)

return [
//    [
//        'title' => 'Dashboard',
//        'icon'  => 'fa fa-dashboard',
//        'url'   => route('admin.dashboard'),
//    ],
//
//    [
//        'title' => 'Information',
//        'icon'  => 'fa fa-exclamation-circle',
//        'url'   => route('admin.information'),
//    ],
    [
        'title' => 'Акции',
        'priority' => 204,
        'model' => \App\Offer::class,
    ],
    [
        'title' => 'Новости',
        'priority' => 203,
        'model' => \App\News::class,
    ],
    [
        'title' => 'Главные поля',
        'priority' => 200,
        'model' => \App\CustomField::class,
    ],
    [
        'title' => 'Баннер',
        'priority' => 201,
        'model' => \App\Banner::class,
    ],
    [
        'title' => 'Страницы',
        'priority' => 201,
        'model' => \App\Page::class,
    ],
    [
        'title' => 'Онлайн заказы',
        'priority' => 210,
        'model' => \App\Order::class,
    ],
    [
        'title' => 'Заявки на обратный звонок',
        'priority' => 211,
        'model' => \App\CallBack::class,
    ],
    [
        'title' => 'Услуги',
        'priority' => 209,
        'model' => \App\Service::class,
    ],



    // Examples
    // [
    //    'title' => 'Content',
    //    'pages' => [
    //
    //        \App\User::class,
    //
    //        // or
    //
    //        (new Page(\App\User::class))
    //            ->setPriority(100)
    //            ->setIcon('fa fa-user')
    //            ->setUrl('users')
    //            ->setAccessLogic(function (Page $page) {
    //                return auth()->user()->isSuperAdmin();
    //            }),
    //
    //        // or
    //
    //        new Page([
    //            'title'    => 'News',
    //            'priority' => 200,
    //            'model'    => \App\News::class
    //        ]),
    //
    //        // or
    //        (new Page(/* ... */))->setPages(function (Page $page) {
    //            $page->addPage([
    //                'title'    => 'Blog',
    //                'priority' => 100,
    //                'model'    => \App\Blog::class
    //		      ));
    //
    //		      $page->addPage(\App\Blog::class);
    //	      }),
    //
    //        // or
    //
    //        [
    //            'title'       => 'News',
    //            'priority'    => 300,
    //            'accessLogic' => function ($page) {
    //                return $page->isActive();
    //		      },
    //            'pages'       => [
    //
    //                // ...
    //
    //            ]
    //        ]
    //    ]
    // ]
];