<?php
namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\MaterialPurchaseRegister;
use App\Models\Product;
use Illuminate\Http\Request;

class MaterialPurchaseRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $productID = request()->product;
        $product = Product::find($productID);
        $purchases = MaterialPurchaseRegister::where('product_id', $productID)->get();
        return view('backend.pages.purchase.index', compact('purchases', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $productID     = request()->product;
        $product       = Product::find($productID);
        $lastEntry     = MaterialPurchaseRegister::where('product_id', $product->id)->latest()->first();
        $opening_qty   = $lastEntry ? $lastEntry->closing_qty : 0;
        $opening_value = $lastEntry ? $lastEntry->closing_value : 0;
        return view('backend.pages.purchase.create', compact('product', 'opening_qty', 'opening_value'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $purchase                           = new MaterialPurchaseRegister();
        $purchase->product_id               = $request->product_id;
        $purchase->entry_date               = \Carbon\Carbon::createFromFormat('d-m-Y', $request->entry_date)->format('Y-m-d');
        $purchase->opening_qty              = $request->opening_qty;
        $purchase->opening_value            = $request->opening_value;
        $purchase->challan_or_bill_no       = $request->challan_or_bill_no;
        $purchase->challan_date             = \Carbon\Carbon::createFromFormat('d-m-Y', $request->challan_date)->format('Y-m-d');
        $purchase->supplier_name            = $request->supplier_name;
        $purchase->supplier_address         = $request->supplier_address;
        $purchase->supplier_registration_no = $request->supplier_registration_no;
        $purchase->product_name             = $request->product_name;
        $purchase->purchase_qty             = $request->purchase_qty;
        $purchase->unit                     = $request->unit;
        $purchase->purchase_value           = $request->purchase_value;
        $purchase->supplementary_duty       = $request->purchase_value * ($request->supplementary_duty / 100);
        $purchase->vat_amount               = $request->purchase_value * $request->vat_amount;
        $purchase->total_qty                = floatval($request->opening_qty) + floatval($request->purchase_qty);
        $purchase->total_value              = $request->opening_value + $request->purchase_value;
        $purchase->used_qty                 = $request->used_qty ?? 0;
        $purchase->used_value               = $request->used_value ?? 0.00;
        $purchase->closing_qty              = floatval($purchase->total_qty) - floatval($purchase->used_qty);
        $purchase->closing_value            = floatval($purchase->total_value) - floatval($purchase->used_value);
        $purchase->remark                   = $request->remark;
        $purchase->save();

        notify()->success('Material Purchase Register created successfully!');
        return redirect()->route('material-purchase-registers.index', ['product' => $request->product_id]);
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
