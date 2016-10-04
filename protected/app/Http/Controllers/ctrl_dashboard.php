<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Redirect;
use App\about;
use App\contact;
use App\slide;
use App\slide_product;

class ctrl_dashboard extends Controller
{
   public function show_index()
   {
        if (Auth::check() == true) 
        {
            $show_about = about::all()->first();
            $show_contact = contact::all()->first();
            $show_slide = slide::all();
            return View('dashboard.index')->with('show_about',$show_about)
                                          ->with('show_contact',$show_contact)
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
            return View('dashboard.photo');
        } 
        else
        {
          return Redirect::to('/account');
        }
   }

   public function show_stat()
   {
        if (Auth::check() == true) 
        {
            return View('dashboard.stat');
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
            return View('dashboard.feedback');
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
