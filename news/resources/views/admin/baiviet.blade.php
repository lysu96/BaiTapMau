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
                    <strong>Quản lý bài viết</strong>
                    <button class="btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Thêm bài viết</button>
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
                          <th class="">ID</th>
                          <th class="">Người đăng</th>
                          <th class="">Danh mục</th>
                          <th class="">Tiêu đề</th>
                          <th class="">Nội dung</th>
                          <th class="">Ảnh đại diện</th>
                          <th class="">Trạng thái</th>
                          <th class="" width="150px">Ngày đăng</th>
                          <th></th>
                        </tr>
                      </thead>
                      <!-- Button trigger modal -->
                      <tbody>
                        @foreach($post as $value)
                          <tr>
                            <td class="text-center">{{$value->id}}</td>
                            <td class="text-center">{{$value->poster->name}}</td>
                            <td class="text-center">{{$value->category->tendanhmuc}}</td>
                            <td class="">{{$value->tieude}}</td>
                            <td width="125" class="text-center">
                              <button type="button" value="{{$value->noidung}}" class=" btn-sm btn-primary noidung" data-toggle="modal" data-target="#exampleModalLong">Click để xem</button>
                            </td>
                            <td class="text-center"><img width="80" src="{{$value->anh}}" alt=""></td>
                            <td class="text-center">
                              @if($value->states==1)
                              <label style="width: 89px" class="role member">Đã duyệt</label>
                              @endif
                              @if($value->states==0)
                              <label style="width: 89px" class="role user">Đang duyệt</label>
                              @endif
                              @if($value->states==2)
                              <label style="width: 89px" class="role admin">Từ chối</label>
                              @endif
                            </td>
                            <td>{{Carbon\Carbon::parse($value->updated_at)->format('h:m:s d/m/Y')}}</td>
                            <td class="p-1" width="69">
                              <a class="float-left mr-2" target="_blank" href="home/{{$value->id}}"><i class="fa fa-eye"></i></a>
                              <button class="float-left mr-2 edit-btn" data-toggle="modal" data-target="#modaledit" data-id="{{$value->id}}" data-danhmuc="{{$value->id_danhmuc}}" data-anh="{{$value->anh}}" data-tieude="{{$value->tieude}}" data-noidung="{{$value->noidung}}" data-mota="{{$value->mota}}"><i class="fa fa-edit"></i></button>
                              <form class="float-left" action="{{ route('post.destroy',$value->id) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button onclick="return confirm('Bạn chắc chắn xóa chứ?')" value="{{$value->id}}"><i class="fa fa-trash"></i></button>
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
            <form action="@if(Auth::user()->role==1){{asset('customer/post')}}@else {{ route('post.store') }} @endif" method="POST" enctype="multipart/form-data">
              @csrf
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Thêm bài viết mới</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <div class="row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Danh mục</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="danhmuc">
                              <option value="a">--Chọn danh mục--</option>
                              @foreach ($category as $value)
                                <option value="{{$value->id}}">{{$value->tendanhmuc}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Tiêu đề</label>
                          <div class="col-sm-9">
                            <input name="tieude" type="text" class="form-control" placeholder="Tiêu đề bài viết">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Ảnh </label>
                            <div class="col-sm-9">
                              <input name="anh" type="file" class="form-control-file">
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Mô tả ngắn</label>
                          <div class="col-sm-9">
                            <textarea name="mota" class="form-control" placeholder="Viết mô tả ngắn"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <textarea class="summernote" name="noidung">
                        <h3>Lorem Ipsum is simply</h3>
                        dummy text of the printing and typesetting industry. <strong>Lorem Ipsum has been the industry's</strong> standard dummy text ever since the 1500s,
                        when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
                        typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with
                        <br/>
                        <br/>
                        <ul>
                            <li>Remaining essentially unchanged</li>
                            <li>Make a type specimen book</li>
                            <li>Unknown printer</li>
                        </ul>
                    </textarea>
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
      <!-- Modal edit -->
      <div class="modal fade" id="modaledit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content">
            <form id="formedit" method="POST" enctype="multipart/form-data">
              @csrf
              @method('PUT')
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sửa bài viết</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      <div class="form-group col-md-6">
                        <div class="row">
                          <input type="hidden" value="" name="id">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Danh mục</label>
                          <div class="col-sm-9">
                            <select class="form-control" name="danhmuc">
                              <option value="a">--Chọn danh mục--</option>
                              @foreach ($category as $value)
                                <option class="danhmuc" value="{{$value->id}}">{{$value->tendanhmuc}}</option>
                              @endforeach
                            </select>
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Tiêu đề</label>
                          <div class="col-sm-9">
                            <input name="tieude" type="text" class="form-control" placeholder="Tiêu đề bài viết">
                          </div>
                        </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Ảnh </label>
                            <input type="hidden" name="anhcu" value="">
                            <div class="col-sm-9">
                              <input name="anh" type="file" class="form-control-file">
                              <img width="100" height="100" class="xemanhtrc d-inline-block" src="" alt="">
                              <div class="d-none preimg">
                                => <img width="100" height="100" id="blah" src="#" alt="your image"/>
                              </div>
                              
                            </div>
                          </div>
                      </div>
                      <div class="form-group col-md-6">
                        <div class="row">
                          <label for="staticEmail" class="col-sm-3 col-form-label">Mô tả ngắn</label>
                          <div class="col-sm-9">
                            <textarea name="mota" class="form-control" placeholder="Viết mô tả ngắn"></textarea>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-12">
                    <textarea class="summernote" name="noidung">
                      
                    </textarea>
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
          $('.summernote').summernote({
            height: 300,
            popover: {
            image: [],
            link: [],
            air: []
            }
          });
          $('.noidung').click(function(event) {
            $('#exampleModalLong .modal-body').html($(this).val());
          });
          $('.edit-btn').click(function(event) {
            $('input[name=id]').val($(this).data('id'));
            $('.danhmuc').each(function(index, el) {
              if($(this).val()==$('.edit-btn').data('danhmuc')){
                $(this).attr('selected', '');
              };
            });
            $('input[name=tieude]').val($(this).data('tieude'));
            $('.xemanhtrc').attr('src', $(this).data('anh'));
            $('input[name=anhcu]').val($(this).data('anh'));
            $('textarea[name=mota]').text($(this).data('mota'));
            $('.panel-body').html($(this).data('noidung'));
            $('textarea[name=noidung]').text($(this).data('noidung'));
            $('#formedit').attr('action',window.location.href+"/"+$(this).data('id'));
          });
          function readURL(input) {
            if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function(e) {
                $('#blah').attr('src', e.target.result);
              }
              reader.readAsDataURL(input.files[0]);
            }
          }
          $("input[name=anh]").change(function() {
            readURL(this);
            $('.preimg').removeClass('d-none');
            $('.preimg').addClass('d-inline-block');
            
          });
        });

      </script>
@endsection
