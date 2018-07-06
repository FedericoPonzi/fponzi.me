<?php
	function get_social($query){
		switch($query){
			case "facebook":
				return "https://www.facebook.com/federico.ponzi.5";
			case "twitter":
				return "https://twitter.com/federico_ponzi";
			case "linkedin":
				return "https://www.linkedin.com/in/federicoponzi/";
			case "github":
				return "https://github.com/FedericoPonzi";
			case "telegram":
				return "https://telegram.me/FedericoPonzi";
			case "medium":
				return "https://medium.com/@federico_ponzi";
			case "hackernews":
				return "https://news.ycombinator.com/user?id=federicoponzi";
		}
		return NULL;
	}
	if(isset($_GET['q'])){
		$social = get_social($_GET['q']);
		if($social != NULL){
			header("location: ". $social);
			exit;
		}
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Personal website of Federico Ponzi">
	<meta name="author" content="Federico Ponzi">
	<link rel="icon" href="favicon.ico">

	<title>Federico Ponzi</title>

	<!-- Bootstrap core CSS -->
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/animate.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#menu">
<nav id="menu" class="navbar navbar-dark navbar-expand-lg navbar-expand-md fixed-top custom-navbar hero">
	<div class="container">
	  <a class="navbar-brand" href="#">Federico Ponzi</a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		<ul class="navbar-nav mr-auto">
					<li id="nav-home" class="nav-item">
						<a class="nav-link" href="#hero"><i class="fa fa-home"></i> Home</a>
					</li>
					<li id="nav-portfolio" class="nav-item">
						<a class="nav-link" href="#portfolio"><i class="fa fa-list-alt"></i> Projects</a>
					</li>
					<li id="nav-about" class="nav-item">
						<a class="nav-link" href="#about"><i class="fa fa-user-o"></i> About me</a>
					</li>
					<li id="nav-contacts" class="nav-item">
						<a class="nav-link" href="#contacts"><i class="fa fa-envelope"></i> Contacts</a>
					</li>

		</ul>
	</div>
  </div>
</nav>
	<section class="hero">
		<div class="container" id="hero">
			<!-- Hide, until i got a nice picture D: <img src="http://via.placeholder.com/350x150" class="img-fluid img-circle img-rounded">-->
			<h1 class="intro-title">Hello, I'm Federico Ponzi</h1>
			<p><span id="whoami" class="whoami"></span><span class="typed-cursor"></span></p>
			<a href="#portfolio" type="button" class="btn btn-outline-primary custom-btn-primary">Show me the cool stuff</a>
			<div class="divider" style="margin:2em 0;"></div>
			<div class="row">
			  <div class="offset-md-3 col-md-6">
			<div class="card text-center">
<div style="width: 20px;height: 20px;background-color: #eeff48;border-radius: 14px;box-shadow: 4px 2px 1px -1px rgba(0, 0, 0, 0.44);margin-top: 2px;margin-left: 2px;"></div>
				<div class="card-body">
					<h4 class="card-title">What I'm working on right now</h4>
					<p class="card-text">
					<?php include "what.txt" ?></p>
				</div>
				<!-- It's on the todo list  c':
				  <div class="card-footer text-muted">
					2 days ago
				</div>-->
			</div>
		</div>
		<!-- /.container -->
	</section>

	<section id="portfolio" class="portfolio">
		<h2 class="title">Some of my projects</h2>
		<p>Check out some of my projects! I strongly believe in Open Source. When possible, all the work I do is released on my Github account.</p>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3" data-wow-delay="0.6s">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.15s">
							<img class="card-img-top" src="img/projects/sopsi.jpg" alt="SOPSI logo">
							<div class="card-body">
								<p class="card-text text-justify">This is the official app for the XXII national congress of the italian society of psychopathology (SOPSI). I've made an hybrid app for iOS and Android using the latest version of Ionic (Angular).</p>
								<p class="card-tags">#android #ios #ionic #typescript #angular #html5 #css3</p>
							</div>
							<div class="card-footer">
								<a href="https://itunes.apple.com/us/app/sopsi-2018/id1349699948?l=it&ls=1&mt=8" class="card-link"><i class="fa fa-external-link" aria-hidden="true"></i> App Store</a>
								<a href="https://play.google.com/store/apps/details?id=it.vir_us.sopsi&hl=it" class="card-link"><i class="fa fa-github"  aria-hidden="true"></i> Play Store</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">
						<div class="card w-90 wow fadeInUp" data-wow-delay="0.2s">
							<img class="card-img-top" src="img/projects/isitdown.png" alt="Isitdown.site">
							<div class="card-body">
								<p class="card-text text-justify">This is a small but useful site, to check if other sites are down.</p>
								<p class="card-tags">#flask #python #postgresql #html #css #javascript #heroku #website #opensource</p>
							</div>
							<div class="card-footer">
								<a href="http://isitdown.site" class="card-link" title="Is it down? Check if a site is down."><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
								<a href="https://github.com/FedericoPonzi/isitdown.site" class="card-link"><i class="fa fa-github"  aria-hidden="true"></i> Github</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.25s">
							<img class="card-img-top img-fluid" src="img/projects/TrasportiRomaBot.png" alt="TrasportiRomaBot">
							<div class="card-body">
								<p class="card-text text-justify">This is a Telegram bot, made with python-telegram-bot APIs, to check timetables of the Atac's busses (Rome) and other info.</p>
								<p class="card-tags">#python #telegram #python-telegram-bot #bot #heroku #opensource</p>
							</div>
							<div class="card-footer">
							  <a href="https://telegram.me/TrasportiRomaBot" class="card-link" title="Chat with TrasportiRomaBot on telegram"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
							  <a href="https://github.com/FedericoPonzi/TrasportiRomaBot" class="card-link" title="See the code for the bot"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.30s">
							<img class="card-img-top img-fluid" src="img/projects/linux-day-2017.png" alt="Linux day 2017 Rome">
							<div class="card-body">
								<p class="card-text text-justify">The website for the Linux Day 2017 in Rome. The event was organized by the LUGs of the three main universities of Rome: La Sapienza, Tor Vergata and Roma Tre. <br>I was part of the staff and actively worked at the event.</p>
								<p class="card-tags">#html5 #css3 #bootstrap #linux #opensource</p>
							</div>
							<div class="card-footer">
								<a href="https://ld17.lugroma3.org" class="card-link" title="Visit the ld17 website"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
								<a href="#" class="card-link" title="Github"><i class="fa fa-github" aria-hidden="true"></i> <a href="https://github.com/LUGRomaTre/ld2017">Github</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.35s">
							<img class="card-img-top img-fluid" style="background-color:black;" src="img/projects/versah-italy.png" alt="Versah-Italy">
							<div class="card-body">
								<p class="card-text text-justify">Versah-Italy *was* the italian retailer for the Versah® dental manufacturer.</p>
								<p class="card-tags">#html5 #css3 #bootstrap #php #ecommerce</p>
							</div>
							<div class="card-footer">
								<a href="#" class="card-link" title="Versah Italy"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site (no more online)</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.40s">
							<img class="card-img-top img-fluid" src="img/projects/vype.jpg" alt="Vype">
							<div class="card-body">
								<p class="card-text text-justify">I've made an Android app for a famous e-cigarette brand Vype spa. Sadly the app was for an internal use.</p>
								<p class="card-tags">#android #tablet #firebase</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.45s">
							<img class="card-img-top img-fluid" src="img/projects/immobiliare-logo.png" alt="Immobiliare logo">
							<div class="card-body">
								<p class="card-text text-justify">I've developed from scratch, a Big Data Lake for Immobiliare.it (biggest real estate ads website in Italy). I've studied all the market available solutions (open-source and paid), and developed a new system top-down: from writing the documentation for the system, to setup a cluster of three nodes. I've also created the web frontend and a REST API to access the system outside the office boundary.</p>
								<p class="card-tags">#bigdata #linux #spark #python #golang #angular #html5</p>
							</div>
						</div>
					</div>
					<div class="col-sm-6 col-md-4 col-lg-4 col-xl-3">

						<div class="card w-90 wow fadeInUp" data-wow-delay="0.50s">
							<img class="card-img-top img-fluid" src="img/projects/rankit.png" alt="RankIT">
							<div class="card-body">
								<p class="card-text text-justify">RankIT is An Android (Material design) application made for my Scolarship with New York University: Designing and developing an app for general purpose ranking of items from mathematical theory to the pratical realization, especially in app development procedure.</p>
								<p class="card-tags">#android #java #material-design #scolarship #university</p>
							</div>
							<div class="card-footer">
								<a href="https://play.google.com/store/apps/details?id=sapienza.informatica.rankit&hl=it" class="card-link" title="Download the app"><i class="fa fa-external-link" aria-hidden="true"></i> Play store</a>
							</div>
						</div>
					</div>
					<div style="margin-bottom:250px;"></div>
				</div>
			</div>
	</section>
	<section id="about" class="about">
	  <h2 class="title">About me</h2>
	  <p>Some fast news about me:</p>
		<ul style="padding:0px">
		  <li>I live in Rome, Italy.</li>
		  <li>I have a Bachelor in Computer Science at La Sapienza University, and I'm pursuing MSC in CS</li>
		  <li>In my spare time I blog at <a href="http://informaticalab.com">informaticalab.com</a></li>
		  <li>I know several programming/scripting languages, but I feel fluent in Java and Python. In no particular order, <br> I've made stuff in: Bash, Go, Assembly, C, PHP, Javascript, Typescript, ML, Swift.</li>
		  <li>I love everything related to computers, internet and computer science.</li>
		  <li>I love learning. I usually try to follow at least 1 course on coursera/edx per semester.</li>
		  <li>Area of interest: Software development, Distributed Systems, Big Data, Cloud computing, Security.</li>
		  <li>Music is very important to me. I like to listen to music while developing.</li>
		  <li>I try to live as healthy as I can, going gym three times a week and doing diet to keep me fit.</li>
		  <li>I try to keep updated my <a href="https://fponzi.me/linkedin">Linkedin</a> profile, so you can find my previous works and achivements there.</li>
		  <li>I use Linux for developing and Windows for playing. I'm a member of Rome's Linux User Group</li>
		</ul>

		<img src="https://projecteuler.net/profile/federicoponzi.png" alt="My projecteuler badge">


	</section>
	<section id="contacts" class="contacts" style="padding-left:0px; padding-right:0px; ">
		<h2 class="title">Let's get in touch!</h2>
		<div class="container">
			<div class="row">
				<div class="col-xl-6 col-md-5 col-sm-12">
					<div class="card">
						<div class="card-body">
							<div class="social text-left">
<span style="color:#00b418">#!/usr/bin/python3</span><br>
social <span style="color:#0100b6;font-weight:700">=</span> [ 
								<ul>
									<li class="social-item">
										<a href="https://fponzi.me/facebook"><img src="img/social/facebook.svg" width="24"> "facebook"</a>,</li>
									<li class="social-item">
										<a href="https://fponzi.me/github"><img src="img/social/github.svg" width="24"> "github"</a>,</li>
									<li class="social-item">
										<a href="http://fponzi.me/hackernews"><img src="img/social/hackernews.svg" width="24"> "hackernews"</a>,</li>
									<li class="social-item">
										<a href="https://fponzi.me/linkedin"><img src="img/social/linkedin.svg" width="24"> "linkedin"</a>,</li>
									<li class="social-item">
										<a href="https://fponzi.me/medium"><img src="img/social/medium.svg" width="24"> "medium"</a>,</li>
									<li class="social-item">
										<a href="https://fponzi.me/telegram"><img src="img/social/telegram.svg" width="24"> "telegram"</a>,</li>
									<li class="social-item">
										<a href="https://fponzi.me/twitter"><img src="img/social/twitter.svg" width="24"> "twitter"</a></li>
								</ul>
]<br>
<pre class="social" style="font-size: inherit">
<span style="color:#0100b6;font-weight:700">for</span> s <span style="color:#0100b6;font-weight:700">in</span> social:
    <span style="color:#0100b6;font-weight:700">print</span>(<span style="color:#d80800">"https://fponzi.me/"</span> <span style="color:#0100b6;font-weight:700">+</span> s)
</pre><br>
<span style="color:#00b418"># Go ahead, copy-paste and run this script!</span><br>
<span style="color:#00b418"># https://fponzi.me/{social} it's an handy shortcut for my social profiles</span>
							</div>
						</div>
					</div>
				</div>

				<div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 text-left">
					<div id="status"></div>
					<form id="contactform" action="#" method="post">
						<div class="form-group row">
							<div class="col-sm-6">
								<input type="text" name="name" class="form-control contacts-input contacts-input-text" id="inputPassword3" placeholder="Name">
							</div>
							<div class="col-sm-6">
								<input type="email" name="email" class="form-control contacts-input contacts-input-text" id="email" placeholder="Email">
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-12">
								<textarea name="message" class="form-control contacts-input contacts-textarea" rows="6" placeholder="Insert your message"></textarea>
							</div>
						</div>
						<div class="form-group row">
							<div class="col-sm-2 ">
								<button id="submit" type="submit" class="btn btn-primary contacts-send">Send <i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>
	<footer class="site-footer text-center">
		<p>Thanks for visiting my site!</p>
		<p>P.IVA: 13958791009 - Developed with <img height="16" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6I0U2NTYzQTsiIGQ9Ik0yNTYsNDc4LjYwOWMtMy44NywwLTcuNzM5LTEuMzQyLTEwLjg2NC00LjAyMWMtMTUuNDA4LTEzLjIwMS0zMC4zNDMtMjUuODQ4LTQ0LjcyOS0zOC4wMjIgIEM4NC4wNjUsMzM4LjA4MSwwLDI2Ni45MjMsMCwxNzUuNTU5QzAsOTQuNTExLDU3LjQxOSwzMy4zOTEsMTMzLjU2NSwzMy4zOTFjNjQuNzgyLDAsMTAzLjExOSw0NS4yMDEsMTIyLjQzNSw3OC4wOTggIGMxOS4zMTYtMzIuODk3LDU3LjY1Mi03OC4wOTgsMTIyLjQzNS03OC4wOThDNDU0LjU4MSwzMy4zOTEsNTEyLDk0LjUxMSw1MTIsMTc1LjU1OWMwLDkxLjM2NC04NC4wNjUsMTYyLjUyMi0yMDAuNDA4LDI2MS4wMDUgIGMtMTQuMzg2LDEyLjE3NC0yOS4zMjEsMjQuODIxLTQ0LjcyOSwzOC4wMjJDMjYzLjczOSw0NzcuMjY2LDI1OS44Nyw0NzguNjA5LDI1Niw0NzguNjA5eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRDk0NzJCOyIgZD0iTTI2Ni44NjQsNDc0LjU4N2MxNS40MDgtMTMuMjAxLDMwLjM0My0yNS44NDgsNDQuNzI5LTM4LjAyMiAgQzQyNy45MzUsMzM4LjA4MSw1MTIsMjY2LjkyMyw1MTIsMTc1LjU1OWMwLTgxLjA0OC01Ny40MTktMTQyLjE2OC0xMzMuNTY1LTE0Mi4xNjhjLTY0Ljc4MiwwLTEwMy4xMTksNDUuMjAxLTEyMi40MzUsNzguMDk4djM2Ny4xMiAgQzI1OS44Nyw0NzguNjA5LDI2My43MzksNDc3LjI2NiwyNjYuODY0LDQ3NC41ODd6Ii8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">            by Federico Ponzi</p>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/tether.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/typed.min.js"></script>
	<script src="js/wow.min.js"></script>

<script>
"use strict";
function onEnterSection(sect){
	if(sect === "top"){
		$("#menu").addClass("hero");
		$("#menu").removeClass("navbar-shadow");
		console.log("Mezzo che top");
	}
	if(sect === "hero"){
		$("#menu").addClass("hero-navbar navbar-shadow");
	}
	if(sect === "portfolio"){
		$("#menu").addClass("portfolio-navbar");
	}
	if(sect === "about"){
		$("#menu").addClass("about-navbar");
	}
	if(sect === "contacts"){
		$("#menu").addClass("contacts-navbar");
	}
}
function onExitSection(sect){
	if(sect === "top"){
		$("#menu").removeClass("hero");
	}
	if(sect === "hero"){
		$("#menu").removeClass("hero-navbar");
	}
	if(sect === "portfolio"){
		$("#menu").removeClass("portfolio-navbar");
	}
	if(sect === "about"){
		$("#menu").removeClass("about-navbar");
	}
	if(sect === "contacts"){
		$("#menu").removeClass("contacts-navbar");
	}
}



var main = function() {
	new WOW().init();
	$('#hero').waypoint(function(direction) {
		if(direction== "down"){
			if ($(document).scrollTop() > $('#hero').offset().top) {
				onExitSection("top");
				onEnterSection("hero");
			}else{
				onEnterSection("top");
				onExitSection("hero");
			}
		} else {
			onEnterSection("top");
			onExitSection("hero");
		}
	});

	$('#portfolio').waypoint(function(direction) {
		if (direction === "down") {
			onExitSection("hero");
			onEnterSection("portfolio");
		} else {
			onEnterSection("hero");
			onExitSection("portfolio");
		}
	});
	$('#about').waypoint(function(direction) {
		if (direction === "down") {
			onEnterSection("about");
			onExitSection("portfolio");
		} else {
			onExitSection("about");
			onEnterSection("portfolio");
		}
	});

	$('#contacts').waypoint(function(direction) {
		if (direction === "down") {
			onEnterSection("contacts");
			onExitSection("about");
		} else {
			onEnterSection("about");
			onExitSection("contacts");
		}
	});
	$(document).click(function (event) {
		var clickover = $(event.target);
		var _opened = $(".navbar-collapse").hasClass("show");
		if (_opened === true && !clickover.hasClass("navbar-toggler")) {
			$(".navbar-toggler").click();
		}
	});
	$(document).on('click', 'a[href^="#"]', function(e) {
		// target element id
		var id = $(this).attr('href');

		// target element
		var $id = $(id);
		if ($id.length === 0) {
			return;
		}

		// prevent standard hash navigation (avoid blinking in IE)
		e.preventDefault();

		// top position relative to the document
		var pos = $id.offset().top+5;

		// animated top scrolling
		$('body, html').animate({scrollTop: pos});
	});
	var whoami_w = ["I'm a computer scientist", "I'm a software developer", "I'm an open source lover", "I'm a Linux user", "I'm a fullstack developer", "I'm a geek", "I'm a nerd", "I'm a blogger"];
	var typed = new Typed('.whoami', {
	strings: whoami_w,
		typeSpeed: 60,
		loop: true,
		loopCount: Infinity
	});

	var contactform = $("#contactform");
	var $inputs = contactform.find('input, textarea');
	var $buttons = contactform.find('button');

	contactform.submit(function(){
		event.preventDefault();
		$inputs.attr('readonly', 'readonly');
		$buttons.attr('disabled', 'disabled');
		var formData = new FormData(document.querySelector('form'));
		console.log(formData);
		var request = new XMLHttpRequest();
		request.open("POST", "send-mail.php");
		request.onreadystatechange = function() {
			if (this.readyState == 4 && this.status == 200) {
				//Il server invia sempre 200
				document.getElementById("status").innerHTML = this.responseText
			}
			$inputs.attr('readonly', false);
			$buttons.attr('disabled', false);
		};
		request.send(formData);
	});

};
$(document).ready(main);
</script>
</body>

</html>
