<?php

// Start the buffering //
ob_start();

	// http://prntscr.com/nz72od
	$email_date_title = 'Cecily and Dante #1';

	// http://prntscr.com/nz72ta
	$support1_block = [
		'file_name' => 'cecilymain2.jpg',
		'title'		=> 'CECILY',
		'link'		=> 'http://cecilymusic.com/'
	];

	// http://prntscr.com/nz72y1
	$support2_block = [
		'file_name' => 'dantemain.jpg',
		'title'		=> 'DANTE POPE',
		'link'		=> 'https://www.dantepope.com/'
	];

	$description_file_name = 'readme.txt';

	// http://prntscr.com/nz76kt
	$image_blocks = [
	
	
	// calendar block
				[
			'type' 		=> 'calendar_block',
			'title'		=> "CECILY'S EVENTS",
			'title_link'=> 'http://cecilymusic.com/tourdates/',
			'image'		=> "cecilyevents.png",  // background image
			'list-icon' => 'event-icon.png',
			'color'		=> '#EEE',
			'font-size' => '20px',
			'font-weight' => 600,
			'events'	=> [
				['title' => "____________", 'link' => '#'],	
				['title' => "07/25/2019", 'link' => '#'],
				['title' => "@ Arlene s Grocery - NYC", 'link' => '#'],
				['title' => "____________", 'link' => '#'],
				['title' => "07/26/2019", 'link' => '#'],
				['title' => "@ Friday's at Fort Totten (MD)", 'link' => '#'],
				['title' => "____________", 'link' => '#'],	
				['title' => "09/09/2019", 'link' => '#'],
				['title' => "Cecily Sings Nancy Wilson", 'link' => '#'],
				['title' => "@ Creative Cauldron", 'link' => '#'],
				['title' => "Falls Church, VA", 'link' => '#'],

			]
		],
	
	
	// calendar block
				[
			'type' 		=> 'calendar_block',
			'title'		=> "DANTE'S EVENTS",
			'title_link'=> 'https://www.dantepope.com/shows',
			'image'		=> "danteeventsnew.jpg",  // background image
			'list-icon' => 'event-icon.png',
			'color'		=> '#EEE',
			'font-size' => '20px',
			'font-weight' => 600,
			'events'	=> [
				['title' => "____________", 'link' => '#'],				
				['title' => '08/02/2019', 'link' => '#'],
				['title' => 'The B-Sides', 'link' => '#'],
				['title' => 'with F.K. White', 'link' => '#'],
				['title' => "____________", 'link' => '#'],	
				['title' => '08/08/2019', 'link' => '#'],
				['title' => 'Marvin DC', 'link' => '#'],
				['title' => "____________", 'link' => '#'],					
				['title' => '09/20/2019', 'link' => '#'],
				['title' => '@ Rockwood Music Hall NYC', 'link' => '#'],		
				['title' => "____________", 'link' => '#'],	
				['title' => '09/21/2019', 'link' => '#'],
				['title' => 'Blew Smoke Brooklyn, NY', 'link' => '#'],		
				['title' => "____________", 'link' => '#'],
				['title' => '09/25/2019', 'link' => '#'],
				['title' => 'Wild Days at Eaton Hotel', 'link' => '#'],		
				['title' => 'Washington, DC', 'link' => '#'],
				['title' => "____________", 'link' => '#'],
				['title' => '09/28/2019', 'link' => '#'],
				['title' => 'Sotto DC', 'link' => '#'],		
				['title' => "____________", 'link' => '#'],	
				['title' => '10/12/2019', 'link' => '#'],		
				['title' => 'Capital Hill Jazz Festival', 'link' => '#'],
				['title' => "____________", 'link' => '#'],					
				['title' => '10/19/2019', 'link' => '#'],		
				['title' => 'Stevie Wonder Tribute', 'link' => '#'],		
				['title' => '@ AMP by Strathmore', 'link' => '#']
			]
		],

		// playlist block
		[
			'type' 		=> 'calendar_block',
			'title'		=> "click here",
			'title_link'=> 'https://open.spotify.com/embed/playlist/3tEgSJDGXro1blzJ8Z5Yle',
			'image'		=> "playlist.gif",  // background image
			'list-icon' => '',
			'color'		=> '#000',
			'font-size' => '16px',
			'font-weight' => 500,
			'events'	=> [
				['title' => '', 'link' => '#'],

			]
		],
		
		
					// calvideo
		[
			'type' 		=> 'calendar_block',
			'title'		=> "click here",
			'title_link'=> 'https://www.youtube.com/watch?v=lcEfVf8rpyE&feature=youtu.be',
			'image'		=> "hopevideo_fri2.jpg",  // background image
			'list-icon' => 'event-icon.png',
			'color'		=> '#111',
			'font-size' => '16px',
			'font-weight' => 500,
			'events'	=> [
				['title' => '', 'link' => '#'],


			]
		],
		
		// block22
		[
			'type'		=> 'thumbnail_with_title',
			'title'		=> '',
			'image'		=> 'awakening2.gif',
			'link'		=> '#',
		],
		// block3
		[
			'type'		=> 'thumbnail_with_title',
			'title'		=> 'click for event link',
			'image'		=> 'dantebsides3.png',
			'link'		=> 'https://www.eventbrite.com/e/the-b-sides-one-summers-eve-tickets-65668280595',
		]
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
			'image' => 'ingredient8.jpg',
		],
		[
			'image' => 'ingredient5.jpg',
		],
		[
			'image' => 'face.png',
		],
	];
	// shuffle($image_blocks);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<title>Cecily & Dante #1</title>
