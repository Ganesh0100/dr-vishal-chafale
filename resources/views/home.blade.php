@php($title = "Dr. Vishal Chafale: Interventional Neurologist in Navi Mumbai")
@section('meta_desc')Experience advanced neurological care with Dr. Vishal Chafale, Interventional Neurologist in Navi Mumbai. Benefit from his expert interventions and personalized treatment plans. Schedule your consultation today!@endsection
@extends('layouts.default')

@section('content')

<div class="up">
    <a href="#" class="scrollup text-center"><i class="fas fa-chevron-up"></i></a>
</div>



<!--mobile-view-->

	<section class="mobile---view">
<!---->
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
        <a href="{{ route('contact')}}">
      <img src="{{ asset('/resources/assets/images/mobile-banners/mobile-banner-1.png'); }}" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
             <a href="{{ route('contact')}}">
      <img src="{{ asset('/resources/assets/images/mobile-banners/mobile-banner-2.png'); }}" class="d-block w-100" alt="..."></a>
    </div>
    <div class="carousel-item">
          <a href="{{ route('contact')}}">
      <img src="{{ asset('/resources/assets/images/mobile-banners/mobile-banner-3.png'); }}" class="d-block w-100" alt="..."></a>
    </div>
 
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>
<!--mobile-view end-->
<!-- Start of Slider section
	============================================= -->
	
	<section class="desk---view">
    <rs-module-wrap id="rev_slider_27_1_wrapper" class="banner-top" data-alias="slider-7" data-source="gallery" style="visibility:hidden;padding-top:30px;background:transparent;padding:0;margin:0px auto;margin-bottom:0;">
    <rs-module id="rev_slider_27_1" style="" data-version="6.5.8">
        <rs-slides>
            <rs-slide style="position: absolute;" data-key="rs-72" data-title="Slide" data-thumb="{{ asset('/resources/assets/slider-1-2-50x100.jpg'); }}" data-in="o:0;" data-out="a:false;">

                <img style="z-index:999"; src="{{ asset('/resources/assets/images/banners/dr-vishal-chafale-porfile.png'); }}" title="slider-1" width="100%" height="100%" class="rev-slidebg tp-rs-img" data-parallax="3" data-panzoom="d:10000;ss:100;se:100%;">

                <rs-layer id="slider-27-slide-72-layer-0" data-type="image" data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:-2;"><img src="{{ asset('/resources/assets/images/banners/banner-shape.png'); }}" alt="" class="tp-rs-img" width="1903" height="901" data-c="cover-proportional" data-no-retina>
                </rs-layer>

                <div class="bg-dark">
                    <rs-layer id="slider-27-slide-72-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:10px,12px,9px,5px;yo: 250px,280px,212px,124px;" data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;" data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Poppins'; ">Dr. Vishal Chafale
                    </rs-layer>

                    <rs-layer id="slider-27-slide-72-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:350px,445px,338px,219px;" data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:-2;;font-family:'Roboto';">
                        <span class="sub--heading">
                            <h3>Consultant Interventional Neurologist<h3><br>
                            <ul class="banner-degree">
                            <i class="fa-solid fa-circle-chevron-right"></i>
                            <li>&nbsp;M.B.B.S.</li> <br>
                            <i class="fa-solid fa-circle-chevron-right"></i><li>&nbsp;M.D. in Internal Medicine </li><br>
                            <i class="fa-solid fa-circle-chevron-right"></i><li>&nbsp;DNB in Neurology </li><br>
                            <i class="fa-solid fa-circle-chevron-right"></i><li>&nbsp;Fellowship in Interventional Neurology</li><br>
                            <i class="fa-solid fa-circle-chevron-right"></i><li>&nbsp;DNB in Neurology</li> <br>
                            <i class="fa-solid fa-circle-chevron-right"></i><li>&nbsp;Consultant Neurologist & Stroke Specialist</li>
                              </ul>
                            
                            
                            </span>

                    </rs-layer>

                    <a id="slider-27-slide-72-layer-5" class="rs-layer rev-btn " href="{{ route('contact')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:-80px,194px,147px,138px;yo:300px,512px,389px,275px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:291px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;" style="z-index:12;width: 293px!important;background-color:#00044b;font-family:'Poppins'; margin-top:30px" class="top-set" >Book an Appointment
                    </a>


                    <a  id="slider-27-slide-72-layer-6" class="rs-layer rev-btn " href="{{ route('contact')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:-300px,12px,9px,5px;yo:300px,512px,389px,274px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;" style="z-index:11;background-color:#00044b;font-family:'Poppins';margin-top:30px"  class="top-set" >Contact
                    </a>

                </div>

            </rs-slide>

            <rs-slide style="position: absolute;" data-key="rs-70" data-title="Slide" data-thumb="{{ asset('/resources/assets/slider-1-50x100.jpg'); }}" data-in="o:0;" data-out="a:false;">


                <img  src="{{ asset('/resources/assets/images/banners/banner-imag-1.png'); }}" alt="Image" title="slider-1" width="1614" height="908" class="rev-slidebg tp-rs-img" data-parallax="3" data-panzoom="d:10000;ss:100;" data-no-retina>


                <rs-layer id="slider-27-slide-70-layer-0" data-type="image" data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:-2;;"><img src="{{ asset('/resources/assets/images/banners/banner-shape.png'); }}" alt="" class="tp-rs-img" width="1903" height="901" data-c="cover-proportional" data-no-retina>
                </rs-layer>
                <rs-layer id="slider-27-slide-70-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:340px,280px,212px,124px;" data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;" data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Poppins';">Interventional<br>Neurology 
                </rs-layer>

                <rs-layer id="slider-27-slide-70-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo: 530px,445px,338px,219px;" data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';margin:0px;"> <span class="sub-text-banner">Offering Minimally Invasive Treatment </span> <br> <br> For neurological conditions using advanced imaging and <br> catheter-based techniques.</rs-layer>

                <a id="slider-27-slide-70-layer-5" class="rs-layer rev-btn" href="{{ route('about')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:235px,194px,147px,138px;yo:650px,512px,389px,275px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;" style="z-index:12;background: linear-gradient(62deg, rgb(27 86 136) 23%, rgb(10 34 97) 72%);font-family:'Poppins';">About Us
                </a>
                <a id="slider-27-slide-70-layer-6" class="rs-layer rev-btn" href="{{ route('contact')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:650px,512px,389px,274px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;" style="z-index:11;background: linear-gradient(62deg, rgb(27 86 136) 23%, rgb(10 34 97) 72%);font-family:'Poppins';">Consult Now
                </a>
            </rs-slide>




            <rs-slide style="position: absolute;" data-key="rs-73" data-title="Slide" data-thumb="{{ asset('/resources/assets/slider-1-50x100.jpg'); }}" data-in="o:0;" data-out="a:false;">

                <img src="{{ asset('/resources/assets/images/banners/banner-3.png'); }}" alt="Image" title="slider-1" width="800" height="800" class="rev-slidebg tp-rs-img" data-parallax="1" data-panzoom="d:10000;ss:100;se:100%;" data-no-retina>

                <rs-layer id="slider-27-slide-73-layer-0" data-type="image" data-rsp_ch="on" data-text="w:normal;s:20,16,12,7;l:0,20,15,9;" data-dim="w:['100%','100%','100%','100%'];h:['100%','100%','100%','100%'];" data-basealign="slide" data-frame_999="o:0;st:w;" style="z-index:-2;;"><img src="{{ asset('/resources/assets/images/banners/banner-shape.png'); }}" alt="" class="tp-rs-img" width="1903" height="901" data-c="cover-proportional" data-no-retina>
                </rs-layer>


                <rs-layer id="slider-27-slide-73-layer-1" data-type="text" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:340px,280px,212px,124px;" data-text="w:normal;s:72,59,44,40;l:80,66,50,40;fw:700;" data-frame_0="o:1;" data-frame_0_chars="d:5;o:0;rX:-90deg;oZ:-50;" data-frame_1="sp:1750;" data-frame_1_chars="e:power4.inOut;d:10;oZ:-50;" data-frame_999="o:0;st:w;" style="z-index:9;font-family:'Poppins';">Don’t Suffer in <br />Silence

                </rs-layer>
                <rs-layer id="slider-27-slide-73-layer-2" data-type="text" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:535px,445px,338px,219px;" data-text="w:normal;s:18,14,16,16;l:25,20,20,20;fw:500;" data-frame_0="x:-100%;" data-frame_0_mask="u:t;" data-frame_1="e:power4.inOut;st:1000;sp:1300;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" style="z-index:10;font-family:'Roboto';"><span class="sub-heading">Take Action Against Neurological Suffering </span>
                </rs-layer>
                <a id="slider-27-slide-73-layer-5" class="rs-layer rev-btn" href="{{ route('about')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:235px,194px,147px,138px;yo:620px,512px,389px,275px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:175%;o:1;" data-frame_0_mask="u:t;x:-100%;" data-frame_1="e:power3.out;st:1500;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;" style="z-index:12;background-color:#00044b;font-family:'Poppins';">About Us
                </a>
                <a id="slider-27-slide-73-layer-6" class="rs-layer rev-btn" href="{{ route('eeg')}}" target="_blank" rel="noopener" data-type="button" data-rsp_ch="on" data-xy="xo:15px,12px,9px,5px;yo:620px,512px,389px,274px;" data-text="w:normal;s:18,14,10,14;l:52,42,31,40;fw:500;a:center;" data-dim="w:200px,165px,125px,120px;h:55px,45px,34px,45px;minh:0px,none,none,none;" data-padding="r:40,33,25,15;l:40,33,25,15;" data-border="bos:solid;boc:#ffffff;bow:2px,2px,2px,2px;bor:3px,3px,3px,3px;" data-frame_0="x:-175%;o:1;" data-frame_0_mask="u:t;x:100%;" data-frame_1="e:power3.out;st:1200;sp:1000;" data-frame_1_mask="u:t;" data-frame_999="o:0;st:w;" data-frame_hover="bgc:#1c7aa2;"  style="z-index:11;background-color:#00044b;font-family:'Poppins';">Our Service
                </a>
            </rs-slide>



        </rs-slides>
    </rs-module>
