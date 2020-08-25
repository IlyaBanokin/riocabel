<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [];

        for($i = 0; $i <= 10; $i++){
            $cName = 'Кабели #'.$i;
            $keywords = 'Ключевые слова';
            $description = 'Краткое описание';
            $img = 'no_image.jpg';
            $parent_id = ($i > 4) ? rand(1, 4) : 0;

            $categories[] = [
                'title' => $cName,
                'slug' => Str::slug($cName),
                'parent_id' => $parent_id,
                'keywords' => $keywords,
                'description' => $description,
                'img' => $img,
            ];
        }

        DB::table('categories')->insert($categories);
    }
}
