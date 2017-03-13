<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;

class OrderController extends Controller
{
    public function add(Request $request){
        $order = new Order;
        $order->auto_year = $request->auto_year;
        $order->auto_brand = $request->auto_brand;
        $order->auto_type = $request->auto_type;
        $order->auto_mod = $request->auto_mod;
        $order->service_id = $request->service_id;
        $order->order_date = $request->order_date;
        $order->order_time = $request->order_time;
        $order->fio = $request->fio;
        $order->phone = $request->phone;
        $order->avto_nomer = $request->avto_nomer;
        $order->email = $request->email;
        $order->remind = $request->remind;
        $order->comments = $request->comments;
        $order->save();
        return view('actions.success');
    }

}
