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
        Schema::create('cnfg_useractivities', function (Blueprint $table) {
           $table->integerIncrements('activity_id')->comment('Activity Id');
           $table->bigInteger('user_id')->unsigned()->comment('User Id');
           $table->integer('permission_id')->unsigned()->comment('Permission Id');
           $table->integer('module_id')->comment('Module Id');
           $table->integer('component_id')->comment('Component Id');
           $table->dateTime('activity_log_at')->comment('Activity Log At');


           //relations
           $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
        });

        DB::statement('ALTER TABLE cnfg_useractivities COMMENT "User Activity"');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnfg_useractivities');
    }
};
