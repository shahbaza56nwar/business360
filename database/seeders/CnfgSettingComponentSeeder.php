<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use DB;

class CnfgSettingComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('cnfg_setting_components')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('cnfg_setting_components')->insert([
            [
                'fmi' => authrz_umUsers('module'),
                'fci' => authrz_umUsers('component'),
                'mdl' => '',
                'nnf' => '',
                'trc' => 'UMU',
            ],
            [
                'fmi' => authrz_umRoles('module'),
                'fci' => authrz_umRoles('component'),
                'mdl' => '',
                'nnf' => '',
                'trc' => 'UMR',
            ],
            [
                'fmi' => authrz_hrmRecruit('module'),
                'fci' => authrz_hrmRecruit('component'),
                'mdl' => '',
                'nnf' => '',
                'trc' => 'HMR',
            ],
        ]);
    }
}
