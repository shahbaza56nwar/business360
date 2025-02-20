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
        $tableNames = config('permissions.table_names');

        Schema::table('permissions', function (Blueprint $table) {
            // Add new columns
            $table->text('title')->after('name')->unique()->comment('Permission Title');
            $table->integer('module_id')->after('title')->comment('Module ID');
            $table->integer('component_id')->after('module_id')->comment('Component ID');
            $table->integer('permission_id')->after('component_id')->unique()->comment('Permission ID');
            $table->tinyInteger('sts')->comment('Status 1=active/0=inactive');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('permissions', function (Blueprint $table) {
            //
        });
    }
};
