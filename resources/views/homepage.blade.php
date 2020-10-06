@extends('layouts.app')

@section('title', 'Ái Việt Group')

@section('css')
    <link rel="stylesheet" href="{{asset('assets/css/home/home.css')}}">
    <link rel="stylesheet" href="{{asset('assets/js/map/google-direction.css')}}">
@stop

@section('content')

    <div class="wrapper">
        <div class="wbreadcrumb">
            <div class="container"></div>
        </div>
        <div class="hero" id="home">
            <!-- Swiper -->
            <div class="swiper-container upslide hero-slide-background position-relative">
                <div data-relative-input="true" id="hero_background">
                    <div data-depth="0.01"><img src="{{asset('uploads/image/banner/laptop.png')}}" alt=""/></div>
{{--                    <div data-depth="0.15"><img src='{{asset('uploads/image/banner/banner-light.png')}}' alt=""/></div>--}}
{{--                    <div data-depth="0.15"><img src='{{asset('uploads/image/banner/banner-bulb.png')}}' alt=""--}}
{{--                                                class="animation-float"/></div>--}}
{{--                    <div data-depth="0.35"><img src='{{asset('uploads/image/banner/banner-human.png')}}' alt=""/></div>--}}
                    <div data-depth="0.01"><img src="{{asset('uploads/image/banner/aiviet-group2.jpg')}}" alt=""/>
                    </div>
                </div>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <span></span>
                            <h1>
                                <div class="mr-2 d-inline">Grow Together: Đồng hành cùng phát triển</div>
                            </h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <span></span>
                            <h1>
                                <div class="mr-2 d-inline">Giải pháp Marketing toàn diện cho Doanh Nghiệp SME</div>
                            </h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <span></span>
                            <h1>
                                <div class="mr-2 d-inline">Nâng tầm thương hiệu cùng Martech</div>
                            </h1>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="slider-content">
                            <span></span>
                            <h1>
                                <div class="mr-2 d-inline">Hiện thực hoá khát vọng “Go Global”</div>
                            </h1>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="hb-left">
                <a href="{{route('index')}}#services" class="scrolldown-smoot smoot-scroll">
                    <div id="scrolldown" class="text-rotate link">
                        <span>Ấn để cuộn xuống<br/>Ấn để cuộn xuống<br/>Ấn để cuộn xuống<br/>Ấn để cuộn xuống</span>
                    </div>
                </a>
            </div>
        </div>
        <section id="services" class="services graybg">
            <div class="container wow fadeInUp">
                <div class="section-title mb-4 top_30">
                    <h2 class="title"><a href="{{route('service')}}" style="color:#fff;">Giải Pháp Của Chúng Tôi</a>
                    </h2>
                    <span class="gradient">Ái Việt Digital</span>
                </div>
                <!-- Services -->
                <div class="swiper-container slide-services">
                    <div class="swiper-wrapper">
                        @if(count($services)>0)
                            @foreach($services as $service)
                                <a href="{{route('service')}}" class="swiper-slide">
                                    <div class="service">
                                        <div style="text-align: center"><img width="60" src="{{asset($service->icon)}}"
                                             alt="{{$service->service_name}}"/></div>
                                        <h3 style="text-align: center" class="second-title orange">{{$service->service_name}}</h3>
                                        <ul>{!! '<li>'. str_replace("\n",'</li><li>',$service->description)!!}</ul>
                                    </div>
                                </a>
                            @endforeach
                        @endif
                    </div>
                </div>
                <div class="swiper-footer d-lg-none">
                    <div class="swiper-button-next ser-btn"></div>
                    <div class="swiper-button-prev ser-btn"></div>
                </div>
            </div>
        </section>
        <section id="about" class="about graybg">
            <div id="about_mark"></div>
            <div class="container wow fadeInUp">
                <div class="row">
                    <div class="col-lg-6 text box-animation">
                        <div class="section-title bottom_15 top_30">
                            <h2 class="title">Về chúng tôi</h2>
                            <span class="box-desc gradient">Ái Việt Digital </span>
                        </div>
                        <p class="top_30"><strong>Chúng tôi là Ái Việt - Digital Marketing Agency.</strong>
                            Ái Việt Group là đơn vị cung cấp dịch vụ Digital & Media Marketing hàng đầu tại Việt Nam. Chúng tôi mang đến giải pháp tối ưu hiệu quả cho các chiến dịch Marketing, triển khai chiến lược xây dựng thương hiệu bền vững. Từ đó, giúp gia tăng lòng tin của khách hàng và mang lại doanh thu lợi nhuận cho các Doanh nghiệp đối tác.</p>
                    </div>
                    <div class="col-lg-6 image">
                        <div id="about_scene" data-relative-input="true">
                            <div data-depth="0.30"><img src="{{asset('uploads/image/about/layer0.png')}}"
                                                        width="500" alt=""/></div>
                            <div data-depth="0.13"><img src="{{asset('uploads/image/about/layer1.png')}}"
                                                        width="500" alt=""/></div>
                            <div data-depth="0.8"><img src="{{asset('uploads/image/about/layer2.png')}}"
                                                       width="500" alt=""/>
                            </div>
                            <div data-depth="0.10"><img src="{{asset('uploads/image/about/layer3.png')}}"
                                                        width="500" alt=""/></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="how_we_work" class="how-we-work">
            <div class="container wow fadeInUp">
                <h3 class="text-center" style="color: white; margin: 30px 0 45px; padding-top: 30px;">Quá trình sáng
                    tạo</h3>
                <div id="how-we-work" class="row icon-work top_30">
                    <div class="col-6 col-md how-we-work text-center">
                        <img class="png"
                             src="{{asset('uploads/image/how-we-work/team.png')}}"
                             alt=""/>
                        <img class="gif" src="{{asset('uploads/image/how-we-work/team.gif')}}" alt=""/>
                        <div class="box-desc">Meet up</div>
                        <p class="top_30" style="font-size: 14px; line-height: 1.5;">
                            Buổi gặp gỡ để chúng tôi làm quen với bạn. Qua cuộc trò chuyện đơn giản, chúng tôi nắm bắt
                            nhu cầu và thấu hiểu mong muốn của bạn dành cho thương hiệu của mình một cách sâu sắc
                            nhất.</p>
                    </div>
                    <div class="col-6 col-md how-we-work text-center">
                        <img class="png"
                             src="{{asset('uploads/image/how-we-work/strategy.png')}}"
                             alt=""/>
                        <img class="gif" src="{{asset('uploads/image/how-we-work/strategy.gif')}}" alt=""/>
                        <div class="box-desc">Brainstorming</div>
                        <p class="top_30" style="font-size: 14px; line-height: 1.3;">Sau khi gặp bạn, chúng tôi bắt đầu
                            tìm hiểu về những điều xung quanh liên quan đến bạn, đối thủ, thị trường, lĩnh vực và cả bạn
                            nữa. Chúng tôi sẽ “bão não” với nhau để ra được hướng đi đúng nhất cho thương hiệu của
                            bạn.</p>
                    </div>
                    <div class="col-6 col-md how-we-work text-center">
                        <img class="png"
                             src="{{asset('uploads/image/how-we-work/design.png')}}"
                             alt=""/>
                        <img class="gif" src="{{asset('uploads/image/how-we-work/design.gif')}}" alt=""/>
                        <div class="box-desc">Concept</div>
                        <p class="top_30" style="font-size: 14px; line-height: 1.3;">Rất nhiều tưởng và hướng đi đã sẵn
                            sàng trên giấy, chúng tôi trình bày mọi thứ với bạn. Nếu may mắn bạn ưng ý tưởng ấy, chúng
                            tôi sẽ qua bước thứ 5, còn chưa đạt với mong muốn của bạn, hãy nói cho chúng tôi biết để kịp
                            thời chỉnh sửa cho phù hợp với doanh nghiệp của “chúng ta” nhé.
                        </p>
                    </div>
                    <div class="col-6 col-md how-we-work text-center">
                        <img class="png"
                             src="{{asset('uploads/image/how-we-work/deliver.png')}}"
                             alt=""/>
                        <img class="gif" src="{{asset('uploads/image/how-we-work/deliver.gif')}}" alt=""/>
                        <div class="box-desc">Edition</div>
                        <p class="top_30" style="font-size: 14px; line-height: 1.3;">Sau khi nhận được phản hồi từ bạn,
                            chúng tôi lại xảy ra một cuộc “bão não” khác để đưa ra các phương án tối ưu nữa. Tất cả vì
                            mục tiêu chung Thực hiện một chiến lược truyền thông hiệu quả nhất cho doanh nghiệp của bạn.
                        </p>
                    </div>
                    <div class="col-6 col-md how-we-work text-center">
                        <img class="png"
                             src="{{asset('uploads/image/how-we-work/monitoring.png')}}"
                             alt=""/>
                        <img class="gif" src="{{asset('uploads/image/how-we-work/monitoring.gif')}}" alt=""/>
                        <div class="box-desc">Finalization</div>
                        <p class="top_30" style="font-size: 14px; line-height: 1.3;">Final. Đây chính là thành quả của
                            cả 2 cả chúng tôi và bạn. Hãy tự hào vì điều đó và sau khi trình bày mọi thứ hoàn chỉnh nhất
                            cho bạn, chúng ta sẽ tiến hành, chờ đón những điều tốt đẹp và thành công đang chờ ta ở phía
                            trước.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        <section class="partner" id="partner">
            <div class="container wow fadeInUp">
                <h3 class="text-center" style="color: white;margin:30px 0 45px;padding-top:30px;">Đối tác</h3>
                <div class="row icon-work mt-5" id="our-partner">
                    @if(count($partners) > 0)
                        @foreach($partners as $partner)
                            <div class="col-3 col-md icon-our-partner text-center">
                                <a href="{{$partner->link}}">
                                    <img class="png"
                                         src="{{asset($partner->image)}}" alt=""/>
                                </a>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>
        </section>

