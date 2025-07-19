	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<?php include 'head.php'; ?>
 <!-- Title -->
  <title>Kuber Cab | Taxi Service in Nashik | Airport & Outstation Cab Booking</title>

  <!-- Meta Description -->
  <meta name="description" content="Kuber Cab offers 24/7 taxi service in Nashik for airport transfers, local city rides, and outstation trips. Book clean, reliable, and affordable cabs anytime.">

  <!-- Meta Keywords -->
  <meta name="keywords" content="Kuber Cab, cab service Nashik, taxi booking Nashik, airport cab Nashik, outstation cab, Nashik to Mumbai cab, Nashik to Pune taxi, one way cab, round trip taxi, best cab Nashik">

  <!-- Robots -->
  <meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

  <!-- Canonical -->
  <link rel="canonical" href="https://kubercab.co" />

  <!-- Open Graph / Facebook -->
  <meta property="og:title" content="Kuber Cab | Taxi Service in Nashik | Airport & Outstation Cab Booking" />
  <meta property="og:description" content="Book 24/7 taxi service in Nashik with Kuber Cab. Airport pickup/drop, local rides, and outstation cabs. Safe, affordable, and easy to book." />
  <meta property="og:url" content="https://kubercab.co" />
  <meta property="og:image" content="https://kubercab.co/img/logo.png" />
  <meta property="og:type" content="website" />

  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image" />
  <meta property="twitter:domain" content="kubercab.co" />
  <meta property="twitter:url" content="https://kubercab.co" />
  <meta name="twitter:title" content="Kuber Cab | Taxi Service in Nashik | Airport & Outstation Cab Booking" />
  <meta name="twitter:description" content="Need a taxi in Nashik? Kuber Cab offers local and outstation cab service with 24/7 support and clean AC vehicles." />
  <meta property="twitter:image" content="https://kubercab.co/img/logo.png" />
  <script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "TaxiService",
  "name": "Kuber Cab",
  "url": "https://kubercab.co",
  "logo": "https://kubercab.co/img/logo.png",
  "image": "https://kubercab.co/img/logo.png",
  "description": "Kuber Cab offers 24/7 taxi service in Nashik including airport transfers, local rides, and outstation cab booking. Fixed pricing, clean cars & expert drivers.",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "Nashik",
    "addressLocality": "Nashik",
    "addressRegion": "Maharashtra",
    "postalCode": "422003",
    "addressCountry": "IN"
  },
  "telephone": "+917775000223",
  "areaServed": ["Nashik", "Mumbai", "Pune", "Shirdi", "Surat", "Aurangabad"],
  "openingHours": "24/7",
  "priceRange": "₹₹"
}
</script>

		</head>
		<body>	
			<?php include 'nav-bar.php'; ?>

			<!-- start banner Area -->
			<section class="banner-area relative" id="home">
				<div class="overlay overlay-bg"></div>	
				<div class="container">
					<div class="row fullscreen d-flex align-items-center justify-content-between">
						<div class="banner-content col-lg-6 col-md-6 ">
							<h6 class="text-white ">Kuber Cab</h6>
							<h1 class="text-uppercase">
								Your Trusted Ride Across Maharashtra & Gujarat.			
							</h1>
							<p class="pt-10 pb-10 text-white">
								Reliable | Affordable | Safe – Your journey, our priority.
								Book cabs instantly for local, outstation, and airport transfers.
							</p>
							<a href="tel:+917775000223" class="primary-btn text-uppercase">Call for taxi</a>
						</div>
						<div class="col-lg-4  col-md-6 header-right">
							<h4 id="booking-form" class="pb-30">Book Your Ride Now</h4>
							<!-- Tabs -->
<!-- Tabs -->
<div class="tab-menu">
  <button class="tab active" data-tab="oneway-form">ONE-WAY</button>
  <button class="tab" data-tab="outstation-form">OUT-STATION</button>
  <button class="tab" data-tab="rental-form">RENTAL</button>
</div>

