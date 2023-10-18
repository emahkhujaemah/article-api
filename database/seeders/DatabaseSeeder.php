<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Article;
use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true
        ]);

        User::create([
            'name' => 'Emah',
            'email' => 'emah@gmail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => false
        ]);

        Article::create([
            'title' => 'Re Zero Kara Hajimeru Isekai Seikatsu',
            'content' => 'Re:Zero − Starting Life in Another World merupakan sebuah serial novel ringan Jepang yang ditulis oleh Tappei Nagatsuki dengan ilustrasi oleh Shinichirou Otsuka. Cerita ini mengisahkan Subaru Natsuki, seorang hikikomori yang tiba-tiba dipindahkan ke dunia lain saat dalam perjalanan pulang dari toko',
            'user_id' => '1',
            'category_id' => '1',
        ]);
        
        Article::create([
            'title' => 'The Greatest Estate Developer',
            'content' => 'The Greatest Estate Developer adalah sebuah webtun isekai bergenre komedi. Manhwa ini diadaptasi dari novel web yang ditulis oleh Back-kyung Moon dan diilustrasikan oleh Kim Hyunsoo',
            'user_id' => '2',
            'category_id' => '2',
        ]);

        
        Category::create([
            'name' => 'Jepang',
            'user_id' => '1',
        ]);

        Category::create([
            'name' => 'Korea',
            'user_id' => '2',
        ]);

    
    }
}
