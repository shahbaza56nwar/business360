<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;


class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('permissions')->truncate();
        Schema::enableForeignKeyConstraints();

        DB::table('permissions')->insert([
            [
                'name' => 'Access to User Home',
                'title' => 'user_home',
                'module_id' => authrz_umUsers('module'),
                'component_id' => authrz_umUsers('component'),
                'permission_id' => authrz_umUsers('user_home'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'User Create',
                'title' => 'user_create',
                'module_id' => authrz_umUsers('module'),
                'component_id' => authrz_umUsers('component'),
                'permission_id' => authrz_umUsers('user_create'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'User Update',
                'title' => 'user_update',
                'module_id' => authrz_umUsers('module'),
                'component_id' => authrz_umUsers('component'),
                'permission_id' => authrz_umUsers('user_update'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'User Delete',
                'title' => 'user_delete',
                'module_id' => authrz_umUsers('module'),
                'component_id' => authrz_umUsers('component'),
                'permission_id' => authrz_umUsers('user_delete'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Access to Role Home',
                'title' => 'role_home',
                'module_id' => authrz_umRoles('module'),
                'component_id' => authrz_umRoles('component'),
                'permission_id' => authrz_umRoles('role_home'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Role Create',
                'title' => 'role_create',
                'module_id' => authrz_umRoles('module'),
                'component_id' => authrz_umRoles('component'),
                'permission_id' => authrz_umRoles('role_create'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Role Update',
                'title' => 'role_update',
                'module_id' => authrz_umRoles('module'),
                'component_id' => authrz_umRoles('component'),
                'permission_id' => authrz_umRoles('role_update'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Role Delete',
                'title' => 'role_delete',
                'module_id' => authrz_umRoles('module'),
                'component_id' => authrz_umRoles('component'),
                'permission_id' => authrz_umRoles('role_delete'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Access to Recruit Home',
                'title' => 'recruit_home',
                'module_id' => authrz_hrmRecruit('module'),
                'component_id' => authrz_hrmRecruit('component'),
                'permission_id' => authrz_hrmRecruit('recruit_home'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Access to Job opening Home',
                'title' => 'job_opening_home',
                'module_id' => authrz_hrmRecruit('module'),
                'component_id' => authrz_hrmRecruit('component'),
                'permission_id' => authrz_hrmRecruit('job_opening_home'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Job Create',
                'title' => 'job_create',
                'module_id' => authrz_hrmRecruit('module'),
                'component_id' => authrz_hrmRecruit('component'),
                'permission_id' => authrz_hrmRecruit('job_create'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Job Update',
                'title' => 'job_update',
                'module_id' => authrz_hrmRecruit('module'),
                'component_id' => authrz_hrmRecruit('component'),
                'permission_id' => authrz_hrmRecruit('job_update'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
            [
                'name' => 'Job Delete',
                'title' => 'job_delete',
                'module_id' => authrz_hrmRecruit('module'),
                'component_id' => authrz_hrmRecruit('component'),
                'permission_id' => authrz_hrmRecruit('job_delete'),
                'guard_name' => 'web',
                'created_at' => now(), // Current timestamp
                'updated_at' => now(), // Current timestamp
                'sts' => '1',
            ],
        ]);
    }
}
