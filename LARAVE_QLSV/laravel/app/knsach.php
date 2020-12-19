<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class knsach extends Model
{
    protected $table = "sach";
    public function getData()
    {
       return $this->hasMany('App\knmuon','maSach','id');
    }
    
}
