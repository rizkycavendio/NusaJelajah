<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Region;
use App\Models\TourPackage;
use Illuminate\Http\Request;

class AllTourController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $title = '';

        if (request('category')) {
            // jika terdapat request dari category, maka jalankan di bawah ini
            $category = Category::firstWhere('slug', request('category'));
            // $category di isi dengan Category firstWhere di mana pertama slug yang value nya sesuai request categorynya.
            $title = ' in ' . $category->name;
            // maka title akan di isi dengan in ambil dari $category berdasarkan nama
        }

        return view('frontend.pages.all-tour', [
            "title" => "All Homestay" . $title,
            "items" => TourPackage::latest()->filter(request(['search', 'category', 'region']))->paginate(8),
            "regions" => Region::all(),
            "categories" => Category::all()
        ]);
    }
}
