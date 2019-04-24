@extends('layouts.default')



@section('content')
    <div class ="container">
        <h1>Create Order</h1>
        <form>
            @csrf

            <div>
                <label for ="name">Select Menus</label>
                <select name="name">
                    @foreach($menus as $menu)
                        <option value="{{ $menu->name}}">{{ $menu->name}}</option>
                    @endforeach
                </select>
                Quantity:
                <input type = "text">
            </div>


            <div>

                <input type="submit" value=" Save " />
                <button type = "reset">Reset</button>

            </div>

        </form>




    </div>


@endsection