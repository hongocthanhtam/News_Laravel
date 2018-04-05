<?php

use Illuminate\Database\Seeder;

class ReactionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('reactions')->insert([
        	[
        		'post_id' 		=> '1',
        		'like'			=> 'icon-like.png',
        		'dislike'		=> '',
        		'love'			=> '',
        		'angry'			=> '',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'post_id' 		=> '2',
        		'like'			=> '',
        		'dislike'		=> '',
        		'love'			=> 'icon-love.png',
        		'angry'			=> '',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
