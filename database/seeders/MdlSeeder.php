<?php

namespace Database\Seeders;

use App\Models\Admin\Mdl;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MdlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $models = [
            [
                'description' =>'موديل   1  ',
                'price' =>300,
                'materials' =>'شيفون',
                'accessories' =>'سلسلة , حزام',
                'colors' =>'بيج',
                'image' =>'https://via.placeholder.com',
            ],
            [
                'description' =>'موديل 2',
                'price' =>380,
                'materials' =>'ٍسويدى',
                'accessories' =>' حزام',
                'colors' =>'تركواز',
                'image' =>'https://via.placeholder.com',
            ],

            [
                'description' =>'موديل 3',
                'price' =>380,
                'materials' =>'ٍسويدى',
                'accessories' =>' حزام',
                'colors' =>'تركواز',
                'image' =>'https://via.placeholder.com',
            ],

            [
                'description' =>'موديل 4',
                'price' =>380,
                'materials' =>'ٍسويدى',
                'accessories' =>' حزام',
                'colors' =>'تركواز',
                'image' =>'https://via.placeholder.com',
            ],
            [
                'description' =>'موديل 5',
                'price' =>380,
                'materials' =>'ٍسويدى',
                'accessories' =>' حزام',
                'colors' =>'تركواز',
                'image' =>'https://via.placeholder.com',
            ],
        ];

        Mdl::insert($models);
    }
}
