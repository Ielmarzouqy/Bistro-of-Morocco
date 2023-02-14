@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="p-2 gap-4 m-2 text-decoration-none">
                    <a class="p-2 gap-4 text-black text-decoration-none m-2" href="{{route('edit_profile')}}">Edit profile</a>
                    <a class="p-2 gap-4 text-black text-decoration-none m-2" href="{{route('foods.index')}}">Foods</a>
                    <a class="p-2 gap-4 text-black text-decoration-none m-2" href="{{route('foods.create')}}">Add Food</a>

                </div>
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>             
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($foods as $food)
                    <div class="col">
                      <div class="card h-100">
                        <img src="/image/{{$food['cover']}}"   class="card-img-top" >

                        <div class="card-body">
                          <h5 class="card-title">{{$food['name']}}</h5>
                        </div>
                      </div>
                    </div>
                @endforeach
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
