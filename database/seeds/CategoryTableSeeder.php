<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Community',
                'children' => [
                    ['name' => 'Activities'],
                    ['name' => 'Artists'],
                    ['name' => 'Cildcare'],
                    ['name' => 'Classes'],
                    
                ]
            ],
            [
                'name' => 'Personals',
                'children' => [
                    ['name' => 'Strictly platonic'],
                    ['name' => 'Women seeking women'],
                    ['name' => 'Women seeking men'],
                    ['name' => 'Men seeking women'],                
                ]
            ],
        ];

        foreach ($categories as $category) {
            \App\Category::create($category);

        }


    }
}