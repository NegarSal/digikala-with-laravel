<?php

namespace Database\Seeders;

use App\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create ([
            "title" => 'محصول شماره۱',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
        Product::create ([
            'title' => 'محصول شماره۲',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
        Product::create ([
            'title' => 'محصول شماره۳',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
        Product::create ([
            'title' => 'محصول شماره۴',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
        Product::create ([
            'title' => 'محصول شماره۵',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
        Product::create ([
            'title' => 'محصول شماره۶',
            'slug' => '#',
            'oldprice' => '۲۳۰۰۰',
            'newprice' => '۲۸۰۰۰',
            'description' => 'timer'
        ]);
    }
}
