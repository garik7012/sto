<?php

use Illuminate\Database\Seeder;
use App\CustomField;
use App\Service;
use App\Page;

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
        $this->call(CustomFields::class);
        $this->call(Pages::class);
        $this->call(NewsSeeder::class);
        $this->call(ServiceSeeder::class);
    }
}

class CustomFields extends Seeder{
    public function run(){
        DB::table('custom_fields')->delete();
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
            'value' => 'https://t.me/joinchat/AAAAAACvY_ubPIP9gwoLTA',
            'description'=>'Ссылка на груповой чат телеграмм',
        ]);CustomField::create([
            'name'=> 'twiter',
        ]);CustomField::create([
            'name'=> 'vk',
        ]);CustomField::create([
            'name'=> 'fb',
        ]);CustomField::create([
            'name'=> 'e-mail',
            'value' => 'ms20auto@gmail.com',
            'description' => 'e-mail компании'
        ]);CustomField::create([
            'name'=> 'work_time',
            'value' => '09:00 - 19:00',
            'description' => 'Время работы'
        ]);CustomField::create([
            'name'=> 'adress',
            'value' => 'ул. Москаленко 20',
            'description' => 'адресс компании'
        ]);
    }
}

class Pages extends Seeder{
    public function run(){
        Page::create([
            'link' => 'about',
            'title' => 'О нас',
            'text' => "<h2 style=\"font-style:italic\">О компании&nbsp;СТО МЕГА-СЕРВИС</h2>
                                <p>СТО МЕГА-СЕРВИС - это всегда своевременно, удобно быстро и качественно.</p>
                                <p>&nbsp;</p>
                                <p>&nbsp;</p>"
        ]);
        Page::create([
            'link' => 'vacancies',
            'title' => 'Вакансии',
            'text' => "<h2>СТО &quot;Мега-сервис&quot; начинает подбор на вакансию:</h2>

<ol>
	<li>Автоэлектрик, диагност-моторист;</li>
	<li>Маляр, рихтовщик;</li>
	<li>Менеджер СТО.</li>
</ol>

<p>&nbsp;</p>

<h3><strong>Условия работы: </strong></h3>

<ul>
	<li>09:00&minus;20:00 пн - пт</li>
	<li>10:00&minus;18:00 сб</li>
	<li>выходной &minus; вс</li>
	<li>З/п: стабильно высокая</li>
</ul>

<p>&nbsp;</p>

<h3><strong>Требования: </strong></h3>

<ol>
	<li>Опыт работы</li>
	<li>Детали при собеседовании</li>
</ol>

<p>СОБЕСЕДОВАНИЕ <a href=\"tel:+380674406611\">+380674406611</a> - Валентин Владимирович.</p>
"
        ]);
    }
}