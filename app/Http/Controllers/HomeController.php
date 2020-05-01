<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Photo;
use App\Category;
use App\Type;
use App\Feature;
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
               ->orderBy('created_at', 'desc')
               ->take(1)
               ->first();

          $deals = Property::where('featured', 1)
                ->orderBy('price', 'asc')
                ->take(6)
                ->get();

          $latest = Property::latest()
                    ->take(5)
                    ->get();
    
        return view('welcome', compact('slides','featured','deals'));


    }


    public function show()
    {
      # code...
    }
}
