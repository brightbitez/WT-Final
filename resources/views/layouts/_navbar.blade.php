
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{url('menus')}}">Menus<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('order')}}">Manage Orders (Admin)<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('manage-points')}}">Manage Points (Admin)<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('manage-points')}}">My Points (User)<span class="sr-only"></span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="{{url('customer/order')}}">Order (Customer)<span class="sr-only"></span></a>
            </li>
        </ul>
    </div>
</nav>