<?php

namespace Database\Seeders;

use App\Models\ModulePermission;
use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class PermissionSeeder extends Seeder
{
      /**
       * Run the database seeds.
       *
       * @return void
       */
      public function run()
      {
            Schema::disableForeignKeyConstraints();
            Permission::truncate();
            Schema::enableForeignKeyConstraints();

            Permission::insert([
                [
                    'name' => 'category-view',
                    'guard_name' => 'admin',
                ],
                [
                    'name' => 'category-create',
                    'guard_name' => 'admin',
                ],
                [
                    'name' => 'category-update',
                    'guard_name' => 'admin',
                ],
                [
                    'name' => 'category-delete',
                    'guard_name' => 'admin',
                ]
            ]);

            //admin
            Permission::insert([
                  [
                        'name' => 'user-view',
                        'guard_name' => 'admin',
                  ],
                  [
                        'name' => 'user-create',
                        'guard_name' => 'admin',
                  ],
                  [
                        'name' => 'user-update',
                        'guard_name' => 'admin',
                  ],
                  [
                        'name' => 'user-delete',
                        'guard_name' => 'admin',
                  ]
            ]);


      }
}
