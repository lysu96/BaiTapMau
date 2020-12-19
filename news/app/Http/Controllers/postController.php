<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\baiviet;
use App\danhmuc;
use Illuminate\Support\Facades\File;
use Auth;
class postController extends Controller
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
        $category = danhmuc::get();
        $post = baiviet::where('id_khach',Auth::user()->id)->get();
        return view('admin/baiviet',compact('post','category','thongbao'));
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
        $validatedData = $request->validate([
            'danhmuc' => 'numeric',
            'tieude' => 'required',
            'mota' => 'required',
            'noidung' => 'required',
            'anh' => 'required|image',

        ],[
            'danhmuc.numeric' => 'Bạn chưa chọn ranh mục',
            'tieude.required' => 'Bạn chưa nhập tiêu đề',
            'mota.required' => 'Bạn chưa nhập mô tả',
            'noidung.required' => 'Bạn chưa nhập nội dung',
            'anh.required' => 'Bạn chưa chọn ảnh đại diện cho bài viết',
            'anh.image' =>'Upload đúng ảnh dạng jpeg, png, bmp, gif, or svg'    
        ]);
        $post = new baiviet();
        $post->id_danhmuc = $request->danhmuc;
        $post->id_khach = Auth::user()->id;
        $post->tieude = $request->tieude;
        $post->mota = $request->mota;
        $post->noidung = $request->noidung;
        $file = $request->file('anh');
        $filename = $file->getClientOriginalName();
        $filedata = str_random(10).'_'.$filename;
        $file->move('images/poster',$filedata);
        $post->anh = 'images/poster/'.$filedata;
        $post->save();
        return redirect('/admin/post')->with('thongbao','Thêm thành công');
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
        // echo "<pre>";
        // var_dump($request->toArray());
        $validatedData = $request->validate([
            'danhmuc' => 'numeric',
            'tieude' => 'required',
            'mota' => 'required',
            'noidung' => 'required',
            'anh' => 'image',

        ],[
            'danhmuc.numeric' => 'Bạn chưa chọn ranh mục',
            'tieude.required' => 'Bạn chưa nhập tiêu đề',
            'mota.required' => 'Bạn chưa nhập mô tả',
            'noidung.required' => 'Bạn chưa nhập nội dung',
            'anh.image' =>'Upload đúng ảnh dạng jpeg, png, bmp, gif, or svg'    
        ]);
        $post = baiviet::find($id);
        $post->id_danhmuc = $request->danhmuc;
        $post->id_khach = Auth::user()->id;
        $post->tieude = $request->tieude;
        $post->mota = $request->mota;
        $post->noidung = $request->noidung;
        if ($request->hasFile('anh')) {
            $file = $request->file('anh');
            $filename = $file->getClientOriginalName();
            $filedata = str_random(10).'_'.$filename;
            $file->move('images/poster',$filedata);
            $post->anh = 'images/poster/'.$filedata;
            File::delete($request->anhcu);
        }else{
            $post->anh = $request->anhcu;
        }
        $post->save();
        if(Auth::user()->role==2) return redirect('/admin/post')->with('thongbao','Sửa thành công');
        return redirect('/customer/post')->with('thongbao','Sửa thành công');
        
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
        $data = baiviet::find($id);
        File::delete($data->anh);
        $data->delete();
        return redirect('/admin/post')->with('thongbao','Xóa thành công');
    }
}
