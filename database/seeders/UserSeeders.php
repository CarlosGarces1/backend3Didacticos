<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Laravel\Jetstream\Rules\Role;

class UserSeeders extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        User::insert([
            [
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'date_birth' => '2001-04-01',
                'age' => '22',
                'username' => 'Admin123',
                'email' => 'felipegarces@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'first_name' => 'Cliente1',
                'last_name' => 'Cliente',
                'date_birth' => '2001-04-01',
                'username' => 'Cliente123',
                'age' => '22',

                'email' => 'customer@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'first_name' => 'Cliente2',
                'last_name' => 'Cliente',
                'date_birth' => '2001-04-01',
                'username' => 'Cliente1234',
                'age' => '22',

                'email' => 'customer1@gmail.com',
                'password' => Hash::make('123456789'),
            ],
            [
                'first_name' => 'Cliente3',
                'last_name' => 'Cliente',
                'date_birth' => '2001-04-01',
                'username' => 'Cliente1235',
                'age' => '22',

                'email' => 'customer3@gmail.com',
                'password' => Hash::make('123456789'),
            ],
        ]);
    }
}
