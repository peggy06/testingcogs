<?php
//FRONTEND
Route::any('/', 'FrontendBaseController@index');
Route::any('/home', 'FrontendBaseController@index_withuser');
Route::any('/gallery', 'FrontendBaseController@gallery');

Route::any('/productsgallery', 'FrontendBaseController@gallery_withuser');
Route::any('/paintingGallery', 'FrontendBaseController@gallery_painting');
Route::any('/album', 'FrontendBaseController@gallery_paintingwithuser');
Route::any('/login', 'FrontendBaseController@loginview');
Route::any('/history', 'FrontendBaseController@history');
Route::any('/journey', 'FrontendBaseController@history_withuser');
Route::any('/logoutCustomer', 'FrontendBaseController@logout');
Route::post('/auth', 'FrontendBaseController@customer_verify');
Route::any('/authfailed', 'FrontendBaseController@loginview2');
Route::any('/signup', 'FrontendBaseController@sign');
Route::get('/addtocart{id}', 'FrontendBaseController@add_item');
Route::any('/reg', 'FrontendBaseController@reg_user');
Route::any('/cart', 'FrontendBaseController@cart_view');
Route::any('/removecartitem{id}', 'FrontendBaseController@remove_item');
Route::any('/frame{id}', 'FrontendBaseController@frame');
Route::any('/viewer{id}', 'FrontendBaseController@viewer');
Route::any('/send_email', 'FrontendBaseController@send_email');
Route::any('/codeVerify', 'FrontendBaseController@codeVerify');
Route::any('/email_sent', 'FrontendBaseController@message_sent');
Route::any('/Congratulation', 'FrontendBaseController@done_msg');



//BACKEND

//login
Route::get('/admin', 'BackendBaseController@login');
Route::get('/loginattempt', 'BackendBaseController@login2');
Route::post('/verify', 'BackendBaseController@verify');
Route::any('/logout', 'BackendBaseController@logout');
//!-login

//page-view
Route::any('/dashboard', 'BackendBaseController@dashboard');
Route::any('/Admindashboard', 'BackendBaseController@Admindashboard');
Route::any('/order', 'BackendBaseController@order_list');
Route::any('/REdashboard', 'BackendBaseController@userlog_filter');
Route::any('/REdashboardadmin', 'BackendBaseController@adminlog_filter');
	//painting
Route::any('/gallerypainting', 'BackendBaseController@painting');
Route::any('/paintingtrashbin', 'BackendBaseController@trashbin_paint');
Route::any('/addpainting', 'BackendBaseController@add_paint');
Route::get('/editpainting{id}', 'BackendBaseController@edit_paint');
	//!-painting
	//portrait
Route::any('/galleryportrait', 'BackendBaseController@portrait');
Route::any('/portraittrashbin', 'BackendBaseController@trashbin_port');
Route::any('/addportrait', 'BackendBaseController@add_port');
Route::get('/editportrait{id}', 'BackendBaseController@edit_port');
	//!-portrait
	//users
Route::any('/usersdata', 'BackendBaseController@users');
Route::any('/usersstaff', 'BackendBaseController@users_staff');
Route::any('/customer', 'BackendBaseController@customer');
Route::any('/deactivateduser', 'BackendBaseController@trashbin_user');
Route::any('/adduser', 'BackendBaseController@add_user');
Route::get('/edituser{id}', 'BackendBaseController@edit_paint');
Route::any('/usersave', 'BackendBaseController@save_user');
	//!-users
	//for index page

Route::any('/setIndexpage', 'BackendBaseController@indexpage_settings');
Route::post('/updateIndexPage', 'BackendBaseController@updateIndexPage');
	//!end of index page
	
Route::any('/setHistory', 'BackendBaseController@history_settings');
Route::post('/updateHistory', 'BackendBaseController@updateHistory');

//!-page-view

//SUD module
	//painting
Route::post('/paintingupdate{id}', 'BackendBaseController@update_paint');
Route::any('/paintingsave', 'BackendBaseController@save_paint');
Route::any('/deletepainting{id}', 'BackendBaseController@delete_paint');
Route::any('/confirmdelete{id}', 'BackendBaseController@confirm_delete');
Route::any('/deleteverify{id}', 'BackendBaseController@delete_verify');
Route::any('/deleteauth{id}', 'BackendBaseController@delete_auth');
Route::any('/restorepainting{id}', 'BackendBaseController@restore_paint');
	//!-painting
	//portrait
Route::post('/portraitupdate{id}', 'BackendBaseController@update_port');
Route::any('/portraitsave', 'BackendBaseController@save_port');
Route::any('/deleteportrait{id}', 'BackendBaseController@delete_port');
Route::any('/restoreportrait{id}', 'BackendBaseController@restore_port');


	//!-portrait
//!-SUD module



//CMS Generator
Route::any('/generator', 'CMSGenerator@index');
Route::get('/generator/{id}', 'CMSGenerator@column_list');
Route::post('/generator/{id}/generate', 'CMSGenerator@generate_page');