{{--        <section id="news" class="news">--}}
{{--            <div class="container wow fadeInUp">--}}
{{--                <div class="section-title bottom_15 top_30 bottom_45">--}}
{{--                    <h2 class="title">Kiến thức</h2>--}}
{{--                    <span>Chia sẻ kiến thức để phát triển toàn diện</span> <br>--}}
{{--                </div>--}}

{{--                <div class="row">--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <a class="anews" href="#">--}}
{{--                            <div class="image"--}}
{{--                                 style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-carl-heyerdahl-ke0nc8-58mq-unsplash.jpg)"></div>--}}
{{--                            <h2 class="title">Chuyên mục F&amp;B</h2>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <a class="anews" href="#">--}}
{{--                            <div class="image"--}}
{{--                                 style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-campaign-creators-k1sq9qg-c70-unsplash.jpg)"></div>--}}
{{--                            <h2 class="title">Martech</h2>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                    <div class="col-lg-4">--}}
{{--                        <a class="anews" href="#">--}}
{{--                            <div class="image"--}}
{{--                                 style="background-image:url(https://esm.com.vn/thumbs/image/danh-muc/900x900-1-karine-germain-iiwcjgk3704-unsplash.jpg)"></div>--}}
{{--                            <h2 class="title">Digital Marketing</h2>--}}
{{--                        </a>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-12 text-center">--}}
{{--                    <a href="#" class="site-btn">SEE MORE</a>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </section>--}}

        <section id="contact" class="contact graybg pb-5">
            <div class="container wow fadeInUp">
                <div class="section-title bottom_15 top_30 bottom_45">
                    <h2 class="title">E-Solution Media</h2>
                </div>
                <!-- Map -->
                <div class="contact-wrapper">
                    <div class="contact-map">
                        <div class="load-google-map google-map" data-lat="10.7819058" data-lng="106.6893539">
                            <div class="map-info hidden">E-Solution Media</div>
                            <label for="pac-input"></label><input id="pac-input" class="form-control controls"
                                                                  type="text" placeholder="Enter address">
                            <div class="map-canvas"></div>
                            <div class="wrap-directions-panel">
                                <div class="directions-panel-info"></div>
                                <div class="directions-panel"></div>
                            </div>
                        </div>

                    </div>
                    <div class="getintouch">
                        <!-- contact info -->
                        <div class="contact-info box-animation">
                            <!-- info -->
                            <div class="info">
                                <i class="fas fa-paper-plane"></i>
                                <p class="mb-0"> Email </p>
                                <a href="#">office@aivietgroup.asia</a>
                            </div>
                            <!-- info -->
                            <div class="info">
                                <i class="fas fa-map-marker-alt"></i>
                                <p class="mb-0"> Address </p>
                                <p class="text mt-0">253 Điện Biên Phủ, Phường 7, Quận 3, TPHCM</p>
                            </div>
                            <!-- info -->
                            <div class="info">
                                <i class="fas fa-phone"></i>
                                <p class="mb-0"> Phone </p>
                                <a href="tel:0978.106.982">073 362 514</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="client" class="client graybg">
            <div class="container wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                <div class="col-lg-12">
                    <div class="section-title bottom_15 top_30">
                        <h2 class="title">Khách hàng</h2>
                    </div>
                    <div class="client__list d-none d-sm-block">
                        @if(count($customers) > 0)
                            @foreach($customers as $customer)
                                <div class="client__logo" data-id="1">
                                    <img class="client__logo__image grayscale"
                                         src="{{asset($customer->image)}}" alt=""/>
                                    <img class="client__logo__image"
                                         src="{{asset($customer->image)}}" alt=""/>
                                </div>
                                @if($customer->id == 3 || $customer->id == 8 || $customer->id == 14 || $customer->id == 19)
                                    <div class="clearfix d-none d-lg-block"></div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('js')
    <script type="text/javascript" src="{{asset('assets/js/map/google-direction.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnRrZQZHA1MemDTdRXx4wNLvptkodO7YI&callback=initMap"
            type="text/javascript"></script>
@endsection
