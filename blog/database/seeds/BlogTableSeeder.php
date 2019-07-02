<?php

use Illuminate\Database\Seeder;
use App\Blog;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            $blog = new Blog();
            $blog->name = str_random(5);
            $blog->type = str_random(5);
            $blog->description = str_random(10);
            $blog->content = str_random(20).' '.str_random(20).
            str_random(20).' '.str_random(20).' '.str_random(20).' '.str_random(20).' '.
            str_random(20).' '.str_random(20).' '.str_random(20).' '.
            str_random(20).' '.str_random(20).' '.str_random(20);
            $blog->image = 'image/'."n.jpg";
            $blog->save();
        }
    }
}
