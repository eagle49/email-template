<?php

// Start the buffering //
ob_start();

	// http://prntscr.com/nz72od
	$email_date_title = 'DC Soul 2019 r1';

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
			'title'		=> "Cecily's Events",
			'image'		=> "too-much-cover.png",  // background image
			'color'		=> "black", // #FFF
			'events'	=> [
				['title' => '07/09/2019 @ Blues Alley in DC', 'link' => 'https://www.bluesalleylive.com/?fuseaction=home.artist&VenueID=3&artistid=12411'],
				['title' => '07/11/2019 @ Tin Pan in Richmond, VA', 'link' => 'https://www.tinpanrva.com/event/1861021-cecily-kide-richmond/'],
				['title' => "07/25/2019 @ Arlene's Grocery in NYC", 'link' => 'https://www.eventbrite.com/e/the-connect-great-pretender-cecily-tickets-60868388990'],
				['title' => '07/26/2019 @ Fridays at Fort Totten (MD)', 'link' => '#'],
				['title' => '09/09/2019 @ Falls Church, VA (Sings Nancy Wilson)', 'link' => '#'],
			]
		],
		// calendar block
		[
			'type' 		=> 'calendar_block',
			'title'		=> "Dante's Events",
			'image'		=> "capture.png",  // background image
			'color'		=> 'black',
			'events'	=> [
				['title' => 'Date @ Venue in City', 'link' => 'https://www.dantepope.com/'],
			]
		],
		// playlist block
		[
			'type'		=> 'playlist_block',
			'title'		=> 'PLAYLIST',
			'link'		=> 'https://open.spotify.com/embed/playlist/3tEgSJDGXro1blzJ8Z5Yle',
			'image'		=> 'sportify.jpg'
		],
		// block1
		[
			'type'		   => 'thumbnail_youtube',
			'image'		   => 'cecilyhope.JPG',
			'youtube_link' => 'https://youtu.be/lcEfVf8rpyE'
		],
		
		// block2
		[
			'type'		=> 'thumbnail_with_title',
			'title'		=> 'EP Release Party at Blues Alley Tuesday July 9, 2019',
			'image'		=> 'cecilymain.jpg',
			'link'		=> '#',
		],
		

		// block3
		[
			'type'		=> 'thumbnail_with_title',
			'title'		=> 'Something about Dante',
			'image'		=> 'dantemain.jpg',
			'link'		=> '#'
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
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<title>Newsletter</title>
<style>
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

.e-description {
	color: white;
    padding: 10px 20px;
    border: solid 2px;
}

.e-description p {
	margin-top: 4px;
	margin-bottom: 4px;
	font-size: 18px;
}

.social-media a img {
	width: 30px;
	margin-right: 8px;
}
a {
	text-decoration: none;
}
table, tr, td {
	font-family: 'Futura PT Book';
}
.scrollbar {
	float: left;
	overflow-y: scroll;
	margin-bottom: 25px;
}
/*
 *  STYLE 3
 */
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
.mail-container {
	display: block;
	width: 690px;
	margin: 0px auto;
}
</style>
</head>
<body style="margin: 0; background: black;">
<div class="mail-container">
<table width="690px" cellpadding="0" cellspacing="0" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';">
  <tr>
    <td colspan="3" style="text-align:center;"><a href="https://www.nozolomusic.com/" target="_blank"><img src="https://nozolomusic.com/images/email-logo.jpg" width="539" height="100" style="margin:0px auto" alt="logo" /></a></td>
  </tr>
  <tr>
	<td>
		<div class="e-description">
		<?php
			$handle = fopen("../".$description_file_name, "r");
			if ($handle) {
				while (($line = fgets($handle)) !== false) {
					// process the line read.
					echo "<p>".$line."</p>";
				}
				fclose($handle);
			}
		?>
		</div>
	</td>
  </tr>
</table >
<table style="background:#000000; padding:0px 20px 20px 20px; width:690px; font-family: 'Futura PT Book';">
  <tr>
    <td style="color:#fff; font-size:20px; text-align:center;"><?= $email_date_title ?></td>
		<td class="social-media" style="font-size:27px; color:#e9e9e9; text-align:center;">
			<a href="https://www.facebook.com/nozolomusic/" target="_blank"><img src="https://nozolomusic.com/images/facbook.png" alt="facebook"></a>
			<a href="https://twitter.com/NozoloMusic" target="_blank"><img src="https://nozolomusic.com/images/twitter.png" alt="twitter"></a>
			<a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="https://nozolomusic.com/images/instagram.png" alt="instagram"></a>
			<a href="#" target="_blank"><img src="https://nozolomusic.com/images/youtube.png" alt="youtube"></a>
			<a href="https://www.nozolomusic.com/" target="_blank"><img src="https://nozolomusic.com/images/home.png" alt="home"></a>
		</td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="0" style="background:#000000; padding:20px 20px 20px 20px;">
  <tr>
    <td style="text-align:center;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="https://nozolomusic.com/images/<?= $support1_block['file_name'] ?>" width="181" height="121" align="image" style="margin:0px 0px 0px 0px;" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support1_block['title'] ?></a></p></td>
    <td style="text-align:center;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="https://nozolomusic.com/images/<?= $support2_block['file_name'] ?>" width="181" height="121" align="image" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support2_block['title'] ?></a></p></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';margin-top:-40px;">
<?php
	for($i=0; $i<count($image_blocks); $i++) {
		// if ($i%2 == 0) echo '<tr>';
		$type = $image_blocks[$i]['type'];
		if ( $type == 'calendar_block' ) {
?>
		<td valign="top" style="text-align:center; height:210px; 
		<?php
			if ( isset($image_blocks[$i]['image']) && $image_blocks[$i]['image']) {
				echo 'background-image:url(\'https://nozolomusic.com/images/'.$image_blocks[$i]['image'].'\');'; // background-size: 100% 100%;';
			}
			$color = '#fff';
			if (isset($image_blocks[$i]['color']) && $image_blocks[$i]['color'])
				$color = $image_blocks[$i]['color'];
		?>
		" width="50%;"><h3 style="color:<?= $color ?>; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;font-weight:normal;"> <?= $image_blocks[$i]['title'] ?></h3>
		<?php
			foreach($image_blocks[$i]['events'] as $event) {
				echo '<p style="margin:0px;"><a href="'.$event['link'].'" style="color:'.$color.';text-decoration:none;">'.$event['title'].'</a></p>';
			}
		?>
		</td>
<?php
		} else if ( $type == 'playlist_block' ) {
?>
		<td valign="top" style="text-align:center; margin-top:20px;" width="50%;"><h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"><?= $image_blocks[$i]['title'] ?></h3>
		<a href="<?= $image_blocks[$i]['link'] ?>" target="_blank"><img src="https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" style="display:block; margin:0 auto;"></a></td>
<?php			
		} else if ( $type == 'thumbnail_with_title' ) {
			
?>
			<td style="text-align:center;background-image:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom">
				<?php if ( isset($image_blocks[$i]['link']) && $image_blocks[$i]['link']){ echo '<a href="'.$image_blocks[$i]['link'].'">'; } ?>
					<h2 style="margin:0px 0px 0px 0px; color:#fff; text-shadow: 1px 0px 2px #000000;"><?= $image_blocks[$i]['title'] ?></h2>
				<?php if ( isset($image_blocks[$i]['link']) && $image_blocks[$i]['link']) { echo '</a>'; }	 ?>
			</td>		
<?php
		} else if ( $type == 'thumbnail_with_fullcontent' ) {
?>
		 <td style="text-align:center;background-image:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="middle">
		 	<div style="color:#fff;height:240px;width:100%;overflow-y: auto;float:left;margin:0px 0px 0px 0px; " class="scrollbar" id="style-8">
        		<div class="force-overflow"></div>
        		<?= $image_blocks[$i]['content'] ?>
			</div>
		</td>
<?php
		} else if ( $type == 'thumbnail_youtube' ) {
?>
		 <td style="text-align:center;height:240px; width:50%; position: relative;" valign="bottom">
			 <a href="<?= $image_blocks[$i]['youtube_link'] ?>" style="width:100%; height: 100%; display: block; position:relative; background:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>">
			 </a>
		</td>
<?php
		} else if ( $type == 'thumbnail_with_halfcontent' ) {
?>
    <td style="text-align:center;height:240px; width:50%;" valign="top"><img src="https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" width="262" height="140" alt="image" />
		<div style="color:#fff;height:90px;width:100%;overflow-y: auto;float:left;margin:10px 0px 0px 0px; " class="scrollbar" id="style-8">
        	<div class="force-overflow"></div>
			<?= $image_blocks[$i]['content'] ?>
		</div>
	</td>
<?php
		} else if ( $type == 'thumbnail_only' ) {
?>
	<td style="text-align:center;background-image:url(https://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom">
	</td>
<?php	
	}
  	if ($i%2 == 1) echo '</tr>';
} 

?>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';margin-top:-40px;">
  <tr>
		<td style="text-align:center;background:#FFF;float: left; width:100%;border-radius:10px;" valign="top"><h2 style="margin-top:20px; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px; color: #7e191d;">SPONSORS</h2>
		<table style="padding: 0px 12px;">
			<?php
		for($i=0; $i<count($sponsors); $i++) {
			if ($i%4 == 0) echo '<tr>';
			echo '<td style="width: 25%; border-radius: 30px; valign: top;">
				<img src="https://nozolomusic.com/images/'.$sponsors[$i]['image'].'" style="width: 100%; height: 150px;"/>
			</td>';
			// if ($i%2 == 0) echo '</tr>';
		}
		?>
		</table>
		</td>
	</tr>
	
</table>
<table width="590px" cellpadding="0" cellspacing="30" style="background:#363636; padding:20px 20px 20px 20px; font-family: 'Futura PT Book'; margin-left: 50px;">
  <tr style="text-align:center; color:#fff; font-size:32px;" >
    <!-- <td height="37"><a href="https://www.nozolomusic.com/" target="_blank" style="color:#fff;text-decoration:none;">NOZOLO HOME PAGE</a><br>
      <a href="https://www.nozolomusic.com/#register" target="_blank" style="color:#fff;text-decoration:none;">REGISTER</a> WITH NOZOLO </td> -->
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;" class="social-media">
		<a href="#" target="_blank"><img src="https://nozolomusic.com/images/facbook.png" alt="facebook"></a>
		<a href="#" target="_blank"><img src="https://nozolomusic.com/images/twitter.png" alt="twitter"></a>
		<a href="#" target="_blank"><img src="https://nozolomusic.com/images/instagram.png" alt="instagram"></a>
		<a href="#" target="_blank"><img src="https://nozolomusic.com/images/youtube.png" alt="youtube"></a>
		<a href="https://www.nozolomusic.com/" target="_blank"><img src="https://nozolomusic.com/images/home.png" alt="home"></a>
	</td>
  </tr>
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;">Copyright 2019 Nozolo Music.  All Rights Reserved.</td>
  </tr>
  </tr>
  
</table>
</div>

</body>
<script>
	// $.ajax({
	// 	url: '../mail_send.php',
	// 	method: 'post',
	// 	data: {
	// 		'type': 'send_template',
	// 		'content': $('body').html()
	// 	},
	// 	success: function(resp) {
	// 		console.log(resp);
	// 	}
	// })
</script>
</html>
<?php

echo '1';

// Get the content that is in the buffer and put it in your file //
file_put_contents('email-template.html', ob_get_contents());
?>