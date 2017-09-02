<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function Index() {
		// Will return text INDEX onto the page
		// return 'INDEX';

		// Will look in views/pages folder for index.blade.php
		return view('pages.index');
	}

	public function About() {
		return view('pages.about');
	}

	public function Services() {
		return view('pages.services');
	}
}