</rs-module-wrap>
</section>
<!-- End of Slider section
	============================================= -->

<!-- about -->

<section class="ft1-welcome-section">
    <div class="pattern-layer" style="background-image:url(assets/images/background/pattern-1.png)"></div>
    <div class="container">
        <div class="inner-container">
            <div class="row">

                <!-- Image Column -->
                <div class="image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="image">
                            <img src="{{ asset('/resources/assets/images/about/dr-vishal-chafale-nurologist.jpg'); }}" alt="">
                            <div class="year-box">
                                <div class="box-inner">
                                    <span class="icon-set">
                                        <img class="exp-icon" src="{{ asset('/resources/assets/images/about/about-img-icon.png'); }}" alt="">
                                    </span>
                                    <strong>15+ Years</strong>
                                    of Experience
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Content Column -->
                <div class="content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <div class="sec-title">
                            <!-- <div class="title">Welcome Transportation Company</div> -->
                            <h2>Dr. Vishal Chafale</h2>
                            <h1>Consultant Interventional Neurologist in Navi Mumbai</h1>
                            <div class="degree--set">
                            <i class="fa-solid fa-angles-right"></i><h5>MBBS, MD (Medicine) </h5>
                            <i class="fa-solid fa-angles-right"></i><h5>DM, DNB (Neurology), MNAMS </h5>
                            <i class="fa-solid fa-angles-right"></i><h5>Fellowship in Interventional Neurology</h5>
                            <i class="fa-solid fa-angles-right"></i><h5>Consultant Neurologist & Stroke Specialist </h5>
                            </div>

                            <div class="text">Dr. Vishal Chafale is a Consultant and Interventional Neurologist based in Navi Mumbai. He earned his MBBS degree from GMC, Nagpur, and completed his postgraduation in Internal Medicine (MD) from SSMC, Rewa. Driven by a deep interest in the physiology and diseases of the brain, he pursued super-specialization in Neurology (DM-Neurology) at Bangur Institute Of Neurosciences, Kolkata—one of India's oldest and most esteemed neurology institutes.

                            </div>
                            <div class="text">During his tenure there, Dr. Chafale encountered a wide array of complex neurological disorders, gaining expertise in diagnosing and treating various neurological conditions. He furthered his qualifications by completing a DNB in Neurology from the National Board of Examinations, New Delhi.

                            </div>


                       
                        </div>
                        <!-- <ul class="list">
									<li>It is a long established fact that a reader</li>
									<li>Many desktop publishing packages</li>
									<li>Sometimes by accident, sometimes</li>
								</ul> -->
                        <div class="button-box">
                            <a href="{{ route('about')}}" class="theme-btn btn-style-three">Read More <span class="icon fas fa-angle-double-right"></span></a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- about end -->

