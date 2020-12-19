<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use APP\model_muon;
use APP\model_sach;
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
    	$data = model_sach::all()->toArray();
        var_dump($data);
    	// return view('QL_TV.list',['sach'=>$data]);
    }
}
