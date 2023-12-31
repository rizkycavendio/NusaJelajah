<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $items = TourPackage::with(['gallery', 'category', 'region'])->get();
        return view('frontend.pages.home', [
            'items' => $items
        ]);
    }
}
