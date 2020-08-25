<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->sentence(rand(2, 4), true);
    $txt = $faker->realText(rand(1000, 4000)); // Реальный текст от 1000-4000 символов
    $createdAt = $faker->dateTimeBetween('-3 month', '-2 month');
    $img = 'no_image.jpg';
    $hit = rand(0, 1);

    $data = [
        'category_id' => rand(1, 10),
        'title' => $title,
        'slug' => Str::slug($title),
        'content' => $txt,
        'keywords' => $faker->text(rand(40, 160)),
        'description' => $faker->text(rand(40, 160)),
        'img' => $img,
        'hit' => $hit,
        'created_at' => $createdAt,
        'updated_at' => $createdAt,
    ];

    return $data;
});
