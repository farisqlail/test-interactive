<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin.home');
    }

    public function welcome()
    {
        $about      = Settings::first();
        $product    = Settings::whereNotNull('title_product')->get();
        
        return view('welcome', [
            'about'     => $about,
            'product'   => $product,
        ]);
    }
}
