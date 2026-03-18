<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MaterialSalesRegister;
use App\Models\Product;
use Illuminate\Http\Request;

class MaterialSalesRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productID = request()->product;
        $product = Product::find($productID);
        $sales = MaterialSalesRegister::where('product_id', request()->product)->get();
        return view('backend.pages.sales.index', compact('sales', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productID = request()->product;
        $product = Product::find($productID);
        $lastEntry     = MaterialSalesRegister::where('product_id', $product->id)->latest()->first();
        $opening_qty   = $lastEntry ? $lastEntry->closing_qty : 0;
        $opening_value = $lastEntry ? $lastEntry->closing_value : 0;
        return view('backend.pages.sales.create', compact('product', 'opening_qty', 'opening_value'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
