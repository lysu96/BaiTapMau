<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class binhluan extends Model
{
    //
    protected $table='binhluan';
    protected $fillable =['noidung','id_khach','id_baiviet','states'];
}
