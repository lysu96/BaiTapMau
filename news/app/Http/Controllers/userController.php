<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiviet;
use App\danhmuc;
use Carbon\Carbon;
class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $danhmuc = danhmuc::all();
        $noibat2 = baiviet::where([['states',1]])->orderBy('noibat','desc')->first();
        $noibat1 = baiviet::where([['states',1]])->orderBy('noibat','desc')->offset(1)->limit(2)->get();
        $noibat11 = baiviet::where([['states',1]])->orderBy('noibat','desc')->offset(3)->limit(2)->get();
        $data = baiviet::orderBy('updated_at','desc')->get();
        return view('user/home',compact('noibat1','danhmuc','noibat2','noibat11','data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $data = baiviet::find($id);
        $data->noibat = $data->noibat+1;
        $data->save();
        return view('user/detail',compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
