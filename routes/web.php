<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'WebController@index');
Route::get('/berita/{id}', 'WebController@posts');
Route::get('/berita/{id}/{slug}', 'WebController@posts');
Route::get('/agenda/{id}/{slug}', 'WebController@posts');
Route::post('/komen', 'WebController@TambahKomen');
Route::get('/komen', 'WebController@dataKomen');
Route::get('/kategori/{id}', 'WebController@categorys');
Route::get('/kategori/{id}/{nama}', 'WebController@categorys');
Route::get('/halaman/{id}', 'WebController@pages');
Route::get('/halaman/{id}/{slug}', 'WebController@pages');
Route::post('/cari', 'WebController@CariArtikel');
Route::get('/organisasi', 'WebController@organisasi');
Route::get('/data-organisasi', 'WebController@dataOrganisasi');

Route::get('/admin', function () {
		if(Auth::check()){
			return redirect('admin/dashboard');
		} else {
    	return view('auth.login');
    }
});


//organisasi
Route::get('/admin/organisasi', 'organisasiController@tampil');
Route::post('/admin/organisasi', 'organisasiController@tambah');
Route::put('/admin/organisasi', 'organisasiController@ubah');
Route::delete('/admin/organisasi', 'organisasiController@hapus');

//rumah
Route::get('/admin/rumah', 'rumahController@tampil');
Route::post('/admin/rumah', 'rumahController@tambah');
Route::put('/admin/rumah', 'rumahController@ubah');
Route::delete('/admin/rumah', 'rumahController@hapus');

//toda
Route::get('/admin/toda', 'todaController@tampil');
Route::post('/admin/toda', 'todaController@tambah');
Route::put('/admin/toda', 'todaController@ubah');
Route::delete('/admin/toda', 'todaController@hapus');


Route::get('/admin/dashboard', 'DashboardController@index');

//comment
Route::get('/admin/comment', 'commentController@tampil');
Route::post('/admin/comment', 'commentController@tambah');
Route::delete('/admin/comment', 'commentController@hapus');

//sidebar
Route::get('/admin/sidebar', 'sidebarController@tampil');
Route::post('/admin/sidebar', 'sidebarController@tambah');
Route::put('/admin/sidebar', 'sidebarController@ubah');
Route::delete('/admin/sidebar', 'sidebarController@hapus');

// Homepage Widget
Route::get('/admin/home-widget', 'homepage_widget@tampil');
Route::post('/admin/home-widget', 'homepage_widget@tambah');
Route::put('/admin/home-widget', 'homepage_widget@ubah');
Route::delete('/admin/home-widget', 'homepage_widget@hapus');


//tampilan
Route::get('/admin/tampilan', 'tampilanController@tampil');
Route::post('/admin/tampilan', 'tampilanController@tambah');
Route::put('/admin/tampilan', 'tampilanController@ubah');

//menu
Route::get('/admin/menu', 'menuController@tampil');
Route::post('/admin/menu', 'menuController@tambah');
Route::put('/admin/menu', 'menuController@ubah');
Route::delete('/admin/menu', 'menuController@hapus');

//menu-top
Route::get('/admin/menu-top', 'navbartop@tampil');
Route::post('/admin/menu-top', 'navbartop@tambah');
Route::put('/admin/menu-top', 'navbartop@ubah');
Route::delete('/admin/menu-top', 'navbartop@hapus');

//menu-footer
Route::get('/admin/menu-footer', 'navbarfooter@tampil');
Route::post('/admin/menu-footer', 'navbarfooter@tambah');
Route::put('/admin/menu-footer', 'navbarfooter@ubah');
Route::delete('/admin/menu-footer', 'navbarfooter@hapus');

//category
Route::get('/admin/category', 'categoryController@tampil');
Route::get('/admin/category-data', 'categoryController@data');
Route::post('/admin/category', 'categoryController@tambah');
Route::put('/admin/category', 'categoryController@ubah');
Route::delete('/admin/category', 'categoryController@hapus');

//page
Route::get('admin/page','pageController@tampil');
Route::get('/admin/page-data', 'pageController@data');
Route::delete('admin/page','pageController@hapus');
Route::get('admin/new-page','pageController@dataNew');
Route::post('admin/new-page','pageController@tambah');
Route::get('/admin/edit-page/{id}', 'pageController@editNew');
Route::post('/admin/edit-page/{id}', 'pageController@ubah');

//post
Route::get('/admin/post', 'postController@tampil');
Route::delete('/admin/post', 'postController@hapus');
Route::get('/admin/new-post', 'postController@dataNew');
Route::post('/admin/new-post', 'postController@tambah');
Route::get('/admin/edit-post/{id}', 'postController@editNew');
Route::post('/admin/edit-post/{id}', 'postController@ubah');

Route::get('/admin/logout', function () {
     Auth::logout();
     return redirect('/');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

// USER
Route::get('admin/user', 'UserController@index');
Route::post('admin/user', 'UserController@store');
Route::put('admin/user', 'UserController@update');
Route::delete('admin/user', 'UserController@destroy');

// SLIDER
Route::get('admin/slider', 'SliderController@index');
Route::post('admin/slider', 'SliderController@store');
Route::put('admin/slider', 'SliderController@update');
Route::delete('admin/slider', 'SliderController@destroy');

// GALLERY
Route::get('admin/gallery', 'GalleryController@index');
Route::post('admin/gallery', 'GalleryController@store');
Route::put('admin/gallery', 'GalleryController@update');
Route::delete('admin/gallery', 'GalleryController@destroy');
