<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function forgotPassword() {
		return view('pages.form_forgotpassword');
	}

	public function getLogin(){
		return view('pages.form_login');
	} 
	public function getRegister(){
		return view('pages.form_register');
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
