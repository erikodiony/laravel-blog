<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Validator;
use Redirect;
use App\about; //Eloquent DB 

class ctrl_login extends Controller
{

    public function show()
	{
        $q = Input::get('msg');
        
        if (isset($q) == null)
        {
            $q = 'start';
            return Redirect::to('/account/login?msg='.$q);
        }
        elseif ($q == 'error')
        {
            if (Auth::check() == true) 
            {
                return Redirect::to('/account/dashboard');
            }
            else
            {
                return View('login.index');
            }
        }
        elseif ($q == 'success') 
        {
            return View('login.index');     //Bagian ini masih Kurang Perfect ! :(
        }
        elseif ($q == 'start')
        {    
            if (Auth::check() == true) 
            {
                return Redirect::to('/account/dashboard');
            }
            else
            {
                return View('login.index');
            }
        }

        else
        {
            $q = 'start';
            return Redirect::to('/account/login?msg='.$q);
        }

	}

	public function validating()
    {
    	$rules = array(
    		'user' => 'required',
    		'pass' => 'required'
    		);

    	$validator = Validator::make(Input::all(), $rules);
    	if ($validator->fails())
    	{
            $q = 'error';
    		return Redirect::to('/account/login?msg='.$q)->with('msg_err','ERROR : Masih terdapat Kolom yang kosong!');
    	}
    	else
    	{
            return $this->check();
    	}
    }

    private function check()
    {
        Auth::attempt(array(
        'usr' => Input::get('user'),
        'password'  => Input::get('pass'),
        ));

        if (Auth::check() == true) 
        {
            $q = 'success';
            return Redirect::to('/account/login?msg='.$q)->with('msg_ok','SUCCESS : Anda berhasil masuk Sistem!');
        } 
        else 
        {
            $q = 'error';
            return Redirect::to('/account/login?msg='.$q)->with('msg_err','ERROR : Nama Pengguna atau Kata Sandi salah!');
        }
    }

}

?>