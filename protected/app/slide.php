<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide extends Model
{
    protected $table = 'slides';
    protected $fillable = array('slide_ke', 'judul', 'isi', 'string_url');
}
