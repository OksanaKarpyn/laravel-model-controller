@extends('layout.app')

@section('titlePage')
laravel App | Movie
@endsection

@section('content')



<div class="wrapper">
    <div class="container">
        <h1 class="my-4">Movie card</h1>
        <div class="row">
            @foreach( $movie as $elem )
            <div class="col-3  d-flex flex-column">
                <div class="card flex-grow-1 my-3" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1682687219640-b3f11f4b7234?ixlib=rb-4.0.3&ixid=M3wxMjA3fDF8MHxlZGl0b3JpYWwtZmVlZHwyNXx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=500&q=60"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h2 class="card-title">{{ $elem['title'] }}</h2>
                        <p class="card-text">{{$elem['original_title']}}</p>
                        <span>{{$elem['nationality']}}</span>
                        <span>{{$elem['date']}}</span>
                        <p class="card-text">{{$elem['vote']}}</p>

                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>






@endsection