<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Organization;
use App\Models\Product;
use App\Services\ProductService;

class ProductController extends Controller
{
    private $productService;

    /**
     * ProductController constructor.
     *
     * @param ProductService $productService
     */
    public function __construct(ProductService $productService)
    {
        $this->productService = $productService;
    }
    /**
     * Display a listing of the resource.
     */
    public function index(Product $product)
    {
        $products = $this->productService->index($product);
        return view('backend.pages.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organizations = Organization::all();
        return view('backend.pages.product.create', compact('organizations'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $this->productService->store($request);

        notify()->success('পণ্য সফলভাবে নিবন্ধন করা হয়েছে।');
        if ($request->source === 'modal') {
            return back();
        }
        return redirect()->route('products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $this->productService->show($product);
        return view('backend.pages.product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        $organizations = Organization::all();
        return view('backend.pages.product.edit', compact('product', 'organizations'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ProductRequest $request, Product $product)
    {
        $this->productService->update($request, $product);
        notify()->success('পণ্য সফলভাবে আপডেট করা হয়েছে।');
        return redirect()->route('products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $this->productService->destroy($product);
        notify()->success('পণ্য সফলভাবে মুছে ফেলা হয়েছে।');
        return redirect()->route('products.index');
    }
}
