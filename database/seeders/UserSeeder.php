<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('users')->truncate();
        DB::table('roles')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $role = Role::create(['name' => 'admin']);
        $user = User::factory()
            ->count(1)
            ->create([
                'name' => 'Mohammad Imani',
                'email' => 'mohammad@imani.com',
                'phone' => '+989354209109',
                'password' => Hash::make('Eminef#7077'),
            ]);

    }
}
