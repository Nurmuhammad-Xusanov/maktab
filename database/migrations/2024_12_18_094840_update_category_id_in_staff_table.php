<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateCategoryIdInStaffTable extends Migration
{
    public function up()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable()->change();
        });
    }

    public function down()
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->unsignedBigInteger('category_id')->nullable(false)->change();
        });
    }
}