<!-- Forms -->
<div class="tab-content">

  <!-- ONE-WAY Form -->
  <form id="oneway-form" class="ride-form active" action="email-function.php" method="POST">
    <input type="hidden" name="form_type" value="oneway">
    <input type="text" name="name" placeholder="Your name" required>
    <input type="email" name="email" placeholder="Email address" required>
    <input type="tel" name="phone" placeholder="Phone number" required>
    <input type="text" name="from" placeholder="Pickup location" required>
    <input type="text" name="to" placeholder="Drop location" required>
    <input type="date" name="date" required>
    <div class="time-group">
      <input type="text" name="time" placeholder="HH:MM" required>
      
    </div>
    <button type="submit">Make Reservation</button>
  </form>

  <!-- OUT-STATION Form -->
  <form id="outstation-form" class="ride-form" action="email-function.php" method="POST">
    <input type="hidden" name="form_type" value="outstation">
    <input type="text" name="name" placeholder="Your name" required>
    <input type="email" name="email" placeholder="Email address" required>
    <input type="tel" name="phone" placeholder="Phone number" required>
    <input type="text" name="from" placeholder="Pickup location" required>
    <input type="text" name="to" placeholder="Drop location" required>
    <input type="number" name="days" placeholder="Number of days" required>
    <input type="date" name="date" required>
    <div class="time-group">
      <input type="text" name="time" placeholder="HH:MM" required>
    
    </div>
    <button type="submit">Make Reservation</button>
  </form>

  <!-- RENTAL Form -->
  <form id="rental-form" class="ride-form" action="email-function.php" method="POST">
    <input type="hidden" name="form_type" value="rental">
    <input type="text" name="name" placeholder="Your name" required>
    <input type="email" name="email" placeholder="Email address" required>
    <input type="tel" name="phone" placeholder="Phone number" required>
    <input type="text" name="from" placeholder="Pickup location" required>
    <input type="text" name="to" placeholder="Drop location" required>
    <input type="date" name="date" required>
    <div class="time-group">
      <input type="text" name="time" placeholder="HH:MM" required>
    </div>
    <button type="submit">Make Reservation</button>
  </form>
</div>


						</div>											
					</div>
				</div>					
			</section>
			<!-- End banner Area -->	

			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/about-img.webp" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Your Local Ride, Now Statewide!</h1>
							<h4>We are here to listen from you deliver exellence</h4>
							<p>Founded in 2018 in Nashik, Kuber Cab has grown into a trusted cab service provider across Maharashtra and Gujarat. What started as a small local operation has become a growing business focused on reliable, safe, and affordable travel for every kind of journey—be it city rides, outstation trips, or airport transfers.
We’re on a mission to make travel easy and comfortable for everyone, one ride at a time.								
							</p>
							<a class="text-uppercase primary-btn" href="#">Get Details</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<h1>Why Choose Kuber Cab Service?</h1>
						<p>Delivering safe, comfortable, and on-time cab services across Maharashtra and Gujarat – trusted by thousands since 2018.</p>
					</div>
					<div class="row">
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-car"></span>
							<a href="#"><h4>Reliable & Punctual</h4></a>
							<p>
								Timely pickups and drop-offs are our promise. We value your time and ensure every ride is smooth and on schedule.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-briefcase"></span>
							<a href="#"><h4>Safe & Comfortable Fleet</h4></a>
							<p>
								All our drivers are verified, and our cabs are clean and well-maintained—so you travel with complete peace of mind.
							</p>
						</div>
						<div class="col-lg-4 single-service">
							<span class="lnr lnr-bus"></span>
							<a href="#"><h4>Transparent Pricing</h4></a>
							<p>
								Usage of the Internet is becoming more common due to rapid advancement of technology and power.
							</p>
						</div>												
					</div>	
				</div>	
			</section>
			<!-- End services Area -->

