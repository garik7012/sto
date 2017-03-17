<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\CallBack;
use App\Service;

class OrderController extends Controller
{
    public function add(Request $request)
    {
         isset($request->auto_year) ?  $auto_year = $request->auto_year : $auto_year = '';
         isset($request->auto_brand) ?  $auto_brand = $request->auto_brand : $auto_brand = '';
         isset($request->auto_type) ?  $auto_type = $request->auto_type : $auto_type = '';
         isset($request->auto_mod) ?  $auto_mod = $request->auto_mod : $auto_mod = '';
         isset($request->service_id) ?  $service_id = $request->service_id : $service_id = 1;
         isset($request->order_date) ?  $order_date = $request->order_date : $order_date = '';
         isset($request->order_time) ?  $order_time = $request->order_time : $order_time = '';
         isset($request->fio) ?  $fio = $request->fio : $fio = '';
         isset($request->phone) ?  $phone = $request->phone : $phone = '';
         isset($request->avto_nomer) ?  $avto_nomer = $request->avto_nomer : $avto_nomer = '';
         isset($request->email) ?  $email = $request->email : $email = '';
         isset($request->remind) ?  $remind = +$request->remind : $remind = 1;
         isset($request->comments) ?  $comments = $request->comments : $comments = '';

         //получаем категорию по id, список категорий у нас формируется в провайдере
         $service = Service::select('title')->where('id', $service_id)->get();
         $service = $service[0]->title;

         //сообщение в телеграмм
        $text = " *Заявка на $service * от ```text $fio ``` телефон: ```text $phone ``` * $order_date $order_time * ```text авто: $auto_brand $auto_type ";
  if($auto_year != '') $text .=  " $auto_year г.";
  if($auto_mod != '') {
      $text .=  " модификация $auto_mod ```";
  } else $text .= " ```";
        if($email != '') $text .= " e-mail: $email ";
        if($comments != ''){
            $text = $text . " также он оставил сообщение: ```text $comments ```";
        }
        $text = urlencode($text);
        $id_chats = [306526429, '-11494395'];
        foreach ($id_chats as $id_chat) {
            $sendlink = "https://api.telegram.org/bot372613073:AAE4nx6m1XVLKpBCNOK0skkj_MioeoD5D88/sendMessage?chat_id={$id_chat}&parse_mode=Markdown&text=$text";
            $fp = fopen($sendlink, 'r');
            fclose($fp);
        }


        //сохраняем заявку в базу данных
        $order = new Order;
         $order->auto_year = $auto_year;
         $order->auto_brand = $auto_brand;
         $order->auto_type = $auto_type;
         $order->auto_mod = $auto_mod;
         $order->service_id = $service_id;
         $order->order_date = $order_date;
         $order->order_time = $order_time;
         $order->fio = $fio;
         $order->phone = $phone;
         $order->avto_nomer = $avto_nomer;
         $order->email = $email;
         $order->remind = $remind;
         $order->comments = $comments;
         $order->save();
         return view('actions.success');

    }

    public function callback(Request $request)
    {
        $fio = $request->fio;
        $phone = $request->phone;
        $message = $request->message;
        $text = " *Обратный звонок от* ```text $fio ``` телефон: ```text $phone ```";
        if ($message != '') {
            $text = $text . "также он оставил сообщение: ```text $message ```";
        }
        $text = urlencode($text);
        // $id_chats = [306526429, '-181524082', '-11494395'];
        $id_chats = [306526429, '-11494395'];
        foreach ($id_chats as $id_chat) {
        $sendlink = "https://api.telegram.org/bot372613073:AAE4nx6m1XVLKpBCNOK0skkj_MioeoD5D88/sendMessage?chat_id={$id_chat}&parse_mode=Markdown&text=$text";
        $fp = fopen($sendlink, 'r');
        fclose($fp);
        }
        $order = new CallBack;
        $order->fio = $fio;
        $order->phone = $phone;
        $order->message = $message;
        $order->save();
        return view('actions.success');
    }

}
