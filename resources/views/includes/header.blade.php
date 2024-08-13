<!-- Start of header section
	============================================= -->
<header id="ft-header" class="ft-header-section header-style-three">
    <div class="container width-set">
        <div class="ft-header-content position-relative">
            <div class="ft-header-top d-flex justify-content-end ul-li">
                <ul>
                    <li> <a href=" https://www.google.com/maps/place/Dr+Vishal+Chafale+-+Best+Neurologist/@19.0133676,73.0128272,14z/data=!4m10!1m2!2m1!1sneuron+speciality+clinic!3m6!1s0x3be7c396467257f7:0xc354a8ddfdc7981e!8m2!3d19.0131816!4d73.0126451!15sChhuZXVyb24gc3BlY2lhbGl0eSBjbGluaWNaGiIYbmV1cm9uIHNwZWNpYWxpdHkgY2xpbmljkgELbmV1cm9sb2dpc3SaASNDaFpEU1VoTk1HOW5TMFZKUTBGblNVUjZYMjlZWlVOQkVBReABAA!16s%2Fg%2F11f1ygm41l?entry=ttu"> <i class="fas fa-map-marker-alt"></i>Neuron Super Speciality Clinic, Navi Mumbai</a></li>
                    <li><a href="mailto:contact@drvishalchafale.com"><i class="fas fa-envelope"></i> contact@drvishalchafale.com</a></li>
                    <li><a href="tel:+919326645003"><i class="fa-solid fa-phone"></i> +91-9326645003</a></li>
                </ul>
            </div>
            <div class="ft-header-main-menu d-flex align-items-center justify-content-between">
                <div class="ft-brand-logo">
                    <a href="{{ route('home')}}"><img src="{{ asset('/resources/assets/images/logo/dr-vishal-chafale-logo-2.png'); }}" alt=""></a>
                </div>
                <div class="ft-header-main-menu-cta  d-flex align-items-center">
                    <nav class="ft-main-navigation clearfix ul-li">
                        <ul id="ft-main-nav" class="nav navbar-nav clearfix">
                            <li class="">
                                <a href="{{ route('home')}}">Home</a>
                               
                            </li>
                            <li><a href="{{ route('about')}}" >About</a></li>
                         
                            <li class="dropdown">
    <a href="{{ route('services')}}">Services</a>
    <ul class="dropdown-menu mega-menu clearfix">
<div class="row">
  
<div class="col-md-6 border-right">
        <li><a href="{{ route('stroke-neuro-intervention')}}">Stroke and Neuro-intervention </a></li>
        <li><a href="{{ route('epilepsy')}}">Epilepsy </a></li>
        <li><a href="{{ route('headaches')}}">Headache </a></li>
        <li><a href="{{ route('migraine')}}">Migraine </a></li>
        <li><a href="{{ route('vertigo')}}">Vertigo </a></li>
        <li><a href="{{ route('dementia')}}">Dementia</a></li>
        <li><a href="{{ route('parkinsons-disease')}}">Parkinson's disease</a></li>
        <li><a href="{{ route('tremor')}}">Tremors</a></li>
       </div>
  
        <div class="col-md-6">
        <li><a href="{{ route('neuropathy')}}">Neuropathy</a></li>
        <li><a href="{{ route('myopathy')}}">Myopathy</a></li>
        <li><a href="{{ route('demyelination')}}">Demyelination</a></li>
        <li><a href="{{ route('spine-diseases')}}">Spine diseases</a></li>
        <li><a href="{{ route('back-neck')}}">Back & Neck Pain</a></li>
        <li><a href="{{ route('brain-infection')}}">Brain infections</a></li>
        <li><a href="{{ route('sleep-disorder')}}">Sleep disorders</a></li>
        <li><a href="{{ route('electrophysiology')}}">Electrophysiology</a></li>
        </div>
            </div> 

    </ul>
