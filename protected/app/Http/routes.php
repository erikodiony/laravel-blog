<?php

Route::get('/', 'ctrl_home@show_index');

Route::get('account', function(){
	return Redirect::to('account/login');
});
Route::get('account/login', 'ctrl_login@show');
Route::post('account/login', 'ctrl_login@validating');
Route::get('account/logout', function(){
	 Auth::logout();
    return Redirect::to('account');
});

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

Route::post('account/dashboard/aboutme', 'ctrl_beranda@aboutme');
Route::post('account/dashboard/contactme', 'ctrl_beranda@contactme');
Route::get('account/dashboard/slide', 'ctrl_beranda@slide_show');
Route::post('account/dashboard/slide', 'ctrl_beranda@slide_save');
Route::post('account/dashboard/upload', 'ctrl_beranda@upload');
Route::get('account/dashboard/upload/delete','ctrl_beranda@delete');

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

Route::get('articles', 'ctrl_home@show_articles');
Route::get('promos', 'ctrl_home@show_promos');

Route::get('articles/view', 'ctrl_home@show_article');
Route::get('promos/view', 'ctrl_home@show_promo');

Route::get('products', 'ctrl_home@show_products');
Route::get('products/view', 'ctrl_home@show_product');
?>