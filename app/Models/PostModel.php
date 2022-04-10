<?php

namespace App\Models;


class PostModel
{
    private static $blog_posts = [
        [
            "title" => "1",
            "slug" => "satu",
            "author" => "A",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dolores a nesciunt voluptatem ratione. Provident saepe
tempore consequuntur architecto molestias, unde, quas qui natus ipsam suscipit ratione impedit. Aut blanditiis ad
cupiditate repellat commodi dicta, animi quis. Perspiciatis natus repudiandae accusamus omnis facere molestias, officia
quas exercitationem odio laboriosam aspernatur nam. Vero, quam vitae sit vel fugit odio eveniet veritatis corrupti nam
amet. Illo quos natus odio error impedit eius quia dignissimos adipisci! Omnis itaque, qui assumenda ad fugit minus?"
        ],
        [
            "title" => "2",
            "slug" => "dua",
            "author" => "asdasdB",
            "body" => "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus dolores a nesciunt voluptatem ratione. Provident saepe
tempore consequuntur architecto molestias, unde, quas qui natus ipsam suscipit ratione impedit. Aut blanditiis ad
cupiditate repellat commodi dicta, animi quis. Perspiciatis natus repudiandae accusamus omnis facere molestias, officia
quas exercitationem odio laboriosam aspernatur nam. Vero, quam vitae sit vel fugit odio eveniet veritatis corrupti nam
amet. Illo quos natus odio error impedit eius quia dignissimos adipisci! Omnis itaque, qui assumenda ad fugit minus?"
        ]


    ];

    public static function all()
    {
        return collect(self::$blog_posts);
        //return this->$blog_post;  ( kalau dia sebagai properti biasa  )
    }

    public static function find($slug)
    {
        $posts = static::all(); //mengambil semua data dalam metod all
        // $posts = self::$blog_posts; //mengambil semua data $blog_posts
        // $post = [];
        // foreach ($posts as $p) {
        //     if ($p["slug"] === $slug) {
        //         $post = $p;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}
