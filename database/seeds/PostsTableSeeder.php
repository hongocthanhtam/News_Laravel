<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
        	[
                'title'             => 'CPR Activities in Class',
                'thumbnail'         => 'CPR-Classes.jpg',
                'description'       => 'Đây là hoạt động Surf Life Saving của các bạn sinh viên khi được học với thầy David - tình nguyện viên quốc tế đến từ Australia trong lớp vào buổi tối.',
                'author'            => 'Hôih My',
                'date'              => date('Y-m-d H:i:s'),
                'Exp_date'   => date('Y-m-d H:i:s'),
                'status'            => '1',
                'user_id'           => '1',
                'post_type'         => '1',
                'created_at'        => date('Y-m-d H:i:s'),
            ],
            [
                'title'             => 'CPR Activities in The Beach',
                'thumbnail'         => 'CPR-khoi-dong.jpg',
                'description'       => 'Hoạt động Surf Life Saving của các bạn sinh viên học với thầy David - tình nguyện viên quốc tế đến từ Australia ở ngoài bãi biển Mỹ Khê.',
                'author'            => 'Hôih My',
                'date'              => date('Y-m-d H:i:s'),
                'Exp_date'   => date('Y-m-d H:i:s'),
                'status'            => '1',
                'user_id'           => '1',
                'post_type'         => '1',
                'created_at'        => date('Y-m-d H:i:s'),
            ],
            [
        		'title'             => 'Certificate Ceremony after CPR Course',
        		'thumbnail'         => 'Ceremony-CPR-Tham.jpg',
        		'description'       => 'Lễ nhận bằng đã hoàn thành khóa học CPR cùng với thầy David.',
        		'author'            => 'Hôih My',
        		'date'              => date('Y-m-d H:i:s'),
        		'Exp_date'   => date('Y-m-d H:i:s'),
        		'status'            => '1',
        		'user_id'           => '1',
        		'post_type'         => '1',
        		'created_at' 	    => date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