<!-- Start home-about Area -->
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/kuber-cab-nashik.jpg" alt="">

						</div>
						<div class="col-lg-6 about-right">
							<h1>Local Booking in Nashik</h1>
							<h4>Your Trusted Cab Service in Nashik</h4>
							<p>From Panchavati to Gangapur Road, or from City Centre Mall to your office — our local cab service in Nashik gets you there comfortably and on time. Ideal for daily commutes, errands, and short trips within the city.								
							</p>
							<a class="text-uppercase primary-btn" href="/nashik-local-cab-booking">Book Now</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<h1>Outstation Booking</h1>
							<h4>Outstation Rides from Nashik, Made Easy</h4>
							<p>Whether it's a pilgrimage to Shirdi, a weekend in Lonavala, or a business trip to Pune — we offer clean, comfortable cars with experienced drivers for all your long-distance travel needs.								
							</p>
							<a class="text-uppercase primary-btn" href="/outstation-cab-booking">Book Now</a>
							
						</div>
						<div class="col-lg-6 about-right">
							<img class="img-fluid" src="img/kuber-cab-outstation.jpg" alt="">
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/kuber-cab-airport.jpg" alt="">
							
						</div>
						<div class="col-lg-6 about-right">
							<h1>Airport Booking</h1>
							<h4>Cab Service to Ozar and Nearby Airports</h4>
							<p>Need a ride to Ozar Airport (Nashik Airport), Mumbai Airport, or Pune Airport? Our airport cab service offers safe, on-time pickups and drops from anywhere in Nashik. Flight-tracking included!							
							</p>
							<a class="text-uppercase primary-btn" href="/airport-cab">Book Now</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- End image-gallery Area -->
			 <!-- =========================
     Top City Routes Section
     ========================= -->
<section class="top-cities-section section-space">
  <div class="container">
    <h2 class="section-title">Top Cab Routes Across Maharashtra & Gujarat</h2>
    <p class="section-subtitle">Explore our most popular taxi routes from Maharashtra and Gujarat. Trusted by thousands for comfort and affordability.</p>
    <div class="underline"></div>

    <div class="cities-grid">
      <ul>
        <li><a href="#booking-form">Pune To Mumbai cab</a></li>
        <li><a href="#booking-form">Pune To Nashik cab</a></li>
        <li><a href="#booking-form">Pune To Lonavala cab</a></li>
        <li><a href="#booking-form">Pune To Kolhapur cab</a></li>
        <li><a href="#booking-form">Pune To Solapur cab</a></li>
        <li><a href="#booking-form">Pune To Ahmednagar cab</a></li>
        <li><a href="#booking-form">Pune To Pandharpur cab</a></li>
      </ul>
      <ul>
        <li><a href="#booking-form">Mumbai To Pune cab</a></li>
        <li><a href="#booking-form">Mumbai To Shirdi cab</a></li>
        <li><a href="#booking-form">Mumbai To Nashik cab</a></li>
        <li><a href="#booking-form">Mumbai To Kolhapur cab</a></li>
        <li><a href="#booking-form">Mumbai To Sangli cab</a></li>
        <li><a href="#booking-form">Mumbai To Solapur cab</a></li>
        <li><a href="#booking-form">Mumbai To Satara cab</a></li>
      </ul>
      <ul>
        <li><a href="#booking-form">Nashik To Mumbai cab</a></li>
        <li><a href="#booking-form">Nashik To Pune cab</a></li>
        <li><a href="#booking-form">Nashik To Sangli cab</a></li>
        <li><a href="#booking-form">Nashik To Goa cab</a></li>
        <li><a href="#booking-form">Nashik To Bhimashankar cab</a></li>
        <li><a href="#booking-form">Nashik To Kolhapur cab</a></li>
        <li><a href="#booking-form">Nashik To Satara cab</a></li>
      </ul>
      <ul>
        <li><a href="#booking-form">Ahmedabad To Mumbai cab</a></li>
        <li><a href="#booking-form">Ahmedabad To Pune cab</a></li>
        <li><a href="#booking-form">Ahmedabad To Nashik cab</a></li>
        <li><a href="#booking-form">Surat To Mumbai cab</a></li>
        <li><a href="#booking-form">Surat To Nashik cab</a></li>
        <li><a href="#booking-form">Vadodara To Pune cab</a></li>
        <li><a href="#booking-form">Rajkot To Mumbai cab</a></li>
      </ul>
    </div>
  </div>
