<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; 
class FoodController extends Controller
{
    public function index()
    {
        return view('foods.index',[
            'foods'=>Food::all()
        ]);
    }
    public function allFoods()
    {
        return view('dashboard',[
            'foods'=>Food::all()
        ]);
    }
    public function menu()
    {
        return view('menu',[
            'foods'=>Food::all()
        ]);
    }

    public function create()
    {
       return view('foods.create');
    }

    public function store(Request $request){

        $request->validate([
            'name'=>'required',
            'cover'=>'required',

        ]);
        $food = new Food();
        $food->name = strip_tags ( $request->input('name'));
        $food->price =strip_tags ($request->input('price'));
        if($cover = $request->file('cover')){
            $dist_path = 'image/';
            $cover_name= date('YmdHis') . '.' . $cover->getClientOriginalExtension();
            $cover->move( $dist_path,  $cover_name);
        }
        $inp['cover']="$cover_name";
        
        $food->fill($inp);
        $food->save();
       
        return redirect()->route('foods.index');
    }

    public function show($food){
        return view('foods.show',[
            'food'=> Food::findOrFail($food)
        ]);
    }
 
    public function edit($id){
        return view('foods.edit',[
            'food'=>Food::findOrFail($id)
        ]);
    }

    public function update(Request $request, $id){   
    $request->validate([
        'name'=>'required',
        'price'=>['required','integer'],
    ]);

        $update=Food::findOrFail($id);
        $update->name= $request->input('name');
        $update->cover= $request->input('cover');
        $update->price= $request->input('price');

        if($cover = $request->file('cover')){
            $dist_path = 'image/';
            $cover_name= date('YmdHis') . '.' . $cover->getClientOriginalExtension();
            $cover->move( $dist_path,  $cover_name);
        }
        $inp['cover']="$cover_name";
        
        $update->fill($inp);
        $update->save();
        return redirect()->route('foods.index', $id);
    }
    public function destroy($id){
        $delete = Food::findOrFail($id);
        $delete->delete();
        return redirect()->route('foods.index');
    }
}