<!-- Start of facilities section
	============================================= -->
<section id="ft-service-3" class="ft-service-section-3">
    <div class="container">
        <div class="ft-section-title-3 headline text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
            <!-- <span class="text-uppercase">We specialise in the transportation</span> -->
            <h2>Our Speciality</h2>
        </div>
        <div class="ft-service-content-3">
            <div class="ft-service-content-items-3">
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="{{ asset('/resources/assets/images/services/strock-image.jpg'); }}" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('/resources/assets/images/icons-img/brain-stroke.png'); }}" alt=""> <!-- <i class="flaticon-plane"></i> -->
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="{{ route('headaches')}}">Headache</a></h3>
                                    <p>Effective and comprehensive headache treatment options..</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="{{ route('stroke')}}">Read more &nbsp; <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="margin-set"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="200ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="{{ asset('/resources/assets/images/services/dementia-treatment-image.jpg'); }}" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('/resources/assets/images/icons-img/headache-icon.png'); }}" alt="">
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="{{ route('dementia')}}">Dementia</a></h3>
                                    <p>Effective solutions for dementia treatment.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="{{ route('dementia')}}">Read more &nbsp; <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="margin-set"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp " data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="{{ asset('/resources/assets/images/services/epilepsy-treatment-img.jpg'); }}" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('/resources/assets/images/icons-img/epilepsy-icon.png'); }}" alt="">
                                    <!-- <i class="flaticon-free-shipping"></i> -->
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="{{ route('epilepsy')}}">Epilepsy</a></h3>
                                    <p>Diagnosis and management of seizure disorders.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="{{ route('epilepsy')}}">Read more&nbsp; <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="margin-set"></div>
                    </div>

                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="{{ asset('/resources/assets/images/services/parkinson-disease.jpg'); }}" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('/resources/assets/images/icons-img/brain-stroke.png'); }}" alt="">
                                    <!-- <i class="flaticon-free-shipping"></i> -->
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="{{ route('parkinsons-disease')}}">Parkinsonism</a></h3>
                                    <p>Management of motor symptoms and non-motor symptoms.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="{{ route('parkinsons-disease')}}">Read more&nbsp; <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="margin-set"></div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        <div class="ft-service-innerbox-3 position-relative">
                            <div class="ft-service-img position-relative">
                                <img src="{{ asset('/resources/assets/images/services/vertigo-treatment-image.jpg'); }}" alt="">
                            </div>
                            <div class="ft-service-text-icon position-relative">
                                <div class="ft-service-icon d-flex align-items-center justify-content-center position-absolute">
                                    <img src="{{ asset('/resources/assets/images/icons-img/brain-stroke.png'); }}" alt="">
                                    <!-- <i class="flaticon-free-shipping"></i> -->
                                </div>
                                <div class="ft-service-text position-relative headline pera-content">
                                    <h3><a href="{{ route('vertigo')}}">Vertigo</a></h3>
                                    <p>Effective vertigo treatment for lasting relief.</p>
                                </div>
                            </div>
                            <div class="more-btn position-absolute">
                                <a class="d-flex align-items-center justify-content-center text-uppercase" href="{{ route('vertigo')}}">Read more&nbsp; <span class="icon fas fa-angle-double-right"></span></a>
                            </div>
                        </div>
                        <div class="margin-set"></div>
                    </div>
                </div>
            </div>
            <div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!-- <span>Our list of services does not end here. Find out how we can help you and your business.
                </span>  -->

                <a class="text-uppercase align-items-center justify-content-center d-flex" href="{{ route('stroke')}}" target="_blank">View More </a>
            </div>
        </div>
    </div>
