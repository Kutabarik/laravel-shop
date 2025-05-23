<?php

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->string('title');
            $table->string('thumbnail')->nullable();
            $table->unsignedInteger('price')->default(0);
            $table->foreignIdFor(Brand::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->timestamps();
        });

        Schema::create('category_product', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->foreignIdFor(Product::class)->constrained()->cascadeOnUpdate()->cascadeOnDelete();
        });
    }
};
