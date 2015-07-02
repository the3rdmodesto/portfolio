<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" />
<link href='http://fonts.googleapis.com/css?family=Yellowtail' rel='stylesheet' type='text/css'>
<style>
html, body {
 height: 100%;
}
.container-nav {
 padding: 50px;
}
.container-nav span,
.container-portfolio span {
 padding: 40px;
}
.container-nav span a,
.container-portfolio span a {
 color: #000;
}
.container-nav span a:hover {
 text-decoration: none;
}
.container-nav span a:hover:before {
 content: '< ';
 font-weight: bold;
}
.container-nav span a:hover:after {
 content: ' />';
 font-weight: bold;
}
.container-hero {
 height: 500px;
}
.hero-title {
 font-family: 'Yellowtail', cursive;
 font-size: 70px;
}
.top-140 {
 margin-top: 140px;
}
.top-80 {
 margin-top: 80px;
}
.top-50 {
 margin-top: 50px;
}
.top-20 {
 margin-top: 50px;
}
.hero-tagline {
 padding: 10px;
}
.container-portfolio {
 padding-top: 30px;
}
.portfolio-item {
 transition: background .5s;
 -webkit-transition: background .5s;
}
.portfolio-item .wrap-fade {
 z-index: 999999999;
 background: #282828;
}
.portfolio-item img {
 z-index: -9999999;
}
.portfolio-item img:hover {
 background: #282828;
 z-index: -9999;
}
.icon-arrow-down {
 color: #333;
 animation: fade-down 3s infinite;
 -webkit-animation: fade-down 3s infinite;
}
@-webkit-keyframes fade-down {
  0%   { opacity: 0; }
  100% { opacity: 1; }
}
@keyframes fade-down {
  0%   { opacity: 0; }
  100% { opacity: 0.8; margin-top: 10px; }
}

.typed-cursor{
    opacity: 1;
    -webkit-animation: blink 0.7s infinite;
    -moz-animation: blink 0.7s infinite;
    animation: blink 0.7s infinite;
}
@keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-webkit-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
@-moz-keyframes blink{
    0% { opacity:1; }
    50% { opacity:0; }
    100% { opacity:1; }
}
</style>
</head>
<body>

<div class="container-fluid">
 <div class="row">
  <div class="col-md-12">
  <nav class="pull-right container-nav">
   <span><a href="#">About</a></span>
   <span><a data-scroll data-options='{ "easing": "easeInQuad" }' href="#portfolio">Works</a></span>
   <span><a href="#">Contact</a></span>
  </nav>
  </div>
 </div>
</div>


<div class="container-fluid top-80 container-hero">
 <div class="row">
  <div class="col-md-12">
   <h1 class="text-center hero-title">Modesto Lopez III</h1>
   <h4 class="text-center hero-tagline"></h4>
  </div>
 </div>
 <div class="row">
  <div class="container text-center top-80">
   <a data-scroll data-options='{ "easing": "easeInQuad" }' href="#portfolio">
   <svg class="icon-arrow-down" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Layer_1" x="0px" y="0px" width="100px" height="100px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
   <polygon points="396.6,160 416,180.7 256,352 96,180.7 115.3,160 256,310.5 "/>
   </svg>
   </a>
  </div>
 </div>
</div>

<div class="container-fluid top-20">
 <div class="row">
  <div class="container container-portfolio text-center" id="portfolio">
  
   <span><a href="#">All</a></span> /
   <span><a href="#">HTML5</a></span> /
   <span><a href="#">WordPress</a></span> /
   <span><a href="#">Shopify</a></span> /
   <span><a href="#">Joomla</a></span> /
   <span><a href="#">Speed Optimization</a></span> /
   <span><a href="#">Web app</a></span>
  </div>
 </div>
 <div class="row top-20">
  <div class="col-md-4 portfolio-item">
   <div class="wrap-fade">
   <img src="images/portfolio-1.png" class="img-responsive" />
   </div>
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-2.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-3.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-4.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-1.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-3.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <div class="wrap-fade">
   <img src="images/portfolio-4.png" class="img-responsive" />
   </div>
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-1.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-2.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-3.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-4.png" class="img-responsive" />
  </div>
  <div class="col-md-4 portfolio-item">
   <img src="images/portfolio-2.png" class="img-responsive" />
  </div>
 </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="http://cferdinandi.github.io/smooth-scroll/dist/js/smooth-scroll.js"></script>
<script src="https://code.jquery.com/jquery-1.11.3.js"></script>
<script src="js/typed.js"></script>
<script>
smoothScroll.init({
 speed: 1000,
 easing: 'linear',
 offset: 0,
 updateURL: true,
 callbackBefore: function ( toggle, anchor ) {},
 callbackAfter: function ( toggle, anchor ) {}
});
$(function(){
 $(".hero-tagline").typed({
  strings: ["A mother fucking Web Developer."],
  typeSpeed: 1
 });
});
</script>
</body>
</html>