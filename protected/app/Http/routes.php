<?php

//Home
Route::get('/', 'ctrl_home@show_index');
//

//Menu Home
Route::get('articles', 'ctrl_home@show_articles');
Route::get('promos', 'ctrl_home@show_promos');
Route::get('products', 'ctrl_home@show_products');
Route::get('portofolio', 'ctrl_home@show_portofolio');
Route::get('about', 'ctrl_home@show_about');
Route::get('search','ctrl_home@show_search');
Route::get('photos', 'ctrl_home@show_photos');

Route::get('articles/view', 'ctrl_home@show_article');
Route::get('promos/view', 'ctrl_home@show_promo');
Route::get('products/view', 'ctrl_home@show_product');
Route::get('photos/view','ctrl_home@show_photo');

Route::post('send_testimoni', 'ctrl_home@send_testimoni');
Route::post('send_poll', 'ctrl_home@send_poll');
//


//Login
Route::get('account', function(){
	return Redirect::to('account/login');
});
Route::get('account/login', 'ctrl_login@show');
Route::post('account/login', 'ctrl_login@validating');
Route::get('account/logout', function(){
	 Auth::logout();
    return Redirect::to('account');
});
//

//Menu Dashboard
Route::get('account/dashboard', 'ctrl_dashboard@show_index');
Route::get('account/dashboard/post', 'ctrl_dashboard@show_post');
Route::get('account/dashboard/product', 'ctrl_dashboard@show_product');
Route::get('account/dashboard/photo', 'ctrl_dashboard@show_photo');
Route::get('account/dashboard/stat', 'ctrl_dashboard@show_stat');
Route::get('account/dashboard/feedback', 'ctrl_dashboard@show_feedback');
Route::get('account/dashboard/history', 'ctrl_dashboard@show_history');
Route::get('account/dashboard/setting', 'ctrl_dashboard@show_setting');
Route::get('account/dashboard/help', 'ctrl_dashboard@show_help');
Route::get('account/dashboard/search', 'ctrl_dashboard@show_search');
//

//Menu Dashboard (Index)
Route::post('account/dashboard/aboutme', 'ctrl_beranda@aboutme');
Route::post('account/dashboard/contactme', 'ctrl_beranda@contactme');
Route::get('account/dashboard/slide', 'ctrl_beranda@slide_show');
Route::post('account/dashboard/slide', 'ctrl_beranda@slide_save');
Route::post('account/dashboard/upload', 'ctrl_beranda@upload');
Route::get('account/dashboard/upload/delete','ctrl_beranda@delete');
//

//Menu Dashboard (Product)
Route::get('account/dashboard/product/slide_gambar', 'ctrl_produk@slide_gambar_show');
Route::post('account/dashboard/product/slide_gambar', 'ctrl_produk@slide_gambar_save');
Route::post('account/dashboard/product/upload', 'ctrl_produk@upload');
Route::get('account/dashboard/product/upload/delete','ctrl_produk@upload_delete');
Route::get('account/dashboard/product/publish', array('as' => 'product.publish', 'uses' => 'ctrl_produk@show_publish'));
Route::get('account/dashboard/product/concept', array('as' => 'product.concept', 'uses' => 'ctrl_produk@show_concept'));

Route::post('account/dashboard/product/save', 'ctrl_produk@save');
Route::get('account/dashboard/product/show', 'ctrl_produk@show');
Route::get('account/dashboard/product/delete', 'ctrl_produk@delete');
Route::post('account/dashboard/product/edit', 'ctrl_produk@edit');
//

//Menu Dashboard (Post)
Route::post('account/dashboard/post/upload', 'ctrl_pos@upload');
Route::get('account/dashboard/post/upload/delete', 'ctrl_pos@upload_delete');
Route::get('account/dashboard/post/article', array('as' => 'post.article', 'uses' => 'ctrl_pos@show_article'));
Route::get('account/dashboard/post/promo', array('as' => 'post.promo', 'uses' => 'ctrl_pos@show_promo'));
Route::get('account/dashboard/post/concept', array('as' => 'post.concept', 'uses' => 'ctrl_pos@show_concept'));
Route::get('account/dashboard/post/about', array('as' => 'post.about', 'uses' => 'ctrl_pos@show_about'));
Route::get('account/dashboard/post/portofolio', array('as' => 'post.portofolio', 'uses' => 'ctrl_pos@show_portofolio'));

Route::post('account/dashboard/post/save', 'ctrl_pos@save');
Route::get('account/dashboard/post/show', 'ctrl_pos@show');
Route::get('account/dashboard/post/delete', 'ctrl_pos@delete');
Route::post('account/dashboard/post/edit', 'ctrl_pos@edit');

Route::get('account/dashboard/post/laman_show', 'ctrl_pos@laman_show');
Route::post('account/dashboard/post/laman_edit', 'ctrl_pos@laman_edit');
//

//Menu Dashboard (Feedback)
Route::get('account/dashboard/feedback/testimoni_show', 'ctrl_umpan@show_testimoni');
Route::post('account/dashboard/feedback/testimoni_edit', 'ctrl_umpan@edit_testimoni');
Route::get('account/dashboard/feedback/testimoni_delete', 'ctrl_umpan@delete_testimoni');
//

//Menu Dashboard (Foto)
Route::post('account/dashboard/photo/upload', 'ctrl_foto@upload');
Route::get('account/dashboard/photo/upload/delete', 'ctrl_foto@upload_delete'); //Hapus Foto Upload Preview
Route::post('account/dashboard/photo/save', 'ctrl_foto@save'); //Save Foto Upload

Route::get('account/dashboard/photo/show', 'ctrl_foto@show'); //Show ID Foto
Route::post('account/dashboard/photo/edit', 'ctrl_foto@edit'); //Save Edit Foto Upload
Route::get('account/dashboard/photo/delete', 'ctrl_foto@delete'); //Hapus Foto Tersimpan
//

?>