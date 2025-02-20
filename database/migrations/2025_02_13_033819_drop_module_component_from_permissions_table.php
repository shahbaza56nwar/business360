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
        $tableNames = config('permission.table_names');

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            // Drop foreign key constraints first
            $table->dropForeign(['module_id']);
            $table->dropForeign(['component_id']);

            // Drop the columns
            $table->dropColumn(['module_id', 'component_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        $tableNames = config('permission.table_names');

        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->unsignedSmallInteger('module_id')->nullable()->after('guard_name');
            $table->unsignedSmallInteger('component_id')->nullable()->after('module_id');
        });

        // Restore foreign key constraints
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->foreign('module_id')->references('rid')->on('cnfg_modules')
                ->onDelete('set null');

            $table->foreign('component_id')->references('rid')->on('cnfg_components')
                ->onDelete('set null');
        });
    }
};
