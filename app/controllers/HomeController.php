<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function subscribe()
	{
		$this_email = Input::get('email');

		if(Subscriber::where('email', '=', $this_email)) {
			return Redirect::to('subscribe/failure')->with('message', 'You are already registered with that email address');
		} else {
			$subscriber = new Subscriber;
			$subscriber->Email = $this_email;
			$subscriber->save();

			return Redirect::to('subscribe/success')->with('email', $subscriber->Email);
		}
		
	}

}
