@extends('layouts.main')
@section('content')

	
    <!-- Content -->
    <div class="page-content bg-white">
        <!-- Main Slider -->
        <div class="rev-slider">
			<div id="rev_slider_486_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container" data-alias="news-gallery36" data-source="gallery" style="margin:0px auto;background-color:#ffffff;padding:0px;margin-top:0px;margin-bottom:0px;">
				
				<!-- START REVOLUTION SLIDER 5.3.0.2 fullwidth mode -->
				@include('components.revolution-slider')

				<!-- END REVOLUTION SLIDER -->  
			</div>  
		</div>  
        <!-- Main Slider -->
		<div class="content-block">
            
			<!-- Our Services -->
			<div class="section-area content-inner service-info-bx">
                <div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="assets/images/our-services/pic1.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-bank text-primary"></i>
									</div>
									<h4><a href="#">Best Industry Leaders</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="service-bx">
								<div class="action-box">
									<img src="assets/images/our-services/pic2.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-book text-primary"></i>
									</div>
									<h4><a href="#">Learn Courses Online</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12">
							<div class="service-bx m-b0">
								<div class="action-box">
									<img src="assets/images/our-services/pic3.jpg" alt="">
								</div>
								<div class="info-bx text-center">
									<div class="feature-box-sm radius bg-white">
										<i class="fa fa-file-text-o text-primary"></i>
									</div>
									<h4><a href="#">Book Library & Store</a></h4>
									<a href="#" class="btn radius-xl">View More</a>
								</div>
							</div>
						</div>
					</div>
				</div>
            </div>
            <!-- Our Services END -->
			
			<!-- Popular Courses -->
			<div class="section-area section-sp2 popular-courses-bx">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Popular <span>Courses</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="row">
					<div class="courses-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						@foreach($courses as $course)
						<div class="item">
							<div class="cours-bx">
								<div class="action-box">
									<img src="{{asset('uploads/uploads/'.$course->photo)}}" alt="">
									<a href="{{route('course-detail',['id'=>$course->id])}}" class="btn">Read More</a>
								</div>
								<div class="info-bx text-center">
									<h5><a href="#">{{$course->title}}</a></h5>
									<span>{{$course->categorie->title}}</span>
								</div>
								<div class="cours-more-info">
									<div class="review">
										<span>3 Review</span>
										<ul class="cours-star">
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li class="active"><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
											<li><i class="fa fa-star"></i></li>
										</ul>
									</div>
									<div class="price">
										<del>$190</del>
										<h5>$120</h5>
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
					</div>
				</div>
			</div>
			<!-- Popular Courses END -->
			
			<!-- Form -->
			<div class="section-area section-sp1 ovpr-dark bg-fix online-cours" style="background-image:url(assets/images/background/bg1.jpg);">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center text-white">
							<h2>Online Courses To Learn</h2>
							<h5>Own Your Feature Learning New Skills Online</h5>
							<form class="cours-search">
								<div class="input-group">
									<input type="text" class="form-control" placeholder="What do you want to learn today?	">
									<div class="input-group-append">
										<button class="btn" type="submit">Search</button> 
									</div>
								</div>
							</form>
						</div>
					</div>
					<div class="mw800 m-auto">
						<div class="row">
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-user"></i><span class="counter">5</span>M</h3>
									</div>
									<span class="cours-search-text">{{$count_user}} student</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-6">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-book"></i><span class="counter">{{$count_course}}</span></h3>
									</div>
									<span class="cours-search-text">{{$count_course}} Courses.</span>
								</div>
							</div>
							<div class="col-md-4 col-sm-12">
								<div class="cours-search-bx m-b30">
									<div class="icon-box">
										<h3><i class="ti-layout-list-post"></i><span class="counter">20</span>K</h3>
									</div>
									<span class="cours-search-text">Learn Anythink Online.</span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Form END -->
		 <!-- 
			<div class="section-area section-sp2">
				<div class="container">
					<div class="row">
						<div class="col-md-12 text-center heading-bx">
							<h2 class="title-head m-b0">Upcoming <span>Events</span></h2>
							<p class="m-b0">Upcoming Education Events To Feed Brain. </p>
						</div>
					</div>
					<div class="row">
					<div class="upcoming-event-carousel owl-carousel owl-btn-center-lr owl-btn-1 col-12 p-lr0  m-b30">
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="assets/images/event/pic4.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="assets/images/event/pic3.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="event-bx">
								<div class="action-box">
									<img src="assets/images/event/pic2.jpg" alt="">
								</div>
								<div class="info-bx d-flex">
									<div>
										<div class="event-time">
											<div class="event-date">29</div>
											<div class="event-month">October</div>
										</div>
									</div>
									<div class="event-info">
										<h4 class="event-title"><a href="#">Education Autumn Tour 2019</a></h4>
										<ul class="media-post">
											<li><a href="#"><i class="fa fa-clock-o"></i> 7:00am 8:00am</a></li>
											<li><a href="#"><i class="fa fa-map-marker"></i> Berlin, Germany</a></li>
										</ul>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry s standard dummy text ever since the..</p>
									</div>
								</div>
							</div>
						</div>
					</div>
					</div>
					<div class="text-center">
						<a href="#" class="btn">View All Event</a>
					</div>
				</div>
			</div>
			
			 Testimonials 
			<div class="section-area section-sp2 bg-fix ovbl-dark" style="background-image:url(assets/images/background/bg1.jpg);">
                <div class="container">
					<div class="row">
						<div class="col-md-12 text-white heading-bx left">
							<h2 class="title-head text-uppercase">what people <span>say</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="testimonial-carousel owl-carousel owl-btn-1 col-12 p-lr0">
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic1.jpg" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">Peter Packer</h5>
									<p>-Art Director</p>
								</div>
								<div class="testimonial-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="testimonial-bx">
								<div class="testimonial-thumb">
									<img src="assets/images/testimonials/pic2.jpg" alt="">
								</div>
								<div class="testimonial-info">
									<h5 class="name">Peter Packer</h5>
									<p>-Art Director</p>
								</div>
								<div class="testimonial-content">
									<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type...</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			Testimonials END -->
			
			<!-- Recent News -->
			<div class="section-area section-sp2">
                <div class="container">
					<div class="row">
						<div class="col-md-12 heading-bx left">
							<h2 class="title-head">Recent <span>News</span></h2>
							<p>It is a long established fact that a reader will be distracted by the readable content of a page</p>
						</div>
					</div>
					<div class="recent-news-carousel owl-carousel owl-btn-1 col-12 p-lr0">
					@foreach($posts as $post)
						<div class="item">
							<div class="recent-news">
								<div class="action-box">
									<img src="{{$post->featured_image}}" alt="">
								</div>
								<div class="info-bx">
									<ul class="media-post">
										<li><a href="#"><i class="fa fa-calendar"></i>April 14 2019</a></li>
										<li><a href="#"><i class="fa fa-user"></i>By George</a></li>
									</ul>
									<h5 class="post-title"><a href="blog-details.html">{{$post->title}}.</a></h5>
									<p>{{$post->excerpt}}.</p>
									<div class="post-extra">
										<a href="#" class="btn-link">READ MORE</a>
										<a href="#" class="comments-bx"><i class="fa fa-comments-o"></i></a>
									</div>
								</div>
							</div>
						</div>

					@endforeach
					</div>
				</div>
			</div>
			<!-- Recent News End -->
			
        </div>
		<!-- contact area END -->
    </div>
    <!-- Content END-->
	<!-- Footer ==== -->
    <footer>
        <div class="footer-top">
			<div class="pt-exebar">
				<div class="container">
					<div class="d-flex align-items-stretch">
						<div class="pt-logo mr-auto">
							<a href="index.html"><img src="assets/images/logo-white.png" alt=""/></a>
						</div>
						<div class="pt-social-link">
							<ul class="list-inline m-a0">
								<li><a href="#" class="btn-link"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#" class="btn-link"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
						<div class="pt-btn-join">
							<a href="#" class="btn ">Join Now</a>
						</div>
					</div>
				</div>
			</div>
            <div class="container">
                <div class="row">
					<div class="col-lg-4 col-md-12 col-sm-12 footer-col-4">
                        <div class="widget">
                            <h5 class="footer-title">Sign Up For A Newsletter</h5>
							<p class="text-capitalize m-b20">Weekly Breaking news analysis and cutting edge advices on job searching.</p>
                            <div class="subscribe-form m-b20">
								<form class="subscription-form" action="http://educhamp.themetrades.com/demo/assets/script/mailchamp.php" method="post">
									<div class="ajax-message"></div>
									<div class="input-group">
										<input name="email" required="required"  class="form-control" placeholder="Your Email Address" type="email">
										<span class="input-group-btn">
											<button name="submit" value="Submit" type="submit" class="btn"><i class="fa fa-arrow-right"></i></button>
										</span> 
									</div>
								</form>
							</div>
                        </div>
                    </div>
					<div class="col-12 col-lg-5 col-md-7 col-sm-12">
						<div class="row">
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Company</h5>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about-1.html">About</a></li>
										<li><a href="faq-1.html">FAQs</a></li>
										<li><a href="contact-1.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Get In Touch</h5>
									<ul>
										<li><a href="http://educhamp.themetrades.com/admin/index.html">Dashboard</a></li>
										<li><a href="blog-classic-grid.html">Blog</a></li>
										<li><a href="portfolio.html">Portfolio</a></li>
										<li><a href="event.html">Event</a></li>
									</ul>
								</div>
							</div>
							<div class="col-4 col-lg-4 col-md-4 col-sm-4">
								<div class="widget footer_widget">
									<h5 class="footer-title">Courses</h5>
									<ul>
										<li><a href="courses.html">Courses</a></li>
										<li><a href="courses-details.html">Details</a></li>
										<li><a href="membership.html">Membership</a></li>
										<li><a href="profile.html">Profile</a></li>
									</ul>
								</div>
							</div>
						</div>
                    </div>
					<div class="col-12 col-lg-3 col-md-5 col-sm-12 footer-col-4">
                        <div class="widget widget_gallery gallery-grid-4">
                            <h5 class="footer-title">Our Gallery</h5>
                            <ul class="magnific-image">
								<li><a href="assets/images/gallery/pic1.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic1.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic2.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic2.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic3.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic3.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic4.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic4.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic5.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic5.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic6.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic6.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic7.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic7.jpg" alt=""></a></li>
								<li><a href="assets/images/gallery/pic8.jpg" class="magnific-anchor"><img src="assets/images/gallery/pic8.jpg" alt=""></a></li>
							</ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 text-center"> <a target="_blank" href="https://www.templateshub.net">Templates Hub</a></div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer END ==== -->
    <button class="back-to-top fa fa-chevron-up" ></button>
</div>

@endsection