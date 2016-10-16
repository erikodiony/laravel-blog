<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class feedback extends Model
{
    protected $table = "feedbacks";
    protected $fillable = array('isi', 'user', 'status', 'ip', 'token');
}
