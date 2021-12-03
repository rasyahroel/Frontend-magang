<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin',
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin')
        ]);

        User::create([
            'name' => 'Member',
            'username' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('member')
        ]);

        Category::create([
            'name' => 'Profile',
            'slug' => 'profile'
        ]);

        Category::create([
            'name' => 'Service',
            'slug' => 'service'
        ]);

        Category::create([
            'name' => 'List Service',
            'slug' => 'list-service'
        ]);

        Post::factory(20)->create();
    }
}