<style type="text/css">
@font-face {
 font-family: 'Futura PT Book';
 src: url('https://nozolomusic.com/fonts/FuturaPT-Book.woff2') format('woff2'), url('https://nozolomusic.com/fonts/FuturaPT-Book.woff') format('woff');
 font-weight: normal;
 font-style: normal;
}
 @font-face {
 font-family: 'Futura PT';
 src: url('https://nozolomusic.com/fonts/FuturaPT-Medium.woff2') format('woff2'), url('https://nozolomusic.com/fonts/FuturaPT-Medium.woff') format('woff');
 font-weight: 500;
 font-style: normal;
}

a {
	text-decoration: none;
}
table, tr, td {
	font-family: 'Futura PT Book';
}

 #style-8::-webkit-scrollbar-track {
	-webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
	border-radius: 10px;
	background-color: #F5F5F5;
}
 #style-8::-webkit-scrollbar {
 width: 12px;
 background-color: #F5F5F5;
}
 #style-8::-webkit-scrollbar-thumb {
 border-radius: 10px;
 -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
 background-color: #555;
}
body {
	margin: 0 !important;
	padding: 0 !important;
	-webkit-text-size-adjust: 100% !important;
	-ms-text-size-adjust: 100% !important;
	-webkit-font-smoothing: antialiased !important;
}
img {
	border: 0 !important;
	outline: none !important;
}
p {
	margin: 0px !important;
	padding: 0px !important;
}
table {
	border-collapse: collapse;
	mso-table-lspace: 0px;
	mso-table-rspace: 0px;
}
td, a, span {
	border-collapse: collapse;
	mso-line-height-rule: exactly;
}
.ExternalClass * {
	line-height: 100%;
}
.em_defaultlink a {
	color: inherit !important;
	text-decoration: none !important;
}
span.MsoHyperlink {
	mso-style-priority: 99;
	color: inherit;
}
span.MsoHyperlinkFollowed {
	mso-style-priority: 99;
	color: inherit;
}
 @media only screen and (min-width:481px) and (max-width:699px) {
.em_main_table {
	width: 100% !important;
}
.em_wrapper {
	width: 100% !important;
}
.em_hide {
	display: none !important;
}
.em_img {
	width: 100% !important;
	height: auto !important;
}
.em_h20 {
	height: 20px !important;
}
.em_padd {
	padding: 20px 10px !important;
}
}
@media screen and (max-width: 480px) {
.em_main_table {
	width: 100% !important;
}
.em_wrapper {
	width: 100% !important;
}
.em_hide {
	display: none !important;
}
.em_img {
	width: 100% !important;
	height: auto !important;
}
.em_h20 {
	height: 20px !important;
}
.em_padd {
	padding: 20px 10px !important;
}
.em_text1 {
	font-size: 16px !important;
	line-height: 24px !important;
}
u + .em_body .em_full_wrap {
	width: 100% !important;
	width: 100vw !important;
}
}
.back-img {
	width: 100%;
	height: 100%;
}

