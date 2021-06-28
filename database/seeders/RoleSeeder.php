<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(
            [
                [
                    'name' => 'admin',
                    'guard_name' => 'web',
                ], [
                    'name' => 'branch_admin',
                    'guard_name' => 'web',
                ], [
                    'name' => 'student',
                    'guard_name' => 'web',
                ], [
                    'name' => 'trainer',
                    'guard_name' => 'web',
                ], [
                    'name' => 'freelancer',
                    'guard_name' => 'web',
                ],
            ]
        );





        DB::table('permissions')->insert([

            [
                'name' => 'admin',
                'guard_name' => 'web',
            ],   
            [
                'name' => 'branch_admin',
                'guard_name' => 'web',
            ],   
            [
                'name' => 'student',
                'guard_name' => 'web',
            ],   
            [
                'name' => 'trainer',
                'guard_name' => 'web',
            ],   
            [
                'name' => 'freelancer',
                'guard_name' => 'web',
            ],   
            
        ]);




        DB::table('role_has_permissions')->insert([
            [
                'permission_id' => 1,
                'role_id' => 1,
            ], [
                'permission_id' => 2,
                'role_id' => 2,
            ], [
                'permission_id' => 3,
                'role_id' => 3,
            ], [
                'permission_id' => 4,
                'role_id' => 4,
            ], [
                'permission_id' => 5,
                'role_id' => 5,
            ], 
        ]);

        
        DB::table('model_has_roles')->insert([
            [
                'role_id' => 1,
                'model_type' => 'App\Models\User',
                'model_id' => 1,
            ], [
                'role_id' => 2,
                'model_type' => 'App\Models\User',
                'model_id' => 2,
            ], [
                'role_id' => 3,
                'model_type' => 'App\Models\User',
                'model_id' => 3,
            ], [
                'role_id' => 4,
                'model_type' => 'App\Models\User',
                'model_id' => 4,
            ], [
                'role_id' => 5,
                'model_type' => 'App\Models\User',
                'model_id' => 5,
            ],
        ]);
        
    }
}
