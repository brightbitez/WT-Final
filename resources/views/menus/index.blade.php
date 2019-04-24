@extends('layouts.default')


@section('content')
    <div class ="container">
        <h1>Our Menu</h1>
        <div>
            <a href ="{{action('MenusController@create')}}" method ="post">
                Create New Menu
            </a>

        </div>
        <table>
            <tr>
                <th>Menu Name</th>
                <th>Calories</th>
                <th>Price</th>
                <th>Description</th>
                <th>Edit</th>
            </tr>
            @foreach($menus as $menu)
                <tr>
                    <td>{{$menu -> id}}</td>

                    <td>
                        {{$menu -> name}}
                    </td>
                    <td>
                        {{$menu -> price}}
                    </td>
                    <td>
                    {{$menu ->description}}
                    </td>
                    <td><a href ="{{action('MenusController@show',['id' => $menu ->id])}}">EDIT</a></td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection



