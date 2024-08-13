@php($title = "Neurology Services | Dr. Vishal Chafale Neurologist Navi Mumbai")
@section('meta_desc')Explore comprehensive neurology services with Dr. Vishal Chafale. Expert care for all neurological conditions in Navi Mumbai. Discover top-quality treatment options! @endsection

@extends('layouts.default')

@section('content')

<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg" style="background-image: url(&quot;assets/img/bg/bread-bg.jpg&quot;);">
	<span class="background_overlay"></span>
	<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
	<div class="container">
		<div class="ft-breadcrumb-content headline text-center position-relative">
			<h2>OUR SERVICES</h2>
			<div class="ft-breadcrumb-list ul-li">
				<ul>
					<li><a href="#">Home</a></li>
					<li>OUR SERVICES</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<!-- Services start -->
<section class="service-area">
    <!--<div class="ft-section-title-3 headline text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms" style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInUp;">-->
    
    <!--    <h2>Our Services</h2>-->
    <!--</div>-->
    <div class="container">

        <div class="row">
            <!-- Service Block Three -->
            <div class="ft3-service-block-three  active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <div class="image-layer"></div>


                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer "><img src="{{ asset('/resources/assets/images/all-services/stroke-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">

                                </div> -->
                                <h5><a href="{{ route('stroke')}}">Stroke and Neuro-intervention </a></h5>
                                <!--<div class="lower-text">Assessment of muscle and nerve function. </div>-->
                                <a href="{{ route('stroke')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
							<a href="#" class="read-more">Read More</a>
							 -->
                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/epilepsy-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('epilepsy')}}">Epilepsy </a></h5>
                                <!--<div class="lower-text">Assessment of muscle and nerve function.</div>-->
                                <a href="{{ route('epilepsy')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/headache-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('headaches')}}">Headache</a></h5>
                                <!--<div class="lower-text">Measurement of nerve impulse transmission.</div>-->
                                <a href="{{ route('headaches')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/migraine-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('migraine')}}">Migraine</a></h5>
                                <!--<div class="lower-text">Detailed imaging of the brain and spinal cord.</div>-->
                                <a href="{{ route('migraine')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/vertigo-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('vertigo')}}">Vertigo</a></h5>
                                <!--<div class="lower-text">Cross-sectional imaging of the brain.</div>-->
                                <a href="{{ route('vertigo')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/dementia-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('dementia')}}">Dementia</a></h5>
                                <!--<div class="lower-text">Surgical treatment for movement disorders.</div>-->
                                <a href="{{ route('dementia')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
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
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/parkinson-disease-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('parkinsons-disease')}}">Parkinson's disease</a></h5>
                                <!--<div class="lower-text">Effective wrinkle reduction with Botox injections.</div>-->
                                <a href="{{ route('parkinsons-disease')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Service Block 8 ---->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/tremors-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('tremor')}}">Tremors</a></h5>
                                <!--<div class="lower-text">Effective Lumbar Puncture Treatment Options Available</div>-->
                                <a href="{{ route('tremor')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- Service Block 9 ---->
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/neuropathy-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('neuropathy')}}">Neuropathy</a></h5>
                                <!--<div class="lower-text">Effective IVIG Therapy for Immune Disorders</div>-->
                                <a href="{{ route('neuropathy')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/myopathy-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('myopathy')}}">Myopathy</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('myopathy')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/demyelination-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('demyelination')}}">Demyelination</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('demyelination')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/spine-diseases-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('spine-diseases')}}">Spine diseases</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('spine-diseases')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/back-neck-pain-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('back-neck')}}">Back & Neck Pain</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('back-neck')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/brain-infections-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('brain-infection')}}">Brain infections</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('brain-infection')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/sleep-disorders-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('sleep-disorder')}}">Sleep disorders</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('sleep-disorder')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <div class="ft3-service-block-three active col-lg-4 col-md-6 ">
                <div class="inner-box">
                    <!-- <div class="image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
							<h5><a href="#">Ocean Freight</a></h5>
							<div class="text">To be travel management leaders in regions in which we operate, innovative technology to improve the customer experience and bring positive change to the market.</div>
							<a href="#" class="read-more">Read More</a> -->

                    <!-- Overlay Box -->
                    <div class="overlay-box">
                        <div class="overlay-image-layer" style="background-image:url(assets/images/resource/service-5.jpg)"></div>
                        <div class="shape-layer"><img src="{{ asset('/resources/assets/images/all-services/electrophysiology-service-img.jpg'); }}" alt=""></div>
                        <div class="overlay-inner">
                            <div class="content">
                                <!-- <div class="icon-box">
                                        <span class="icon flaticon-boat"></span>
                                    </div> -->
                                <h5><a href="{{ route('electrophysiology')}}">Electrophysiology</a></h5>
                                <!--<div class="lower-text">Effective Vagus Nerve Stimulation Therapy</div>-->
                                <a href="{{ route('electrophysiology')}}" class="more">Read More <span class="fa fa-angle-right"></span></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
         
        </div>
        <!-- Service Block Three -->







    </div>
</section>


@stop
