<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class LandingPageController extends Controller
{
    public function index()
    {
        $about      = Settings::first();
        $product    = Settings::whereNotNull('title_product')->get();
        $service    = Settings::whereNotNull('title_service')->get();
        
        return view('welcome', [
            'about'     => $about,
            'product'   => $product,
            'service'   => $service,
        ]);
    }
}
