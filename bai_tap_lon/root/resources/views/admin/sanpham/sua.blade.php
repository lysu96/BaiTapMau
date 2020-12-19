@extends('layouts.master')

@section('title','Sửa sản phẩm - Shop bán điện thoại Phone Store')

@section('content')

<div class="container">
        <form class="form-horizontal" role="form" method="POST" action="{{Route('suasp')}}" enctype="multipart/form-data">
           {{csrf_field()}}
<?php foreach ($sp as $value) {
    
 ?>
           <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <h2>Sửa sản phẩm</h2>
                <hr>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Tên sản phẩm</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="hidden" name="id" value="{{$value->id}}">
                        <input type="text" name="tenSP" class="form-control" 
                        value="{{$value->tenSP}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Link</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="link" class="form-control" 
                        value="{{$value->link}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Mô tả</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="moTa" class="form-control" 
                        value="{{$value->moTa}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Thông tin chi tiết</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="thongTinChiTiet" class="form-control" 
                        value="{{$value->thongTinChiTiet}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Giá</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="gia" class="form-control" 
                        value="{{$value->gia}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Màu sắc</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="mauSac" class="form-control" 
                        value="{{$value->mauSac}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Bảo hành</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="baoHanh" class="form-control" 
                        value="{{$value->baoHanh}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Khuyễn mãi</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="khuyenMai" class="form-control" 
                        value="{{$value->khuyenMai}}" required autofocus>
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
            <div class="col-md-3 field-label-responsive">
                <label for="name">Màn hình</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="manHinh" class="form-control" 
                        value="{{$value->manHinh}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Băng tần,sim</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="bangTan_Sim" class="form-control" 
                        value="<?= $value->bangTan_Sim ?>" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Bộ nhớ trong</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="boNhoTrong" class="form-control" 
                        value="{{$value->boNhoTrong}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Ram</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="ram" class="form-control" 
                        value="{{$value->ram}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">CPU</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="cpu" class="form-control" 
                        value="{{$value->cpu}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">GPU</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="gpu" class="form-control" 
                        value="{{$value->gpu}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Hệ điều hành</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="heDieuHanh" class="form-control" 
                        value="{{$value->heDieuHanh}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Cam trước</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="camTruoc" class="form-control" 
                        value="{{$value->camTruoc}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Cam sau</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="camSau" class="form-control" 
                        value="{{$value->camSau}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Pin</label>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <input type="text" name="pin" class="form-control" 
                        value="{{$value->pin}}" required autofocus>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 field-label-responsive">
                <label for="name">Hãng sản xuất</label>
            </div>
            <div class="col-md-6">
            	<div class="form-group">
                    <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                        <div class="input-group-addon" style="width: 2.6rem"></div>
                        <select name="id_hsx" >
                	<?php foreach ($hsx as $vl): ?>
                		<option value="{{$vl['id']}}">{{$vl['tenHSX']}}</option>
                	<?php endforeach ?>
                </select>
                    </div>
                </div>
<?php }  
 ?>                
            </div>
        </div>
        
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <button type="submit" class="btn btn-success"><i class="fa fa-user-plus"></i> Sửa</button>
            </div>
        </div>
    </form>
</div>
@endsection