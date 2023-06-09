@extends('layout.app')

@section('titlePage')
laravel App | Home
@endsection

@section('content')
@foreach( $movie as $elem )
<h2>{{ $elem['title'] }}</h2>
@endforeach

<h1>hello home</h1>
@endsection