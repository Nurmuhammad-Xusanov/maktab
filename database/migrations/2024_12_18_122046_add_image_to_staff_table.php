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
            $table->string('image')->nullable(); // Rasm nomini saqlash uchun
        });
    }

    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropColumn('image');
        });
    }
};
