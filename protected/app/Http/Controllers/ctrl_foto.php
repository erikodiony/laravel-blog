<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Auth;
use Input;
use Redirect;
use Validator;
use File;
use App\photo;

class ctrl_foto extends Controller
{
     public function upload() {
    //Cek Ukuran lebih dari 2mb

        if (Auth::check() == true)
        {
            if (Input::file('txt_gambar') == null)
            {
                return('error_null');
            }
            else 
            {
                if (Input::file('txt_gambar')->getSize() < 2048)
                {
                    return ('error_max_size');
                }
                else 
                {
                    $file = array('gambar' => Input::file('txt_gambar'));
                    $rules = array('gambar' => 'required|mimes:jpg,jpeg,gif,png');
                    $validator = Validator::make($file, $rules);
                    if ($validator->fails()) //Cek Ekstensi File
                    {
                        return ('error_not_valid');
                    }
                    else 
                    {
                        if (Input::file('txt_gambar')->isValid() == true) //Apabila Gambar Valid
                        {
                            $destinationPath = 'assets/img/uploads/';
                            $extension = Input::file('txt_gambar')->getClientOriginalExtension();
                            $fileName = rand(11111,99999).'.'.$extension;   //Acak Nama File
                            Input::file('txt_gambar')->move($destinationPath, $fileName);
                            return($destinationPath . $fileName);
                        }
                        else
                        {
                            return with('error_not_valid');
                        }
                    }
                }
            }
        }

        else
        {
            return Redirect::to('/account');
        }
    }

    public function upload_delete() {
    $query = Input::get('q');
    $public_path_img = 'assets/img/uploads/';
    if (Auth::check() == true) 
        {
            $hapus = ($public_path_img . $query);
            File::delete($hapus);
            return ('success');
        }
    }

    public function save() {
        if (Auth::check() == true)
        {
            $photo = new photo;
            $photo->img = Input::get('txt_gbr_path');
            $photo->judul = Input::get('txt_judul');
            $photo->jenis = Input::get('txt_jenis');
            $photo->user = Auth::User()->usr;
            $photo->save();
        }
        else {
            return Redirect::to('/account');  
        }
    }

}
