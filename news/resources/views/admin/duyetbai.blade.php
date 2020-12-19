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
                    {{-- <button class="btn-sm btn-primary float-right" data-toggle="modal" data-target="#exampleModal">Thêm bài viết</button> --}}
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
                          <th>Người đăng</th>
                          <th>Danh mục</th>
                          <th>Tiêu đề</th>
                          <th>Nội dung</th>
                          <th>Ảnh đại diện</th>
                          <th width="150px">Ngày đăng</th>
                          <th width="122px">Duyệt bài</th>
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
                              <button type="button" value="{{$value->noidung}}" class="btn-sm btn-primary noidung" data-toggle="modal" data-target="#exampleModalLong">Click để xem</button>
                            </td>
                            <td class="text-center"><img width="100" src="{{$value->anh}}" alt=""></td>
                            <td>{{Carbon\Carbon::parse($value->updated_at)->format('h:m:s d/m/Y')}}</td>
                            <td class="text-center p-0 pt-3">
                              <form action="{{ route('checkpost.update',$value->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <button value="1" name="agree" class="btn-sm btn-success">Duyệt</button>
                                <button value="0" name="refuse"class="btn-sm btn-danger">Từ chối</button>
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
          if($('tbody tr').length ==0){
            $('tbody').append('<tr class="text-center"><td colspan="8">Không có bài đăng nào cần duyệt</td></tr>');
          }
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
