@extends('layouts.default')



@section('content')

    <div class ="container">
        <h1>Create New Menu</h1>
        <form action="{{action('MenusController@store')}}" method ="post">
            @csrf
            <div>
                <label for ="id">Menu ID</label>
                <input type ="text" id="id" name ="id"/>
            </div>

            <div>
                <label for ="name">Menu Name</label>
                <input type ="text" id="name" name ="name"/>
            </div>
            <div>
                <label for ="price">Price</label>
                <input type ="text" id="price" name ="price"/>
            </div>
            <div>
                <label for ="calories">Calories</label>
                <input type ="text" id="calories" name ="calories"/>
            </div>

            <div>
                <label for ="description">Description</label>
                <input type ="text" id="description" name ="description"/>
            </div>

            <div>

                    <input type="submit" value=" Save " />
                    <button type = "reset">Reset</button>

            </div>

        </form>




    </div>


@endsection