<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

/*
     |----------------------------------------------------------------------
     | This route return home.blade.php page
     |----------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');


/*
     |----------------------------------------------------------------------
     | This route return singlepost.blade.php page
     |----------------------------------------------------------------------
*/

Route::get('/singlepost' , function(){
     return view('posts.singlepost');
})->name('singlepost');

/*
     |----------------------------------------------------------------------
     | This route return profile.blade.php page
     |----------------------------------------------------------------------
*/

Route::get('/profile' , function(){
     return view('profiles.profile');
});

/*
     |----------------------------------------------------------------------
     | This route return updateprofile.blade.php page
     |----------------------------------------------------------------------
*/

Route::get('/updateprofile' , function(){
     return view('profiles.updateprofile');
});



/*
     |----------------------------------------------------------------------
     | This route return admin.blade.php page
     |----------------------------------------------------------------------
*/

Route::get('/admin' , function(){
     return view('admin.admin');
});


