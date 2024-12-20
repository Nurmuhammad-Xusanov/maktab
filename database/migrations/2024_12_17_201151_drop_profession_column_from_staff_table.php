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
            $table->dropColumn('profession'); // profession columnini olib tashlaymiz
        });
    }

    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->string('profession'); // rollback uchun profession ustunini qayta yaratish
        });
    }

};
