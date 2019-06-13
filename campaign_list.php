<?php
	$campaign_blocks = [
		[
			'image'   => 'list-image.png',
			'content' => [
				'CATEGORY: Live Soul',
				'YEAR-MONTH: 2019-07',
				'MARKET: Washington, DC'
			],
			'index'   => '1'
		],
		[
			'image'   => 'list-image.png',
			'content' => [
				'CATEGORY: Live Soul',
				'YEAR-MONTH: 2019-07',
				'MARKET: Washington, DC'
			],
			'index'   => '2'
		],
		[
			'image'   => 'list-image.png',
			'content' => [
				'CATEGORY: Live Soul',
				'YEAR-MONTH: 2019-07',
				'MARKET: Washington, DC'
			],
			'index'   => '3'
		],
	];

	$sponsors = [
		[
			'image' => 'face.png',
		],
		[
			'image' => 'ingredient8.jpg',
		],
		[
			'image' => 'ingredient5.jpg',
		],
		[
			'image' => 'ingredient8.jpg',
		],
		[
			'image' => 'face.png',
		],
		[
			'image' => 'ingredient5.jpg',
		],
		[
			'image' => 'ingredient8.jpg',
		],
		[
			'image' => 'ingredient5.jpg',
		],
		[
			'image' => 'face.png',
		],
	];
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Campaign</title>
<link href="./css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="./css/bootstrap.css" rel="stylesheet" type="text/css" />
<link href="./css/style.css" rel="stylesheet" type="text/css">
<link href="./css/media.css" rel="stylesheet" type="text/css">
</head>
<body>
	<header>
		<div class="container"> 
			<div class="col-sm-12 col-xs-10">
				<a href="index.html"><img src="./images/logo.jpg" alt="nozolo-music" class="image-responsive " /></a>
			</div>
			<div class="col-xs-2">
				<div id="nav-icon2">
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
					<span></span>
				</div>
			</div>
			<div class="clearfix"></div>
	</header>
</div>


<div class="section1 section">
	<div class="container">
  		<div class="row">
  			<div class=" col-sm-6">
    			<h2 class="camp_h2">DC Soul 2019 Campaign</h2>
   			</div>
    		<div class=" col-sm-6">
    			<nav class="camp_nav">
    				<ul>
      					<li class="top_social_menu">
							<a href="https://www.facebook.com/nozolomusic/" target="_blank">
								<img src="./images/facbook.png" alt="facebook" style="margin-right:10px;display:inline-block;">
							</a>
							<a href="https://twitter.com/NozoloMusic" target="_blank">
								<img src="./images/twitter.png" alt="twitter" style="margin-right:10px;display:inline-block;">
							</a>
							<a href="https://www.instagram.com/nozolomusic/" target="_blank">
								<img src="./images/instagram.png" alt="instagram" style="margin-right:10px;display:inline-block;">
							</a>
							<a href="#" target="_blank">
								<img src="./images/youtube.png" alt="youtube" style="margin-right:5px;display:inline-block;">
							</a>
							<a href="http://www.nozolo.com/" target="_blank">
								<img src="./images/home.png" alt="home" style="display:inline-block;">
							</a>
						</li>
    				</ul>
  				</nav>
    		</div>
    	</div>
    	<div class="row">
		<?php
			foreach($campaign_blocks as $campaign) {
		?>
			<div class=" col-lg-4 ">
				<div class="list-iimages">
					<a href="./<?= $campaign['index'] ?>/email-template.php" style="color: white;">
					<div class="list-items-content">
						<div class="col-sm-4 col-xs-5"><img src="./images/<?= $campaign['image'] ?>" /></div>
						<div class="col-sm-8 col-xs-7">
							<div class="row">
								<?php
									foreach($campaign['content'] as $content) {
										echo "<p>".$content."</p>";
									}
								?>
							</div>
						</div>
					</div>
					</a>
				</div>
			</div>
		<?php
			}
		?>
		</div>
	</div>
	<div class="section1 section">
		<div class="container">
			<div class="bg-white">
				<h2 style="text-align:center;">SPONSORS</h2>
					<?php
					foreach($sponsors as $sponser) {
						echo '<div class="col-md-2 col-sm-3">
							<img src="http://localhost/email-template/images/'.$sponser["image"].'" style="width: 100%; height: 150px;">
							</div>';
						}
					?>
			</div>
		</div>
	</div>
	<footer>
		<div class="footer">
			<a href="https://www.facebook.com/nozolomusic/" target="_blank"><img src="./images/facbook.png" alt="facebook" style="margin-right:10px;display:inline-block;"></a>
			<a href="https://twitter.com/NozoloMusic" target="_blank"><img src="./images/twitter.png" alt="twitter" style="margin-right:10px;display:inline-block;"></a>
			<a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="./images/instagram.png" alt="instagram" style="margin-right:10px;display:inline-block;"></a>
			<a href="#" target="_blank"><img src="./images/youtube.png" alt="youtube" style="margin-right:5px;display:inline-block;"></a>
			<a href="http://www.nozolo.com/" target="_blank"><img src="./images/home.png" alt="home" style="display:inline-block;"></a>
		<!-- </div> -->
			<p>Copyright 2019 Nozolo Music. All Rights Reserved.</p>
		</div>
	</footer>
</body>
<script src="./js/jquery.min.js" type="text/javascript"></script>
<script src="./js/bootstrap.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	$('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
		$(this).toggleClass('open');
		$("nav").slideToggle('open');
	});
});

/*
$(document).ready(function() {
  
  $('#play-video').on('click', function(ev) {
 
    $("#video")[0].src += "&autoplay=1";
    ev.preventDefault();
 $(this).hide();
 $(".hide_banner").hide();
  });
});
*/
</script>
</html>