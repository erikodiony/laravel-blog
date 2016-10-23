<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Redirect;
use Carbon\Carbon;
use App\contact;
use App\slide;
use App\slide_product;
use App\feedback;
use App\poll;
use App\photo;
use App\stat;

class ctrl_dashboard extends Controller
{
   public function show_index()
   {
        if (Auth::check() == true) 
        {
            $show_contact = contact::all()->first();
            $show_slide = slide::all();
            return View('dashboard.index')->with('show_contact',$show_contact)
                                          ->with('show_slide',$show_slide);
        } 
        else
        {
        	return Redirect::to('/account');
        }
   }

   public function show_post()
   {
        $show_slide_product = slide_product::all();

        if (Auth::check() == true) 
        {
            return View('dashboard.post')->with('show_slide_product', $show_slide_product);
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_product()
   {
        $show_slide_product = slide_product::all();
        
        if (Auth::check() == true) 
        {
            return View('dashboard.product')->with('show_slide_product', $show_slide_product);
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_photo()
   {
        if (Auth::check() == true) 
        {
            $show_img_arsip = photo::where('jenis', 'Arsip')->get();
            $show_img_galeri = photo::where('jenis', 'Galeri')->get();
            $show_img_produk = photo::limit(5)->where('jenis', 'Produk')->get();
            $show_img_slide = photo::limit(5)->where('jenis', 'Slide')->get();
            return View('dashboard.photo')->with('show_img_arsip', $show_img_arsip)
                                          ->with('show_img_galeri', $show_img_galeri)
                                          ->with('show_img_produk', $show_img_produk)
                                          ->with('show_img_slide', $show_img_slide);
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_stat()
   {
      $dt_hari_ini = Carbon::now()->toDateString(); //Hari Ini
      $dt_minggu_ini = Carbon::now()->addWeeks(-1)->toDateString(); //Minggu Ini (Tanggal Lalu)
      $dt_bulan_ini = substr(Carbon::now()->toDateString(), 0,7); //Bulan Ini
      $dt_tahun_ini = substr(Carbon::now()->toDateString(), 0,4); //Tahun Ini

        if (Auth::check() == true) 
        {
          $show_log_admin = stat::where('user', 'Admin')->get();
          $show_log_guest = stat::where('user', 'Pengunjung')->get();
          $data = array(
            'show_log_admin_harian' => stat::where('user', 'Admin')->where('created_at', 'LIKE', '%'.$dt_hari_ini.'%')->count(),
            'show_log_admin_mingguan' => stat::where('user', 'Admin')->where('created_at', '>=', $dt_minggu_ini . ' 00:00:00')->where('created_at', '<=', $dt_hari_ini . ' 23:59:59')->count(),
            'show_log_admin_bulanan' => stat::where('user', 'Admin')->where('created_at', 'LIKE', '%'.$dt_bulan_ini.'%')->count(),
            'show_log_admin_tahunan' => stat::where('user', 'Admin')->where('created_at', 'LIKE', '%'.$dt_tahun_ini.'%')->count(),

            'show_log_guest_harian' => stat::where('user', 'Pengunjung')->where('created_at', 'LIKE', '%'.$dt_hari_ini.'%')->count(),
            'show_log_guest_mingguan' => stat::where('user', 'Pengunjung')->where('created_at', '>=', $dt_minggu_ini . ' 00:00:00')->where('created_at', '<=', $dt_hari_ini . ' 23:59:59')->count(),
            'show_log_guest_bulanan' => stat::where('user', 'Pengunjung')->where('created_at', 'LIKE', '%'.$dt_bulan_ini.'%')->count(),
            'show_log_guest_tahunan' => stat::where('user', 'Pengunjung')->where('created_at', 'LIKE', '%'.$dt_tahun_ini.'%')->count(),
          );

          return View('dashboard.stat')->with('show_log_admin', $show_log_admin)
                                      ->with('show_log_guest', $show_log_guest)
                                      ->with($data);
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_feedback()
   {
        if (Auth::check() == true) 
        {
          $show_testi = feedback::where('status', '!=', 'Pending')->get();
          $show_testi_pending = feedback::where('status', 'Pending')->get();
          $show_poll = poll::all();
          $data = array(
            'show_param1_a' => poll::where('param1','Bagus')->count(),
            'show_param2_a' => poll::where('param1','Cukup')->count(),
            'show_param3_a' => poll::where('param1','Jelek')->count(),
            
            'show_param1_b' => poll::where('param2','Bagus')->count(),
            'show_param2_b' => poll::where('param2','Cukup')->count(),
            'show_param3_b' => poll::where('param2','Jelek')->count(),

            'show_param1_c' => poll::where('param3','Bagus')->count(),
            'show_param2_c' => poll::where('param3','Cukup')->count(),
            'show_param3_c' => poll::where('param3','Jelek')->count()
            );

          return View('dashboard.feedback')->with('show_testi', $show_testi)
                                           ->with('show_testi_pending', $show_testi_pending)
                                           ->with('show_poll', $show_poll)
                                           ->with($data);
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

    public function show_history()
   {
        if (Auth::check() == true) 
        {
            return View('dashboard.history');
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_setting()
   {
        if (Auth::check() == true) 
        {
            return View('dashboard.setting');
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_help()
   {
        if (Auth::check() == true) 
        {
            return View('dashboard.help');
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_search()
   {
        if (Auth::check() == true) 
        {
            return View('dashboard.search');
        } 
        else
        {
          return Redirect::to('/account');
        }
   }
}
