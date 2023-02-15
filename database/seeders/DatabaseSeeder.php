<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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

        User::truncate();
        Post::truncate();
        Category::truncate();

        Post::factory(5)->create();

        // $user = User::factory()->create();

        // $personal = Category::create([
        //     'name' => 'Personal',
        //     'slug' => 'personal'
        // ]);
        // $family = Category::create([
        //     'name' => 'Family',
        //     'slug' => 'family'
        // ]);
        // $work = Category::create([
        //     'name' => 'Work',
        //     'slug' => 'work'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $family->id,
        //     'title' => 'My Family Post',
        //     'slug' => 'my-family-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem veniam voluptatem dolorum non accusamus laborum, odit quas velit, illo commodi consectetur ullam ratione! Repellat harum modi quae dicta reiciendis cumque illum assumenda corporis sunt nostrum sequi sapiente, asperiores vero voluptate ratione alias quo facilis rem perferendis culpa laboriosam debitis! Qui voluptas maiores soluta porro nemo error est sapiente voluptatum voluptate hic nesciunt accusamus esse vero molestiae quo laudantium quidem eius, dignissimos atque facere nobis cupiditate sint voluptates. Nihil ut amet quibusdam harum atque iure sint? Earum corrupti magnam repellat dignissimos magni, in omnis voluptate recusandae commodi est laudantium error quas!</p>'
        // ]);

        // Post::create([
        //     'user_id' => $user->id,
        //     'category_id' => $work->id,
        //     'title' => 'My Work Post',
        //     'slug' => 'my-work-post',
        //     'excerpt' => 'Lorem ipsum dolor sit amet.',
        //     'body' => '<p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorem veniam voluptatem dolorum non accusamus laborum, odit quas velit, illo commodi consectetur ullam ratione! Repellat harum modi quae dicta reiciendis cumque illum assumenda corporis sunt nostrum sequi sapiente, asperiores vero voluptate ratione alias quo facilis rem perferendis culpa laboriosam debitis! Qui voluptas maiores soluta porro nemo error est sapiente voluptatum voluptate hic nesciunt accusamus esse vero molestiae quo laudantium quidem eius, dignissimos atque facere nobis cupiditate sint voluptates. Nihil ut amet quibusdam harum atque iure sint? Earum corrupti magnam repellat dignissimos magni, in omnis voluptate recusandae commodi est laudantium error quas!</p>'
        // ]);
    }
}
