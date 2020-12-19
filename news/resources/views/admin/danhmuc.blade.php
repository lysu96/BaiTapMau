@extends('admin/layout/main')
@section('title')
  Bài viết
@endsection
@section('content')
	<div class="main-content">
        <div class="section__content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header">
                    <strong>Quản lý danh mục</strong>
                    <button class="btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Thêm danh mục</button>
                  </div>
                  <div class="card-body">
                    @if(count($errors) > 0)
                      <div class="alert alert-danger">
                          @foreach($errors->all() as $err)
                          {{$err}} <br>
                          @endforeach
                      </div>
                    @endif
                    @if(session('thongbao'))
                      <div class="alert alert-success">
                          {{session('thongbao')}}
                      </div>
                    @endif
                    <table class="table table-bordered" id="">
                      <thead>
                        <tr class="text-center">
                          <th>ID</th>
                          <th>Tên danh mục</th>
                          <th width="150px">Ngày đăng</th>
                          <th></th>
                        </tr>
                      </thead>
                      <!-- Button trigger modal -->
                      <tbody>
                        @foreach($data as $value)
                          <tr>
                            <td class="text-center">{{$value->id}}</td>
                            <td class="text-center">{{$value->tendanhmuc}}</td>
                            <td class="text-center">{{Carbon\Carbon::parse($value->updated_at)->format('h:m:s d/m/Y')}}
                            </td>
                            <td width="60">
                              <button class="float-left mr-2 edit-btn" data-toggle="modal" data-target="#modaledit" data-id="{{$value->id}}" data-tendanhmuc="{{$value->tendanhmuc}}"><i class="fa fa-edit"></i></button>
                              <form action="{{ route('category.destroy',$value->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Dữ liệu liên quan đến mục này sẽ bị xóa hết. Bạn chắc chắn xóa chứ?')" value=""><i class="fa fa-trash"></i></button>
                              </form>
                            </td>
                          </tr>
                        @endforeach
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal add -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm danh mục mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-md-12">
                    <div class="row">
                      <label for="staticEmail" class="text-right col-sm-3 col-form-label">Danh mục</label>
                      <div class="col-sm-7">
                        <input name="tendanhmuc" type="text" class="form-control" placeholder="Nhập tên danh mục">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn-sm btn-primary">Lưu danh mục</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal edit -->
      <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <form id="formedit" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa danh mục</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="form-group col-md-12">
                    <div class="row">
                      <label for="staticEmail" class="text-right col-sm-3 col-form-label">Danh mục</label>
                      <div class="col-sm-7">
                        <input type="hidden" name="id">
                        <input name="tendanhmuc" type="text" class="form-control" placeholder="Nhập tên danh mục">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn-sm btn-secondary" data-dismiss="modal">Thoát</button>
                <button type="submit" class="btn-sm btn-primary">Lưu bài viết</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- Modal nd -->
      <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Nội dung</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Thoát</button>
            </div>
          </div>
        </div>
      </div>
      <script type="text/javascript">
        jQuery(document).ready(function($) {
          $('.edit-btn').click(function(event) {
            $('input[name=tendanhmuc]').val($(this).data('tendanhmuc'));
            $('input[name=id]').val($(this).data('id'));
            $('#formedit').attr('action',window.location.href+"/"+$(this).data('id'));
          });
        });
      </script>
@endsection
