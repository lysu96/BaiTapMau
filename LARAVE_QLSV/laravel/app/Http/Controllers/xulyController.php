<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sach;
class xulyController extends Controller
{
    public function getadd()
    {
    	
    	return view('QL_TV.add');
    }
    public function getedit()
    {
    	return view('QL_TV.edit');
    }
    public function getlist()
    {
    	$data = sach::all();
    	return view('QL_TV.list',['sach'=>$data]);
    }
}
