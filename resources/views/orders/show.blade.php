@extends('layouts.default')
@section('content')
    <div class ="container">
        <h1>Order ID: {{$order->id}}</h1>
        <p>Ordered Menus:
            @foreach($order->menus as $menu)
                    {{$menu -> name }},
                @endforeach
        </p>

    </div>
@endsection