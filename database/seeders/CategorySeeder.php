<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [        
            ['name' => 'Guitars and Basses', 'slug' => 'guitars-and-basses', 'image' => 'guitars.png'],
            ['name' => 'Keyboards and Pianos', 'slug' => 'keyboards-and-pianos', 'image' => 'keyboards.png'],
            ['name' => 'Drums and Percussion', 'slug' => 'drums-and-percussion', 'image' => 'drums.png'],
            ['name' => 'Brass and Woodwind Instruments', 'slug' => 'brass-and-woodwind-instruments', 'image' => 'brass.png'],
            ['name' => 'Strings and Orchestral Instruments', 'slug' => 'strings-and-orchestral-instruments', 'image' => 'strings.png'],
            ['name' => 'Folk and World Instruments', 'slug' => 'folk-and-world-instruments', 'image' => 'folk.png'],
            ['name' => 'Audio Equipment', 'slug' => 'audio-equipment', 'image' => 'audio.png'],
            ['name' => 'Music Accessories', 'slug' => 'music-accessories', 'image' => 'accessories.png'],
            ['name' => 'DJ and Electronic Music', 'slug' => 'dj-and-electronic-music', 'image' => 'dj.png'],
            ['name' => 'Lighting and Stage Effects', 'slug' => 'lighting-and-stage-effects', 'image' => 'lighting.png'],
        ];
    
        DB::table('categories')->insert($categories);
    }
}
