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


                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
