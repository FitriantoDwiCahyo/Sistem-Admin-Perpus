<?php

use App\User as AppUser;
use Illuminate\Database\Seeder;
use Illuminate\Foundation\Auth\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = AppUser::create([
            'name' => 'Admin Perpus',
            'email' => 'adminperpus@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        $user = AppUser::create([
            'name' => 'Rian Dwi Cahyo',
            'email' => 'adminrian@gmail.com',
            'password' => bcrypt('12345678'),
            'email_verified_at' => now(),
        ]);

        $user->assignRole('admin');
    }
}
