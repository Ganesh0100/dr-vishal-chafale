@php($title = "News Media about Dr. Vishal Chafale Neurologist Navi Mumbai")
@section('meta_desc')Stay updated with the latest news and media features about Dr. Vishal Chafale. Discover his impact and expertise in Navi Mumbai's neurology field. @endsection
@extends('layouts.default')
@section('content')


<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg" style="background-image: url(&quot;assets/img/bg/bread-bg.jpg&quot;);">
	<span class="background_overlay"></span>
	<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
	<div class="container">
		<div class="ft-breadcrumb-content headline text-center position-relative">
			<h2>Media</h2>
			<div class="ft-breadcrumb-list ul-li">
				<ul>
					<li><a href="#">Home</a></li>
					<li>Media</li>
				</ul>
			</div>
		</div>
	</div>
</section>


<!--media section start-->

<section class="gallery pad-bottom-50 gallery-area">
            <!-- <h2>fancyBox v3.3 - Thumbnails at the bottom</h2> -->


            <div class="container">
                

                <div class="row d-flex justify-content-center">

                

                    <div class="col-md-4">
                        <p class="imglist" style="width: 100%;">
                            <a href="{{ asset('/resources/assets/images/media/media-image-1.jpg')}}" data-fancybox="images">
                                <img class="g-img" src="{{ asset('/resources/assets/images/media/media-image-1.jpg')}}" alt="">
                            </a>

                        </p>
                    </div>
                    

                    <div class="col-md-4">
                        <p class="imglist" style="width: 100%;">
                            <a href="{{ asset('/resources/assets/images/media/media-image-2.jpg')}}" data-fancybox="images">
                                <img class="g-img" src="{{ asset('/resources/assets/images/media/media-image-2.jpg')}}" alt="">
                            </a>

                        </p>
                    </div>

                    <div class="col-md-4">
                        <p class="imglist" style="width: 100%;">
                            <a href="{{ asset('/resources/assets/images/media/media-image-3.jpg')}}" data-fancybox="images">
                                <img class="g-img" src="{{ asset('/resources/assets/images/media/media-image-3.jpg')}}" alt="">
                            </a>

                        </p>
                    </div>
                    
                
                </div>
            </div>

        </section>

<!--media section end-->

@stop