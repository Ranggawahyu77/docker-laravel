<?php

namespace App\Models;

class Post 
{
  private static $blog_posts = [
    [
        "title" => "Halaman Blog Pertama",
        "slug" => "halaman-blog-pertama",
        "author" => "Rangga Wahyu Prima",
        "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dolorem, rem dolorum. Molestiae eaque, officiis nemo rerum ex, accusantium soluta et distinctio eum iusto iste dolor quis aperiam, corporis qui repellendus deserunt nobis alias libero quas? Dolore aperiam amet vel, repudiandae dignissimos asperiores, repellat earum saepe, consequuntur omnis rerum sint dolores possimus fugit neque adipisci totam quos a tenetur ex eligendi illum id maiores aliquam. Fugiat aspernatur dolorum dicta asperiores facilis aut modi illo voluptatem itaque unde, tempore, cupiditate expedita voluptatum?"
    ],
    [
        "title" => "Halaman Blog Kedua",
        "slug" => "halaman-blog-kedua",
        "author" => "RyuuXo Test",
        "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, alias a aliquam itaque eaque dicta debitis error dignissimos minima magnam distinctio laboriosam quas maiores aliquid voluptas molestias atque nihil inventore dolorem ipsum nulla ut. Debitis nisi, sapiente placeat sequi at dolorum beatae consequatur mollitia. Nobis molestias repellendus velit qui. Ut corporis voluptas iure a labore alias animi aliquam ab inventore, repudiandae eaque sit nulla. Veritatis distinctio incidunt labore ea placeat architecto eius quod voluptates accusantium iste, aperiam illum beatae magnam vel ad voluptas eos in debitis aspernatur! Qui delectus sint magni harum atque beatae commodi molestiae, nam, laborum voluptates provident."
    ],
  ];

  public static function all(){
    return collect(self::$blog_posts);
  }

  public static function find($slug){
    $posts = static::all();
    // $post = [];
    // foreach ($posts as $p) {
    //   if($p["slug"] === $slug){
    //     $post = $p;
    //   }
    // }

    return $posts->firstWhere('slug', $slug);
  }
}
