	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
    <?php include 'head.php'; ?>
	<!-- Title -->
<!-- Title -->
<title>Nashik to Mumbai Cab Booking | One Way & Round Trip Taxi – Kuber Cab</title>

<!-- Meta Description -->
<meta name="description" content="Book Nashik to Mumbai cab online with Kuber Cab. One-way & round trip taxi service with fixed rates, AC cars, trained drivers & 24/7 availability. Call now!">

<!-- Meta Keywords -->
<meta name="keywords" content="Nashik to Mumbai cab, Nashik to Mumbai taxi, one way cab Nashik to Mumbai, round trip cab Nashik Mumbai, Kuber Cab, Nashik cab service, Mumbai drop taxi, AC cab Nashik to Mumbai, online taxi booking Nashik to Mumbai">

<!-- Robots -->
<meta name="robots" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1" />

<!-- Canonical URL -->
<link rel="canonical" href="https://kubercab.co/nashik-mumbai-cab-booking" />


<!-- Open Graph Meta Tags -->
<meta property="og:title" content="Nashik to Mumbai Cab Booking | One Way & Round Trip Taxi – Kuber Cab" />
<meta property="og:description" content="Kuber Cab offers 24/7 taxi service from Nashik to Mumbai. Book clean, affordable AC cabs for one-way or return trips. Fixed fares & expert drivers." />
<meta property="og:url" content="https://kubercab.co/nashik-mumbai-cab-booking" />
<meta property="og:image" content="https://kubercab.co/img/logo.png" />
<meta property="og:type" content="website" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:domain" content="kubercab.co" />
<meta property="twitter:url" content="https://kubercab.co/nashik-mumbai-cab-booking" />
<meta name="twitter:title" content="Nashik to Mumbai Cab Booking | One Way & Round Trip Taxi – Kuber Cab" />
<meta name="twitter:description" content="Book your ride from Nashik to Mumbai with Kuber Cab. AC cabs, professional drivers, and transparent fares. Available 24x7." />
<meta property="twitter:image" content="https://kubercab.co/img/logo.png" />

<!-- JSON-LD Schema Markup -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Nashik to Mumbai Cab Booking",
  "description": "Book your cab from Nashik to Mumbai with Kuber Cab. Clean, affordable and on-time service available 24/7. Choose from hatchback, sedan or SUV.",
  "brand": {
    "@type": "Brand",
    "name": "Kuber Cab"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://kubercab.co/nashik-mumbai-cab-booking",
    "priceCurrency": "INR",
    "price": "Starting from ₹2000",
    "itemCondition": "https://schema.org/NewCondition",
    "availability": "https://schema.org/InStock"
  },
  "provider": {
    "@type": "Organization",
    "name": "Kuber Cab",
    "url": "https://kubercab.co",
    "logo": "https://kubercab.co/img/logo.png",
    "telephone": "+917775000223",
    "address": {
      "@type": "PostalAddress",
      "addressLocality": "Nashik",
      "addressRegion": "Maharashtra",
      "postalCode": "422003",
      "addressCountry": "IN"
    }
  }
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
								Book Trusted Nashik to Mumbai Cab Service — 24/7 Availability		
							</h1>
							<p class="pt-10 pb-10 text-white">
								Travel hassle-free from Nashik to Mumbai with Kuber Cab. We offer safe, on-time, and affordable one-way and outstation cab services — perfect for families, solo travelers, and airport pickups. Our AC cabs with professional drivers ensure you ride in comfort every time.
							</p>
							<a href="tel:+917775000223" class="primary-btn text-uppercase">Book Cab Now</a>
						</div>
					
				</div>					
			</section>
			<!-- End banner Area -->	
<!-- Custom Booking Form -->
<div class="custom-booking-wrapper" id="custom-booking-form">
  <div class="custom-booking-tabs">
    <button class="custom-tab active" data-tab="oneway">ONE WAY</button>
    <button class="custom-tab" data-tab="roundtrip">ROUND TRIP</button>
  </div>

  <!-- ONE WAY FORM -->
  <form class="custom-booking-form active" id="oneway" action="oneway-mail.php" method="POST">
    <input type="hidden" name="form_type" value="oneway">
    <input type="hidden" name="page_title" id="page_title_oneway" value="Nashik to Mumbai One Way Booking">

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>NAME</label>
        <input type="text" name="name" placeholder="Enter Your Name" required>
      </div>
      <div class="custom-col">
        <label>CONTACT NUMBER</label>
        <input type="tel" name="contact" placeholder="Enter Contact Number" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>EMAIL</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>FROM</label>
        <input type="text" name="from" placeholder="Enter Pickup Location" required>
      </div>
      <div class="custom-col">
        <label>TO</label>
        <input type="text" name="to" placeholder="Enter Drop Location" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>PICK UP DATE</label>
        <input type="date" name="pickup_date" required>
      </div>
      <div class="custom-col">
        <label>PICK UP TIME</label>
        <div style="display: flex; gap: 10px;">
          <input type="time" name="pickup_time" id="pickup_time_oneway" required>
          <select name="ampm" id="ampm_oneway" required>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
        </div>
      </div>
    </div>

    <button type="submit" class="custom-submit-btn">Submit</button>
  </form>

  <!-- ROUND TRIP FORM -->
  <form class="custom-booking-form" id="roundtrip" action="roundtrip-mail.php" method="POST">
    <input type="hidden" name="form_type" value="roundtrip">
    <input type="hidden" name="page_title" id="page_title_roundtrip" value="Nashik to Mumbai Round Trip Booking">

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>NAME</label>
        <input type="text" name="name" placeholder="Enter Your Name" required>
      </div>
      <div class="custom-col">
        <label>CONTACT NUMBER</label>
        <input type="tel" name="contact" placeholder="Enter Contact Number" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>EMAIL</label>
        <input type="email" name="email" placeholder="Enter Your Email" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>FROM</label>
        <input type="text" name="from" placeholder="Enter Pickup Location" required>
      </div>
      <div class="custom-col">
        <label>TO</label>
        <input type="text" name="to" placeholder="Enter Drop Location" required>
      </div>
    </div>

    <div class="custom-booking-row">
      <div class="custom-col">
        <label>PICK UP DATE</label>
        <input type="date" name="pickup_date" required>
      </div>
      <div class="custom-col">
        <label>RETURN DATE</label>
        <input type="date" name="return_date" required>
      </div>
      <div class="custom-col">
        <label>PICK UP TIME</label>
        <div style="display: flex; gap: 10px;">
          <input type="time" name="pickup_time" id="pickup_time_roundtrip" required>
          <select name="ampm" id="ampm_roundtrip" required>
            <option value="AM">AM</option>
            <option value="PM">PM</option>
          </select>
        </div>
      </div>
    </div>

    <button type="submit" class="custom-submit-btn">Submit</button>
  </form>
