<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Settings::whereNotNull('title_product')->get();

        return view('admin.products.index', [
            'product' => $product
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.add');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        try {
            $settings                       = new Settings();
            $settings->title_product        = $request->get('title');
            $settings->description_product  = $request->get('desc');
            $settings->save();

            return redirect()->route('admin.product')->with('success', 'Berhasil menambah produk unggulan');
            
        } catch (QueryException $e) {
            dd($e);
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id){}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $settings = Settings::findOrFail($id);

        return view('admin.products.edit', [
            'settings' => $settings
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        try {
            $settings                       = Settings::findOrFail($id);
            $settings->title_product        = $request->get('title');
            $settings->description_product  = $request->get('desc');
            $settings->save();

            return redirect()->route('admin.product')->with('success', 'Berhasil mengubah produk unggulan');
            
        } catch (QueryException $e) {
            dd($e);
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $settings = Settings::findOrFail($id);
        $settings->delete();

        return redirect()->back()->with('success', 'Berhasil menghapus produk unggulan');
    }
}
