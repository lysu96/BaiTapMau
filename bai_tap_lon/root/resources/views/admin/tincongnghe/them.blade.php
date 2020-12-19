@extends('layouts.master')

@section('title','Thêm tin công nghệ - Shop bán điện thoại Phone Store')

@section('content')

<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{Route('themtincongnghe')}}" enctype="multipart/form-data">
           {{csrf_field()}}
           <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Thêm tin công nghệ</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Tên tin</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="tenTin" class="form-control" 
                        placeholder="" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Nội dung</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="noiDung" class="form-control" 
                        placeholder="" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Anh</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="file" name="anh" class="form-control"  required autofocus>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Thêm</button>
            </div>
        </div>
    </form>
</div>
@endsection