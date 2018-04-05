<?php

namespace App\Http\Controllers;

class PageController extends Controller {
	public function forgotPassword() {
		return view('pages.form_forgotpassword');
	}

	// call trangchu page
	public function index() {
		return view('pages.trangchu');
	}

	// call detail page
	public function detail() {
		return view('pages.detail');
	}
}
