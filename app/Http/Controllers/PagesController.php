<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	public function Index() {
		// Will return text INDEX onto the page
		// return 'INDEX';

		// Will look in views/pages folder for index.blade.php

		$title = "Welcome to Laravel!";
		// Pass a single value to the view.
		// return view('pages.index', compact('title'));
		return view('pages.index')->with('title', $title);
	}

	public function About() {
		$title = "About Us";
		return view('pages.about')->with('title', $title);
	}

	public function Services() {
		// $title = "Our Services";
		$data = array (
			'title' => 'Our Services',
			'services' => ['Web Design', 'Programming', 'SEO']
		);
		return view('pages.services')->with($data);
	}
}
