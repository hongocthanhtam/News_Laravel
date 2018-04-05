<?php

use Illuminate\Database\Seeder;

class Post_DetailsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('post_details')->insert([
        	[
        		'images' 		=> 'CPR-Classes.jpg',
        		'content' 		=> 'CPR Activities in Class là hoạt động ngoại khóa của các bạn sinh viên trong lớp, sau khi học xong các tiết chính. Các bạn được học với tình nguyện viên vui tính là thầy David đến từ nước Australia. Thầy rất nhiệt tình trong các tiết dạy trên lớp cũng như những tiết dạy ngoài bãi biển. Sinh viên tại Passerelles Numériques Vietnam (PNV) được chia làm 2 nhóm học, nhóm 1 học vào tối thứ ba hằng tuần và nhóm 2 sẽ học vào tối thứ năm hằng tuần. Ngày chủ nhật thầy cũng dành thời gian cho nhóm 1 học lướt sóng ở ngoài biển, vào buổi chiều thì nhóm 2 có thể ra biển học lướt sóng với nhóm 1. Thật sự thì đây cũng là một hoạt động tốt cho các bạn sinh viên muốn có thể bảo vệ được tính mạng ở dưới nước cũng như cứu hộ khi thấy ai đó đuối nước. Cả 2 nhóm cũng được học về sơ cấp cứu ban đầu viết tắt là CPR, đó là hà hơi - thổi ngạt, quan sát một vụ tai nạn và cách xử lý, cách sơ cứu, giúp nạn nhân thoát khỏi sự nguy hiểm khi gặp tình huống đó. Qua đó, các bạn cũng có thể trau dồi tiếng anh của mình, đó là được giao tiếp trực tiếp với thầy David bằng tiếng anh. Các bạn có thể phát triển kỹ năng nghe, hiểu và nói tiếng anh của bản thân mình. Các bạn có chia sẽ là các bạn rất thích và phấn khởi khi được học một khóa học có nhiều bổ ích như thế này, hy vọng sẽ có nhiều cơ hội nữa để tham gia. Đây thật sự là một hoạt động ngoại khóa rất bổ ích, giúp chúng ta không chỉ có thể bảo vệ bản thân mình mà còn có thể giúp những người bị gặp nạn ở dưới nước khác. Tiếng anh là một phần các bạn được học, giúp các bạn sẽ tự tin giao tiếp tiếng anh với người nước ngoài.',
        		'post_id' 		=> '1',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'images' 		=> 'CPR-khoi-dong.jpg',
        		'content' 		=> 'CPR Activities in The Beach là hoạt động ngoại khóa ở bãi biển của các bạn sinh viên tại Passerelles Numériques Vietnam (PNV). Đây chính là hoạt động giúp các bạn không chỉ có thể giảm áp lực mà còn rèn luyện thân thể sau những ngày trong tuần đi học căng thẳng, đầy nhiều áp lực. Hoạt động rất được nhiều bạn muốn tham gia nhưng vì số lượng có hạn nên cũng không thể đủ cho hết các bạn sinh viên được nên thầy David đã chia là 2 nhóm nhỏ để dễ dạy và quản lý. Và đây là hoạt động của nhóm thứ nhất, ngoài hoạt động trên lớp thì các bạn nhóm thứ nhất sẽ được học và thực hành về cách lướt sóng ở biển. Hoạt động được nhiều anh tình nguyện viên ở Việt Nam hỗ trợ thầy cũng dạy, không chỉ được học và thực hành mà các bạn còn được dạy và giúp các em nhỏ nữa. Mỗi tuần được đi tắm biển, đươc lướt sóng, được giao tiếp tiếng anh, được tham gia nhiều trò chơi của thầy cũng một phần giúp các bạn cảm nhận được sự sống này rất vui vẻ và phải trân trọng nó.',
        		'post_id' 		=> '2',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        	[
        		'images' 		=> 'Ceremony-CPR-Tham.jpg',
        		'content' 		=> 'Certificate Ceremony after CPR Course - đây là phần quan trọng không thể thiếu sau khi học xong một khóa học. Các bạn được nhận bằng cấp chứng chỉ quốc tế từ thầy David. Các bạn rất hào hứng và vui mừng vì sau khi học còn được nhận chứng chỉ nữa, cái đặc biệt ở đây là không phải là chứng chỉ bình thường thôi mà nó là chứng chỉ quốc tế, qua đó đã cho thấy được phần thú vị rồi đó. Vừa nhận chứng chỉ vừa có một bữa tiệc nho nhỏ cùng với thầy David, đây là lúc các bạn ham ăn thừa cơ hội này ăn cho no nê luôn. Không dừng lại đây mà các bạn còn có một món quà đặc biệt dành tặng cho thầy David nữa đó. Món quà này chính do tự tay các bạn làm ra và qua cái món quà dù nhỏ nhưng chứa đầy tình cảm, lòng nhiệt huyết của các bạn. Thầy đã rất ngạc nhiên khi nhận quà và thầy còn có thể đọc tiếng việt nữa đó, lần đâu tôi cũng không tin nhưng thầy thật sự là một người tuyệt vời, tiếng việt khó thế mà phát âm cũng chuẩn, cũng đúng. Chắc là thầy thích tiếng việt của nước mình rồi.',
        		'post_id' 		=> '3',
        		'created_at' 	=> date('Y-m-d H:i:s'),
        	],
        ]);
    }
}
