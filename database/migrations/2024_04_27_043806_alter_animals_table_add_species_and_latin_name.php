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
        Schema::table('animals', function (Blueprint $table) {
            $table->string('species')->nullable()->after('name');
            $table->string('latin_name')->nullable()->after('species');
            $table->string('ar_url')->nullable()->after('is_feedable');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('animals', function (Blueprint $table) {
            $table->dropColumn('species');
            $table->dropColumn('latin_name');
            $table->dropColumn('ar_url');
        });
    }
};
