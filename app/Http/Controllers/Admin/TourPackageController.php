<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use App\Models\Category;
use App\Models\TourPackage;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TourPackageRequest;

class TourPackageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = TourPackage::with('category', 'region')->get();

        return view('adminpage.pages.tour-package.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('adminpage.pages.tour-package.create', [
            'categories' => Category::all(),
            'regions' => Region::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(TourPackageRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        TourPackage::create($data);
        return redirect()->route('tour-package.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $item = TourPackage::findOrFail($id);
        return view('adminpage.pages.tour-package.edit', [
            'item' => $item,
            'categories' => Category::all(),
            'regions' => Region::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->title);

        $item = TourPackage::findOrFail($id);

        $item->update($data);
        return redirect()->route('tour-package.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = TourPackage::findOrFail($id);
        $item->delete();

        return redirect()->route('tour-package.index');
    }
}
