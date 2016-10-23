<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\contact;
use App\slide;
use App\slide_product;
use App\product;
use App\post;
use App\menu;
use App\feedback;
use App\photo;
use App\poll;
use App\stat;
use Datatables;
use Input;
use Redirect;

class ctrl_home extends Controller
{
    public function pageError() {
        return View('404.index');
    }

    private function check_log()
    {        
        $country = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip={request()->ip()}"));
        if ($country->geoplugin_countryName == "")
        {
            $country_name = "-";
        }
        else {
            $country_name = $country->geoplugin_countryName;
        }
        
        $log_check = stat::where('token', session()->getId())->where('user', 'Pengunjung')->exists();
        if ($log_check != true) {
            $stat = new stat;
            $stat->ip = request()->ip();
            $stat->device = request()->header('User-Agent');
            $stat->token = session()->getId();
            $stat->country = $country_name;
            $stat->user = 'Pengunjung';
            $stat->save();
        }
        else{}
    }

    public function show_index()
    {
        $show_contact = contact::all()->first();
        $show_slide = slide::all();
        $show_slide_product = slide_product::all();
        $show_limit_article = post::limit(10)->where('jenis', 'Artikel')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $show_limit_promo = post::limit(10)->where('jenis', 'Promo')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $menu_about = menu::all()->where('jenis', 'Tentang Kami')->first();
        $show_testi = feedback::where('status', 'Tampilkan')->get();
        $show_img = photo::limit(5)->where('jenis', 'Galeri')->orderBy('id', 'DESC')->get();

        $this->check_log();
        return View('home.index')->with('menu_about', $menu_about)
                                ->with('show_contact',$show_contact)
                                ->with('show_slide',$show_slide)
                                ->with('show_slide_product', $show_slide_product)
                                ->with('show_limit_promo', $show_limit_promo)
                                ->with('show_limit_article', $show_limit_article)
                                ->with('show_testi', $show_testi)
                                ->with('show_img', $show_img);                
    }

    public function show_articles()
    {
        $show_contact = contact::all()->first();
        $show_all_article = post::all()->where('jenis', 'Artikel')->where('status', 'Publikasi');
        $this->check_log();
        return View('promo-artikel.index-artikel')->with('show_contact',$show_contact)
                                                    ->with('show_all_article', $show_all_article);
    }

    public function show_promos()
    {
        $show_contact = contact::all()->first();
        $show_all_promo = post::all()->where('jenis', 'Promo')->where('status', 'Publikasi');
        $this->check_log();
        return View('promo-artikel.index-promo')->with('show_contact', $show_contact)
                                                    ->with('show_all_promo', $show_all_promo);
    }

    public function show_products() 
    {
        $label_produk = array();
        $show_contact = contact::all()->first();
        $show_slide_product = slide_product::all();
        foreach ($show_slide_product as $label) {
            $label_produk[] = $label->label;
        }

        $show_product_1 = product::all()->where('status', 'Publikasi')->where('tag', $label_produk[0]);
        $show_product_2 = product::all()->where('status', 'Publikasi')->where('tag', $label_produk[1]);
        $show_product_3 = product::all()->where('status', 'Publikasi')->where('tag', $label_produk[2]);
        $show_product_4 = product::all()->where('status', 'Publikasi')->where('tag', $label_produk[3]);
        $this->check_log();
        return View('produk.index')->with('show_contact', $show_contact)
                                    ->with('show_slide_product', $show_slide_product)
                                    ->with('show_product_1', $show_product_1)
                                    ->with('show_product_2', $show_product_2)
                                    ->with('show_product_3', $show_product_3)
                                    ->with('show_product_4', $show_product_4);
    }

    public function show_photos()
    {
        $show_contact = contact::all()->first();
        $show_img = photo::where('jenis', 'Galeri')->orderBy('id', 'DESC')->get();
        $this->check_log();
        return View('foto.index')->with('show_contact', $show_contact)
                                ->with('show_img', $show_img);
    }

    public function show_article()
    {
        $id_article = Input::get('id');
        $show_contact = contact::all()->first();
        $show_limit_article = post::limit(5)->where('jenis', 'Artikel')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $show_limit_promo = post::limit(5)->where('jenis', 'Promo')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $show_byid_article = post::all()->where('jenis', 'Artikel')->where('status', 'Publikasi')->where('id', $id_article)->first();
        if ($show_byid_article == null)
        {
            return Redirect::to('/articles');
        }
        else 
        {
            $this->check_log();
            return View('promo-artikel.byid-artikel')
                ->with('show_contact', $show_contact)
                ->with('show_limit_article', $show_limit_article)
                ->with('show_limit_promo', $show_limit_promo)
                ->with('show_byid_article', $show_byid_article);
        }
    }

