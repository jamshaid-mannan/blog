<?php 
include("path.php");
include(ROOT_PATH . "/app/controllers/topics.php");
 ?>

<!DOCTYPE html >
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width-device-width, initial-scale-1.0">
<meta http-equiv="X-UA-compatible" content="ie=edge">

<!-- Font awsome -->
<script src="https://kit.fontawesome.com/5052d0b929.js" crossorigin="anonymous"></script>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Candal|Lora&display=swap" rel="stylesheet">

<!-- custome styling -->
<link rel="stylesheet" href="assets/css/style.css">
<title>BLOG</title>
</head>

<body>

<!-- include header here -->
<?php include(ROOT_PATH . "/app/includes/header.php");?>
<?php include(ROOT_PATH . "/app/includes/messages.php");?>
<?php if(isset($_SESSION['message'])): ?>
<div class="msg <?php echo $_SESSION['type']; ?>">
<li><?php echo $_SESSION['message']; ?></li>
<?php
unset($_SESSION['message']);
unset($_SESSION['type']);
 ?>
</div>
<?php endif; ?>

<!-- Page Wraper -->
<div class="page-wrapper">
<!-- Post Slider -->
<div class="post-slider">
<h1 class="post-title">Trending Post</h1>
<i class="fas fa-chevron-left prev"></i>
<i class="fas fa-chevron-right next"></i>


<div class="post-wrapper">

<div class="post">
<img src="assets/images/image_1.png" alt="" class="slider-image">

<div class="post-info">
<h4><a href="single.html">One day your life will flash before your eyes</a></h4>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 8, 2019</i>
</div>
</div>

<div class="post">
<img src="assets/images/image_2.png" alt="" class="slider-image">

<div class="post-info">
<h4><a href="single.html">One day your life will flash before your eyes</a></h4>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 8, 2019</i>
</div>
</div>

<div class="post">
<img src="assets/images/image_3.png" alt="" class="slider-image">

<div class="post-info">
<h4><a href="single.html">One day your life will flash before your eyes</a></h4>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 8, 2019</i>
</div>
</div>

<div class="post">
<img src="assets/images/image_4.png" alt="" class="slider-image">

<div class="post-info">
<h4><a href="single.html">One day your life will flash before your eyes</a></h4>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 8, 2019</i>
</div>
</div>

<div class="post">
<img src="assets/images/image_5.png" alt="" class="slider-image">

<div class="post-info">
<h4><a href="single.html">One day your life will flash before your eyes</a></h4>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 8, 2019</i>
</div>
</div>
</div>
</div>
<!-- Post Slider -->
<!-- Content -->
<div class="content clearfix">
<!-- Main Content -->
<div class="main-content">
<h1 class="recent-post-title">Recent Post</h1>
<div class="post clearfix">
<img src="assets/images/image_1.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>
<div class="post clearfix">
<img src="assets/images/image_2.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>

<div class="post clearfix">
<img src="assets/images/image_3.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>

<div class="post clearfix">
<img src="assets/images/image_4.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>

<div class="post clearfix">
<img src="assets/images/image_5.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>

<div class="post clearfix">
<img src="assets/images/image_3.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>

<div class="post clearfix">
<img src="assets/images/image_1.png" alt="" class="post-image">
<div class="post-preview">
<h2><a href="single.html">Designing a post article | Designing a Blog using HTML and CSS</a></h2>
<i class="far fa-user">Awa Melvine</i>
&nbsp;
<i class="far fa-Calender">Mar 11, 2019</i>
<p class="preview-text">In this episode, we will design the post listings in the recent posts section of our page.</p>
<a href="single.html" class="btn read-more">Read more</a>
</div>

</div>



</div>
<!-- //Content -->
<div class="sidebar">

<div class="section search">
<h2 class="section-title">Search</h2>
<form action="index.html" method="post">
<input type="text" name="search-term" class="text-input" placeholder="Search...">
</form>
</div>

<div class="section topics">
<h2 class="section-title">Topics</h2>
<ul>

<?php foreach ($topics as $key => $topic): ?>
<li><a href="#"><?php echo $topic['name']; ?></a> </li>
<?php endforeach; ?>



<!--
<li><a href="#">Quotes</a> </li>
<li><a href="#">Fiction</a> </li>
<li><a href="#">Biography</a> </li>
<li><a href="#">Motivation</a> </li>
<li><a href="#">Inspiraton</a> </li>
<li><a href="#">life lessons</a> </li>
-->

</ul>



</div>

</div>

</div>





<!-- Content -->

</div>

<!-- End Page Wraper -->

<!-- include footer here -->
<?php include(ROOT_PATH . "/app/includes/footer.php");?>


<!-- JQuery --> <!-- From JQuery website free-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

<!-- Slick Carousel (visit http://kenwheeler.github.io/slick/ and pree get it now coppy js link)-->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!-- after copping js link click usage and copy js coad of your need and past in js file)-->
<!-- Custom scripts -->
<script src="assets/js/scripts.js"></script>
</body>

</html>
