<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex() { //Index = Home page
    	return view('blog.home');
    }

    public function getAbout() {
    	$first = 'Veronica';
    	$last = 'Pamintuan';

    	$fullname = $first." ".$last;
    	$email = 'mariaveronicapamintuan@gmail.com';
    	return view('blog.about')
    		->with("fullname",$fullname)
    		->with("email",$email);
    	
    }

    public function getContact() {
    	return view('blog.contact');
    }
}
