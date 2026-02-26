<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('material_purchase_registers', function (Blueprint $table) {
            $table->id();
            // Basic Info
            $table->date('entry_date')->nullable();

            // Opening Stock
            $table->string('opening_qty')->nullable();
            $table->decimal('opening_value', 15, 2)->nullable();

            // Purchase Info
            $table->string('challan_or_bill_no')->nullable();
            $table->date('challan_date')->nullable();

            $table->string('supplier_name')->nullable();
            $table->text('supplier_address')->nullable();
            $table->string('supplier_registration_no')->nullable();

            $table->string('product_name')->nullable();

            $table->decimal('purchase_qty', 15, 2)->nullable();
            $table->decimal('purchase_value', 15, 2)->nullable();
            $table->decimal('supplementary_duty', 15, 2)->nullable();
            $table->decimal('vat_amount', 15, 2)->nullable();

            // Total Materials
            $table->decimal('total_qty', 15, 2)->nullable();
            $table->decimal('total_value', 15, 2)->nullable();

            // Used in Production
            $table->decimal('used_qty', 15, 2)->nullable();
            $table->decimal('used_value', 15, 2)->nullable();

            // Closing Stock
            $table->decimal('closing_qty', 15, 2)->nullable();
            $table->decimal('closing_value', 15, 2)->nullable();

            // Remarks
            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_purchase_registers');
    }
};
