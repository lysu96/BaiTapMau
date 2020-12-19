<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\danhmuc;
use App\baiviet;
class categoryController extends Controller
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
        $data = danhmuc::all();
        return view('admin/danhmuc',compact('data','thongbao'));
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
        $data = $request->validate([
            'tendanhmuc' => 'required'
        ],[
            'tendanhmuc.required' =>  'Tên danh mục không được để trống!'
        ]);
        $category = new danhmuc();
        $category->tendanhmuc = $request->tendanhmuc;
        $category->save();
        return redirect('/admin/category')->with('thongbao','Thêm thành công');
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
        $data = $request->validate([
            'tendanhmuc' => 'required'
        ],[
            'tendanhmuc.required' =>  'Tên danh mục không được để trống!'
        ]);
        $category = danhmuc::find($id);
        $category->tendanhmuc = $request->tendanhmuc;
        $category->save();
        return redirect('/home/category')->with('thongbao','Sửa thành công');
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
        danhmuc::find($id)->delete();
        return redirect('/category')->with('thongbao','Xóa thành công');
    }
}
