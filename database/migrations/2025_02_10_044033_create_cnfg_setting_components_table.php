<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cnfg_setting_components', function (Blueprint $table) {
            $table->smallIncrements('sci')->unsigned()->comment('Settings Of Components ID');
            $table->tinyInteger('fmi')->comment('Feature Module ID ');
            $table->smallInteger('fci')->comment('Feature Component ID');
            $table->string('mdl',50)->comment('Modal Name')->nullable();
            $table->char('nnf',3)->comment('Note Nummber Field')->nullable();
            $table->char('trc',3)->comment('Transaction Code')->nullable();
        });

        //Set Table Comment
        DB::statement('ALTER TABLE cnfg_setting_components COMMENT "Settings Of Components"');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cnfg_setting_components');
    }
};