</style>
</head>
<body style="margin: 0; padding: 0px;" bgcolor="#efefef" valign="top">
<table class="em_full_wrap" valign="top" width="100%" cellspacing="0" cellpadding="0" border="0" bgcolor="#efefef" align="center">
	<tbody><tr>
	<td valign="top" align="center">
		<table class="em_main_table" style="width:650px;" width="650" cellspacing="0" cellpadding="0" border="0" align="center">
			<tbody><tr><td>
				<table width="650px" cellpadding="0" cellspacing="0" style="background:#000000; font-family: 'Futura PT Book';" align="center">
				<tr>
					<td colspan="3" style="text-align:center; height: 130px; padding: 20px;"><a href="https://www.nozolomusic.com/2/email-template.php/" target="_blank"><img src="https://nozolomusic.com/images/email-logo.jpg" width="539" height="100" style="margin:0px auto" alt="logo" /></a></td>
				</tr>
				<tr>
					<td style="color: white; height: 200px; text-align: center;">
						<img class="back-img" src="https://nozolomusic.com/images/header_new.gif" />
					</td>
				</tr>
				</table >
			</td></tr>
			<tr><td align="center">
				<table style="background:#000000; width:650px; font-family: 'Futura PT Book';">
				<tr>
					<td style="color:#fff; font-size:20px; text-align:center; width: 50%;"><?= $email_date_title ?></td>
						<td class="social-media" style="font-size:27px; color:#e9e9e9; text-align:center;">
							<a href="https://www.facebook.com/nozolomusic/" target="_blank" style="margin-left: 12px;"><img src="https://nozolomusic.com/images/facbook.png" alt="facebook" style="width: 30px; margin-right: 8px"></a>
							<a href="https://twitter.com/NozoloMusic" target="_blank"><img src="https://nozolomusic.com/images/twitter.png" alt="twitter" style="width: 30px; margin-right: 8px"></a>
							<a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="https://nozolomusic.com/images/instagram.png" alt="instagram" style="width: 30px; margin-right: 8px"></a>
							<a href="#" target="_blank"><img src="https://nozolomusic.com/images/youtube.png" alt="youtube" style="width: 30px; margin-right: 8px"></a>
							<a href="https://www.nozolomusic.com/" target="_blank"><img src="https://nozolomusic.com/images/home.png" alt="home" style="width: 30px; margin-right: 8px"></a>
						</td>
				</tr>
				</table>
			</tr></td>
			<tr><td align="center">
				<table width="650px" cellpadding="0" cellspacing="0" style="background:#000000;">
				<tr>
					<td style="text-align:center;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="https://nozolomusic.com/images/<?= $support1_block['file_name'] ?>" width="181" height="121" align="image" style="margin:0px 0px 0px 0px;" /></a>
					<p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support1_block['title'] ?></a></p></td>
					<td style="text-align:center;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="https://nozolomusic.com/images/<?= $support2_block['file_name'] ?>" width="181" height="121" align="image" /></a>
					<p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support2_block['title'] ?></a></p></td>
				</tr>
				</table>
			</tr></td>
			<tr><td align="center">
				<table width="650px" cellpadding="0" cellspacing="0" style="background:#000000; font-family: 'Futura PT Book'; position: relative;">
				<?php
					for($i=0; $i<count($image_blocks); $i++) {
						// if ($i%2 == 0) echo '<tr>';
						$type = $image_blocks[$i]['type'];
						if ( $type == 'calendar_block' ) {
				?>
						<td valign="top" style="text-align:center; height:210px; 
						<?php
							if ( isset($image_blocks[$i]['image']) && $image_blocks[$i]['image']) {
								// echo 'background-image:url(\'https://nozolomusic.com/images/'.$image_blocks[$i]['image'].'\');'; // background-size: 100% 100%;';
							}
							$color = '#fff';
							if (isset($image_blocks[$i]['color']) && $image_blocks[$i]['color'])
								$color = $image_blocks[$i]['color'];
						?>
						" width="50%;">
						<img class="back-img abs-pos" src="https://nozolomusic.com/images/<?php echo $image_blocks[$i]['image'];  ?>" />
						<?php
							if ( $image_blocks[$i]["title"] ) 
								echo '<a href="'.$image_blocks[$i]['title_link'].'" target="_blank"><h3 style="color:'.$color.'; font-family: Futura PT; font-size:28px; margin-top:20px;margin-bottom:15px;font-weight:normal;"> '.$image_blocks[$i]['title'].'</h3></a>';
						?>
						<div class="e-blocks" style="height: 145px; width: 100%; overflow: hidden; position: relative;">
							<div class="event-blocks" style="height: 145px; overflow-y: scroll; position: absolute; top: 0; left: 0; right: -17px;">
							<?php
								foreach($image_blocks[$i]['events'] as $event) {
									echo '<div class="event-block" style="padding: 0 3px; margin: 0 0 2px 0;">';
									echo '<span class="media-body"><a href="'.$event['link'].'" style="color:'.$color.';text-decoration:none; font-size:'.$image_blocks[$i]['font-size'].'; font-weight:'.$image_blocks[$i]['font-weight'].'">'.$event['title'].'</span>';
									echo '</a></div>';
								}
							?>
							</div>
						</div>
						</td>
				<?php
						} else if ( $type == 'playlist_block' ) {
				?>
						<td valign="top" style="text-align:center; margin-top:20px; background-image:url('https://nozolomusic.com/images/<?= $image_blocks[$i]['back_image'] ?>'); background-size: 100% 100%; width="50%;">
							<h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"><?= $image_blocks[$i]['title'] ?></h3>
							<a href="<?= $image_blocks[$i]['link'] ?>" target="_blank"><img src="https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" style="display:block; margin:0 auto; width: 50%;"></a>
						</td>
				<?php			
						} else if ( $type == 'thumbnail_with_title' ) {
							
				?>
							<td style="text-align:center;height:210px; width:50%; position: relative;" valign="bottom">
								<img class="back-img abs-pos" src="https://nozolomusic.com/images/<?php echo $image_blocks[$i]['image'];  ?>" />								
								<?php if ( isset($image_blocks[$i]['link']) && $image_blocks[$i]['link']){ echo '<a href="'.$image_blocks[$i]['link'].'">'; } ?>
									<h2 style="margin:0px 0px 6px 0px; color:#fff; text-shadow: 1px 0px 2px #000000; padding: 0 6px;"><?= $image_blocks[$i]['title'] ?></h2>
								<?php if ( isset($image_blocks[$i]['link']) && $image_blocks[$i]['link']) { echo '</a>'; }	 ?>
							</td>
				<?php
						} else if ( $type == 'thumbnail_with_fullcontent' ) {
				?>
							<td style="text-align:center;height:210px; width:50%; position: relative;" valign="middle">
								<img class="back-img abs-pos" src="https://nozolomusic.com/images/<?php echo $image_blocks[$i]['image'];  ?>" />
								<div style="color:#fff;height:210px;width:100%;overflow-y: scroll;float:left;margin:0px 0px 25px 0px; " class="scrollbar" id="style-8">
									<div class="force-overflow"></div>
									<?= $image_blocks[$i]['content'] ?>
								</div>
							</td>
				<?php
						} else if ( $type == 'thumbnail_youtube' ) {
				?>
							<td style="text-align:center;height:210px; width:50%; position: relative; background-image:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" valign="bottom">
								<a href="<?= $image_blocks[$i]['youtube_link'] ?>" style="width:90px; height: 70px; top: 70px; left: 96px; position:absolute;">
									<img src="https://nozolomusic.com/images/youtube_playbtn.png" style="width:100%; height: 100%;"/>
								</a>
							</td>
				<?php
						} else if ( $type == 'thumbnail_with_halfcontent' ) {
				?>
					<td style="text-align:center;height:210px; width:50%;" valign="top"><img src="https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" width="262" height="140" alt="image" />
						<div style="color:#fff;height:90px;width:100%;overflow-y: scroll;float:left;margin:10px 0px 25px 0px; " class="scrollbar" id="style-8">
							<div class="force-overflow"></div>
							<?= $image_blocks[$i]['content'] ?>
						</div>
					</td>
				<?php
						} else if ( $type == 'thumbnail_only' ) {
				?>
					<td style="text-align:center;background-image:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:210px; width:50%;" valign="bottom">
					</td>
				<?php	
					}
					if ($i%2 == 1) echo '</tr>';
				} 

				?>
				</table>
			</tr></td>
			<tr><td align="center">
				<table width="650px" cellpadding="0" cellspacing="0" style="background:#363636; font-family: 'Futura PT Book';">
				<tr>
					<td style="font-size:27px; color:#e9e9e9; text-align:center;" class="social-media">
						<a href="#" target="_blank"><img src="https://nozolomusic.com/images/facbook.png" alt="facebook" style="width: 30px; margin-right: 8px"></a>
						<a href="#" target="_blank"><img src="https://nozolomusic.com/images/twitter.png" alt="twitter" style="width: 30px; margin-right: 8px"></a>
						<a href="#" target="_blank"><img src="https://nozolomusic.com/images/instagram.png" alt="instagram" style="width: 30px; margin-right: 8px"></a>
						<a href="#" target="_blank"><img src="https://nozolomusic.com/images/youtube.png" alt="youtube" style="width: 30px; margin-right: 8px"></a>
						<a href="https://www.nozolomusic.com/" target="_blank"><img src="https://nozolomusic.com/images/home.png" alt="home" style="width: 30px; margin-right: 8px"></a>
					</td>
				</tr>
				<tr>
					<td style="font-size:27px; color:#e9e9e9; text-align:center;">Copyright 2019 Nozolo Music.  All Rights Reserved.</td>
				</tr>

				</table>
				</tr></td>
				</table>
			</td></tr>
		</table>
	</td>
	</tr></tbody>
</table>
</body>
</html>
<?php
// Get the content that is in the buffer and put it in your file //
file_put_contents('email-template.html', ob_get_contents());
?>