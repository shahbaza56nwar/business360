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

        // Add new columns to permissions table
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            $table->unsignedSmallInteger('module_id')->nullable()->after('guard_name');  // CNFG module ID
            $table->unsignedSmallInteger('component_id')->nullable()->after('module_id');  // CNFG component ID
        });

        // Add foreign key constraints
        Schema::table($tableNames['permissions'], function (Blueprint $table) {
            // Foreign key to cnfg_modules
            $table->foreign('module_id')->references('rid')->on('cnfg_modules')
                ->onDelete('set null');

            // Foreign key to cnfg_components
            $table->foreign('component_id')->references('rid')->on('cnfg_components')
                ->onDelete('set null');
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
