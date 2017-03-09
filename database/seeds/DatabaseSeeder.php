<?php

use Illuminate\Database\Seeder;
use App\CustomField;
use App\Service;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        //$this->call(CustomFields::class);
        $this->call(Services::class);
    }
}

class CustomFields extends Seeder{
    public function run(){
        CustomField::create([
            'name'=> 'tel1',
            'value' => '(066)285-04-66',
            'description'=>' Voodafone телефон компании.',
        ]);
        CustomField::create([
            'name'=> 'tel2',
            'value' => '(067)219-51-57',
            'description'=>'Киевстар телефон компании.',
        ]);
        CustomField::create([
            'name'=> 'viber',
        ]);CustomField::create([
            'name'=> 'telegram',
        ]);CustomField::create([
            'name'=> 'twiter',
        ]);CustomField::create([
            'name'=> 'vk',
        ]);CustomField::create([
            'name'=> 'fb',
        ]);CustomField::create([
            'name'=> 'e-mail',
        ]);CustomField::create([
            'name'=> 'work_time',
        ]);CustomField::create([
            'name'=> 'adress',
        ]);
    }
}

class Services extends Seeder{
    public function run(){
        Service::create([
            'title' => 'Шиномонтаж',
            'description' => 'Описание и цена на шиномонтаж'
        ]);
    }
}