<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).


# My notes

### Routing:
Routes are contained in /routes/web.php

You want to route to route to controllers, which will pass in the view.
```
// lsapp.dev/hello  will display header tag with 'Hello World' in it
Route::get('/hello', function () {
    return '<h1>Hello World</h1>';
});

// lsapp.dev/welcome  will display the welcome view
Route::get('/welcome', function () {
    return view('welcome');
});

// TODO: Add controller example
```

### Views
View are contained in /resources/views/...

You can create new folders in here which can be referenced by routes or controllers.
Blade is used to make views.

###### /resources/view/pages/about.blade.php

Then views are accessed though code:
```
Route::get('/about', function () {
    // return view(pages.about);
    return view(pages/about);
});
```
More examples in /routes/web.php

### Controllers:
Controllers are contained in /app/Http/Controllers/...

To create a new controller, open a terminal and type:

```
php artisan make:controller {controller name}
...
php artisan make:controller PagesController
```
This will create a controller and put it in /app/Http/Controllers...

Created file contains namespace, requests libraries to make requests, and creates controller that extends Controller class

##### How to pass a single value through controllers:
```
return view('pages.index', compact('title'));
or
return view('pages.index')->with('title', $title);
```
##### How to retrieve that value in files (views):
```
<h1><?php echo $title ?></h1>
or
<h1>{{$title}}</h1>
```
##### How to pass MULTIPLE values through controllers:
```

$data = array (
	'title' => 'Our Services',
	'services' => ['Web Design', 'Programming', 'SEO']
);
return view('pages.services')->with($data);
```
##### Loop through passed array and use variables
```
<h1>{{$title}}</h1>
@if(count($services) > 0)
	<ul>
	@foreach($services as $service)
		<li>{{$service}}</li>
	@endforeach
	</ul>
@endif
```

### Layout Pages
Layout Pages are contained in the views. /resources/views/...
###### /resources/views/layouts/app.blade.php

In layout page, use @yield
```
<!doctype html>
<html>
    <head>
    </head>
    <body>@yield('content')
    </body>
</html>
```
And in the actual pages, use @extends and @sections and @endsection
```
@extends('layouts.app')

@section('content')

		<h1>Welcome to Laravel</h1>
		<p>This is a Laravel application</p>
@endsection

```





### .env
Contains stuff
###### APP_NAME
Title of webpage. Can be referred to with:
```
{{config('app.name')}}
or
{{config('app.name', 'LSAPP')}}
```
###### Database info


### CSS
##### You need node.js installed for compiling things. To install type in git bash (didn't work in atom terminal) at the project root:
```
npm installed
```
Public css folder contains compiled css. You _can_ make changes to this folder, but only if you want to use your own stylesheets, and not the included stuff. To use your own stuff, just make changes to the /public/css/app.css file.

To make changes that you want to compile, change the /resources/assets/sass files

To save any changes you made, you must recompile. In console, type:
```
npm run dev
```
To not run dev after each change, type in:
##### This sacrifices the terminal
```
npm run watch
```
This you should run in atom's terminal.


To use the included bootstrap, put in the layout file:
```
<link rel="stylesheet" href="{{asset('css/app.css')}}">
```
