<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\CallBack;

class OrderController extends Controller
{
    public function add(Request $request)
    {
        if (isset($request->from_service)) {
            $order = new Order;
            $order->service_id = $request->service_id;
            $order->order_date = $request->order_date;
            $order->order_time = $request->order_time;
            $order->fio = $request->fio;
            $order->phone = $request->phone;
            $order->email = $request->email;
            $order->save();
            return view('actions.success');
        } else {
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

    public function callback(Request $request){
        $order = new CallBack;
        $order->fio = $request->fio;
        $order->phone = $request->phone;
        $order->message = $request->email;
        $order->save();
        return view('actions.success');
    }

}
