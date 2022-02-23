<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Post::factory()->create();

        // Post::create([
        //     'title'=>'Personal post',
        //     'slug'=>'personal-post',
        //     'body'=>'Professional French teachers designed the texts and exercises with easy vocabulary and elementary grammar to help you grow in ability and confidence. Following your review of each text, answer the questions of comprehension in our online exercises, and we"ll evaluate it immediately. You get instant feedback about your French reading skills. It"s challenging, fun and free!',
        //     'category_id'=>Category::find(1)->id,
        //     'excerpt'=>'my personal Excerpt',
        //     'user_id'=>User::find(1)->first()->id,
        // ]);

        // Post::create([
        //     'title'=>'Work post',
        //     'slug'=>'work-post',
        //     'body'=>'Professional French teachers designed the texts and exercises with easy vocabulary and elementary grammar to help you grow in ability and confidence. Following your review of each text, answer the questions of comprehension in our online exercises, and we"ll evaluate it immediately. You get instant feedback about your French reading skills. It"s challenging, fun and free!',
        //     'category_id'=>Category::find(2)->id,
        //     'excerpt'=>'my personal Excerpt',
        //     'user_id'=>User::find(1)->id,
        // ]);

        // Post::create([
        //     'title'=>'Family post',
        //     'slug'=>'family-post',
        //     'body'=>'Professional French teachers designed the texts and exercises with easy vocabulary and elementary grammar to help you grow in ability and confidence. Following your review of each text, answer the questions of comprehension in our online exercises, and we"ll evaluate it immediately. You get instant feedback about your French reading skills. It"s challenging, fun and free!',
        //     'category_id'=>Category::find(3)->id,
        //     'excerpt'=>'my personal Excerpt',
        //     'user_id'=>User::find(1)->id,
        // ]);
    }
}
