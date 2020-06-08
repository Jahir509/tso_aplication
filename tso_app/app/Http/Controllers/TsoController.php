<?php

namespace App\Http\Controllers;
use App\Tso;

use Illuminate\Http\Request;

class TsoController extends Controller
{
    //
    public function index(){
        $tso_list = Tso::orderBy('id','desc')->paginate(10);
        return view('tso.index',compact('tso_list'));
    }
    public function create(){
        $tso = new Tso();
        $tso->id = Tso::get()->last()->id+1;
        return view('tso.create',compact('tso'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'mobile_no' => 'required'
        ]);
        //dd($request->all());
        Tso::create($request->all());
        return redirect()->route('tso.index')->with('message','Contact has been added Successfully');
    }
    public function edit($id){
        $tso = Tso::findOrFail($id);
        return view('tso.edit',compact('tso'));
    }
    public function update($id,Request $request)
    {
        # code...
        //dd($request->all());
        $tso = Tso::findOrFail($id);
        $tso->update($request->all());
        return redirect()->route('tso.index')->with('message','TSO has been updated successfully');
        
    }

    public function show($id){
        $data = Tso::findorFail($id);
        return view('tso.show',compact('data'));
    }
    
}
