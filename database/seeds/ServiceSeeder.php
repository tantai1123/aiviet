<?php

use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('services')->insert([
            [
                'service_name' => 'Branding',
                'icon' => 'uploads/image/service/branding.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Tư vấn chiến lược xây dựng thương hiệu
Tư vấn định vị thương hiệu
Chiến lược Marketing',
                'content' => 'Ngày xưa, vua sai một viên quan đi dò la khắp nước tìm người tài giỏi. Viên quan đó đã đi nhiều nơi, đến đâu cũng đưa ra những câu đố oái oăm để hút mọi người, tuy nhiên mất nhiều công sức mà vẫn chưa tìm thấy người nào thật lỗi lạc, xuất chúng.
Một hôm, viên quan đi qua một cánh đồng, chợt thấy bên vệ đường có hai cha con nhà nọ đang làm ruộng, cha đánh trâu cày, con đập đất. Ông bèn dừng ngựa lại hỏi:

- Này ông lão kia! Trâu của lão cày một ngày được mấy đường?

Người cha đứng ngẩn ra chưa biết trả lời thế nào thì đứa con chừng bảy tám tuổi hỏi vặn lại quan:

- Thế xin hỏi ông câu này đã. Nếu ông trả lời được ngựa của ông đi một ngày được mấy bước, tôi sẽ cho ông biết trâu của cha tôi cày một ngày được mấy đường.
Viên quan nghe hỏi lại như thế thì há hốc mồm sửng sốt, không biết đáp sao cho ổn. Ông thầm nghĩ bụng nhất định nhân tài ở đây rồi, chả phải tìm đâu nữa mất công. Quan bèn hỏi tên họ làng xã quê quán của hai cha con rồi phi ngựa một mạch về tâu vua.

Nghe vậy, vua mừng lắm. Nhưng để biết chính xác hơn nữa, vua bèn sai ban cho làng ấy ba thúng gạo nếp vài ba con trâu đực, ra lệnh phải nuôi làm sao cho ba con trâu ấy đẻ thành chín con, hẹn năm sau đem nộp đủ, nếu không thì cả làng phải tội.

Dân làng nhận được lệnh vua ban, ai ấy cũng vừa mừng vừa và lo lắng, không biết làm sao trâu đực đẻ được bây giờ? Bao nhiêu cuộc họp làng, bao nhiêu lời bàn tán, vẫn không nghĩ ra được cách gì giải quyết cả. Từ trên xuống dưới mọi người đều coi là một tai vạ.

Nghe thấy tin này, cậu bé con người thợ cày liền bảo cha:

- Chả mấy khi được lộc vua ban, bố cứ thưa với làng ngả thịt hai trâu và đồ hai thúng gạo nếp để mọi người ăn một bữa thật lớn. Còn một trâu và một thúng gạo, ta sẽ xin làng làm phí tổn cho bố con ta trẩy kinh lo liệu việc đó.

- Đã ăn thịt còn lo liệu thế nào? Con đừng có làm dại mà bay đầu đi đó con ạ!

Nhưng cậu bé quả quyết:

- Cha cứ mặc con lo liệu, thế nào cũng xong xuôi.

Người cha vội ra đình trình bày câu chuyện. Cả làng nghe nói vẫn còn ngờ vực, bắt cha con phải làm giấy cam đoan, mới dám ngả trâu.

Mấy hôm sau, hai cha con khăn gói tìm đường tiến kinh. Đến hoàng cung, con bảo cha đứng đợi ở ngoài, còn mình thì nhân lúc mấy tên lính canh vô ý, lẻn vào sân khóc um lên. Vua sai lính điệu vào phán hỏi:

 - Thằng bé kia mày có việc gì? Sao lại đến đây mà khóc?

- Tâu đức vua. Mẹ con chết sớm mà cha con thì không chịu đẻ em bé để chơi với con cho có bạn, cho nên con khóc. Dám mong đức vua phán bảo cha con cho con được nhờ. - Cậu bé vờ vĩnh tâu vua.

Nghe nói, vua và các triều thần đều bật cười. Vua lại phán:

- Cháu muốn có em thì phải kiếm vợ khác cho bố cháu, chứ bố cháu là giống đực làm sao mà đẻ được!

Cấu bé bỗng tươi tỉnh:

- Thế sao làng chúng con lại có lệnh trên bắt nuôi ba con trâu đực cho đẻ thành chín con để nộp đức vua? Giống đực thì làm sao mà đẻ được kia chứ!

Vua cười bảo:

- Ta thử đấy thôi mà? Thế làng chúng mày không biết đem trâu ấy ra ngả thịt mà ăn với nhau à?

- Tâu đức vua, làng chúng con sau khi nhận được trâu và gạo nếp biết là lộc của đức vua, cho nên đã làm cỗ ăn mừng với nhau rồi.

Vua và đình thần chịu thằng bé là thông minh lỗi lạc, nhưng đức vua vẫn còn muốn thử cho đến cùng. Hôm sau, khi hai cha con đang ăn cơm ở nhà công quán, bỗng có sứ nhà vua mang tới một con chim sẻ và lệnh chỉ bắt họ phải dọn thành ba cỗ thức ăn. Em bé lấy một cái kim may rồi đưa cho sứ giả, bảo:

- Ông cầm lấy cái này về tâu đức vua xin rèn cho tôi thành một con dao để xẻ thịt chim.

Vua nghe nói, từ đó mới phục hẳn.

Lập tức vua cho gọi cả cha con vào ban thưởng hậu hĩnh.
***

Lúc bấy giờ, nước láng giềng nhăm nhe muốn chiếm bờ cõi của nước ta. Để dò xem bên này có nhân tài hay không, họ mới sai sứ đưa sang một cái vỏ con ốc vặn rất dài, rỗng hai đầu, đố làm sao xâu một sợi chỉ mảnh xuyên qua đường ruột ốc.
Sau khi nghe sứ thần trình bày mục đích cuộc đi sứ, vua quan đưa mắt nhìn nhau. Không trả lời được câu đố oái oăm ấy tức là thua kém và phải thừa nhận sự lép vế của mình đối với nước láng giềng.

Các đại thần đều vò đầu suy nghĩ. Có người dùng miệng hút mong cho sợi chỉ lọt qua, có người bôi sáp vào sợi chỉ cho cứng để cho dễ xâu... nhưng tất cả mọi cách đều vô hiệu. Bao nhiêu các ông trạng, các nhà thông thái triệu vào đều lắc đầu bó tay. Cuối cùng, triều đình đành tìm cách mời sứ thần tạm nghỉ ở công quán để có thì giờ đi hỏi ý kiến em bé thông minh ngày nọ.

Một viên quan mang dụ chỉ của vua đến nhà em bé vào lúc em còn đùa nghịch ở sau nhà. Nghe quan trình bày ngọn ngành câu đố của sứ giả ngoại quốc, em bé không đáp, chỉ hát lên một câu:
Tang tính tang! Tính tình tang!

Bắt con kiến càng buộc chỉ ngang lưng

Bên thời lấy giấy mà bưng,

Bên thời bôi mỡ, kiến mừng kiến sang

Tang tình tang...

Rồi bảo: - Không cần tôi phải về triều làm gì. Cứ theo cách đó là xâu được ngay!".

Viên quan sung sướng trở về tâu vua. Vua và các triều thần nghe nói như mở cờ trong bụng. Quả nhiên con kiến càng đã xâu được sợi chỉ xuyên qua đường ruột ốc hộ cho nhà vua trước con mắt kính phục của sứ giả nước láng giềng.

Rồi đó, vua phong cho cậu bé làm trạng nguyên. Vua sai xây dinh thự ở một bên hoàng cung cho em ở để tiện hỏi han.',
                'content_image' => ''
            ],
            [
                'service_name' => 'Digital Marketing',
                'icon' => 'uploads/image/service/digital-marketing.png',
                'image' => 'thumbs/image/service/400x400-1-pic-2.jpg',
                'description' => 'Tư vấn giải pháp Marketing trên nền tảng trực tuyến (Facebook, Instagram, Google, Youtube, Tiktok)
Thực hiện quảng cáo Facebook Ads, Google Ads, Tiktok Ads, Youtube',
                'content' => 'Vào đời Hùng Vương thứ VI, có một người đàn bà đã có tuổi nhưng vẫn sống một mình. Một buổi sáng đi thăm nương, bà bỗng nhìn thấy một vết chân giẫm nát luống cà. Bà kinh ngạc kêu lên: - "Ôi! Bàn chân ai mà to thế này!".
Thử đưa bàn chân ướm thử vào dấu chân lạ kia, bà bỗng rùng mình sững sờ. Từ hôm đó bà bất ngờ có bầu. Thai đủ ngày tháng, bà sinh được một bé trai bụ bẫm và đặt tên là Gióng. Thế nhưng, thằng bé lên ba tuổi rồi mà vẫn nằm ngửa đòi ăn, không biết ngồi biết lẫy, cũng không biết nói biết cười gì cả.

Lúc bấy giờ giặc Ân đang kéo vào cướp nước ta. Chúng rất hung hăng tàn ác, cầm đầu là một viên tướng tên gọi Ân vương, tướng mạo cổ quái dữ tợn. Chúng nó đi đến đâu là đốt phá nhà cửa, giết người cướp của đến đấy.

Quân đội nước ta nhiều lần xuất trận, nhưng đánh không nổi. Vua Hùng hết sức lo lắng vội phái sứ giả đi khắp nơi tìm bậc tướng tài để giúp vua cứu nước.

Một hôm sứ giả đi đến làng của mẹ con Gióng. Nghe tiếng loa rao nói đến việc nhà vua cầu người tài, mẹ Gióng đang ru con, liền bảo đùa con rằng:

- Con ơi! Con của mẹ chậm đi chậm nói như vậy, biết bao giờ mới đi đánh giặc giúp vua được đây!
Không ngờ Gióng nhìn mẹ mở miệng bật lên thành tiếng:

- Mẹ cho gọi sứ giả vào đây cho con!

Nói xong lại im bặt. Người mẹ vừa mừng vừa sợ, vội đi kể chuyện với xóm giềng. Mọi người đổ tới, ai nấy cho là một sự lạ. Sau cùng một người nói:

- Ta cứ đi mời sứ giả đến xem thử nó muốn cái gì.

Khi sứ giả của nhà vua bước vào nhà nhìn thấy chú bé Gióng liền hỏi rằng:

- Cháu là đứa trẻ lên ba mới học nói, cháu định mời ta đến để làm gì?

Gióng trả lời rất chững chạc:

- Về bảo với vua rèn cho ta một con ngựa sắt, một thanh gươm sắt, một giáp sắt và một nón sắt, ta sẽ đánh đuổi giặc dữ cho!
Ai nấy đứng nghe khôn xiết lạ lùng. Cho là thần nhân xuất hiện, sứ giả lập tức phi ngựa về tâu vua. Nghe nói, Hùng Vương mừng rỡ liền ra lệnh cho thợ rèn góp tất cả sắt lại rèn ngựa, gươm, áo giáp và nón như lời xin của chú bé.

Mọi thứ rèn xong rất nặng. Hàng chục người mó vào thanh gươm mà không nhúc nhích. Vua Hùng phải cho hàng ngàn quân sĩ tìm mọi cách chở đến cho Gióng.

Khi được tin quân sĩ khiêng ngựa sắt sắp đến làng, mẹ Gióng sợ hãi chạy về bảo con:

- Con ơi! Việc nhà vua đâu phải là chuyện chơi. Hiện quân sĩ đang kéo đến ầm ầm ngoài bãi, biết làm thế nào bây giờ?

Nghe nói thế, Gióng ngồi bật dậy, nói:

- Việc đánh giặc thì mẹ đừng lo. Nhưng mẹ phải cho con ăn thật nhiều mới được!

Mẹ vội thổi cơm cho con ăn, nhưng nấu lên được nồi nào Gióng ăn hết nồi ấy. Mỗi lần ăn một nồi cơm thì Gióng lại lớn thêm một ít và đòi ăn thêm. Mẹ càng cho con ăn thì con lại càng lớn như thổi, bỗng chốc đã thành một chàng thanh niên khỏe mạnh. Hết gạo, bà mẹ đi kêu gọi xóm làng.
Mọi người nô nức đem gạo khoai, hoa quả, bánh trái đến đầy một sân. Nhưng đưa đến bao nhiêu, Gióng ăn vợi hết bấy nhiêu, mà vẫn đòi ăn không nghỉ.

Sau đó, Gióng lại bảo tiếp:

- Mẹ kiếm vải cho con mặc.

Người làng lại đua nhau mang vải lụa tới may áo quần cho Gióng mặc. Nhưng thân thể Gióng lớn vượt một cách kỳ lạ, áo quần vừa may xong đã thấy chật, thấy ngắn, lại phải mang vải lụa tới để chắp nối thêm. Không mấy chốc đầu Gióng đã chạm nóc nhà.

Ai nấy chưa hết kinh ngạc thì vừa lúc quân sĩ đã hì hục khiêng được ngựa, gươm, áo giáp và nón sắt tới. Gióng bước ra khỏi nhà vươn vai một cái, người bỗng cao to sừng sững, chân dài hơn trượng, hét lên một tiếng như tiếng sấm:

- Ta là tướng nhà Trời!

Thế rồi Gióng mặc giáp sắt, đội nón sắt, tay cầm gươm múa quanh mấy vòng. Sau đó từ biệt mẹ và dân làng, nhảy lên lưng ngựa. Ngựa sắt bỗng chồm lên, phun thẳng ra đằng trước một luồng lửa đỏ rực. Gióng thúc chân, ngựa phi như bay, sải từng bước dài hàng chục con sào, rung chuyển cả trời đất.
Chỉ trong chớp mắt, ngựa đã phi thẳng đến đồn trại giặc. Lưỡi gươm của Gióng vung lên loang loáng như chớp giật. Quân giặc xông ra chừng nào chết chừng ấy. Ngựa thét ra lửa thiêu cháy từng dãy đồn trại, lửa thiêu luôn cả mấy khu rừng. Khói bụi mịt mù, tiếng la hét kêu khóc như ri.

Thế nhưng tướng giặc Ân vương vẫn cố gào thét hô quân xông tới, Gióng càng đánh càng khỏe, thây giặc nằm ngổn ngang đầy rừng. Bỗng chốc gươm gãy. Không bối rối, Gióng thuận tay nhổ những bụi tre hai bên đường quật tới tấp vào các toán giặc đang cố gắng trụ lại theo lệnh chủ tướng.
Chẳng mấy chốc quân giặc đã tẩu tán khắp nơi, Ân vương bị quật chết tan xác. Bọn tàn binh giặc lạy lục xin hàng. Quân đội của Hùng Vương cũng như dân các làng chỉ còn việc xông ra trói nghiến chúng lại. Không đầy một buổi, Gióng đã trừ xong nạn nước.

Lúc bấy giờ ngựa Gióng đã tiến đến chân núi Sóc-sơn. Đến đây, Gióng bèn cởi giáp bỏ nón lại, rồi cả người lẫn ngựa bay thẳng lên trời.',
                'content_image' => ''
            ],
            [
                'service_name' => 'Xây dựng chiến lược nội dung Tiktok',
                'icon' => 'uploads/image/service/tiktok.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Xây dựng kênh Tiktok
Tiktok Selling Manager',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Chiến lược nội dung',
                'icon' => 'uploads/image/service/content-strategy.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Sáng tạo nội dung trên Fanpage Facebook
Xây dựng và quản lý truyền thông đa kênh: Facebook, Instagram, Tiktok)
Xây dựng nội dung website chuẩn SEO/SEM',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Creative Production',
                'icon' => 'uploads/image/service/creative-production.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Sản xuất media',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Giải pháp tương lai',
                'icon' => 'uploads/image/service/future-solution.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Loyalty Application
KAS (Hệ thống quản trị doanh nghiệp)',
                'content' => 'aaa',
                'content_image' => ''
            ],
        ]);
    }
}
