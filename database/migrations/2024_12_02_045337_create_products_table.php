<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->string('name'); // Menambahkan kolom name
            $table->string('title')->nullable(); // Menambahkan kolom title
            $table->text('description')->nullable(); // Menambahkan kolom description
            $table->decimal('discount_price', 10, 2)->nullable(); // Menambahkan discount_price
            $table->string('image')->nullable(); // Tambahkan kolom image
        });
    }

    public function down()
    {
        Schema::table('product', function (Blueprint $table) {
            $table->dropColumn(['name', 'title', 'description', 'discount_price']);
            $table->dropColumn('image');
        });
    }
};
