<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{'/css/app.css'}}">
    <title>Clean Food Delivery</title>
</head>

<body>
<style>
    td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
    }

</style>
@include('layouts._navbar')
@yield('content')

<footer>
    Clean Food Delivery
</footer>
</body>
</html>