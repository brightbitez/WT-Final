<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Menu;
class ManageOrdersController extends Controller
{
    public function index()
    {
        $orders = Order::all();
        return view('orders.index',['orders'=> $orders]);
    }
    public function show($id){
        $order = Order::findOrFail($id);
        return view('orders.show',['order' => $order]);
    }
}
