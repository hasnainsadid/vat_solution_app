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
        $productID          = request()->product;
        $product            = Product::find($productID);
        $sales              = MaterialSalesRegister::where('product_id', request()->product)->get();
        return view('backend.pages.sales.index', compact('sales', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productID      = request()->product;
        $product        = Product::find($productID);
        $lastEntry      = MaterialSalesRegister::where('product_id', $product->id)->latest()->first();
        $opening_qty    = $lastEntry ? $lastEntry->closing_qty : 0;
        $opening_value  = $lastEntry ? $lastEntry->closing_value : 0;
        return view('backend.pages.sales.create', compact('product', 'opening_qty', 'opening_value'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $sale                           = new MaterialSalesRegister();
        $sale->product_id               = $request->product_id;
        $sale->entry_date               = \Carbon\Carbon::createFromFormat('d-m-Y', $request->entry_date)->format('Y-m-d');
        $sale->opening_qty              = $request->opening_qty;
        $sale->opening_value            = $request->opening_value;
        $sale->production_qty           = $request->production_qty;
        $sale->production_value         = $request->production_value;
        $sale->total_production_qty     = $request->opening_qty + $request->production_qty;
        $sale->total_production_value   = $request->opening_value + $request->production_value;
        
        $sale->customer_name            = $request->customer_name;
        $sale->customer_address         = $request->customer_address;
        $sale->customer_registration_no = $request->customer_registration_no;

        $sale->invoice_no               = $request->invoice_no;
        $sale->invoice_date             = \Carbon\Carbon::createFromFormat('d-m-Y', $request->invoice_date)->format('Y-m-d');

        $sale->product_description      = $request->product_description;
        $sale->sale_qty                 = $request->sale_qty;
        $sale->unit                     = $request->unit;
        $sale->taxable_value            = $request->taxable_value;
        $sale->supplementary_duty       = $request->taxable_value * ($request->supplementary_duty / 100);
        $sale->vat_amount               = $request->taxable_value * $request->vat_amount;
        $sale->closing_qty              = $sale->total_production_qty - $request->sale_qty;
        $sale->closing_value            = $sale->total_production_value - $request->taxable_value;
        $sale->remark                   = $request->remark;
        $sale->save();
        notify()->success('Material Sales Register created successfully!');
        return redirect()->route('material-sale-registers.index', ['product' => $request->product_id]);
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
