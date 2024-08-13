@php($title = " Contact Dr. Vishal Chafale: Top Neurologist in Navi Mumbai
")
@section('meta_desc')Connect with Dr. Vishal Chafale, a top neurologist in Navi Mumbai, for expert neurological care. Find contact details and directions to enhance your neurological health journey.
@endsection

@extends('layouts.default')

@section('content')

<section id="ft-breadcrumb" class="ft-breadcrumb-section position-relative" data-background="assets/img/bg/bread-bg.jpg" style="background-image: url(&quot;assets/img/bg/bread-bg.jpg&quot;);">
		<span class="background_overlay"></span>
		<span class="design-shape position-absolute"><img src="assets/img/shape/tmd-sh.png" alt=""></span>
		<div class="container">
			<div class="ft-breadcrumb-content headline text-center position-relative">
				<h2>Contact </h2>
				<div class="ft-breadcrumb-list ul-li">
					<ul>
						<li><a href="#">Home</a></li>
						<li>Contact</li>
					</ul>
				</div>
			</div>
		</div>
	</section>

 
<!-- contact section-->
<section id="ft-contact-page" class="ft-contact-page-section page-padding">
		<div class="container">
			<div class="ft-contact-page-content">
				<div class="row">
					<div class="col-lg-6">
						<div class="ft-contact-page-text-wrapper">
							
							<div class="ft-contact-page-contact-info">
							    	<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
									<i class="fa-solid fa-phone"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Contact Now</h3>
									<a href="tel:+919326645003"><p>+91 93266 45003</p></a>
						
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="far fa-envelope"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Mail address</h3>
										<a href="mailto:contact@drvishalchafale.com"><p>contact@drvishalchafale.com</p></a>
									
									</div>
								</div>
								<div class="ft-contact-cta-items d-flex">
									<div class="ft-contact-cta-icon d-flex align-items-center justify-content-center">
										<i class="fal fa-map-marker-alt"></i>
									</div>
									<div class="ft-contact-cta-text headline pera-content">
										<h3>Address</h3>
										<a href="https://www.google.com/maps/place/Dr+Vishal+Chafale+-+Best+Neurologist+in+Navi+Mumbai/@19.0132097,73.0124734,21z/data=!4m6!3m5!1s0x3be7c396467257f7:0xc354a8ddfdc7981e!8m2!3d19.0131816!4d73.0126451!16s%2Fg%2F11f1ygm41l?entry=ttu">
										<p><span class="footer-bold-txt">Neuron Superspeciality Clinic </span><br>
										Shop No. 1&2, The Signature, near<br>
HP Petrol Pump, Sector 44A,<br>
Seawoods, Navi Mumbai - 400706</p></a>
									</div>
								</div>
							
							</div>
						</div>
					</div>
					<div class="col-lg-6">
					    	   <div class="appointment-form">      
                            <h2>Send Us Message</h2>              
                            @if(session('success'))
                            <p style="color: red;">{{ session('success') }}</p>
                            @endif
                            <form method="post" action="{{ route('saveContact') }}">
                            @csrf
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mt-10">
                                        <div class="form-group">
                                            <!--<label>First Name</label>-->
                                            <input type="text" class="form-control form-control-lg" name="first_name" aria-describedby="name" placeholder="First Name" value="{{ old('first_name') }}">
                                            @error('name')
                                            <p style="color: red;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-10">
                                        <div class="form-group">
                                            <!--<label>Last Name</label>-->
                                            <input type="text" class="form-control form-control-lg" name="last_name" aria-describedby="name" placeholder="Last Name" value="{{ old('last_name') }}">
                                            @error('name')
                                            <p style="color: red;">{{ $message }}</p>
                                            @enderror
                                        </div>  
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-12 mt-10">
                                        <div class="form-group">
                                            <!--<label>Email</label>-->
                                            <input type="email" class="form-control form-control-lg" name="email" aria-describedby="email" placeholder="Email Id" value="{{ old('email') }}">
                                            @error('email')
                                            <p style="color: red;">{{ $message }}</p>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12 mt-10">
                                        <div class="form-group">
                                            <!--<label>Mobile No</label>-->
                                            <input type="tel" class="form-control form-control-lg" name="mobile" aria-describedby="mobile" placeholder="Mobile No" value="{{ old('mobile') }}">
                                            @error('mobile')
                                            <p style="color: red;">{{ $message }}</p>
                                            @enderror
                                        </div>  
                                    </div>      
                                </div>                   
                                <div class="form-group">
                                    <label>Message</label>
                                    <textarea class="form-control" rows="4" name="message">{{ old('message') }}</textarea>
                                    @error('message')
                                    <p style="color: red;">{{ $message }}</p>
                                    @enderror
                                </div>  
                                <button type="submit" class="btn mt-3 default--btn">Submit</button>
                            </form>   
                        </div>
					
					</div>
				</div>
					
				
			</div>
				  
					  <!--Mobile view-->
					  <div class="mobile-form">
					  <form onsubmit="submitForm(); return false;">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="tel" class="form-control" id="phone" placeholder="Enter your phone number">
                        </div>
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea class="form-control" id="message" rows="5" placeholder="Your message" style="height: 143px;"></textarea>
                        </div>
                        <button type="submit" class="mobile-submit btn btn-primary">Submit</button>
                    </form>
                    </div>
					  <!--Mobile view end-->
					  
		</div>
	</section>
<!-- contact  section end-->
<section class="appoint-form-area">
		<div class="container">
                <div class="row d-flex justify-content-center">
					  <div class="col-lg-12">
					<div class="ft-contact-page-form-wrapper headline">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d235.7592976704025!2d73.01260378372955!3d19.01316535000079!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c396467257f7%3A0xc354a8ddfdc7981e!2sDr%20Vishal%20Chafale%20-%20Best%20Neurologist%20in%20Navi%20Mumbai!5e0!3m2!1sen!2sin!4v1722404333725!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
						</div>
					  </div>
					  
				
			
					  
					 </div>	</div>
					 </section>
@stop