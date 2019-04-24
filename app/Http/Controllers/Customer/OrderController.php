<?php

namespace App\Http\Controllers\Customer;

use App\Menu;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index(){
        $menus = Menu::all();
        return view('customer.createorder',['menus'=> $menus]);
    }
    public function store(){

    }

}
