<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food; 
class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getData(){
        return [
            ['id'=>1, 'name'=>'macaron', 'price'=>12],
            ['id'=>2, 'name'=>'cake', 'price'=>50],
            ['id'=>3, 'name'=>'coffee', 'price'=>20],

        ];
     }
    public function index()
    {
        return view('foods.index',[
            'foods'=>Food::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('foods.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){


        $request->validate([
            'name'=>'required',
            'cover'=>'required',
            'price'=>['required','integer'],

        ]);
        $food = new Food();
        $food->name = $request->input('name');
        $food->cover = $request->input('cover');
        $food->price = $request->input('price');
        $food->save();
        return redirect()->route('foods.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($food){
        return view('foods.show',[
            'food'=> Food::findOrFail($food)
        ]);
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id  
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
        return view('foods.edit',[
            'food'=>Food::findOrFail($id)

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
