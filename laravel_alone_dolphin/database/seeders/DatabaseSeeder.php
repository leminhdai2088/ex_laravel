<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades\DB;
use \Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('blog')->insert([
            [
                'title' => 'Bí quyết chọn sofa phù hợp với không gian',
                'link' => 'bi-quyet-chon-sofa-phu-hop-voi-khong-gian',
                'short_description' => 'Các gợi ý về cách lựa chọn sofa để phù hợp với không gian sống và phong cách thiết kế nội thất của bạn.',
                'image' => 'bi-quyet-chon-sofa-phu-hop-voi-khong-gian.png',
                'keywords' => 'sofa, thiết kế nội thất, không gian sống, nội thất fudo, noithatfudo',
                'content' => 'Khi bắt đầu chọn sofa cho không gian sống của bạn, bạn cần đưa ra quyết định chính xác về phong cách và chức năng của sofa. Sofa phải phù hợp với phong cách thiết kế nội thất của căn nhà của bạn và phải đáp ứng các yêu cầu về không gian sống của bạn.

                1.	Đánh giá không gian phòng khách
                Trước khi chọn sofa, bạn cần đánh giá không gian phòng khách của mình. Bạn cần xác định kích thước, hình dạng và chiều cao của sofa phù hợp với không gian sống của bạn. Nếu phòng khách của bạn có diện tích nhỏ, bạn nên chọn sofa có kích thước nhỏ và không quá nặng nề.
                <img src="https://azco.vn/wp-content/uploads/2019/02/meo-chung-chup-anh-noi-that-ngoai-that.jpg">

                
                <a href="https://www.google.com.vn/search?tbm=isch&q=%E1%BA%A3nh+n%E1%BB%99i+th%E1%BA%A5t#imgrc=tTBGoy3W9IErxM">đây là 1 liên kết</a>
                2.	Chọn phong cách thiết kế nội thất
                Phong cách thiết kế nội thất cũng là một yếu tố quan trọng trong việc chọn sofa. Nếu phòng khách của bạn có phong cách trang trí cổ điển, bạn nên chọn sofa có kiểu dáng cổ điển và sang trọng. Nếu phòng khách của bạn có phong cách hiện đại, bạn có thể chọn sofa có kiểu dáng đơn giản và gọn nhẹ.
                
                3.	Chọn chất liệu và màu sắc
                Chất liệu và màu sắc của sofa cũng rất quan trọng. Chất liệu bao gồm da, nỉ, vải, da giả và nhựa. Màu sắc của sofa cũng cần phải phù hợp với không gian sống của bạn. Nếu phòng khách của bạn có màu sáng, bạn có thể chọn sofa có màu sáng hoặc tối để tạo ra sự cân đối.
                
                4.	Chọn các tính năng đặc biệt
                Nếu bạn muốn thêm một số tính năng đặc biệt vào sofa của mình, bạn có thể chọn các tính năng như thảm chân, gối tựa đầu, giá đỡ chân và bàn để đồ. Những tính năng này sẽ giúp tăng tính tiện dụng và thoải mái khi sử dụng sofa.
                
                Với các bí quyết trên, bạn sẽ có thể chọn được sofa phù hợp với không gian sống của mình. Nếu bạn đang tìm kiếm các sản phẩm nội thất chất lượng và đẹp mắt, hãy truy cập vào website của Fudo để tìm kiếm các sản phẩm nội thất phòng khách phù hợp với phong cách thiết kế của bạn.
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => '5 cách sắp xếp phòng khách thông minh',
                'link' => '5-cach-sap-xep-phong-khach-thong-minh',
                'short_description' => 'Các gợi ý về cách sắp xếp phòng khách để tối ưu hóa không gian và tạo cảm giác thoải mái và dễ chịu cho người dùng.',
                'image' => 'tai-sao-phai-tim-cach-sap-xep-phong-khach-nho.jpg',
                'keywords' => 'phòng khách, không gian sống, thiết kế nội thất, nội thất fudo, noithatfudo',
                'content' => 'Phòng khách là không gian quan trọng trong mỗi căn nhà, nơi mà gia đình và bạn bè có thể tụ họp, trò chuyện và thư giãn. Tuy nhiên, nếu không sắp xếp thông minh, phòng khách có thể trở nên rất rối mắt và khó chịu. Dưới đây là 5 cách để sắp xếp phòng khách thông minh giúp cho căn phòng của bạn trở nên đẹp hơn và tiện nghi hơn.

                Bố trí bộ bàn ghế: Đây là bước đầu tiên và quan trọng nhất khi bố trí phòng khách. Bạn cần phải chọn bộ bàn ghế phù hợp với diện tích phòng khách cũng như với phong cách thiết kế của căn nhà. Nếu không có đủ không gian cho một bộ bàn ghế đầy đủ, bạn có thể sử dụng những chiếc ghế đơn lẻ để tạo nên không gian thoải mái hơn.
                
                Sử dụng đèn chiếu sáng: Nếu phòng khách của bạn không có đủ ánh sáng tự nhiên, hãy sử dụng đèn chiếu sáng để tạo ra không gian sáng hơn. Ngoài ánh sáng chính, bạn có thể sử dụng những chiếc đèn bàn để tạo ra những điểm nhấn trang trí thú vị.
                
                Sử dụng nội thất thông minh: Sử dụng nội thất thông minh như bàn ghế gấp, giá đỡ tivi có thể xoay, giúp bạn tiết kiệm không gian và đa dạng hóa sự sắp xếp phòng khách của bạn.
                
                Đa dạng hoá vật dụng trang trí: Sử dụng những chiếc đồ trang trí như tranh ảnh, đồ thủ công, hoa tươi để tạo ra sự tươi mới và phong phú cho phòng khách của bạn. Hãy lựa chọn những vật dụng có màu sắc tương phản để tạo nên một không gian sống động và hấp dẫn.
                
                Sắp xếp hợp lý: Hãy sắp xếp nội thất sao cho phù hợp với diện tích phòng khách, tránh sự chen chúc và tạo ra khoảng trống thoáng mát. Bạn cần phải sắp xếp đồ đạc một cách hợp lý để không gian trở nên gọn gàng và dễ chịu hơn.
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => 'Top 7 xu hướng thiết kế nội thất năm 2023',
                'link' => 'top-7-xu-huong-thiet-ke-noi-that-nam-2023',
                'short_description' => 'Các xu hướng thiết kế nội thất đang được ưa chuộng trong năm 2023 và cách áp dụng chúng vào không gian sống của bạn',
                'image' => 'top-7-xu-huong-thiet-ke-noi-that-nam-2023.png',
                'keywords' => 'sofa, thiết kế nội thất, không gian sống, nội thất fudo, noithatfudo',
                'content' => 'Năm 2023, thiết kế nội thất đang phát triển rất nhanh chóng và các xu hướng mới đang được đưa ra để đáp ứng nhu cầu ngày càng tăng của khách hàng. Để giúp quý khách hàng cập nhật những xu hướng thiết kế nội thất mới nhất trong năm 2023, chúng tôi sẽ chia sẻ với bạn top 7 xu hướng thiết kế nội thất năm 2023 dưới đây:

                Thiết kế phòng ăn: Phòng ăn sẽ trở thành trung tâm của ngôi nhà, với thiết kế đơn giản và hiện đại. Bộ bàn ăn và ghế sẽ được thiết kế đơn giản, nhưng không kém phần sang trọng và tinh tế.
                
                Thiết kế phòng ngủ: Giường ngủ sẽ là điểm nhấn chính của phòng ngủ. Bộ giường ngủ đẹp sẽ được thiết kế với kiểu dáng đơn giản nhưng tinh tế, phù hợp với phong cách hiện đại.
                
                Thiết kế phòng khách: Phòng khách sẽ được thiết kế với phong cách hiện đại, tối giản và tinh tế. Nội thất phòng khách được đầu tư bằng các sản phẩm chất lượng cao như nội thất phòng khách Fudo.
                
                Thiết kế phòng làm việc: Phòng làm việc sẽ được thiết kế thông minh, giúp nâng cao năng suất làm việc. Bộ bàn ghế làm việc sẽ được thiết kế đơn giản, nhưng không kém phần tiện nghi và chất lượng.
                
                Nội thất phòng khách hiện đại: Thiết kế nội thất phòng khách hiện đại sẽ được ưa chuộng trong năm 2023. Các sản phẩm nội thất phòng khách đẹp và đơn giản như ghế sofa, bàn kính, tủ kệ sẽ được thiết kế tinh tế và tiện dụng.
                
                Nội thất phòng khách đẹp: Thiết kế nội thất phòng khách đẹp sẽ là một xu hướng không thể bỏ qua trong năm 2023. Các sản phẩm nội thất phòng khách đẹp và sang trọng sẽ được ưa chuộng.
                
                Phòng ăn thông minh: Với sự phát triển của công nghệ, phòng ăn thông minh trở nên rất phổ biến. Bộ bàn ăn, ghế và tủ lạnh được tích hợp các cảm biến và màn hình hiển thị, cho phép bạn điều chỉnh ánh sáng, âm thanh và nhiệt độ theo ý muốn.
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => 'Cách sắp xếp nội thất phòng ăn đẹp và thông thoáng',
                'link' => 'cach-sap-xep-noi-that-phong-an-dep-va-thong-thoang',
                'short_description' => 'Các xu hướng thiết kế nội thất đang được ưa chuộng trong năm 2023 và cách áp dụng chúng vào không gian sống của bạn',
                'image' => 'thiet-ke-phong-an-va-bep.png',
                'keywords' => 'sofa, thiết kế nội thất, không gian sống, nội thất fudo, noithatfudo',
                'content' => 'Phòng ăn là nơi tập trung của mọi gia đình, nơi mọi người quây quần bên nhau và thưởng thức những bữa ăn ngon miệng. Vì vậy, việc sắp xếp nội thất phòng ăn đẹp và thông thoáng là rất quan trọng để tạo ra không gian ấm cúng, thoải mái và thuận tiện cho việc sử dụng. Bài viết này sẽ cung cấp cho bạn một số gợi ý để sắp xếp nội thất phòng ăn sao cho hợp lý và đẹp mắt.

                Lựa chọn bộ bàn ghế phù hợp: Bàn ăn và ghế là hai món đồ nội thất quan trọng nhất trong phòng ăn. Bạn nên lựa chọn bộ bàn ghế phù hợp với diện tích phòng ăn và phong cách thiết kế của căn nhà. Nếu phòng ăn nhỏ, bạn nên chọn bàn ăn nhỏ và ghế có kích thước nhỏ gọn để tiết kiệm không gian.
                
                Chọn nội thất phù hợp với phong cách thiết kế của căn nhà: Để tạo ra một không gian phòng ăn đẹp mắt và đồng nhất, bạn nên chọn các món đồ nội thất phù hợp với phong cách thiết kế của căn nhà. Nếu căn nhà có phong cách hiện đại, bạn nên chọn bộ bàn ghế hiện đại và nội thất phòng ăn tối giản. Nếu căn nhà có phong cách cổ điển, bạn nên chọn bộ bàn ghế cổ điển và nội thất phòng ăn sang trọng.
                
                Lưu trữ đồ dùng ăn uống: Trong phòng ăn, ngoài bộ bàn ghế, tủ kệ chứa đồ dùng ăn uống cũng là một món đồ nội thất quan trọng. Bạn nên chọn tủ kệ có nhiều ngăn để tiện lợi cho việc lưu trữ và sắp xếp các đồ dùng ăn uống như bát đĩa, chén đũa, ly tách và các thiết bị phục vụ khác.
                
                Sử dụng nội thất thông minh: Nội thất thông minh là một giải pháp tối ưu cho phòng ăn nhỏ. Bạn có thể chọn bộ bàn ghế có thể gấp gọn lại hoặc chọn bàn ăn được tích hợp với tủ kệ để tiết kiệm diện tích. Bạn cũng có thể sử dụng tủ kệ treo để tận dụng không gian trống trên tường.
                Bố trí bàn ăn và ghế sao cho hợp lý: Bố trí bàn ăn và ghế là một yếu tố quan trọng trong sự thoải mái của phòng ăn. Để phòng ăn đẹp và thông thoáng hơn, bạn có thể chọn một bộ bàn ghế phù hợp với không gian phòng ăn. Bàn ăn có thể là bàn vuông, bàn tròn hoặc oval tùy theo sở thích và diện tích phòng. Ghế có thể là ghế bọc da, ghế gỗ hoặc ghế thảm tùy thuộc vào phong cách thiết kế nội thất.
                
                Tận dụng không gian trống: Nếu phòng ăn của bạn có diện tích nhỏ hoặc hẹp, bạn nên tận dụng tối đa không gian trống bằng cách chọn bộ bàn ghế nhỏ, hình vuông hoặc tròn. Bạn cũng có thể chọn bàn ăn gấp để tiết kiệm diện tích. Nếu phòng ăn của bạn có đủ không gian, bạn có thể bố trí thêm tủ kệ để tận dụng không gian trống.
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => 'Tổng hợp những mẫu giường ngủ thông minh tiết kiệm diện tích cho phòng ngủ nhỏ',
                'link' => 'tong-hop-nhung-mau-giuong-ngu-thong-minh-tiet-kiem-dien-tich-cho-phong-ngu-nho',
                'short_description' => 'Các xu hướng thiết kế nội thất đang được ưa chuộng trong năm 2023 và cách áp dụng chúng vào không gian sống của bạn',
                'image' => 'giuong-tang-thong-minh-1-min.png',
                'keywords' => 'sofa, thiết kế nội thất, không gian sống, nội thất fudo, noithatfudo',
                'content' => 'Nếu bạn đang sống trong một căn phòng nhỏ và muốn tối đa hóa diện tích sử dụng thì giường ngủ thông minh là một lựa chọn tuyệt vời cho bạn. Những mẫu giường ngủ thông minh không chỉ tiết kiệm diện tích mà còn cung cấp nhiều tính năng tiện ích giúp bạn tận dụng không gian tối đa. Dưới đây là một số mẫu giường ngủ thông minh bạn có thể tham khảo.

                Giường ngủ gấp đôi: Đây là một lựa chọn hoàn hảo cho những ai muốn tiết kiệm diện tích phòng ngủ. Khi không sử dụng, giường có thể được gấp gọn lại để tạo ra không gian trống để bạn sử dụng vào ban ngày.
                
                Giường ngủ tầng: Giường ngủ tầng là một giải pháp tuyệt vời cho các phòng ngủ nhỏ. Nó cho phép bạn sử dụng diện tích tối đa của phòng bằng cách sử dụng không gian ở phía trên giường. Ngoài ra, giường tầng còn cung cấp nhiều không gian lưu trữ để bạn có thể lưu trữ quần áo, sách và các vật dụng khác.
                
                Giường ngủ có hệ thống tủ kệ: Nếu bạn không muốn sử dụng giường tầng, một giải pháp khác là sử dụng giường ngủ có hệ thống tủ kệ tích hợp. Giường này cung cấp không gian lưu trữ phía dưới và các tủ kệ phía trên giường để bạn có thể sắp xếp các vật dụng của mình một cách tiện lợi.
                
                Giường ngủ có bàn và ghế tích hợp: Nếu bạn muốn sử dụng phòng ngủ của mình làm không gian làm việc hoặc học tập, một giải pháp tuyệt vời là sử dụng giường ngủ có bàn và ghế tích hợp. Giường này cho phép bạn có thể làm việc hoặc học tập trong phòng ngủ mà không phải di chuyển đến một không gian khác.
                
                Nếu bạn đang tìm kiếm nội thất phòng ngủ thông minh để trang trí phòng ngủ nhỏ của mình, hãy tham khảo các sản phẩm của Fudo. Fudo cung cấp nhiều sản phẩm nội thất phòng ngủ đẹp, thông minh, giá rẻ và chất lượng cao.                
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => 'Làm thế nào để phòng luôn sạch đẹp cùng Fudo',
                'link' => 'lam-the-nao-de-phong-luon-sach-dep-cung-fudo',
                'short_description' => 'Bản thân mỗi người chúng ta ai cũng muốn có 1 không gian sạch sẽ và thoáng mát, nó giúp cho chúng ta trở nên dễ chịu hơn.',
                'image' => 'sap-xep-phong-ngu-gon-gang.png',
                'keywords' => 'sofa, thiết kế nội thất, không gian sống, nội thất fudo, noithatfudo',
                'content' => 'Để cho phòng luôn sạch đẹp cùng với <a href="http://noithatfudo.vn">nội thất Fudo</a>, bản thân mỗi người chúng ta ai cũng muốn có 1 không gian sạch sẽ và thoáng mát, nó giúp cho chúng ta trở nên dễ chịu hơn. Tuy vậy, muốn để căn phòng của chúng ta luôn trong trạng thái sạch đẹp, thoáng mát là một việc không hề dễ dàng. Dưới đây sẽ là 1 vài những gợi ý để bạn có thể giữ cho căn phòng của mình luôn sạch đẹp:
                1.	Tổ chức và sắp xếp đồ đạc một cách khoa học và hợp lý: Để căn phòng của bạn luôn luôn sạch đẹp, bạn cần sắp xếp đồ đạc một cách hợp lý. Bạn có thể bắt đầu bằng cách tìm một nơi để đặt và lưu trữ đồ đạc của bạn, ví dụ như <a href="http://noithatfudo.vn/bed_room/16">tủ</a>, hộp hoặc <a href="http://noithatfudo.vn/bed_room/16">kệ để giày/dép</a> để giữ cho các đồ đạc của bạn không bị rải rác khắp phòng và không bị bừa bộn. Hãy sắp xếp các vật dụng theo từng loại để dễ tìm kiếm và tránh cho việc gây lộn xộn đồ đạc.
                
                2.	Dọn dẹp và vệ sinh phòng thường xuyên: Để giữ cho căn phòng của bạn luôn trong trạng thái sạch đẹp, bạn nên dọn dẹp thường xuyên. Hãy sử dụng một số loại dụng cụ như bàn chải, lau chùi, chổi để làm sạch bụi và rác trong phòng. Bạn nên dọn dẹp những khu vực thường xuyên sử dụng như <a href="http://noithatfudo.vn/home_office/25">bàn làm việc</a>, <a href="http://noithatfudo.vn/bed_room/9">giường ngủ</a>và <a href="http://noithatfudo.vn/kitchen_room">khu vực nấu ăn.</a>
                <img src="https://toplist.vn/images/800px/nhung-meo-giup-phong-ngu-gon-gang-va-sach-se-hon-cho-nguoi-ban-ron-205545.jpg" alt="phong-ngu">
                
                3.	Vệ sinh hàng ngày: Để phòng luôn sạch đẹp, bạn cần vệ sinh hàng ngày bằng cách quét bụi và lau sàn, lau các bề mặt và kính cửa sổ, sử dụng <a href="http://noithatfudo.vn/bath_room/35">thảm lau chân</a> để vệ sinh chân khỏi những bụi bẩn trước khi đi vào phòng. Hãy sử dụng các loại chất tẩy rửa, nhưng hãy đảm bảo rằng bạn đã đọc hướng dẫn sử dụng trên bao bì sản phẩm để tránh gây hại cho sức khỏe.
                <img src="https://png.pngtree.com/thumb_back/fh260/background/20210907/pngtree-gray-and-tidy-living-room-environment-design-photography-map-with-map-image_795689.jpg" alt="phonhg-khach"/>
                
                4.	Loại bỏ rác thải đúng cách: Để phòng luôn sạch đẹp, bạn cần loại bỏ rác thải một cách đúng cách. Hãy sử dụng túi rác để giữ cho rác thải không bị rơi rụng trên sàn nhà. Bạn cũng nên loại bỏ rác thải thường xuyên để tránh gây ô nhiễm và mùi hôi trong phòng.
                
                5.	Để giữ <a href="http://noithatfudo.vn/kitchen_room">nhà bếp</a> luôn sạch sẽ: Giữ cho nhà bếp luôn sạch sẽ là rất quan trọng để tránh sự phát triển của vi khuẩn và bệnh tật. Rửa bát đĩa ngay sau khi sử dụng và đảm bảo rằng mọi vật dụng như lò vi sóng, bếp ga, tủ lạnh, chậu rửa đũa, <a href="http://noithatfudo.vn/kitchen_room/19">bộ bàn ăn</a>, <a href="http://noithatfudo.vn/kitchen_room/22">thảm bếp</a>, <a href="http://noithatfudo.vn/kitchen_room/23">kệ bếp</a>, <a href="http://noithatfudo.vn/kitchen_room/24">khăn bếp</a>, …được vệ sinh thường xuyên.
                ',
                'author' => 'Lê Minh Đại',
                'status' => '1',
            ],
            [
                'title' => 'Cách Bảo Quản SOFA Luôn Đẹp Cùng Với Fudo',
                'link' => 'cach-bao-quan-sofa-luon-dep-cung-voi-fudo',
                'short_description' => 'Trong bài viết này, chúng tôi sẽ giới thiệu cho bạn một số cách vệ sinh và bảo quản sofa tại nhà để nó luôn đẹp và tiết kiệm chi phí sửa chữa',
                'image' => 'aaa.png',
                'keywords' => 'sofa, thiết kế nội thất, showroom sofa gỗ, nội thất fudo, nội thất phòng khách',
                'content' => '<img src=" https://www.bienphong.com.vn/images/media//730/2022/4/18/aaa.png">
                <a href="http://noithatfudo.vn/">Cửa hàng nội thất Fudo</a> là một trong những thương hiệu nổi tiếng về đồ nội thất tại Việt Nam. Nếu bạn đã đầu tư vào một chiếc <a href="http://noithatfudo.vn/living_room/1">sofa</a> mới từ cửa hàng này, thì chắc chắn bạn muốn giữ cho nó luôn đẹp và bền lâu. Trong bài viết này, chúng tôi sẽ giới thiệu cho bạn một số <a href="http://noithatfudo.vn/blog">cách vệ sinh và bảo quản sofa tại nhà</a> để nó luôn đẹp và tiết kiệm chi phí sửa chữa.
                
                1.	Để <a href="http://noithatfudo.vn/living_room/1">sofa</a> luôn sạch sẽ
                <img src="https://cf.shopee.vn/file/187493550ac86bb93f636444acf150de">
                Để <a href="http://noithatfudo.vn/living_room/1">sofa</a> luôn sạch sẽ, bạn nên đánh bại bụi bẩn từ bề mặt sofa bằng một cây chổi mềm hoặc một tấm vải sạch mỗi ngày. Bạn cũng nên hút bụi <a href="http://noithatfudo.vn/living_room/1">sofa</a> định kỳ bằng máy hút bụi. Nếu có một vết bẩn nhỏ, bạn có thể lau chùi nó bằng một tấm vải ẩm hoặc một khăn ướt. Tuy nhiên, nếu vết bẩn quá lớn hoặc khó khăn để làm sạch, hãy gọi đến dịch vụ chuyên nghiệp để giúp bạn làm sạch sofa.

                2.	Tránh để sofa dưới ánh nắng trực tiếp và nhiệt độ cao 
                
                <img src="https://sofagiagoc.com/wp-content/uploads/2017/04/Bao-ve-sofa-da-khoi-anh-sang-mat-troi-chieu-truc-tiep.jpg">
                Các chất liệu của <a href="http://noithatfudo.vn/living_room/1">sofa</a> bao gồm da, vải và gỗ đều rất dễ bị phai màu nếu tiếp xúc với ánh nắng nóng hoặc nhiệt độ cao. Vì vậy, bạn nên đặt <a href="http://noithatfudo.vn/living_room/1">sofa</a> của mình ở nơi không tiếp xúc trực tiếp với ánh nắng mặt trời và tránh đặt nó gần các nguồn nhiệt như lò sưởi hoặc tủ lạnh.

                3.	Đảm bảo thoáng khí cho <a href="http://noithatfudo.vn/living_room/1">sofa</a>

                <img src="https://vito.vn/wp-content/uploads/2021/06/bo-sofa.jpg">
                Để giữ <a href="http://noithatfudo.vn/living_room/1">sofa</a> luôn mới và đẹp, bạn cần đảm bảo cho <a href="http://noithatfudo.vn/living_room/1">sofa</a> được thoáng khí. Nếu <a href="http://noithatfudo.vn/living_room/1">sofa</a> được đặt trong một không gian kín, khí hậu ẩm ướt sẽ làm cho <a href="http://noithatfudo.vn/living_room/1">sofa</a> dễ bị mốc và mùi hôi. Vì vậy, hãy để <a href="http://noithatfudo.vn/living_room/1">sofa</a> ở những nơi có khí hậu thông thoáng để tránh bị ẩm và mốc.

                4.	Sử dụng nước hoa quả để tẩy vết bẩn

                <img src="https://cdn.vuanem.com/blog/wp-content/uploads/2021/10/ve-sinh-goi-sofa-tai-nha.jpg">
                Trong quá trình sử dụng, <a href="http://noithatfudo.vn/living_room/1">sofa</a> sẽ dễ bị bẩn vì tiếp xúc với bụi, mồ hôi hoặc đồ ăn uống. Nếu để vết bẩn ở trên sofa trong thời gian dài, chúng sẽ trở nên khó tẩy và làm <a href="http://noithatfudo.vn/living_room/1">sofa</a> không còn mới mẻ như trước. Tuy nhiên, bạn không cần phải lo lắng vì <a href="http://noithatfudo.vn/living_room/1">Cửa hàng nội thất Fudo</a> có một bí quyết để tẩy vết bẩn hiệu quả và an toàn cho <a href="http://noithatfudo.vn/living_room/1">sofa</a>. Đó là sử dụng nước hoa quả để tẩy vết bẩn trên sofa. Bạn chỉ cần lau vết bẩn bằng miếng vải ẩm và thêm một ít nước hoa quả vào để tẩy vết bẩn. Sau đó, lau sạch bằng miếng vải khô. Nước hoa quả không chỉ giúp tẩy vết bẩn hiệu quả mà còn mang lại mùi thơm dịu nhẹ cho <a href="http://noithatfudo.vn/living_room/1">sofa</a>.

                5.	Xoay định kỳ để tránh xẹp lún

                <img src="http://lamsach5s.vn/wp-content/uploads/ghe-sofa-bi-lun-anh-dai-dien.jpg">
Khi sử dụng <a href="http://noithatfudo.vn/living_room/1">sofa</a> thường xuyên, có thể xảy ra hiện tượng xẹp lún trên một số vị trí của sofa. Để tránh hiện tượng này, bạn nên xoay định kỳ <a href="http://noithatfudo.vn/living_room/1">sofa</a> để các phần sử dụng được phân bố đều.
 
6.	Sử dụng bao gối trang trí
<img src="https://noithatvinaco.com/hoanghung/31/images/huong-dan-trang-tri-ghe-sofa-voi-goi-tua-an-tuong-1.jpg">
Sử dụng bao gối trang trí là một cách tuyệt vời để bảo vệ sofa của bạn khỏi những vết bẩn và xước. Bạn nên chọn những bao gối trang trí có chất liệu dễ giặt và bền đẹp để dễ dàng thay thế khi cần thiết. Bao gối cũng giúp tạo thêm phong cách và màu sắc cho <a href="http://noithatfudo.vn/living_room/1">sofa</a> của bạn.
 
7.	Bảo quản sofa đúng cách khi không sử dụng
<img src="https://static.wixstatic.com/media/f0f285_566bf4f0f66f47709ae038fe795fae1b~mv2.jpg/v1/fill/w_640,h_476,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/sofa_cover_%C3%A1%C2%BA%C2%A3nh_co_ver.jpg">
Khi không sử dụng <a href="http://noithatfudo.vn/living_room/1">sofa</a> trong một thời gian dài, bạn nên bảo quản nó đúng cách để tránh bị ẩm mốc hoặc bị hư hỏng. Bạn có thể dùng bao bọc sofa để bảo vệ sofa khỏi bụi bẩn và ánh sáng mặt trời. Nếu không có bao bọc, bạn nên sử dụng tấm vải lụa hoặc vải bông để bọc <a href="http://noithatfudo.vn/living_room/1">sofa</a> trước khi đặt vào kho.
 
8.	Thường xuyên kiểm tra và bảo trì sofa
<img src="https://sofadungthinh.com/uploads/details/2021/02/images/sofabuyingadvice-lowres-pattern-2x1.jpg.webp">

Thường xuyên kiểm tra và bảo trì <a href="http://noithatfudo.vn/living_room/1">sofa</a>  của bạn cũng rất quan trọng để giữ cho nó luôn đẹp và bền lâu. Bạn nên kiểm tra các bộ phận của <a href="http://noithatfudo.vn/living_room/1">sofa</a> như chân, tay vịt và phần khung để đảm bảo chúng không bị lỏng hoặc hư hỏng. Nếu phát hiện ra sự cố nào, hãy sửa chữa ngay để tránh tình trạng tồi tệ hơn.
Như vậy, đó là một số cách bảo quản sofa để giữ cho nó luôn đẹp và bền lâu. Nếu bạn đang tìm kiếm một cửa hàng nội thất chất lượng để mua <a href="http://noithatfudo.vn/living_room/1">sofa</a>, <a href="http://noithatfudo.vn">cửa hàng nội thất Fudo</a>là một lựa chọn tuyệt vời. Với nhiều năm kinh nghiệm trong lĩnh vực này, Fudo cam kết cung cấp cho khách hàng những sản phẩm chất lượng với giá cả hợp lý và dịch vụ mua sắm tốt nhất.
                ',
                'author' => 'Vòng Chanh Khìn',
                'status' => '1',
            ],
            [
                'title' => 'Góc nhìn mới về nội thất cho không gian văn phòng cùng Fudo',
                'link' => 'goc-nhin-moi-ve-noi-that-cho-khong-gian-van-phong-cung-fudo',
                'short_description' => 'Sau đây, hãy cùng Nội thất Fudo khám phá những góc nhìn mới về nội thất trong môi trường văn phòng, làm việc nhé',
                'image' => 'gia-cong-noi-that-tai-hai-phong-10.png',
                'keywords' => 'phòng làm việc, thiết kế nội thất, mẫu bàn ghế phòng khách 2023, nội thất văn phòng, nội thất fudo, noithatfudo',
                'content' => 'Từ trước đến nay, chúng ta đã luôn quan niệm rằng: bàn ăn nên được để ở phòng bếp hay là ghế sofa nên được để trong phòng khách. Điều đó vô tình thu hẹp sự sáng tạo, thiết kế thú vị của mỗi văn phòng. Sau đây, hãy cùng <a href="http://noithatfudo.vn/">Nội thất Fudo</a>  khám phá những góc nhìn mới về nội thất trong môi trường văn phòng, làm việc nhé.
 
                <img src="https://gohieuhuong.vn/wp-content/uploads/2020/09/gia-cong-noi-that-tai-hai-phong-10.jpg" alt="Thiết kế nội thất văn phòng - Gỗ Hiếu Hương - 0767.82.8888"> 
                1. Sự thích hợp của bàn ăn
                Khi nhắc tới <a href="http://noithatfudo.vn/kitchen_room/20">bàn ăn</a>, chúng ta thường liên tưởng đến những bữa cơm nóng hồi cùng với gia đình tràn ngập bầu không khí ấm cúng và hạnh phúc phải không nào? Đó chính là sự thân thuộc khi nhắc đến một chiếc <a href="http://noithatfudo.vn/kitchen_room/19">bàn ăn gia đình</a>, vậy nếu chúng ta sử dụng nó trong văn phòng làm việc liệu sẽ như thế nào nhỉ. Những kiểu dáng, thiết kế dành cho bàn làm việc thường rất đơn giản, có ít sự lựa chọn hơn so với các mẫu bàn ăn hiện nay. Thật vây, bạn có thể chọn những chiếc bàn làm việc, bàn họp với các mẫu mã khác nhau tại gian hàng dành cho phòng bếp. Với sự sang trọng, các sản phẩm bàn ăn sẽ tạo nên một không gian làm việc hết sức thú vị và sang trọng.
                 
                <img src="https://nhaxinh.com/wp-content/uploads/2023/03/GIAI-PHAP-NOI-THAT-CHO-KHONG-GIAN-VAN-PHONG-2.jpg" alt="Sự thích hợp của bàn ăn">
                Sự thật rằng, bàn ăn và bàn làm việc tại văn phòng thường được làm với cấu trúc và chất liệu giống nhau. Mọi người hay mua bàn làm việc với mục đích có một nơi để các thiết bị như: máy tính, tài liệu,... hoặc tạo không gian tổ chức các cuộc họp để thảo luận về những công việc sắp tới. Với những nhu cầu như vậy, những chiếc bàn ăn sang trọng không chỉ đáp ứng một cách hoàn hảo mà con tạo không gian làm việc mới lạ và thú vị.   
                 
                <img src="https://nhaxinh.com/wp-content/uploads/2023/03/GIAI-PHAP-NOI-THAT-CHO-KHONG-GIAN-VAN-PHONG-.jpg" alt="Sự thích hợp của bàn ăn">
                Với những chiếc bàn ăn được thiết kế với các mẫu mã hiện đại, sang trọng như hiện nay, không gian làm việc chắc hẳn sẽ rất độc đáo và thú vị. Hơn thế nữa, đối với những người làm việc cần sự sáng tạo, tư duy thì những chiếc bàn ăn phá cách này sẽ là nguồn cảm hứng mới lạ, kích thích tư duy giúp nâng cao hiệu suất công việc lên tối đa. Vì vậy, nội thất Fudo sẽ mách bạn một số <a href="http://noithatfudo.vn/kitchen_room/20">mẫu mã bàn ăn</a> được thiết kế sang trọng để bạn tham khảo.  
                2. Tính đa năng của ghế ăn
                Nhân viên làm việc tại văn phòng cùng với những mục tiêu, kế hoạch cụ thể và rõ ràng, vì thế sẽ thật tuyệt nếu văn phòng nơi họ làm việc được biến tấu theo góc nhìn mới, vừa tạo cảm giác mới lạ, ấm cúng đồng thời phát huy chất riêng của không gian làm việc. 
                Dân văn phòng thường sử dụng những chiếc ghế inox, ghế nhựa để làm việc từ sáng đến tối, khiến cơ thể mệt mỏi và không linh hoạt. Những chiếc <a href="http://noithatfudo.vn/kitchen_room/21">ghế ăn tựa lưng, có đế xoay 360 độ</a> là sự thay thế hoàn hảo cho nhân viên văn phòng. 
                 
                <img src="https://nhaxinh.com/wp-content/uploads/2023/03/GIAI-PHAP-NOI-THAT-CHO-KHONG-GIAN-VAN-PHONG-3-1.jpg" alt="Tính đa năng của ghế ăn">
                Với những căn phòng có kích thước nhỏ, những chiếc ghế nhỏ gọn sẽ là một trong những lựa chọn hàng đầu. <a href="http://noithatfudo.vn/kitchen_room/21">Ghế ăn của nội thất Fudo</a> đa dạng, kiểu dáng gọn gàng mang lại vẻ đẹp trang nhã sẽ rất thích hợp để bạn chọn lựa.
                3. Sofa – sự sang nhã không thể thiểu 
                Những nơi cần sự trang nghiêm chắc chắn sẽ không thể thiếu một bộ sofa đẹp, đặc biệt ở nơi văn phòng, phòng tiếp đãi đối tác. <a href="http://noithatfudo.vn/living_room/1">Sofa tại Fudo</a> được làm từ chất liệu cao cấp, khiến người ngồi cảm giác thoải mái vì thế rất phù hợp cho không khí của những buổi kí kết hợp đồng quan trọng.
                 
                <img src="https://nhaxinh.com/wp-content/uploads/2023/03/GIAI-PHAP-NOI-THAT-CHO-KHONG-GIAN-VAN-PHONG-5.jpg" alt="Sofa – sự sang nhã không thể thiểu">
                Các sản phẩm nội thất không nên bị " đóng khung " trong một giới hạn quy chuẩn nào cả. Qua những chia sẻ trên, hy vọng Nội thất Fudo đã cho bạn một góc nhìn mới về nội thất cho không gian văn phòng. Hãy liên hệ với <a href="http://noithatfudo.vn/">Nội Thất Fudo</a> ngay khi có bất kỳ câu hỏi nào nhé!
                ',
                'author' => 'Nguyễn Quốc Kỳ',
                'status' => '1',
            ],
            [
                'title' => 'Những điều cần biết khi chọn mua bàn ăn',
                'link' => 'nhung-dieu-can-biet-khi-chon-mua-ban-an',
                'short_description' => 'Phòng ăn không chỉ đóng vai trò là nơi chúng ta cùng nhau tận hưởng bữa ăn mà còn là trung tâm của không gian phòng ăn',
                'image' => '9-dieu-can-luu-y-chon-ban-an-phu-hop-how-to-choose-right-dining-table.png',
                'keywords' => 'mẫu thiết kế phòng bếp đẹp hiện đại, thiết kế nội thất, nội thất phòng bếp, nội thất fudo, thiết kế nhà bếp',
                'content' => 'Khi trang trí cho không gian ăn uống của gia đình, <a href="http://noithatfudo.vn/kitchen_room/19">bàn ăn</a> là một trong những món đồ nội thất không thể thiếu. Nó không chỉ đóng vai trò là nơi chúng ta cùng nhau tận hưởng bữa ăn mà còn là trung tâm của không gian phòng ăn. Tuy nhiên, chọn mua một bàn ăn phù hợp với không gian phòng ăn và phù hợp với phong cách của bạn không phải là điều dễ dàng. Trong bài viết này, <a href="http://noithatfudo.vn/">nội thất Fudo</a> sẽ chia sẻ với bạn một số điều cần biết khi chọn mua bàn ăn để giúp bạn có được lựa chọn đúng đắn.
  
                <img src="https://file.hstatic.net/1000380248/article/9-dieu-can-luu-y-chon-ban-an-phu-hop-how-to-choose-right-dining-table_4c28630631704ed19ad9b9512865a694.jpg" alt="Bàn ăn cho thiết kế nội thất hiện đại">
                <p style="text-align: center;">Bàn ăn cho thiết kế nội thất hiện đại</p>
                1.	Kích thước và hình dáng của bàn ăn
                Khi lựa chọn mua <a href="http://noithatfudo.vn/kitchen_room/20/99">bàn ăn cho gia đình</a>, một trong những yếu tố quan trọng cần phải quan tâm đến là kích thước của bàn ăn. Kích thước này sẽ phải phù hợp với không gian phòng ăn và số lượng người sử dụng bàn.
                Nếu phòng ăn của bạn khá nhỏ, bạn nên chọn một chiếc bàn nhỏ hơn để tiết kiệm diện tích. Một <a href="http://noithatfudo.vn/kitchen_room/20/96">bàn ăn nhỏ</a> có thể chứa tối đa 4 người, đủ để phục vụ cho một gia đình nhỏ. Tuy nhiên, nếu phòng ăn của bạn rộng hơn, bạn có thể chọn một chiếc bàn lớn hơn để phục vụ cho nhiều người hơn.
                Một điều quan trọng khác cần lưu ý khi chọn kích thước bàn ăn là độ cao của bàn. Bàn ăn nên có độ cao phù hợp để người sử dụng có thể dễ dàng ngồi và ăn mà không cần phải cúi xuống hoặc nâng cao ghế của mình. Thông thường, độ cao của <a href="http://noithatfudo.vn/kitchen_room/20/98">bàn ăn sẽ dao động từ 28 đến 30 inch</a> (tương đương từ 71 đến 76 cm).
                Cuối cùng, hãy nhớ rằng kích thước của bàn ăn cần phải phù hợp với số lượng người sử dụng bàn. Nếu bạn có một gia đình lớn hoặc thường xuyên đón khách, hãy chọn một chiếc bàn lớn hơn để đảm bảo đủ chỗ cho mọi người. 
                Hình dáng của bàn ăn cũng rất quan trọng, nó phải phù hợp với không gian phòng ăn và phong cách của bạn.
                 
                <img src="https://noithatbmd.vn/wp-content/uploads/2020/08/Ban-an-omnia.jpg" alt="Mẫu bộ bàn ăn đáng mua cho không gian bếp">
                <p style="text-align: center;">Mẫu bộ bàn ăn đáng mua cho không gian bếp</p>
                2.	Chất liệu của bàn ăn
                Khi chọn mua bàn ăn, chất liệu của bàn là một yếu tố rất quan trọng mà bạn nên lưu ý. Chất liệu của bàn ăn có thể ảnh hưởng đến tính năng, thẩm mỹ và tuổi thọ của bàn.
                Một trong những chất liệu phổ biến cho bàn ăn là gỗ. Gỗ là chất liệu tự nhiên, có độ bền cao và thường có vẻ đẹp tự nhiên. Tuy nhiên, nếu không được bảo quản tốt, gỗ có thể bị mối mọt hoặc bị biến dạng. Nếu bạn muốn mua <a href="http://noithatfudo.vn/kitchen_room/20/97">bàn ăn bằng gỗ</a>, hãy chọn loại gỗ chất lượng cao như teak, oak hoặc walnut. Hoặc bạn có thể chọn gỗ sồi, gỗ cao su, gỗ thông hoặc gỗ mun cho bàn ăn của mình.
                Ngoài ra, bàn ăn có thể được làm bằng kim loại hoặc thủy tinh. Bàn ăn kim loại có thể đem lại vẻ hiện đại và sang trọng cho phòng ăn. Tuy nhiên, nó có thể bị trầy xước và dễ bị ăn mòn nếu không được bảo quản
                 
                <img src="https://scontent.fsgn13-2.fna.fbcdn.net/v/t39.30808-6/338388949_755907312757422_1212558671022965658_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=730e14&_nc_ohc=fX3xUNY6O64AX_xq3uW&_nc_ht=scontent.fsgn13-2.fna&oh=00_AfCApw5nYdXTLKWlV6Z-0F2Plv9Ia0fK0MiVk3QPPZMSgQ&oe=6430D85F" alt="Kiểu dáng bàn ăn thông minh">
                <p style="text-align: center;">Kiểu dáng bàn ăn thông minh</p>
                3.	Kiểu dáng của bàn ăn
                Khi chọn mua bàn ăn, không chỉ quan tâm đến chất liệu, kích thước hay tính tiện ích mà còn cần lưu ý đến kiểu dáng của bàn ăn. Kiểu dáng của bàn ăn có thể tạo ra ấn tượng đầu tiên và tác động đến không gian bếp, <a href="http://noithatfudo.vn/kitchen_room">phòng ăn</a>, thậm chí là cả không gian sống của gia đình bạn.
                Khi lựa chọn kiểu dáng, bạn có thể xem xét đến <a href="http://noithatfudo.vn/blog/4">phong cách trang trí nội thất</a> của căn nhà để đảm bảo rằng bàn ăn phù hợp với không gian tổng thể. Ví dụ, nếu bạn có một căn nhà theo phong cách cổ điển, bạn có thể muốn chọn một bàn ăn mang phong cách cổ điển, với chân bàn và hoa văn cầu kỳ. Nếu nhà bạn có phong cách hiện đại, nội thất Fudo có thể cung cấp cho bạn bàn ăn có thiết kế đơn giản, màu sắc tối giản
                Ngoài ra, lưu ý đến chất liệu và màu sắc của bàn ăn. Chọn chất liệu và màu sắc phù hợp với phong cách trang trí của căn nhà, cũng như nhu cầu sử dụng. Ví dụ, nếu bạn có trẻ nhỏ trong gia đình, bạn có thể muốn chọn bàn ăn bằng chất liệu chống trầy xước hoặc dễ lau chùi để tiện sử dụng.
                Hy vọng với những chia sẻ trên, <a href="http://noithatfudo.vn/">Fudo</a> có thể đem đến cho bạn những kinh nghiệm bổ ích về những tiêu chuẩn khi chọn mua bàn ăn, giúp bạn có thể mua được những sản phẩm chất lượng, bền đẹp. Bên cạnh những kinh nghiệm trên thì địa chỉ chọn mua bàn ăn uy tín, chất lượng cũng không kém phần quan trọng. Hãy đến <a href="http://noithatfudo.vn/">nội thất Fudo</a> để kiểm chứng nhé!                
                ',
                'author' => 'Nguyễn Tuấn Kha',
                'status' => '1',
            ],
            [
                'title' => 'Thiết kế phòng ngủ đẹp, thông minh cùng với Fudo',
                'link' => 'thiet-ke-phong-ngu-dep-thong-minh-cung-voi-Fudo',
                'short_description' => 'Trong bài viết dưới đây, Nội thất Fudo sẽ giới thiệu các phong cách thiết kế phòng ngủ thông minh mang đến cho bạn không gian sống hoàn hảo, thoải mái.',
                'image' => 'Thiet_ke_phong_ngu_dep.png',
                'keywords' => 'bộ giường ngủ đẹp, thiết kế nội thất, bàn ghế phòng ngủ, bộ nội thất phòng ngủ, giường ngủ đẹp hiện đại, mẫu phòng ngủ đẹp, nội thất Fudo', 
                'content' => 'Hiện nay, khi không gian ngày càng trở nên chật hẹp hơn thì thiết kế phòng ngủ thông minh là sự lựa chọn tuyệt vời để tối ưu không gian của bạn nhưng vẫn đẹp và tiện nghi. Trong bài viết dưới đây, <a href="http://noithatfudo.vn/">Nội thất Fudo</a> sẽ giới thiệu các phong cách thiết kế phòng ngủ thông minh mang đến cho bạn không gian sống hoàn hảo, thoải mái.
                1.Thế nào là phòng ngủ thông minh?
                
                Thiết kế phòng ngủ thông minh đang là xu hướng thiết kế trong những ngôi nhà hiện đại. Đây là những căn phòng đảm bảo chức năng, tiết kiệm diện tích và đảm bảo sinh hoạt thoải mái. Với những ý tưởng trang trí sáng tạo này, phòng ngủ của bạn sẽ trở nên hoàn hảo.
                Với thiết kế phòng ngủ thông minh, đồ nội thất cũng có thể có nhiều chức năng. Đặc biệt là chiếc giường ngủ – món đồ nội thất chiếm nhiều diện tích nhất, đa năng và mang lại cảm giác thoải mái cho người sử dụng.
                
                2.Phong cách thiết kế phòng ngủ thông minh hoàn hảo cho không gian
                
                Phòng ngủ thông mình là sự lựa chọn tuyệt vời để thư giãn, xua tan mệt mỏi sau một ngày làm việc vất vả. Chúng tôi xin giới thiệu những mẫu phòng ngủ thông minh sau đây vừa giúp bạn tối ưu gian phòng nhỏ hẹp vừa tạo không gian sống hoàn hảo nhất.
                Tủ quần áo gắn liền với bàn trang điểm và giá sách - nội thất phòng ngủ thông minh
                Sử dụng những đồ nội thất như: <a href="http://noithatfudo.vn/bed_room/17">kệ trang trí</a>, bàn trang điểm, <a href="http://noithatfudo.vn/bed_room/10">tủ quần áo âm tường</a>... không chỉ giúp tạo nhiều khoảng trống để sử dụng mà còn gợi lên vẻ đẹp hiện đại, lôi cuốn cho không gian riêng tư. 
                  
                <img src="https://noithatcaco.vn/uploads/news/thumb/zwsu1qkt.jpg" alt="Top 22+ mẫu thiết kế tủ quần áo âm tường hiện đại và sang trọng">
                <p style="text-align: center;">Thiết kế nội thất phòng ngủ với tủ quần áo âm tường</p>
                
                Cách sắp xếp như vậy giúp phòng ngủ trở nên rộng và thoáng hơn. Sử dụng kệ tivi đồng thời làm nơi để sách hoặc đặt chậu cây xanh cho phòng ngủ thoáng mát hơn.
                Sử dụng giường kết hợp với tủ cho không gian nhỏ hẹp
                Sự kết hợp của <a href="http://noithatfudo.vn/bed_room/9">giường</a> với tủ quần áo/bàn học làm việc được thiết kế nhỏ gọn giúp phòng ngủ trở nên ngăn nắp hơn và khoa học hơn mà vẫn đáp ứng được sự tiện nghi. Đây là một trong những món đồ được lựa chọn nhiều nhất bởi những gia đình ở trong căn hộ có diện tích không quá rộng rãi. 
                 
                <img src="https://noithatcattuong.vn/wp-content/uploads/2020/07/tu-quan-ao-ket-gop-giuong-ngu.jpg" alt="Các mẫu giường kết hợp tủ quần áo thông minh và ấn tượng">
                <p style="text-align: center;">Phòng ngủ được thết kế giường kết hợp với tủ</p>
                3.Thiết kế phòng ngủ thông minh với các vật dụng trang trí
                
                Thiết kế phòng ngủ thông minh bằng cách sử dụng các đồ vật mang điểm nhấn để thu hút mọi ánh nhìn. <a href="http://noithatfudo.vn/bed_room/13">Đèn bàn, đèn trang trí, gương</a> hay các loại tủ, kệ trang trí,… là những lựa chọn sáng suốt để bạn hiện thực ý tưởng trang trí này.
                 
                <img src="https://meon.vn/upload/images/cay-trang-tri-trong-phong-ngu.jpg" alt="Top 23+ đồ trang trí phòng ngủ đẹp đơn giản cần phải mua">
                <p style="text-align: center;">Phòng ngủ với vật dụng trang trí</p>
                
                4.Mẹo sắp xếp phòng ngủ ấn tượng, ấm cúng

                Bạn cũng nên biết một số mẹo dưới đây để thiết kế phòng ngủ thông minh và tiện nghi: 
                •	Sử dụng kệ treo tường: Những chiếc kệ nhỏ được treo ở góc tường phòng ngủ vừa tăng tính thẩm mỹ, vừa tăng diện tích cho căn phòng. 
                •	Tranh: Treo tranh trang trí phòng ngủ giúp giải trí cho người xem. Vì vậy, gia chủ có thể chọn những bức tranh hiện nay với nhiều xu hướng khác nhau để treo trong phòng ngủ. 
                •	Trang trí bằng giấy dán tường: Để tiết kiệm chi phí, hãy sử dụng giấy dán tường trong phòng ngủ đẹp và ấm cúng. 
                •	Nội thất thông minh: Sử dụng nội thất thông minh giúp phòng ngủ tiện nghi nhưng cũng đầy tinh tế. Chi tiết thêm: giường ngủ đa năng Fudo, tủ quần áo, cửa lùa, sofa thông minh Fudo, bàn học kết hợp giá sách... 
                
                Trên đây là những thông tin thiết kế phòng ngủ thông minh mà <a href="http://noithatfudo.vn/">Nội thất Fudo</a> muốn giới thiệu đến mọi người. Tùy vào diện tích căn phòng mà bạn có những ý tưởng thiết kế khác nhau. Tham khảo bài viết trên để thiết kế phòng ngủ của bạn trở nên hoàn hảo.             
                ',
                'author' => 'Lê Quang Lâm',
                'status' => '1',
            ],
            [
                'title' => 'Làm sao để trang trí phòng ngủ đẹp và thoải mái?',
                'link' => 'lam-sao-de-trang-tri-phong-ngu-dep-va-thoai-mai',
                'short_description' => 'Phòng ngủ là không gian riêng tư và quan trọng nhất trong căn nhà của chúng ta. Đó là nơi mà chúng ta thư giãn và tái tạo năng lượng sau một ngày dài làm việc.',
                'image' => 'thiet-ke-noi-that-phong-ngu-20.png',
                'keywords' => 'bộ giường ngủ đẹp, thiết kế nội thất, bàn ghế phòng ngủ, bộ nội thất phòng ngủ, giường ngủ đẹp hiện đại, mẫu phòng ngủ đẹp, nội thất Fudo', 
                'content' => '<img src="https://abig.vn/wp-content/uploads/2022/01/thiet-ke-noi-that-phong-ngu-20.jpg" alt="Mẫu phòng ngủ đẹp và thoải mái">
                <p style="text-align: center;"> Mẫu phòng ngủ đẹp và thoải mái </p>
                1.	<a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> là không gian riêng tư và quan trọng nhất trong căn nhà của chúng ta. Đó là nơi mà chúng ta thư giãn và tái tạo năng lượng sau một ngày dài làm việc. Vì vậy, việc trang trí <a href=" http://noithatfudo.vn/bed_room"> Phòng ngủ </a>  đúng cách là vô cùng quan trọng để tạo ra một không gian thoải mái và thư giãn.
                
                2.	<a href="http://noithatfudo.vn/">Nội thất Fudo</a> là một thương hiệu nội thất hàng đầu với những sản phẩm nội thất thông minh, hiện đại và tiện ích. Nếu bạn đang tìm kiếm những sản phẩm nội thất <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a>  chất lượng và đẳng cấp, thì <a href="http://noithatfudo.vn/">Fudo</a>  là sự lựa chọn tuyệt vời cho bạn.
                
                3.	<a href="http://noithatfudo.vn/bed_room/9">Giường ngủ</a> là một trong những yếu tố quan trọng nhất trong <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a>. Nó không chỉ đóng vai trò chính trong việc tạo ra một không gian nghỉ ngơi thoải mái, mà còn góp phần vào việc trang trí <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> đẹp mắt. Bạn có thể chọn một chiếc <a href="http://noithatfudo.vn/bed_room/9">Giường ngủ</a> sang trọng với chất liệu cao cấp và thiết kế đẹp mắt để tăng thêm sự sang trọng cho <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> của mình.
                
                4.	<a href="http://noithatfudo.vn/bed_room/11"> Đèn ngủ </a> là một trong những phụ kiện trang trí không thể thiếu trong <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a>. Nó không chỉ tạo ra ánh sáng dịu nhẹ để giúp bạn có một giấc ngủ ngon hơn, mà còn góp phần vào việc tạo ra một không gian thư giãn và ấm cúng.
                
                5.	<a href="http://noithatfudo.vn/home_office/25">Bàn làm việc</a> là một trong những yếu tố quan trọng giúp bạn tăng năng suất trong công việc. Với một chiếc bàn làm việc đẹp mắt và tiện ích, bạn có thể dễ dàng làm việc và thư giãn tại <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> của mình.
                
                6.	<a href="http://noithatfudo.vn/bed_room/13"> Đèn bàn </a> là một trong những phụ kiện trang trí <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> đẹp mắt và tiện ích. Với một chiếc đèn bàn đẹp, bạn có thể tạo ra ánh sáng tối ưu để làm việc hoặc đọc sách tại <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> của mình.
                
                7.	<a href="http://noithatfudo.vn/"> Nội thất hiện đại </a> và thông minh là xu hướng mới trong trang trí <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> hiện nay. Với những sản phẩm <a href="http://noithatfudo.vn/"> Nội thất thông minh </a> và tiện ích, bạn có thể tạo ra một không gian <a href="http://noithatfudo.vn/bed_room"> Phòng ngủ </a> hiện đại và tiện nghi.
                
                8.	Tóm lại, <a href="http://noithatfudo.vn/bed_room">Trang trí phòng ngủ </a> với sự kết hợp thông minh giữa các yếu tố <a href="http://noithatfudo.vn/"> Nội thất Fudo </a>, <a href="http://noithatfudo.vn/bed_room/9"> Giường ngủ </a>, <a href="http://noithatfudo.vn/bed_room/11"> Đèn ngủ </a>, <a href="http://noithatfudo.vn/home_office/25"> Bàn làm việc </a>và <a href="http://noithatfudo.vn/bed_room/13"> Đèn bàn </a>, bạn có thể tạo ra một không gian phòng ngủ đẹp mắt, tiện nghi và thoải mái.
                
                9.	Không chỉ là các sản phẩm nội thất, mà còn cần đến sự sáng tạo và tinh tế trong việc bố trí và trang trí phòng ngủ của bạn. Nếu bạn muốn tạo ra một không gian phòng ngủ đẹp mắt và đầy cảm hứng, hãy thử sử dụng các màu sắc phù hợp, trang trí bức tường hoặc đặt các vật dụng trang trí nhỏ để tạo điểm nhấn cho phòng ngủ của mình.
                
                    10.	Với sự kết hợp đầy tinh tế và sáng tạo, phòng ngủ của bạn sẽ trở thành một không gian thư giãn tuyệt vời, giúp bạn tận hưởng giấc ngủ ngon và tái tạo năng lượng mỗi ngày.

                11.	Vậy hãy cùng tham khảo những sản phẩm nội thất Fudo để trang trí phòng ngủ của bạn trở nên hoàn hảo và đẳng cấp nhé!
                         
                ',
                'author' => 'Lê Minh Đại',
                'status' => '1',
            ],
            [
                'title' => 'Bí mật chọn thảm trang trí cho phòng khách hiện đại',
                'link' => 'bi-mat-chon-tham-trang-tri-cho-phong-khach-hien-dai',
                'short_description' => 'Phòng ngủ là không gian riêng tư và quan trọng nhất trong căn nhà của chúng ta. Đó là nơi mà chúng ta thư giãn và tái tạo năng lượng sau một ngày dài làm việc.',
                'image' => 'chon-tham-trai-san-phong-thuy-hoa-giai-ta-khi-cho-ngoi-nha-1.png',
                'keywords' => 'bộ giường ngủ đẹp, thiết kế nội thất, bàn ghế phòng ngủ, bộ nội thất phòng ngủ, giường ngủ đẹp hiện đại, mẫu phòng ngủ đẹp, nội thất Fudo', 
                'content' => 'Bạn muốn trang trí phòng khách trong nhà của bạn thật hiện đại mà đang phân vân trong việc lựa chọn loại đồ trang trí vừa hiện đại mà lại vừa phù hợp với bố cục chung trong căn nhà của bạn. Thảm sàn là một yếu tố không thể thiếu khi trang trí không gian phòng khách. Bạn đang phân vân trong việc lựa chọn loại thảm và không biết tìm kiếm hoặc mua ở đâu?
                Hãy đến với Nội thất Fudo nơi cung cấp đầy đủ các loại <a href="https://noithatfudo.vn/living_room/">thảm sàn</a> hiện đại với đa dạng chủng loại, màu sắc, mẫu mã, kích thước,... đảm bảo thỏa mãn được các yêu cầu của bạn. 
                Trong bài viết này, chúng tôi sẽ chia sẻ kinh nghiệm thực tế trong việc lựa chọn loại <a href="https://noithatfudo.vn/living_room/> thảm sàn phòng khách</a> phù hợp với người có lối sống hiện đại.
                 
                <img src="https://luxfuni.com/wp-content/uploads/2020/02/kinh-nghiem-chon-tham-trai-san-phong-khach-them-am-cung-6.jpg" alt="Thảm sàn phòng khách hiện đại màu xanh, trắng"/>
                Dưới đây là một số tiêu chí mà chúng tôi đúc kết ra được trong quá trình lựa chọn <a href="https://noithatfudo.vn/living_room/"> thảm sàn</a> trong nhiều năm:
                1.	Màu sắc
                Màu sắc cũng là một yếu tố khá quan trọng trong việc lựa chọn loại <a href="https://noithatfudo.vn/living_room/"> thảm</a> phù hợp. Mỗi người sẽ có một màu sắc ưa thích riêng, có người thích màu này, có người lại thích màu khác. Có nhiều người họ lại lựa chọn theo màu phong thủy, màu bản mệnh; màu sắc đó có xung khắc với mệnh của mình hay không? Có người lại lựa chọn màu sắc phù hợp theo tổng thể bố cục của căn phòng. Có người lại lựa chọn màu sắc phù hợp với tính cách của bản thân. Nếu bạn chọn một màu mà bạn không thích nó sẽ gây cho bạn sự khó chịu và làm bạn muốn đổi một loại <a href="https://noithatfudo.vn/living_room/"> thảm</a>  khác.
                Sau đây là một vài gợi ý bạn có thể tham khảo:
                 
                Màu sắc phù hợp với phong thủy – người mệnh mộc
                <img src="https://www.nhathoa.com/uploads/files/2018/08/11/chon-tham-trai-san-phong-thuy-hoa-giai-ta-khi-cho-ngoi-nha-1.jpg" alt="Thảm sàn phòng khách hiện đại phù hợp với phong thủy, người mệnh mộc"/>
                2.	Kiểu dáng
                Về kiểu dáng, <a href="https://noithatfudo.vn/living_room/"> thảm sàn phòng khách</a> thường sẽ có kiểu dáng đơn giản hoặc là loại có họa tiết. Việc lựa chọn <a href="https://noithatfudo.vn/living_room/"> thảm</a> cũng đòi hỏi sự phù hợp về kiểu dáng phải ăn khớp với phong cách tổng thể của căn phòng, phù hợp với vị trí đặt góp phần làm cho căn phòng thêm tinh tế, hoa lệ.
                ',
                'author' => 'Nguyễn Lê Trọng Nhân',
                'status' => '1',
            ],
            [
                'title' => 'Top 7 mẫu sofa được ưa chuộng hiện nay',
                'link' => 'top-7-mau-sofa-duoc-ua-chuong-hien-nay',
                'short_description' => 'Phòng ngủ là không gian riêng tư và quan trọng nhất trong căn nhà của chúng ta. Đó là nơi mà chúng ta thư giãn và tái tạo năng lượng sau một ngày dài làm việc.',
                'image' => 'bo-sofa-phong-khach-cao-cap-phong-cach-tan-co-dien-GD932S-2.png',
                'keywords' => 'bộ giường ngủ đẹp, thiết kế nội thất, bàn ghế phòng ngủ, bộ nội thất phòng ngủ, giường ngủ đẹp hiện đại, mẫu phòng ngủ đẹp, nội thất Fudo', 
                'content' => 'Cửa hàng nội thất Fudo là một trong những thương hiệu nổi tiếng về đồ nội thất tại Việt Nam. Nếu bạn đã đầu tư vào một <a href="https://noithatfudo.vn/living_room/1>chiếc sofa</a> mới từ cửa hàng này, chắc chắn bạn sẽ muốn nó trông thật nổi bật. Trong bài viết này, chúng tôi sẽ đưa đến cho bạn 7 mẫu sofa được ưa chuộng hiện nay.
 
                <img src="https://vuongquocnoithat.vn/images/2021/05/22/bo-sofa-phong-khach-cao-cap-phong-cach-tan-co-dien-GD932S-2.jpg" alt="Sofa được mọi người ưa chuộng"/>
                1.Sofa da 
                <a href="https://luxcasastore.com/uploads/images/2021/09/1632682934-single_product11-1614129187multiproduct50ghesofatiepkhachsangtrong.jpg">Sofa da</a> là một trong những loại sofa cao cấp hiện nay nhờ vào vật liệu. Ví dụ như da bò có tính đàn hồi tốt, giữ nhiệt và tạo cảm giác êm ái cho người dùng.
                Mẫu ghế này sẽ mang đến sự sang trọng cho không gian phòng khách. Tuy nhiên, để mua được một chiếc ghế sofa này thì giá thành cũng không hề rẻ.
                2.Sofa bọc vải
                Với chất liệu thân thiện và giá cả hợp lí, <a href="https://noithatfudo.vn/living_room/1/3">sofa bọc vải </a> là lựa chọn mà nhiều người sử dụng. Sofa này vừa mềm mại, vừa ấm áp tạo ra sự thoải mái cho khách hàng. Ngoài ra, sự đa dạng về kiểu mẫu, màu sắc cũng là 1 yếu tố khiến cho <a href="https://noithatfudo.vn/living_room/1/1">ghế sofa bọc vải</a> được nhiều người lựa chọn.
                 
                <img src="https://bizweb.dktcdn.net/100/407/310/files/sofa-vai.jpg?v=1605758242276" alt="Sofa vải màu xám"/>
                3.Sofa nỉ
                Với chất liệu nỉ, những <a href="https://noithatdangkhoa.com/wp-content/uploads/2019/12/nen-chon-ghe-sofa-da-hay-sofa-ni-2.jpg">chiếc sofa</a> này sẽ giúp cho khách hàng có nhiều lựa chọn về mẫu dáng, màu sắc đề mà đầu tư. Thêm vào đó, những chi tiết nhỏ như hoa văn sẽ làm cho ghế sofa này thêm sinh động.
                Tuy là đẹp, nhưng <a href="https://thegioisofa.com/wp-content/uploads/2021/09/Sofa-vai-bo-3.jpg">sofa nỉ</a> cũng có hạn chế nhất định, đó là nó dễ bị bám bụi và sẽ mất nhiều công sức để làm sạch nó.
                4.Sofa gỗ
                <a href="https://noithatlacgia.com/wp-content/uploads/2021/06/sofa-go-lv-oc-cho-hien-dai-3.jpg">Sofa gỗ</a> cũng là 1 loại sofa được phổ biến hiện nay, nhờ việc gỗ là một vật liệu dễ tìm và dễ gia công. Sofa gỗ là một lựa chọn tốt đối với những căn nhà có phòng khách ở tầng 1, hoặc những căn nhà có độ ẩm cao. Ngoài ra, tuổi thọ cao cộng với độ bền cũng là một yếu tố khiến các khách hàng thích thú, đặc biệt là những người trung niên.
                5.Sofa giường
                Đây là một loại sofa khá đặc biệt, khi nó được tích hợp thêm tính năng giường ngủ, giúp cho đa dạng chức năng cho người dùng. Khi mình sử dụng <a href="https://cdn.zsofa.vn/wp-content/uploads/2021/05/sofa-giuong-da-nang-2.jpg">sofa giường ngủ</a>, ngoài việc mình thư giãn trên chiếc ghế này, thì mình cũng có thể nghỉ ngơi, ngủ trên chiếc sofa này. Đây cũng là 1 lựa chọn tốt đối với khách hàng khi có người đến chơi nhưng thiếu chỗ nghỉ.
                 
                <img src=https://cf.shopee.vn/file/d5e39142b9c02fd27a0323ea09f50294 alt="Sofa tích hợp với giường ngủ"/>
                
                6.Sofa chữ L
                <a href="https://sofadungthinh.com/uploads/images/2021/05/218x164-1620203999-single_product1-7.png">Sofa chữ L</a> là mẫu ghế sofa bao gồm 2 khối ghế ghép lại thành hình chữ L, thường được đưa vào góc của phòng khách để tối ưu không gian và mang đến sự thoải mái cho gia đình
                <a href="https://sofadungthinh.com/uploads/images/2021/05/218x164-1620550150-single_product1-7.png">Sofa chữ L</a> có thiết kế vô cùng tinh tế với những chất liệu vải cực kì bền. Đây cũng là 1 kiểu sofa rất được phổ biến hiện nay.
                7.Sofa đơn dài
                Đây là 1 kiểu sofa khá thú vị, với 1 khối dài, 1 bên có cánh tay, còn bên kia không có.<a href="https://noithatkenli.vn/wp-content/uploads/2022/01/chaise-lounge.jpg">Sofa đơn dài</a> thường được đặt trong 1 góc nhỏ ở phòng khách để tối ưu không gian, thích hợp với những căn phòng nhỏ,với khi sống một mình.
                 
                <img src="https://noithatdangkhoa.com/wp-content/uploads/2022/02/sofa-phong-ngu-sfdk59.jpg" alt="Ghế sofa đơn dài màu xám"/>
                 <p style="text-align: center;">Ghế sofa đơn dài màu xám</p>
                Trên đây là 7 mẫu ghế sofa được mọi người ưu chuộng hiện nay. Hy vọng qua bài viết này, bạn sẽ có thể lựa chọn cho mình một chiếc ghế sofa phù hợp với diện tích phòng khách cho mình, làm cho căn phòng trở nên sang trọng hơn. Nếu bạn muốn biết thêm thông tin về ghế sofa hoặc những đồ nội thất khác, hãy truy cập Cửa hàng nội thất Fudo.
                ',
                'author' => 'Chu Tấn Phong',
                'status' => '1',
            ],
        ]);
        DB::table('users')->insert([
            [
                'id' => 111,
                'name' => 'Admin',
                'email' => 'adminuit@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 1,
            ],
            [
                'id' => 222,
                'name' => 'Khách',
                'email' => 'guest@gmail.com',
                'password' => Hash::make('123456'),
                'level' => 0,
            ],
        ]);

        // DB::table('product_category')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'Men',
        //         'room_id' => 1
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'Women',
        //         'room_id' => 1
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'Kids',
        //         'room_id' => 1
        //     ],
        // ]);

        // DB::table('products')->insert([
        //     [
        //         'id' => 1,
        //         'product_category_id' => 2,

        //         'room_id' => 1,

        //         'name' => 'Pure Pineapple',
        //         'material' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
        //         'price' => 629.99,
        //         'qty' => 20,
        //         'weight' => 1.3,
        //         'sku' => '00012',
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 2,
        //         'product_category_id' => 2,

        //         'room_id' => 1,

        //         'name' => 'Guangzhou sweater',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 3,
        //         'product_category_id' => 2,

        //         'room_id' => 2,

        //         'name' => 'Guangzhou sweater',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 4,
        //         'product_category_id' => 1,

        //         'room_id' => 2,

        //         'name' => 'Microfiber Wool Scarf',
        //         'material' => null,
        //         'price' => 64,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 5,
        //         'product_category_id' => 3,
        //         'room_id' => 1,

        //         'name' => "Men's Painted Hat",
        //         'material' => null,
        //         'price' => 44,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => false,
        //     ],
        //     [
        //         'id' => 6,
        //         'product_category_id' => 2,
        //         'room_id' => 1,

        //         'name' => 'Converse Shoes',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 7,
        //         'product_category_id' => 1,
        //         'room_id' => 1,

        //         'name' => 'Pure Pineapple',
        //         'material' => null,
        //         'price' => 64,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 8,
        //         'product_category_id' => 1,
        //         'room_id' => 2,

        //         'name' => '2 Layer Windbreaker',
        //         'material' => null,
        //         'price' => 44,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        //     [
        //         'id' => 9,
        //         'product_category_id' => 1,
        //         'room_id' => 1,

        //         'name' => 'Converse Shoes',
        //         'material' => null,
        //         'price' => 35,
        //         'qty' => 20,
        //         'weight' => null,
        //         'sku' => null,
        //         'featured' => true,
        //     ],
        // ]);



        // DB::table('product_details')->insert([
        //     [
        //         'product_id' => 1,
        //         'size' => 'S',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 2,
        //         'size' => 'M',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 3,
        //         'size' => 'L',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 4,
        //         'size' => 'XS',
        //         'qty' => 5,
        //     ],
        //     [
        //         'product_id' => 5,
        //         'size' => 'S',
        //         'qty' => 0,
        //     ],
        //     [
        //         'product_id' => 6,
        //         'size' => 'S',
        //         'qty' => 0,
        //     ],
        // ]);

        // DB::table('products_images')->insert([
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-1.jpg',
        //     ],
        //     [
        //         'product_id' => 1,
        //         'path' => 'product-1-2.jpg',
        //     ],
        //     [
        //         'product_id' => 2,
        //         'path' => 'product-2.jpg',
        //     ],
        //     [
        //         'product_id' => 3,
        //         'path' => 'product-3.jpg',
        //     ],
        //     [
        //         'product_id' => 4,
        //         'path' => 'product-4.jpg',
        //     ],
        //     [
        //         'product_id' => 5,
        //         'path' => 'product-5.jpg',
        //     ],
        //     [
        //         'product_id' => 6,
        //         'path' => 'product-6.jpg',
        //     ],
        //     [
        //         'product_id' => 7,
        //         'path' => 'product-7.jpg',
        //     ],
        //     [
        //         'product_id' => 8,
        //         'path' => 'product-8.jpg',
        //     ],
        //     [
        //         'product_id' => 9,
        //         'path' => 'product-9.jpg',
        //     ],
        // ]);

        // DB::table('rooms')->insert([
        //     [
        //         'id' => 1,
        //         'name' => 'PHÒNG KHÁCH - living room',
        //         'link' => 'living_room'
        //     ],
        //     [
        //         'id' => 2,
        //         'name' => 'PHÒNG NGỦ - bedroom',
        //         'link' => 'bed_room'
        //     ],
        //     [
        //         'id' => 3,
        //         'name' => 'BẾP & PHÒNG ĂN - Kitchen room',
        //         'link' => 'kitchen_room'
        //     ],
        //     [
        //         'id' => 4,
        //         'name' => 'PHÒNG LÀM VIỆC - home office',
        //         'link' => 'home_office'
        //     ],
        //     [
        //         'id' => 5,
        //         'name' => 'PHÒNG TẮM - bathroom',
        //         'link' => 'bath_room'
        //     ],

        // ]);








        DB::table('product_category')->insert([
            [
                'id' => 1,
                'name' => 'SOFA',
                'room_id' => 1,
                'meta_description' => 'Fudo cung cấp đa dạng sản phẩm sofa cao cấp, chất lượng tốt, thiết kế đẹp mắt, phù hợp với nhiều phong cách nội thất. Mua sắm online và nhận nhiều ưu đãi hấp dẫn.'
            ],
            [
                'id' => 2,
                'name' => 'GHẾ',
                'room_id' => 1,
                'meta_description' => 'Fudo cung cấp đa dạng sản phẩm ghế chất lượng cao, giá cả hợp lý, phù hợp với nhiều phong cách nội thất. Các sản phẩm ghế của chúng tôi được thiết kế đẹp mắt, tiện dụng và dễ dàng lắp đặt. Mua sắm online và nhận nhiều ưu đãi hấp dẫn.'
            ],
            [
                'id' => 3,
                'name' => 'KỆ, TỦ TV',
                'room_id' => 1,
                'meta_description' => 'Mua tủ kệ tivi gỗ phòng khách, phòng ngủ, thiết kế đơn giản hiện đại, nhiều mẫu đẹp, tinh tế, giao hàng tận nhà và lắp đặt miễn phí chỉ có Nội Thất Fudo'
            ],
            [
                'id' => 4,
                'name' => 'ĐỒNG HỒ',
                'room_id' => 1,
                'meta_description' => 'Nội Thất Fudo cung cấp đồng hồ cao cấp từ các thương hiệu nổi tiếng với giá cả hợp lý. Sản phẩm đảm bảo chất lượng và độ chính xác cao. Hãy mua ngay để tăng thêm phần sang trọng cho không gian sống của bạn.'
            ],
            [
                'id' => 5,
                'name' => 'TRANH ẢNH',
                'room_id' => 1,
                'meta_description' => 'Nội Fudo cung cấp tranh ảnh treo tường đa dạng về chủ đề từ phong cảnh, trừu tượng đến tranh nghệ thuật. Sản phẩm được in trên chất liệu cao cấp, đảm bảo chất lượng và độ sắc nét tốt nhất. Hãy tạo điểm nhấn cho không gian sống của bạn với tranh ảnh tại Nội Thất Fudo.'
            ],
            [
                'id' => 6,
                'name' => 'GỐI TRANG TRÍ',
                'room_id' => 1,
                'meta_description' => 'Nội thất Fudo có các mẫu gối trang trí đa dạng kiểu dáng và kích thước đem lại cho không gian nội thất phòng khách, phòng ngủ với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 7,
                'name' => 'ĐÈN SÀN',
                'room_id' => 1,
                'meta_description' => 'Nội thất Fudo cung cấp đèn sàn đa dạng kiểu dáng và màu sắc phù hợp với mọi phong cách nội thất. Sản phẩm được làm từ chất liệu an toàn và đảm bảo độ bền cao. Hãy tạo điểm nhấn cho không gian sống của bạn với đèn sàn đẹp tại Nội Thất Fudo.'
            ],
            [
                'id' => 8,
                'name' => 'KỆ, TỦ GIÀY',
                'room_id' => 1,
                'meta_description' => 'Mua kệ tủ, giày dùng trong chung cư, văn phòng kiểu dáng thiết kế hiện đại. Nội Thất Fudo cung cấp kệ tủ, giày gỗ đẹp, miễn phí lắp đặt'
            ],
            [
                'id' => 9,
                'name' => 'GIƯỜNG',
                'room_id' => 2,
                'meta_description' => 'Tại Nội Thất Fudo, chúng tôi cung cấp các mẫu giường ngủ đẹp, sang trọng với nhiều kiểu dáng và màu sắc để lựa chọn. Mua giường ngủ gỗ, phong cách tối giản, hiện đại và tân cổ điển. Tất cả sản phẩm đều được làm từ chất liệu cao cấp, đảm bảo sức khỏe cho người dùng. Mua ngay để có giấc ngủ ngon và sảng khoái.'
            ],
            [
                'id' => 10,
                'name' => 'KỆ/TỦ QUẦN ÁO',
                'room_id' => 2,
                'meta_description' => 'Nội thất Fudo cung cấp tủ quần áo và kệ đa năng chất lượng, đa dạng mẫu mã, giá tốt nhất thị trường. Tư vấn thiết kế miễn phí, giao hàng và lắp đặt tận nơi. Đặt hàng ngay hôm nay!'
            ],
            [
                'id' => 11,
                'name' => 'ĐÈN SÀN',
                'room_id' => 2,
                'meta_description' => 'Nội thất Fudo có mẫu đèn sàn trang trí nội thất phòng ngủ với phong cách hiện đại decor phòng khách, phòng ngủ giúp không gian sinh động và ấm áp với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 12,
                'name' => 'BÀN TRANG ĐIỂM',
                'room_id' => 2,
                'meta_description' => 'Nhiều mẫu bàn trang điểm đẹp tại Nội Thất Fudo, thiết kế phong cách hiện đại, nhỏ gọn, treo tường, đèn led, giấu gương. Mua bàn trang điểm gỗ mới tại nội thất Fudo'
            ],
            [
                'id' => 13,
                'name' => 'ĐÈN BÀN',
                'room_id' => 2,
                'meta_description' => 'Nội thất Fudo có mẫu đèn trang trí nội thất phòng khách, đèn bàn với phong cách hiện đại decor phòng khách, phòng ngủ giúp không gian sinh động và ấm áp với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 14,
                'name' => 'ĐÈN TRANG TRÍ',
                'room_id' => 2,
                'meta_description' => 'Nội thất Fudo có mẫu đèn trang trí nội thất phòng khách với phong cách hiện đại decor phòng khách, phòng ngủ giúp không gian sinh động và ấm áp với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 15,
                'name' => 'TỦ LƯU TRỮ',
                'room_id' => 2,
                'meta_description' => 'Mua ngay tủ lưu trữ nội thất cao cấp giá rẻ tại Nội thất Fudo, trang trí nội thất phòng khách, phòng ngủ, phòng làm việc. Chất lượng đảm bảo, đa dạng mẫu mã và kích thước. Giao hàng nhanh chóng toàn quốc'
            ],
            [
                'id' => 16,
                'name' => 'KỆ/TỦ GIÀY',
                'room_id' => 2,
                'meta_description' => 'Mua kệ, tủ giày đa năng, tiết kiệm diện tích tại Nội thất Fudo, đa dạng mẫu mã phù hợp trang trí nội thất phòng ngủ. Nội Thất Fudo cung cấp kệ, tủ giày gỗ đẹp, miễn phí lắp đặt'
            ],
            [
                'id' => 17,
                'name' => 'GIÁ/KỆ TREO TRANG TRÍ',
                'room_id' => 2,
                'meta_description' => 'Mua giá, kệ trang trí giá rẻ tại Nội Thất Fudo, đa dạng mẫu mã, chất liệu đẹp, giao hàng toàn quốc, phù hợp trang trí nội thất phòng khách, phòng ngủ hiện đại. Tận hưởng không gian sống đẹp hơn với kệ trang trí Nội Thất Fudo'
            ],
            [
                'id' => 18,
                'name' => 'GƯƠNG',
                'room_id' => 2,
                'meta_description' => 'Nội thất Fudo có các mẫu gương treo tường, gương trang điểm, gương đứng, gương đèn led, với nhiều kiểu dáng và kích thước cho nội thất phòng ngủ, phòng khách hiện đại'
            ],
            [
                'id' => 19,
                'name' => 'BỘ BÀN ĂN',
                'room_id' => 3,
                'meta_description' => 'Mua sắm bộ bàn ăn đẹp và chất lượng với giá cả phải chăng tại nội thất Fudo. Bộ bàn ăn 4 ghế, 6 ghế, 8 ghế phù hợp cho các không gian ăn gia đình, phòng ăn nhà hàng, khách sạn với chất liệu gỗ tự nhiên đẹp, thiết kế hiện đại, lắp đặt miễn phí và giao hàng tận nơi tại Nội Thất Fudo'
            ],
            [
                'id' => 20,
                'name' => 'BÀN ĂN',
                'room_id' => 3,
                'meta_description' => 'Fudo cung cấp mẫu bàn ăn có thiết kế đẹp phong cách hiện đại, dễ dùng cho thiết kế nội thất phòng bếp hiện đại, thông minh. Mua nội thất online nhận ưu đãi, giao hàng ngay và miễn phí lắp đặt'
            ],
            [
                'id' => 21,
                'name' => 'GHẾ ĂN',
                'room_id' => 3,
                'meta_description' => 'Mua ghế ăn, ghế gỗ với nhiều mẫu đẹp và sang trọng, phù hợp trang trí nội thất phòng bếp hiện đại, thông minh tại Nội Thất Fudo. Giá rẻ, giao hàng nhanh chóng và nhiều chương trình ưu đãi hấp dẫn'
            ],
            [
                'id' => 22,
                'name' => 'THẢM BẾP',
                'room_id' => 3,
                'meta_description' => 'Nội thất Fudo cung cấp nhiều mẫu thảm bếp chất lượng cao cho nội thất phòng bếp cao cấp, hiện đại. Tư vấn thiết kế miễn phí, giao hàng và lắp đặt tận nơi. Đặt hàng ngay hôm nay!'
            ],
            [
                'id' => 23,
                'name' => 'KỆ BẾP',
                'room_id' => 3,
                'meta_description' => 'Nội thất Fudo cung cấp nhiều mẫu kệ bếp chất lượng cao cho nội thất phòng bếp cao cấp, hiện đại. Giúp tiết kiệm không gian và tạo điểm nhấn cho căn bếp của bạn. Tư vấn thiết kế miễn phí, giao hàng và lắp đặt tận nơi. Đặt hàng ngay hôm nay!'
            ],
            [
                'id' => 24,
                'name' => 'KHĂN BẾP',
                'room_id' => 3,
                'meta_description' => 'Nội thất Fudo cung cấp nhiều mẫu khăn bếp chất lượng cao cho nội thất phòng bếp cao cấp, hiện đại. Giúp tiết kiệm không gian và tạo điểm nhấn cho căn bếp của bạn. Tư vấn thiết kế miễn phí, giao hàng và lắp đặt tận nơi. Đặt hàng ngay hôm nay!'
            ],
            [
                'id' => 25,
                'name' => 'BÀN',
                'room_id' => 4,
                'meta_description' => 'Fudo cung cấp đa dạng sản phẩm bàn chất lượng cao, giá cả hợp lý, phù hợp với nhiều phong cách nội thất. Các sản phẩm ghế của chúng tôi được thiết kế đẹp mắt, tiện dụng và dễ dàng lắp đặt. Mua sắm online và nhận nhiều ưu đãi hấp dẫn.
                '
            ],
            [
                'id' => 26,
                'name' => 'GHẾ',
                'room_id' => 4,
                'meta_description' => 'Fudo cung cấp đa dạng sản phẩm ghế chất lượng cao, giá cả hợp lý, phù hợp với nhiều phong cách nội thất. Các sản phẩm ghế của chúng tôi được thiết kế đẹp mắt, tiện dụng và dễ dàng lắp đặt. Mua sắm online và nhận nhiều ưu đãi hấp dẫn.'
            ],
            [
                'id' => 27,
                'name' => 'ĐÈN BÀN',
                'room_id' => 4,
                'meta_description' => 'Nội thất Fudo có mẫu đèn trang trí phòng làm việc, phòng khách, đèn bàn, đèn ngủ, với phong cách nội thất hiện đại giúp không gian sinh động và ấm áp với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 28,
                'name' => 'ĐỒNG HỒ',
                'room_id' => 4,
                'meta_description' => 'Nội Thất Fudo cung cấp đồng hồ cao cấp từ các thương hiệu nổi tiếng với giá cả hợp lý. Sản phẩm đảm bảo chất lượng và độ chính xác cao. Hãy mua ngay để tăng thêm phần sang trọng cho không gian sống của bạn.'
            ],
            [
                'id' => 29,
                'name' => 'VĂN PHÒNG PHẨM',
                'room_id' => 4,
                'meta_description' => 'Mua văn phòng phẩm chất lượng với giá cả phải chăng. Nội thất Fudo cung cấp các sản phẩm văn phòng phẩm đa dạng và chất lượng cao như ghế văn phòng, tủ hồ sơ, bàn làm việc, và nhiều sản phẩm khác của nội thất phòng làm việc. Hãy đến với chúng tôi để có trải nghiệm mua sắm tốt nhất.'
            ],
            [
                'id' => 30,
                'name' => 'BẢNG TRANG TRÍ',
                'room_id' => 4,
                'meta_description' => 'Mua bảng trang trí nội thất đẹp, chất lượng cao với giá cả hợp lý để trang trí nội thất phòng khách, phòng làm việc hiện đại'
            ],
            [
                'id' => 31,
                'name' => 'KỆ/TỦ LƯU TRỮ',
                'room_id' => 4,
                'meta_description' => 'Mua ngay kệ, tủ lưu trữ nội thất cao cấp giá rẻ tại Nội thất Fudo, trang trí nội thất phòng khách, phòng ngủ, phòng làm việc. Chất lượng đảm bảo, đa dạng mẫu mã và kích thước. Giao hàng nhanh chóng toàn quốc'
            ],
            [
                'id' => 32,
                'name' => 'RÈM',
                'room_id' => 5,
                'meta_description' => 'Mua rèm, rèm phòng tắm chất lượng cao tại Nội thất Fudo. Bảo vệ sự riêng tư của bạn với các loại rèm phòng tắm chất lượng cao, đẹp, chuẩn nội thất phòng tắm cao cấp, hiện đại'
            ],
            [
                'id' => 33,
                'name' => 'KHĂN TẮM',
                'room_id' => 5,
                'meta_description' => 'Mua ngay khăn tắm chất lượng cao tại nội thất Fudo với giá cả phải chăng. Chúng tôi cung cấp các loại khăn tắm với nhiều màu sắc và kiểu dáng khác nhau, đảm bảo sẽ làm hài lòng khách hàng khó tính nhất'
            ],
            [
                'id' => 34,
                'name' => 'GƯƠNG',
                'room_id' => 5,
                'meta_description' => 'Nội thất Fudo có các mẫu gương treo tường, gương trang điểm, gương đứng, gương đèn led, với nhiều kiểu dáng và kích thước cho nội thất phòng ngủ, phòng khách hiện đại'
            ],
            [
                'id' => 35,
                'name' => 'THẢM CHÂN',
                'room_id' => 5,
                'meta_description' => 'Nội thất Fudo có các mẫu thảm chân, thảm lông cho nội thất phòng khách, phòng ngủ, phòng tắm đa dạng với giá hợp lý và chất lượng tốt'
            ],
            [
                'id' => 36,
                'name' => 'GIÁ, KỆ, TỦ TREO',
                'room_id' => 5,
                'meta_description' => 'Mua kệ, tủ treo nội thất giá rẻ tại Nội thất Fudo. Chúng tôi cung cấp đa dạng sản phẩm với chất lượng tốt nhất để thiết kế nội thất phòng tắm, phòng ngủ hiện đại, thông minh.'
            ]
        ]);

        DB::table('products')->insert([
            [
                'id' => 1,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'JASMIN',
                'material' => 'Vải Polyester, khung gỗ sồi',
                'price' => 10850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 2,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'RAPUNZEL',
                'material' => 'Vải Polyester, khung gỗ dầu đỏ',
                'price' => 16800000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 3,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'ELENA',
                'material' => 'Vải Polyester, Khung gỗ thông Canada',
                'price' => 5850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 4,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'JOY',
                'material' => 'Vải Polyester, khung gỗ thông Cannada',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 5,
                'product_category_id' => 1,
                'room_id' => 1,
                'name' => 'DUMBO',
                'material' => 'Vải Polyester, khung gỗ dầu đỏ',
                'price' => 6500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 6,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'EZ',
                'material' => 'Ván MFC phủ Melamine',
                'price' => 1100000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 7,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'ABU',
                'material' => 'Khung gỗ dầu đỏ, vải polyester, da tổng hợp',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 8,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'JOY',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 9,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'MICHAU',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 10,
                'product_category_id' => 2,
                'room_id' => 1,
                'name' => 'OLIVER',
                'material' => 'Khung ghế plywood, Dây thun, Mút RB45 1 lớp dày 2m + Mút F2070 1 lớp dày 2cm + Gòn lớp mặt 1cm, Vải 94% polyester + 6% nylon',
                'price' => 4800000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 11,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'HOBU',
                'material' => 'Chân: Sắt sơn tĩnh điện. Mặt: Gỗ MFC',
                'price' => 2800000,
                'qty' => 172,
                'weight' => '22',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 12,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'JOHY',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 13,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'DALAT GRACE',
                'material' => 'Gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 14,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 4950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 15,
                'product_category_id' => 3,
                'room_id' => 1,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine, chân gỗ tần bì',
                'price' => 5650000,
                'qty' => 172,
                'weight' => '54.8',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 16,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'KING',
                'material' => 'kính cường lực 3,5mm, khung viền gỗ sồi, kim đồng hồ bằng gỗ óc chó.',
                'price' => 899000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 17,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'QUEEN',
                'material' => 'khung viền plywood, kim đồng hồ bằng gỗ tần bì, kính cường lực.',
                'price' => 799000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 18,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'RABBIT',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 699000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 19,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'CHESHIRE',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 720000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 20,
                'product_category_id' => 4,
                'room_id' => 1,
                'name' => 'HATTER',
                'material' => 'ECO BOARD thân thiện với môi trường',
                'price' => 720000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 21,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'MOON',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 199000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 22,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'YOU',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 199000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 23,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'OPIUM',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 280000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 24,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'LIGHTHOUSE',
                'material' => 'Khung nhựa, vải canvas',
                'price' => 280000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 25,
                'product_category_id' => 5,
                'room_id' => 1,
                'name' => 'PEAKS',
                'material' => 'Khung gỗ thông, vải canvas',
                'price' => 380000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 26,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 6',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 27,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 5',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 28,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 4',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 29,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 3',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 30,
                'product_category_id' => 6,
                'room_id' => 1,
                'name' => 'TROPICAL 2',
                'material' => 'Flax',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 31,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'NOTI',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 32,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'LOGLY',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 33,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'LONICERA',
                'material' => 'Thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 34,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'HEE',
                'material' => 'Sắt sơn tĩnh điện, thủy tinh',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 35,
                'product_category_id' => 7,
                'room_id' => 1,
                'name' => 'TABOB',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5,3',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 36,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'LAM',
                'material' => 'Khung: Sắt sơn tĩnh điện. Mặt: Gỗ MDF chống ẩm.',
                'price' => 1920000,
                'qty' => 172,
                'weight' => '10',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 37,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC phủ Mellamine',
                'price' => 2950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 38,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'ĐỘC LẬP',
                'material' => 'gỗ MFC phủ melamine',
                'price' => 4220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 39,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, thép sơn tĩnh điện',
                'price' => 8250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 40,
                'product_category_id' => 8,
                'room_id' => 1,
                'name' => 'DALAT GRACE',
                'material' => 'Gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 41,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'ĐỘC LẬP',
                'material' => 'thép sơn tĩnh điện, gỗ MFC phủ melamine',
                'price' => 9820000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 42,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'ván MFC phủ Melamine',
                'price' => 9850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 43,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'BEBE',
                'material' => 'Ống thép sơn tĩnh điện. Đệm bọc vải',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 44,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'TABE',
                'material' => 'Đệm bọc vải',
                'price' => 1250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 45,
                'product_category_id' => 9,
                'room_id' => 2,
                'name' => 'LULLABY',
                'material' => 'Khung gỗ dầu đỏ, gỗ plywood, vải polyester',
                'price' => 10500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 46,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'TASOTA',
                'material' => 'Độ dài độ treo 72 cm, ván MFC phủ Melamine',
                'price' => 485000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 47,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'ván MFC phủ Melamine',
                'price' => 16000000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 48,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, kính cường lực khung nhôm',
                'price' => 20200000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 49,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 9800000,
                'qty' => 172,
                'weight' => '134.6',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 50,
                'product_category_id' => 10,
                'room_id' => 2,
                'name' => 'JOHY',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 7200000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 51,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'LONICERA',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 52,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'HEE',
                'material' => 'Sắt sơn tĩnh điện, thủy tinh',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 53,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'TABOB',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5.3',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 54,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'AQUA',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: hợp kim',
                'price' => 2850000,
                'qty' => 172,
                'weight' => '15.2',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 55,
                'product_category_id' => 11,
                'room_id' => 2,
                'name' => 'ANCO',
                'material' => 'Thân đèn: Hợp kim. Đế đèn: đá. Chao đèn: vải',
                'price' => 2250000,
                'qty' => 172,
                'weight' => '5.6',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 56,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 1350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 57,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'M-BINAS',
                'material' => 'Mặt bàn: Gỗ MFC. Chân bàn: Sắt sơn tĩnh điện.',
                'price' => 2750000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 58,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'BUILDER',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 59,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 3250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 60,
                'product_category_id' => 12,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, thép sơn tĩnh điện',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 61,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'QUIIN',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 62,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'FEECA',
                'material' => 'nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 63,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'TATAR',
                'material' => 'thủy tinh trắng mờ',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 64,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'SOWN',
                'material' => 'nhựa',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 65,
                'product_category_id' => 13,
                'room_id' => 2,
                'name' => 'WADY',
                'material' => 'nhựa, gỗ plywood',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 66,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'LAMPY',
                'material' => 'dây led màu bạc dễ dàng uốn, tạo dáng trang trí theo ý thích.',
                'price' => 255000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 67,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'MOONLIGHT',
                'material' => 'Nhựa cao cấp PLA.',
                'price' => 690000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 68,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'GRINCH',
                'material' => 'Dùng pin',
                'price' => 155000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 69,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'ARTHUR',
                'material' => 'Cắm nguồn trực tiếp',
                'price' => 495000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 70,
                'product_category_id' => 14,
                'room_id' => 2,
                'name' => 'CARROL',
                'material' => 'Cắm nguồn trực tiếp',
                'price' => 385000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 71,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'EZ',
                'material' => 'Ván MFC phủ Melamine',
                'price' => 490000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 72,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'PAMITI',
                'material' => 'Thép sơn tĩnh điện. khoảng cách khay 23cm, bánh xe quay 360 độ có khóa tiện lợi linh hoạt trong sử dụng hàng ngày, sản phẩm tháo lắp dễ dàng.',
                'price' => 680000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 73,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'TAPI',
                'material' => 'Sắt sơn nhúng, tay nắm giỏ bằng gỗ, bánh xe nhựa',
                'price' => 1080000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 74,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'VITA',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 1290000,
                'qty' => 172,
                'weight' => '6.2',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 75,
                'product_category_id' => 15,
                'room_id' => 2,
                'name' => 'HANDY',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 76,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'HANO',
                'material' => 'Gỗ MFC phủ Melamine, cánh trượt, thép sơn tĩnh điện',
                'price' => 8250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 77,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'DALAT',
                'material' => 'Gỗ MFC phủ Melamine, cánh MDF sơn 2K, chân gỗ tự nhiên',
                'price' => 6500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 78,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'DALAT GRACE',
                'material' => 'gỗ cao su sơn phủ PU, ván MFC phủ Melamine',
                'price' => 4850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 79,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine, chân gỗ tần bì',
                'price' => 4250000,
                'qty' => 172,
                'weight' => '35.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 80,
                'product_category_id' => 16,
                'room_id' => 2,
                'name' => 'ĐỘC LẬP',
                'material' => 'gỗ MFC phủ melamine',
                'price' => 4220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 81,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FIE',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 82,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FEBRI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 83,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'POPLAR',
                'material' => 'Chân gỗ bạch dương, mặt MFC phủ Melamine',
                'price' => 329000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 84,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FEGO',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 369000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 85,
                'product_category_id' => 17,
                'room_id' => 2,
                'name' => 'FELI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 429000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 86,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'M-TRIBU',
                'material' => 'Khung gỗ tự nhiên/ Nhựa composite',
                'price' => 950000,
                'qty' => 172,
                'weight' => '4',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 87,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'AROU',
                'material' => 'Khung sắt sơn tĩnh điện.',
                'price' => 950000,
                'qty' => 172,
                'weight' => '5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 88,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'DUKA',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1450000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 89,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'HASO',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 90,
                'product_category_id' => 18,
                'room_id' => 2,
                'name' => 'UTU',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 390000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 91,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn NOVEN',
                'material' => 'Gỗ tự nhiên',
                'price' => 5550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 92,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn SAGO-LATU',
                'material' => 'Thép không gỉ',
                'price' => 11425000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 93,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn SAGO-MEI',
                'material' => 'Gỗ công nghiệp',
                'price' => 18070000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 94,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn MUSHROOM-TONY',
                'material' => 'Thép không gỉ',
                'price' => 4930000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 95,
                'product_category_id' => 19,
                'room_id' => 3,
                'name' => 'Bộ bàn ăn LUKI-DAISY',
                'material' => 'Thép không gỉ',
                'price' => 2350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 96,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'HONEY Plus',
                'material' => 'chân sắt sơn tĩnh điện, mặt MDF chống ẩm, phủ Mellamine',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 97,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'DALAT',
                'material' => 'Gỗ MDF sơn phủ 2K, chân gỗ tự nhiên',
                'price' => 4500000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 98,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'LEHI',
                'material' => 'Chân bàn: Sắt sơn tĩnh điện. Mặt bàn: Gỗ MDF chống ẩm, sơn phủ PU; màu vân gỗ phủ veneer.',
                'price' => 5490000,
                'qty' => 172,
                'weight' => '30.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 99,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'HONA',
                'material' => 'Chân bàn: Gỗ cao su. Mặt bàn: Gỗ cao su sơn PU',
                'price' => 5950000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 100,
                'product_category_id' => 20,
                'room_id' => 3,
                'name' => 'GROUND',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 3250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 101,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'LATU',
                'material' => 'Chân sắt sơn tĩnh điện, mặt ghế 100% polieste',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 102,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'NOVEN',
                'material' => 'Gỗ cao su, nệm bọc vải',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 103,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'ASTU',
                'material' => 'Thép sơn tĩnh điện, si bọc nệm',
                'price' => 549000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 104,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'PALAQI',
                'material' => 'Thép sơn tĩnh điện',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 105,
                'product_category_id' => 21,
                'room_id' => 3,
                'name' => 'MINOV',
                'material' => 'chân thép sơn tĩnh điện, mặt bọc nệm si - có tựa',
                'price' => 2850000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 106,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'STRIPED',
                'material' => '100% Cotton',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 107,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'LINE',
                'material' => '100% polyester + thermo plastic rubber bottom',
                'price' => 599000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 108,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'FRINGE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 109,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'WATERFALL',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 110,
                'product_category_id' => 22,
                'room_id' => 3,
                'name' => 'SQUARE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 499000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 111,
                'product_category_id' => 23,
                'room_id' => 3,
                'name' => 'NET',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 690000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 112,
                'product_category_id' => 23,
                'room_id' => 3,
                'name' => 'NET',
                'material' => 'Sắt sơn tĩnh điện',
                'price' => 690000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 113,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'CHEVRON',
                'material' => '40% cotton+ 60% polyeste',
                'price' => 109000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 114,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'CLOUDY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 115,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'LITTLE LINE',
                'material' => '100% Cotton',
                'price' => 89000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 116,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'LINE',
                'material' => '100% Cotton',
                'price' => 89000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 117,
                'product_category_id' => 24,
                'room_id' => 3,
                'name' => 'RAINY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 118,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'DOER',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1550000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 119,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'CHIN',
                'material' => 'Mặt gỗ cao su sơn PU, chân gỗ tự nhiên',
                'price' => 880000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 120,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'HONEY',
                'material' => 'chân sắt sơn tĩnh điện, mặt MDF chống ẩm, phủ Mellamine',
                'price' => 2250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 121,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'SAGO',
                'material' => 'Thép sơn tĩnh điện, gỗ MFC',
                'price' => 1350000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 122,
                'product_category_id' => 25,
                'room_id' => 4,
                'name' => 'MATCHA',
                'material' => 'Mặt bàn: đá nhân tạo trắng vân mây sơn đen mờ. Chân bàn: Solid surface gia cường sợi thuỷ tinh (Sợi fiberglass) đúc khuôn màu vân đá.',
                'price' => 5900000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 123,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'LATU',
                'material' => 'Chân sắt sơn tĩnh điện, mặt ghế 100% polieste',
                'price' => 1375000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 124,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'TO-BE',
                'material' => 'Lưng nhựa PP cao cấp. Nệm bọc vải. Chân ghế Aluminium sơn tĩnh điện',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 125,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'WINDMILL',
                'material' => 'Chân đế hợp kim nhôm. Mặt ngồi sử dụng da Microfiber. Tay vịn theo sơn tĩnh điện. Cần gạt tăng giảm chiều cao mặt ngồi',
                'price' => 4250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 126,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'NOVEN',
                'material' => 'Gỗ cao su, nệm bọc vải',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 127,
                'product_category_id' => 26,
                'room_id' => 4,
                'name' => 'ASTU',
                'material' => 'Thép sơn tĩnh điện, si bọc nệm',
                'price' => 549000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 128,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'QUIIN',
                'material' => 'thép sơn tĩnh điện, nhựa',
                'price' => 399000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 129,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'WADY',
                'material' => 'nhựa, gỗ plywood',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 130,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'LENOTA',
                'material' => 'Gỗ tự nhiên',
                'price' => 249000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 131,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'KALI',
                'material' => 'Thân đèn: Hợp kim sơn đen. Đế đèn: gỗ công nghiệp. Chao đèn: vải',
                'price' => 1375000,
                'qty' => 172,
                'weight' => '0.8',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 132,
                'product_category_id' => 27,
                'room_id' => 4,
                'name' => 'TITU',
                'material' => 'Hợp kim',
                'price' => 1150000,
                'qty' => 172,
                'weight' => '14',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 133,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'LAYER',
                'material' => 'Stainless Steel.',
                'price' => 1090000,
                'qty' => 172,
                'weight' => '1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 134,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'LED',
                'material' => 'Nhựa giả gỗ.',
                'price' => 385000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 135,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'NOTA',
                'material' => 'Viền sắt sơn tĩnh điện',
                'price' => 890000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 136,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'HONO',
                'material' => 'Nhựa PP cao cấp',
                'price' => 320000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 137,
                'product_category_id' => 28,
                'room_id' => 4,
                'name' => 'SUN',
                'material' => 'Viền sắt sơn tĩnh điện',
                'price' => 990000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 138,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Ống đựng bút',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 139,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Khay đựng ghim kẹp',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 140,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'Khay đựng ghi chú',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 59000,
                'qty' => 172,
                'weight' => '0.1',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 141,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'CIAO',
                'material' => 'Giấy mỹ thuật cao cấp.',
                'price' => 79000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 142,
                'product_category_id' => 29,
                'room_id' => 4,
                'name' => 'LAVIÉ',
                'material' => 'Giấy mỹ thuật cao cấp kết hợp nẹp Alu',
                'price' => 179000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 143,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'SHY',
                'material' => 'Khung: Sắt sơn tĩnh điện. Mặt: Gỗ MDF chống ẩm.',
                'price' => 1920000,
                'qty' => 172,
                'weight' => '12',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 144,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'QUADA',
                'material' => 'Gỗ MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => '10.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 145,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'HANDY',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 1590000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 146,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'HOBU',
                'material' => 'Sắt sơn tĩnh điện.',
                'price' => 1590000,
                'qty' => 172,
                'weight' => '8.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 147,
                'product_category_id' => 31,
                'room_id' => 4,
                'name' => 'TAPI',
                'material' => 'Sắt sơn nhúng, tay nắm giỏ bằng gỗ, bánh xe nhựa',
                'price' => 1080000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 148,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LINE',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 149,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LAYER',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 150,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'LATTE',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 151,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'FOG 1',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 152,
                'product_category_id' => 32,
                'room_id' => 5,
                'name' => 'CERAMIC',
                'material' => 'Polyester',
                'price' => 449000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 153,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'CLOUDY',
                'material' => '100% Cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 154,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'RAINY',
                'material' => '100% Cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 155,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'SNOWY',
                'material' => '100% organic cotton',
                'price' => 129000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 156,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'SUNNY',
                'material' => '100% cotton',
                'price' => 259000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 157,
                'product_category_id' => 33,
                'room_id' => 5,
                'name' => 'WINDY',
                'material' => '100% cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 158,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'LEA',
                'material' => 'Da thật',
                'price' => 1450000,
                'qty' => 172,
                'weight' => '3.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 159,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'MEDUSA',
                'material' => 'thép sơn tĩnh điện, kính nhập khẩu cao cấp dày 5mm',
                'price' => 1650000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 160,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'MIBO',
                'material' => 'thép sơn tĩnh điện, kính nhập khẩu cao cấp dày 5mm',
                'price' => 1250000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 161,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'CAPO',
                'material' => 'gương nhập khẩu Thái, dày 5mm, viền gương được mài cạnh tinh tế, đảm bảo an toàn sử dụng.',
                'price' => 1150000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 162,
                'product_category_id' => 34,
                'room_id' => 5,
                'name' => 'COBA',
                'material' => 'Nhựa ABS',
                'price' => 1220000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 163,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'STRIPED',
                'material' => '100% Cotton',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 164,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'LINE',
                'material' => '100% polyester + thermo plastic rubber bottom',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 165,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'FRINGE',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 166,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'PARALLEL',
                'material' => '45% cotton + 45% polyester + 10% viscose',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 167,
                'product_category_id' => 35,
                'room_id' => 5,
                'name' => 'WINDOW',
                'material' => '100% polyester + TPR bottom',
                'price' => 299000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 168,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'POD',
                'material' => 'MDF chống ẩm sơn phủ PU.',
                'price' => 1090000,
                'qty' => 172,
                'weight' => '6',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 169,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'PIN',
                'material' => 'Mica, mặt gỗ bần và khung nhựa dày 2cm.',
                'price' => 580000,
                'qty' => 172,
                'weight' => '2.5',
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 170,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'FEDO',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 579000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 171,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'FELI',
                'material' => 'Chân thép sơn tĩnh điện, mặt MFC phủ Melamine',
                'price' => 479000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ],
            [
                'id' => 172,
                'product_category_id' => 36,
                'room_id' => 5,
                'name' => 'POPLAR',
                'material' => 'Chân gỗ bạch dương, mặt MFC phủ Melamine',
                'price' => 379000,
                'qty' => 172,
                'weight' => null,
                'sku' => null,
                'featured' => true,
            ]
        ]);



        DB::table('product_details')->insert([
            [
                'product_id' => 1,
                'size' => 'D180/200*R80*C85 cm'
            ],
            [
                'product_id' => 2,
                'size' => 'D240-260*R160/80*C65 cm'
            ],
            [
                'product_id' => 3,
                'size' => 'D205*R90*C80 cm'
            ],
            [
                'product_id' => 4,
                'size' => 'D40*R40*C42 cm'
            ],
            [
                'product_id' => 5,
                'size' => 'D73*R67*C82 cm'
            ],
            [
                'product_id' => 6,
                'size' => 'D80 x R35 x C45 cm'
            ],
            [
                'product_id' => 7,
                'size' => 'D40 x R40 x C45 cm'
            ],
            [
                'product_id' => 8,
                'size' => 'D40 x R40 x C42 cm'
            ],
            [
                'product_id' => 9,
                'size' => 'D72 x R72 x C48 cm'
            ],
            [
                'product_id' => 10,
                'size' => 'D60 x R60 x C45 cm'
            ],
            [
                'product_id' => 11,
                'size' => 'D150 x R45 x C54 cm'
            ],
            [
                'product_id' => 12,
                'size' => 'D160*R40*C50 cm'
            ],
            [
                'product_id' => 13,
                'size' => 'D150 x R40 x C60 cm'
            ],
            [
                'product_id' => 14,
                'size' => 'D150 x R40 x C50 cm'
            ],
            [
                'product_id' => 15,
                'size' => 'D160 x R40 x C62 cm'
            ],
            [
                'product_id' => 16,
                'size' => 'D35.5 x R35.5 x C3 cm'
            ],
            [
                'product_id' => 17,
                'size' => 'D35.6 x R35.6 x C5 cm'
            ],
            [
                'product_id' => 18,
                'size' => 'D29 x R29 x C2.5 cm'
            ],
            [
                'product_id' => 19,
                'size' => 'D28 x R28 x C2.5 cm'
            ],
            [
                'product_id' => 20,
                'size' => 'D29 x R29 x C2.5 cm'
            ],
            [
                'product_id' => 21,
                'size' => '20*30 cm'
            ],
            [
                'product_id' => 22,
                'size' => '20*30 cm'
            ],
            [
                'product_id' => 23,
                'size' => '30*40 cm'
            ],
            [
                'product_id' => 24,
                'size' => '30*40 cm'
            ],
            [
                'product_id' => 25,
                'size' => 'D50x R70x C2.5 cm'
            ],
            [
                'product_id' => 26,
                'size' => '45 x 45 cm'
            ],
            [
                'product_id' => 27,
                'size' => '45 x 45 cm'
            ],
            [
                'product_id' => 28,
                'size' => '45 x 45 cm'
            ],
            [
                'product_id' => 29,
                'size' => '45 x 45 cm'
            ],
            [
                'product_id' => 30,
                'size' => '45 x 45 cm'
            ],
            [
                'product_id' => 31,
                'size' => 'D25 x R23 x C152 cm'
            ],
            [
                'product_id' => 32,
                'size' => 'D35 x R20 x C158 cm'
            ],
            [
                'product_id' => 33,
                'size' => 'D35 x R25 x C163 cm'
            ],
            [
                'product_id' => 34,
                'size' => 'D28 x R28 x C54 cm'
            ],
            [
                'product_id' => 35,
                'size' => 'D34*R34*C154 cm'
            ],
            [
                'product_id' => 36,
                'size' => 'D60 x R30 x H160 cm'
            ],
            [
                'product_id' => 37,
                'size' => 'D80 x R40 x C163 cm'
            ],
            [
                'product_id' => 38,
                'size' => 'D90 x R35 x C107 cm'
            ],
            [
                'product_id' => 39,
                'size' => 'D120 x R35 x C95 cm'
            ],
            [
                'product_id' => 40,
                'size' => 'D90 x R35 x C105 cm'
            ],
            [
                'product_id' => 41,
                'size' => 'Giường 1m4: D208,4 x R150 x C100 cm. Giường 1m6: D208,4 x R170 x C100 cm. Giường 1m8: D208,4 x R190 x C100 cm'
            ],
            [
                'product_id' => 42,
                'size' => 'Giường 1m2: D203.6 x R130.6 x C80 cm. Giường 1m4: D203.6 x R150.6 x C80 cm. Giường 1m6: D203.6 x R170.6 x C80 cm. Giường 1m8: D203.6 x R190.6 x C80 cm.'
            ],
            [
                'product_id' => 43,
                'size' => 'Giường 1m2: D120 x R7 x C55 cm. Giường 1m4: D140 x R7 x C55 cm. Giường 1m6: D160 x R7 x C55 cm. Giường 1m8: D180 x R7 x C55 cm.'
            ],
            [
                'product_id' => 44,
                'size' => 'Giường 1m2: D125 x R6 x C45 cm. Giường 1m4: D145 x R6 x C45 cm. Giường 1m6: D165 x R6 x C45 cm. Giường 1m8: D185 x R6 x C45 cm.'
            ],
            [
                'product_id' => 45,
                'size' => 'Giường 1m6*2m: D214 x R172 x C115 cm. Giường 1m8*2m: D214 x R212 x C115 cm.'
            ],
            [
                'product_id' => 46,
                'size' => 'D98 x R45 x C153 cm'
            ],
            [
                'product_id' => 47,
                'size' => 'Tủ quần áo 1: D120 x R60 x C220 cm. Tủ quần áo 2: D60 x R60 x C220 cm. Hệ tủ quần áo 1: D180 x R60 x C220 cm. Hệ tủ quần áo 2: D240 x R60 x C220 cm'
            ],
            [
                'product_id' => 48,
                'size' => 'D180 x R60 x C235 cm'
            ],
            [
                'product_id' => 49,
                'size' => 'Tủ quần áo 1: D120 x R60 x C235 cm. Tủ quần áo 2: D60 x R60 x C235 cm. Hệ tủ quần áo 3: D120 x R60 x C235 cm. Hệ tủ quần áo 4: D180 x R 60 x C235 cm. Hệ tủ quần áo 5: D240 x R60 x C235 cm'
            ],
            [
                'product_id' => 50,
                'size' => 'D100 x R55 x C220 cm'
            ],
            [
                'product_id' => 51,
                'size' => 'D35 x R25 x C163 cm'
            ],
            [
                'product_id' => 52,
                'size' => 'D28 x R28 x C54 cm'
            ],
            [
                'product_id' => 53,
                'size' => 'D34*R34*C154 cm'
            ],
            [
                'product_id' => 54,
                'size' => 'D38*R120*180 cm'
            ],
            [
                'product_id' => 55,
                'size' => 'D93*R33*C172 cm'
            ],
            [
                'product_id' => 56,
                'size' => 'D80 x R40 x C75 cm'
            ],
            [
                'product_id' => 57,
                'size' => 'D88 x R50 x H88/75 cm'
            ],
            [
                'product_id' => 58,
                'size' => 'D100 x R50 x C75 cm'
            ],
            [
                'product_id' => 59,
                'size' => 'D80 x R40 x C77 cm'
            ],
            [
                'product_id' => 60,
                'size' => 'D90 x R45 x C74 cm'
            ],
            [
                'product_id' => 61,
                'size' => 'D31 x R11 x C38 cm'
            ],
            [
                'product_id' => 62,
                'size' => 'D14,5 x R5,5 x C19.5 cm'
            ],
            [
                'product_id' => 63,
                'size' => 'D15 x R15 x C18 cm'
            ],
            [
                'product_id' => 64,
                'size' => 'D11 x R9 x C21 cm'
            ],
            [
                'product_id' => 65,
                'size' => 'D13 x R11,5 x C23 cm'
            ],
            [
                'product_id' => 66,
                'size' => '3m - 100 led, 6m - 200 led'
            ],
            [
                'product_id' => 67,
                'size' => 'D=15cm hoặc D=20cm.'
            ],
            [
                'product_id' => 68,
                'size' => '1.5m, gồm 10 led '
            ],
            [
                'product_id' => 69,
                'size' => '7.65m, gồm 25 đèn dây tóc, tặng kèm 2 bóng đèn dự phòng'
            ],
            [
                'product_id' => 70,
                'size' => '3m, gồm 10 led'
            ],
            [
                'product_id' => 71,
                'size' => 'D50 x R25 x C50 cm'
            ],
            [
                'product_id' => 72,
                'size' => 'D48 x R27 x C78 cm'
            ],
            [
                'product_id' => 73,
                'size' => 'Kích thước tổng quát: D41 x R29 x C96 cm. Kích thước rổ lớn: D38 x R30 x C36 cm. Kích thước rổ nhỏ: D38 x R29 x C25 cm. Chiều cao kệ (không có rổ) so với mặt đất: 72cm.'
            ],
            [
                'product_id' => 74,
                'size' => 'Kích thước tổng quát: D57 x R43 x C166 cm'
            ],
            [
                'product_id' => 75,
                'size' => 'D52 x R39 x C55 cm'
            ],
            [
                'product_id' => 76,
                'size' => 'D120 x R35 x C95 cm'
            ],
            [
                'product_id' => 77,
                'size' => 'D120 x R35 x C100 cm'
            ],
            [
                'product_id' => 78,
                'size' => 'D90 x R35 x C105 cm'
            ],
            [
                'product_id' => 79,
                'size' => 'D80 x R35 x C102 cm'
            ],
            [
                'product_id' => 80,
                'size' => 'D90 x R35 x C107 cm'
            ],
            [
                'product_id' => 81,
                'size' => 'D60 x R20,7 x C18 cm. Độ dày mặt kệ: 1,8 cm'
            ],
            [
                'product_id' => 82,
                'size' => 'D60 x R21,7 x C19 cm. Độ dày mặt kệ: 1,8 cm'
            ],
            [
                'product_id' => 83,
                'size' => 'D60 x R20 x C18,8 cm. Độ dày mặt kệ: 1,8 cm'
            ],
            [
                'product_id' => 84,
                'size' => 'D61 x R20 x C20 cm. Độ dày mặt kệ: 1,8 cm'
            ],
            [
                'product_id' => 85,
                'size' => 'D60 x R20 x C12 cm. Độ dày mặt kệ: 1,8 cm'
            ],
            [
                'product_id' => 86,
                'size' => 'L70 x W50 X D3'
            ],
            [
                'product_id' => 87,
                'size' => '50 x 50 cm'
            ],
            [
                'product_id' => 88,
                'size' => 'D120 x R52 x C0.5 cm'
            ],
            [
                'product_id' => 89,
                'size' => 'D110 x R50 x C0.5 cm'
            ],
            [
                'product_id' => 90,
                'size' => 'C35 x D18 x R16 cm. Đường kính gương 17cm'
            ],
            [
                'product_id' => 91,
                'size' => 'Kích thước bàn: D120 x R75 x C75 cm. Kích thước ghế: D47 x R53,5 x C77 cm.'
            ],
            [
                'product_id' => 92,
                'size' => 'Kích thước bàn SAGO: D160 x R80 x C75 cm. Kích thước ghế băng SAGO: D140 x R35 x C50 cm. Kích thước LATU: D51 x R59.5 x C76 cm.'
            ],
            [
                'product_id' => 93,
                'size' => 'Kích thước bàn SAGO: D160 x R80 x C75 cm. Kích thước ghế băng SAGO: D140 x R35 x C50 cm. Kích thước MEI: D51 x R59.5 x C76 cm.'
            ],
            [
                'product_id' => 94,
                'size' => 'Kích thước bàn MUSHROOM: Đường kính 60cm, cao 75cm. Kích thước ghế TONY: D52xR45xC86/45 cm.'
            ],
            [
                'product_id' => 95,
                'size' => 'Kích thước bàn LUKI: Đường kính 60cm, cao 72cm. Kích thước ghế DAISY: H80 x D40 x R40 cm.'
            ],
            [
                'product_id' => 96,
                'size' => 'D120 x R75 x C75 cm'
            ],
            [
                'product_id' => 97,
                'size' => 'D105 x R105 x C72 cm'
            ],
            [
                'product_id' => 98,
                'size' => 'H75 x D140 x R80 cm.'
            ],
            [
                'product_id' => 99,
                'size' => 'H73 x D160 x R80 cm'
            ],
            [
                'product_id' => 100,
                'size' => 'D140 x R75 x C75 cm'
            ],
            [
                'product_id' => 101,
                'size' => 'D51 x R59.5 x C76 cm'
            ],
            [
                'product_id' => 102,
                'size' => 'D47 x R53,5 x C77 cm'
            ],
            [
                'product_id' => 103,
                'size' => 'D47.5 x R54 x C79 cm'
            ],
            [
                'product_id' => 104,
                'size' => 'D47.5 x R54 x C79 cm'
            ],
            [
                'product_id' => 105,
                'size' => 'D52 x R55 x C83 cm'
            ],
            [
                'product_id' => 106,
                'size' => '120*70 cm'
            ],
            [
                'product_id' => 107,
                'size' => '140*70 cm'
            ],
            [
                'product_id' => 108,
                'size' => '130*60 cm'
            ],
            [
                'product_id' => 109,
                'size' => '130*60 cm'
            ],
            [
                'product_id' => 110,
                'size' => '70*120 cm'
            ],
            [
                'product_id' => 111,
                'size' => 'D42*R30*C30 cm'
            ],
            [
                'product_id' => 112,
                'size' => 'D42*R30*C30 cm'
            ],
            [
                'product_id' => 113,
                'size' => '30 x 45 cm'
            ],
            [
                'product_id' => 114,
                'size' => '33 x 70 cm'
            ],
            [
                'product_id' => 115,
                'size' => '40 x 60 cm'
            ],
            [
                'product_id' => 116,
                'size' => '40 x 60 cm'
            ],
            [
                'product_id' => 117,
                'size' => '33 x 70 cm'
            ],
            [
                'product_id' => 118,
                'size' => 'D120 x R50 x C75 cm'
            ],
            [
                'product_id' => 119,
                'size' => 'Đường kính 45cm, cao 50cm.'
            ],
            [
                'product_id' => 120,
                'size' => 'D70 x R70 x C75 cm.'
            ],
            [
                'product_id' => 121,
                'size' => 'D80 x R40 x C75 cm.'
            ],
            [
                'product_id' => 122,
                'size' => 'D72 x R72 x C28 cm.'
            ],
            [
                'product_id' => 123,
                'size' => 'D51 x R59.5 x C76 cm.'
            ],
            [
                'product_id' => 124,
                'size' => 'D55,5 x R60 x C79 cm.'
            ],
            [
                'product_id' => 125,
                'size' => 'D59,5 x R47,5 x C78,5 cm.'
            ],
            [
                'product_id' => 126,
                'size' => 'D47 x R53,5 x C77 cm.'
            ],
            [
                'product_id' => 127,
                'size' => 'D47.5 x R54 x C79 cm.'
            ],
            [
                'product_id' => 128,
                'size' => 'D31 x R11 x C38 cm.'
            ],
            [
                'product_id' => 129,
                'size' => 'D13 x R11,5 x C23 cm.'
            ],
            [
                'product_id' => 130,
                'size' => 'D24 x R24 x C29 cm.'
            ],
            [
                'product_id' => 131,
                'size' => 'D25*R25*C50 cm.'
            ],
            [
                'product_id' => 132,
                'size' => 'D16*R50*C57 cm.'
            ],
            [
                'product_id' => 133,
                'size' => '17x 20'
            ],
            [
                'product_id' => 134,
                'size' => 'H4 x D12 x W6'
            ],
            [
                'product_id' => 135,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
            [
                'product_id' => 136,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
            [
                'product_id' => 137,
                'size' => 'Đường kính 30cm, dày 4cm'
            ],
            [
                'product_id' => 138,
                'size' => 'H9,5 x D3,5 x W3,5'
            ],
            [
                'product_id' => 139,
                'size' => 'H3 x D4,5 x W4,5'
            ],
            [
                'product_id' => 140,
                'size' => 'H8 x D9 x W9'
            ],
            [
                'product_id' => 141,
                'size' => '13 x 20 cm'
            ],
            [
                'product_id' => 142,
                'size' => '60 x 42 cm treo ốp tường.'
            ],
            [
                'product_id' => 143,
                'size' => 'D60 x R30 x H140'
            ],
            [
                'product_id' => 144,
                'size' => 'D50 x R20 x C80 cm'
            ],
            [
                'product_id' => 145,
                'size' => 'D52 x R39 x C55 cm'
            ],
            [
                'product_id' => 146,
                'size' => 'D50 x R40 x C65 cm'
            ],
            [
                'product_id' => 147,
                'size' => 'Kích thước tổng quát: D41 x R29 x C96 cm. Kích thước rổ lớn: D38 x R30 x C36 cm. Kích thước rổ nhỏ: D38 x R29 x C25 cm. Chiều cao kệ (không có rổ) so với mặt đất: 72cm.'
            ],
            [
                'product_id' => 148,
                'size' => '80 x 180 cm'
            ],
            [
                'product_id' => 149,
                'size' => '180 x 180 cm'
            ],
            [
                'product_id' => 150,
                'size' => '180 x 180 cm'
            ],
            [
                'product_id' => 151,
                'size' => '180 x 180 cm'
            ],
            [
                'product_id' => 152,
                'size' => '180 x 180 cm'
            ],
            [
                'product_id' => 153,
                'size' => '33 x 70 cm'
            ],
            [
                'product_id' => 154,
                'size' => '70 x 140 cm'
            ],
            [
                'product_id' => 155,
                'size' => '33 x 70 cm'
            ],
            [
                'product_id' => 156,
                'size' => '33 x 70 cm'
            ],
            [
                'product_id' => 157,
                'size' => '70 x 140 cm'
            ],
            [
                'product_id' => 158,
                'size' => null
            ],
            [
                'product_id' => 159,
                'size' => 'D45 x R10 x C80 cm'
            ],
            [
                'product_id' => 160,
                'size' => 'D60 x R10 x C45 cm'
            ],
            [
                'product_id' => 161,
                'size' => 'D67 x R60 x C0.5 cm'
            ],
            [
                'product_id' => 162,
                'size' => 'C32 x D24 x R16 cm. Đường kính gương 15cm'
            ],
            [
                'product_id' => 163,
                'size' => '60 x 90 cm'
            ],
            [
                'product_id' => 164,
                'size' => '50 x 80 cm'
            ],
            [
                'product_id' => 165,
                'size' => '60 x 90 cm'
            ],
            [
                'product_id' => 166,
                'size' => '60 x 90 cm'
            ],
            [
                'product_id' => 167,
                'size' => '50 x 80 cm'
            ],
            [
                'product_id' => 168,
                'size' => 'H70 x D50 x W2'
            ],
            [
                'product_id' => 169,
                'size' => 'H50 x D70 x W4'
            ],
            [
                'product_id' => 170,
                'size' => 'D60 x R20 x C11 cm. Độ dày mặt kệ: 2.5 cm'
            ],
            [
                'product_id' => 171,
                'size' => 'D60 x R20 x C12 cm. Độ dày mặt kệ: 2.5 cm'
            ],
            [
                'product_id' => 172,
                'size' => 'D60 x R20 x C19,5 cm. Độ dày mặt kệ: 2.5 cm'
            ]
        ]);

        DB::table('products_images')->insert([
            [
                'product_id' => 1,
                'path' => 'product-1.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-1.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-2.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-3.webp',
            ],
            [
                'product_id' => 1,
                'path' => 'product-1-4.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-1.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-2.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-3.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-4.webp',
            ],
            [
                'product_id' => 2,
                'path' => 'product-2-5.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-1.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-2.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-3.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-4.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-5.webp',
            ],
            [
                'product_id' => 3,
                'path' => 'product-3-6.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-1.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-2.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-3.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-4.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-5.jpg',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-6.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-7.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-8.webp',
            ],
            [
                'product_id' => 4,
                'path' => 'product-4-9.jpg',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-1.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-2.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-3.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-4.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-5.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-6.webp',
            ],
            [
                'product_id' => 5,
                'path' => 'product-5-7.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-1.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-2.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-3.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-4.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-5.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-6.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-7.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-8.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-9.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-10.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-6-11.webp',
            ],
            [
                'product_id' => 6,
                'path' => 'product-12.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-1.webp',
            ],
            [
                'product_id' => 7,
                'path' => 'product-7-2.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-1.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-2.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-3.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-4.jpg',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-5.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-6.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-7.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-8.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-9.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-10.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-11.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-12.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-13.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-14.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-15.webp',
            ],
            [
                'product_id' => 8,
                'path' => 'product-8-16.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-1.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-2.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-3.webp',
            ],
            [
                'product_id' => 9,
                'path' => 'product-9-4.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-1.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-2.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-3.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-4.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-5.webp',
            ],
            [
                'product_id' => 10,
                'path' => 'product-10-6.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-1.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-2.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-3.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-4.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-5.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-6.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-7.webp',
            ],
            [
                'product_id' => 11,
                'path' => 'product-11-8.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-1.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-2.jpg',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-3.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-4.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-5.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-6.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-7.webp',
            ],
            [
                'product_id' => 12,
                'path' => 'product-12-8.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-1.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-2.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-3.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-4.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-5.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-6.webp',
            ],
            [
                'product_id' => 13,
                'path' => 'product-13-7.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-1.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-2.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-3.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-4.webp',
            ],
            [
                'product_id' => 14,
                'path' => 'product-14-5.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-1.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-2.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-3.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-4.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-5.webp',
            ],
            [
                'product_id' => 15,
                'path' => 'product-15-6.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-1.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-2.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-3.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-4.webp',
            ],
            [
                'product_id' => 16,
                'path' => 'product-16-5.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-1.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-2.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-3.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-4.webp',
            ],
            [
                'product_id' => 17,
                'path' => 'product-17-5.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-1.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-2.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-3.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-4.webp',
            ],
            [
                'product_id' => 18,
                'path' => 'product-18-5.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-1.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-2.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-3.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-4.webp',
            ],
            [
                'product_id' => 19,
                'path' => 'product-19-5.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-1.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-2.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-3.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-4.webp',
            ],
            [
                'product_id' => 20,
                'path' => 'product-20-5.webp',
            ],
            [
                'product_id' => 21,
                'path' => 'product-21.webp',
            ],
            [
                'product_id' => 21,
                'path' => 'product-21-1.webp',
            ],
            [
                'product_id' => 21,
                'path' => 'product-21-2.webp',
            ],
            [
                'product_id' => 22,
                'path' => 'product-22.webp',
            ],
            [
                'product_id' => 22,
                'path' => 'product-22-1.webp',
            ],
            [
                'product_id' => 22,
                'path' => 'product-22-2.webp',
            ],
            [
                'product_id' => 23,
                'path' => 'product-23.webp',
            ],
            [
                'product_id' => 23,
                'path' => 'product-23-1.webp',
            ],
            [
                'product_id' => 23,
                'path' => 'product-23-2.webp',
            ],
            [
                'product_id' => 24,
                'path' => 'product-24.webp',
            ],
            [
                'product_id' => 24,
                'path' => 'product-24-1.webp',
            ],
            [
                'product_id' => 24,
                'path' => 'product-24-2.webp',
            ],
            [
                'product_id' => 25,
                'path' => 'product-25.webp',
            ],
            [
                'product_id' => 25,
                'path' => 'product-25-1.webp',
            ],
            [
                'product_id' => 25,
                'path' => 'product-25-2.webp',
            ],
            [
                'product_id' => 25,
                'path' => 'product-25-3.webp',
            ],
            [
                'product_id' => 26,
                'path' => 'product-26.webp',
            ],
            [
                'product_id' => 26,
                'path' => 'product-26-1.webp',
            ],
            [
                'product_id' => 26,
                'path' => 'product-26-2.webp',
            ],
            [
                'product_id' => 26,
                'path' => 'product-26-3.webp',
            ],
            [
                'product_id' => 26,
                'path' => 'product-26-4.webp',
            ],
            [
                'product_id' => 27,
                'path' => 'product-27.webp',
            ],
            [
                'product_id' => 27,
                'path' => 'product-27-1.jpg',
            ],
            [
                'product_id' => 27,
                'path' => 'product-27-2.webp',
            ],
            [
                'product_id' => 27,
                'path' => 'product-27-3.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28-1.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28-2.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28-3.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28-4.webp',
            ],
            [
                'product_id' => 28,
                'path' => 'product-28-5.webp',
            ],
            [
                'product_id' => 29,
                'path' => 'product-29.webp',
            ],
            [
                'product_id' => 29,
                'path' => 'product-29-1.webp',
            ],
            [
                'product_id' => 29,
                'path' => 'product-29-2.webp',
            ],
            [
                'product_id' => 29,
                'path' => 'product-29-3.webp',
            ],
            [
                'product_id' => 29,
                'path' => 'product-29-4.webp',
            ],
            [
                'product_id' => 30,
                'path' => 'product-30.webp',
            ],
            [
                'product_id' => 30,
                'path' => 'product-30-1.webp',
            ],
            [
                'product_id' => 30,
                'path' => 'product-30-2.webp',
            ],
            [
                'product_id' => 30,
                'path' => 'product-30-3.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-1.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-2.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-3.jpg',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-4.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-5.webp',
            ],
            [
                'product_id' => 31,
                'path' => 'product-31-6.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-1.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-2.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-3.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-4.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-5.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-6.webp',
            ],
            [
                'product_id' => 32,
                'path' => 'product-32-7.webp',
            ],
            [
                'product_id' => 33,
                'path' => 'product-33.webp',
            ],
            [
                'product_id' => 33,
                'path' => 'product-33-1.webp',
            ],
            [
                'product_id' => 33,
                'path' => 'product-33-2.webp',
            ],
            [
                'product_id' => 33,
                'path' => 'product-33-3.webp',
            ],
            [
                'product_id' => 34,
                'path' => 'product-34.webp',
            ],
            [
                'product_id' => 34,
                'path' => 'product-34-1.webp',
            ],
            [
                'product_id' => 34,
                'path' => 'product-34-2.webp',
            ],
            [
                'product_id' => 34,
                'path' => 'product-34-3.webp',
            ],
            [
                'product_id' => 34,
                'path' => 'product-34-4.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-1.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-2.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-3.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-4.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-5.webp',
            ],
            [
                'product_id' => 35,
                'path' => 'product-35-6.webp',
            ],
            [
                'product_id' => 36,
                'path' => 'product-36.webp',
            ],
            [
                'product_id' => 36,
                'path' => 'product-36-1.webp',
            ],
            [
                'product_id' => 36,
                'path' => 'product-36-2.webp',
            ],
            [
                'product_id' => 36,
                'path' => 'product-36-3.webp',
            ],
            [
                'product_id' => 36,
                'path' => 'product-36-4.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-1.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-2.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-3.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-4.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-5.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-6.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-7.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-8.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-9.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-10.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-11.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-12.webp',
            ],
            [
                'product_id' => 37,
                'path' => 'product-37-13.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38-1.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38-2.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38-3.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38-4.webp',
            ],
            [
                'product_id' => 38,
                'path' => 'product-38-5.webp',
            ],
            [
                'product_id' => 39,
                'path' => 'product-39.webp',
            ],
            [
                'product_id' => 39,
                'path' => 'product-39-1.webp',
            ],
            [
                'product_id' => 39,
                'path' => 'product-39-2.png',
            ],
            [
                'product_id' => 39,
                'path' => 'product-39-3.png',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-1.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-2.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-3.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-4.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-5.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-6.webp',
            ],
            [
                'product_id' => 40,
                'path' => 'product-40-7.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-1.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-2.jpg',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-3.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-4.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-5.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-6.webp',
            ],
            [
                'product_id' => 41,
                'path' => 'product-41-7.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-1.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-2.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-3.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-4.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-5.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-6.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-7.webp',
            ],
            [
                'product_id' => 42,
                'path' => 'product-42-8.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-1.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-2.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-3.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-4.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-5.webp',
            ],
            [
                'product_id' => 43,
                'path' => 'product-43-6.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-1.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-2.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-3.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-4.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-5.webp',
            ],
            [
                'product_id' => 44,
                'path' => 'product-44-6.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-1.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-2.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-3.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-4.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-5.webp',
            ],
            [
                'product_id' => 45,
                'path' => 'product-45-6.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46-1.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46-2.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46-3.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46-4.webp',
            ],
            [
                'product_id' => 46,
                'path' => 'product-46-5.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-1.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-2.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-3.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-4.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-5.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-6.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-7.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-8.webp',
            ],
            [
                'product_id' => 47,
                'path' => 'product-47-9.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-1.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-2.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-3.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-4.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-5.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-6.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-7.webp',
            ],
            [
                'product_id' => 48,
                'path' => 'product-48-8.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-1.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-2.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-3.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-4.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-5.webp',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-6.png',
            ],
            [
                'product_id' => 49,
                'path' => 'product-49-7.webp',
            ],
            [
                'product_id' => 50,
                'path' => 'product-50.webp',
            ],
            [
                'product_id' => 50,
                'path' => 'product-50-1.png',
            ],
            [
                'product_id' => 50,
                'path' => 'product-50-2.png',
            ],
            [
                'product_id' => 50,
                'path' => 'product-50-3.webp',
            ],
            [
                'product_id' => 51,
                'path' => 'product-51.webp',
            ],
            [
                'product_id' => 51,
                'path' => 'product-51-1.webp',
            ],
            [
                'product_id' => 51,
                'path' => 'product-51-2.webp',
            ],
            [
                'product_id' => 51,
                'path' => 'product-51-3.webp',
            ],
            [
                'product_id' => 52,
                'path' => 'product-52.webp',
            ],
            [
                'product_id' => 52,
                'path' => 'product-52-1.webp',
            ],
            [
                'product_id' => 52,
                'path' => 'product-52-2.webp',
            ],
            [
                'product_id' => 52,
                'path' => 'product-52-3.webp',
            ],
            [
                'product_id' => 52,
                'path' => 'product-52-4.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-1.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-2.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-3.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-4.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-5.webp',
            ],
            [
                'product_id' => 53,
                'path' => 'product-53-6.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-1.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-2.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-3.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-4.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-5.webp',
            ],
            [
                'product_id' => 54,
                'path' => 'product-54-6.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-1.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-2.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-3.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-4.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-5.webp',
            ],
            [
                'product_id' => 55,
                'path' => 'product-55-6.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56-1.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56-2.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56-3.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56-4.webp',
            ],
            [
                'product_id' => 56,
                'path' => 'product-56-5.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-1.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-2.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-3.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-4.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-5.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-6.jpg',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-7.webp',
            ],
            [
                'product_id' => 57,
                'path' => 'product-57-8.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58-1.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58-2.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58-3.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58-4.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-58-5.webp',
            ],
            [
                'product_id' => 58,
                'path' => 'product-5-6.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-1.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-2.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-3.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-4.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-5.webp',
            ],
            [
                'product_id' => 59,
                'path' => 'product-59-6.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-1.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-2.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-3.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-4.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-5.webp',
            ],
            [
                'product_id' => 60,
                'path' => 'product-60-6.webp',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61.webp',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61-1.webp',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61-2.webp',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61-3.webp',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61-4.jpg',
            ],
            [
                'product_id' => 61,
                'path' => 'product-61-5.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62-1.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62-2.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62-3.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62-4.webp',
            ],
            [
                'product_id' => 62,
                'path' => 'product-62-5.webp',
            ],
            [
                'product_id' => 63,
                'path' => 'product-63.webp',
            ],
            [
                'product_id' => 63,
                'path' => 'product-63-1.webp',
            ],
            [
                'product_id' => 63,
                'path' => 'product-63-2.webp',
            ],
            [
                'product_id' => 63,
                'path' => 'product-63-3.webp',
            ],
            [
                'product_id' => 63,
                'path' => 'product-63-4.webp',
            ],
            [
                'product_id' => 64,
                'path' => 'product-64.webp',
            ],
            [
                'product_id' => 64,
                'path' => 'product-64-1.webp',
            ],
            [
                'product_id' => 64,
                'path' => 'product-64-2.webp',
            ],
            [
                'product_id' => 64,
                'path' => 'product-64-3.webp',
            ],
            [
                'product_id' => 64,
                'path' => 'product-64-4.webp',
            ],
            [
                'product_id' => 65,
                'path' => 'product-65.webp',
            ],
            [
                'product_id' => 65,
                'path' => 'product-65-1.webp',
            ],
            [
                'product_id' => 65,
                'path' => 'product-65-2.webp',
            ],
            [
                'product_id' => 65,
                'path' => 'product-65-3.webp',
            ],
            [
                'product_id' => 65,
                'path' => 'product-65-4.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-1.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-2.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-3.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-4.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-5.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-6.webp',
            ],
            [
                'product_id' => 66,
                'path' => 'product-66-7.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-1.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-2.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-3.jpg',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-4.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-5.webp',
            ],
            [
                'product_id' => 67,
                'path' => 'product-67-6.webp',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68.png',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68-1.png',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68-2.webp',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68-3.webp',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68-4.webp',
            ],
            [
                'product_id' => 68,
                'path' => 'product-68-5.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-1.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-2.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-3.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-4.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-5.webp',
            ],
            [
                'product_id' => 69,
                'path' => 'product-69-6.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-1.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-2.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-3.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-4.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-5.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-6.webp',
            ],
            [
                'product_id' => 70,
                'path' => 'product-70-7.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-1.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-2.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-3.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-4.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-5.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-6.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-7.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-8.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-9.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-10.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-11.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-12.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-13.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-14.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-15.webp',
            ],
            [
                'product_id' => 71,
                'path' => 'product-71-16.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-1.png',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-2.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-3.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-4.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-5.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-6.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-7.webp',
            ],
            [
                'product_id' => 72,
                'path' => 'product-72-8.webp',
            ],
            [
                'product_id' => 73,
                'path' => 'product-73.webp',
            ],
            [
                'product_id' => 73,
                'path' => 'product-73-1.webp',
            ],
            [
                'product_id' => 73,
                'path' => 'product-73-2.webp',
            ],
            [
                'product_id' => 74,
                'path' => 'product-74.webp',
            ],
            [
                'product_id' => 74,
                'path' => 'product-74-1.webp',
            ],
            [
                'product_id' => 74,
                'path' => 'product-74-2.webp',
            ],
            [
                'product_id' => 74,
                'path' => 'product-74-3.webp',
            ],
            [
                'product_id' => 74,
                'path' => 'product-74-4.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-1.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-2.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-3.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-4.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-5.webp',
            ],
            [
                'product_id' => 75,
                'path' => 'product-75-6.webp',
            ],
            [
                'product_id' => 76,
                'path' => 'product-76.webp',
            ],
            [
                'product_id' => 76,
                'path' => 'product-76-1.webp',
            ],
            [
                'product_id' => 76,
                'path' => 'product-76-2.png',
            ],
            [
                'product_id' => 76,
                'path' => 'product-76-3.webp',
            ],
            [
                'product_id' => 77,
                'path' => 'product-77.webp',
            ],
            [
                'product_id' => 77,
                'path' => 'product-77-1.webp',
            ],
            [
                'product_id' => 77,
                'path' => 'product-77-2.webp',
            ],
            [
                'product_id' => 77,
                'path' => 'product-77-3.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78.jpg',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-1.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-2.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-3.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-4.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-5.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-6.webp',
            ],
            [
                'product_id' => 78,
                'path' => 'product-78-7.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-1.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-2.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-3.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-4.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-5.webp',
            ],
            [
                'product_id' => 79,
                'path' => 'product-79-6.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80-1.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80-2.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80-3.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80-4.webp',
            ],
            [
                'product_id' => 80,
                'path' => 'product-80-5.webp',
            ],
            [
                'product_id' => 81,
                'path' => 'product-81.webp',
            ],
            [
                'product_id' => 81,
                'path' => 'product-81-1.webp',
            ],
            [
                'product_id' => 81,
                'path' => 'product-81-2.webp',
            ],
            [
                'product_id' => 81,
                'path' => 'product-81-3.webp',
            ],
            [
                'product_id' => 81,
                'path' => 'product-81-4.webp',
            ],
            [
                'product_id' => 82,
                'path' => 'product-82.webp',
            ],
            [
                'product_id' => 82,
                'path' => 'product-82-1.webp',
            ],
            [
                'product_id' => 82,
                'path' => 'product-82-2.webp',
            ],
            [
                'product_id' => 82,
                'path' => 'product-82-3.webp',
            ],
            [
                'product_id' => 82,
                'path' => 'product-82-4.webp',
            ],
            [
                'product_id' => 83,
                'path' => 'product-83.webp',
            ],
            [
                'product_id' => 83,
                'path' => 'product-83-1.webp',
            ],
            [
                'product_id' => 83,
                'path' => 'product-83-2.webp',
            ],
            [
                'product_id' => 83,
                'path' => 'product-83-3.webp',
            ],
            [
                'product_id' => 83,
                'path' => 'product-83-4.webp',
            ],
            [
                'product_id' => 84,
                'path' => 'product-84.webp',
            ],
            [
                'product_id' => 84,
                'path' => 'product-84-1.webp',
            ],
            [
                'product_id' => 84,
                'path' => 'product-84-2.webp',
            ],
            [
                'product_id' => 84,
                'path' => 'product-84-3.webp',
            ],
            [
                'product_id' => 84,
                'path' => 'product-84-4.webp',
            ],
            [
                'product_id' => 85,
                'path' => 'product-85.webp',
            ],
            [
                'product_id' => 85,
                'path' => 'product-85-1.webp',
            ],
            [
                'product_id' => 85,
                'path' => 'product-85-2.webp',
            ],
            [
                'product_id' => 85,
                'path' => 'product-85-3.webp',
            ],
            [
                'product_id' => 85,
                'path' => 'product-85-4.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-1.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-2.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-3.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-4.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-5.webp',
            ],
            [
                'product_id' => 86,
                'path' => 'product-86-6.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87-1.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87-2.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87-3.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87-4.webp',
            ],
            [
                'product_id' => 87,
                'path' => 'product-87-5.webp',
            ],
            [
                'product_id' => 88,
                'path' => 'product-88.webp',
            ],
            [
                'product_id' => 88,
                'path' => 'product-88-1.webp',
            ],
            [
                'product_id' => 88,
                'path' => 'product-88-2.webp',
            ],
            [
                'product_id' => 88,
                'path' => 'product-88-3.webp',
            ],
            [
                'product_id' => 88,
                'path' => 'product-88-4.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89-1.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89-2.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89-3.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89-4.webp',
            ],
            [
                'product_id' => 89,
                'path' => 'product-89-5.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90-1.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90-2.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90-3.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90-4.webp',
            ],
            [
                'product_id' => 90,
                'path' => 'product-90-5.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91-1.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91-2.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91-3.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91-4.webp',
            ],
            [
                'product_id' => 91,
                'path' => 'product-91-5.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92-1.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92-2.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92-3.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92-4.webp',
            ],
            [
                'product_id' => 92,
                'path' => 'product-92-5.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93-1.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93-2.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93-3.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93-4.webp',
            ],
            [
                'product_id' => 93,
                'path' => 'product-93-5.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94-1.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94-2.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94-3.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94-4.webp',
            ],
            [
                'product_id' => 94,
                'path' => 'product-94-5.webp',
            ],
            [
                'product_id' => 95,
                'path' => 'product-95.webp',
            ],
            [
                'product_id' => 95,
                'path' => 'product-95-1.webp',
            ],
            [
                'product_id' => 95,
                'path' => 'product-95-2.webp',
            ],
            [
                'product_id' => 95,
                'path' => 'product-95-3.webp',
            ],
            [
                'product_id' => 95,
                'path' => 'product-95-4.webp',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96.webp',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96-1.webp',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96-2.webp',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96-3.webp',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96-4.jpg',
            ],
            [
                'product_id' => 96,
                'path' => 'product-96-5.webp',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97.webp',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97-1.png',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97-2.webp',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97-3.webp',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97-4.webp',
            ],
            [
                'product_id' => 97,
                'path' => 'product-97-5.webp',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98.webp',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98-1.webp',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98-2.webp',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98-3.webp',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98-4.jpg',
            ],
            [
                'product_id' => 98,
                'path' => 'product-98-5.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99-1.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99-2.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99-3.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99-4.webp',
            ],
            [
                'product_id' => 99,
                'path' => 'product-99-5.jpg',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100.webp',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100-1.webp',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100-2.webp',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100-3.webp',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100-4.webp',
            ],
            [
                'product_id' => 100,
                'path' => 'product-100-5.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101-1.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101-2.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101-3.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101-4.webp',
            ],
            [
                'product_id' => 101,
                'path' => 'product-101-5.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102-1.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102-2.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102-3.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102-4.webp',
            ],
            [
                'product_id' => 102,
                'path' => 'product-102-5.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103-1.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103-2.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103-3.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103-4.webp',
            ],
            [
                'product_id' => 103,
                'path' => 'product-103-5.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104-1.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104-2.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104-3.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104-4.webp',
            ],
            [
                'product_id' => 104,
                'path' => 'product-104-5.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105-1.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105-2.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105-3.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105-4.webp',
            ],
            [
                'product_id' => 105,
                'path' => 'product-105-5.webp',
            ],
            [
                'product_id' => 106,
                'path' => 'product-106.webp',
            ],
            [
                'product_id' => 106,
                'path' => 'product-106-1.webp',
            ],
            [
                'product_id' => 106,
                'path' => 'product-106-2.jpg',
            ],
            [
                'product_id' => 106,
                'path' => 'product-106-3.jpg',
            ],
            [
                'product_id' => 106,
                'path' => 'product-106-4.jpg',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107.webp',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107-1.webp',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107-2.webp',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107-3.webp',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107-4.webp',
            ],
            [
                'product_id' => 107,
                'path' => 'product-107-5.webp',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108.webp',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108-1.webp',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108-2.webp',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108-3.jpg',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108-4.jpg',
            ],
            [
                'product_id' => 108,
                'path' => 'product-108-5.jpg',
            ],
            [
                'product_id' => 109,
                'path' => 'product-109.webp',
            ],
            [
                'product_id' => 109,
                'path' => 'product-109-1.webp',
            ],
            [
                'product_id' => 109,
                'path' => 'product-109-2.webp',
            ],
            [
                'product_id' => 109,
                'path' => 'product-109-3.webp',
            ],
            [
                'product_id' => 109,
                'path' => 'product-109-4.webp',
            ],
            [
                'product_id' => 110,
                'path' => 'product-110.webp',
            ],
            [
                'product_id' => 110,
                'path' => 'product-110-1.webp',
            ],
            [
                'product_id' => 110,
                'path' => 'product-110-2.webp',
            ],
            [
                'product_id' => 111,
                'path' => 'product-111.webp',
            ],
            [
                'product_id' => 111,
                'path' => 'product-111-1.webp',
            ],
            [
                'product_id' => 111,
                'path' => 'product-111-2.webp',
            ],
            [
                'product_id' => 111,
                'path' => 'product-111-3.webp',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112.webp',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112-1.webp',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112-2.webp',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112-3.webp',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112-4.jpg',
            ],
            [
                'product_id' => 112,
                'path' => 'product-112-5.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113-1.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113-2.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113-3.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113-4.webp',
            ],
            [
                'product_id' => 113,
                'path' => 'product-113-5.webp',
            ],
            [
                'product_id' => 114,
                'path' => 'product-114.webp',
            ],
            [
                'product_id' => 114,
                'path' => 'product-114-1.webp',
            ],
            [
                'product_id' => 114,
                'path' => 'product-114-2.webp',
            ],
            [
                'product_id' => 114,
                'path' => 'product-114-3.webp',
            ],
            [
                'product_id' => 114,
                'path' => 'product-114-4.webp',
            ],
            [
                'product_id' => 115,
                'path' => 'product-115.webp',
            ],
            [
                'product_id' => 115,
                'path' => 'product-115-1.webp',
            ],
            [
                'product_id' => 115,
                'path' => 'product-115-2.webp',
            ],
            [
                'product_id' => 116,
                'path' => 'product-116.webp',
            ],
            [
                'product_id' => 116,
                'path' => 'product-116-1.webp',
            ],
            [
                'product_id' => 116,
                'path' => 'product-116-2.webp',
            ],
            [
                'product_id' => 116,
                'path' => 'product-116-3.webp',
            ],
            [
                'product_id' => 116,
                'path' => 'product-116-4.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117-1.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117-2.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117-3.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117-4.webp',
            ],
            [
                'product_id' => 117,
                'path' => 'product-117-5.webp',
            ],
            [
                'product_id' => 118,
                'path' => 'product-118.webp',
            ],
            [
                'product_id' => 118,
                'path' => 'product-118-1.webp',
            ],
            [
                'product_id' => 118,
                'path' => 'product-118-2.webp',
            ],
            [
                'product_id' => 119,
                'path' => 'product-119.webp',
            ],
            [
                'product_id' => 119,
                'path' => 'product-119-1.webp',
            ],
            [
                'product_id' => 119,
                'path' => 'product-119-2.webp',
            ],
            [
                'product_id' => 119,
                'path' => 'product-119-3.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120-1.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120-2.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120-3.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120-4.webp',
            ],
            [
                'product_id' => 120,
                'path' => 'product-120-5.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121-1.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121-2.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121-3.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121-4.webp',
            ],
            [
                'product_id' => 121,
                'path' => 'product-121-5.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122-1.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122-2.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122-3.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122-4.webp',
            ],
            [
                'product_id' => 122,
                'path' => 'product-122-5.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123-1.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123-2.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123-3.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123-4.webp',
            ],
            [
                'product_id' => 123,
                'path' => 'product-123-5.webp',
            ],
            [
                'product_id' => 124,
                'path' => 'product-124.webp',
            ],
            [
                'product_id' => 124,
                'path' => 'product-124-1.webp',
            ],
            [
                'product_id' => 124,
                'path' => 'product-124-2.webp',
            ],
            [
                'product_id' => 124,
                'path' => 'product-124-3.webp',
            ],
            [
                'product_id' => 124,
                'path' => 'product-124-4.webp',
            ],
            [
                'product_id' => 125,
                'path' => 'product-125.webp',
            ],
            [
                'product_id' => 125,
                'path' => 'product-125-1.webp',
            ],
            [
                'product_id' => 125,
                'path' => 'product-125-2.webp',
            ],
            [
                'product_id' => 125,
                'path' => 'product-125-3.webp',
            ],
            [
                'product_id' => 125,
                'path' => 'product-125-4.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126-1.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126-2.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126-3.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126-4.webp',
            ],
            [
                'product_id' => 126,
                'path' => 'product-126-5.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127-1.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127-2.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127-3.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127-4.webp',
            ],
            [
                'product_id' => 127,
                'path' => 'product-127-5.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128-1.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128-2.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128-3.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128-4.webp',
            ],
            [
                'product_id' => 128,
                'path' => 'product-128-5.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129-1.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129-2.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129-3.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129-4.webp',
            ],
            [
                'product_id' => 129,
                'path' => 'product-129-5.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130-1.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130-2.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130-3.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130-4.webp',
            ],
            [
                'product_id' => 130,
                'path' => 'product-130-5.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131-1.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131-2.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131-3.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131-4.webp',
            ],
            [
                'product_id' => 131,
                'path' => 'product-131-5.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132-1.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132-2.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132-3.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132-4.webp',
            ],
            [
                'product_id' => 132,
                'path' => 'product-132-5.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133-1.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133-2.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133-3.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133-4.webp',
            ],
            [
                'product_id' => 133,
                'path' => 'product-133-5.webp',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134.webp',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134-1.webp',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134-2.webp',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134-3.jpg',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134-4.webp',
            ],
            [
                'product_id' => 134,
                'path' => 'product-134-5.webp',
            ],
            [
                'product_id' => 135,
                'path' => 'product-135.webp',
            ],
            [
                'product_id' => 135,
                'path' => 'product-135-1.webp',
            ],
            [
                'product_id' => 135,
                'path' => 'product-135-2.webp',
            ],
            [
                'product_id' => 135,
                'path' => 'product-135-3.webp',
            ],
            [
                'product_id' => 136,
                'path' => 'product-136.webp',
            ],
            [
                'product_id' => 136,
                'path' => 'product-136-1.webp',
            ],
            [
                'product_id' => 136,
                'path' => 'product-136-2.webp',
            ],
            [
                'product_id' => 136,
                'path' => 'product-136-3.webp',
            ],
            [
                'product_id' => 137,
                'path' => 'product-137.webp',
            ],
            [
                'product_id' => 137,
                'path' => 'product-137-1.webp',
            ],
            [
                'product_id' => 137,
                'path' => 'product-137-2.webp',
            ],
            [
                'product_id' => 137,
                'path' => 'product-137-3.webp',
            ],
            [
                'product_id' => 137,
                'path' => 'product-137-4.webp',
            ],
            [
                'product_id' => 138,
                'path' => 'product-138.webp',
            ],
            [
                'product_id' => 138,
                'path' => 'product-138-1.webp',
            ],
            [
                'product_id' => 138,
                'path' => 'product-138-2.jpg',
            ],
            [
                'product_id' => 138,
                'path' => 'product-138-3.webp',
            ],
            [
                'product_id' => 138,
                'path' => 'product-138-4.webp',
            ],
            [
                'product_id' => 139,
                'path' => 'product-139.webp',
            ],
            [
                'product_id' => 139,
                'path' => 'product-139-1.webp',
            ],
            [
                'product_id' => 139,
                'path' => 'product-139-2.webp',
            ],
            [
                'product_id' => 139,
                'path' => 'product-139-3.jpg',
            ],
            [
                'product_id' => 140,
                'path' => 'product-140.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141-1.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141-2.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141-3.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141-4.webp',
            ],
            [
                'product_id' => 141,
                'path' => 'product-141-5.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142-1.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142-2.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142-3.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142-4.webp',
            ],
            [
                'product_id' => 142,
                'path' => 'product-142-5.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143-1.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143-2.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143-3.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143-4.webp',
            ],
            [
                'product_id' => 143,
                'path' => 'product-143-5.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144-1.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144-2.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144-3.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144-4.webp',
            ],
            [
                'product_id' => 144,
                'path' => 'product-144-5.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145-1.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145-2.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145-3.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145-4.webp',
            ],
            [
                'product_id' => 145,
                'path' => 'product-145-5.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146-1.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146-2.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146-3.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146-4.webp',
            ],
            [
                'product_id' => 146,
                'path' => 'product-146-5.webp',
            ],
            [
                'product_id' => 147,
                'path' => 'product-147.webp',
            ],
            [
                'product_id' => 147,
                'path' => 'product-147-1.webp',
            ],
            [
                'product_id' => 147,
                'path' => 'product-147-2.webp',
            ],
            [
                'product_id' => 147,
                'path' => 'product-147-3.webp',
            ],
            [
                'product_id' => 148,
                'path' => 'product-148.webp',
            ],
            [
                'product_id' => 148,
                'path' => 'product-148-1.png',
            ],
            [
                'product_id' => 148,
                'path' => 'product-148-2.webp',
            ],
            [
                'product_id' => 148,
                'path' => 'product-148-3.webp',
            ],
            [
                'product_id' => 149,
                'path' => 'product-149.webp',
            ],
            [
                'product_id' => 149,
                'path' => 'product-149-1.webp',
            ],
            [
                'product_id' => 149,
                'path' => 'product-149-2.webp',
            ],
            [
                'product_id' => 150,
                'path' => 'product-150.webp',
            ],
            [
                'product_id' => 150,
                'path' => 'product-150-1.webp',
            ],
            [
                'product_id' => 150,
                'path' => 'product-150-2.webp',
            ],
            [
                'product_id' => 150,
                'path' => 'product-150-3.webp',
            ],
            [
                'product_id' => 151,
                'path' => 'product-151.webp',
            ],
            [
                'product_id' => 151,
                'path' => 'product-151-1.webp',
            ],
            [
                'product_id' => 151,
                'path' => 'product-151-2.webp',
            ],
            [
                'product_id' => 151,
                'path' => 'product-151-3.webp',
            ],
            [
                'product_id' => 152,
                'path' => 'product-152.webp',
            ],
            [
                'product_id' => 152,
                'path' => 'product-152-1.webp',
            ],
            [
                'product_id' => 152,
                'path' => 'product-152-2.webp',
            ],
            [
                'product_id' => 152,
                'path' => 'product-152-3.webp',
            ],
            [
                'product_id' => 153,
                'path' => 'product-153.webp',
            ],
            [
                'product_id' => 153,
                'path' => 'product-153-1.webp',
            ],
            [
                'product_id' => 153,
                'path' => 'product-153-2.webp',
            ],
            [
                'product_id' => 153,
                'path' => 'product-153-3.webp',
            ],
            [
                'product_id' => 153,
                'path' => 'product-153-4.webp',
            ],
            [
                'product_id' => 154,
                'path' => 'product-154.webp',
            ],
            [
                'product_id' => 154,
                'path' => 'product-154-1.webp',
            ],
            [
                'product_id' => 154,
                'path' => 'product-154-2.webp',
            ],
            [
                'product_id' => 154,
                'path' => 'product-154-3.webp',
            ],
            [
                'product_id' => 154,
                'path' => 'product-154-4.webp',
            ],
            [
                'product_id' => 155,
                'path' => 'product-155.webp',
            ],
            [
                'product_id' => 155,
                'path' => 'product-155-1.webp',
            ],
            [
                'product_id' => 155,
                'path' => 'product-155-2.webp',
            ],
            [
                'product_id' => 155,
                'path' => 'product-155-3.webp',
            ],
            [
                'product_id' => 155,
                'path' => 'product-155-4.webp',
            ],
            [
                'product_id' => 156,
                'path' => 'product-156.webp',
            ],
            [
                'product_id' => 156,
                'path' => 'product-156-1.webp',
            ],
            [
                'product_id' => 156,
                'path' => 'product-156-2.webp',
            ],
            [
                'product_id' => 156,
                'path' => 'product-156-3.webp',
            ],
            [
                'product_id' => 157,
                'path' => 'product-157.webp',
            ],
            [
                'product_id' => 157,
                'path' => 'product-157-1.webp',
            ],
            [
                'product_id' => 157,
                'path' => 'product-157-2.webp',
            ],
            [
                'product_id' => 157,
                'path' => 'product-157-3.webp',
            ],
            [
                'product_id' => 157,
                'path' => 'product-157-4.webp',
            ],
            [
                'product_id' => 158,
                'path' => 'product-158.webp',
            ],
            [
                'product_id' => 158,
                'path' => 'product-158-1.webp',
            ],
            [
                'product_id' => 158,
                'path' => 'product-158-2.webp',
            ],
            [
                'product_id' => 159,
                'path' => 'product-159.webp',
            ],
            [
                'product_id' => 159,
                'path' => 'product-159-1.webp',
            ],
            [
                'product_id' => 159,
                'path' => 'product-159-2.webp',
            ],
            [
                'product_id' => 159,
                'path' => 'product-159-3.webp',
            ],
            [
                'product_id' => 159,
                'path' => 'product-159-4.webp',
            ],
            [
                'product_id' => 160,
                'path' => 'product-160.webp',
            ],
            [
                'product_id' => 160,
                'path' => 'product-160-1.webp',
            ],
            [
                'product_id' => 160,
                'path' => 'product-160-2.webp',
            ],
            [
                'product_id' => 160,
                'path' => 'product-160-3.webp',
            ],
            [
                'product_id' => 160,
                'path' => 'product-160-4.webp',
            ],
            [
                'product_id' => 161,
                'path' => 'product-161.webp',
            ],
            [
                'product_id' => 161,
                'path' => 'product-161-1.webp',
            ],
            [
                'product_id' => 161,
                'path' => 'product-161-2.webp',
            ],
            [
                'product_id' => 161,
                'path' => 'product-161-3.webp',
            ],
            [
                'product_id' => 161,
                'path' => 'product-161-4.webp',
            ],
            [
                'product_id' => 162,
                'path' => 'product-162.webp',
            ],
            [
                'product_id' => 162,
                'path' => 'product-162-1.webp',
            ],
            [
                'product_id' => 162,
                'path' => 'product-162-2.webp',
            ],
            [
                'product_id' => 162,
                'path' => 'product-162-3.webp',
            ],
            [
                'product_id' => 162,
                'path' => 'product-162-4.webp',
            ],
            [
                'product_id' => 163,
                'path' => 'product-163.webp',
            ],
            [
                'product_id' => 163,
                'path' => 'product-163-1.webp',
            ],
            [
                'product_id' => 163,
                'path' => 'product-163-2.webp',
            ],
            [
                'product_id' => 163,
                'path' => 'product-163-3.jpg',
            ],
            [
                'product_id' => 164,
                'path' => 'product-164.webp',
            ],
            [
                'product_id' => 164,
                'path' => 'product-164-1.webp',
            ],
            [
                'product_id' => 164,
                'path' => 'product-164-2.webp',
            ],
            [
                'product_id' => 164,
                'path' => 'product-164-3.webp',
            ],
            [
                'product_id' => 164,
                'path' => 'product-164-4.webp',
            ],
            [
                'product_id' => 165,
                'path' => 'product-165.webp',
            ],
            [
                'product_id' => 165,
                'path' => 'product-165-1.webp',
            ],
            [
                'product_id' => 165,
                'path' => 'product-165-2.webp',
            ],
            [
                'product_id' => 165,
                'path' => 'product-165-3.jpg',
            ],
            [
                'product_id' => 165,
                'path' => 'product-165-4.jpg',
            ],
            [
                'product_id' => 166,
                'path' => 'product-166.webp',
            ],
            [
                'product_id' => 166,
                'path' => 'product-166-1.webp',
            ],
            [
                'product_id' => 166,
                'path' => 'product-166-2.webp',
            ],
            [
                'product_id' => 166,
                'path' => 'product-166-3.webp',
            ],
            [
                'product_id' => 167,
                'path' => 'product-167.webp',
            ],
            [
                'product_id' => 167,
                'path' => 'product-167-1.webp',
            ],
            [
                'product_id' => 167,
                'path' => 'product-167-2.jpg',
            ],
            [
                'product_id' => 167,
                'path' => 'product-167-3.webp',
            ],
            [
                'product_id' => 167,
                'path' => 'product-167-4.webp',
            ],
            [
                'product_id' => 168,
                'path' => 'product-168.webp',
            ],
            [
                'product_id' => 168,
                'path' => 'product-168-1.webp',
            ],
            [
                'product_id' => 168,
                'path' => 'product-168-2.webp',
            ],
            [
                'product_id' => 168,
                'path' => 'product-168-3.webp',
            ],
            [
                'product_id' => 168,
                'path' => 'product-168-4.webp',
            ],
            [
                'product_id' => 169,
                'path' => 'product-169.webp',
            ],
            [
                'product_id' => 169,
                'path' => 'product-169-1.webp',
            ],
            [
                'product_id' => 169,
                'path' => 'product-169-2.webp',
            ],
            [
                'product_id' => 169,
                'path' => 'product-169-3.webp',
            ],
            [
                'product_id' => 169,
                'path' => 'product-169-4.webp',
            ],
            [
                'product_id' => 170,
                'path' => 'product-170.webp',
            ],
            [
                'product_id' => 170,
                'path' => 'product-170-1.webp',
            ],
            [
                'product_id' => 170,
                'path' => 'product-170-2.webp',
            ],
            [
                'product_id' => 170,
                'path' => 'product-170-3.webp',
            ],
            [
                'product_id' => 170,
                'path' => 'product-170-4.webp',
            ],
            [
                'product_id' => 171,
                'path' => 'product-171.webp',
            ],
            [
                'product_id' => 171,
                'path' => 'product-171-1.webp',
            ],
            [
                'product_id' => 171,
                'path' => 'product-171-2.webp',
            ],
            [
                'product_id' => 171,
                'path' => 'product-171-3.webp',
            ],
            [
                'product_id' => 171,
                'path' => 'product-171-4.webp',
            ],
            [
                'product_id' => 172,
                'path' => 'product-172.webp',
            ],
            [
                'product_id' => 172,
                'path' => 'product-172-1.webp',
            ],
            [
                'product_id' => 172,
                'path' => 'product-172-2.webp',
            ],
            [
                'product_id' => 172,
                'path' => 'product-172-3.webp',
            ],
            [
                'product_id' => 172,
                'path' => 'product-172-4.webp',
            ]
        ]);

        DB::table('rooms')->insert([
            [
                'id' => 1,
                'name' => 'PHÒNG KHÁCH - living room',
                'image' => 'slider-1.webp',
                'link' => 'living_room'
            ],
            [
                'id' => 2,
                'name' => 'PHÒNG NGỦ - bedroom',
                'image' => 'slider-2.webp',
                'link' => 'bed_room'
            ],
            [
                'id' => 3,
                'name' => 'BẾP & PHÒNG ĂN - kitchen room',
                'image' => 'slider-3.webp',
                'link' => 'kitchen_room'
            ],
            [
                'id' => 4,
                'name' => 'PHÒNG LÀM VIỆC - home office',
                'image' => 'slider-4.webp',
                'link' => 'home_office'
            ],
            [
                'id' => 5,
                'name' => 'PHÒNG TẮM - bathroom',
                'image' => 'slider-5.webp',
                'link' => 'bath_room'
            ]
        ]);

    }
}