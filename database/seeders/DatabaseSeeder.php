<?php

namespace Database\Seeders;

use App\Models\Blog;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        //change count to 500 to create 500 and change rand number generated from 1 to 500 in blogFactory
        User::factory(10)->create();
        Blog::factory(10)->create();
    }
}
