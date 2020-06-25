<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <style>
        body, html {
	font-family: 'Open Sans', sans-serif;
	text-rendering: optimizeLegibility !important;
	-webkit-font-smoothing: antialiased !important;
	color: #666;
	font-weight: 400;
	width: 100% !important;
	height: 100% !important;
}
h2 {
	margin: 0 0 20px 0;
	font-weight: 600;
	font-size: 36px;
	color: #333;
}
h3, h4 {
	font-size: 20px;
	font-weight: 400;
	color: #333;
}
h5 {
	text-transform: uppercase;
	font-weight: 700;
	line-height: 20px;
}
p {
	font-size: 15px;
}
p.intro {
	margin: 12px 0 0;
	line-height: 24px;
}
a {
	color: #6aaf08;
	font-weight: 400;
}
a:hover, a:focus {
	text-decoration: none;
	color: #222;
}
ul, ol {
	list-style: none;
}
.clearfix:after {
	visibility: hidden;
	display: block;
	font-size: 0;
	content: " ";
	clear: both;
	height: 0;
}
.clearfix {
	display: inline-block;
}
* html .clearfix {
	height: 1%;
}
.clearfix {
	display: block;
}
ul, ol {
	padding: 0;
	webkit-padding: 0;
	moz-padding: 0;
}
hr {
	height: 3px;
	width: 70px;
	text-align: center;
	position: relative;
	background: #6aaf08;
	margin: 0 auto;
	margin-bottom: 20px;
	border: 0;
}
/* Navigation */
#menu {
	padding: 20px;
	transition: all 0.8s;
}
#menu.navbar-default {
	background-color: rgba(248, 248, 248, 0);
	border-color: rgba(231, 231, 231, 0);
}
#menu a.navbar-brand {
	font-size: 26px;
	font-weight: 600;
	color: #eee;
}
#menu.navbar-default .navbar-nav > li > a {
	text-transform: uppercase;
	color: #ddd;
	font-size: 15px;
	font-weight: 400;
	letter-spacing: 1px;
	padding: 8px 2px;
	border-radius: 0;
	margin: 9px 20px 0 20px;
}
#menu.navbar-default .navbar-nav > li > a:hover {
	color: #6aaf08;
}
.on {
	background-color: #333 !important;
	padding: 0 !important;
	padding: 15px 0 !important;
}
.navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus {
	color: #6aaf08 !important;
	background-color: transparent;
}
.navbar-toggle {
	border-radius: 0;
}
.navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus {
	background-color: #fff;
	border-color: #fff;
}
.navbar-default .navbar-toggle:hover>.icon-bar {
	background-color: #6aaf08;
}
.section-title {
	margin-bottom: 70px;
}
.section-title p {
	font-size: 18px;
	color: #666;
}
.btn-custom {
	text-transform: uppercase;
	color: #fff;
	background-color: #6aaf08;
	padding: 14px 20px;
	letter-spacing: 1px;
	margin: 0;
	font-size: 17px;
	font-weight: 400;
	border-radius: 6px;
	margin-top: 20px;
	transition: all 0.3s;
}
.btn-custom:hover, .btn-custom:focus, .btn-custom.focus, .btn-custom:active, .btn-custom.active {
	color: #fff;
	background-color: #5f9d07;
}
.btn:active, .btn.active {
	background-image: none;
	outline: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
}
a:focus, .btn:focus, .btn:active:focus, .btn.active:focus, .btn.focus, .btn:active.focus, .btn.active.focus {
	outline: none;
	outline-offset: none;
}
/* Header Section */
.intro {
	display: table;
	width: 100%;
	padding: 0;
	background: url(../img/intro-bg.jpg) top center no-repeat;
	background-color: #e5e5e5;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	background-size: cover;
	-o-background-size: cover;
}
.intro .overlay {
	/* Permalink - use to edit and share this gradient: http://colorzilla.com/gradient-editor/#000000+0,70ad47+100&0.6+0,0.4+100 */
	background: -moz-linear-gradient(top, rgba(0,0,0,0.6) 0%, rgba(112,173,71,0.4) 100%); /* FF3.6-15 */
	background: -webkit-linear-gradient(top, rgba(0,0,0,0.6) 0%, rgba(112,173,71,0.4) 100%); /* Chrome10-25,Safari5.1-6 */
	background: linear-gradient(to bottom, rgba(0,0,0,0.6) 0%, rgba(112,173,71,0.4) 100%); /* W3C, IE10+, FF16+, Chrome26+, Opera12+, Safari7+ */
filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#99000000', endColorstr='#6670ad47', GradientType=0 ); /* IE6-9 */
}
.intro .fa {
	font-size: 94px;
	margin-bottom: 40px;
	color: #fff;
}
.intro h1 {
	color: #fff;
	font-size: 64px;
	font-weight: 700;
	letter-spacing: -1px;
	margin-top: 0;
	margin-bottom: 10px;
	text-transform: uppercase;
}
.intro p {
	color: #fff;
	font-size: 22px;
	margin-top: 20px;
	line-height: 28px;
	margin-bottom: 40px;
}
.intro .btn-custom {
	border-top: 1px solid rgba(255,255,255,0.4);
	border-bottom: 1px solid rgba(255,255,255,0.4);
}
header .intro-text {
	padding-top: 320px;
	padding-bottom: 200px;
	text-align: center;
}
/* About Section */
#about {
	padding: 120px 0 80px 0;
	background: #f6f6f6;
}
#about h3 {
	font-size: 22px;
	font-weight: 600;
	margin: 20px 0 0 0;
}
#about .about-text span {
	color: #70ad47;
	font-weight: 700;
	letter-spacing: -1px;
}
#about hr {
	margin-left: 0;
	margin-bottom: 40px;
}
#about .btn {
	margin-top: 40px;
}
#about .about-media img {
	position: relative;
	display: block;
	width: 100%;
	height: auto;
}
#about .about-text, #about .about-desc {
	margin-bottom: 40px;
}
#about p {
	line-height: 24px;
	margin-top: 20px;
}
/* Services Section */
#services {
	padding: 120px 0;
	background: #6aaf08;
}
#services .service-media {
	margin: 10px;
}
#services .service-media img {
	position: relative;
	width: 225px;
	height: 225px;
	border-radius: 50%;
	border: 10px solid rgba(255,255,255,0.1);
}
#services .service-desc {
	margin: 10px 10px 40px;
	text-align: center;
}
#services h2 {
	color: #fff;
}
#services h3 {
	color: #fff;
	font-size: 24px;
	font-weight: 400;
	padding: 5px 0;
}
#services p {
	color: rgba(255,255,255,0.9);
}
#services hr {
	background: rgba(255,255,255,0.6);
}
/* Portfolio Section */
#portfolio {
	padding: 100px 0;
	background: #f6f6f6;
}
.categories {
	text-align: center;
}
ul.cat li {
	display: inline-block;
}
ol.type li {
	display: inline-block;
	margin: 0 10px 40px 10px;
}
ol.type li a {
	color: #555;
	font-size: 16px;
	font-weight: 400;
	padding: 8px 16px;
	background: #e6e6e6;
	border: 0;
	border-radius: 4px;
	letter-spacing: 1px;
	text-transform: uppercase;
	transition: all 0.3s;
}
ol.type li a.active {
	background: #6aaf08;
	color: #fff;
}
ol.type li a:hover {
	background: #6aaf08;
	color: #fff;
}
.isotope-item {
	z-index: 2
}
.isotope-hidden.isotope-item {
	z-index: 1
}
.isotope, .isotope .isotope-item {
	/* change duration value to whatever you like */
	-webkit-transition-duration: 0.8s;
	-moz-transition-duration: 0.8s;
	transition-duration: 0.8s;
}
.isotope-item {
	margin-right: -1px;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
}
.isotope {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition-property: height, width;
	-moz-transition-property: height, width;
	transition-property: height, width;
}
.isotope .isotope-item {
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
	-webkit-transition-property: -webkit-transform, opacity;
	-moz-transition-property: -moz-transform, opacity;
	transition-property: transform, opacity;
}
.portfolio-item {
	margin: 15px 0;
}
.portfolio-item .hover-bg {
	overflow: hidden;
	position: relative;
	margin: 0 auto;
}
.hover-bg .hover-text {
	position: absolute;
	text-align: center;
	margin: 0 auto;
	color: #fff;
	background: rgba(0, 0, 0, 0.6);
	padding: 30% 0 0 0;
	height: 100%;
	width: 100%;
	opacity: 0;
	transition: all 0.5s;
}
.hover-bg .hover-text>h4 {
	opacity: 0;
	color: #fff;
	-webkit-transform: translateY(100%);
	transform: translateY(100%);
	transition: all 0.3s;
	font-size: 18px;
	letter-spacing: 1px;
	font-weight: 300;
	text-transform: uppercase;
}
.hover-bg:hover .hover-text>h4 {
	opacity: 1;
	-webkit-backface-visibility: hidden;
	-webkit-transform: translateY(0);
	transform: translateY(0);
}
.hover-bg:hover .hover-text {
	opacity: 1;
}
/* Testimonials Section */
#testimonials {
	background: #444 url(../img/testimonials-bg.jpg) center center no-repeat fixed;
	background-size: cover;
}
#testimonials .overlay {
	padding: 120px 0;
	background: rgba(106, 175, 8, 0.85);
}
#testimonials h2 {
	color: #fff;
}
#testimonials hr {
	background: rgba(255,255,255,0.6);
}
#testimonial p {
	color: #fff;
	font-size: 16px;
	font-weight: 400;
	line-height: 32px;
}
.owl-theme .owl-controls .owl-page span {
	display: block;
	width: 12px;
	height: 12px;
	margin: 5px 7px;
	filter: Alpha(Opacity=1);
	opacity: 1;
	border-radius: 50%;
	background: rgba(255,255,255,0.4);
	transition: all 0.5s;
	border: 1px solid rgba(255,255,255,0.3);
}
.owl-theme .owl-controls .owl-page.active span, .owl-theme .owl-controls.clickable .owl-page:hover span {
	filter: Alpha(Opacity=100);
	opacity: 1;
	background: #fff;
	border: 1px solid #fff;
}
.owl-theme .owl-controls .owl-page.active span {
	background: #fff;
	border: 1px solid #fff;
}
/* Contact Section */
#contact {
	padding: 100px 0;
	background: #F6F6F6;
}
#contact .section-title p {
	color: #777;
}
#contact form {
	padding: 0;
	margin-top: 40px;
}
#contact h3 {
	text-transform: uppercase;
	font-size: 17px;
	font-weight: 600;
}
#contact .text-danger {
	color: #cc0033;
	text-align: left;
}
label {
	font-size: 12px;
	font-weight: 400;
	font-family: 'Open Sans', sans-serif;
	float: left;
}
#contact .form-control {
	display: block;
	width: 100%;
	padding: 20px 20px;
	font-size: 16px;
	line-height: 1.42857143;
	color: #444;
	background-color: #fff;
	background-image: none;
	border: 1px solid #ddd;
	border-radius: 0;
	-webkit-box-shadow: none;
	box-shadow: none;
	-webkit-transition: none;
	-o-transition: none;
	transition: none;
}
#contact .form-control:focus {
	outline: 0;
	-webkit-box-shadow: 0 0 15px #ddd;
	box-shadow: 0 0 15px #ddd;
}
.form-control::-webkit-input-placeholder {
color: #777;
}
.form-control:-moz-placeholder {
color: #777;
}
.form-control::-moz-placeholder {
color: #777;
}
.form-control:-ms-input-placeholder {
color: #777;
}
#contact .contact-info {
	margin-bottom: 30px;
}
#contact .contact-info hr {
	background: #ddd;
}
#contact .contact-item {
	margin: 20px 0 40px 0;
}
/* Footer Section*/
#footer {
	background: #333;
	padding: 30px 0 20px;
}
#footer h3 {
	color: #1e7a46;
	font-weight: 400;
	font-size: 18px;
	text-transform: uppercase;
	margin-bottom: 20px;
}
#footer .social {
	margin: 10px 0 50px 0;
}
#footer .social ul li {
	display: inline-block;
	margin: 0 20px;
}
#footer .social i.fa {
	font-size: 22px;
	width: 40px;
	height: 40px;
	padding: 10px;
	background: #444;
	color: #6aaf08;
	border-radius: 50%;
	transition: all 0.3s;
}
#footer .social i.fa:hover {
	background: #6aaf08;
	color: #fff;
}
#footer p {
	color: #666;
	font-size: 15px;
}
#footer a {
	color: #888;
}
#footer a:hover {
	color: #ccc;
}

    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>

  <div class="col-xs-12 col-md-6">
        <div class="about-text">
          <h2>Cây <span>{{$cay->tencay}}</span></h2>
          <hr>
          
          <a href="#services" class="btn btn-custom btn-lg page-scroll">Thông tin cây</a> </div>
      </div>
      <div class="col-xs-12 col-md-3">
        <div class="about-media"> <img class="img-fluid" src="{{$cay->hinhloaicay}}" alt=" "> </div>
        <div class="about-desc">
          <h3>PPM phù hợp</h3>
            <p>Sinh trưởng tốt với PPM trong khoảng từ {{$cay->ppm}} đến {{$cay->ppm_max}}</p>
            {!! $cay->content !!}
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
