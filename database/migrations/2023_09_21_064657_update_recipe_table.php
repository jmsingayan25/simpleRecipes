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
        //
        Schema::table('recipes', function(Blueprint $table){
            $table->dropConstrainedForeignId('ingredient_id');
            $table->dropConstrainedForeignId('step_id');
            $table->dropConstrainedForeignId('level_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