</section>
<!-- End of facilities section
	============================================= -->



<!--Advanced Interventional Neurology Services-->
<section class="ft3-about-section">
		<div class="auto-container">
            <div class="interventional-neurology-head text-center">
                <h2>Interventional Neurology Services</h2>
                <h4>Advanced diagnostic testing and treatment of electrical activity disorders in the brain and nervous system.</h4>
            </div>
			<div class="row clearfix">
				
				<!-- Title Column -->
				<div class="title-column col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
					
      
						<div class="text"> <i class="fa-solid fa-circle-plus"></i> Celebral DSA</div>
						<div class="text"><i class="fa-solid fa-circle-plus"></i> Mechanical Thrombectomy</div>
						<div class="text"><i class="fa-solid fa-circle-plus"></i> Carotid Stenting</div>
						<div class="text"> <i class="fa-solid fa-circle-plus"></i> Intra Cranial Stenting</div>
					</div>
				</div>
				
				<!-- Image Column -->
				<div class="image-column col-lg-4 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="image">
							<img src="{{ asset('/resources/assets/images/banners/advanced-interventional-neurology.png'); }}" alt="">
						
						</div>
					</div>
				</div>
				
				<!-- Content Column -->
				<div class="title-column-set col-lg-4 col-md-6 col-sm-12">
					<div class="inner-column">
                    <div class="text"><i class="fa-solid fa-circle-plus"></i> Aneurysm Coiling</div>
						<div class="text"><i class="fa-solid fa-circle-plus"></i> Flow Diverter Stenting</div>
						<div class="text"><i class="fa-solid fa-circle-plus"></i> Embolisation</div>
						<div class="text"><i class="fa-solid fa-circle-plus"></i> Spinal DSA</div>
					</div>
				</div>
				
			</div>
			
		</div>
	</section>
