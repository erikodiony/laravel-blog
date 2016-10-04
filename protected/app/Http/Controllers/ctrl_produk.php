<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Validator;
use File;
use Redirect;
use Datatables;
use App\slide_product;
use App\product;

class ctrl_produk extends Controller
{
  public function slide_gambar_show()
  {
      $query = Input::get('q');
      if (Auth::check() == true)
      {
          $slide_product = new slide_product;
          $slide = slide_product::find($query);
          return $slide;
      }
      else
      {
          return Redirect::to('/account');
      }
  }

  public function slide_gambar_save()
  {
      if (Auth::check() == true)
      {
          $slide = new slide_product;
          $slide = slide_product::where('id', Input::get('txt_produk'))->first();
          $slide->label = Input::get('txt_label');
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
                            $destinationPath = 'assets/img/uploads/product/';
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

    public function upload_delete() {
    $query = Input::get('q');
    $public_path_img = 'assets/img/uploads/product/';
    if (Auth::check() == true) 
        {
            $hapus = ($public_path_img . $query);
            File::delete($hapus);
            return ('success');
        }
    }

    public function show_publish() {
      if (Auth::check() == true) {
        $product = new product;
        $product = product::select(['id','judul','tag','user','created_at','updated_at'])->where('status', 'Publikasi')->get();
        return Datatables::of($product)->make();
      }
      else
      {}
    }

    public function show_concept() {
      if (Auth::check() == true) {
        $product = new product;
        $product = product::select(['id','judul','tag','user','created_at','updated_at'])->where('status', 'Konsep')->get();
        return Datatables::of($product)->make();
      }
      else
      {}
    }

    public function save() {
      $product = new product;
      $product->judul = Input::get('txt_judul');
      $product->tag = Input::get('txt_label');
      $product->isi = Input::get('txt_isi');
      $product->status = Input::get('txt_status');
      $product->user = Auth::User()->usr;
      $product->save();
    }

    public function edit() {
      $product = new product;
      $product = product::where('id', Input::get('txt_id_edit'))->first();
      $product->judul = Input::get('txt_judul_edit');
      $product->tag = Input::get('txt_label_edit');
      $product->isi = Input::get('txt_isi_edit');
      $product->status = Input::get('txt_status_edit');
      $product->user = Auth::User()->usr;
      $product->save();
    }

    public function show()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $product = new product;
            $product = product::find($query);
            return $product;
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function delete()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $product = new product;
            $product = product::find($query)->delete();
        }
        else
        {
            return Redirect::to('/account');
        }
    }

}
