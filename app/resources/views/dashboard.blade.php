@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="p-2 gap-4 m-2 text-decoration-none">
                    <a class="p-2 gap-4 m-2" href="{{route('foods.index')}}">Foods</a>
                    <a class="p-2 gap-4 m-2" href="{{route('foods.create')}}">Add Food</a>
                    <a class="p-2 gap-4 m-2" href="#">Edit Food</a>
                </div>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{-- {{ __('You are logged in!') }} --}}
                </div>             
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($foods as $food)
                    <div class="col">
                      <div class="card h-100">
                        {{-- <img src="./images/Pancakes.jpg" class="card-img-top" alt="..."> --}}
                        <img src="/image/{{$food['cover']}}"   class="card-img-top" >

                        <div class="card-body">
                          <h5 class="card-title">{{$food['name']}}</h5>
                        </div>
                      </div>
                    </div>
                @endforeach

                    
                    {{-- <a href="{{route('foods.show',['food'=>$food['id']])}}"> --}}
                        {{-- <div class="row g-0">
                            <div class="col-md-4">
                                <img src="/image/{{$food['cover']}}"   class="img-fluid rounded-start" >
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card-body">
                                <h5 class="card-title">{{$food['name']}}</h5>
                                <p class="card-text "><small class=" price text-muted">{{$food['price']}} dh</small></p>
                                <div>
                                    <a href="{{route('foods.edit',$food->id)}}">
                                        <button class="btn btn-edit">Edit </button>
                                    </a>
                                </div>
                                </div>
                            </div>
                        </div> --}}
                    {{-- </a> --}}
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
