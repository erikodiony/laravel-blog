<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\about;
use App\contact;
use App\slide;
use Input;
use Auth;
use Redirect;
use Validator;
use File;

class ctrl_beranda extends Controller
{
    public function aboutme() {
        
        if (Auth::check() == true) 
        {
            $about = new about;
            $about = about::find(1);
            $about->body = Input::get('txt_body');
            $about->user = Auth::User()->usr;
            $about->save();
        } 
        else
        {
            return Redirect::to('/account');
        }
    }

    public function contactme() {

        if (Auth::check() == true)
        {
            $contact = new contact;
            $contact = contact::find(1);
            $contact->address = Input::get('txt_address');
            $contact->phone = Input::get('txt_phone');
            $contact->email = Input::get('txt_email');
            $contact->other = Input::get('txt_other');
            $contact->user = Auth::User()->usr;
            $contact->save();
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function slide_show()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $slide = new slide;
            $slide = slide::find($query);
            return $slide;
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function slide_save()
    {
        if (Auth::check() == true)
        {
            $slide = new slide;
            $slide = slide::where('slide_ke', Input::get('txt_slide'))->first();
            $slide->slide_ke = Input::get('txt_slide');
            $slide->judul = Input::get('txt_judul');
            $slide->isi = Input::get('txt_isi');
            $slide->string_url = Input::get('txt_url');
            $slide->user = Auth::User()->usr;
            $slide->save();
        }
        else
        {
            return Redirect::to('/account');
        }
    }


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
                        $destinationPath = 'assets/img/uploads/slide/';
                        $extension = Input::file('txt_gambar')->getClientOriginalExtension();
                        $fileName = rand(11111,99999).'.'.$extension;   //Acak Nama File
                        Input::file('txt_gambar')->move($destinationPath, $fileName);
                        return(url() . '/' . $destinationPath . $fileName);
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

    public function delete() {
      $query = Input::get('q');
      $public_path_img = 'assets/img/uploads/slide/';
      if (Auth::check() == true) 
      {
        $hapus = ($public_path_img . $query);
        File::delete($hapus);
        return ('success');
      }
    }

}   // Akhir Class ctrl_beranda

?>