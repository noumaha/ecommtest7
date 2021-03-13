@section('navbar')
<ul>
    <li><a href="/">home</a></li>
    <li><a href="{{ route('myabout' , 5) }}">about</a></li>
    <li><a href="{{ route('mycon')}}">contact</a></li>
</ul>
@show
