<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subcategories')->delete();

        $subcategories = [    
            // Guitars and Basses    
            ['name' => 'Electric Guitars', 'slug' => 'electric-guitars', 'category_id' => 1],
            ['name' => 'Acoustic Guitars', 'slug' => 'acoustic-guitars', 'category_id' => 1],
            ['name' => 'Classical Guitars', 'slug' => 'classical-guitars', 'category_id' => 1],
            ['name' => 'Bass Guitars', 'slug' => 'bass-guitars', 'category_id' => 1],
            ['name' => 'Guitar Amplifiers', 'slug' => 'guitar-amplifiers', 'category_id' => 1],
            ['name' => 'Guitar Effects Pedals', 'slug' => 'guitar-effects-pedals', 'category_id' => 1],
            ['name' => 'Strings', 'slug' => 'strings', 'category_id' => 1],
            ['name' => 'Picks', 'slug' => 'picks', 'category_id' => 1],
            ['name' => 'Straps', 'slug' => 'straps', 'category_id' => 1],
            ['name' => 'Stands', 'slug' => 'stands', 'category_id' => 1],
            ['name' => 'Cases and Gig Bags', 'slug' => 'cases-and-gig-bags', 'category_id' => 1],
        
            // Keyboards and Pianos
            ['name' => 'Electronic Keyboards', 'slug' => 'electronic-keyboards', 'category_id' => 2],
            ['name' => 'Digital Pianos', 'slug' => 'digital-pianos', 'category_id' => 2],
            ['name' => 'Acoustic Pianos', 'slug' => 'acoustic-pianos', 'category_id' => 2],
            ['name' => 'Keyboard Amplifiers', 'slug' => 'keyboard-amplifiers', 'category_id' => 2],
            ['name' => 'Keyboard Stands', 'slug' => 'keyboard-stands', 'category_id' => 2],
            ['name' => 'Pedals and Accessories', 'slug' => 'pedals-and-accessories', 'category_id' => 2],
        
            // Drums and Percussion
            ['name' => 'Drum Sets', 'slug' => 'drum-sets', 'category_id' => 3],
            ['name' => 'Cymbals', 'slug' => 'cymbals', 'category_id' => 3],
            ['name' => 'Snare Drums', 'slug' => 'snare-drums', 'category_id' => 3],
            ['name' => 'Hardware', 'slug' => 'hardware', 'category_id' => 3],
            ['name' => 'Sticks and Brushes', 'slug' => 'sticks-and-brushes', 'category_id' => 3],
            ['name' => 'Cases and Bags', 'slug' => 'cases-and-bags', 'category_id' => 3],
        
            // Brass and Woodwind Instruments
            ['name' => 'Saxophones', 'slug' => 'saxophones', 'category_id' => 4],
            ['name' => 'Trumpets', 'slug' => 'trumpets', 'category_id' => 4],
            ['name' => 'Trombones', 'slug' => 'trombones', 'category_id' => 4],
            ['name' => 'Flutes', 'slug' => 'flutes', 'category_id' => 4],
            ['name' => 'Clarinets', 'slug' => 'clarinets', 'category_id' => 4],
            ['name' => 'Piccolos', 'slug' => 'piccolos', 'category_id' => 4],
            ['name' => 'Oboes', 'slug' => 'oboes', 'category_id' => 4],
            ['name' => 'Bassoons', 'slug' => 'bassoons', 'category_id' => 4],
            ['name' => 'Mouthpieces', 'slug' => 'mouthpieces', 'category_id' => 4],
            ['name' => 'Reeds', 'slug' => 'reeds', 'category_id' => 4],
            ['name' => 'Brass Accessories', 'slug' => 'brass-accessories', 'category_id' => 4],
            ['name' => 'Woodwind Accessories', 'slug' => 'woodwind-accessories', 'category_id' => 4],
            // Strings and Orchestral Instruments
            ['name' => 'Violins', 'slug' => 'violins', 'category_id' => 5],
            ['name' => 'Violas', 'slug' => 'violas', 'category_id' => 5],
            ['name' => 'Cellos', 'slug' => 'cellos', 'category_id' => 5],
            ['name' => 'Double Basses', 'slug' => 'double-basses', 'category_id' => 5],
            ['name' => 'Harp', 'slug' => 'harp', 'category_id' => 5],
            ['name' => 'String Accessories', 'slug' => 'string-accessories', 'category_id' => 5],

            // Folk and World Instruments
            ['name' => 'Banjos', 'slug' => 'banjos', 'category_id' => 6],
            ['name' => 'Mandolins', 'slug' => 'mandolins', 'category_id' => 6],
            ['name' => 'Ukuleles', 'slug' => 'ukuleles', 'category_id' => 6],
            ['name' => 'Harmonicas', 'slug' => 'harmonicas', 'category_id' => 6],
            ['name' => 'Didgeridoos', 'slug' => 'didgeridoos', 'category_id' => 6],
            ['name' => 'Bagpipes', 'slug' => 'bagpipes', 'category_id' => 6],
            ['name' => 'World Percussion', 'slug' => 'world-percussion', 'category_id' => 6],
            // Audio Equipment
            ['name' => 'Mixers', 'slug' => 'mixers', 'category_id' => 7],
            ['name' => 'Microphones', 'slug' => 'microphones', 'category_id' => 7],
            ['name' => 'Studio Monitors', 'slug' => 'studio-monitors', 'category_id' => 7],
            ['name' => 'Audio Interfaces', 'slug' => 'audio-interfaces', 'category_id' => 7],
            ['name' => 'Headphones', 'slug' => 'headphones', 'category_id' => 7],
            ['name' => 'PA Systems', 'slug' => 'pa-systems', 'category_id' => 7],

            // Music Accessories
            ['name' => 'Stands and Mounts', 'slug' => 'stands-and-mounts', 'category_id' => 8],
            ['name' => 'Cases and Bags', 'slug' => 'cases-and-bags', 'category_id' => 8],
            ['name' => 'Cables and Adapters', 'slug' => 'cables-and-adapters', 'category_id' => 8],
            ['name' => 'Metronomes and Tuners', 'slug' => 'metronomes-and-tuners', 'category_id' => 8],
            ['name' => 'Sheet Music and Songbooks', 'slug' => 'sheet-music-and-songbooks', 'category_id' => 8],

            // DJ and Electronic Music
            ['name' => 'DJ Controllers', 'slug' => 'dj-controllers', 'category_id' => 9],
            ['name' => 'Turntables', 'slug' => 'turntables', 'category_id' => 9],
            ['name' => 'Samplers and Sequencers', 'slug' => 'samplers-and-sequencers', 'category_id' => 9],
            ['name' => 'Synthesizers', 'slug' => 'synthesizers', 'category_id' => 9],
            ['name' => 'Drum Machines', 'slug' => 'drum-machines', 'category_id' => 9],
            ['name' => 'DJ Mixers', 'slug' => 'dj-mixers', 'category_id' => 9],

            // Lighting and Stage Effects
            ['name' => 'Stage Lighting', 'slug' => 'stage-lighting', 'category_id' => 10],
            ['name' => 'Fog and Smoke Machines', 'slug' => 'fog-and-smoke-machines', 'category_id' => 10],
            ['name' => 'Lasers', 'slug' => 'lasers', 'category_id' => 10],
            ['name' => 'Spotlights', 'slug' => 'spotlights', 'category_id' => 10],
            ['name' => 'Gobo Projectors', 'slug' => 'gobo-projectors', 'category_id' => 10],
            ['name' => 'Lighting Controllers', 'slug' => 'lighting-controllers', 'category_id' => 10],
            ];
            DB::table('subcategories')->insert($subcategories);
    }
}
