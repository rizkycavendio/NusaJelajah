<?php

namespace App\Http\Controllers\Admin;

use App\Models\Region;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\RegionRequest;

class RegionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Region::all();

        return view('adminpage.pages.region.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Region::all();
        return view('adminpage.pages.region.create', [
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegionRequest $request)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->location);

        Region::create($data);
        return redirect()->route('region.index');
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
        $items = Region::findOrFail($id);

        return view('adminpage.pages.region.edit',[
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = $request->all();
        $data['slug'] = Str::slug($request->name);

        $item = Region::findOrFail($id);

        $item->update($data);
        return redirect()->route('region.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Region::findOrFail($id);

        $item->delete();

        return redirect()->route('region.index');
    }
}