</div>
<!-- Custom Booking Form ends -->


			<!-- Start home-about Area -->
			<section class="home-about-area section-gap">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-lg-6 about-left">
							<img class="img-fluid" src="img/about-img.webp" alt="">
						</div>
						<div class="col-lg-6 about-right">
							<h1>Why Choose Us for Nashik to Mumbai Cab Booking?</h1>
							<h4>We are here to listen from you deliver exellence</h4>
							<p>Planning your travel from Nashik to Mumbai? Kuber Cab brings you a reliable, comfortable, and budget-friendly cab service that puts your convenience first. Whether it’s a one-way drop or airport transfer, we’re here to make your ride smooth and stress-free.
							</p>
							
						</div>
					</div>
				</div>	
			</section>
			<!-- End home-about Area -->
			
			<!-- Start services Area -->
			<section class="services-area pb-120">
				<div class="container">
					<div class="row section-title">
						<p>What Makes Kuber Cab the Preferred Choice for Nashik to Mumbai Travel</p>
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
			 <!-- other information -->
<section class="info-section">
  <div class="container text-center-responsive">
    <h2 class="section-heading">Nashik to Mumbai Cab Booking Made Easy – Airport, City & More</h2>
    <p class="section-paragraph">
     Planning to travel from Nashik to Mumbai? Kuber Cab offers a smooth and reliable Nashik to Mumbai cab booking service with 24/7 availability, professional drivers, and well-maintained AC vehicles for every type of traveler. Whether you're heading to Mumbai for a business meeting, a family visit, or a flight from Chhatrapati Shivaji Maharaj International Airport, we ensure a safe and timely journey. Our pickup service is available from all major areas in Nashik including Gangapur Road, Indira Nagar, Panchavati, and College Road, and we drop you right at your destination — be it Mumbai Airport (T1 or T2), Andheri, Dadar, Borivali, CST, or any other part of the city. From early morning airport drops to full-day city transfers, our cabs are perfect for solo travelers, families with luggage, and outstation trips. With easy online booking, fixed pricing, and complete customer support, your Nashik to Mumbai cab journey becomes not just comfortable, but completely stress-free.
    </p>
  </div>
</section>
 <!-- end information -->


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

<script>
// Custom Booking Tabs & Auto Date-Time
document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll(".custom-tab");
  const forms = document.querySelectorAll(".custom-booking-form");

  tabs.forEach(tab => {
    tab.addEventListener("click", function () {
      tabs.forEach(t => t.classList.remove("active"));
      forms.forEach(f => f.classList.remove("active"));

      tab.classList.add("active");
      const tabId = tab.getAttribute("data-tab");
      document.getElementById(tabId).classList.add("active");
    });
  });

  // Auto-fill current date & time
  const now = new Date();
  const yyyy = now.getFullYear();
  const mm = String(now.getMonth() + 1).padStart(2, '0');
  const dd = String(now.getDate()).padStart(2, '0');
  const dateStr = `${yyyy}-${mm}-${dd}`;

  const hr = now.getHours();
  const min = String(now.getMinutes()).padStart(2, '0');
  const ampm = hr >= 12 ? "PM" : "AM";
  const hr12 = hr % 12 || 12;
  const timeStr = `${String(hr12).padStart(2, '0')}:${min}`;

  document.querySelectorAll("input[name='pickup_date']").forEach(el => el.value = dateStr);
  document.querySelectorAll("input[name='pickup_time']").forEach(el => el.value = timeStr);
  document.querySelectorAll("select[name='ampm']").forEach(el => el.value = ampm);

  // Page Title
  document.querySelectorAll("#page_title").forEach(el => {
    if (!el.value) {
      el.value = document.title;
    }
  });
});

// Smooth scroll for anchor links to #booking-form
document.querySelectorAll('a[href^="#booking-form"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const form = document.querySelector(this.getAttribute('href'));
    if (form) {
      form.scrollIntoView({ behavior: 'smooth' });
    }
  });
});
</script>


		</body>
	</html>