<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
    	Role::create(['name' => 'superadmin', 'description' => 'Super Administrator']);

    	$user = User::create([
			'name'     => 'Super Administrator',
			'username' => 'superadmin',
			'email'    => 'superadmin@email.com',
			'password' => Hash::make('secret'),
        ]);

        $user->assignRole('superadmin');
    }
}
