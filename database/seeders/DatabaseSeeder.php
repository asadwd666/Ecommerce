<?php

namespace Database\Seeders;
use App\Models\User;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $adminrole = Role::create(['name' => 'admin']);
        $admin=User::create([
            'name'=>'admin',
            'email'=>'admin@gmail.com',
            'password'=>bcrypt('abc123')
        ]);
        // assining role 
        $admin->assignrole($adminrole);

        $userrole = Role::create(['name' => 'user']);
        $user=User::create([
            'name'=>'user',
            'email'=>'user@gmail.com',
            'password'=>bcrypt('abc123')
        ]);
        // assining role 
        $user->assignrole($userrole);
        // $permission = Permission::create(['name' => 'edit articles']);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
