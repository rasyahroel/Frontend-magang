<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Ramanda Syahputra',
            'username' => 'rasyahroel',
            'email' => 'rasyahroel132@gmail.com',
            'password' => bcrypt('rasya')
        ]);

        // User::create([
        //     'name' => 'Dewi Sartika',
        //     'email' => 'dewisartika@gmail.com',
        //     'password' => bcrypt('dewi')
        // ]);

        User::factory(3)->create();

        Category::create([
            'name' => 'Profile',
            'slug' => 'profile'
        ]);

        Category::create([
            'name' => 'Service',
            'slug' => 'service'
        ]);

        Category::create([
            'name' => 'List Service',
            'slug' => 'list-service'
        ]);

        Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam. Ea quia nemo quae rem neque dolorum tenetur pariatur similique eveniet odio dolores, cum ducimus optio facilis facere dolore accusantium odit, veniam cumque? Veritatis dolorem praesentium esse illum minima consequuntur commodi minus placeat quas quisquam sed a, alias similique, officia cupiditate, id rem. Ullam fugit exercitationem sit in dolorum laborum voluptate quo accusamus optio quos eaque, dolores quas et eligendi ducimus minus consectetur enim maiores a repudiandae praesentium! Deserunt illum obcaecati nemo perferendis? Similique facere pariatur inventore provident? </p><p>Exercitationem earum recusandae sint nemo cumque suscipit perferendis, reprehenderit aliquid laborum nostrum, labore alias quos doloribus at in saepe voluptatum sit quia pariatur non dolores facere facilis amet! Quaerat aspernatur doloribus quasi cum numquam debitis labore, consequuntur esse voluptatibus dolore nostrum voluptate sunt quia non accusamus, quisquam natus fuga dolor alias dolores architecto qui sapiente facere quis? Quia porro consequatur in veniam rerum explicabo perferendis similique voluptatem nobis voluptatum quaerat maiores, ipsa delectus, atque expedita ad nesciunt! Illo beatae vero, dolorem maxime id doloribus veniam, illum iusto sed deserunt error adipisci voluptates nisi rerum atque dicta. Aut culpa impedit veritatis suscipit consequuntur laudantium temporibus ipsa mollitia distinctio id, corporis quaerat officiis ut quidem atque nemo et iste magni neque dolorem perspiciatis maiores.</p><p>Consequuntur consectetur architecto quis voluptas animi itaque pariatur molestiae molestias doloribus voluptatum? Et perspiciatis quos commodi cum quaerat explicabo cupiditate atque facere nihil eius, placeat qui provident ex? Assumenda ut accusamus quaerat magnam nisi fuga facere provident unde? Eligendi placeat voluptate, sequi quae, rerum assumenda, tempora necessitatibus nobis neque harum soluta labore accusamus nam perferendis id. Officia quaerat atque iste tempora culpa porro delectus, repellat minima!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam. Ea quia nemo quae rem neque dolorum tenetur pariatur similique eveniet odio dolores, cum ducimus optio facilis facere dolore accusantium odit, veniam cumque? Veritatis dolorem praesentium esse illum minima consequuntur commodi minus placeat quas quisquam sed a, alias similique, officia cupiditate, id rem. Ullam fugit exercitationem sit in dolorum laborum voluptate quo accusamus optio quos eaque, dolores quas et eligendi ducimus minus consectetur enim maiores a repudiandae praesentium! Deserunt illum obcaecati nemo perferendis? Similique facere pariatur inventore provident? </p><p>Exercitationem earum recusandae sint nemo cumque suscipit perferendis, reprehenderit aliquid laborum nostrum, labore alias quos doloribus at in saepe voluptatum sit quia pariatur non dolores facere facilis amet! Quaerat aspernatur doloribus quasi cum numquam debitis labore, consequuntur esse voluptatibus dolore nostrum voluptate sunt quia non accusamus, quisquam natus fuga dolor alias dolores architecto qui sapiente facere quis? Quia porro consequatur in veniam rerum explicabo perferendis similique voluptatem nobis voluptatum quaerat maiores, ipsa delectus, atque expedita ad nesciunt! Illo beatae vero, dolorem maxime id doloribus veniam, illum iusto sed deserunt error adipisci voluptates nisi rerum atque dicta. Aut culpa impedit veritatis suscipit consequuntur laudantium temporibus ipsa mollitia distinctio id, corporis quaerat officiis ut quidem atque nemo et iste magni neque dolorem perspiciatis maiores.</p><p>Consequuntur consectetur architecto quis voluptas animi itaque pariatur molestiae molestias doloribus voluptatum? Et perspiciatis quos commodi cum quaerat explicabo cupiditate atque facere nihil eius, placeat qui provident ex? Assumenda ut accusamus quaerat magnam nisi fuga facere provident unde? Eligendi placeat voluptate, sequi quae, rerum assumenda, tempora necessitatibus nobis neque harum soluta labore accusamus nam perferendis id. Officia quaerat atque iste tempora culpa porro delectus, repellat minima!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam. Ea quia nemo quae rem neque dolorum tenetur pariatur similique eveniet odio dolores, cum ducimus optio facilis facere dolore accusantium odit, veniam cumque? Veritatis dolorem praesentium esse illum minima consequuntur commodi minus placeat quas quisquam sed a, alias similique, officia cupiditate, id rem. Ullam fugit exercitationem sit in dolorum laborum voluptate quo accusamus optio quos eaque, dolores quas et eligendi ducimus minus consectetur enim maiores a repudiandae praesentium! Deserunt illum obcaecati nemo perferendis? Similique facere pariatur inventore provident? </p><p>Exercitationem earum recusandae sint nemo cumque suscipit perferendis, reprehenderit aliquid laborum nostrum, labore alias quos doloribus at in saepe voluptatum sit quia pariatur non dolores facere facilis amet! Quaerat aspernatur doloribus quasi cum numquam debitis labore, consequuntur esse voluptatibus dolore nostrum voluptate sunt quia non accusamus, quisquam natus fuga dolor alias dolores architecto qui sapiente facere quis? Quia porro consequatur in veniam rerum explicabo perferendis similique voluptatem nobis voluptatum quaerat maiores, ipsa delectus, atque expedita ad nesciunt! Illo beatae vero, dolorem maxime id doloribus veniam, illum iusto sed deserunt error adipisci voluptates nisi rerum atque dicta. Aut culpa impedit veritatis suscipit consequuntur laudantium temporibus ipsa mollitia distinctio id, corporis quaerat officiis ut quidem atque nemo et iste magni neque dolorem perspiciatis maiores.</p><p>Consequuntur consectetur architecto quis voluptas animi itaque pariatur molestiae molestias doloribus voluptatum? Et perspiciatis quos commodi cum quaerat explicabo cupiditate atque facere nihil eius, placeat qui provident ex? Assumenda ut accusamus quaerat magnam nisi fuga facere provident unde? Eligendi placeat voluptate, sequi quae, rerum assumenda, tempora necessitatibus nobis neque harum soluta labore accusamus nam perferendis id. Officia quaerat atque iste tempora culpa porro delectus, repellat minima!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ke Empat',
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam.',
        //     'body' => '<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Sint sit ipsa necessitatibus atque eligendi eius possimus laboriosam incidunt odio voluptas hic aut officiis praesentium commodi quia sunt tempore, laudantium placeat veritatis molestias cumque quam. Ea quia nemo quae rem neque dolorum tenetur pariatur similique eveniet odio dolores, cum ducimus optio facilis facere dolore accusantium odit, veniam cumque? Veritatis dolorem praesentium esse illum minima consequuntur commodi minus placeat quas quisquam sed a, alias similique, officia cupiditate, id rem. Ullam fugit exercitationem sit in dolorum laborum voluptate quo accusamus optio quos eaque, dolores quas et eligendi ducimus minus consectetur enim maiores a repudiandae praesentium! Deserunt illum obcaecati nemo perferendis? Similique facere pariatur inventore provident? </p><p>Exercitationem earum recusandae sint nemo cumque suscipit perferendis, reprehenderit aliquid laborum nostrum, labore alias quos doloribus at in saepe voluptatum sit quia pariatur non dolores facere facilis amet! Quaerat aspernatur doloribus quasi cum numquam debitis labore, consequuntur esse voluptatibus dolore nostrum voluptate sunt quia non accusamus, quisquam natus fuga dolor alias dolores architecto qui sapiente facere quis? Quia porro consequatur in veniam rerum explicabo perferendis similique voluptatem nobis voluptatum quaerat maiores, ipsa delectus, atque expedita ad nesciunt! Illo beatae vero, dolorem maxime id doloribus veniam, illum iusto sed deserunt error adipisci voluptates nisi rerum atque dicta. Aut culpa impedit veritatis suscipit consequuntur laudantium temporibus ipsa mollitia distinctio id, corporis quaerat officiis ut quidem atque nemo et iste magni neque dolorem perspiciatis maiores.</p><p>Consequuntur consectetur architecto quis voluptas animi itaque pariatur molestiae molestias doloribus voluptatum? Et perspiciatis quos commodi cum quaerat explicabo cupiditate atque facere nihil eius, placeat qui provident ex? Assumenda ut accusamus quaerat magnam nisi fuga facere provident unde? Eligendi placeat voluptate, sequi quae, rerum assumenda, tempora necessitatibus nobis neque harum soluta labore accusamus nam perferendis id. Officia quaerat atque iste tempora culpa porro delectus, repellat minima!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
