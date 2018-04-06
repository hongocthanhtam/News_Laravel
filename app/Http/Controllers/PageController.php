<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
	// call form forgot pass
	public function getForgotPassword() {
		return view('pages.form_forgotpassword');
	}

	// call form change pass
	public function getChangePassword() {
		return view('pages.form_changepassword');
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
	// login form
	public function getLogin(){
		return view('pages.login');
	} 
	// Register form
	public function getRegister(){
		return view('pages.register');
	} 

}