    public function show_promo()
    {
        $id_promo = Input::get('id');
        $show_contact = contact::all()->first();
        $show_limit_article = post::limit(5)->where('jenis', 'Artikel')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $show_limit_promo = post::limit(5)->where('jenis', 'Promo')->where('status', 'Publikasi')->orderBy('id', 'DESC')->get();
        $show_byid_promo = post::all()->where('jenis', 'Promo')->where('status', 'Publikasi')->where('id', $id_promo)->first();
        if ($show_byid_promo == null)
        {
            return Redirect::to('/promos');
        }
        else 
        {
            $this->check_log();
            return View('promo-artikel.byid-promo')
                ->with('show_contact', $show_contact)
                ->with('show_limit_article', $show_limit_article)
                ->with('show_limit_promo', $show_limit_promo)
                ->with('show_byid_promo', $show_byid_promo);
        }
    }

    public function show_product() {
        $id_produk = Input::get('id');
        $show_contact = contact::all()->first();
        
        $show_slide_product = slide_product::all(); //Mencari nama Label Produk
        $label_produk = array();
        foreach ($show_slide_product as $label) {
            $label_produk[] = $label->label;
        }

        $show_limit_produk_1 = product::limit(5)->where('tag', $label_produk[0])->where('status', 'Publikasi')->orderBy('id','DESC')->get();
        $show_limit_produk_2 = product::limit(5)->where('tag', $label_produk[1])->where('status', 'Publikasi')->orderBy('id','DESC')->get();
        $show_limit_produk_3 = product::limit(5)->where('tag', $label_produk[2])->where('status', 'Publikasi')->orderBy('id','DESC')->get();
        $show_limit_produk_4 = product::limit(5)->where('tag', $label_produk[3])->where('status', 'Publikasi')->orderBy('id','DESC')->get();
        
        $show_byid_produk = product::all()->where('status', 'Publikasi')->where('id', $id_produk)->first();
        if ($show_byid_produk == null)
        {
            return Redirect::to('/products');
        }
        else 
        {
            $this->check_log();
            return View('produk.byid-produk')
                ->with('show_contact', $show_contact)
                ->with('show_slide_product', $show_slide_product)
                ->with('show_limit_produk_1', $show_limit_produk_1)
                ->with('show_limit_produk_2', $show_limit_produk_2)
                ->with('show_limit_produk_3', $show_limit_produk_3)
                ->with('show_limit_produk_4', $show_limit_produk_4)
                ->with('show_byid_produk', $show_byid_produk);
        }

    }

    public function show_photo()
    {
        $query = Input::get('q');
        $photo = new photo;
            $photo = photo::find($query);
            return $photo;
    }

    public function show_portofolio()
    {
        $show_contact = contact::all()->first();
        $menu_portofolio = menu::all()->where('jenis', 'Portofolio')->first();
        $menu_about = menu::all()->where('jenis', 'Tentang Kami')->first();
        $this->check_log();
        return View('portofolio.index')
            ->with('show_contact', $show_contact)
            ->with('menu_portofolio', $menu_portofolio)
            ->with('menu_about', $menu_about);
    }

    public function show_about()
    {
        $show_contact = contact::all()->first();
        $menu_portofolio = menu::all()->where('jenis', 'Portofolio')->first();
        $menu_about = menu::all()->where('jenis', 'Tentang Kami')->first();
        $this->check_log();
        return View('about.index')
            ->with('show_contact', $show_contact)
            ->with('menu_portofolio', $menu_portofolio)
            ->with('menu_about', $menu_about);
    }

    public function show_search()
    {
        $query = Input::get('q');
        if (isset($query) == null)
        {
            return Redirect::to('/');
        }
        else
        {
            $show_contact = contact::all()->first();
            $all_result_article = post::where('status', 'Publikasi')->where('jenis','Artikel')->where('judul', 'LIKE', '%'.$query.'%')->get();
            $all_result_promo = post::where('status', 'Publikasi')->where('jenis','Promo')->where('judul', 'LIKE', '%'.$query.'%')->get();
            $all_result_product = product::where('status', 'Publikasi')->where('judul', 'LIKE', '%'.$query.'%')->get();
            $this->check_log();
            return View('search.index')
                    ->with('query', $query)
                    ->with('show_contact', $show_contact)
                    ->with('all_result_article', $all_result_article)
                    ->with('all_result_promo', $all_result_promo)
                    ->with('all_result_product', $all_result_product);
        }
    }


    public function send_testimoni(Request $req)
    {
        $testimoni_check = feedback::where('token', Input::get('_token'))->exists();
        if ($testimoni_check == true) {
            return ('error_token');
        }
        else {
            $testimoni = new feedback;
            $testimoni->isi = Input::get('txt_isi');
            $testimoni->user = Input::get('txt_user');
            $testimoni->status = 'Pending';
            $testimoni->token = Input::get('_token');
            $testimoni->ip = $req->ip();
            $testimoni->save();
            return ('success');
        }
    }

    public function send_poll(Request $req)
    {
        $poll_check = poll::where('token', Input::get('_token'))->exists();
        if ($poll_check == true) {
            return ('error_token');
        }
        else {
            $poll = new poll;
            $poll->param1 = Input::get('txt_param1');
            $poll->param2 = Input::get('txt_param2');
            $poll->param3 = Input::get('txt_param3');
            $poll->token = Input::get('_token');
            $poll->ip = $req->ip();
            $poll->save();
            return ('success');
        }
    }

}
