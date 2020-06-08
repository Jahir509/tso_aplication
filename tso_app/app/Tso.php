<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tso extends Model
{
    //
    protected $table ="tbl_tso_list";
    protected $fillable = ['id','name','mobile_no','is_active','hr_id'];
    public $timestamps = false;
}
