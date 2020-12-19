<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\baiviet;

class checkpostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $thongbao = baiviet::where('states',0)->get();
        $post = baiviet::where('states','0')->get();
        return view('admin/duyetbai',compact('post','thongbao'));
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
        $data = baiviet::find($id);
        if ($request->has('agree')) {
            $data->states = 1;
            $data->save();
            return redirect('admin/checkpost')->with('thongbao','Duyệt thành công');
        }elseif($request->has('refuse')){
            $data->states = 2;
            $data->save();
            return redirect('admin/checkpost')->with('thongbao','Từ chối thành công');
        }
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
