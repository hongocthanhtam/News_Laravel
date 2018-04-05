<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
        	[
        		'name' 			=> 'Education',
        		'description' 	=> 'Team Education là đội giáo dục tại Passerelles numériques Vietnam (PNV), quản lý và tổ chức một số hoạt động cho sinh viên, như là hoạt động xem phim vào buổi tối, karaoke sau những buổi học mệt mỏi, CPR-mời tình nguyện viên quốc tế về dạy, kể cả hoạt động ăn tối cùng các anh/chị tình nguyện viên nước ngoài.',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'name' 			=> 'Students Life',
        		'description' 	=> 'Danh mục Students Life là dành cho các bạn sinh viên có thể đăng lên những tin về cuộc sống của bản thân họ, hay những hoạt động sinh hoạt tại ký túc xá, hoặc là những câu chuyện vui vẻ, động lực, giảm stress của các bạn sáng tạo muốn chia sẽ. Đôi lúc có những cần những thông báo của Dorm Lead, hay những việc vặt như nộp tiền điện và nước. Có thể là những ước mơ, hoài bão của các bạn, hoặc chia sẽ những trải nghiệm thú vị mà các bạn thật sự tâm đắc nhất khi học tập tại PNV.',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
