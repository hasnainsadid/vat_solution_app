<?php
namespace App\Services;

use App\Models\Product;

class ProductService
{
    public function index(Product $product)
    {
        return $product->with('organization')->get();
    }

    public function store($request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->organization_id = $request->organization_id;
        $product->save();

        return $product;
    }

    public function show(Product $product)
    {
        return $product->with('organization')->find($product->id);
    }

    public function update($request, Product $product)
    {
        $product->name = $request->name;
        $product->organization_id = $request->organization_id;
        $product->save();

        return $product;
    }

    public function destroy(Product $product)
    {
        return $product->delete();
    }
}