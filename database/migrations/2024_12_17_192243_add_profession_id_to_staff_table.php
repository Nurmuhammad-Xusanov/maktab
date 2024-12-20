<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::table('staff', function (Blueprint $table) {
            if (!Schema::hasColumn('staff', 'profession_id')) {
                $table->foreignId('profession_id')->constrained('professions')->onDelete('cascade');
            }
        });
    }

    

    public function down(): void
    {
        Schema::table('staff', function (Blueprint $table) {
            $table->dropForeign(['profession_id']);
            $table->dropColumn('profession_id');
        });
    }
};