</li>
                                  <li><a href="{{ route('media')}}" >Media</a></li>
                                <li class="dropdown">
                                <a href="#">Gallery</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('patient-education')}}">Patient Education</a></li>
                                    <li><a href="{{ route('case-study')}}">Case Study</a></li>
                                   
                               

                                </ul>
                            </li>
                           
                            <li><a href="{{ route('patient-testimonial')}}">Testimonials</a></li>
                            
                             <li><a href="{{ route('blogs')}}">Blogs</a></li>
                            <li><a href="{{ route('contact')}}">Contact</a></li>
                        
                        </ul>
                    </nav>
                   
                </div>
            </div>
            <div class="mobile_menu position-relative">
                <div class="mobile_menu_button open_mobile_menu">
                    <i class="fal fa-bars"></i>
                </div>
                <div class="mobile_menu_wrap">
                    <div class="mobile_menu_overlay open_mobile_menu"></div>
                    <div class="mobile_menu_content">
                        <div class="mobile_menu_close open_mobile_menu">
                            <i class="fal fa-times"></i>
                        </div>
                        <div class="m-brand-logo">
                          <a href="{{ route('home')}}"><img src="{{ asset('/resources/assets/images/logo/dr-vishal-chafale-nurologist-navi-mumbai.png'); }}" alt=""></a>
                        </div>
                        <nav class="mobile-main-navigation  clearfix ul-li">
                            <ul id="m-main-nav" class="navbar-nav text-capitalize clearfix">
                                <li>
                                    <a href="{{ route('home')}}">Home</a>
                                   
                                </li>
                                <li><a href="{{ route('about')}}">About</a></li>
                                            <li class="dropdown">
    <a href="#">Services</a>
    <ul class="dropdown-menu clearfix">

        <li><a href="{{ route('stroke-neuro-intervention')}}">Stroke and Neuro-intervention </a></li>
        <li><a href="{{ route('epilepsy')}}">Epilepsy </a></li>
        <li><a href="{{ route('headaches')}}">Headache </a></li>
        <li><a href="{{ route('migraine')}}">Migraine </a></li>
        <li><a href="{{ route('vertigo')}}">vertigo </a></li>
        <li><a href="{{ route('dementia')}}">Dementia</a></li>
        <li><a href="{{ route('parkinsons-disease')}}">Parkinson's disease</a></li>
        <li><a href="{{ route('tremor')}}">Tremors</a></li>
        <li><a href="{{ route('neuropathy')}}">Neuropathy</a></li>
        <li><a href="{{ route('myopathy')}}">Myopathy</a></li>
        <li><a href="{{ route('demyelination')}}">Demyelination</a></li>
        <li><a href="{{ route('spine-diseases')}}">Spine diseases</a></li>
        <li><a href="{{ route('back-neck')}}">Back & Neck Pain</a></li>
        <li><a href="{{ route('brain-infection')}}">Brain infections</a></li>
        <li><a href="{{ route('sleep-disorder')}}">Sleep disorders</a></li>
        <li><a href="{{ route('electrophysiology')}}">Electrophysiology</a></li>


    </ul>
</li>
                                <li class="dropdown">
                                <a href="#">Gallery</a>
                                <ul class="dropdown-menu clearfix">
                                    <li><a href="{{ route('patient-education')}}">Patient Education</a></li>
                                       <li><a href="{{ route('case-study')}}">Case Study</a></li>
                                   
                               

                                </ul>
                            </li>
                              <li><a href="{{ route('patient-testimonial')}}">Testimonials</a></li>
                                  <li><a href="{{ route('blogs')}}">Blogs</a></li>
                                        <li><a href="{{ route('contact')}}">Contact</a></li>
                                
                            </ul>
                        </nav>
                    </div>
                </div>
                <!-- /Mobile-Menu -->
            </div>
        </div>
    </div>
</header>
<!-- End of header section
	============================================= -->