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
            ['name' => 'Electric Guitars', 'slug' => 'electric-guitars', 'category_id' => 28],
            ['name' => 'Acoustic Guitars', 'slug' => 'acoustic-guitars', 'category_id' => 28],
            ['name' => 'Classical Guitars', 'slug' => 'classical-guitars', 'category_id' => 28],
            ['name' => 'Bass Guitars', 'slug' => 'bass-guitars', 'category_id' => 28],
            ['name' => 'Guitar Amplifiers', 'slug' => 'guitar-amplifiers', 'category_id' => 28],
            ['name' => 'Guitar Effects Pedals', 'slug' => 'guitar-effects-pedals', 'category_id' => 28],
            ['name' => 'Strings', 'slug' => 'strings', 'category_id' => 28],
            ['name' => 'Picks', 'slug' => 'picks', 'category_id' => 28],
            ['name' => 'Straps', 'slug' => 'straps', 'category_id' => 28],
            ['name' => 'Stands', 'slug' => 'stands', 'category_id' => 28],
            ['name' => 'Cases and Gig Bags', 'slug' => 'cases-and-gig-bags', 'category_id' => 28],
        
            // Keyboards and Pianos
            ['name' => 'Electronic Keyboards', 'slug' => 'electronic-keyboards', 'category_id' => 29],
            ['name' => 'Digital Pianos', 'slug' => 'digital-pianos', 'category_id' => 29],
            ['name' => 'Acoustic Pianos', 'slug' => 'acoustic-pianos', 'category_id' => 29],
            ['name' => 'Keyboard Amplifiers', 'slug' => 'keyboard-amplifiers', 'category_id' => 29],
            ['name' => 'Keyboard Stands', 'slug' => 'keyboard-stands', 'category_id' => 29],
            ['name' => 'Pedals and Accessories', 'slug' => 'pedals-and-accessories', 'category_id' => 29],
        
            // Drums and Percussion
            ['name' => 'Drum Sets', 'slug' => 'drum-sets', 'category_id' => 30],
            ['name' => 'Cymbals', 'slug' => 'cymbals', 'category_id' => 30],
            ['name' => 'Snare Drums', 'slug' => 'snare-drums', 'category_id' => 30],
            ['name' => 'Hardware', 'slug' => 'hardware', 'category_id' => 30],
            ['name' => 'Sticks and Brushes', 'slug' => 'sticks-and-brushes', 'category_id' => 30],
            ['name' => 'Cases and Bags', 'slug' => 'cases-and-bags', 'category_id' => 30],
        
            // Brass and Woodwind Instruments
            ['name' => 'Saxophones', 'slug' => 'saxophones', 'category_id' => 31],
            ['name' => 'Trumpets', 'slug' => 'trumpets', 'category_id' => 31],
            ['name' => 'Trombones', 'slug' => 'trombones', 'category_id' => 31],
            ['name' => 'Flutes', 'slug' => 'flutes', 'category_id' => 31],
            ['name' => 'Clarinets', 'slug' => 'clarinets', 'category_id' => 31],
            ['name' => 'Piccolos', 'slug' => 'piccolos', 'category_id' => 31],
            ['name' => 'Oboes', 'slug' => 'oboes', 'category_id' => 31],
            ['name' => 'Bassoons', 'slug' => 'bassoons', 'category_id' => 31],
            ['name' => 'Mouthpieces', 'slug' => 'mouthpieces', 'category_id' => 31],
            ['name' => 'Reeds', 'slug' => 'reeds', 'category_id' => 31],
            ['name' => 'Brass Accessories', 'slug' => 'brass-accessories', 'category_id' => 31],
            ['name' => 'Woodwind Accessories', 'slug' => 'woodwind-accessories', 'category_id' => 31],
            // Strings and Orchestral Instruments
            ['name' => 'Violins', 'slug' => 'violins', 'category_id' => 32],
            ['name' => 'Violas', 'slug' => 'violas', 'category_id' => 32],
            ['name' => 'Cellos', 'slug' => 'cellos', 'category_id' => 32],
            ['name' => 'Double Basses', 'slug' => 'double-basses', 'category_id' => 32],
            ['name' => 'Harp', 'slug' => 'harp', 'category_id' => 32],
            ['name' => 'String Accessories', 'slug' => 'string-accessories', 'category_id' => 32],

            // Folk and World Instruments
            ['name' => 'Banjos', 'slug' => 'banjos', 'category_id' => 33],
            ['name' => 'Mandolins', 'slug' => 'mandolins', 'category_id' => 33],
            ['name' => 'Ukuleles', 'slug' => 'ukuleles', 'category_id' => 33],
            ['name' => 'Harmonicas', 'slug' => 'harmonicas', 'category_id' => 33],
            ['name' => 'Didgeridoos', 'slug' => 'didgeridoos', 'category_id' => 33],
            ['name' => 'Bagpipes', 'slug' => 'bagpipes', 'category_id' => 33],
            ['name' => 'World Percussion', 'slug' => 'world-percussion', 'category_id' => 33],
            // Audio Equipment
            ['name' => 'Mixers', 'slug' => 'mixers', 'category_id' => 34],
            ['name' => 'Microphones', 'slug' => 'microphones', 'category_id' => 34],
            ['name' => 'Studio Monitors', 'slug' => 'studio-monitors', 'category_id' => 34],
            ['name' => 'Audio Interfaces', 'slug' => 'audio-interfaces', 'category_id' => 34],
            ['name' => 'Headphones', 'slug' => 'headphones', 'category_id' => 34],
            ['name' => 'PA Systems', 'slug' => 'pa-systems', 'category_id' => 34],

            // Music Accessories
            ['name' => 'Stands and Mounts', 'slug' => 'stands-and-mounts', 'category_id' => 35],
            ['name' => 'Cases and Bags', 'slug' => 'cases-and-bags', 'category_id' => 35],
            ['name' => 'Cables and Adapters', 'slug' => 'cables-and-adapters', 'category_id' => 35],
            ['name' => 'Metronomes and Tuners', 'slug' => 'metronomes-and-tuners', 'category_id' => 35],
            ['name' => 'Sheet Music and Songbooks', 'slug' => 'sheet-music-and-songbooks', 'category_id' => 35],

            // DJ and Electronic Music
            ['name' => 'DJ Controllers', 'slug' => 'dj-controllers', 'category_id' => 36],
            ['name' => 'Turntables', 'slug' => 'turntables', 'category_id' => 36],
            ['name' => 'Samplers and Sequencers', 'slug' => 'samplers-and-sequencers', 'category_id' => 36],
            ['name' => 'Synthesizers', 'slug' => 'synthesizers', 'category_id' => 36],
            ['name' => 'Drum Machines', 'slug' => 'drum-machines', 'category_id' => 36],
            ['name' => 'DJ Mixers', 'slug' => 'dj-mixers', 'category_id' => 36],

            // Lighting and Stage Effects
            ['name' => 'Stage Lighting', 'slug' => 'stage-lighting', 'category_id' => 37],
            ['name' => 'Fog and Smoke Machines', 'slug' => 'fog-and-smoke-machines', 'category_id' => 37],
            ['name' => 'Lasers', 'slug' => 'lasers', 'category_id' => 37],
            ['name' => 'Spotlights', 'slug' => 'spotlights', 'category_id' => 37],
            ['name' => 'Gobo Projectors', 'slug' => 'gobo-projectors', 'category_id' => 37],
            ['name' => 'Lighting Controllers', 'slug' => 'lighting-controllers', 'category_id' => 37],
            ];
            DB::table('subcategories')->insert($subcategories);
    }
}
