	<?php

	if(isset($_GET['utm_source']) && $_GET['utm_source'] !='')
		$UTMSource = $_GET['utm_source'];
	else
		$UTMSource = 'InterstitialBanner';
	if(isset($_GET['utm_medium']) && $_GET['utm_medium'] !='')
		$UTMMedium = $_GET['utm_medium'];
	else
		$UTMMedium = 'EnquiryForm';						
								
	if(isset($_GET['utm_campaign']) && $_GET['utm_campaign'] !='')
		$UTMCampaign = $_GET['utm_campaign'];
	else
		$UTMCampaign = 'CorporateWebsite';
							
	if(isset($_GET['utm_term']) && $_GET['utm_term'] !='')
		$UTMTerm = $_GET['utm_term'];
	else
		$UTMTerm = 'none';
						

	if(isset($_GET['ip_address']) && $_GET['ip_address'] !='')
		$IPAddress = $_GET['ip_address'];
	else
		$IPAddress = '';


						
	?>
	<?php


	//code for lms integration
	if(isset($_REQUEST['source']) && $_REQUEST['source'] !=''){
	    $source = $_REQUEST['source'];
	}else{
	    $source = '';
	}

	if(isset($_REQUEST['network']) && $_REQUEST['network'] !=''){
	    $network = $_REQUEST['network'];
	}else{
	    $network = '';
	}

	if(isset($_REQUEST['campaign']) && $_REQUEST['campaign'] !=''){
	    $campaign = $_REQUEST['campaign'];
	}else{
	    $campaign = '';
	}
	?>
	<!DOCTYPE html>
	<html lang="zxx">
	<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	    <!-- Basic Page Needs
	    ================================================== -->
	    
	    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>JP INFRA- Property Development Projects In Mumbai</title>
	    <meta name="language" content="en" />
		<meta name="language" content="en" />
		<meta name="google-site-verification" content="DWUH_OtmFKX3Q-GOiN1a8jorWgaR4dIbpU2Ues9K5hU" />
		<meta content='width=device-width, initial-scale=1.0' name='viewport' />
		<meta name="description" content="JP INFRA, we are the leading real estate developers in Mumbai offering luxurious1, 2, 3, 4 and 5 Beds with ultra-modern amenities. JP INFRA projects are mainly developed in Mumbai’s Suburban s like Goregaon, Mira Road, Andheri, Worli Juhu. Visit our website today to check out floor plans & other details."/>
		<meta name="keywords" content="JP INFRA, Leading Real Estate Developer, JP INFRA Projects, JP INFRA Decks, JP INFRA North, Unity Towers, Chalet Amar, Boulevard" /> 

		<meta property="og:title" content="Property in Mumbai, Real Estate Builders & Developers in Mumbai – JP Infra"/>
		<meta property="og:description" content="Properties in Mumbai by JP Infra. We are leading real estate builders and developers in Mumbai offering 1, 2, 3, 4 and 5 BHK luxury flats & apartments with ultra-modern amenities."/>
		<meta property="og:image" content="http://www.jpinfra.com/images/logo.png" />
		<meta property="og:type" content="website"/> 

		<meta name="twitter:card" content="summary">
		<meta name="twitter:site" content="@jpinfraofficial">
		<meta name="twitter:creator" content="@jpinfraofficial">
		<meta name="twitter:url"content="http://www.jpinfra.com/">
		<meta name="twitter:description" content="Properties in Mumbai by JP Infra. We are leading real estate builders and developers in Mumbai offering 1, 2, 3, 4 and 5 BHK luxury flats & apartments with ultra-modern amenities.">
		<meta name="twitter:image" content="http://www.jpinfra.com/images/logo.png"> 
		<link rel="canonical" href="http://www.jpinfra.com"/>
	    <meta name="robots" content="INDEX,FOLLOW" />
		
		<!-- ==============================================
		Favicons
		=============================================== -->
		<link rel="shortcut icon" href="images/favicon.ico"> 
		<link rel="apple-touch-icon" href="images/apple-touch-icon.png">
		<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
		<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">
		
		<!-- ==============================================
		CSS VENDOR
		=============================================== -->
		<link rel="stylesheet" type="text/css" href="css/vendor/bootstrap.min.css" />
		<link rel="stylesheet" type="text/css" href="css/vendor/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="css/vendor/owl.carousel.min.css">
		<link rel="stylesheet" type="text/css" href="css/vendor/owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="css/vendor/magnific-popup.css">
		
		<!-- ==============================================
		Custom Stylesheet
		=============================================== -->
		<link rel="stylesheet" type="text/css" href="css/style.css" />
		
	    <script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
	    	<script type="text/javascript" src="js/vendor/modernizr.min.js"></script>
		        <script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-51552873-1', 'jpinfra.com');
		  ga('send', 'pageview');
		</script>
		
		<!-- Global site tag (gtag.js) - Google Ads: 805619117 07-01-2020 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-805619117"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-805619117');
	</script>

	<script>
	  gtag('event', 'page_view', {
	    'send_to': 'AW-805619117',
	    'user_id': 'replace with value',
	    'value': 'replace with value',
	    'items': [{
	      'id': 'replace with value',
	      'location_id': 'replace with value',
	      'google_business_vertical': 'real_estate'
	    }]
	  });
	</script>

	<!-- End of Global site tag (gtag.js) - Google Ads: 805619117 07-01-2020 -->

	<!-- Facebook Pixel Code 07-01-2020 -->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '589588538162794');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=589588538162794&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code 07-01-2020 -->  
	 
	<!-- Facebook Pixel Code 14-01-2020 -->
	<script>
	!function(f,b,e,v,n,t,s)
	{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	n.queue=[];t=b.createElement(e);t.async=!0;
	t.src=v;s=b.getElementsByTagName(e)[0];
	s.parentNode.insertBefore(t,s)}(window, document,'script',
	'https://connect.facebook.net/en_US/fbevents.js');
	fbq('init', '211768772712142');
	fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	src="https://www.facebook.com/tr?id=211768772712142&ev=PageView&noscript=1"
	/></noscript>
	<!-- End of Facebook Pixel Code 14-01-2020 -->








	<!-- Facebook Pixel Code 15-06-2020-->
	<script>
	  !function(f,b,e,v,n,t,s)
	  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
	  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
	  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
	  n.queue=[];t=b.createElement(e);t.async=!0;
	  t.src=v;s=b.getElementsByTagName(e)[0];
	  s.parentNode.insertBefore(t,s)}(window, document,'script',
	  'https://connect.facebook.net/en_US/fbevents.js');
	  fbq('init', '234349474670485');
	  fbq('track', 'PageView');
	</script>
	<noscript><img height="1" width="1" style="display:none"
	  src="https://www.facebook.com/tr?id=234349474670485&ev=PageView&noscript=1"
	/></noscript>
	<!-- End Facebook Pixel Code -->


	<!-- Global site tag (gtag.js) - Google Ads: 691954232 15-06-2020-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-691954232"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'AW-691954232');
	</script>
















	</head>

	<body>

		<!-- LOAD PAGE -->
		<div class="animationload">
			<div class="loader"></div>
		</div>
		
		<!-- BACK TO TOP SECTION -->
		<a href="#0" class="cd-top cd-is-visible cd-fade-out">Top</a>

		<!-- HEADER -->
	    <div class="header header-1">
	    	<!-- TOPBAR -->
			<div class="topbar">
				<div class="container">
					<div class="row">
						<div class="col-sm-3 col-md-4">
							<!-- <div class="topbar-left">
								<div class="welcome-text">
								We help the world growing since 1983
								</div>
							</div> -->
						</div>
						<div class="col-sm-9 col-md-8">
							<div class="topbar-right">
								<ul class="topbar-menu">
									<li><a href="tel:1800 313 9999" title=""><i class="fa fa-phone"></i> 1800 313 9999</a></li>
									<!--<li><a href="mailto:sales@jpinfra.com" title=""><i class="fa fa-envelope"></i> sales@jpinfra.com </a></li>-->

									<li><a href="contact.html" title=""><i class="fa fa-user"></i> Enquire Now </a></li>

								</ul>
								<ul class="topbar-sosmed">
								<li>
									<a href="https://www.facebook.com/jpinfraofficial"  target="_blank"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href=" https://www.instagram.com/jpinfra/"  target="_blank"><i class="fa fa-instagram"></i></a>
								</li>
								<!--<li>
									<a href="https://twitter.com/jpinfraofficial" target="_blank"><i class="fa fa-twitter"></i></a>
								</li>-->
								<li>
									<a href="https://in.linkedin.com/company/jp-infra-mumbai-pvt-ltd" target="_blank"><i class="fa fa-linkedin"></i></a>
								</li>
								<!--<li>
									<a href="https://www.youtube.com/channel/UCKbh2Wm3zyCywNdanDNhvOA" target="_blank"><i class="fa fa-youtube"></i></a>
								</li>-->
								
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- enquiry now pop-up starts -->

				<!-- enquiry now pop-up ends -->
			</div>

			<!-- NAVBAR SECTION -->
			<div class="navbar navbar-main">
			
				<div class="container container-nav">
					<div class="row">
							
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
						</div>

						<a class="navbar-brand brand-logo" href="index.html">
							<img src="images/logo.png" alt="JP INFRA Leading Real Estate Developer in Andheri, Mumbai" title="JP INFRA Leading Real Estate Developer in Andheri, Mumbai "/> 
							<!--<img src="images/logo-stiky.png" alt="JP INFRA Leading Real Estate Developer in Andheri, Mumbai" class="logo-stiky" title="JP INFRA Leading Real Estate Developer in Andheri, Mumbai" />-->  
						</a>

						<nav class="navbar-collapse collapse">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="index.html"> HOME </a></li>
								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> ABOUT US <span class="caret"></span></a>
								  <ul class="dropdown-menu">
								    <li><a href="Overview.html">Overview</a></li>
									<li><a href="management-team.html">Management Team</a></li>
									<li><a href="operational-focus.html">Operational Focus</a></li>
									<li><a href="areas-of-expertise.html">Areas of Expertise</a></li>
									<li><a href="partners.html">Partners</a></li>
									<li><a href="testimonials.html">Testimonials</a></li>
									<li><a href="newsletter.html">Newsletter</a></li>
								  </ul>
								</li>

								<li class="dropdown">
								  <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false"> OUR PROJECTS <span class="caret"></span></a>
								   <ul class="dropdown-menu">
	                                    <li><a href="jp-north/codenamenowornever/" target="_blank">Codename Now Or Never</a></li>							
	                                    <li><a href="https://www.jpinfra.com/jp-north/celeste/" target="_blank">Celeste</a></li>							
	                                    <li><a href="http://www.codenameopenstreets.com/" target="_blank">Codename OpenStreets</a></li>
	                                    <li><a href="http://www.codenamehotcake.com/" target="_blank">Codename Hotcake</a></li>
	                                    <li><a href="jp-north/" target="_blank">North Garden City</a></li> 
	                                    <li><a href="jp-decks/" target="_blank">JP Decks</a></li>	
	                                    <li><a href="altus.html">Altus</a></li>
	                                    <li><a href="unity-tower.html">Unity Towers</a></li>
	                                    <li><a href="http://www.jpinfra.com/chalet-amar/" target="_blank">Chalet Amar</a></li>
	                                    <li><a href="boulevard.html">Boulevard</a></li> 
	                                </ul>
								</li>
								
								<li><a href="http://www.jpinfra.com/jp-north/opp/" target="_blank">OPP</a></li>
								
								<li><a href="media.html">MEDIA</a></li>

								<li><a href="life.html">LIFE@JP INFRA</a></li>

								<li><a href="contact.html">CONTACT US</a></li>

							</ul>
						</nav>
							
					</div>
				</div>
		    </div>

	    </div>
	    <!-- Header ends -->
		
		<div class="fix-whats-app"><a href="http://si1.bz/JP-North/" target="_blank"><img src="images/whatsapp-btn.svg"></a></div> 
	 
		<!-- BANNER --> 
		<div id="slides" class="section banner">
			<ul class="slides-container">
				<li>
					<img src="images/slide-7.jpg" alt="slide-7">
					<!--<div class="overlay-bg"></div>--> 
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								
							</h1>
							<!-- <p class="excerpt"> That Breathe In The Mumbai Cityscape.</p> -->
							<!-- <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li> 
				<li>
					<img src="images/slide-6.jpg" alt="slide-6">
					<!--<div class="overlay-bg"></div>--> 
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								
							</h1>
							<!-- <p class="excerpt"> That Breathe In The Mumbai Cityscape.</p> -->
							<!-- <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li> 	
			
			<li>
					<img src="images/slide-5.jpg" alt="slide-5">
					<!--<div class="overlay-bg"></div>--> 
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								
							</h1>
							<!-- <p class="excerpt"> That Breathe In The Mumbai Cityscape.</p> -->
							<!-- <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li> 
			
			
			    <li>
					<img src="images/slide-1.jpg" alt="slide-1">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								Delivering More Than A Home
							</h1>
							<!-- <p class="excerpt"> That Breathe In The Mumbai Cityscape.</p> -->
							<!-- <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li>
				
				<li>
					<img src="images/slide-2.jpg" alt="slide-2">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								<!-- Defining the concept of living space much beyond the four walls you live in -->
								
								Designing and Building Spaces for People to Truly Live
							</h1>
							<!-- <p class="excerpt">We understand the role, location plays in adding to a development’s charm &amp; appreciation.</p>	 -->
							<!-- <a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li>
			    <li>
					<img src="images/slide-3.jpg" alt="slide-3">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								Adding Value through <br>Life - Enhancing Elements
							</h1>
							<!-- <p class="excerpt">We design buildings which relate to residents’ lifestyles, where they can not only live but prosper.</p>
							<a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li>


				
				<li>
					<img src="images/slide-4.jpg" alt="slide-4">
					<div class="overlay-bg"></div>
					<div class="container">
						<div class="wrap-caption">
							<h1 style="font-size: 40px" class="caption-heading">
								Spaces that Enrich and Transform  
							</h1>
							<!-- <p class="excerpt">We design buildings which relate to residents’ lifestyles, where they can not only live but prosper.</p>
							<a href="#" class="btn btn-primary" title="LEARN MORE">LEARN MORE</a> <a href="#" class="btn btn-secondary" title="CONTACT US">CONTACT US</a> -->
						</div>
					</div>
				</li>
				
				
			</ul>

			<nav class="slides-navigation">
				<div class="container">
					<a href="#" class="next">
						<i class="fa fa-chevron-right"></i>
					</a>
					<a href="#" class="prev">
						<i class="fa fa-chevron-left"></i>
					</a>
		      	</div>
		    </nav>
			
		</div>

	    <!-- OUR PROJECTS-1 -->
		<div class="section project bgsection">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading"> 
							ONGOING PROJECTS
						</h2>
					</div>
					<div class="clearfix"></div>

					<div id="caro-project">
						
						<!-- Item 1 -->
						<div class="item">
							<div class="feature-box-7">
								<div class="media">
									<a href="jp-north/"><img src="images/home/north.jpg" alt="rud" class="img-responsive"></a>
								</div>
								<div class="body">
									<div class="info-box">
										<div class="text">
											<div class="title">North Garden City</div>
											<p>North Garden City, a new residential project in Mira Road by JP INFRA. </p>
											<p style="line-height:14px; font-size:10px">MahaRERA Number: Euphoria P51700016290 | Estella P51700008916 <br>Atria P51700004117 | Celeste P51700008667 | Elara P51700007001<br>
	Visit: https://maharera.mahaonline.gov.in</p>
											<a href="jp-north/" class="readmore" target="_blank">READ MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>					
						<!-- Item 2 -->
					
						
						<!-- Item 3 -->
						<div class="item">
							<div class="feature-box-7">
								<div class="media">
									<a href="altus.html"><img src="images/home/altus.jpg" alt="rud" class="img-responsive"></a>
								</div>
								<div class="body">
									<div class="info-box">
										<div class="text">
											<div class="title">Altus</div>
											<p>3 BHK Luxury apartments in Worli(South Mumbai)</p>
											<p style="line-height:14px; font-size:10px">MahaRERA Number: P51900012374<br>Visit: https://maharera.mahaonline.gov.in</p>
											<a href="altus.html" class="readmore" target="_blank">READ MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						<!-- Item 4 -->
						<div class="item">
							<div class="feature-box-7">
								<div class="media">
									<a href="boulevard.html"><img src="images/home/boulevard.jpg" alt="rud" class="img-responsive"></a>
								</div>
								<div class="body">
									<div class="info-box">
										<div class="text">
											<div class="title">Boulevard</div>
											<p>2 BHK &amp; 3 BHK Flats in Andheri – Boulevard by JP INFRA </p>
											<p style="line-height:14px; font-size:10px">MahaRERA Number: <br>
	Boulevard Tower 4: P51800002133 | Tower 5: P51800001690 
												<br>Visit: https://maharera.mahaonline.gov.in</p>
											<a href="boulevard.html" class="readmore" target="_blank">READ MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>	
						
						
					</div>
				</div>
				
				<!-- OUR PROJECTS-2 -->
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							COMPLETED PROJECTS
						</h2>
					</div>
					<div class="clearfix"></div>

					
						
						
					<div id="caro-project2">
					<!-- Item 0 -->
						<div class="item">
							<div class="feature-box-7">
								<div class="media">
									<a href="jp-decks/"><img src="images/home/decks.jpg" alt="rud" class="img-responsive"></a>
								</div>
								<div class="body">
									<div class="info-box">
										<div class="text">
											<div class="title">JP DECKS</div>
											<p>2 &amp; 3 BHK Luxury Apartments in Goregaon East - Mumbai </p>
											<p style="line-height:14px; font-size:10px">MahaRERA Number P51800001488 <br>Visit: https://maharera.mahaonline.gov.in</p>
											<a href="jp-decks/" class="readmore" target="_blank">READ MORE</a>
										</div>
									</div>
								</div>
							</div>
						</div>
								<!-- Item 1 -->
								<div class="item">
									<div class="feature-box-7">
										<div class="media">
											<a href="unity-tower.html"><img src="images/home/unity.jpg" alt="rud" class="img-responsive"></a>
										</div>
										<div class="body">
											<div class="info-box">
												<div class="text">
													<div class="title">Unity Towers</div>
													<p>Flats in Worli, Apartments in Worli, Homes in Worli </p>
												</div>
											</div>
										</div>
									</div>
								</div>


							<!-- Item 2 -->
							<div class="item">
								<div class="feature-box-7">
									<div class="media">
										<a href="chalet-amar.html"><img src="images/home/chalet-amar.jpg" alt="rud" class="img-responsive"></a>
									</div>
									<div class="body">
										<div class="info-box">
											<div class="text">
												<div class="title">Chalet Amar</div>
												<p>3 BHK &amp; 4 BHK Flats in Juhu </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						
							<!-- Item 3 -->
							<div class="item">
								<div class="feature-box-7">
									<div class="media">
										<img src="images/home/dreamland_banner.jpg" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<div class="info-box">
											<div class="text">
												<div class="title">Dreamland</div>
												<p>2 BHK &amp; 3 BHK Apartment in Khar </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						
						
					
					
				</div>
				
			</div>		
		</div>
		
		
		
		<!-- ABOUT -->
		<div class="section feature">
			<div class="container">

				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="row overlap feature-gutter">
							<div class="col-sm-3 col-md-3 border-right">
								<!-- BOX 1 -->
								<div class="feature-box-8">
									<div class="media">
										<img src="images/why-thumb-1.jpg" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<a href="#" class="title">Intelligent Design</a>
										<p>We create buildings with   unique, distinctive, eye-catching exteriors and beautiful interiors.</p>
										<!-- <a href="#" class="readmore">READ MORE</a> -->
									</div>
					            </div>
							</div>
							<div class="col-sm-3 col-md-3 border-right">
								<!-- BOX 2 -->
								<div class="feature-box-8">
									<div class="media">
										<img src="images/why-thumb-2.jpg" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<a href="#" class="title">Location Smart</a>
										<p>We understand the role, location plays in adding to a development’s charm &amp; appreciation.</p>
										<!-- <a href="#" class="readmore">READ MORE</a> -->
									</div>
					            </div>
							</div>
							<div class="col-sm-3 col-md-3 border-right">
								<!-- BOX 2 -->
								<div class="feature-box-8">
									<div class="media">
										<img src="images/why-thumb-3.jpg" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<a href="#" class="title">Customer Centric</a>
										<p>We design buildings which relate to residents’ lifestyles, where they can not only live but prosper.</p>
										<!-- <a href="#" class="readmore">READ MORE</a> -->
									</div>
					            </div>
							</div>
							<div class="col-sm-3 col-md-3">
								<!-- BOX 3 -->
								<div class="feature-box-8">
									<div class="media">
										<img src="images/why-thumb-4.jpg" alt="rud" class="img-responsive">
									</div>
									<div class="body">
										<a href="#" class="title">Fixated on Detail</a>
										<p>A dedicated team comprising of architecture, planning and marketing allocated to each development.</p>
										<!-- <a href="#" class="readmore">READ MORE</a> -->
									</div>
					            </div>
							</div>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="spacer-70"></div>
					<div class="col-sm-5 col-md-5" style="color: #fff;">
						<div class="jumbo-heading">
							<h2 style="color:#fff;">Overview</h2>
						</div>
						<p>JP Infra is fast maturing into a business with ambitious growth plans and a powerful vision of the types of development it wants to bring to market.</p> 
						<p>The company is growing fast and has already put in place a number of measures to facilitate its next period of growth. To accommodate a three-fold increase in staff it has moved into bigger and better equipped offices. This move has coincided with a change from manual processing to automated (ERP) systems.</p>
						<a href="Overview.html" class="btn btn-secondary">READ MORE</a>
						<div class="spacer-30"></div>
					</div>
					<div class="col-sm-7 col-md-7">
						<div class="about-img">
							<div class="about-img-top">
								<div class="hover-img">
									<img src="images/about-img-2.jpg" alt="about-img-2" class="img-responsive">
								</div>
							</div>
							<div class="about-img-bottom">
								<div class="hover-img">
									<img src="images/about-img-1.jpg" alt="about-img-1" class="img-responsive">
								</div>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="spacer-70"></div>
				</div>

			</div>
		</div>
		 


		 	
		<!-- TESTIMONIALS --> 
		<!-- <div class="section testimony">
			<div class="container">
				
				<div class="row">
					
					<div class="col-sm-12 col-md-12">

						<div class="row">
							<div class="col-sm-12 col-md-12">
								<h2 class="section-heading">
									TESTIMONIALS
								</h2>
							</div>
						</div>

						<div id="owl-testimony">
							<div class="item">
								<div class="testimonial-1">
					              <div class="media"><img src="images/testimony-thumb-1.jpg" alt="" class="img-responsive"></div>
					              <div class="body">
					                <div class="title">Paul Juwaal</div>
					                <div class="company">Gasman ltd</div>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
					              </div>
					            </div>
							</div>
							<div class="item">
					            <div class="testimonial-1">
					              <div class="media"><img src="images/testimony-thumb-2.jpg" alt="" class="img-responsive"></div>
					              <div class="body">
					                <div class="title">Debora Deandra</div>
					                <div class="company">Abc ltd</div>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
					              </div>
					            </div>
							</div>
							<div class="item">
					            <div class="testimonial-1">
					              <div class="media"><img src="images/testimony-thumb-3.jpg" alt="" class="img-responsive"></div>
					              <div class="body">
					                <div class="title">Steve Nuer</div>
					                <div class="company">Manufacture ltd</div>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
					              </div>
					            </div>
							</div>
							<div class="item">
					            <div class="testimonial-1">
					              <div class="media"><img src="images/testimony-thumb-4.jpg" alt="" class="img-responsive"></div>
					              <div class="body">
					                <div class="title">Robert Lav</div>
					                <div class="company">Gaspol ltd</div>
					                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry orem Ipsum has been. Mauris ornare tortor in eleifend blanditullam ut ligula et neque. Nulla interdum dapibus erat nec elementum. </p>
					              </div>
					            </div>
							</div>
							
							
						</div>
						
					</div>

				</div>
			</div>
		</div> -->
		
		<!-- CTA -->
	<!-- 	<div class="section cta">
			<div class="container">
				
				<div class="row">
					<div class="col-sm-12 col-md-12">
						<div class="cta-1">
			              	<div class="body-text">
			                	<h3>We’ll identify your needs and enhance your business growth.</h3>
			              	</div>
			              	<div class="body-action">
			                	<a href="#" class="btn btn-secondary">REQUEST A QUICK QUOTE</a>
			              	</div>
			            </div>
					</div>
				</div>
			</div>
		</div> -->

		<!-- BLOG -->
		<div class="section blog">
			<div class="container">
				<div class="row">
					
					<div class="col-sm-12 col-md-12">
						<h2 class="section-heading">
							NEWS &amp; MEDIA
						</h2> 
					</div>
			
					<div class="col-sm-4 col-md-4">
						<!-- BOX 1 -->
						<div class="box-news-1">
							<div class="media gbr">
								<a href="https://youtu.be/o3qLmsuw118" target="_blank"><img src="images/media/zee-business.jpg" alt="Zee Business" class="img-responsive"></a>
							</div>
							<div class="body">
								<div class="title"><a href="https://youtu.be/o3qLmsuw118" target="_blank" title="">Zee Business</a></div>
								<div class="meta">
									<span class="date"><i class="fa fa-clock-o"></i> February 18, 2019</span>
									
								</div>
							</div>
						</div>
					</div>
					
					
					<div class="col-sm-4 col-md-4">
						<!-- BOX 1 -->
						<div class="box-news-1">
							<div class="media gbr">
								<a href="http://www.afternoondc.in/epaper_pdf/2018111620111.pdf" target="_blank"><img src="images/media/afternoon.png" alt="The Afternoon" class="img-responsive"></a>
							</div>
							<div class="body">
								<div class="title"><a href="http://www.afternoondc.in/epaper_pdf/2018111620111.pdf" target="_blank" title="">The Afternoon</a></div>
								<div class="meta">
									<span class="date"><i class="fa fa-clock-o"></i> November 17, 2018</span>
									
								</div>
							</div>
						</div>
					</div> 
					
					<div class="col-sm-4 col-md-4">
						<!-- BOX 1 -->
						<div class="box-news-1">
							<div class="media gbr">
								<a href="https://www.business-standard.com/article/news-ani/projects-adjacent-to-highways-attracting-mumbai-homebuyers-118090600372_1.html" target="_blank"><img src="images/media/BS.png" alt="Business Standard" class="img-responsive"></a>
							</div>
							<div class="body">
								<div class="title"><a href="https://www.business-standard.com/article/news-ani/projects-adjacent-to-highways-attracting-mumbai-homebuyers-118090600372_1.html" target="_blank" title="">Business Standard</a></div>
								<div class="meta">
									<span class="date"><i class="fa fa-clock-o"></i> September 06, 2018</span>
									
								</div>
							</div>
						</div>
					</div>


					<div class="panel-footer" style="text-align: center;">
						<a href="media.html" class="btn btn-secondary">READ MORE</a>
					</div>
					
				</div>
			</div>
		</div> 

		
		 
		<!-- FOOTER SECTION -->
		<div class="footer">
			
			<div class="container">
				
				<div class="row">
					<div class="col-sm-4 col-md-4">
						<div class="footer-item">
							<img src="images/logo.png" alt="logo bottom" class="logo-bottom">
							<p>Established in 2006, JP Infra is fast maturing into a business with ambitious growth plans and a powerful vision of the types of development it wants to bring to market.</p>
							<div class="footer-sosmed">
								<a href="https://www.facebook.com/jpinfraofficial" target="_blank" title="">
									<div class="item">
										<i class="fa fa-facebook"></i>
									</div>
								</a>
								<a href="https://www.instagram.com/jpinfra/" target="_blank" title="">
									<div class="item">
										<i class="fa fa-instagram"></i>
									</div>
								</a>
								<a href="https://in.linkedin.com/company/jp-infra-mumbai-pvt-ltd" target="_blank" title="">
									<div class="item">
										<i class="fa fa-linkedin"></i>
									</div>
								</a> 
								
								 
							</div>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="footer-item" style="text-align:center;">
							<div class="footer-title">
								NEWS &amp; MEDIA
							</div>
							<ul class="recent-post">
								<li><a href="https://www.youtube.com/watch?v=o3qLmsuw118&feature=youtu.be" title="">ZEE BUSINESS</a>
								<span class="date"><i class="fa fa-clock-o"></i>  February 18, 2019</span></li>

								<li><a href="http://www.afternoondc.in/epaper_pdf/2018111620111.pdf" title="">THE AFTERNOON</a>
								<span class="date"><i class="fa fa-clock-o"></i> November 17, 2018</span></li>


							</ul>
						</div>
					</div>
					<div class="col-sm-4 col-md-4">
						<div class="footer-item" style="text-align:center;">
							<div class="footer-title">
								QUICK LINKS
							</div>
							<ul class="list">
							    <li><a href="Overview.html" title="">ABOUT US</a></li>
								<li><a href="projects.html" title="">OUR PROJECTS</a></li>
								<li><a href="media.html" title="">MEDIA</a></li>
								<li><a href="life.html">LIFE@JP INFRA</a></li>
								<li><a href="contact.html">CONTACT US</a></li>
							</ul>
						</div>
					</div>
					<!--<div class="col-sm-3 col-md-3">
						<div class="footer-item">
							<div class="footer-title">
								SUBSCRIBE
							</div>
							<p>Once you are subscribed to our newsletter, you will get the latest updates and features on the website. The subscription is free.</p>
							<form action="#" class="footer-subscribe">
				              <input type="email" name="EMAIL" class="form-control" placeholder="Enter your email">
				              <input id="p_submit" type="submit" value="send">
				              <label for="p_submit"><i class="fa fa-envelope"></i></label>
				              <p>Get latest updates and offers.</p>
				            </form>
						</div>
					</div>-->
				</div>
			</div>
			
			<div class="fcopy">
				<div class="container">
					<div class="row">
						<div class="col-sm-12 col-md-12">
							<p class="ftex">&copy; 2019 JP Infra - All Rights Reserved. <!--Designed by <a href="http://whiteriversmedia.com/" target="blank">W</a>--></p> 
						</div>
					</div>
				</div>
			</div>
			
		</div>
	    

	    <!-- Disclaimer Starts -->
		<div class="popuplayer" style="display:none;"></div>
	    <div class="disclaimer-wrapper" style="display:none;">
	      <div class="disclaimer-box">
	          <div class="disclaimer-title">Disclaimer</div>  
	          <div class="discalimer-content">
	                <p>
	                “Thank you for visiting our website.
	                  <br/><br/>
						We are currently in the process of revising our website in consonance with the Real Estate (Regulation and Development) Act, 2016 and the Rules made thereunder (“RERA”), which have been brought into effect from 1st May, 2017.
						 <br/><br/>
						Until our website is duly revised and updated, none of the images, material, stock photography, projections, details, descriptions and other information that are currently available and/or displayed on the website, should be deemed to be or constitute advertisements, solicitations, marketing, offer for sale, invitation to offer, invitation to acquire, including within the purview of the RERA.
						<br/><br/> 
						You are therefore requested to directly verify all details and aspects of any proposed booking/acquisition of units/premises, directly with our authorised representatives. Please do not rely on the information contained on this website, until our revision and updation is complete.
						 <br/><br/>
						Please note, that we will not be accepting any bookings or allotments based on the images, material, stock photography, projections, details, descriptions that are currently available and/or displayed on the website.
						 <br/><br/>
						We thank you for your patience and understanding.”</p>
					</div>
				<div class="discalimer-agree" id="disclaimer">
					<a href="javascript:;" data-event-category="Section" data-event-action="click" data-event-name="I agree">I Agree</a> 
				</div>
			</div>
		</div>
		<!--start of the modal-->
			<div class="modal fade" id="memberModal" tabindex="-1" role="dialog" aria-labelledby="memberModalLabel" aria-hidden="true">
		    <div class="modal-dialog">
		        <div class="modal-content">
		            <div class="modal-header">
		                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">SKIP</span>
		                </button>
		                 <!-- <h4 class="modal-title" id="memberModalLabel">Thank you for signing in!</h4>
	 -->
		            </div>
		            <div class="modal-body">
		            	<div class="col-md-8" style="margin: 0px; padding: 0px;">
			                <a href="http://codenamenowornever.com/?utmsource=InterstitialBanner&utmcampaign=InterstitialBanner" target="blank"> 
			                	<img src="images/interstetial-new3.jpg" class="img-responsive hidden-xs hidden-sm">
			                	<img src="images/interstetial-new3.jpg" class="img-responsive hidden-lg hidden-md">
			                </a>
		                </div>
		                <div class="col-md-4">
						    <div class="form-area">  
							<!-- Register Form -->						        						
							<form action="mail.php" role="form" id="top_contact" method="post" onsubmit="return validate()">
				                <br>
								<!-- <form action="mail.php" name="contactform" class="row" method="post" id="top_contact" onsubmit="return validate()"> -->
									 
									<input id="make_text" type = "text"  name="make_text" value = "" hidden="hidden">
									<input id="val_otp" type = "text" name="val_otp" value = "" hidden="hidden">
								
								<input type="hidden" name="source" value="<?php echo $source; ?>" >
								<input type="hidden" name="network" value="<?php echo $network; ?>" >
								<input type="hidden" name="campaign" value="<?php echo $campaign; ?>" >
								<input id="UTMSource" type = "text" name="UTMSource" value = "<?php echo $UTMSource?>" hidden="hidden">


								<input id="UTMMedium" type = "text" name="UTMMedium" value = "<?php echo $UTMMedium?>" hidden="hidden">
								<input id="UTMCampaign" type = "text" name="UTMCampaign" value = "<?php echo $UTMCampaign?>" hidden="hidden">
								<input id="UTMTerm" type = "text" name="UTMTerm" value = "<?php echo $UTMTerm?>" hidden="hidden">
								<input id="IPAddress" type = "text" name="IPAddress" value = "<?php echo $IPAddress?>" hidden="hidden">
								
									<h3>Enquire Now</h3>
											
									<div class="form-group">
										<input id="name" class="form-control" type="text" name="first_name" placeholder="Name" required> 
									</div>
													
									<div class="form-group">
										<input id="email" class="form-control" type="email" name="email" placeholder="Email" required> 
									</div>

									
										<div class="form-group">
										 

										   <select class="form-control form-control-lg" name='states' id="states"  onchange="fillSelect(this.value,this.form['cities']);setTextField(this)">
					<option value="">Select Your Country</option>
					<option value="India">India</option>
					<option value="UAE">UAE</option>
					<option value="Kuwait">Kuwait</option>
					<option data-countryCode="SA" value="966">Saudi Arabia</option>
					<option data-countryCode="OM" value="968">Oman</option>
					<option data-countryCode="QA" value="974">Qatar</option>
					<option data-countryCode="SG" value="65">Singapore</option>
					<option data-countryCode="US" value="1">USA</option>
					<option data-countryCode="GB" value="44">UK</option>
					<option data-countryCode="AU" value="61">Australia</option>
					
			<option disabled>-------------------------------------------</option>
			<option data-countryCode="DZ" value="213">Algeria</option>
			<option data-countryCode="AD" value="376">Andorra</option>
			<option data-countryCode="AO" value="244">Angola</option>
			<option data-countryCode="AI" value="1264">Anguilla</option>
			<option data-countryCode="AG" value="1268">Antigua &amp; Barbuda</option>
			<option data-countryCode="AR" value="54">Argentina</option>
			<option data-countryCode="AM" value="374">Armenia</option>
			<option data-countryCode="AW" value="297">Aruba</option>
			<!-- <option data-countryCode="AU" value="61">Australia (+61)</option> -->
			<option data-countryCode="AT" value="43">Austria</option>
			<option data-countryCode="AZ" value="994">Azerbaijan</option>
			<option data-countryCode="BS" value="1242">Bahamas</option>
			<option data-countryCode="BH" value="973">Bahrain </option>
			<option data-countryCode="BD" value="880">Bangladesh </option>
			<option data-countryCode="BB" value="1246">Barbados</option>
			<option data-countryCode="BY" value="375">Belarus</option>
			<option data-countryCode="BE" value="32">Belgium</option>
			<option data-countryCode="BZ" value="501">Belize </option>
			<option data-countryCode="BJ" value="229">Benin</option>
			<option data-countryCode="BM" value="1441">Bermuda</option>
			<option data-countryCode="BT" value="975">Bhutan</option>
			<option data-countryCode="BO" value="591">Bolivia</option>
			<option data-countryCode="BA" value="387">Bosnia Herzegovina</option>
			<option data-countryCode="BW" value="267">Botswana</option>
			<option data-countryCode="BR" value="55">Brazil</option>
			<option data-countryCode="BN" value="673">Brunei </option>
			<option data-countryCode="BG" value="359">Bulgaria </option>
			<option data-countryCode="BF" value="226">Burkina Faso </option>
			<option data-countryCode="BI" value="257">Burundi </option>
			<option data-countryCode="KH" value="855">Cambodia </option>
			<option data-countryCode="CM" value="237">Cameroon </option>
			<option data-countryCode="CA" value="1">Canada </option>
			<option data-countryCode="CV" value="238">Cape Verde Islands</option>
			<option data-countryCode="KY" value="1345">Cayman Islands</option>
			<option data-countryCode="CF" value="236">Central African Republic</option>
			<option data-countryCode="CL" value="56">Chile</option>
			<option data-countryCode="CN" value="86">China</option>
			<option data-countryCode="CO" value="57">Colombia</option>
			<option data-countryCode="KM" value="269">Comoros</option>
			<option data-countryCode="CG" value="242">Congo</option>
			<option data-countryCode="CK" value="682">Cook Islands </option>
			<option data-countryCode="CR" value="506">Costa Rica </option>
			<option data-countryCode="HR" value="385">Croatia</option>
			<option data-countryCode="CU" value="53">Cuba</option>
			<option data-countryCode="CY" value="90392">Cyprus North</option>
			<option data-countryCode="CY" value="357">Cyprus South</option>
			<option data-countryCode="CZ" value="42">Czech Republic</option>
			<option data-countryCode="DK" value="45">Denmark</option>
			<option data-countryCode="DJ" value="253">Djibouti</option>
			<option data-countryCode="DM" value="1809">Dominica</option>
			<option data-countryCode="DO" value="1809">Dominican Republic</option>
			<option data-countryCode="EC" value="593">Ecuador</option>
			<option data-countryCode="EG" value="20">Egypt</option>
			<option data-countryCode="SV" value="503">El Salvador</option>
			<option data-countryCode="GQ" value="240">Equatorial Guinea</option>
			<option data-countryCode="ER" value="291">Eritrea</option>
			<option data-countryCode="EE" value="372">Estonia</option>
			<option data-countryCode="ET" value="251">Ethiopia</option>
			<option data-countryCode="FK" value="500">Falkland Islands</option>
			<option data-countryCode="FO" value="298">Faroe Islands</option>
			<option data-countryCode="FJ" value="679">Fiji</option>
			<option data-countryCode="FI" value="358">Finland</option>
			<option data-countryCode="FR" value="33">France</option>
			<option data-countryCode="GF" value="594">French Guiana</option>
			<option data-countryCode="PF" value="689">French Polynesia</option>
			<option data-countryCode="GA" value="241">Gabon</option>
			<option data-countryCode="GM" value="220">Gambia</option>
			<option data-countryCode="GE" value="7880">Georgia</option>
			<option data-countryCode="DE" value="49">Germany</option>
			<option data-countryCode="GH" value="233">Ghana</option>
			<option data-countryCode="GI" value="350">Gibraltar</option>
			<option data-countryCode="GR" value="30">Greece</option>
			<option data-countryCode="GL" value="299">Greenland</option>
			<option data-countryCode="GD" value="1473">Grenada</option>
			<option data-countryCode="GP" value="590">Guadeloupe</option>
			<option data-countryCode="GU" value="671">Guam</option>
			<option data-countryCode="GT" value="502">Guatemala </option>
			<option data-countryCode="GN" value="224">Guinea </option>
			<option data-countryCode="GW" value="245">Guinea - Bissau </option>
			<option data-countryCode="GY" value="592">Guyana </option>
			<option data-countryCode="HT" value="509">Haiti </option>
			<option data-countryCode="HN" value="504">Honduras </option>
			<option data-countryCode="HK" value="852">Hong Kong </option>
			<option data-countryCode="HU" value="36">Hungary</option>
			<option data-countryCode="IS" value="354">Iceland </option>
			
			<option data-countryCode="ID" value="62">Indonesia</option>
			<option data-countryCode="IR" value="98">Iran</option>
			<option data-countryCode="IQ" value="964">Iraq </option>
			<option data-countryCode="IE" value="353">Ireland </option>
			<option data-countryCode="IL" value="972">Israel </option>
			<option data-countryCode="IT" value="39">Italy</option>
			<option data-countryCode="JM" value="1876">Jamaica (</option>
			<option data-countryCode="JP" value="81">Japan</option>
			<option data-countryCode="JO" value="962">Jordan </option>
			<option data-countryCode="KZ" value="7">Kazakhsta</option>
			<option data-countryCode="KE" value="254">Kenya </option>
			<option data-countryCode="KI" value="686">Kiribati </option>
			<option data-countryCode="KP" value="850">Korea North </option>
			<option data-countryCode="KR" value="82">Korea South</option>
			
			<option data-countryCode="KG" value="996">Kyrgyzstan </option>
			<option data-countryCode="LA" value="856">Laos </option>
			<option data-countryCode="LV" value="371">Latvia </option>
			<option data-countryCode="LB" value="961">Lebanon </option>
			<option data-countryCode="LS" value="266">Lesotho </option>
			<option data-countryCode="LR" value="231">Liberia </option>
			<option data-countryCode="LY" value="218">Libya </option>
			<option data-countryCode="LI" value="417">Liechtenstein </option>
			<option data-countryCode="LT" value="370">Lithuania </option>
			<option data-countryCode="LU" value="352">Luxembourg </option>
			<option data-countryCode="MO" value="853">Macao </option>
			<option data-countryCode="MK" value="389">Macedonia </option>
			<option data-countryCode="MG" value="261">Madagascar </option>
			<option data-countryCode="MW" value="265">Malawi </option>
			<option data-countryCode="MY" value="60">Malaysia</option>
			<option data-countryCode="MV" value="960">Maldives </option>
			<option data-countryCode="ML" value="223">Mali </option>
			<option data-countryCode="MT" value="356">Malta </option>
			<option data-countryCode="MH" value="692">Marshall Islands </option>
			<option data-countryCode="MQ" value="596">Martinique </option>
			<option data-countryCode="MR" value="222">Mauritania </option>
			<option data-countryCode="YT" value="269">Mayotte </option>
			<option data-countryCode="MX" value="52">Mexico</option>
			<option data-countryCode="FM" value="691">Micronesia </option>
			<option data-countryCode="MD" value="373">Moldova </option>
			<option data-countryCode="MC" value="377">Monaco </option>
			<option data-countryCode="MN" value="976">Mongolia </option>
			<option data-countryCode="MS" value="1664">Montserrat</option>
			<option data-countryCode="MA" value="212">Morocco </option>
			<option data-countryCode="MZ" value="258">Mozambique </option>
			<option data-countryCode="MN" value="95">Myanmar</option>
			<option data-countryCode="NA" value="264">Namibia </option>
			<option data-countryCode="NR" value="674">Nauru </option>
			<option data-countryCode="NP" value="977">Nepal </option>
			<option data-countryCode="NL" value="31">Netherlands</option>
			<option data-countryCode="NC" value="687">New Caledonia </option>
			<option data-countryCode="NZ" value="64">New Zealand</option>
			<option data-countryCode="NI" value="505">Nicaragua </option>
			<option data-countryCode="NE" value="227">Niger </option>
			<option data-countryCode="NG" value="234">Nigeria </option>
			<option data-countryCode="NU" value="683">Niue </option>
			<option data-countryCode="NF" value="672">Norfolk Islands </option>
			<option data-countryCode="NP" value="670">Northern Marianas </option>
			<option data-countryCode="NO" value="47">Norway</option>
			<!-- <option data-countryCode="OM" value="968">Oman </option> -->
			<option data-countryCode="PW" value="680">Palau </option>
			<option data-countryCode="PA" value="507">Panama </option>
			<option data-countryCode="PG" value="675">Papua New Guinea </option>
			<option data-countryCode="PY" value="595">Paraguay </option>
			<option data-countryCode="PE" value="51">Peru </option>
			<option data-countryCode="PH" value="63">Philippines </option>
			<option data-countryCode="PL" value="48">Poland </option>
			<option data-countryCode="PT" value="351">Portugal</option>
			<option data-countryCode="PR" value="1787">Puerto Rico </option>
			<!-- <option data-countryCode="QA" value="974">Qatar (+974)</option> -->
			<option data-countryCode="RE" value="262">Reunion </option>
			<option data-countryCode="RO" value="40">Romania </option>
			<option data-countryCode="RU" value="7">Russia </option>
			<option data-countryCode="RW" value="250">Rwanda </option>
			<option data-countryCode="SM" value="378">San Marino </option>
			<option data-countryCode="ST" value="239">Sao Tome &amp; Principe </option>
			<!-- <option data-countryCode="SA" value="966">Saudi Arabia </option> -->
			<option data-countryCode="SN" value="221">Senegal </option>
			<option data-countryCode="CS" value="381">Serbia </option>
			<option data-countryCode="SC" value="248">Seychelles </option>
			<option data-countryCode="SL" value="232">Sierra Leone </option>
			<!-- <option data-countryCode="SG" value="65">Singapore</option> -->
			<option data-countryCode="SK" value="421">Slovak Republic </option>
			<option data-countryCode="SI" value="386">Slovenia </option>
			<option data-countryCode="SB" value="677">Solomon Islands </option>
			<option data-countryCode="SO" value="252">Somalia </option>
			<option data-countryCode="ZA" value="27">South Africa</option>
			<option data-countryCode="ES" value="34">Spain</option>
			<option data-countryCode="LK" value="94">Sri Lanka</option>
			<option data-countryCode="SH" value="290">St. Helena</option>
			<option data-countryCode="KN" value="1869">St. Kitts</option>
			<option data-countryCode="SC" value="1758">St. Lucia</option>
			<option data-countryCode="SD" value="249">Sudan </option>
			<option data-countryCode="SR" value="597">Suriname </option>
			<option data-countryCode="SZ" value="268">Swaziland </option>
			<option data-countryCode="SE" value="46">Sweden </option>
			<option data-countryCode="CH" value="41">Switzerland </option>
			<option data-countryCode="SI" value="963">Syria</option>
			<option data-countryCode="TW" value="886">Taiwan </option>
			<option data-countryCode="TJ" value="7">Tajikstan </option>
			<option data-countryCode="TH" value="66">Thailand </option>
			<option data-countryCode="TG" value="228">Togo </option>
			<option data-countryCode="TO" value="676">Tonga </option>
			<option data-countryCode="TT" value="1868">Trinidad &amp; Tobago </option>
			<option data-countryCode="TN" value="216">Tunisia </option>
			<option data-countryCode="TR" value="90">Turkey </option>
			<option data-countryCode="TM" value="7">Turkmenistan </option>
			<option data-countryCode="TM" value="993">Turkmenistan </option>
			<option data-countryCode="TC" value="1649">Turks &amp; Caicos Islands </option>
			<option data-countryCode="TV" value="688">Tuvalu </option>
			<option data-countryCode="UG" value="256">Uganda </option>
			<!-- <option data-countryCode="GB" value="44">UK (+44)</option> -->
			<option data-countryCode="UA" value="380">Ukraine </option>
			
			<option data-countryCode="UY" value="598">Uruguay </option>
			<!-- <option data-countryCode="US" value="1">USA (+1)</option> -->
			<option data-countryCode="UZ" value="7">Uzbekistan </option>
			<option data-countryCode="VU" value="678">Vanuatu </option>
			<option data-countryCode="VA" value="379">Vatican City</option>
			<option data-countryCode="VE" value="58">Venezuela </option>
			<option data-countryCode="VN" value="84">Vietnam</option>
			<option data-countryCode="VG" value="84">Virgin Islands - British </option>
			<option data-countryCode="VI" value="84">Virgin Islands - US </option>
			<option data-countryCode="WF" value="681">Wallis &amp; Futuna </option>
			<option data-countryCode="YE" value="969">Yemen (North)</option>
			<option data-countryCode="YE" value="967">Yemen (South)</option>
			<option data-countryCode="ZM" value="260">Zambia </option>
			<option data-countryCode="ZW" value="263">Zimbabwe</option>
					<!-- <option value="India">India</option> -->
				</select>
										</div>
									
									
										<div class="form-group">
										  
										  <div id="cities_sel" style="display: none">
										  <select class="cities form-control form-control-lg" id="cities" name='cities' >
										<option value="">Select Your City</option>
										</select>
										</div>
										<input type="text" style="display: none" class="cities form-control" name="cities_txt" placeholder="Enter City" id="cities_txt" >
										</div>
									

									<div class="form-group">    					        
							            
										
											<input type="text" name="country_code" id="country_code" readonly class="form-control col-md-4 col-xs-4" style="width: 25%; margin-bottom: 15px;">
										<!-- </div> -->
										<input id="phone" class="form-control 	col-md-8 col-xs-8" type="text" name="phone" placeholder="Mobile" style="width:75%;margin-bottom: 15px;z-index:9;"> 
										
									</div>
									<!-- otp varification div -->
									
									
									<!-- end of otp varification div -->
									


									<!-- Submit Button -->
									<div id="form_register_btn" class="text-center col-md-12">
										<!-- <input class="btn btn-primary" type="submit" name="submit" value="Submit" id="submit"> -->
										 <div class="ajax-button">
								            <div class="fa_loader fa-check done"></div>
								            <div class="fa_loader fa-close failed"></div>
								            <input  class="submit" type="submit" name="submit" value="Submit" id="submit" />
								        </div>
									</div>
									<br>
									<div class="col-md-12" align="center">

	       	<h3 class="inst-or">or,</h3>

	           <h4 class="inst-call"><a href="tel:1800 313 9999"><i class="fa fa-phone" aria-hidden="true"></i> Call 1800 313 9999</a></h4>
	       </div>

																									
								</form>	<!-- End Register Form -->
								</form>		
						    </div>
		                </div>
		            </div>
		            <div class="modal-footer">
		                <!-- <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button> -->
		            </div>
		        </div>
		    </div>
		</div>
		
		<!--end of modal-->
		<!-- JS VENDOR -->
		<script type="text/javascript" src="js/vendor/jquery.min.js"></script>
		<script type="text/javascript" src="js/vendor/bootstrap.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.superslides.js"></script>
		<script type="text/javascript" src="js/vendor/owl.carousel.js"></script>
		<script type="text/javascript" src="js/vendor/bootstrap-hover-dropdown.min.js"></script>
		<script type="text/javascript" src="js/vendor/jquery.magnific-popup.min.js"></script>
		<script type="text/javascript" src="js/vendor/easings.js"></script>
		<script type="text/javascript" src="js/vendor/isotope.pkgd.min.js"></script>

		<!-- sendmail -->
		<script type="text/javascript" src="js/vendor/validator.min.js"></script>
		<script type="text/javascript" src="js/vendor/form-scripts.js"></script>
		
		<script type='text/javascript' src='https://maps.google.com/maps/api/js?sensor=false&amp;ver=4.1.5'></script>

		<script type="text/javascript" src="js/script.js"></script>
		<script type="text/javascript" >
		$(document).ready(function($){
		    id="115d7610a38791964dc61f093a0c0158"
		    // $('.disclaimer-wrapper').show();
		    // $('.popuplayer').show();

		    $('#disclaimer a').on('click',function(){
		    $('.disclaimer-wrapper').hide();
		    $('.popuplayer').hide();    
		      $.ajax({
		        type:"POST",
		        dataType:"json",
		        url:'/site/add_disclaimer',
		        data:{sessionid:id},
		        success: function(resp, status, xhr){
		        },
		        error: function(resp, status, xhr){
		        }
		      });
		    });
		});
		</script>


		<script type="text/javascript" >
		$(document).ready(function($){
		    id="115d7610a38791964dc61f093a0c0158"
		    // $('.disclaimer-wrapper').show();
		    // $('.popuplayer').show();

		    var isshow = localStorage.getItem('isshow');
		   if (isshow== null) {
		       localStorage.setItem('isshow', 1);

		       // Show popup here
		       $('.disclaimer-wrapper').show();
		        $('.popuplayer').show();
		   }

		    $('#disclaimer a').on('click',function(){
		    $('.disclaimer-wrapper').hide();
		    $('.popuplayer').hide();    
		      $.ajax({
		        type:"POST",
		        dataType:"json",
		        url:'/site/add_disclaimer',
		        data:{sessionid:id},
		        success: function(resp, status, xhr){
		        },
		        error: function(resp, status, xhr){
		        }
		      });
		    });
		});
		$(document).ready(function () {
	    
	        $('#memberModal').modal('show');
	//     	$('#memberModal').on('hide.bs.modal.prevent', closeModalEvent);
	// /**
	// * allow popup to hide or not
	// * @param {type} e
	// * @returns {Boolean}
	//  */
	// function closeModalEvent(e) {
	//     e.preventDefault();
	//     if ($('#block').is(':checked')) {
	//         $('#memberModal').off('hide.bs.modal.prevent');
	//         $("#memberModal").modal('hide');
	//         return true;
	//     }
	//     return false;
	// }

	// $('.close').click(function(){
	//    window.location.href='http://www.jpinfra.com/';
	// })
	    });

		</script>
		<script type="text/javascript">
			$('#myModal').modal({
			    backdrop: 'static',
			    keyboard: false  // to prevent closing with Esc button (if you want this too)
			})
		</script>
	<script type="text/javascript" >

		var cities=[];cities.UAE=["Abu Dhabi","Adh Dhayd","Ajman","Al Ain","Al Fujayrah","Ar Ruways","Dibba Al-Fujairah","Dibba Al-Hisn","Dubai","Khawr Fakkan","Ras al-Khaimah","Sharjah","Umm al Qaywayn"],cities[966]=["Al-Abwa","Al Artaweeiyah","Badr","Baljurashi","Bisha","Bareg","Buraydah","Al Bahah","Dammam","Dhahran","Dhurma","Dahaban","Diriyah","Duba","Dumat Al-Jandal","Dawadmi","Farasan city","Gatgat","Gerrha","Gurayat","Al-Gwei'iyyah","Hautat Sudair","Habala","Hajrah","Haql","Al-Hareeq","Harmah","Ha'il","Hotat Bani Tamim","Hofuf","Huraymila","Hafr Al-Batin","Jabal Umm al Ru'us","Jalajil","Al Jawf","Jeddah","Jizan","Jizan Economic City","Jubail","Al Jafer","Khafji","Khaybar","King Abdullah Economic City","Khamis Mushayt","Al Kharj","Knowledge Economic City , Medina","Khobar","Al-Khutt","Layla","Lihyan","Al Lith","Al Majma'ah","Mastoorah","Al Mikhwah","Al-Mubarraz","Al Mawain","Mecca","Medina","Muzahmiyya","Najran","Al-Namas","Omloj","Al-Omran","Al-Oyoon","Qadeimah","Qatif","Qaisumah","Al Qunfudhah","Rabigh","Rafha","Ar Rass","Ras Tanura","Riyadh","Riyadh Al-Khabra","Rumailah","Sabt Al Alaya","Saihat","Safwa city","Sakakah","Sharurah","Shaqraa","Shaybah","As Sulayyil","Taif","Tabuk","Tanomah","Tarout","Tayma","Thadiq","Thuwal","Thuqbah","Turaif","Tabarjal","Udhailiyah","Al-`Ula","Um Al-Sahek","Unaizah","Uqair","'Uyayna","Uyun AlJiwa","Wadi Al-Dawasir","Al Wajh","Yanbu","Az Zaimah","Zulfi"],cities[968]=["Adam","Al Buraimi","Al Hamra","Al Jazer","AL Suwaiq","As Sib","Bahla","Barka","Bidbid","Bidiya","Dibba Al-Baya","Duqm","Haima","Ibra","Ibri","Izki","Jabrin","Jalan Bani Bu Hassan","Khasab","Mad'ha","Mahooth","Manah","Masirah","Matrah","Mudhaireb","Mudhaybi","Muscat","Nizwa","Quriyat","Raysut","Rustaq","Ruwi","Saham","Saiq","Shinas"],cities[974]=["Abu Dhalouf","Abu Samra","Ain Khaled","Ain Sinan","Al Adaid","Al Aziziya","Baaya","Bani Hajer","Brahat Al Jufairy","Bu Fasseela","Bu Hamour","Bu Samra","Bu Sidra","Al Bidda","Dahl Al Hammam","Doha International Airport","Doha Port","Duhail","Dukhan","Al Daayen","Al Dafna","Al Doha Al Jadeeda","Al Ebb","Al Egla","Fuwayrit","Fereej Abdel Aziz","Fereej Bin Dirham","Fereej Bin Mahmoud","Fereej Bin Omran","Fereej Kulaib","Fereej Mohammed Bin Jassim","Fereej Al Amir","Fereej Al Asiri","Fereej Al Asmakh","Fereej Al Murra","Fereej Al Manaseer","Fereej Al Nasr","Fereej Al Soudan","Fereej Al Zaeem","Gharafat Al Rayyan","Al Gharafa","Al Ghuwariyah","Hamad Medical City","Hazm Al Markhiya","Al Hilal","Industrial Area","Izghawa (Al Rayyan)","Izghawa (Umm Salal)","Jabal Thuaileb","Jelaiah","Jeryan Jenaihat","Jeryan Nejaima","Al Jasrah","Al Jeryan","Al Karaana","Al Kharrara","Al Kharaitiyat","Al Kharayej","Al Kheesa","Al Khor","Al Khulaifat","Leabaib","Lebday","Lejbailat","Lekhwair","Leqtaifiya","Lijmiliya","Luaib","Lusail","Al Luqta","Madinat ash Shamal","Madinat Al Kaaban","Madinat Khalifa North","Madinat Khalifa South","Mebaireek","Mehairja","Mesaieed","Mesaieed Industrial Area","Mesaimeer","Al Messila","Muaither","Muraikh","Mushayrib","Al Mamoura","Al Mansoura","Al Markhiyah","Al Mashaf","Al Masrouhiya","Al Mearad","Al Mirqab","Najma","New Al Hitmi","New Al Mirqab","New Al Rayyan","New Salata","New Fereej Al Ghanim","New Fereej Al Khulaifat","Nu`ayjah","Al Najada","Al Nasraniya","Old Airport","Old Al Ghanim","Old Al Hitmi","Old Al Rayyan","Onaiza","The Pearl","Al Qassar","Ras Abu Aboud","Ras Lafan","Rawdat Al Hamama","Rawdat Al Khail","Rawdat Egdaim","Rawdat Rashed","Rumaila","Ar Ru'ays","Al Rufaa","Sawda Natheel","Shagra","Simaisma","Al Sadd","As Salatah","Al Sailiya","Al Sakhama","Al Shagub","Al Shahaniya","Al Souq","Al Seej","Al Tarfa","Al Thakhira","Al Themaid","Al Thumama (Doha)","Al Thumama (Al Wakrah)","Umm Bab","Umm Birka","Umm Ghuwailina","Umm Lekhba","Umm Qarn","Umm Salal Ali","Umm Salal Mohammed","Al Utouriya","Wadi Al Banat","Wadi Al Sail","Wadi Al Wasaah","Wadi Lusail","Al Waab","Al Wajba","Al Wakrah","Al Wukair","Al Zubarah"],cities[61]=["Adelaide ","Albany","Albury (NSW-Victoria border)","Alice Springs","Armidale","Ballarat","Bathurst","Benalla","Bendigo","Brisbane ","Broken Hill","Broome","Bunbury","Bundaberg","Burnie","Cairns","Cessnock","Charters Towers","Clarence","Coffs Harbour","Darwin ","Devonport","Dubbo","Fremantle","Geelong","Geraldton","Gladstone","Gladstone","Glenorchy","Gold Coast","Gosford","Goulburn","Grafton","Griffith","Gympie","Hervey Bay","Hobart ","Ipswich","Kalgoorlie","Katherine","Lake Macquarie","Latrobe City","Launceston","Lismore","Logan City","Mackay","Maitland","Mandurah","Maryborough","Melbourne ","Mildura","Mount Gambier","Mount Isa","Murray Bridge","Nambour","Newcastle","Nowra","Orange","Palmerston","Perth ","Port Augusta","Port Hedland","Port Lincoln","Port Macquarie","Port Pirie","Queanbeyan (adjacent to Canberra)","Redcliffe","Rockhampton","Shepparton","Sunshine Coast ","Swan Hill","Sydney ","Tamworth","Thuringowa","Toowoomba","Townsville","Tweed Heads (NSW-Queensland border)","Victor Harbor","Wagga Wagga","Wangaratta","Warrnambool","Whyalla","Wodonga","Wollongong","Wyong"],cities.Kuwait=["Ad Dasmah","Al Ahmadi","Al Fahahil","Al Farwaniyah","Al Fintas","Al Jahra","Al Mahbulah","Al Manqaf","Ar Rabiyah","Ar Riqqah","Ar Rumaythiyah","As Salimiyah","Bayan","Hawalli","Janub as Surrah","Kuwait City","Sabah as Salim","Salwa"],cities[44]=["Aberdeen","Armagh","Bangor","Bath","Belfast","Birmingham","Bradford","Brighton and Hove","Bristol","Cambridge","Canterbury","Cardiff","Carlisle","Chester","Chichester","City of London","Coventry","Derby","Dundee","Durham","Edinburgh","Ely","Exeter","Glasgow","Gloucester","Hereford","Inverness","Kingston upon Hull","Lancaster","Leeds","Leicester","Lichfield","Lincoln","Lisburn","Liverpool","Londonderry","Manchester","Newcastle upon Tyne","Newport","Newry","Norwich","Nottingham","Oxford","Peterborough","Plymouth","Portsmouth","Preston","Ripon","Salford","Salisbury","Sheffield","Southampton","St Albans","St Davids","Stirling","Stoke-on-Trent","Sunderland","Swansea","Truro","Wakefield","Wells","Westminster","Winchester","Wolverhampton","Worcester","York"],cities[1]=["Ackley","Ackworth","Adair","Adel","Afton","Agency","Ainsworth","Akron","Albert City","Albia","Albion","Alburnett","Alden","Alexander","Algona","Alleman","Allerton","Allison","Alta","Alta Vista","Alton","Altoona","Alvord","Amana","Ames","Anamosa","Anderson","Andover","Andrew","Anita","Ankeny","Anthon","Aplington","Arcadia","Archer","Aredale","Arion","Arispe","Arlington","Armstrong","Arnolds Park","Arthur","Asbury","Ashton","Aspinwall","Atalissa","Athelstan","Atkins","Atlantic","Auburn","Audubon","Aurelia","Aurora","Avoca","Ayrshire","Badger","Bagley","Baldwin","Balltown","Bancroft","Bankston","Barnes City","Barnum","Bartlett","Bassett","Batavia","Battle Creek","Baxter","Bayard","Beacon","Beaconsfield","Beaman","Beaver","Beaverdale","Bedford","Belle Plaine","Bellevue","Belmond","Bennett","Bentley","Benton","Berkley","Bernard","Bertram","Bettendorf","Bevington","Birmingham","Blairsburg","Blairstown","Blakesburg","Blanchard","Blencoe","Blockton","Bloomfield","Blue Grass","Bode","Bolan","Bonaparte","Bondurant","Boone","Bouton","Boxholm","Boyden","Braddyville","Bradford","Bradgate","Brandon","Brayton","Breda","Bridgewater","Brighton","Bristow","Britt","Bronson","Brooklyn","Brunsville","Buckeye","Buck Grove","Buffalo","Buffalo Center","Burchinal","Burlington","Burr Oak","Burt","Bussey","Calamus","California Junction","Callender","Calmar","Calumet","Camanche","Cambridge","Cantril","Carbon","Carlisle","Carpenter","Carroll","Carson","Carter Lake","Cascade","Casey","Castalia","Castana","Cedar Falls","Cedar Rapids","Center Junction","Center Point","Centerville","Central City","Centralia","Chapin","Chariton","Charles City","Charlotte","Charter Oak","Chatsworth","Chelsea","Cherokee","Chester","Chillicothe","Churdan","Cincinnati","Clare","Clarence","Clarinda","Clarion","Clarksville","Clayton","Clearfield","Clear Lake","Cleghorn","Clemons","Clermont","Climbing Hill","Clinton","Clio","Clive","Clutier","Coalville","Coburg","Coggon","Coin","Colesburg","Colfax","College Springs","Collins","Colo","Columbus City","Columbus Junction","Colwell","Conesville","Conrad","Conroy","Conway","Coon Rapids","Coppock","Coralville","Corley","Corning","Correctionville","Corwith","Corydon","Cotter","Coulter","Council Bluffs","Craig","Crawfordsville","Crescent","Cresco","Creston","Cromwell","Crystal Lake","Cumberland","Cumming","Curlew","Cushing","Cylinder","Dakota City","Dallas Center","Dana","Danbury","Danville","Davenport","Davis City","Dawson","Dayton","Decatur City","Decorah","Dedham","Deep River","Defiance","Delaware","Delhi","Delmar","Deloit","Delphos","Delta","Denison","Denmark","Denver","Derby","Des Moines","De Soto","DeWitt","De Witt","Dexter","Diagonal","Diamondhead Lake","Dickens","Dike","Dixon","Dolliver","Donahue","Donnellson","Doon","Douds","Dougherty","Dow City","Dows","Drakesville","Dubuque","Dumont","Duncan","Duncombe","Dundee","Dunkerton","Dunlap","Durango","Durant","Dyersville","Dysart","Eagle Grove","Earlham","Earling","Earlville","Early","East Amana","East Peru","Eddyville","Edgewood","Elberon","Eldon","Eldora","Eldridge","Elgin","Elkader","Elkhart","Elk Horn","Elkport","Elk Run Heights","Elliott","Ellston","Ellsworth","Elma","Ely","Emerson","Emmetsburg","Epworth","Essex","Estherville","Evansdale","Everly","Exira","Exline","Fairbank","Fairfax","Fairfield","Farley","Farmersburg","Farmington","Farnhamville","Farragut","Fayette","Fenton","Ferguson","Fertile","Floris","Floyd","Fonda","Fontanelle","Forest City","Fort Atkinson","Fort Dodge","Fort Madison","Fostoria","Franklin","Fraser","Fredericksburg","Frederika","Fredonia","Fremont","Fruitland","Frytown","Galt","Galva","Garber","Garden City","Garden Grove","Garnavillo","Garner","Garrison","Garwin","Geneva","George","Gibson","Gilbert","Gilbertville","Gillett Grove","Gilman","Gilmore City","Gladbrook","Glenwood","Glidden","Goldfield","Goodell","Goose Lake","Gowrie","Graettinger","Graf","Grafton","Grand Junction","Grand Mound","Grand River","Grandview","Granger","Grant","Granville","Gravity","Gray","Greeley","Greene","Greenfield","Green Mountain","Greenville","Grimes","Grinnell","Griswold","Grundy Center","Gruver","Guernsey","Guthrie Center","Guttenberg","Halbur","Hamburg","Hamilton","Hampton","Hancock","Hanlontown","Hansell","Harcourt","Hardy","Harlan","Harper","Harpers Ferry","Harris","Hartford","Hartley","Hartwick","Harvey","Hastings","Havelock","Haverhill","Hawarden","Hawkeye","Hayesville","Hayfield","Hazleton","Hedrick","Henderson","Hepburn","Hiawatha","High Amana","Hills","Hillsboro","Hinton","Holiday Lake","Holland","Holstein","Holy Cross","Homestead","Hopkinton","Hornick","Hospers","Houghton","Hubbard","Hudson","Hull","Humboldt","Humeston","Hutchins","Huxley","Ida Grove","Imogene","Independence","Indianola","Inwood","Ionia","Iowa City","Iowa Falls","Ireton","Irvington","Irwin","Jackson Junction","Jacksonville","Jamaica","Janesville","Jefferson","Jesup","Jewell Junction","Johnston","Joice","Jolley","Kalona","Kamrar","Kanawha","Kellerton","Kelley","Kellogg","Kensett","Kent","Keokuk","Keomah Village","Keosauqua","Keota","Keswick","Keystone","Kimballton","Kingsley","Kinross","Kirkman","Kirkville","Kiron","Klemme","Knierim","Knoxville","Lacona","Ladora","Lake City","Lake Mills","Lake Panorama","Lake Park","Lakeside","Lake View","Lakota","Lambs Grove","Lamoni","Lamont","La Motte","Lanesboro","Lansing","La Porte City","Larchwood","Larrabee","Latimer","Laurel","Laurens","Lawler","Lawton","Leando","Le Claire","Ledyard","Le Grand","Lehigh","Leighton","Leland","Le Mars","Lenox","Leon","Le Roy","Lester","Letts","Lewis","Libertyville","Lidderdale","Lime Springs","Lincoln","Linden","Lineville","Linn Grove","Lisbon","Liscomb","Little Cedar","Little Rock","Little Sioux","Livermore","Lockridge","Logan","Lohrville","Lone Rock","Lone Tree","Long Grove","Lorimor","Lost Nation","Loveland","Lovilia","Lowden","Low Moor","Luana","Lucas","Luther","Lu Verne","Luxemburg","Luzerne","Lynnville","Lytton","Macedonia","Macksburg","Madrid","Magnolia","Maharishi Vedic City","Malcom","Mallard","Maloy","Malvern","Manchester","Manilla","Manly","Manning","Manson","Mapleton","Maquoketa","Marathon","Marble Rock","Marcus","Marengo","Marion","Marne","Marquette","Marshalltown","Martelle","Martensdale","Martinsburg","Marysville","Mason City","Masonville","Massena","Matlock","Maurice","Maxwell","Maynard","Maysville","McCallsburg","McCausland","McClelland","McGregor","McIntire","Mechanicsville","Mediapolis","Melbourne","Melcher-Dallas","Melrose","Melvin","Menlo","Meriden","Merrill","Meservey","Meyer","Middle Amana","Middletown","Miles","Milford","Miller","Millersburg","Millerton","Milo","Milton","Minburn","Minden","Mineola","Mingo","Missouri Valley","Mitchell","Mitchellville","Modale","Mona","Mondamin","Monmouth","Monona","Monroe","Montezuma","Monticello","Montour","Montrose","Moorhead","Moorland","Moravia","Morley","Morning Sun","Morrison","Moulton","Mount Auburn","Mount Ayr","Mount Pleasant","Mount Sterling","Mount Union","Mount Vernon","Moville","Murray","Muscatine","Mystic","Nashua","Nemaha","Neola","Nevada","New Albin","Newell","Newhall","New Hampton","New Hartford","New Haven","New Liberty","New London","New Market","New Providence","New Sharon","Newton","New Vienna","New Virginia","Nichols","Nodaway","Nora Springs","Northboro","North Buena Vista","North English","North Liberty","North Washington","Northwood","Norwalk","Norway","Numa","Oakland","Oakland Acres","Oakville","Ocheyedan","Odebolt","Oelwein","Ogden","Okoboji","Olds","Olin","Ollie","Onawa","Onslow","Orange City","Orchard","Orient","Orleans","Osage","Osceola","Oskaloosa","Ossian","Osterdock","Otho","Oto","Otranto","Ottosen","Ottumwa","Owasa","Oxford","Oxford Junction","Oyens","Pacific Junction","Packwood","Palmer","Palo","Panama","Panora","Panorama Park","Parkersburg","Park View","Parnell","Paton","Patterson","Paullina","Pella","Peosta","Percival","Perry","Persia","Peterson","Pierson","Pilot Mound","Pioneer","Pisgah","Plainfield","Plano","Pleasant Hill","Pleasanton","Pleasant Plain","Pleasantville","Plover","Plymouth","Pocahontas","Polk City","Pomeroy","Popejoy","Portland","Portsmouth","Postville","Prairieburg","Prairie City","Prescott","Preston","Primghar","Princeton","Promise City","Protivin","Pulaski","Quasqueton","Quimby","Radcliffe","Rake","Ralston","Randalia","Randall","Randolph","Rathbun","Raymond","Readlyn","Reasnor","Redding","Redfield","Red Oak","Reinbeck","Rembrandt","Remsen","Renwick","Rhodes","Riceville","Richland","Rickardsville","Ricketts","Ridgeway","Rinard","Ringsted","Rippey","Riverdale","Riverside","River Sioux","Riverton","Robins","Rochester","Rock Falls","Rockford","Rock Rapids","Rock Valley","Rockwell","Rockwell City","Rodman","Rodney","Roland","Rolfe","Rome","Rose Hill","Roseville","Rossie","Rowan","Rowley","Royal","Rudd","Runnells","Russell","Ruthven","Rutland","Ryan","Sabula","Sac City","Sageville","Salem","Salix","Sanborn","Sandyville","Saylorville","Scarville","Schaller","Schleswig","Scranton","Searsboro","Sergeant Bluff","Sexton","Seymour","Shambaugh","Shannon City","Sharpsburg","Sheffield","Shelby","Sheldahl","Sheldon","Shell Rock","Shellsburg","Shenandoah","Sherrill","Shueyville","Sibley","Sidney","Sigourney","Silver City","Sioux Center","Sioux City","Sioux Rapids","Slater","Sloan","Smithland","Soldier","Solon","Somers","South Amana","South English","Spencer","Spillville","Spirit Lake","Spragueville","Springbrook","Spring Hill","Springville","Stacyville","Stanhope","Stanley","St. Ansgar","St. Anthony","Stanton","Stanwood","State Center","St. Benedict","St. Charles","St. Donatus","Steamboat Rock","St. Joseph","St. Lucas","St. Marys","Stockport","Stockton","St. Olaf","Stone City","Storm Lake","Story City","Stout","St. Paul","Stratford","Strawberry Point","Struble","Stuart","Sully","Sumner","Sun Valley Lake","Superior","Sutherland","Swaledale","Swan","Swea City","Swisher","Tabor","Tama","Templeton","Tennant","Terril","Thayer","Thompson","Thor","Thornburg","Thornton","Thurman","Tiffin","Tingley","Tipton","Titonka","Toeterville","Toledo","Toronto","Traer","Treynor","Tripoli","Truesdale","Truro","Turin","Twin Lakes","Udell","Underwood","Union","Unionville","University Heights","University Park","Urbana","Urbandale","Ute","Vail","Valeria","Van Horne","Van Meter","Van Wert","Varina","Ventura","Victor","Villisca","Vincent","Vining","Vinton","Volga","Wadena","Wahpeton","Walcott","Walford","Walker","Wallingford","Wall Lake","Walnut","Wapello","Washburn","Washington","Washta","Waterloo","Waterville","Watkins","Waucoma","Waukee","Waukon","Waverly","Wayland","Webb","Webster","Webster City","Weldon","Wellman","Wellsburg","Welton","Wesley","West Amana","West Bend","West Branch","West Burlington","West Chester","West Des Moines","Westfield","Westgate","West Liberty","West Okoboji","Weston","Westphalia","West Point","Westside","West Union","Westwood","What Cheer","Wheatland","Whiting","Whittemore","Whitten","Willey","Williams","Williamsburg","Williamson","Wilton","Windsor Heights","Winfield","Winterset","Winthrop","Wiota","Woden","Woodbine","Woodburn","Woodward","Woolstock","Worthington","Wyoming","Yale","Yetter","Yorktown","Zearing","Zwingle"],cities.India=["Mumbai","Pune","Surat","New Delhi","Bangalore","---------------------------------------------","Adilabad","Agra","Ahmedabad","Ahmednagar","Aizawl","Ajitgarh (Mohali)","Ajmer","Akola","Alappuzha","Aligarh","Alirajpur","Allahabad","Almora","Alwar","Ambala","Ambedkar Nagar","Amravati","Amreli district","Amritsar","Anand","Anantapur","Anantnag","Angul","Anjaw","Anuppur","Araria","Ariyalur","Arwal","Ashok Nagar","Auraiya","Aurangabad","Aurangabad","Azamgarh","Badgam","Bagalkot","Bageshwar","Bagpat","Bahraich","Baksa","Balaghat","Balangir","Balasore","Ballia","Balrampur","Banaskantha","Banda","Bandipora","Banka","Bankura","Banswara","Barabanki","Baramulla","Baran","Bardhaman","Bareilly","Bargarh (Baragarh)","Barmer","Barnala","Barpeta","Barwani","Bastar","Basti","Bathinda","Beed","Begusarai","Belgaum","Bellary","Betul","Bhadrak","Bhagalpur","Bhandara","Bharatpur","Bharuch","Bhavnagar","Bhilwara","Bhind","Bhiwani","Bhojpur","Bhopal","Bidar","Bijapur","Bijapur","Bijnor","Bikaner","Bilaspur","Bilaspur","Birbhum","Bishnupur","Bokaro","Bongaigaon","Boudh (Bauda)","Budaun","Bulandshahr","Buldhana","Bundi","Burhanpur","Buxar","Cachar","Central Delhi","Chamarajnagar","Chamba","Chamoli","Champawat","Champhai","Chandauli","Chandel","Chandigarh","Chandrapur","Changlang","Chatra","Chennai","Chhatarpur","Chhatrapati Shahuji Maharaj Nagar","Chhindwara","Chikkaballapur","Chikkamagaluru","Chirang","Chitradurga","Chitrakoot","Chittoor","Chittorgarh","Churachandpur","Churu","Coimbatore","Cooch Behar","Cuddalore","Cuttack","Dadra and Nagar Haveli","Dahod","Dakshin Dinajpur","Dakshina Kannada","Daman","Damoh","Dantewada","Darbhanga","Darjeeling","Darrang","Datia","Dausa","Davanagere","Debagarh (Deogarh)","Dehradun","Deoghar","Deoria","Dewas","Dhalai","Dhamtari","Dhanbad","Dhar","Dharmapuri","Dharwad","Dhemaji","Dhenkanal","Dholpur","Dhubri","Dhule","Dibang Valley","Dibrugarh","Dima Hasao","Dimapur","Dindigul","Dindori","Diu","Doda","Dumka","Dungapur","Durg","East Champaran","East Delhi","East Garo Hills","East Khasi Hills","East Siang","East Sikkim","East Singhbhum","Eluru","Ernakulam","Erode","Etah","Etawah","Faizabad","Faridabad","Faridkot","Farrukhabad","Fatehabad","Fatehgarh Sahib","Fatehpur","Fazilka","Firozabad","Firozpur","Gadag","Gadchiroli","Gajapati","Ganderbal","Gandhinagar","Ganganagar","Ganjam","Garhwa","Gautam Buddh Nagar","Gaya","Ghaziabad","Ghazipur","Giridih","Goalpara","Godda","Golaghat","Gonda","Gondia","Gopalganj","Gorakhpur","Gulbarga","Gumla","Guna","Guntur","Gurdaspur","Gurgaon","Gwalior","Hailakandi","Hamirpur","Hamirpur","Hanumangarh","Harda","Hardoi","Haridwar","Hassan","Haveri district","Hazaribag","Hingoli","Hissar","Hooghly","Hoshangabad","Hoshiarpur","Howrah","Hyderabad","Hyderabad","Idukki","Imphal East","Imphal West","Indore","Jabalpur","Jagatsinghpur","Jaintia Hills","Jaipur","Jaisalmer","Jajpur","Jalandhar","Jalaun","Jalgaon","Jalna","Jalore","Jalpaiguri","Jammu","Jamnagar","Jamtara","Jamui","Janjgir-Champa","Jashpur","Jaunpur district","Jehanabad","Jhabua","Jhajjar","Jhalawar","Jhansi","Jharsuguda","Jhunjhunu","Jind","Jodhpur","Jorhat","Junagadh","Jyotiba Phule Nagar","Kabirdham (formerly Kawardha)","Kadapa","Kaimur","Kaithal","Kakinada","Kalahandi","Kamrup","Kamrup Metropolitan","Kanchipuram","Kandhamal","Kangra","Kanker","Kannauj","Kannur","Kanpur","Kanshi Ram Nagar","Kanyakumari","Kapurthala","Karaikal","Karauli","Karbi Anglong","Kargil","Karimganj","Karimnagar","Karnal","Karur","Kasaragod","Kathua","Katihar","Katni","Kaushambi","Kendrapara","Kendujhar (Keonjhar)","Khagaria","Khammam","Khandwa (East Nimar)","Khargone (West Nimar)","Kheda","Khordha","Khowai","Khunti","Kinnaur","Kishanganj","Kishtwar","Kodagu","Koderma","Kohima","Kokrajhar","Kolar","Kolasib","Kolhapur","Kolkata","Kollam","Koppal","Koraput","Korba","Koriya","Kota","Kottayam","Kozhikode","Krishna","Kulgam","Kullu","Kupwara","Kurnool","Kurukshetra","Kurung Kumey","Kushinagar","Kutch","Lahaul and Spiti","Lakhimpur","Lakhimpur Kheri","Lakhisarai","Lalitpur","Latehar","Latur","Lawngtlai","Leh","Lohardaga","Lohit","Lower Dibang Valley","Lower Subansiri","Lucknow","Ludhiana","Lunglei","Madhepura","Madhubani","Madurai","Mahamaya Nagar","Maharajganj","Mahasamund","Mahbubnagar","Mahe","Mahendragarh","Mahoba","Mainpuri","Malappuram","Maldah","Malkangiri","Mamit","Mandi","Mandla","Mandsaur","Mandya","Mansa","Marigaon","Mathura","Mau","Mayurbhanj","Medak","Meerut","Mehsana","Mewat","Mirzapur","Moga","Mokokchung","Mon","Moradabad","Morena","Munger","Murshidabad","Muzaffarnagar","Muzaffarpur","Mysore","Nabarangpur","Nadia","Nagaon","Nagapattinam","Nagaur","Nagpur","Nainital","Nalanda","Nalbari","Nalgonda","Namakkal","Nanded","Nandurbar","Narayanpur","Narmada","Narsinghpur","Nashik","Navsari","Nawada","Nawanshahr","Nayagarh","Neemuch","Nellore","Nilgiris","Nizamabad","North 24 Parganas","North Delhi","North East Delhi","North Goa","North Sikkim","North Tripura","North West Delhi","Nuapada","Ongole","Osmanabad","Pakur","Palakkad","Palamu","Pali","Palwal","Panchkula","Panchmahal","Panchsheel Nagar district (Hapur)","Panipat","Panna","Papum Pare","Parbhani","Paschim Medinipur","Patan","Pathanamthitta","Pathankot","Patiala","Patna","Pauri Garhwal","Perambalur","Phek","Pilibhit","Pithoragarh","Pondicherry","Poonch","Porbandar","Pratapgarh","Pratapgarh","Pudukkottai","Pulwama","Purba Medinipur","Puri","Purnia","Purulia","Raebareli","Raichur","Raigad","Raigarh","Raipur","Raisen","Rajauri","Rajgarh","Rajkot","Rajnandgaon","Rajsamand","Ramabai Nagar (Kanpur Dehat)","Ramanagara","Ramanathapuram","Ramban","Ramgarh","Rampur","Ranchi","Ratlam","Ratnagiri","Rayagada","Reasi","Rewa","Rewari","Ri Bhoi","Rohtak","Rohtas","Rudraprayag","Rupnagar","Sabarkantha","Sagar","Saharanpur","Saharsa","Sahibganj","Saiha","Salem","Samastipur","Samba","Sambalpur","Sangli","Sangrur","Sant Kabir Nagar","Sant Ravidas Nagar","Saran","Satara","Satna","Sawai Madhopur","Sehore","Senapati","Seoni","Seraikela Kharsawan","Serchhip","Shahdol","Shahjahanpur","Shajapur","Shamli","Sheikhpura","Sheohar","Sheopur","Shimla","Shimoga","Shivpuri","Shopian","Shravasti","Sibsagar","Siddharthnagar","Sidhi","Sikar","Simdega","Sindhudurg","Singrauli","Sirmaur","Sirohi","Sirsa","Sitamarhi","Sitapur","Sivaganga","Siwan","Solan","Solapur","Sonbhadra","Sonipat","Sonitpur","South 24 Parganas","South Delhi","South Garo Hills","South Goa","South Sikkim","South Tripura","South West Delhi","Sri Muktsar Sahib","Srikakulam","Srinagar","Subarnapur (Sonepur)","Sultanpur","Sundergarh","Supaul","Surendranagar","Surguja","Tamenglong","Tarn Taran","Tawang","Tehri Garhwal","Thane","Thanjavur","The Dangs","Theni","Thiruvananthapuram","Thoothukudi","Thoubal","Thrissur","Tikamgarh","Tinsukia","Tirap","Tiruchirappalli","Tirunelveli","Tirupur","Tiruvallur","Tiruvannamalai","Tiruvarur","Tonk","Tuensang","Tumkur","Udaipur","Udalguri","Udham Singh Nagar","Udhampur","Udupi","Ujjain","Ukhrul","Umaria","Una","Unnao","Upper Siang","Upper Subansiri","Uttar Dinajpur","Uttara Kannada","Uttarkashi","Vadodara","Vaishali","Valsad","Varanasi","Vellore","Vidisha","Viluppuram","Virudhunagar","Visakhapatnam","Vizianagaram","Vyara","Warangal","Wardha","Washim","Wayanad","West Champaran","West Delhi","West Garo Hills","West Kameng","West Khasi Hills","West Siang","West Sikkim","West Singhbhum","West Tripura","Wokha","Yadgir","Yamuna Nagar","Yanam","Yavatmal","Zunheboto"];
		
		
		function fillSelect(nValue,nList){


					if (nValue=="India" || nValue=="UAE" ||  nValue=="Kuwait"||  nValue=="1" ||  nValue=="44" ||  nValue=="61" ||  nValue=="974" ||  nValue=="968" ||  nValue=="966") {

						 $('#cities_txt').hide();
				    $('#cities_sel').show();
			nList.options.length = 1;
			var curr = cities[nValue];
			for (each in curr)
				{
				 var nOption = document.createElement('option'); 
				 nOption.appendChild(document.createTextNode(curr[each])); 
				 nOption.setAttribute("value",curr[each]); 			 
				 nList.appendChild(nOption); 
				}


				
				if(nValue=="India")
				{
						$("#country_code").val("+91");
						$(".verify").show();

				}
				else if(nValue=="UAE")
				{
						$("#country_code").val("+971");
						//if($("#country_code").val()=="+971")
							$(".verify").hide();
				}
				else if(nValue=="Kuwait")
				{
						$("#country_code").val("+965");
						//if($("#country_code").val()=="+965")
							$(".verify").hide();
				}
				else
				{
					$("#country_code").val('+'+nValue);
					$(".verify").hide();
				}
			 }
			 else
			 {
			 	$("#country_code").val('+'+nValue);
			 	$('#cities_txt').show();
				   $('#cities_sel').hide();
				   $(".verify").hide();
			 }
		}

	//<!-----end of dorpdon code -->
				function validate()
						{

							if($("#states").val()=='')
							{
								alert('Please select country.');
								return false ;	
							}
								// });
								if( $("#cities_txt").val()=='' &&
								 $("#states").val()!='India' &&
								 $("#states").val()!='UAE' &&
								 $("#states").val()!='Kuwait' &&
								 $("#states").val()!='966' &&
								 $("#states").val()!='968' &&
								 $("#states").val()!='974' &&
								 $("#states").val()!='1' &&
								 $("#states").val()!='44' &&
								 $("#states").val()!='61' 
								 )


							{
								alert('Please enter city.');
								 $("#cities").focus();
								return false ;	
							}
							else if($("#cities").val()=='' && (
								 $("#states").val()=='India' ||
								 $("#states").val()=='UAE' ||
								 $("#states").val()=='Kuwait' ||
								 $("#states").val()=='966' ||
								 $("#states").val()=='968' ||
								 $("#states").val()=='974' ||
								 $("#states").val()=='1' ||
								 $("#states").val()=='44' ||
								 $("#states").val()=='61' 
								))
							{
								alert('Please enter city.');
								 $("#cities").focus();
								return false ;
							}
							
								if($("#phone").val()=='')
							{
								alert('Please Enter mobile number.');
								 $("#phone").focus();
								return false ;	
							}
							var mob = /^[1-9]{1}[0-9]{9}$/;
							var txtMobile = document.getElementById('phone');
							if (mob.test(txtMobile.value) == false && $("#country_code").val()=='+91') {
							    alert("Please enter valid mobile number.");
							    txtMobile.focus();
							    return false;
							}

							   $(".submit").addClass("loading");
										    setTimeout(function() {
										      $(".submit").addClass("hide-loading");
										      // For failed icon just replace ".done" with ".failed"
										      $(".done").addClass("finish");
										    }, 3000);
										    setTimeout(function() {
										      $(".submit").removeClass("loading");
										      $(".submit").removeClass("hide-loading");
										      $(".done").removeClass("finish");
										      $(".failed").removeClass("finish");
										    }, 5000);
										  // })
		      					//debugger;
							
							return true ;	

						}

				function setTextField(ddl) {
							        document.getElementById('make_text').value = ddl.options[ddl.selectedIndex].text;
							    }

			$(document).ready(function($){
				
				$("#cities").keydown(function (e) {    
					  if (e.which == 9) {
					         
					    $("#phone").focus();
					    e.preventDefault();
					  }
					});
				 	

				$('#cities_sel').show();
				
				
	          
	    $.ajax({
	        url: "https://geoip-db.com/jsonp",
	        jsonpCallback: "callback",
	        dataType: "jsonp",
	        success: function( location ) {
	           

	            if(location.country_name=="India")
	            {
	                    $("#states").val("India");
	                    $("#country_code").val("+91");
	                    $(".verify").show();

	                    for(var i=0, l = cities['India'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['India'][i]+'">'+cities['India'][i]+'</option>' );
						}

	            }   
	            if(location.country_name=="United Arab Emirates")
	            {
	                    $("#states").val("UAE");
	                    $("#country_code").val("+971");
	                     for(var i=0, l = cities['UAE'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['UAE'][i]+'">'+cities['UAE'][i]+'</option>' );
						}
	            }   
	            if(location.country_name=="Kuwait")
	            {
	                    $("#states").val("Kuwait");
	                    $("#country_code").val("+965");
	                      for(var i=0, l = cities['Kuwait'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['Kuwait'][i]+'">'+cities['Kuwait'][i]+'</option>' );
								}
	            }
	            if(location.country_name=="Saudi Arabia")
	            {
	                    $("#states").val("966");
	                    $("#country_code").val("+966");
	       
	         for(var i=0, l = cities['966'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['966'][i]+'">'+cities['966'][i]+'</option>' );
								}
			
				   $(".verify").hide();
	            }
	            if(location.country_name=="Oman")
	            {
	                    $("#states").val("968");
	                    $("#country_code").val("+968");
	       
	       		for(var i=0, l = cities['968'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['968'][i]+'">'+cities['968'][i]+'</option>' );
								}
				
				   $(".verify").hide();
	            }
	              if(location.country_name=="Qatar")
	            {
	                    $("#states").val("974");
	                    $("#country_code").val("+974");
	       
	       for(var i=0, l = cities['974'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['974'][i]+'">'+cities['974'][i]+'</option>' );
								}
					
				   $(".verify").hide();
	            }
	              if(location.country_name=="Singapore")
	            {
	                    $("#states").val("65");
	                    $("#country_code").val("+65");
	       
					$('#cities_txt').show();
				   $('#cities_sel').hide();
				   $(".verify").hide();
	            }
	              if(location.country_name=="United States of America")
	            {
	                    $("#states").val("1");
	                    $("#country_code").val("+1");
	       				$('#cities_sel').show();

	         for(var i=0, l = cities['1'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['1'][i]+'">'+cities['1'][i]+'</option>' );
								}

				   $(".verify").hide();
	            }
	             if(location.country_name=="United Kingdom")
	            {
	                    $("#states").val("44");
	                    $("#country_code").val("+44");
	       				$('#cities_sel').show();
	         for(var i=0, l = cities['44'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['44'][i]+'">'+cities['44'][i]+'</option>' );
								}

				
				   $(".verify").hide();
	            }
	             if(location.country_name=="Australia")
	            {
	                    $("#states").val("61");
	                    $("#country_code").val("+61");
	       
					
				   $('#cities_sel').show();
				  for(var i=0, l = cities['61'].length; i < l; i++){

				     $('.cities').append( '<option value="'+cities['61'][i]+'">'+cities['61'][i]+'</option>' );
								}
				   $(".verify").hide();
	            }

	        }
	    });     
	    
			    id="115d7610a38791964dc61f093a0c0158"

			   
				// $('.disclaimer-wrapper').show();
			 //    $('.popuplayer').show();
				

			    $('#disclaimer a').on('click',function(){
			    $('.disclaimer-wrapper').hide();
			    $('.popuplayer').hide();    
			      $.ajax({
			        type:"POST",
			        dataType:"json",
			        url:'/site/add_disclaimer',
			        data:{sessionid:id},
			        success: function(resp, status, xhr){
			        },
			        error: function(resp, status, xhr){
			        }
			      });
			    });
			});
			</script>
		
	</body>
	</html>