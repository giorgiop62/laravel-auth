<?php

namespace Database\Seeders;

use Faker\Generator as Faker;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Post;
class PostTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker){
        for($i = 0; $i<10; $i++){
            $new_post = new Post();
            $new_post->title = $faker->sentence();
            $new_post->slug = Post::generateSlug($new_post->title);
            $new_post->data =date('Y-m-d');
            $new_post->text = $faker->paragraph(5);
            $new_post->save();
            //dd($new_post);
        }
    }

}
