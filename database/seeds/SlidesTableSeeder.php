<?php

use Illuminate\Database\Seeder;

class SlidesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('slides')->insert([
        	[
        		'image' 		=> 'StaffsGraduation_PNV.jpg',
        		'slug'			=> 'https://www.passerellesnumeriques.org/en/our-actions/vietnam/',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'image' 		=> 'PNV2019.jpg',
        		'slug'			=> 'link1',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'image' 		=> 'CPR-luot-song.jpg',
        		'slug'			=> 'link2',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'image' 		=> 'CPR-The-beach.jpg',
        		'slug'			=> 'link3',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
