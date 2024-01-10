<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;
use App\Models\Category;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(3)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
          'name' => 'Rangga Wahyu Prima',
          'username' => 'Ryuu',
          'email' => 'rangga.wahyudvlpr@gmail.com',
          'password' => bcrypt('Password')
        ]);

        // User::create([
        //   'name' => 'RyuuXo Test',
        //   'email' => 'ryuuxo@gmail.com',
        //   'password' => bcrypt('12345')
        // ]);


        Category::create([
          'name' => 'Web Programming',
          'slug' => 'web-programming'
        ]);

        Category::create([
          'name' => 'Web Design',
          'slug' => 'web-design'
        ]);

        Category::create([
          'name' => 'Personal',
          'slug' => 'personal'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //   'title' => 'Judul Pertama',
        //   'slug' => 'judul-pertama',
        //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cumque consequatur magni rerum fugit earum, optio cupiditate quisquam. Cumque quasi in accusantium deleniti cupiditate libero',
        //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatum alias molestias vel quod itaque eos! Voluptatum distinctio deserunt mollitia voluptatem eos voluptas nihil accusamus. Mollitia asperiores at non placeat dolores, consequatur, similique sed inventore eligendi est laborum, libero impedit nemo vitae in voluptatum nulla. Nemo earum voluptates ullam omnis ab repellat officiis debitis? Sapiente velit iure voluptatum placeat expedita omnis deleniti neque fugit aperiam. Enim, voluptates animi. Accusantium cum quo corrupti commodi quidem labore, beatae voluptas. Aliquid, nesciunt cumque aut fugit velit illum voluptatem sint. Vel, cupiditate accusantium voluptates molestiae minus voluptas pariatur adipisci alias, atque magnam recusandae distinctio?',
        //   'category_id' => 1,
        //   'user_id' => 1
        // ]);
        
        // Post::create([
        //   'title' => 'Judul Kedua',
        //   'slug' => 'judul-kedua',
        //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cumque consequatur magni rerum fugit earum, optio cupiditate quisquam. Cumque quasi in accusantium deleniti cupiditate libero',
        //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatum alias molestias vel quod itaque eos! Voluptatum distinctio deserunt mollitia voluptatem eos voluptas nihil accusamus. Mollitia asperiores at non placeat dolores, consequatur, similique sed inventore eligendi est laborum, libero impedit nemo vitae in voluptatum nulla. Nemo earum voluptates ullam omnis ab repellat officiis debitis? Sapiente velit iure voluptatum placeat expedita omnis deleniti neque fugit aperiam. Enim, voluptates animi. Accusantium cum quo corrupti commodi quidem labore, beatae voluptas. Aliquid, nesciunt cumque aut fugit velit illum voluptatem sint. Vel, cupiditate accusantium voluptates molestiae minus voluptas pariatur adipisci alias, atque magnam recusandae distinctio?',
        //   'category_id' => 1,
        //   'user_id' => 1
        // ]);

        // Post::create([
        //   'title' => 'Judul Ketiga',
        //   'slug' => 'judul-ketiga',
        //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cumque consequatur magni rerum fugit earum, optio cupiditate quisquam. Cumque quasi in accusantium deleniti cupiditate libero',
        //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatum alias molestias vel quod itaque eos! Voluptatum distinctio deserunt mollitia voluptatem eos voluptas nihil accusamus. Mollitia asperiores at non placeat dolores, consequatur, similique sed inventore eligendi est laborum, libero impedit nemo vitae in voluptatum nulla. Nemo earum voluptates ullam omnis ab repellat officiis debitis? Sapiente velit iure voluptatum placeat expedita omnis deleniti neque fugit aperiam. Enim, voluptates animi. Accusantium cum quo corrupti commodi quidem labore, beatae voluptas. Aliquid, nesciunt cumque aut fugit velit illum voluptatem sint. Vel, cupiditate accusantium voluptates molestiae minus voluptas pariatur adipisci alias, atque magnam recusandae distinctio?',
        //   'category_id' => 2,
        //   'user_id' => 1
        // ]);

        // Post::create([
        //   'title' => 'Judul Keempat',
        //   'slug' => 'judul-keempat',
        //   'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam cumque consequatur magni rerum fugit earum, optio cupiditate quisquam. Cumque quasi in accusantium deleniti cupiditate libero',
        //   'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt voluptatum alias molestias vel quod itaque eos! Voluptatum distinctio deserunt mollitia voluptatem eos voluptas nihil accusamus. Mollitia asperiores at non placeat dolores, consequatur, similique sed inventore eligendi est laborum, libero impedit nemo vitae in voluptatum nulla. Nemo earum voluptates ullam omnis ab repellat officiis debitis? Sapiente velit iure voluptatum placeat expedita omnis deleniti neque fugit aperiam. Enim, voluptates animi. Accusantium cum quo corrupti commodi quidem labore, beatae voluptas. Aliquid, nesciunt cumque aut fugit velit illum voluptatem sint. Vel, cupiditate accusantium voluptates molestiae minus voluptas pariatur adipisci alias, atque magnam recusandae distinctio?',
        //   'category_id' => 2,
        //   'user_id' => 2
        // ]);
    }
}
