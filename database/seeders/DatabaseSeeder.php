<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        // User::create([
        //     'name' => 'Robi',
        //     'email' => 'robisetiawan@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'rabid',
        //     'email' => 'rabid@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        User::factory(3)->create();

        Category::create([
            'name' => 'Programming',
            'slug' => 'Programming',
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal',
        ]);

        Post::factory(20)->create();
        // Post::create([
        //     'title' => 'Judul pertam',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'voluptatem voluptates laudantium, excepturi eum temporibus sed molestiae! Voluptatum, similique quo? Tenetur, commodi iusto!',
        //     'body' => 'voluptatem voluptates laudantium, excepturi eum temporibus sed molestiae! Voluptatum, similique quo? Tenetur, commodi iusto!voluptatem voluptates laudantium, excepturi eum temporibus sed molestiae! Voluptatum, similique quo? Tenetur, commodi iusto!voluptatem voluptates laudantium, excepturi eum temporibus sed molestiae! Voluptatum, similique quo? Tenetur, commodi iusto!',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
        // Post::create([
        //     'title' => 'Judul kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'tium ab omnis odio adipisci accusantium vitae perspiciatis consequatur et sapiente, officia nisi, expedita dolorem placeat ipsam v',
        //     'body' => 'tium ab omnis odio adipisci accusantium vitae perspiciatis consequatur et sapiente, officia nisi, expedita dolorem placeat ipsam vtium ab omnis odio adipisci accusantium vitae perspiciatis consequatur et sapiente, officia nisi, expedita dolorem placeat ipsam vtium ab omnis odio adipisci accusantium vitae perspiciatis consequatur et sapiente, officia nisi, expedita dolorem placeat ipsam v',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
