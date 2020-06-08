<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mapper;
use App\Tso;
use App\Thana;
use App\MappedTso;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;




class TsoMappingController extends Controller
{
    //
    public function index(Request $request){
        $mapped_Tso = Mapper::all();
        $x=array();
        foreach($mapped_Tso as $object){
            $officer = Tso::find($object->tso_id);
            $thana = Thana::find($object->thana_id);
            array_push($x,
            [
                'id'=>$object['id'],
                'name' => $officer['name'],
                'thana' => $thana['name'],
                'is_active' => $object['is_active']
            ]);

            $data = $this->pagination($x,$request);
        }

        return view('map-tso.index',compact('data'));
    }

    public function pagination($x,$request){
            $currentPage = LengthAwarePaginator::resolveCurrentPage();
            $itemCollection = collect($x)->sortByDesc('id');
            $perPage = 10;
            $currentPageItems = $itemCollection->slice(($currentPage * $perPage) - $perPage, $perPage)->all();
            $paginatedItems= new LengthAwarePaginator($currentPageItems , count($itemCollection), $perPage);
            $paginatedItems->setPath($request->url());
            return $paginatedItems;
    }
    
    public function create(){
        
        $map = new Mapper();
        $thanas = Thana::orderBy('name')->pluck('name','id')->prepend('Select Thana','');
        $officers = Tso::orderBy('name')->pluck('name','id')->prepend('Select Officer','');
        return view('map-tso.create',compact('officers','thanas','map'));
    }

    public function edit($id){
        $map = Mapper::findOrFail($id);
        $thanas = Thana::orderBy('name')->pluck('name','id')->prepend('Select Thana','');
        $officers = Tso::orderBy('name')->pluck('name','id')->prepend('Select Officer','');
        return view('map-tso.edit',compact('map','thanas','officers'));
    }

    public function store(Request $request){
        $request->validate([
            'tso_id' => 'required',
            'thana_id' => 'required'
        ]);
        //dd($request->all());
        Mapper::create($request->all());
        return redirect()->route('map.index')->with('message','TSO Mapping has been added successgfully');
    }
    public function update($id,Request $request){
        //dd($request->all());
        $map = Mapper::findorFail($id);
        $map->update($request->all());
        return redirect()->route('map.index')->with('message',"Mapping has been updated sueccessfully");
    }

    public function show($id){
        $map = Mapper::findorFail($id);
        $officer = Tso::find($map->tso_id);
        $thana = Thana::find($map->thana_id);
        $data = [
            'id' => $map->id,
            'name' => "$officer->name",
            'thana' => "$thana->name",
            'is_active' => $map->is_active
        ];
        return view('map-tso.show',compact('data'));
    }
}
