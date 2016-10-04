<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    protected $table = "posts";
    protected $fillable = array('judul', 'isi', 'tag', 'user', 'status', 'jenis');
}
