<?php

use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('images')->insert([
        	[
        		'image' => 'CPR-demo-in-classes.jpg',
        		'description' => 'Đây là hình ảnh các bạn sinh viên thực hành sơ cứu nạn nhân. Giả định tình huống bị thương ở đây là nạn nhận bị tai nạn xe máy khi đang đi trên đường và bị chiếc xe đè lên một bên chân, cái chân đó bị gãy sau khi va đập mạnh với chiếc xe. Chúng ta có 2 cô giá lên thực hành cách quan sát tình huống tai nạn, những gì có thể làm ảnh hưởng đến nạn nhận cũng như là mọi người xung quanh.',
        		'post_id' => '1',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'CPR-ha-hoi-thoi-ngat.jpg',
        		'description' => 'Đây là lớp mà các bạn được thực hành trực tiếp khi đang học. Tình huống này là một bạn sẽ hô hấp nhân tạo cho vật thí nghiệm. Theo được biết thì 30 nhịp và 2 lần thổi. Đây là phương pháp truyền thống và cũng rất hữu dụng cho các bạn cứu ai đó khi họ gặp nạn. Nhất là khi bị đuối nước đó các bạn nạ, nên học và biết phương pháp đó không chỉ có thể cứu sống bản thân mình cũng như có thể giúp đỡ mọi người.',
        		'post_id' => '1',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'CPR-run.jpg',
        		'description' => 'Chắc các bạn cũng biết trước khi bơi hay làm gì đó thì chúng ta nên khởi động cho nóng người trước đã. Hình ảnh ở trên là các bạn đang khởi động để vào bài học mới, các bạn được chạy bộ vài vòng, khởi động nhẹ nhàng trước khi tắm biển nha.',
        		'post_id' => '2',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'CPR-luot-song.jpg',
        		'description' => 'Hình ảnh cho thấy các bạn sau khi khởi động sẽ được hướng dẫn và cho lướt ván. Cách lướt sóng, cách điều khiển, sử dụng ván để lướt sóng, mọi người sẽ lần lượt được tham gia lướt sóng.',
        		'post_id' => '2',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Surf life saving in Vietnam.jpg',
        		'description' => 'Hai thanh niên lướt mệt quá nên ngồi nghĩ và xem các bạn khác lướt sóng. Chắc là hai người cũng đã thấm mệt sau những lần lướt ván không dễ như ăn cơm, thật sự thì để mà trở thành một người lướt ván điêu luyện thì chúng ta cần phải luyện tập rất nhiều đó các bạn ạ. Nhưng hãy cố lên, điều mình thích sẽ có động lực để thực hiện và hoàn thành nó.',
        		'post_id' => '2',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Activities-at-beach-with-David-CPR.jpg',
        		'description' => 'Team 1 cùng với thầy David trong buổi chiều đi học lướt sóng. Dù thời tiết không cho phép nhưng các bạn vẫn hăng hái và say mê trong việc lướt sóng và cách điều khiển ván để lướt.',
        		'post_id' => '2',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Ceremony-CPR-Lai.jpg',
        		'description' => 'Lễ trao chứng nhận của các bạn nhóm 1 với thầy David.',
        		'post_id' => '3',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Ceremony-CPR-Quyen20.jpg',
        		'description' => 'Thầy David đính thân trao chứng nhận sau khi học xong khóa đào tạo CPR và lướt sóng.',
        		'post_id' => '3',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Give-a-gift-for-David.jpg',
        		'description' => 'Đây cũng là món quà nho nhỏ của các bạn sinh viên muốn tặng thầy David. Thầy đã sát cánh và tận tình dạy bảo các bạn trong quá trình học. Thật sự hạnh phúc phải không các bạn? Thầy rất ngạc nhiên khi các bạn lại chủ động tặng cho thầy một món quà rất ý nghĩa.',
        		'post_id' => '3',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        	[
        		'image' => 'Party-Ceremony-CPR.jpg',
        		'description' => 'Đồng hành cùng lễ trao chứng nhận thì gia đình PNV cũng có tổ chức một bữa tiệc cho thầy David với các bạn sinh viên học trong khóa học đó.',
        		'post_id' => '3',
        		'created_at' 	=> date('Y-m-d H:i:s')
        	],
        ]);
    }
}
