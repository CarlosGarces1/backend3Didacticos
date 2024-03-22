<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::insert([
            [
                'name' => 'Admin',
                'description' => 'Admin',
                'users_id' => '1',

            ],
            [
                'name' => 'Cliente',
                'description' => 'Cliente',
                'users_id' => '1',


            ],
        ]);
    }
}
