@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="row row-cols-1 row-cols-md-3 g-4">
                    @foreach ($foods as $food)
                        <div class="col food  trigger">
                            <a href="" class="text-decoration-none text-black">

                            <div class="card h-100">
                                    <img src="/image/{{$food['cover']}}"   class="card-img-top" >
                                    <div class="card-body">
                                    <h5 class="card-title text-center"> <strong>{{$food['name']}}</strong></h5>
                                    <h6 class="card-title  btn btn-outline-warning text-center"> <strong>{{$food['price']}} DH</strong></h6>
                                    </div>
                            </div>
                        </a>

                        </div>
                @endforeach
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
