<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- yield we have to override it if not ? it has a default value  --}}
    <title>@yield('title' , 'htis page has no title')</title>
</head>
<body>
    @include('layout.navebar')

    {{-- yield we have to override it  --}}
    @yield('contact')
   
     {{-- sec we can override it or not  --}}
    @section('hello')
    hello word hi am nouma
    @show
</body>
</html>