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
    public function getcongty(){
    	return view('congty');
    }
    public function getungvien(){
    	return view('ungvien');
    }
}
