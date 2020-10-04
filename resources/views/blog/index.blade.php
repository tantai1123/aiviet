@extends('layouts.app')

@section('title', 'Ái Việt Blog')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/js/jquery-ui/jquery-ui-1.12.1.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/owl-carousel/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/owl-carousel/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/article/article.css')}}">
@endsection

@section('content')
    <div class="wrapper">
        <div class="wbreadcrumb">
            <div class="container">
                <nav id="breadcrumb" class="breadcrumb">
                    <ul class="srow">
                        <li class="home-page"><a href="https://esm.com.vn/"><i class="ficon fa fa-home"></i></a></li>
                        <li><span>Tin nổi bật</span></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="page-content">
            <div class="container grid-view">
                <div class="main-content srow">
                    <h1 class="page-title"><a class="title" href="https://esm.com.vn/bai-viet">Tin nổi bật</a></h1>
                    <div class="article-focus">
                        <div class="items owl-carousel">
                            <div class="item">
                                <div class="inner-item">
                                    <div class="pic-thumb">
                                        <a class="bg-pic bg-pic-5x3"
                                           href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap"
                                           style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-carl-heyerdahl-ke0nc8-58mq-unsplash.jpg)"></a>
                                    </div>
                                    <div class="pinfo">
                                        <h3 class="item-title"><a
                                                href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap">Khuyến
                                                khích tải ứng dụng Bluezone, nhà mạng đồng loạt tặng 5GB data, miễn phí
                                                100%
                                                cước truy cập</a></h3>
                                        <div class="item-info">
                                            <span class="author">Mai Huỳnh Lâm</span>&nbsp;|&nbsp;
                                            <span class="post-at">11:26 | 13/08/2020</span>
                                        </div>
                                        <div class="short">Các nhà mạng lớn tại Việt Nam đồng loạt đưa ra chương trình
                                            tặng
                                            dung lượng data cho khách hàng và miễn cước truy cập khi sử dụng ứng dụng
                                            Bluezone.
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <div class="pic-thumb">
                                        <a class="bg-pic bg-pic-5x3"
                                           href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc"
                                           style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-2.jpg)"></a>
                                    </div>
                                    <div class="pinfo">
                                        <h3 class="item-title"><a
                                                href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc">Chuyển đổi số
                                                cho
                                                ngành giáo dục</a></h3>
                                        <div class="item-info">
                                            <span class="post-at">14:10 | 03/08/2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="inner-item">
                                    <div class="pic-thumb">
                                        <a class="bg-pic bg-pic-5x3"
                                           href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do"
                                           style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                    </div>
                                    <div class="pinfo">
                                        <h3 class="item-title"><a
                                                href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do">4
                                                định kiến về B2B digital marketing và sự thật đằng sau đó</a></h3>
                                        <div class="item-info">
                                            <span class="post-at">14:09 | 03/08/2020</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="categories">
                        <div class="wrap-box">
                            <h3 class="box-title"><a class="title" href="https://esm.com.vn/digital-marketing">Digital
                                    Marketing</a></h3>
                            <div class="box-content">
                                <div class="items grid-view">
                                    <div class="item">
                                        <div class="inner-item grid-view">
                                            <div class="pic-thumb">
                                                <a class="bg-pic bg-pic-5x3"
                                                   href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do"
                                                   style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                            </div>
                                            <div class="pinfo">
                                                <h3 class="item-title"><a
                                                        href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do">4
                                                        định kiến về B2B digital marketing và sự thật đằng sau đó</a>
                                                </h3>
                                                <div class="item-info">
                                                    <span class="post-at">14:09 | 03/08/2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-box">
                            <h3 class="box-title"><a class="title" href="https://esm.com.vn/martech">Martech</a></h3>
                            <div class="box-content">
                                <div class="items grid-view">
                                    <div class="item">
                                        <div class="inner-item grid-view">
                                            <div class="pic-thumb">
                                                <a class="bg-pic bg-pic-5x3" href="https://esm.com.vn/e-solution-media"
                                                   style="background-image:url(https://esm.com.vn/thumbs/image/tac-gia/900x900-1-dsc04587_thiet.jpg)"></a>
                                            </div>
                                            <div class="pinfo">
                                                <h3 class="item-title"><a href="https://esm.com.vn/e-solution-media">E
                                                        Solution Media - Giải pháp toàn diện cho doanh nghiệp</a></h3>
                                                <div class="item-info">
                                                    <span class="author">Mai Huỳnh Lâm</span>&nbsp;|&nbsp;
                                                    <span class="post-at">16:27 | 18/08/2020</span>
                                                </div>
                                                <div class="short">E Solution Media - Giải pháp toàn diện cho doanh
                                                    nghiệp<br/>
                                                    E Solution Media - Giải pháp toàn diện cho doanh nghiệp<br/>
                                                    E Solution Media - Giải pháp toàn diện cho doanh nghiệp
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="inner-item grid-view">
                                            <div class="pic-thumb">
                                                <a class="bg-pic bg-pic-5x3"
                                                   href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap"
                                                   style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-carl-heyerdahl-ke0nc8-58mq-unsplash.jpg)"></a>
                                            </div>
                                            <div class="pinfo">
                                                <h3 class="item-title"><a
                                                        href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap">Khuyến
                                                        khích tải ứng dụng Bluezone, nhà mạng đồng loạt tặng 5GB data,
                                                        miễn
                                                        phí 100% cước truy cập</a></h3>
                                                <div class="item-info">
                                                    <span class="author">Mai Huỳnh Lâm</span>&nbsp;|&nbsp;
                                                    <span class="post-at">11:26 | 13/08/2020</span>
                                                </div>
                                                <div class="short">Các nhà mạng lớn tại Việt Nam đồng loạt đưa ra chương
                                                    trình tặng dung lượng data cho khách hàng và miễn cước truy cập khi
                                                    sử
                                                    dụng ứng dụng Bluezone.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="item">
                                        <div class="inner-item grid-view">
                                            <div class="pic-thumb">
                                                <a class="bg-pic bg-pic-5x3"
                                                   href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc"
                                                   style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-2.jpg)"></a>
                                            </div>
                                            <div class="pinfo">
                                                <h3 class="item-title"><a
                                                        href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc">Chuyển
                                                        đổi số cho ngành giáo dục</a></h3>
                                                <div class="item-info">
                                                    <span class="post-at">14:10 | 03/08/2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wrap-box">
                            <h3 class="box-title"><a class="title" href="https://esm.com.vn/chuyen-muc-f-b">Chuyên mục F&amp;B</a>
                            </h3>
                            <div class="box-content">
                                <div class="items grid-view">
                                    <div class="item">
                                        <div class="inner-item grid-view">
                                            <div class="pic-thumb">
                                                <a class="bg-pic bg-pic-5x3"
                                                   href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b"
                                                   style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                            </div>
                                            <div class="pinfo">
                                                <h3 class="item-title"><a
                                                        href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b">Dịch
                                                        Covid làm thay đổi thói quen xem quảng cáo của khách hàng
                                                        F&amp;B</a></h3>
                                                <div class="item-info">
                                                    <span class="author">Fullname</span>&nbsp;|&nbsp;
                                                    <span class="post-at">14:10 | 03/08/2020</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sidebar">
                    <div class="wrap-box tab-art">
                        <ul>
                            <li><a href="#new">Tin mới</a></li>
                            <li><a href="#cat-64">Martech</a></li>
                            <li><a href="#cat-66">Chuyên mục F&B</a></li>
                        </ul>
                        <div id="new">
                            <div class="items">
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/e-solution-media" class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/tac-gia/900x900-1-dsc04587_thiet.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a href="https://esm.com.vn/e-solution-media">E
                                                    Solution
                                                    Media - Giải pháp toàn diện cho doanh nghiệp</a></h3>
                                            <div class="post-at">16:27 | 18/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-carl-heyerdahl-ke0nc8-58mq-unsplash.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap">Khuyến
                                                    khích tải ứng dụng Bluezone, nhà mạng đồng loạt tặng 5GB data, miễn
                                                    phí
                                                    100% cước truy cập</a></h3>
                                            <div class="post-at">11:26 | 13/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b">Dịch
                                                    Covid làm thay đổi thói quen xem quảng cáo của khách hàng F&B</a>
                                            </h3>
                                            <div class="post-at">14:10 | 03/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-2.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc">Chuyển
                                                    đổi số
                                                    cho ngành giáo dục</a></h3>
                                            <div class="post-at">14:10 | 03/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/4-dinh-kien-ve-b2b-digital-marketing-va-su-that-dang-sau-do">4
                                                    định kiến về B2B digital marketing và sự thật đằng sau đó</a></h3>
                                            <div class="post-at">14:09 | 03/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cat-64">
                            <div class="items">
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/e-solution-media" class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/tac-gia/900x900-1-dsc04587_thiet.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a href="https://esm.com.vn/e-solution-media">E
                                                    Solution
                                                    Media - Giải pháp toàn diện cho doanh nghiệp</a></h3>
                                            <div class="post-at">16:27 | 18/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-carl-heyerdahl-ke0nc8-58mq-unsplash.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/khuyen-khich-tai-ung-dung-bluezone-nha-mang-dong-loat-tang-5gb-data-mien-phi-100-cuoc-truy-cap">Khuyến
                                                    khích tải ứng dụng Bluezone, nhà mạng đồng loạt tặng 5GB data, miễn
                                                    phí
                                                    100% cước truy cập</a></h3>
                                            <div class="post-at">11:26 | 13/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-2.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/chuyen-doi-so-cho-nganh-giao-duc">Chuyển
                                                    đổi số
                                                    cho ngành giáo dục</a></h3>
                                            <div class="post-at">14:10 | 03/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="cat-66">
                            <div class="items">
                                <div class="item">
                                    <div class="inner-item grid-view">
                                        <div class="pic-thumb">
                                            <a href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b"
                                               class="bg-pic bg-pic-5x3"
                                               style="background-image:url(https://esm.com.vn/thumbs/image/service/900x900-1-pic-01.jpg)"></a>
                                        </div>
                                        <div class="pinfo">
                                            <h3 class="item-title"><a
                                                    href="https://esm.com.vn/dich-covid-lam-thay-doi-thoi-quen-xem-quang-cao-cua-khach-hang-f-b">Dịch
                                                    Covid làm thay đổi thói quen xem quảng cáo của khách hàng F&B</a>
                                            </h3>
                                            <div class="post-at">14:10 | 03/08/2020</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).ready(function (e) {
            $(".tab-art").tabs();
            $(".owl-carousel").owlCarousel({
                "items": 1,
                "autoplay": true,
                "autoplayHoverPause": true,
                "autoplaySpeed": 1000,
                "autoplayTimeout": 5000,
                "smartSpeed": 500,
                "loop": true,
                "margin": 0,
                "nav": true,
                "dots": false
            });
        });
    </script>
    <script type="text/javascript" src="{{asset('assets/js/jquery-ui/jquery-ui-1.12.1.js')}}"></script>
    <script type="text/javascript"
            src="{{asset('assets/js/owl-carousel/owl.carousel.min.js')}}"></script>
@endsection
