@extends('layouts.default')
@section('content')
    <div class ="container">
        <h1>Menu ID: {{$menu->id}}</h1>
        <p>Menu Name: {{$menu->name}}</p>
        <p>Calories: {{$menu->calories}}</p>
        <p>Description: {{$menu->description}}</p>
        <a href ="{{action('MenusController@edit',['id' => $menu->id])}}" class = "btn btn-default">
            Edit this Menu
        </a>
    </div>
@endsection