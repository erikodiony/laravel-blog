<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Redirect;
use App\feedback;

class ctrl_umpan extends Controller
{
   public function show_testimoni() {
    	if (Auth::check() == true)
        {   
            $query = Input::get('q');
            $testimoni = feedback::find($query);
            return $testimoni;
        }
        else
        {
            return Redirect::to('/account');
        }
   }

    public function edit_testimoni() {
        if (Auth::check() == true) {
            $testimoni = new feedback;
            if (Input::get('txt_id_testi_pending') != null) {
                $testimoni = feedback::where('id', Input::get('txt_id_testi_pending'))->first();
                $testimoni->status = Input::get('txt_status_testi_pending');
                $testimoni->save();
            }
            else {
                $testimoni = feedback::where('id', Input::get('txt_id_testi'))->first();
                $testimoni->status = Input::get('txt_status_testi');
                $testimoni->save();   
            }
        }
        else {
            return Redirect::to('/account');
        }
   }

    public function delete_testimoni() {
        if (Auth::check() == true) {
            $query = Input::get('q');
            $testimoni = feedback::find($query)->delete();
        }
        else {
            return Redirect::to('/account');
        }
    }


}
