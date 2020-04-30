<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $slides = Property::where('featured', 1)
               ->orderBy('created_at', 'asc')
               ->take(4)
               ->get();

         $featured = Property::where('featured', 1)
               ->orderBy('created_at', 'asc')
               ->take(1)
               ->first();

          // $testimony = Testimony::

        return view('welcome', compact('slides','featured'));


    }
}
