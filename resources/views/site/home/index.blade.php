@extends('layouts.merge.site')
@section('titulo', 'Oficial')
@section('content')
    <main>
        <section>
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    @if ($slideFirst)
                        <div class="carousel-item mt-5 pt-5 active">

                            <div class="pt-5"
                                style='background-position:center; background-size:initial; height:700px; width:100%;background-image: url("/storage/{{ $slideFirst->path }}");no-repeat;
                                
                            background-size:cover;
                            background-image: url("/storage/{{ $slideFirst->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
                                '>
                                <div class="carousel-caption ">
                                    <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                        @if ($slideFirst->title)
                                            <h2 id="title" class="text-white mb-5  text-center"
                                                style="text-shadow: 1px 1px #000; font-size:43px;">{{ $slideFirst->title }}
                                            </h2>
                                        @endif
                                        @if ($slideFirst->description)
                                            <p id="description" class="small mb-n2  text-white mb-3 "
                                                style="text-shadow: 1px 1px #000; font-size:23px;">
                                                {{ $slideFirst->description }}
                                            </p>
                                        @endif

                                        @if ($slideFirst->link)
                                            <a href="{{ $slideFirst->link }}" data-scroll
                                                class="btn btn-secondary text-uppercase d-inline-flex align-items-center my-6">
                                                {{ $slideFirst->button }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif
                    @isset($slideshows)

                        @foreach ($slideshows as $item)
                            <div class="carousel-item mt-5 pt-5">

                                <div class="pt-5"
                                    style='background-position:center;  height:700px; width:100%;background-image: url("/storage/{{ $item->path }}");no-repeat;
                                    
                                    
                            background-size:cover;
                            background-image: url("/storage/{{ $item->path }}"); box-shadow: inset 0 0 0 1000px rgba(0, 0, 0, 0.5);
                                    
                                    '>
                                    <div class="carousel-caption ">
                                        <div class="col mt-sm-11 mt-md-11 mt-lg-0">
                                            @if ($item->title)
                                                <h2 id="title" class="text-white mb-5  text-center"
                                                    style="text-shadow: 1px 1px #000; font-size:43px;">{{ $item->title }}</h2>
                                            @endif
                                            @if ($item->description)
                                                <p id="description" class="small mb-n2  text-white mb-3 "
                                                    style="text-shadow: 1px 1px #000; font-size:23px;">
                                                    {{ $item->description }}
                                                </p>
                                            @endif

                                            @if ($item->link)
                                                <a href="{{ $item->link }}" data-scroll
                                                    class="btn btn-secondary text-uppercase d-inline-flex align-items-center my-6">
                                                    {{ $item->button }}
                                                </a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>

                    @endisset
                </div>
            </div>
        </section>


        {{--
            
            <section class="py-4 py-lg-6 mt-4 mt-lg-5">

            <ul class="countdown" style="list-style: none;">
                <li class="bg-primary">
                    <span class="days display-4"></span>
                    <div>Dia(s)</div>
                </li>
                <li class="bg-primary">
                    <span class="hours display-4"></span>
                    <div>Hora(s)</div>
                </li>
                <li class="bg-primary">
                    <span class="minutes display-4"></span>
                    <div>Minutos</div>
                </li>
                <li class="bg-primary">
                    <span class="seconds display-4"></span>
                    <div>Seg</div>
                </li>
            </ul>

        </section>
            
            --}}
        

        <section class="bg-light py-6 py-lg-7 text-dark">
            <div class=container>
                <div class=row>
                    <div class=col-lg>
                        <h2 class=h2>II Reunião Interministerial da Governação Electrónica & XI Reunião de Ministros das
                            Comunicações da CPLP</h2>
                    </div>
                    <div class="col-lg font-size-6">
                        <p>
                            <b>Lema</b> <br>
                            Desafios das Comunicações na Era Digital
                            <br><br>

                            <b> Onde?</b> <br>
                            Hotel de Convenções de Talatona, HCTA

                        </p>
                        <p class=mb-0>
                            <b> Quando?</b> <br>
                        <p>
                            De 17 a 21 de Julho de 2023
                        </p>
                    </div>

                </div>
            </div>
        </section>

        @include('extra._countdown.index')


        @include('extra._schedule.index')
        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col my-5">
                        <a href="{{ route('site.news') }}">
                            <h2 class="text-dark">Notícias do Evento</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($news as $item)
                        <div class="grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            <a href="{!! url('/noticia/' . urlencode($item->title)) !!}" class="card shadow lift rounded text-body">
                                <div
                                    style='background-image:url("/storage/{{ $item->path }}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                </div>

                                <div style='box-shadow: 0px 0px 20px 0px rgb(11 35 65 / 20%);' class="card-body py-4">
                                    <p class=card-text><strong> {{ $item->title }}
                                        </strong><br>{{ date('d/m/Y', strtotime($item->date)) }}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7 bg-light">
            <div class=container>
                <div class=row>
                    <div class="col my-5">

                        <a href="{{ route('site.docs') }}">
                            <h2 class="text-dark">Documentos</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class="container-fluid px-0">
                <div class=row>
                    <div class=col>
                        <div class="swiper container">
                            <div class="swiper-container overflow-visible"
                                data-options='{"slidesPerView": 1, "breakpoints": {"768": {"slidesPerView": 2}, "992": {"slidesPerView": 2}}}'>
                                <div class=swiper-wrapper>
                                    @foreach ($docs as $item)
                                        <div class=swiper-slide>
                                            <div class="card shadow lift">
                                                <div class="card-body text-center">
                                                    <a href="/storage/{{ $item->path }}" target="_blank">
                                                        <img src="/site/images/icons/pdf.png" alt="logo pdf" width="60"
                                                            class="mb-2">

                                                        <h3 class="h4 mt-2 text-primary">{{ $item->title }}</h3>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mt-4">
                <div class="d-flex justify-content-end">
                    <div class="swiper-btn swiper-btn-prev" tabindex=0 role=button aria-label="Previous slide"></div>
                    <div class="swiper-btn swiper-btn-next ml-3" tabindex=0 role=button aria-label="Next slide"></div>
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7">
            <div class=container>
                <div class=row>
                    <div class="col my-5">
                        <a href="{{ route('site.gallery') }}">
                            <h2 class="text-dark">Galerias</h2>
                        </a>
                    </div>
                </div>
            </div>
            <div class=container>
                <div class="row mx-n3 grid" data-isotope='{"layoutMode": "masonry", "itemSelector": ".grid-item"}'
                    id=portfolio>
                    @foreach ($galleries as $item)
                        <div class="grid-item branding col-md-6 col-lg-4 px-3 mb-5">
                            <a href="{!! url('/galeria/' . urlencode($item->name)) !!}" class="card shadow lift rounded text-body">
                                <div
                                    style='background-image:url("/storage/{{ $item->cover }}");background-position:center;background-size:cover;height:200px; border-radius: 5px;'>
                                </div>
                                <div class="card-body py-4">
                                    <p class=card-text><strong> {{ $item->name }}</strong></p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section class="py-6 py-lg-7 mt-6 mt-lg-7 bg-light">
            <div class=container>

                <div class="row justify-content-center text-center">
                    <div class=col-md-3>

                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=150
                                data-to=data-options='{"suffix": "+"}'> {!! number_format(150, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Expectativa
                                de Visitantes</span></p>
                    </div>
                    <div class=col-md-3>
                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=9
                                data-to=data-options='{"suffix": "+"}'>9</span><br><span
                                class="d-block text-muted mt-n1">Países </span></p>
                    </div>

                    <div class=col-md-3>

                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=0
                                data-to=data-options='{"suffix": "+"}'> {!! number_format($signup, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Participantes Inscritos</span></p>
                    </div>


                    <div class=col-md-3>
                        <p class="mb-5 mb-md-0"><span class=display-4 data-countup data-from=20
                                data-to=data-options='{"suffix": "+"}'> {!! number_format(20, 0, ',', '.') !!}</span><br><span
                                class="d-block text-muted mt-n1">Jornalistas</span></p>


                    </div>
                </div>
            </div>
        </section>

        @include('extra._members.index')
        <section class="py-13 py-lg-15">
            <div class="bg-primary bg-image bg-position-bottom-center bg-cover overlay overlay-primary overlay-60"
                style="background-image: url(/site/images/footer-3.jpg);">
                <div class="container h-100">
                    <div class="row align-items-center h-100 text-white">
                        <div class=col>
                            <h2 class=mb-5>
                                Hotel de Convenções de Talatona, HCTA
                            </h2>

                            <p class="font-size-5 mb-3">
                                De 17 a 21 de Julho de 2023
                            </p>

                            <a href="https://goo.gl/maps/xNSN3pP4b2FSnKK19" target="_blank"
                                class="btn btn-secondary text-uppercase d-inline-flex align-items-center">
                                Mapa de Direcções
                                <svg width=20 height=20 class=ml-2 xmlns=http://www.w3.org/2000/svg viewBox="0 0 24 24">
                                    <title>trip-distance</title>
                                    <path
                                        d=M5.5,8.5A5.506,5.506,0,0,0,0,14c0,3.555,4.545,8.922,4.74,9.15a1,1,0,0,0,1.52,0C6.453,22.923,11,17.561,11,14A5.506,5.506,0,0,0,5.5,8.5Zm0,8A2.5,2.5,0,1,1,8,14,2.5,2.5,0,0,1,5.5,16.5Z />
                                    <path
                                        d=M19.5.5A4.505,4.505,0,0,0,15,5c0,3.171,3.978,7.185,4.146,7.354a.5.5,0,0,0,.708,0C20.022,12.185,24,8.171,24,5A4.505,4.505,0,0,0,19.5.5Zm0,6A1.5,1.5,0,1,1,21,5,1.5,1.5,0,0,1,19.5,6.5Z />
                                    <path
                                        d=M17.187,14.643l-7.2,6.22a1,1,0,0,0,1.307,1.514l7.2-6.221a1,1,0,1,0-1.306-1.513Z />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        



































        <div id="rev_slider_4_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container slide-overlay" data-alias="classic4export" data-source="gallery">

            <!-- START REVOLUTION SLIDER 5.4.8 auto mode -->
            <div id="rev_slider_4_1" class="rev_slider fullwidthabanner rev_slider_4_1_height" data-version="5.4.8.1">
                
                <ul>    <!-- SLIDE  -->
                    <li data-index="rs-24" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="site/images/slides/slider-mainbg-005.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="site/images/slides/slider-mainbg-005.jpg"  alt="" title="Home 3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <a class="tp-caption tp-resizeme ttm-video-play-btn ttm_prettyphoto" href="../../../www.youtube.com/watcheb8f.html" target="_self" id="slide-6-layer-1" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-135','-135','-101','-85']" 
                            
                            data-fontsize="['14','14','14','11']"
                            data-lineheight="['48','48','48','35']"
                            data-width="['48','48','48','35']"
                            data-height="['48','48','48','35']"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-actions=''
                            data-responsive_offset="on" 
                            data-frames='[{"delay":150,"speed":500,"frame":"0","from":"z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','center','center']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            ><div class="ttm-popup-video"><i class="fa fa-play"></i></div></a>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption tp-resizeme" 
                            
                            id="slide-6-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','-628','-684']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-86','-86','-116','46']" 
                            
                            data-fontsize="['14','14','12','11']"
                            data-lineheight="['14','14','14','14']"
                            data-fontweight="['600','600','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":280,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >BUSINESS CONSULTING </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption tp-resizeme" 
                            id="slide-6-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['308','308','-37','-34']" 
                            
                            data-fontsize="['60','60','50','40']"
                            data-lineheight="['75','75','75','60']"
                            data-fontweight="['700','700','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":440,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >It’s Our Business </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption tp-resizeme" 
                            id="slide-6-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['376','376','24','15']" 
                            
                            data-fontsize="['60','60','50','40']"
                            data-lineheight="['75','75','75','60']"
                            data-fontweight="['700','700','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":600,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >To Know Yours </div>

                        <!-- LAYER NR. 5 -->
                        <a class="tp-caption skin-flat-button tp-resizeme" href="#" target="_self" id="slide-6-layer-5" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['137','137','108','84']" 
                            
                            data-fontsize="['13','13','12','11']"
                            data-lineheight="['13','13','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-actions=''
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1000,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[16,16,14,12]"
                            data-paddingright="[35,35,30,25]"
                            data-paddingbottom="[16,16,14,12]"
                            data-paddingleft="[35,35,30,25]"
                            >CONTACT US </a>
                    </li>
                    <!-- SLIDE  -->
                    <li data-index="rs-25" data-transition="fade" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300"  data-thumb="site/images/slides/slider-mainbg-006.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">
                        <!-- MAIN IMAGE -->
                        <img src="site/images/slides/slider-mainbg-006.jpg"  alt="" title="Home 3"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina>
                        <!-- LAYERS -->

                        <!-- LAYER NR. 6 -->
                        <div class="tp-caption tp-resizeme fullscreenvideo tp-videolayer" 
                            id="slide-7-layer-1" 
                            data-x="0" 
                            data-y="0" 
                            
                            data-whitespace="nowrap"
                            data-type="video" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-videocontrols="none" 
                            data-videowidth="100%" 
                            data-videoheight="100%" 
                            data-videomp4="https://media.istockphoto.com/videos/in-the-office-closeup-on-hands-of-businesswoman-and-businessman-while-video-id924735634" 
                            data-videopreload="auto" 
                            data-videoloop="loopandnoslidestop" 
                            data-forceCover="1" 
                            data-aspectratio="16:9"   
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            data-autoplay="on" 
                            data-volume="100"
                            > </div>

                        <!-- LAYER NR. 7 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme dark-overlay" 
                            id="slide-7-layer-2" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['-1','-1','-1','-1']" 
                            
                            data-width="2000"
                            data-height="1200"
                            data-whitespace="nowrap"
                            data-type="shape" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":10,"speed":300,"frame":"0","from":"opacity:0;","to":"o:1;","ease":"Power3.easeInOut"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            > </div>

                        <!-- LAYER NR. 8 -->
                        <div class="tp-caption tp-resizeme" 
                            id="slide-7-layer-3" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['189','189','-82','-63']" 
                            
                            data-fontsize="['60','60','50','40']"
                            data-lineheight="['75','75','75','60']"
                            data-fontweight="['700','700','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":440,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >Professional </div>

                        <!-- LAYER NR. 9 -->
                        <div class="tp-caption tp-resizeme" 
                            id="slide-7-layer-4" 
                            data-x="['center','center','center','center']" data-hoffset="['5','5','0','0']" 
                            data-y="['top','top','middle','middle']" data-voffset="['261','261','-16','-16']" 
                           
                            data-fontsize="['60','60','50','40']"
                            data-lineheight="['75','75','75','60']"
                            data-fontweight="['700','700','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":530,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >Business Consulting </div>

                        <!-- LAYER NR. 10 -->
                        <div class="tp-caption tp-resizeme" 
                            id="slide-7-layer-5" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','-763','-1154']" 
                            data-y="['top','top','middle','middle']" data-voffset="['347','347','-60','40']" 
                            
                            data-fontsize="['17','17','15','40']"
                            data-lineheight="['26','26','15','60']"
                            data-fontweight="['400','400','700','700']"
                            data-color="['rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)','rgb(255,255,255)']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="text" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":600,"speed":800,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['center','center','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            >Comprehensive financial advice and financial services that are <br>tailored to meet your individual needs. </div>

                        <!-- LAYER NR. 11 -->
                        <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme border-white" 
                            id="slide-7-layer-6" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','-716','-716']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['65','65','18','18']" 
                            
                            data-width="58"
                            data-height="2"
                            data-whitespace="nowrap"
                            data-visibility="['on','on','off','off']"
                            data-type="shape" 
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1110,"speed":400,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[0,0,0,0]"
                            data-paddingright="[0,0,0,0]"
                            data-paddingbottom="[0,0,0,0]"
                            data-paddingleft="[0,0,0,0]"
                            > </div>

                        <!-- LAYER NR. 12 -->
                        <a class="tp-caption skin-flat-button tp-resizeme" href="#" target="_self" 
                            id="slide-7-layer-7" 
                            data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                            data-y="['middle','middle','middle','middle']" data-voffset="['141','141','73','51']" 
                            
                            data-fontsize="['13','13','12','11']"
                            data-lineheight="['13','13','12','11']"
                            data-fontweight="['700','700','700','700']"
                            data-width="none"
                            data-height="none"
                            data-whitespace="nowrap"
                            data-type="text" 
                            data-actions=''
                            data-responsive_offset="on" 
                            data-frames='[{"delay":1060,"speed":500,"frame":"0","from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","to":"o:1;","ease":"Power0.easeIn"},{"delay":"wait","speed":300,"frame":"999","to":"opacity:0;","ease":"Power3.easeInOut"}]'
                            data-textAlign="['inherit','inherit','inherit','inherit']"
                            data-paddingtop="[16,16,14,12]"
                            data-paddingright="[35,35,30,25]"
                            data-paddingbottom="[16,16,14,12]"
                            data-paddingleft="[35,35,30,25]"
                            >CONTACT US </a>
                    </li>
                </ul>
            </div>
        </div>
       <!-- END REVOLUTION SLIDER -->

    <!--site-main start-->
    <div class="site-main">

        <!-- row-top-section -->
        <section class="ttm-row row-top-section clearfix">
            <div class="container-fluid">
                <div class="row no-gutters box-shadow mb-10">
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style5">
                            <div class="featured-icon"><!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                    <i class="ti ti-bar-chart"></i>
                                </div>
                            </div><!-- featured-icon -->
                            <div class="featured-content"><!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Accounting</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our audit utility bills for small businesses to major auditing like they’reenjoying the fruits of labor.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="#">READ MORE</a>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style5">
                            <div class="featured-icon"><!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                    <i class="ti ti-ink-pen"></i>
                                </div>
                            </div><!-- featured-icon -->
                            <div class="featured-content"><!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Business</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our audit utility bills for small businesses to major auditing like they’reenjoying the fruits of labor.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="#">READ MORE</a>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style5">
                            <div class="featured-icon"><!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                    <i class="ti ti-write"></i>
                                </div>
                            </div><!-- featured-icon -->
                            <div class="featured-content"><!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Accounting</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>Our audit utility bills for small businesses to major auditing like they’reenjoying the fruits of labor.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="#">READ MORE</a>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box end-->
                    </div>
                    <div class="col-md-6 col-lg-3 col-sm-6">
                        <!--featured-icon-box-->
                        <div class="featured-icon-box style5">
                            <div class="featured-icon"><!-- featured-icon-->
                                <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg"> 
                                    <i class="ti ti-shine"></i>
                                </div>
                            </div><!-- featured-icon -->
                            <div class="featured-content"><!-- featured-content -->
                                <div class="featured-title">
                                    <h5>Free Consult?</h5>
                                </div>
                                <div class="featured-desc">
                                    <p>If you’re our lucky customer of the week then any interested person can get free provided services.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="#">READ MORE</a>
                                </div>
                            </div><!-- featured-content -->
                        </div><!-- featured-icon-box end-->
                    </div>
                </div>
            </div>
        </section>
        <!-- row-top-section -->

        <!-- about-section -->
        <section class="ttm-row about3-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper ttm-991-center">
                                <img class="img-fluid" src="site/images/single-img-six.png" title="single-img-six" alt="single-img-six">
                            </div><!-- ttm_single_image-wrapper end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="pl-35 res-991-pl-0 res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>ABOUT CONSULTANCY</h5>
                                    <h2 class="title">We work with you to address your most critical business priorities</h2>
                                </div>
                                <div class="title-desc">We focus on delivering quantifiable results for our customers, based on a well-tested methodology and solid experience. But of course, this only works because of our close business, taking time to applying our expertise and transferring skills within your own organization.</div>
                                <div class="title-desc">Our Business consulting services focus on our clients’ most critical issues and opportunities. Like, strategy, marketing, organization, operations, technology, transformation, digital, advanced analytics, corporate and finance, mergers &amp; acquisitions and sustainability across all industries and geographies. We bring deep, are known of any organization.</div>
                            </div><!-- section title end -->
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mt-25" href="#">view more Details</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->
        
        <!-- services-section -->
        <section class="ttm-row services2-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-2 col-sm-2"></div>
                    <div class="col-lg-6 col-md-8 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>OUR SERVICES</h5>
                                <h2 class="title">What We are Offering to customers</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-2"></div>
                </div>
                <div class="row">
                    <div class="services-slide owl-carousel owl-theme owl-loaded mt-5" data-item="3" data-nav="false" data-dots="false" data-auto="false">
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/13.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-shield"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="analytics-solutions.html" tabindex="-1">Analytics Solutions</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>We are in charge of, to increase of a  consumer brand awareness and the revenue.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="analytics-solutions.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/14.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="business-growth.html" tabindex="-1">Business Growth</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>To implement future-oriented logistics strategies leading companies in all industries.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="business-growth.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/15.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-envelope"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="advance-reports.html" tabindex="-1">Advance Reports</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Concerned with a variety of forms of company financing, aspects of the reorganization.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="advance-reports.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/16.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-bar-chart"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="corporate-finanace.html" tabindex="-1">Corporate Finanace</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Concerned with a variety of forms of company financing, aspects of the reorganization.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="corporate-finanace.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/17.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-briefcase"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="chain-management.html" tabindex="-1">Chain Management</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>To implement future-oriented logistics strategies leading companies in all industries.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="chain-management.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                        <!-- featured-imagebox -->
                        <div class="featured-imagebox ttm-bgcolor-white box-shadow mb-20">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/blog/18.jpg" alt="">
                            </div>
                            <div class="ttm-box-bottom-content">
                                <div class="featured-icon"><!-- featured-icon-->
                                    <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-md"> 
                                        <i class="ti ti-server"></i>
                                    </div>
                                </div>
                                <div class="featured-title featured-title"><!-- featured-title-->
                                    <h5><a href="advanced-analytics.html" tabindex="-1">Advanced Analytics</a></h5>
                                </div>
                                <div class="featured-desc"><!-- featured-desc-->
                                    <p>Concerned with a variety of forms of company financing, aspects of the reorganization.</p>
                                    <a class="ttm-btn ttm-btn-size-sm ttm-btn-color-darkgrey btn-inline" href="advanced-analytics.html">READ MORE</a>
                                </div>
                            </div>
                        </div><!-- featured-imagebox end-->
                    </div>
                </div><!-- row end -->

            </div>
        </section>
        <!-- services-section end -->

        <!-- row-title-section -->
        <section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 row-title2-section clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-2 col-sm-1"></div>
                    <div class="col-md-8 col-sm-10">
                        <div class="row-title text-center">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>WE MAKE A DIFFERENCE</h5>
                                    <h2 class="title">Implementing High Technology Solutions</h2>
                                </div>
                            </div><!-- section title end -->
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-1"></div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center mt-20">
                            <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-bgcolor-skincolor mb-20" href="#">view more services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- row-title-section end -->

        <!-- broken-section -->
        <section class="ttm-row broken-section ttm-bgcolor-grey clearfix">
            <div class="container">
                <div class="row no-gutters">
                    <div class="col-lg-6 col-sm-12">
                        <div class="position-relative skin-border text-left">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper with-top-border w100 mt_12">
                                <img class="img-fluid" src="site/images/single-img-seven.jpg" title="single-img-seven" alt="single-img-seven">
                            </div><!-- ttm_single_image-wrapper end -->
                            <div class="ttm-video-btn ttm-top-center-video-btn">
                                <a class="ttm-play-btn ttm_prettyphoto" href="../../../www.youtube.com/watcheb8f.html">
                                    <span class="ttm-video-btn-play"><i class="fa fa-play"></i></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-12">
                        <!--  -->
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-white spacing-1 z-1">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title clearfix">
                                    <div class="title-header">
                                        <h5>WHO WE ARE</h5>
                                        <h2 class="title">We creating solutions for your organization &amp; Business</h2>
                                    </div>
                                </div><!-- section title end -->
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-consulting"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Protect your business</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Avoid Revealing Apply for, Provisional Patent, Trademark Your Name, Follow Your Instincts.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-research"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Optimize Your Systems</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>By dealing with data, select tools that help you automate time-consuming processes.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-viral-marketing"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Empower your employees</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Like, To empower, Listen them, believe in them, praise them, etc.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end -->
                                <div class="separator">
                                    <div class="sep-line dashed mb-25"></div>
                                </div>
                                <!-- featured-icon-box -->
                                <div class="featured-icon-box style4 left-icon icon-align-top">
                                    <div class="featured-icon">
                                        <div class="ttm-icon ttm-icon_element-color-skincolor ttm-icon_element-size-lg">
                                            <i class="flaticon flaticon-idea-1"></i>
                                        </div>
                                    </div>
                                    <div class="featured-content">
                                        <div class="featured-title">
                                            <h5>Valuable ideas</h5>
                                        </div>
                                        <div class="featured-desc">
                                            <p>Strategic initiatives – all ideas welcome rather it’s by our employees or client.</p>
                                        </div>
                                    </div>
                                </div><!-- featured-icon-box end -->
                            </div>
                        </div><!--  -->
                    </div>
                </div>
            </div>
        </section>
        <!-- broken-section -->

        <!-- tab-section -->
        <section class="ttm-row tab-section bg-img7 ttm-bgcolor-skincolor clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center ttm-textcolor-white with-desc clearfix">
                            <div class="title-header">
                                <h5 class="ttm-textcolor-white">WHAT WE OFFER FOR YOU</h5>
                                <h2 class="title">Here Are Some Major Milestones</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>
                <div class="row tab-row">
                    <div class="col-lg-12">
                        <div class="ttm-tabs text-center ttm-tab-style-classic">
                            <ul class="tabs mb-20"><!-- tabs -->
                                <li class="tab active"><a href="#"> <i class="fa fa-floppy-o"></i> Overview </a></li>
                                <li class="tab"><a href="#"> <i class="fa fa-floppy-o"></i> Curriculam </a></li>
                                <li class="tab"><a href="#"> <i class="fa fa-floppy-o"></i> Teachers </a></li>
                                <li class="tab"><a href="#"> <i class="fa fa-floppy-o"></i> Reviews </a></li>
                            </ul><!-- tabs end-->
                            <div class="content-tab ttm-bgcolor-white width-100"><!--content-tabs -->
                                <!-- content-inner -->
                                <div class="content-inner active">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- content-inner -->
                                <!-- content-inner -->
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- content-inner -->
                                <!-- content-inner -->
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- content-inner -->
                                <!-- content-inner -->
                                <div class="content-inner">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-dark">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-skincolor"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- content-inner -->
                            </div><!--content-tabs end-->
                        </div>
                    </div>
                </div>
                <div class="row panel-row">
                    <div  id="accordion" class="panel-group width-100">
                        <!-- ttm-panel -->
                        <div class="ttm-panel panel panel-default ttm-tabs-style-classic">
                            <div class="panel-heading"><!-- panel-heading -->
                                <h4 class="panel-title"><!-- panel-heading -->
                                  <a data-toggle="collapse" href="#collapse1" data-parent="#accordion"><i class="fa fa-floppy-o"></i><span>Overview</span></a>
                                </h4>
                            </div>
                            <div id="collapse1" class="panel-collapse collapse in ttm-textcolor-white">
                                <div class="panel-body"><!-- panel-body -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- panel-body end-->
                            </div>
                        </div><!-- ttm-panel end -->
                        <!-- ttm-panel -->
                        <div class="ttm-panel panel panel-default ttm-tabs-style-classic">
                            <div class="panel-heading"><!-- panel-heading -->
                                <h4 class="panel-title"><!-- panel-heading -->
                                  <a data-toggle="collapse" href="#collapse2" data-parent="#accordion"><i class="fa fa-floppy-o"></i><span>Curriculam</span></a>
                                </h4>
                            </div>
                            <div id="collapse2" class="panel-collapse collapse in ttm-textcolor-white">
                                <div class="panel-body"><!-- panel-body -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/mages/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- panel-body end-->
                            </div>
                        </div><!-- ttm-panel end -->
                        <!-- ttm-panel -->
                        <div class="ttm-panel panel panel-default ttm-tabs-style-classic">
                            <div class="panel-heading"><!-- panel-heading -->
                                <h4 class="panel-title"><!-- panel-heading -->
                                  <a data-toggle="collapse" href="#collapse3" data-parent="#accordion"><i class="fa fa-floppy-o"></i><span>Teachers</span></a>
                                </h4>
                            </div>
                            <div id="collapse3" class="panel-collapse collapse in ttm-textcolor-white">
                                <div class="panel-body"><!-- panel-body -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- panel-body end-->
                            </div>
                        </div><!-- ttm-panel end -->
                        <!-- ttm-panel -->
                        <div class="ttm-panel panel panel-default ttm-tabs-style-classic">
                            <div class="panel-heading"><!-- panel-heading -->
                                <h4 class="panel-title"><!-- panel-heading -->
                                  <a data-toggle="collapse" href="#collapse4" data-parent="#accordion"><i class="fa fa-floppy-o"></i><span>Reviews</span></a>
                                </h4>
                            </div>
                            <div id="collapse4" class="panel-collapse collapse in ttm-textcolor-white">
                                <div class="panel-body"><!-- panel-body -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="grey-border pr-5 res-991-pr-0">
                                                <!-- ttm_single_image-wrapper -->
                                                <div class="ttm_single_image-wrapper with-border15">
                                                    <img class="img-fluid" src="site/images/single-img-eight.jpg" title="single-img-eight" alt="single-img-eight">
                                                </div><!-- ttm_single_image-wrapper end -->
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <!-- section title -->
                                            <div class="text-left pl-15 pt-18 res-991-pl-0">
                                                <!-- section title -->
                                                <div class="section-title clearfix">
                                                    <div class="title-header">
                                                        <h3 class="title">Reason to Reject following Drawbacks</h3>
                                                    </div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">To obtain higher performance, our leaders first identify the critical obstacles to forward to overcome the loss. We define our company’s mission &amp; Prioritize company objectives</p></div>
                                                    <div class="title-desc"><p class="ttm-textcolor-white">Sometimes you get into it for the wrong reasons, &amp; eventually, it hits you on the face. These reasons can be a drawback but an eye-opener.</p></div>
                                                </div><!-- section title end -->
                                                <ul class="ttm-list ttm-list-textsize-medium ttm-list-style-icon pt-15">
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Clients are always right, except when they are wrong</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">You’re worth every penny, so show it</span></li>
                                                    <li><i class="fa fa-arrow-circle-right ttm-textcolor-white"></i><span class="ttm-list-li-content">Running out of money can be a good sign </span></li>
                                                </ul>
                                            </div><!-- section title end -->
                                        </div>
                                    </div><!-- row end -->
                                </div><!-- panel-body end-->
                            </div>
                        </div><!-- ttm-panel end -->
                    </div>
                </div>
            </div>
        </section>
        <!-- tab-section -->

        <!-- team-section -->
        <section class="ttm-row ttm-bg ttm-bgimage-yes bg-img3 team-section clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>OUR TEAM MEMBER</h5>
                                <h2 class="title">Discover our team and experts</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                    <div class="col-md-3 col-sm-2"></div>
                </div>
                <!-- row -->
                <div class="row">
                    <div class="wrap-team team-slide owl-carousel" data-item="3" data-nav="false" data-dots="false" data-auto="true">
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/team-member/team-img01.jpg" alt="image">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Amelia Daniel</a></h5>
                                </div>
                                <p class="category">Chairman and founder</p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/team-member/team-img02.jpg" alt="image">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Alex Mason</a></h5>
                                </div>
                                <p class="category">Visual Media</p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/team-member/team-img03.jpg" alt="image">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Michael Harper</a></h5>
                                </div>
                                <p class="category">Sales Manager </p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/team-member/team-img04.jpg" alt="image">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Jhon Martin</a></h5>
                                </div>
                                <p class="category">Chairman and founder</p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                        <!-- featured-imagebox-team -->
                        <div class="featured-imagebox featured-imagebox-team">
                            <div class="featured-thumbnail">
                                <img class="img-fluid" src="site/images/team-member/team-img05.jpg" alt="image">
                                <div class="ttm-social-links-wrapper">
                                    <ul class="social-icons list-inline">
                                        <li class="social-facebook"><a class="tooltip-top" target="_blank" href="#" data-tooltip="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                        <li class="social-twitter"><a class=" tooltip-top" target="_blank" href="#" data-tooltip="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                    </ul>
                                </div>
                            </div> 
                            <div class="featured-content featured-content-team">
                                <div class="featured-title">
                                    <h5><a href="team-details.html">Evelyn Jackson</a></h5>
                                </div>
                                <p class="category">Visual Media</p>
                            </div>
                        </div><!-- featured-imagebox-team end-->
                    </div>
                </div><!-- row end -->
            </div>
        </section>
        <!-- team-section end -->

        <!-- chart-section -->
        <section class="ttm-row ttm-bgcolor-darkgrey ttm-bg ttm-bgimage-yes bg-img2 chart-section clearfix">
            <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="position-relative text-center">
                            <!-- ttm_single_image-wrapper -->
                            <div class="ttm_single_image-wrapper ttm-991-center">
                                <img class="img-fluid" src="site/images/single-img-nine.png" title="single-img-nine" alt="single-img-nine">
                            </div><!-- ttm_single_image-wrapper end -->
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="res-991-mt-30">
                            <!-- section title -->
                            <div class="section-title clearfix">
                                <div class="title-header">
                                    <h5>STRATEGY DEVELOPMENT</h5>
                                    <h2 class="title">A World Class <br> Consulting Solutions</h2>
                                </div>
                                <div class="title-desc">To obtain higher performance, Our leaders first identify the critical oefine your company mission and prioritize company objectives.</div>
                            </div><!-- section title end -->
                            <div class="width-70 position-relative pull-left mt-20">
                                <canvas id="myChart" width="316" height="316"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- chart-section end -->

        <!-- pricing-plan-section -->
        <section class="ttm-row pricing-plan-section clearfix">
            <div class="container">
                <div class="row">
                <div class="col-md-3 col-sm-2"></div>
                    <div class="col-md-6 col-sm-8">
                        <!-- section title -->
                        <div class="section-title text-center with-desc clearfix">
                            <div class="title-header">
                                <h5>OUR PRICING PLANS</h5>
                                <h2 class="title">Choose Your Affordable Pricing plans.</h2>
                            </div>
                        </div><!-- section title end -->
                    </div>
                 <div class="col-md-3 col-sm-2"></div>
                </div>
                
                
            </div>
        </section>
        
          
    </div><!--site-main end-->






































        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
    </main>

@endsection
@section('CSSJS')
    <link rel="stylesheet" href="/site/css/card-slide.css">
@endsection
