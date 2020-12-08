<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function insert()
    {
        $name= "ranveer";
        $price= "100";
        $order= new Order();
        $order->name= $name;
        $order->price= $price;
        $order->save();
        return $order;
    }   

    // creating a method to fetch all the records
    public function fetch() 
    {
       $orders= Order::all();
       return view('orders',compact('orders'));
    }
}
