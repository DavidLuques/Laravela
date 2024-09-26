<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       $post = new Post();
       $post->title="alicia en el parais de las rascacielos";
       $post->content="this is a content";
       $post->category="wathever u want it's the category";
       $post->published_at=now();
       $post->save();

       Post::factory(100)->create();
        }
}
