{{-- include or extend of master header  --}}
@extends('layout.master') 

{{-- overload of title  --}}
@section('title' , 'know about us') 

{{-- overload of contact  --}}
@section('contact')
    <h1>this is id</h1>
    <h3> {{ $theid }} </h3>
@endsection


@section('hello')
{{-- overload of hello plus the existance of it  --}}
@parent 
Iam about blade
@endsection