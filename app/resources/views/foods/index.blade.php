@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="foods col-md-12">
                All foods
                @if (count($foods) > 0)
                <div class="mb-3 " style="max-width: 540px;">
                    @foreach ($foods as $food)
                        <a href="{{route('foods.show',['food'=>$food['id']])}}">
                            <div class="row g-0">
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
                            </div>
                        </a>
                    @endforeach
                  </div>
                  @else
                  <p>there are no foods to display</p>
           @endif
            </div>
        </div>
    </div>
</div>
@endsection
