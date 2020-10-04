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
                'icon' => 'uploads/image/service/social-marketing.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Tư vấn định vị thương hiệu
Tư vấn truyền thông thương hiệu
Chiến lược Marketing',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Sáng tạo nội dung',
                'icon' => 'uploads/image/service/media-advertising.png',
                'image' => 'thumbs/image/service/400x400-1-pic-2.jpg',
                'description' => 'Chiến lược nội dung cho Fanpage.
Xây dựng, quản trị truyền thông đa kênh (Instagram, Tik tok,Fanpage)
Xây dựng nội dung Website',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Nhận diện thương hiệu cơ bản',
                'icon' => 'uploads/image/service/digital_training.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Thiết kế (website)
Thiết kế landing page',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Truyền thông Offline',
                'icon' => 'uploads/image/service/digital_production.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Tổ chức sự kiện',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Tiếp thị 4.0',
                'icon' => 'uploads/image/service/monitoring_analytics.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Giải pháp truyền thông trên Google Ads
Quảng cáo trên Facebook',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Production House',
                'icon' => 'uploads/image/service/web_develop.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Design
Sản xuất media',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Sáng tạo nội dung trên nền tảng Tik Tok',
                'icon' => 'uploads/image/service/application_develop.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Xây dựng kênh Tik Tok
Tik Tok Selling Manager',
                'content' => 'aaa',
                'content_image' => ''
            ],
            [
                'service_name' => 'Giải pháp tương lai',
                'icon' => 'uploads/image/service/lineOA.png',
                'image' => 'thumbs/image/service/400x400-1-pic-01.jpg',
                'description' => 'Loyalty app
KAS ( hệ thống quản trị doanh nghiệp)',
                'content' => 'aaa',
                'content_image' => ''
            ]
        ]);
    }
}
