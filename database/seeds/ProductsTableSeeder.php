<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'subcategory_id' => 1,
            'category_id' => 1,
            'brand_id' => 1,
            'gender_id' => 1,
            'size_id' => 1,
            'image' => '.jpg',
            'title' => 'Jordan',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu quam, molestie vel semper vitae, hendrerit vitae quam. Aliquam sit amet tortor feugiat, placerat tortor non, semper eros. Cras vestibulum lectus quis nisi mollis rhoncus. Nullam in libero est. Maecenas tincidunt est eu vulputate maximus. Suspendisse eu lobortis eros. Phasellus gravida et tortor a finibus. Ut quis purus molestie, aliquam mauris sed, auctor ipsum.',
            'quantity' => 3,
            'color' => 'white',
            'price' => '50.00'
    ]);

        DB::table('products')->insert([
            'subcategory_id' => 1,
            'category_id' => 1,
            'brand_id' => 2,
            'gender_id' => 2,
            'size_id' => 1,
            'image' => '.jpg',
            'title' => 'Nike',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu quam, molestie vel semper vitae, hendrerit vitae quam. Aliquam sit amet tortor feugiat, placerat tortor non, semper eros. Cras vestibulum lectus quis nisi mollis rhoncus. Nullam in libero est. Maecenas tincidunt est eu vulputate maximus. Suspendisse eu lobortis eros. Phasellus gravida et tortor a finibus. Ut quis purus molestie, aliquam mauris sed, auctor ipsum.',
            'quantity' => 3,
            'color' => 'white',
            'price' => '50.00'
        ]);

        DB::table('products')->insert([
            'subcategory_id' => 1,
            'category_id' => 1,
            'brand_id' => 3,
            'gender_id' => 3,
            'size_id' => 1,
            'image' => '.jpg',
            'title' => 'adidas',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu quam, molestie vel semper vitae, hendrerit vitae quam. Aliquam sit amet tortor feugiat, placerat tortor non, semper eros. Cras vestibulum lectus quis nisi mollis rhoncus. Nullam in libero est. Maecenas tincidunt est eu vulputate maximus. Suspendisse eu lobortis eros. Phasellus gravida et tortor a finibus. Ut quis purus molestie, aliquam mauris sed, auctor ipsum.',
            'quantity' => 3,
            'color' => 'white',
            'price' => '50.00'
        ]);

        DB::table('products')->insert([
            'subcategory_id' => 1,
            'category_id' => 1,
            'brand_id' => 4,
            'gender_id' => 4,
            'size_id' => 1,
            'image' => '.jpg',
            'title' => 'Levi',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent arcu quam, molestie vel semper vitae, hendrerit vitae quam. Aliquam sit amet tortor feugiat, placerat tortor non, semper eros. Cras vestibulum lectus quis nisi mollis rhoncus. Nullam in libero est. Maecenas tincidunt est eu vulputate maximus. Suspendisse eu lobortis eros. Phasellus gravida et tortor a finibus. Ut quis purus molestie, aliquam mauris sed, auctor ipsum.',
            'quantity' => 3,
            'color' => 'white',
            'price' => '50.00'
        ]);

    }
}
