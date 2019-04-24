@extends('layouts.default')


@section('content')
    <div class ="container">
        <h1>Customer Orders</h1>
        <div>
        </div>
        <table>
            <tr>
                <th>Order ID</th>
                <th>Ordered Time</th>
                <th>Order Info</th>
                <th>Menus</th>
            </tr>
            @foreach($orders as $order)
                <tr>
                    <td>{{$order -> id}}</td>
                    <td>
                        {{$order -> created_at}}
                    </td>
                    <td><a href ="{{action('ManageOrdersController@show',['id' => $order ->id])}}">Order Info</a></td>
                    <td>
                        @foreach($order->menus as $menu)
                            |{{$menu -> name }} |
                        @endforeach
                    </td>
                </tr>
                @endforeach
        </table>
    </div>
@endsection