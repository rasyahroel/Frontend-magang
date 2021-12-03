<?php

namespace App\Models;

class Post_ 
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ramanda Syahputra",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam molestiae temporibus nulla fugiat in. Harum sapiente rem excepturi quis velit fugit illum. Error natus dolorem accusantium corrupti aliquid nesciunt veniam mollitia. Pariatur nostrum dolorem molestiae ab ipsam consequuntur fugit libero quam minima nemo voluptatem cum atque magnam ex perferendis repudiandae recusandae rem aspernatur saepe, eveniet rerum explicabo omnis incidunt quo. Porro quibusdam facere saepe nostrum eum quae unde quam ipsum asperiores laborum sapiente, praesentium fuga. Veniam, officiis quo aspernatur possimus fugit, temporibus sit quam, tenetur amet dicta eius deleniti debitis quod rem quis nulla qui doloribus odit numquam autem? Laborum!"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Dewi Sartika",
            "body" => "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sit consequatur quod quis corrupti labore a officiis praesentium tempore magnam soluta at odit ipsa quas optio consequuntur perspiciatis placeat inventore exercitationem cupiditate in rem, atque, temporibus modi earum? Quam porro optio quas qui tempore pariatur laboriosam sint dignissimos omnis maxime, ipsa laborum. Sunt nam earum, illum in quo explicabo voluptas voluptate cupiditate ducimus, rem perspiciatis quaerat repudiandae laudantium optio incidunt, minima odit quod. Ab sit corrupti quis praesentium aliquid quibusdam debitis ducimus eum repellendus saepe. Magnam doloribus ut amet quis iure aut voluptatum? Possimus sit similique vel modi deserunt harum et, aut corporis illum in repellat nobis cum molestiae iure excepturi commodi sapiente, ipsa, labore dolores! Accusamus vero velit corrupti animi soluta molestiae consequuntur fugiat adipisci voluptate! Necessitatibus fugit in minima suscipit ipsa quia id similique, quo ex facilis dolores ullam aspernatur corrupti vitae accusantium modi delectus optio rem dolorem. Minima iusto repudiandae quae tempora quidem dolor? Magni, ut mollitia? Neque maiores officia rem iusto voluptatem dolor quam earum odit ex porro suscipit debitis, numquam nisi. Dolor commodi nemo, porro fuga praesentium modi ipsam. Fuga eos quae totam nisi fugiat esse iure reprehenderit autem ut quasi. Voluptate alias voluptas in qui."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