<!--Advanced Interventional Neurology Services end-->


<!-- Services start -->
<section class="service-area">
    <div class="ft-section-title-3 headline text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">
        <!-- <span class="text-uppercase">We specialise in the transportation</span> -->
        <h2>Other Services</h2>
    </div>
    <div class="container">

        <div class="row">
            <!-- Service Block Three -->
            <div class="ft3-service-block-three  active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <div class="image-layer"></div>


                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer "><img src="{{ asset('/resources/assets/images/other-services/migrane-service-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">

                                </div> -->
                                <h5><a href="{{ route('migraine')}}">Migraine</a></h5>
                          
                                <div class="lower-text"> Diagnose, manage, reduce frequency, severity.</div>
                                <a href="{{ route('migraine')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Service Block Three -->
            <!-- Service Block Three -->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a>
							 -->
                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/other-services/Tremors-service-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('tremor')}}">Tremors</a></h5>
                                <div class="lower-text">Evaluate, treat, manage symptoms effectively.</div>
                                <a href="{{ route('tremor')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- Service Block Three -->
            <!-- Service Block Three -->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/other-services/neuropathy-service-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('neuropathy')}}">Neuropathy</a></h5>
                                <div class="lower-text">Diagnose, alleviate pain, improve function.</div>
                                <a href="{{ route('neuropathy')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Service Block Three -->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/other-services/myopathy-service-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('myopathy')}}">Myopathy</a></h5>
                                <div class="lower-text">Treat muscle weakness, enhance mobility.</div>
                                <a href="{{ route('myopathy')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Service Block Three -->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/other-services/demyelination-service-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('demyelination')}}">Demyelination</a></h5>
                                <div class="lower-text">Manage symptoms, slow disease progression.</div>
                                <a href="{{ route('demyelination')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Service Block Three -->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/other-services/spine-diasease-image.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('spine-diseases')}}">Spine diseases</a></h5>
                                <div class="lower-text">Evaluate, treat, restore spine function.</div>
                                <a href="{{ route('spine-diseases')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft-service-more-btn-set d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!-- <span>Our list of services does not end here. Find out how we can help you and your business.
                </span>  -->

                <a class="text-uppercase align-items-center justify-content-center d-flex" href="{{ route('services')}}" target="_blank">View More </a>
            </div>
        </div>
        <!-- Service Block Three -->


    </div>
