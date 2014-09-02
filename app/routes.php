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
	$products = Product::where('category_id', '=', 5)->get();
	return View::make('category', array('name' => 'business broadband', 'products' => $products));
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


	// SUPPLIER PAGES

	Route::get('suppliers', function() {
		$suppliers = Supplier::all();
		return View::make('admin/suppliers', array('suppliers' => $suppliers));
	});

	Route::get('supplier', function() {
		return View::make('admin/supplier');
	});

	Route::get('supplier/{id}', function($id) {
		$supplier = Supplier::find($id);
		return View::make('admin/supplier')->with('supplier', $supplier);
	});

	Route::post('supplier', array('before' => 'csrf', function() {
		$rules = array('name' => 'required', 'baseurl' => 'required', 'description' => 'required', 'rating' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/supplier')->withErrors($validation)->withInput();
	    }
	    $supplier = new Supplier;
	    $supplier->name = Input::get('name');
	    $supplier->baseurl = Input::get('baseurl');
	    $supplier->description = Input::get('description');
	    $supplier->rating = Input::get('rating');
	    
	    if ($supplier->save()) {
	    	return Redirect::to('admin/suppliers');
	    }
	    return Redirect::to('admin/supplier')->withInput(); 
	}));

	Route::post('supplier/{id}', array('before' => 'csrf', function($id) {
		$rules = array('name' => 'required', 'baseurl' => 'required', 'description' => 'required', 'rating' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/supplier/'.$id)->withErrors($validation)->withInput();
	    }

	    $supplier = Supplier::find($id);
	    $supplier->name = Input::get('name');
	    $supplier->baseurl = Input::get('baseurl');
	    $supplier->description = Input::get('description');
	    $supplier->rating = Input::get('rating');
	    
	    if ($supplier->save()) {
	    	return Redirect::to('admin/suppliers');
	    }
	    return Redirect::to('admin/supplier/{id}')->withInput(); 
	}));

	Route::get('supplier/delete/{id}', function($id) {
		$supplier = Supplier::find($id);
		$supplier->delete();

		return Redirect::to('admin/suppliers');
	});

	// PRODUCT PAGES

	Route::get('products', function() {
		$products = Product::all();
		return View::make('admin/products', array('products' => $products));
	});

	Route::get('product', function() {
		$suppliers = Supplier::all();
		$categories = Category::all();
		return View::make('admin/product', array('suppliers' => $suppliers, 'categories' => $categories));
	});

	Route::post('product', array('before' => 'csrf', function() {
		$rules = array('title' => 'required', 'subtitle' => 'required', 'headline_price' => 'required', 'summary' => 'required', 'supplier_id' => 'required', 'category_id' => 'required', 'url' => 'required', 'description' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/product')->withErrors($validation)->withInput();
	    }
	    $product = new Product;
	    $product->title = Input::get('title');
	    $product->subtitle = Input::get('subtitle');
	    $product->headline_price = Input::get('headline_price');
	    $product->linerental_price = Input::get('linerental_price');
	    $product->summary = Input::get('summary');
	    $product->supplier_id = Input::get('supplier_id');
	    $product->category_id = Input::get('category_id');
	    $product->url = Input::get('url');
	    $product->description = Input::get('description');
	    $product->promotion_conditions = Input::get('promotion_conditions');

	    if ($product->save()) {
	    	return Redirect::to('admin/products');
	    }
	    return Redirect::to('admin/product')->withInput(); 
	}));

	Route::get('product/{id}', function($id) {
		$product = Product::find($id);
		$suppliers = Supplier::all();
		$categories = Category::all();
		return View::make('admin/product', array('product' => $product, 'suppliers' => $suppliers, 'categories' => $categories));
	});

	Route::post('product/{id}', array('before' => 'csrf', function($id) {
		$rules = array('title' => 'required', 'subtitle' => 'required', 'headline_price' => 'required', 'summary' => 'required', 'supplier_id' => 'required', 'category_id' => 'required', 'url' => 'required', 'description' => 'required');
	    $validation = Validator::make(Input::all(), $rules);
	    if ($validation->fails()) {
	    	return Redirect::to('admin/product/'.$id)->withErrors($validation)->withInput();
	    }

	    $product = Product::find($id);
	    $product->title = Input::get('title');
	    $product->subtitle = Input::get('subtitle');
	    $product->headline_price = Input::get('headline_price');
	    $product->linerental_price = Input::get('linerental_price');
	    $product->summary = Input::get('summary');
	    $product->supplier_id = Input::get('supplier_id');
	    $product->category_id = Input::get('category_id');
	    $product->url = Input::get('url');
	    $product->description = Input::get('description');
	    $product->promotion_conditions = Input::get('promotion_conditions');
	    
	    if ($product->save()) {
	    	return Redirect::to('admin/products');
	    }
	    return Redirect::to('admin/product/{id}')->withInput(); 
	}));

	Route::get('product/delete/{id}', function($id) {
		$product = Product::find($id);
		$product->delete();

		return Redirect::to('admin/products');
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