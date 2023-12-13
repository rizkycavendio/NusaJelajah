<?php

namespace App\Http\Controllers;

use App\Models\TourPackage;
use Illuminate\Http\Request;

class DetailController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index($slug)
    {
        $items = TourPackage::with(['gallery', 'category', 'region'])->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.detail', [
            'items' => $items
        ]);
    }
}