</section>

			
			<!-- Start reviews Area -->
			<section class="reviews-area section-gap">
				<div class="container">
					<div class="row section-title">
						<h1>Client’s Reviews</h1>
						<p>Who are in extremely love with eco friendly system.</p>
					</div>					
					<div class="row">
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Gaurav Sharma</h4>
								<p>
									I have always nice experience with Kuber Taxi Services. Whenever I visit Pune or Nasik, I always hire cab from Kuber Taxi Services. All the drivers are well behaved and respect time of customer, and all the cabs are well maintained.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Nilesh Patil</h4>
								<p>
									Kuber Cab service is excellent. Right from booking till the end of our journey, they were supportive. The cab was provided on time with proper pick and dropped at the destination earliest , Overall, it was a great experience. Highly recommended!
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>vinay sen</h4>
								<p>
									Kuber cab taxi is very good, we travelled with them for 3 days and we did not even realize that we were from outside, they guided us very well, area hotel, food Mr Ravi is very good person .
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Jiya Karamchandani</h4>
								<p>
									The driver was decent in time Ishika arranged everything on call .. hassle free travel... good experience
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Anup Kr. Agarwala</h4>
								<p>
									We had a great experience! We were assigned a well behaved driver who was well informed about the place. The price was reasonable and overall it was quite a nice trip
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star"></span>
								</div>
							</div>
						</div>	
						<div class="col-lg-4 col-md-6">
							<div class="single-review">
								<h4>Prasad Jadhav</h4>
								<p>
									I recently travelled from Chatrapati Shivaji Maharaj International airport to home and I found Kuber cab taxi service awesome with reasonable prices.They are super punctual and their drivers are very skilled.I highly recommend using their cab taxi service rather than using other expensive cabs.
								</p>
								<div class="star">
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
									<span class="fa fa-star checked"></span>
								</div>
							</div>
						</div>																															
					</div>
				</div>	
			</section>
			<!-- End reviews Area -->
							
			<!-- Start home-calltoaction Area -->
			<section class="home-calltoaction-area relative">
				<div class="container">
					<div class="overlay overlay-bg"></div>
					<div class="row align-items-center section-gap">
						<div class="col-lg-8">
							<h1>Need Help? Just Give Us a Call!</h1>
							<p>
								Whether you need booking assistance, travel updates, or have a quick question — our support team is just a call away. We’re available 24/7 to ensure your journey is smooth and stress-free.
							</p>
						</div>
						<div class="col-lg-4 btn-left">
							<a href="tel:+917775000223" class="primary-btn">Call Us</a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-calltoaction Area -->
			 <section class="faq-section">
  <h2 class="faq-title">Frequently Asked Questions</h2>

  <div class="faq-item">
    <button class="faq-question">1. How can I book a cab with Kuber Cab?</button>
    <div class="faq-answer">
      <p>You can book a cab easily through our website, WhatsApp, or by calling our customer support. We offer quick confirmation and 24/7 availability for all major routes like Nashik to Mumbai and Nashik to Pune.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">2. What types of cabs are available for outstation travel?</button>
    <div class="faq-answer">
      <p>We offer a range of AC vehicles including Sedans, SUVs, and Tempo Travellers for individuals, families, and group travel.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">3. Do you provide airport pickup and drop services?</button>
    <div class="faq-answer">
      <p>Absolutely! We provide 24/7 airport drop and pickup services for Nashik, Shirdi, Mumbai and Pune airports. Our drivers are punctual and ensure you reach your terminal on time.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">4. Are your cab fares fixed or does the price change later?</button>
    <div class="faq-answer">
      <p>All our fares are fixed and transparent. There are no hidden charges — you pay exactly what is quoted at the time of booking.</p>
    </div>
  </div>

  <div class="faq-item">
    <button class="faq-question">5. Is Kuber Cab service available during early morning or late-night hours?</button>
    <div class="faq-answer">
      <p>Yes, our cabs are available 24/7, including early mornings and late nights. Just make sure to book in advance for smoother coordination.</p>
    </div>
  </div>
</section>

			
	<?php include 'foot-nav.php'; ?>
	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>								
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
			<script src="js/common-js.js"></script>
		</body>
	</html>