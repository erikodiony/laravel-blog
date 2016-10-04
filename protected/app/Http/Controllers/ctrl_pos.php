<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Validator;
use Auth;
use File;
use Redirect;
use Datatables;
use App\post;
use App\menu;

class ctrl_pos extends Controller
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
                            $destinationPath = 'assets/img/uploads/post/';
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
    $public_path_img = 'assets/img/uploads/post/';
    if (Auth::check() == true) 
        {
            $hapus = ($public_path_img . $query);
            File::delete($hapus);
            return ('success');
        }
    }

    public function edit() {
        $post = new post;
        $post = post::where('id', Input::get('txt_id_edit'))->first();
        $post->judul = Input::get('txt_judul_edit');
        $post->tag = Input::get('txt_label_edit');
        $post->isi = Input::get('txt_isi_edit');
        $post->jenis = Input::get('txt_jenis_edit');
        $post->status = Input::get('txt_status_edit');
        $post->user = Auth::User()->usr;
        $post->save();
    }

    public function save() {
      if (Auth::check() == true)
      {
        $post = new post;
        $post->judul = Input::get('txt_judul');
        $post->tag = Input::get('txt_label');
        $post->isi = Input::get('txt_isi');
        $post->status = Input::get('txt_status');
        $post->jenis = Input::get('txt_jenis');
        $post->user = Auth::User()->usr;
        $post->save();
      }
      else {
        return Redirect::to('/account');  
      }
    }

    public function delete()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $post = new post;
            $post = post::find($query)->delete();
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function show()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $post = new post;
            $post = post::find($query);
            return $post;
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function laman_show()
    {
        $query = Input::get('q');
        if (Auth::check() == true)
        {
            $menu = new menu;
            $menu = menu::find($query);
            return $menu;
        }
        else
        {
            return Redirect::to('/account');
        }
    }

    public function laman_edit() {
        $menu = new menu;
        $menu = menu::where('id', Input::get('txt_id_laman_edit'))->first();
        $menu->isi = Input::get('txt_isi_laman_edit');
        $menu->user = Auth::User()->usr;
        $menu->save();
    }

    public function show_article() {
        if (Auth::check() == true)
        {
            $post = new post;
            $post = post::select(['id', 'judul', 'tag', 'user', 'updated_at'])->where('jenis', 'Artikel')->where('status', 'Publikasi')->get();
            return Datatables::of($post)->make();
        }
    }

    public function show_promo() {
        if (Auth::check() == true)
        {
            $post = new post;
            $post = post::select(['id', 'judul', 'tag', 'user', 'updated_at'])->where('jenis', 'Promo')->where('status', 'Publikasi')->get();
            return Datatables::of($post)->make();
        }
    }

    public function show_concept() {
        if (Auth::check() == true)
        {
            $post = new post;
            $post = post::select(['id', 'judul', 'jenis', 'user', 'updated_at'])->where('status', 'Konsep')->get();
            return Datatables::of($post)->make();
        }
    }

    public function show_about() {
        if (Auth::check() == true)
        {
            $menu = new menu;
            $menu = menu::select(['id', 'isi', 'jenis', 'user', 'updated_at'])->where('jenis', 'Tentang Kami')->get();
            return Datatables::of($menu)->make();
        }
    }

    public function show_portofolio() {
        if (Auth::check() == true)
        {
            $menu = new menu;
            $menu = menu::select(['id', 'isi', 'jenis', 'user', 'updated_at'])->where('jenis', 'Portofolio')->get();
            return Datatables::of($menu)->make();
        }
    }

}
