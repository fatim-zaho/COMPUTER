<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Models\Computer;
use Illuminate\Http\Response;

class PsController extends Controller
{
  /**private static function getData(){
    return [
        ['id'=>1 , 'name'=>'DELL','origin'=> 'koria'],
        ['id'=>2 , 'name'=>'HP','origin'=> 'USA'],
        ['id'=>3 , 'name'=>'LG','origin'=> 'GERMY'],

    ];
}*/

    public function index()
    {
        return view('ps.index' ,[
            'ps'=> Computer::all()] );}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { return view('ps.create');}
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){
        $request->validate([
            'ps-name' =>'required',
            'ps-origin'=>'required',
            'ps-price'=>['required','integer'],
        ]);
       $p= new Computer();
       $p -> name = strip_tags( $request -> input('ps-name'));
       $p -> origin =  strip_tags($request -> input('ps-origin'));
       $p -> price =  strip_tags($request -> input('ps-price'));
       $p ->save();
       return redirect()->route('ps.index');
     }

    /**
     * Display the specified resource.
     */
    public function show($p){
        return view ('ps.show',[
            'p'=>Computer::findOrFail($p)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($p)
    {
        return view ('ps.edit',[
            'p'=>Computer::findOrFail($p)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $p)
    {
        $request->validate([
        'ps-name' =>'required',
        'ps-origin'=>'required',
        'ps-price'=>['required','integer'],
    ]);
    $to_update= Computer::findOrFail($p);
    
    $to_update -> name = strip_tags( $request -> input('ps-name'));
    $to_update -> origin =  strip_tags($request -> input('ps-origin'));
    $to_update -> price =  strip_tags($request -> input('ps-price'));
    $to_update ->save();
    return redirect()->route('ps.show',$p);

       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $p): RedirectResponse
    {
        $to_delete = Computer::findOrFail($p);
        $to_delete ->delete();
        return redirect()->route('ps.index');
    }
}
