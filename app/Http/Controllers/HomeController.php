<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Property;
use App\Photo;
use App\Category;
use App\Type;
use App\Feature;
use App\Partner;
use App\Blog;
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

          $latests = Property::latest()
                    ->take(4)
                    ->get();

          $partners = Partner::all()
                      ->take(8);
    
        return view('welcome', compact('slides','featured','deals','latests', 'partners'));


    }


    public function news()
    {
         $slides = Blog::where('category_id', 1)
               ->orderBy('created_at', 'asc')
               ->take(1)
               ->get();

          $blogs = Blog::orderBy('created_at', 'asc')
               ->take(6)
               ->get();

        
               
        return view('news', compact('slides','news start','blogs'));




    }


     public function show()
    {
      # code...
    }
}
