<?php

namespace App\Http\Controllers\Admin;

use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Database\QueryException;
use App\Http\Requests\Admin\CategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Category::all();

        return view('adminpage.pages.category.index',[
            'items' => $items
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $items = Category::all();
        return view('adminpage.pages.category.create', [
            'items' => $items
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CategoryRequest $request)
    {
        try {
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            Category::create($data);
            return redirect()->route('category.index');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1062) {
                return redirect()->back()->withInput()->withErrors(['name' => 'Kategori tersebut sudah ada']);
            }
    
            // Handle other query exceptions as needed
            return redirect()->back()->withInput()->withErrors(['name' => 'TKategori tersebut sudah ada']);
        }
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
        $items = Category::findOrFail($id);

        return view('adminpage.pages.category.edit',[
            'items' => $items
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $data = $request->all();
            $data['slug'] = Str::slug($request->name);

            $item = Category::findOrFail($id);

            $item->update($data);
            return redirect()->route('category.index');
        } catch (QueryException $e) {
            if ($e->errorInfo[1] === 1062) {
                return redirect()->back()->withInput()->withErrors(['name' => 'Kategori tersebut sudah ada']);
            }
    
            // Handle other query exceptions as needed
            return redirect()->back()->withInput()->withErrors(['name' => 'TKategori tersebut sudah ada']);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $item = Category::findOrFail($id);

        $item->delete();

        return redirect()->route('category.index');
    }
}