</section>
<!-- Services start end -->


<!--petient education -->
<section class="service-area patient-education">
    <div class="ft-section-title-3 headline text-center wow fadeInUp  animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms;">


        <h2>Patient&nbsp;Education&nbsp;Videos</h2>
        
        <p>Quick Health Tips: Your Guide to Better Living</p>
    </div>
    <div class="container">
        <div class="petient-education">
            <div class="row">

                <div class="col-md-6 mt-30">

                       <iframe width="100%" height="315" src="https://www.youtube.com/embed/vxu3oROFJIc?si=CQpZEJZugIFpE5AW" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 mt-30">
                 <iframe width="100%" height="315" src="https://www.youtube.com/embed/xSkbEEcacy0?si=Aqt3TDukFBRISJZj" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 mt-30">
                    <iframe width="100%" height="315" src="https://www.youtube.com/embed/isX0SePEyz8?si=ZKAt1c8w7tQz1h51" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="col-md-6 mt-30">
                       <iframe width="100%" height="315" src="https://www.youtube.com/embed/F7_bXMqRa5E?si=og7etDwlAdG69Udn" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <!-- video btn -->
       

            <div class="ft-service-more-btn-set video-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp  animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms;">


                <a class="text-uppercase align-items-center justify-content-center d-flex" href="{{ route('patient-education')}}" target="_blank">View More </a>
            
        </div>
        <!-- video btn -->

    </div>
    </div>
    </div>



</section>
<!--petient education end-->

<!---new testimonial---->

<section class="ft1-testimonial-section">
    <div class="container">
    <div class="ft-section-title-3 headline text-center wow fadeInUp   animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms;">


        <h2>Testimonials</h2>
        
    
    </div>
       
        <div class="">
                <div class="row">


            <!--  -->
               <div class="col-md-4">
            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                <div class="ft1-testimonial-block">
                    <div class="inner-box">
                    <div class="author-info">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('/resources/assets/images/icons-img/google-icon.png'); }}" alt="">
                                </div>
                                <div class="review-name">
                                <h6>Shaloo Agarwal</h6>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                <i class="fa-solid fa-star"></i>
                                     </div>
                             
                            </div>
                        </div>
                        <div class="text">Dr. Vishal Chafale is an excellent doctor who respects his patients' choices, allowing them to get tests reports from any reputable lab or government medical college without insisting on specific places for tests or medications. He treats his patients with care and compassion, ensuring a comfortable and fear-free experience.</div>
                        
                    </div>
                </div>
            </div>   </div>
            <!--  -->
            <!--  -->
                  <div class="col-md-4">
            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                <div class="ft1-testimonial-block">
                    <div class="inner-box">
                   <div class="author-info">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('/resources/assets/images/icons-img/google-icon.png'); }}" alt="">
                                </div>
                                <div class="review-name">
                              <h6>Uzmah Nadkar</h6>
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                     </div>
                             
                            </div>
                        </div>
                        <div class="text">Excellent doctor my mother had a stroke dr Vishal took proper care of her and was apt with his treatment would definitely recommend. His treatment even after my mother’s discharge is very thorough👍🏻Do visit for all your neurological needs.</div>
                      
                    </div>
                </div>
            </div>
                </div>
            <!--  -->
      
                 <div class="col-md-4">
            <div class="owl-item" style="width: 370px; margin-right: 30px;">
                <div class="ft1-testimonial-block">
                    <div class="inner-box">
                       <div class="author-info">
                            <div class="author-inner">
                                <div class="author-image">
                                    <img src="{{ asset('/resources/assets/images/icons-img/google-icon.png'); }}" alt="">
                                </div>
                                <div class="review-name">
                              <h6>Rasika Mestry</h6>
                                <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i>
                                     </div>
                             
                            </div>
                        </div>
                        <div class="text">Best neorosurgeon in Navi Mumbai. He is having his clinic named Neoron in Seawoods. He is always available for his patients on call in case of emergency.For any neoro related problems visit his clinic. He will always makes you comfortable</div>
                      
                    </div>
                </div>
            </div>
                </div>
            <!--  -->
        </div>
        <div class="ft-service-more-btn-set video-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp   animated animated" data-wow-delay="600ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 600ms;">

                <a class="text-uppercase align-items-center justify-content-center d-flex" href="{{ route('patient-testimonial')}}" target="_blank">View More </a>
            
        </div>
         </div>
    </div>
