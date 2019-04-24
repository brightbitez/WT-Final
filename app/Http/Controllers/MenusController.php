<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Menu;
class MenusController extends Controller
{

    public function index()
    {
        $menus = Menu::all();
        return view('menus.index',['menus'=> $menus]);
    }
    public function create()
    {
        return view('menus.create');
    }
    public function store(Request $request)
    {
        //mass assignment
        $menu = new Menu;
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->calories = $request->input('calories');
        $menu->description = $request->input('description');
        $menu->save();
        return redirect() -> action ('MenusController@index');
    }

    public function show($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.show',['menu' => $menu]);
    }
    public function edit($id)
    {
        $menu = Menu::findOrFail($id);
        return view('menus.edit',['menu'=>$menu]);
    }
    public function update(Request $request, $id)
    {
        $menu = Menu::findOrFail($id);
        $menu->name = $request->input('name');
        $menu->price = $request->input('price');
        $menu->calories = $request->input('calories');
        $menu->description = $request->input('description');
        $menu ->save();
        return redirect() ->action('MenusController@show',['id' => $menu->id]);
    }

    public function destroy($id)
    {
        //
    }

}
