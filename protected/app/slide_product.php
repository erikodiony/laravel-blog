<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class slide_product extends Model
{
    protected $table = "slide_products";
    protected $fillable = array('label', 'string_url', 'user');
}
