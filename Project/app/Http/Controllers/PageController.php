<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function gettrangchu(){
    	return view('trangchu');
    }
    public function getchitiet(){
    	return view('chitiet');
    }
}
