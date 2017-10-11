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
    <nav id="menu" class="navbar navbar-right navbar-toggleable-md fixed-top navbar-inverse custom-navbar hero">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#menu-collapse" aria-controls="menu-collapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="container">
        <a class="navbar-brand" href="#">fponzi.me</a>

        <div class="collapse navbar-collapse" id="menu-collapse">
            <ul class="navbar-nav mr-auto">
                <li id="nav-home" class="nav-item">
                    <a class="nav-link" href="#hero">Home</a>
                </li>
                <li id="nav-portfolio" class="nav-item">
                    <a class="nav-link" href="#portfolio">Projects</a>
                </li>
                <li id="nav-about" class="nav-item">
                    <a class="nav-link" href="#about">About me</a>
                </li>
                <li id="nav-contacts" class="nav-item">
                    <a class="nav-link" href="#contacts">Contacts</a>
                </li>
            </ul>
        </div>
      </div>
    </nav>

    <section id="hero" class="hero">
        <div class="container">
            <!-- Hide, until i got a nice picture D: <img src="http://via.placeholder.com/350x150" class="img-fluid img-circle img-rounded">-->
            <h1 class="intro-title">Hello, I'm Federico Ponzi</h1>
            <p><span id="whoami" class="whoami"></span><span class="typed-cursor"></span></p>
            <a href="#portfolio" type="button" class="btn btn-outline-primary custom-btn-primary">Show me the cool stuff</a>
            <div class="divider" style="margin:2em 0;"></div>
            <div class="row">
              <div class="offset-md-3 col-md-6">
            <div class="card text-center">
                <div class="card-block">
                    <h4 class="card-title">What I'm working on right now</h4>
                    <p class="card-text"><?php include "what.txt" ?></p>
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
                <div class="row justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" src="img/projects/isitdown.png" alt="Isitdown.site">
                            <div class="card-block">
                                <p class="card-text text-justify">This is a small but useful site, to check if other sites are down.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#flask #python #postgresql #html #css #javascript #heroku #website #opensource</p>
                            </div>
                            <div class="card-block card-links">
                                <a href="http://isitdown.site" class="card-link"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
                                <a href="https://github.com/FedericoPonzi/isitdown.site" class="card-link"><i class="fa fa-github"  aria-hidden="true"></i> Github</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" src="img/projects/TrasportiRomaBot.png" alt="TrasportiRomaBot">
                            <div class="card-block">
                                <p class="card-text text-justify">This is a Telegram bot, made with python-telegram-bot APIs, to check timetables of the Atac's busses (Rome) and other info.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#python #telegram #python-telegram-bot #bot #heroku #opensource</p>
                            </div>
                            <div class="card-block card-links">
                              <a href="https://telegram.me/TrasportiRomaBot" class="card-link" title="Chat with TrasportiRomaBot on telegram"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
                              <a href="https://github.com/FedericoPonzi/TrasportiRomaBot" class="card-link" title="See the code for the bot"><i class="fa fa-github" aria-hidden="true"></i> Github</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" src="img/projects/linux-day-2017.png" alt="Linux day 2017 Rome">
                            <div class="card-block">
                                <p class="card-text text-justify">The website for the Linux Day 2017 in Rome.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#html5 #css3 #bootstrap #linux #opensource</p>
                            </div>
                            <div class="card-block card-links">
                                <a href="https://ld17.lugroma3.org" class="card-link" title="Visit the ld17 website"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
                                <a href="#" class="card-link" title="Github"><i class="fa fa-github" aria-hidden="true"></i> Github soon!</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" style="background-color:black;" src="img/projects/versah-italy.png" alt="Versah-Italy">
                            <div class="card-block">
                                <p class="card-text text-justify">Versah-Italy is the italian retailer for the Versah® dental manufacturer.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#html5 #css3 #bootstrap #php #ecommerce</p>
                            </div>
                            <div class="card-block card-links">
                                <a href="http://versah-italy.it" class="card-link" title="Visit the ld17 website"><i class="fa fa-external-link" aria-hidden="true"></i> Visit site</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" src="img/projects/vype.jpg" alt="Vype">
                            <div class="card-block">
                                <p class="card-text text-justify">I've made an Android app for a famous e-cigarette brand Vype spa. Sadly the app was for an internal use.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#android #tablet #firebase</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                        <div class="card w-90">
                            <img class="card-img-top img-fluid" src="img/projects/rankit.png" alt="RankIT">
                            <div class="card-block">
                                <p class="card-text text-justify">RankIT is An Android (Material design) application made for my Scolarship with NYU: Designing and developing an app for general purpose ranking of items from mathematical theory to the pratical realization, especially in app development procedure.</p>
                            </div>
                            <div class="card-block">
                                <p class="card-tags">#android #java #material-design #scolarship #university</p>
                            </div>
                            <div class="card-block card-links">
                                <a href="https://play.google.com/store/apps/details?id=sapienza.informatica.rankit&hl=it" class="card-link" title="Visit the ld17 website"><i class="fa fa-external-link" aria-hidden="true"></i> Play store</a>
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
        <ul>
          <li>I have a Bachelor in Computer Science, and I'm pursuing MSC in Computer Science</li>
          <li>In my spare time I blog on informaticalab.com</li>
          <li>I know several programming languages, but I feel fluent in Java and Python.</li>
          <li>I love everything related to computers and computer science.</li>
          <li>I love learning</li>
          <li>Music is very important to me</li>
          <li>I try to live as healthy as I can</li>
          <li>I try to keep updated my <a href="http://federicoponzi.link/linkedin">Linkedin</a> profile, so you can find my previous works and achivements there.</li>
        <li>I use Linux for developing and Windows for playing. I'm a member of Rome's Linux User Group</li>
        </ul>

        <img src="https://projecteuler.net/profile/federicoponzi.png" alt="My projecteuler badge">


    </section>
    <section id="contacts" class="contacts">
        <h2 class="title">Let's get in touch!</h2>
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-md-5 col-sm-12">
                    <div class="card">
                        <div class="card-block">
                            <div class="social text-left">
                                <p><span style='color:#696969; '>#!/usr/bin/python3</span><br> map(
                                    <span style='color:#800000; font-weight:bold; '>lambda</span> social : <span style='color:#800000; font-weight:bold; '>print</span>("http://federicoponzi.link/" + social), [</p>
                                <ul>
                                    <li class="social-item">
                                        <a href="http://federicoponzi.link/linkedin"><img src="img/social/linkedin.svg" width="24"> "linkedin"</a>,</li>
                                    <li class="social-item">
                                        <a href="http://federicoponzi.link/github"><img src="img/social/github.svg" width="24"> "github"</a>,</li>
                                    <li class="social-item">
                                        <a href="http://federicoponzi.link/twitter"><img src="img/social/twitter.svg" width="24"> "twitter"</a>,</li>
                                    <li class="social-item">
                                        <a href="http://federicoponzi.link/telegram"><img src="img/social/telegram.svg" width="24"> "telegram"</a>,</li>
                                    <li class="social-item">
                                        <a href="http://federicoponzi.link/facebook"><img src="img/social/facebook.svg" width="24"> "facebook"</a>
                                    </li>
                                </ul>
                                <p>])<br>
                                    <span style='color:#696969;'># Go ahead, copy-paste and run this script!<br>
                                    # federicoponzi.link/{social} it's a handy shortcut for my social profiles</span><br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-12 col-md-7 col-xl-6 text-left">
                    <p>Do you prefer emails? Fill the form below!</p>
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
        <p>P.Iva: 13958791009 - Developed with <img height="16" src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTkuMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iTGF5ZXJfMSIgeD0iMHB4IiB5PSIwcHgiIHZpZXdCb3g9IjAgMCA1MTIgNTEyIiBzdHlsZT0iZW5hYmxlLWJhY2tncm91bmQ6bmV3IDAgMCA1MTIgNTEyOyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSIgd2lkdGg9IjUxMnB4IiBoZWlnaHQ9IjUxMnB4Ij4KPHBhdGggc3R5bGU9ImZpbGw6I0U2NTYzQTsiIGQ9Ik0yNTYsNDc4LjYwOWMtMy44NywwLTcuNzM5LTEuMzQyLTEwLjg2NC00LjAyMWMtMTUuNDA4LTEzLjIwMS0zMC4zNDMtMjUuODQ4LTQ0LjcyOS0zOC4wMjIgIEM4NC4wNjUsMzM4LjA4MSwwLDI2Ni45MjMsMCwxNzUuNTU5QzAsOTQuNTExLDU3LjQxOSwzMy4zOTEsMTMzLjU2NSwzMy4zOTFjNjQuNzgyLDAsMTAzLjExOSw0NS4yMDEsMTIyLjQzNSw3OC4wOTggIGMxOS4zMTYtMzIuODk3LDU3LjY1Mi03OC4wOTgsMTIyLjQzNS03OC4wOThDNDU0LjU4MSwzMy4zOTEsNTEyLDk0LjUxMSw1MTIsMTc1LjU1OWMwLDkxLjM2NC04NC4wNjUsMTYyLjUyMi0yMDAuNDA4LDI2MS4wMDUgIGMtMTQuMzg2LDEyLjE3NC0yOS4zMjEsMjQuODIxLTQ0LjcyOSwzOC4wMjJDMjYzLjczOSw0NzcuMjY2LDI1OS44Nyw0NzguNjA5LDI1Niw0NzguNjA5eiIvPgo8cGF0aCBzdHlsZT0iZmlsbDojRDk0NzJCOyIgZD0iTTI2Ni44NjQsNDc0LjU4N2MxNS40MDgtMTMuMjAxLDMwLjM0My0yNS44NDgsNDQuNzI5LTM4LjAyMiAgQzQyNy45MzUsMzM4LjA4MSw1MTIsMjY2LjkyMyw1MTIsMTc1LjU1OWMwLTgxLjA0OC01Ny40MTktMTQyLjE2OC0xMzMuNTY1LTE0Mi4xNjhjLTY0Ljc4MiwwLTEwMy4xMTksNDUuMjAxLTEyMi40MzUsNzguMDk4djM2Ny4xMiAgQzI1OS44Nyw0NzguNjA5LDI2My43MzksNDc3LjI2NiwyNjYuODY0LDQ3NC41ODd6Ii8+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+CjxnPgo8L2c+Cjwvc3ZnPgo=">            by Federico Ponzi</p>
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
            $('.hero').waypoint(function(direction) {
                if (direction === "down") {
                  if ($(document).scrollTop() > 2) {
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

            $('.portfolio').waypoint(function(direction) {
                if (direction === "down") {
                    onExitSection("hero");
                    onEnterSection("portfolio");
                } else {
                    onEnterSection("hero");
                    onExitSection("portfolio");
                }
            });
            $('.about').waypoint(function(direction) {
                if (direction === "down") {
                    onEnterSection("about");
                    onExitSection("portfolio");
                } else {
                    onExitSection("about");
                    onEnterSection("portfolio");
                }
            });

            $('.contacts').waypoint(function(direction) {
                if (direction === "down") {
                    onEnterSection("contacts");
                    onExitSection("about");
                } else {
                    onEnterSection("about");
                    onExitSection("contacts");
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
