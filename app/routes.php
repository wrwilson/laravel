<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
HTML::macro('nav_link', function($url, $text, $iclass = "", $submenu = 0) {
    $class = ( Request::is($url) || Request::is($url.'/*') ) ? ' class="active"' : '';
    $selectedclass = '';
	if ($submenu == 1) {
		$selectedclass = (Request::is($url) || Request::is($url.'/*')) ? '<span class="selected"></span><span class="arrow open"></span>' : '<span class="arrow "></span>';
	}

    if ($iclass !== "") {
    	return '<li'.$class.'><a href="'.URL::to($url).'"><i class="'.$iclass.'"></i><span class="title">'.$text.'</span>'.$selectedclass.'</a></li>';
    } else {
    	return '<li'.$class.'><a href="'.URL::to($url).'">'.$text.'</a></li>';
    }
    
});

Route::get('/', function()
{
	return View::make('homepage');
});

Route::get('business-broadband', function() {
	return View::make('category', array('name' => 'business broadband'));
});

Route::get('broadband', function() {
	return View::make('category', array('name' => 'broadband'));
});

Route::get('phone-and-broadband', function() {
	return View::make('category', array('name' => 'phone & broadband'));
});

Route::get('TV-and-broadband', function() {
	return View::make('category', array('name' => 'TV & broadband'));
});

Route::get('mobile-phone', function() {
	return View::make('category', array('name' => 'Mobile phone deals'));
});

Route::get('subscribe', 'HomeController@subscribe');

Route::get('subscribe/success', function() {
	return View::make('subscribe')->with('username', Session::get('username'));
});

Route::get('subscribe/failure', function() {
	return View::make('subscribe')->with('message', 'You are already registered with that username');
});

Route::get('broadband/product/{id}', function($id) {
	return View::make('product');
});

Route::get('article', function() {
	return 'this is /article where the blog should live';
});


Route::get('login', function() {
	return View::make('login');
});

Route::post('login', function() {
	$user = array('username' => Input::get('username'), 'password' => Input::get('password'));
    if (Auth::attempt($user)) {
    	return Redirect::to('admin/dashboard');
    }
    return Redirect::to('login')->with('login_error', 'Could not log in.'); 
}); 

Route::get('logout', function() {
	Auth::logout();
	return Redirect::to('login')->with('login_error', 'You have been logged out.');
});

// ADMIN PAGES
Route::group(array('before' => 'auth', 'prefix' => 'admin'), function() { 
	Route::get('/', function() {
		return View::make('admin/dashboard');
	});

	Route::get('dashboard', function() {
		return View::make('admin/dashboard');
	});

	// CATEGORY PAGES

	Route::get('categories', function() {
		$categories = Category::all();
		return View::make('admin/categories', array('categories' => $categories));
	});

	Route::get('category', function() {
		return View::make('admin/category');
	});

	Route::get('category/{id}', function($id) {
		$category = Category::find($id);
		return View::make('admin/category')->with('category', $category);
	});

	Route::post('category', array('before' => 'csrf', function() {
		$rules = array('category' => 'required|unique:categorys', 'baseurl' => 'required|unique:categorys');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/category')->withErrors($validation)->withInput();
	    }
	    $category = new Category;
	    $category->category = Input::get('category');
	    $category->baseurl = Input::get('baseurl');
	    
	    if ($category->save()) {
	    	return Redirect::to('admin/categories');
	    }
	    return Redirect::to('admin/category')->withInput(); 
	}));

	Route::post('category/{id}', array('before' => 'csrf', function($id) {
		$rules = array('category' => 'required', 'baseurl' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/category/'.$id)->withErrors($validation)->withInput();
	    }

	    $category = Category::find($id);
	    $category->category = Input::get('category');
	    $category->baseurl = Input::get('baseurl');
	    
	    if ($category->save()) {
	    	return Redirect::to('admin/categories');
	    }
	    return Redirect::to('admin/category/{id}')->withInput(); 
	}));

	Route::get('category/delete/{id}', function($id) {
		$category = Category::find($id);
		$category->delete();

		return Redirect::to('admin/categories');
	});

	// USER PAGES

	Route::get('users', function() {
		$users = User::all();
		return View::make('admin/users', array('users' => $users));
	});


	Route::get('user/{id}', function($id) {
		$user = User::find($id);
		return View::make('admin/register')->with('user', $user);
	});

	Route::post('user/{id}', array('before' => 'csrf', function($id) {
		$rules = array('name' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/user/'.$id)->withErrors($validation)->withInput();
	    }

	    $user = User::find($id);
	    if (Input::get('password') !== "") {
	    	$user->password = Hash::make(Input::get('password'));
	    }
	    $user->name = Input::get('name');
	    $user->admin = Input::get('admin') ? 1 : 0;
	    
	    if ($user->save()) {
	    	return Redirect::to('admin/users');
	    }
	    return Redirect::to('admin/user/{id}')->withInput(); 
	}));

	Route::get('user/delete/{id}', function($id) {
		$user = User::find($id);
		$user->delete();

		return Redirect::to('admin/users');
	});

	Route::get('register', function() {
		return View::make('admin/register');
	});

	Route::post('register', array('before' => 'csrf', function() {
		$rules = array('username' => 'required|unique:users', 'password' => 'required', 'name' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/register')->withErrors($validation)->withInput();
	    }
	    $user = new User;
	    $user->username = Input::get('username');
	    $user->password = Hash::make(Input::get('password'));
	    $user->name = Input::get('name');
	    $user->admin = Input::get('admin') ? 1 : 0;
	    
	    if ($user->save()) {
	    	return Redirect::to('admin/users');
	    }
	    return Redirect::to('admin/register')->withInput(); 
	}));
});