@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="css/style.css">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="p-2 gap-4 m-2 text-decoration-none">
                 Create new food
                </div>
                <div class="card-header"></div>
                <div class=" text-primary card-body">
             
                </div>
            </div>
        </div>
        <div class="p-4 ml-4">
            <form action="{{route('foods.update', ['food'=>$food->id])}}" method="post" enctype="multipart/form-data" class="border bg-white" >
                @csrf
                @method('PUT')
                <div>
                    <input type="text" name="name" value="{{$food->name}}" placeholder="Name of Food">
                   
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label"></label>
                    <input class="form-control" name="cover"  type="file" id="formFile">
                </div>
                <div>
                    <input type="text" name="price" value="{{$food->price}}" placeholder="Price">   
                             
                </div>
                <div class="d-flex justify-content-center">
                    <button type="submit" name="save" class="btn btn-warning">Update</button>
                </div> 
            </form>
        </div>
    </div>
</div>
@endsection
