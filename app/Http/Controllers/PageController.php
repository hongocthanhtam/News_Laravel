<?php

namespace App\Http\Controllers;

class PageController extends Controller {
	public function getForgotPassword() {
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

	// call contact pagr
	public function getContact() {
		return view('pages.contact_page');
	}

}
