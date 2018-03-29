<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(App\Product::class, function () {
    return [
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
    ];
});
