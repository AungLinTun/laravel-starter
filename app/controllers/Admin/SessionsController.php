<?php

namespace Admin;

use BaseController;
use View;
use Validator;
use Redirect;
use Auth;

class SessionsController extends BaseController
{

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
        return View::make('admin.sessions.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(), [
			'email'    => ['required', 'email'],
			'password' => ['required']
		]);

		if ($validator->fails()) {
			return Redirect::route('admin.sessions.create')
				->withInput()
				->withErrors($validator);
		}

		$input = [
			'email'    => Input::get('email'),
			'password' => Input::get('password')
		];

		if (Auth::attempt($input, true)) {
			return Redirect::route('admin.homepage');
		}

		return Redirect::route('admin.sessions.create')
			->withInput();
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @return Response
	 */
	public function destroy()
	{
		Auth::logout();
		return Redirect::route('admin.homepage');
	}

}
