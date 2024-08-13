@php($title = " Blogs on Neurology Care by Dr. Vishal Chafale | Top Neurologist in Navi Mumbai
")
@section('meta_desc')Unlock expert insights with Dr. Vishal Chafale's neurology care blogs. Stay informed with tips from Navi Mumbai's top neurologist. Read now! 
@endsection

@extends('layouts.default')

@section('content')

<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg" style="background-image: url(&quot;assets/img/bg/bread-bg.jpg&quot;);">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Blogs</h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Blogs</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

 
 
 <!--Blogs-->
<section class="blogs-area">
    <div class="container">

        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img class="" src="{{ asset('/resources/assets/images/blogs/vertigo-giddiness-img.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                <div class="read-blog-txt">
                <h3>VERTIGO GIDDINESS</h3>
                <p>Giddiness or lightheadedness, a very common symptom seen in practise, is a term used to describe a sensation of altered orientation in space usually described by the patient as “chakar”. </p>
                 </div>
                 <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('vertigo-giddiness')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>

        </div>


        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/interventional-neurology-blog.png'); }}" alt="">

                </div>
            </div>

            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>INTERVENTIONAL NEUROLOGY</h3>
                <p>Interventional neurology refers to endovascular, catheter-based techniques using fluoroscopy and angiography to diagnose and treat vascular disease of the central nervous system.</p>
                    </div>
                    <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('interventional-neurology')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>

        </div>




        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/electroencephalography-blog.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>ELECTROENCEPHALOGRAPHY</h3>
                <p>Electroencephalography is the neurophysiologic measurement of the electrical activity of the brain OBTAINED by recording from electrodes placed on the scalp or, in special cases, subdurally or in the cerebral cortex</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('electroencephalography')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/visual-evoked-potential-testing.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>VISUAL EVOKED POTENTIAL TESTING</h3>
                <p>Visual stimuli used in VEP testing are strobe flash, flashing light-emitting diodes (LEDs), transient and steady state</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('visual-evoked-potential-testing')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/headache-blog.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>HEADACHE</h3>
                <p>Headache is one of the most common presenting symptoms of neurological
disorders.
</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('headache')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/epilepsy-blog.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>EPILEPSY</h3>
                <p>Epilepsy is a disease of the central nervous system (CNS) that can cause excess electrical activity in the brain.</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('epilepsy-treatment')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/parkinsonism-blog.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>PARKINSONISM</h3>
                <p>parkinsonism is any condition that causes a combination of the movement abnormalities seen in Parkinson s disease</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('parkinsonism')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/neuromuscular-disorders-blog-img.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>NEUROMUSCULAR DISORDERS
</h3>
                <p>parkinsonism is any condition that causes a combination of the movement abnormalities seen in Parkinson s disease</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('neuromuscular-disorders')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/nerve-conduction-studies.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>NERVE CONDUCTION
STUDIES

</h3>
                <p>A nerve conduction study (NCS) is an electrodiagnostic test used to evaluate the electrical conduction, and thus the
function of the motor and sensory nerves of the body.
</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('nerve-conduction')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>
        
        <div class="row mt-30 blog-page">
            <div class="col-md-4">
                <div class="blog-contents">
                    <img src="{{ asset('/resources/assets/images/blogs/stroke-blog-img.png'); }}" alt="">
                </div>
            </div>
            <div class="col-md-8">
                    <div class="read-blog-txt">
                <h3>STROKE</h3>
                <p>A stroke is a "brain attack" .A stroke occurs when the blood supply to part of your brain is interrupted or reduced,
depriving brain tissue of oxygen and nutrients. Within minutes, brain cells begin to die.

</p>
                    </div>
                <div class="read-blog-btn">
                    <a class="blog-rm" href="{{ route('stroke')}}">Read More&nbsp;<i class="fa-solid fa-angles-right"></i></a>
                </div>

            </div>
        </div>

        <!--<div class="ft-service-more-btn d-flex flex-wrap justify-content-center align-items-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">-->

        <!--         <a class="text-uppercase align-items-center justify-content-center d-flex" href="#" target="_blank">View More </a>-->
        <!--     </div>-->
    </div>
</section>
<!--Blogs end-->

@stop