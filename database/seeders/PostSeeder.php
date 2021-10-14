<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            [
                'title' => 'おにぎり',
                'body' => 'おにぎりを握って食べた',
                'user_id' => 1,
                'category_id' => 1,
                'image' => '20211013_test.jpg',
            ],
        ]);
    }
}
