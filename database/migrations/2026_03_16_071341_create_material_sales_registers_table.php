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
        Schema::create('material_sales_registers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained()->onDelete('cascade');
            $table->date('entry_date');

            // opening balance (produced goods)
            $table->decimal('opening_qty', 15, 2)->nullable();
            $table->decimal('opening_value', 15, 2)->nullable();

            // production
            $table->decimal('production_qty', 15, 2)->nullable();
            $table->decimal('production_value', 15, 2)->nullable();

            // total produced
            $table->decimal('total_production_qty', 15, 2)->nullable();
            $table->decimal('total_production_value', 15, 2)->nullable();

            // buyer info
            $table->string('customer_name')->nullable();
            $table->text('customer_address')->nullable();
            $table->string('customer_registration_no')->nullable();

            // challan info
            $table->string('invoice_no')->nullable();
            $table->date('invoice_date')->nullable();

            // sales info
            $table->string('product_description')->nullable();
            $table->decimal('sale_qty', 15, 2)->nullable();
            $table->string('unit')->nullable();
            $table->decimal('taxable_value', 15, 2)->nullable();
            $table->decimal('supplementary_duty', 15, 2)->nullable();
            $table->decimal('vat_amount', 15, 2)->nullable();

            // remaining stock
            $table->decimal('closing_qty', 15, 2)->nullable();
            $table->decimal('closing_value', 15, 2)->nullable();

            $table->text('remark')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('material_sales_registers');
    }
};
