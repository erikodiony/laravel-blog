<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = "menus";
    protected $fillable = array('isi', 'jenis', 'user');
}
