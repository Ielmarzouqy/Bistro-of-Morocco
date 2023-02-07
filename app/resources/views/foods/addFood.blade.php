 @extends('layout')
@section('content')
    {{-- @section('title', 'Add Food') --}}
    
                <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                    <div class=" justify-center pt-8 sm:justify-start sm:pt-0">
                      
                        <form  method="POST" enctype="multipart/form-data">
                            <div class=" row  p-4">
                                <div  class="row">
                                    <h3 class="text-start " >Add Food</h3>
                                    <div class=" items-center  gap-2 flex-column">
                                            <div class=" align-content-stretch gap-5 flex-wrap">
                                                <div class="grid gap-0 bg-white row-gap-3">
                                                    <div class=" name p-2  ">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" class=" " placeholder="Food" name="food" id="food"required>
                                                    </div>
                                                    <div class="name">
                                                        <i class="fas fa-user"></i>
                                                        <input type="file" placeholder="image" name="image" id="image" required>
                                                    </div>
                                                    <div class="name">
                                                        <i class="fas fa-user"></i>
                                                        <input type="text" placeholder="Description" name="description" id="description" required>
                                                    </div>                        
                                                </div>
                                            </div>
                                        <div class="button ">
                                            <button id="send" type="submit" class="btn g-col-12 text-blue-700  bg-green-300 my-4" name="save">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>    
                </div>
            </div>
         {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
@endsection
           
  
   