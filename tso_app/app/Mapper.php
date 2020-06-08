<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mapper extends Model
{
    //
    protected $table ="tbl_tso_thana_map";
    protected $fillable = ['tso_id','thana_id','is_active'];
    public $timestamps = false;



}
