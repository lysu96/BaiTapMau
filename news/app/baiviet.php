<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class baiviet extends Model
{
    //
    protected $table = 'baiviet';
    protected $fillable = ['tieude','noidung','anh','states','id_danhmuc','id_khach'];
    public function poster(){
    	return $this->belongsTo('App\User','id_khach','id');
    }
    public function category(){
    	return $this->belongsTo('App\danhmuc','id_danhmuc','id');
    }
    public function user(){
    	return $this->belongsTo('App\User','id_khach','id');	
    }
}
