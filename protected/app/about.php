<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class about extends Model
{
    protected $table = 'abouts';
    protected $fillable = array('body', 'user');
}
