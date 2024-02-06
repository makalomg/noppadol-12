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
        Schema::create('products', function (Blueprint $table) {
            $table->increments('product_id',10)->comment("รหัสสินค้า");
            $table->string('name',255)->commet("ชื่อสินค้า");
            $table->string('price',255)->commet("ราคาสินค้า");
            $table->text('description')->commet("รายละเอียดสินค้า");
            $table->integer('category_id')->commet("รหัสประเภทสินค้า");
            $table->string('image',255)->commet("รูปสินค้า");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
