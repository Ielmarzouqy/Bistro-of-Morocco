@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="p-2 gap-4 m-2 text-decoration-none">
                  All foods
                </div>
                <div class="card-header"></div>

                <div class="card-body">
                 @if (count($foods) > 0)
                    <ul class="">
                        @foreach ($foods as $food)
                         <a href="{{route('foods.show',['food'=>$food['id']])}}">
                                <li class="m-4 p-3">
                                {{$food['name']}} <br>
                                <span class="btn btn-info">{{$food['price']}} dh</span> 
                                </li> 
                         </a>
                        @endforeach
                    </ul>
                 @else
                        <p>there are no foods to display</p>
                 @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
