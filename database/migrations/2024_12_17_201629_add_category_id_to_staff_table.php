<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id'); // category_id ustunini qo'shamiz
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade'); // foreign keyni o'rnatamiz
        });
    }

    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['category_id']); // foreign keyni olib tashlash
            $table->dropColumn('category_id'); // category_id ustunini olib tashlash
        });
    }

};
