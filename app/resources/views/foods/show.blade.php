@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-2 gap-4 m-2 text-decoration-none">
                 details
                </div>
                <div class="card-header"></div>
                <div class=" text-primary card-body">
                 <h1>{{$food['name']}}
                    <strong>
                        {{$food['price']}}
                    </strong>
                 </h1>
                </div>
                <div>
                    <img src="/image/{{$food['cover']}}"   class="card-img-top">
                </div>
                <div>
                    <form action="{{route('foods.destroy', $food->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
