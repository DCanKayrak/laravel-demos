<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::truncate();
        Category::truncate();

        $user = User::factory()->create([
            'username' => 'lothunia',
            'name'  => 'Danyal Can'
        ]);

        Post::factory(5)->create([
            'user_id' => $user -> id
        ]);

//        $user = User::factory()->create();
//
//        $personal = Category::create([
//            'name'=> 'Personal',
//            'slug' => 'personal'
//        ]);
//
//        $family = Category::create([
//            'name'=> 'Family',
//            'slug' => 'family'
//        ]);
//
//        $hobby = Category::create([
//            'name'=> 'Hobby',
//            'slug' => 'hobby'
//        ]);
//
//        $post1 = Post::create([
//            'user_id'=> $user->id,
//            'category_id' => $family->id,
//            'title' => 'family test',
//            'slug' => 'my-first-family-post',
//            'excerpt' => 'my-first-family-post',
//            'body' => 'Lorem ipsum dolor sit amet.'
//        ]);
//
//        $post2 = Post::create([
//            'user_id'=> $user->id,
//            'category_id' => $hobby->id,
//            'title' => 'hobby test',
//            'slug' => 'my-first-hobby-post',
//            'excerpt' => 'my-first-hobby-post',
//            'body' => 'Lorem ipsum dolor sit amet.'
//        ]);

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
