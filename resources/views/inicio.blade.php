<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.head')
</head>
<body>
<div class="wrapper-main">
	<!-- Top Bar -->
	
    @include('partials.header')
	
    <header class="slider-main">
        <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
               <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
               <!-- Slide One - Set the background image for this slide in the line below -->
               <div class="carousel-item active" style="background-image: url('images/slider-01.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Zonebiz</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
               <!-- Slide Two - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-02.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Best Consulting Services.</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
               <!-- Slide Three - Set the background image for this slide in the line below -->
               <div class="carousel-item" style="background-image: url('images/slider-03.jpg')">
                  <div class="carousel-caption d-none d-md-block">
                     <h3>Welcome to Zonebiz</h3>
                     <p>A Great Theme For Business Consulting</p>
                  </div>
               </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
            </a>
        </div>
    </header>
	
    <!-- Page Content -->
    <div class="container">        
        <!-- About Section -->
        <div class="about-main">
            <div class="row">
               <div class="col-lg-6">
                  <h2>Welcome to Zonebiz</h2>
                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corporis, omnis doloremque non cum id reprehenderit, quisquam totam aspernatur tempora minima unde aliquid ea culpa sunt. Reiciendis quia dolorum ducimus unde.</p>
				  <h5>Our smart approach</h5>
                  <ul>
                     <li>Sed at tellus eu quam posuere mattis.</li>
                     <li>Phasellus quis erat et enim laoreet posuere ac porttitor ipsum.</li>
                     <li>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>                     
                  </ul>
               </div>
               <div class="col-lg-6">
                  <img class="img-fluid rounded" src="images/about-img.jpg" alt="" />
               </div>
            </div>
            <!-- /.row -->
        </div>
	</div>	
	
	<div class="services-bar">
		<div class="container">
			<h1 class="py-4">Our Best Services </h1>
			<!-- Services Section -->
			<div class="row">
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-01.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Analytics </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-02.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Applications </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-03.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Business Process </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-04.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Consulting </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-05.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Infrastructure </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>						
					</div>
			   </div>
			   <div class="col-lg-4 mb-4">
					<div class="card h-100">
						<div class="card-img">
							<img class="img-fluid" src="images/services-img-06.jpg" alt="" />
						</div>
						<div class="card-body">
							<h4 class="card-header"> Product Engineering </h4>
							<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente esse necessitatibus neque.</p>
						</div>
					</div>
			   </div>
			</div>
			<!-- /.row -->
		</div>
	</div>
		
	<div class="container">
        <!-- Portfolio Section -->
        <div class="portfolio-main">
            <h2>Our Portfolio</h2>
			<div class="col-lg-12">
				<div class="project-menu text-center">
					<button class="btn btn-primary active" data-filter="*">All</button>
					<button data-filter=".business" class="btn btn-primary">Business</button>
					<button data-filter=".travel" class="btn btn-primary">Travel</button>
					<button data-filter=".financial" class="btn btn-primary">Financial</button>
					<button data-filter=".academic" class="btn btn-primary">Academic</button>
				</div>
			</div>
            <div id="projects" class="projects-main row">
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-01.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-01.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-02.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-02.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-03.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-03.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item business">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-04.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-04.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item travel">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-05.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-05.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
               <div class="col-lg-4 col-sm-6 pro-item portfolio-item financial academic">
                  <div class="card h-100">
                     <div class="card-img">
                        <a href="images/portfolio-img-01.jpg" data-fancybox="images">
                           <img class="card-img-top" src="images/portfolio-img-01.jpg" alt="" />
                           <div class="overlay"><i class="fas fa-arrows-alt"></i></div>
                        </a>
                     </div>
                     <div class="card-body">
                        <h4 class="card-title">
                           <a href="#">Financial Sustainability</a>
                        </h4>
                     </div>
                  </div>
               </div>
            </div>
            <!-- /.row -->
        </div>
    </div>
	
	<div class="blog-slide">
		<div class="container">
			<h2>Our Blog</h2>
			<div class="row">
				<div class="col-lg-12">
					<div id="blog-slider" class="owl-carousel">
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="images/testi_01.png" alt=""><a href="#">Williamson</a></li>
									<li><i class="fa fa-calendar"></i>02 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="images/img-1.jpg" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
		 
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="images/testi_02.png" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="images/img-2.jpg" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
						
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="images/testi_01.png" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="images/img-3.jpg" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
						
						<div class="post-slide">
							<div class="post-header">
								<h4 class="title">
									<a href="#">Latest blog Post</a>
								</h4>
								<ul class="post-bar">
									<li><img src="images/testi_02.png" alt=""><a href="#">Kristiana</a></li>
									<li><i class="fa fa-calendar"></i>05 June 2018</li>
								</ul>
							</div>
							<div class="pic">
								<img src="images/img-4.jpg" alt="">
								<ul class="post-category">
									<li><a href="#">Business</a></li>
									<li><a href="#">Financ</a></li>
								</ul>
							</div>
							<p class="post-description">
								Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas gravida nulla eu massa efficitur, eu hendrerit ipsum efficitur. Morbi vitae velit ac.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	
	@include('partials.footer')
</body>
</html>