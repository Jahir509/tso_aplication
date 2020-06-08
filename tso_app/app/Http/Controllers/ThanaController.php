<?php

namespace App\Http\Controllers;
use App\Thana;
use Illuminate\Http\Request;

class ThanaController extends Controller
{
    //
    public function index(){
        $thanas = Thana::orderBy('zilla_id','asc')->paginate(10);
        return view('thana.index',compact('thanas'));
    }
}
