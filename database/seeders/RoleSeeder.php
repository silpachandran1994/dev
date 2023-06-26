<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('roles')->delete();

        $roles = [
            ['id' => 1, 'name' => 'isAdmin'],
            ['id' => 2, 'name' => 'isTranslater'],
            ['id' => 3, 'name' => 'isEmailVerified'],
            ['id' => 4, 'name' => ' isVerified'],
        ];
        foreach($roles as $role){
            Role::create($role);
        }
    }
}
