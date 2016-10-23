<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Redirect;
use Carbon\Carbon;
use App\stat;

class ctrl_stat extends Controller
{
    public function show()
    {
        if (Auth::check() == true)
        {   
            $query = Input::get('id');
            $stat = stat::find($query);
            return $stat;
        }
        else
        {
            return Redirect::to('/account');
        }
    }
}
