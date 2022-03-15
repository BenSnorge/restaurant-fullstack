<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return view('home');
    }
    public function about()
    {
        return view('pages/about');
    }
    public function waitlist()
    {
        return view('pages/waitlist');
    }
    public function contact()
    {
        return view('pages/contact');
    }
    public function offers()
    {
        return view('pages/offers');
    }
    public function menu()
    {
        return view('menu/index');
    }
    public function singleMenu()
    {
        return view('menu/single-menu');
    }
}


/* Route::get('/menu', function () {
    return view('menu/index');
});
Route::get('/menu/{slug}', function () {
    return view('menu/single-menu');
}); */

/* Route::get('/waitlist', function () {
    return view('pages/waitlist');
});
Route::get('/contact', function () {
    return view('pages/contact');
});
Route::get('/about', function () {
    return view('pages/about');
});
Route::get('/offers', function () {
    return view('pages/offers');
});
 */