</section>

<!---new testimonial---->



<!-- footer banner -->
<section class="footer-banner">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="footer-img">
                    <img class="footer-image" src="{{ asset('/resources/assets/images/banners/dr-vishal-chafale-footer-banner.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-7">
                <div class="text-overlay">
                    <h3>Take Charge of Your</h3>
                    <h2>Neurological Health</h2>
                    <p>Dr. Vishal Chafale provides expert care and support for understanding and managing neurological disorders, ensuring a high quality of life</p>
                    <div class="book-btn">
                        <a href="{{ route('contact')}}">Schedule a Consultation Today</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- footer banner end -->

<!--Hospital Attachment-->
<section class="ft3-services-section-four">
    
		<div class="auto-container">
		     <div class="ft-section-title-3 headline text-center wow fadeInUp   animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">


        <h2>Hospital&nbsp;Attachment</h2>
        
 
    </div>
    <div class="row d-flex justify-content-center">
		<div class="col-lg-4 d-flex">
						<div class="ft-team-personal-cta text-center" data-background="assets/img/bg/td-bg.png" style="background-image: url(&quot;assets/img/bg/td-bg.png&quot;);">
							<div class="ft-team-personal-cta-icon d-flex justify-content-center align-items-center">
								<img src="{{ asset('/resources/assets/images/logo/apollo-hospital-logo.png'); }}" alt="">
							</div>
							<div class="ft-team-personal-cta-text headline">
								<h3>Apollo Hospital, Navi Mumbai</h3>
								<div class="location-set">
								<i class="fa-solid fa-location-dot"></i></div>
								<span>Room No. 14, First Floor, Apollo Hospitals, Plot#13, Parsik Hill Rd, off Uran Road, Sector 23, CBD Belapur, Navi Mumbai, Maharashtra 400614.</span>
							
							</div>
						</div>
							</div>
							</div>
				
		</div>
	</section>
<!--Hospital Attachment end-->





<!--Blogs-->
<section class="blogs-area">
   <div class="container">
       	     <div class="ft-section-title-3 headline text-center wow fadeInUp   animated animated" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">

        <h2>Blogs</h2>
        
 
    </div>
      <div class="row">
         <div class="col-md-4">
            <div class="blog-contents">
               <img class="" src="{{ asset('/resources/assets/images/blogs/vertigo-giddiness-img.png'); }}" alt="">
               <div class="read-blog">
               <a class="blog-rm" href="{{ route('vertigo-giddiness')}}">Read More</a> 
               </div>
               <h3>VERTIGO GIDDINESS</h3>
               <p>Giddiness or lightheadedness, a very common symptom seen in practise...</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="blog-contents">
               <img src="{{ asset('/resources/assets/images/blogs/interventional-neurology-blog.png'); }}" alt="">
                <div class="read-blog">
                     <a class="blog-rm" href="{{ route('interventional-neurology')}}">Read More</a>
                      </div>
               <h3>INTERVENTIONAL NEUROLOGY</h3>
                <p>Interventional neurology refers to endovascular, catheter-based techniques....</p>
            </div>
         </div>
         <div class="col-md-4">
            <div class="blog-contents">
               <img src="{{ asset('/resources/assets/images/blogs/electroencephalography-blog.png'); }}" alt="">
               
                    <div class="read-blog">
                     <a class="blog-rm" href="{{ route('electroencephalography')}}">Read More</a>
                          </div>
               <h3>ELECTROENCEPHALOGRAPHY</h3>
               <p>Electroencephalography is the neurophysiologic measurement of the electrical activity...</p>
               
            </div>
         </div>
      </div>
       <div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                <!-- <span>Our list of services does not end here. Find out how we can help you and your business.
                </span>  -->

                <a class="text-uppercase align-items-center justify-content-center d-flex" href="{{ route('blogs')}}" target="_blank">View More </a>
            </div>
   </div>
</section>
<!--Blogs end-->

@stop