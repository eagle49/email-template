<?php

// Start the buffering //
ob_start();

	// http://prntscr.com/nz72od
	$email_date_title = 'DC Soul 2019 r1';

	// http://prntscr.com/nz72ta
	$support1_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'Cecily Music',
		'link'		=> 'http://cecilymusic.com/'
	];

	// http://prntscr.com/nz72y1
	$support2_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'Dante pope',
		'link'		=> 'https://www.dantepope.com/'
	];

	// http://prntscr.com/nz74t4
	$support3_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'Micah Robinson',
		'link'		=> 'https://www.micahrobinsonmusic.com/'
	];

	// http://prntscr.com/nz76kt
	$image_blocks = [
		// calendar block
		[
			'type' 		=> 'calendar_block',
			'title'		=> 'July 2019 CALENDAR',
			'events'	=> [
				'Date - Artist - Venue',
				'Date - Artist - Venue',
				'Date - Artist - Venue',
				'Date - Artist - Venue',
				'Date - Artist - Venue',
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
			'type'		=> 'thumbnail_with_title',
			'title'		=> 'Caption',
			'image'		=> 'emailimage2.jpg'
		],
		// block2
		[
			'type'		=> 'thumbnail_with_fullcontent',
			'image'		=> 'emailimage2.jpg',
			'content'	=> 'Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this 	image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image'
		],
		// block3
		[
			'type'		   => 'thumbnail_youtube',
			'image'		   => 'youtube_back.jpg',
			'youtube_link' => 'https://www.youtube.com/watch?v=ShZ978fBl6Y'
		],
		// block4
		[
			'type'		=> 'thumbnail_with_halfcontent',
			'image'		=> 'emailimage3.jpg',
			'content'	=> 'Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this 	image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image'
		],
		// block5
		[
			'type'		=> 'thumbnail_only',
			'image'		=> 'emailimage2.jpg'
		],
		// block6
		[
			'type'		=> 'thumbnail_only',
			'image'		=> 'emailimage2.jpg'
		],
		// block7
		[
			'type'		=> 'thumbnail_only',
			'image'		=> 'emailimage2.jpg'
		],
		// block8
		[
			'type'		=> 'thumbnail_only',
			'image'		=> 'emailimage2.jpg'
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
 src: url('http://nozolomusic.com/fonts/FuturaPT-Book.woff2') format('woff2'), url('http://nozolomusic.com/fonts/FuturaPT-Book.woff') format('woff');
 font-weight: normal;
 font-style: normal;
}
 @font-face {
 font-family: 'Futura PT';
 src: url('http://nozolomusic.com/fonts/FuturaPT-Medium.woff2') format('woff2'), url('http://nozolomusic.com/fonts/FuturaPT-Medium.woff') format('woff');
 font-weight: 500;
 font-style: normal;
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
    <td colspan="3" style="text-align:center;"><a href="http://www.nozolomusic.com/" target="_blank"><img src="http://nozolomusic.com/images/email-logo.jpg" width="539" height="100" style="margin:0px auto" alt="logo" /></a></td>
  </tr>
</table >
<table style="background:#000000; padding:0px 20px 20px 20px; width:690px; font-family: 'Futura PT Book';">
  <tr>
    <td style="color:#fff; font-size:20px; text-align:center;"><?= $email_date_title ?></td>
		<td style="font-size:27px; color:#e9e9e9; text-align:center;">
			<a href="https://www.facebook.com/nozolomusic/" target="_blank"><img src="http://nozolomusic.com/images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="https://twitter.com/NozoloMusic" target="_blank"><img src="http://nozolomusic.com/images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="http://nozolomusic.com/images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/youtube.png" alt="youtube" style="margin-right:5px;"></a> <a href="http://www.nozolomusic.com/" target="_blank"><img src="http://nozolomusic.com/images/home.png" alt="home"></a>
		</td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="0" style="background:#000000; padding:20px 20px 20px 20px;">
  <tr>
    <td style="text-align:center;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="http://nozolomusic.com/images/<?= $support1_block['file_name'] ?>" width="181" height="121" align="image" style="margin:0px 0px 0px 0px;" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support1_block['title'] ?></a></p></td>
    <td style="text-align:center;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="http://nozolomusic.com/images/<?= $support2_block['file_name'] ?>" width="181" height="121" align="image" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support2_block['title'] ?></a></p></td>
    <td style="text-align:center;"><a href="<a href="<?= $support3_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="http://nozolomusic.com/images/<?= $support3_block['file_name'] ?>" width="181" height="121" align="image" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support3_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support3_block['title'] ?></a></p></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';margin-top:-40px;">
<?php
	for($i=0; $i<count($image_blocks); $i++) {
		// if ($i%2 == 0) echo '<tr>';
		$type = $image_blocks[$i]['type'];
		if ( $type == 'calendar_block' ) {
?>
		<td valign="top" style="text-align:center; height:210px" width="50%;"><h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"> <?= $image_blocks[$i]['title'] ?></h3>
		<?php
			foreach($image_blocks[$i]['events'] as $event) {
				echo '<p style="color:#fff; margin:0px;"><a<a href="#" style="color:#fff;text-decoration:none;" href="#" style="color:#fff;text-decoration:none;">'.$event.'</a></p>';
			}
		?>
		</td>
<?php
		} else if ( $type == 'playlist_block' ) {
?>
		<td valign="top" style="text-align:center; margin-top:20px;" width="50%;"><h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"><?= $image_blocks[$i]['title'] ?></h3>
		<a href="<?= $image_blocks[$i]['link'] ?>" target="_blank"><img src="http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" style="display:block; margin:0 auto;"></a></td>
<?php			
		} else if ( $type == 'thumbnail_with_title' ) {
?>
			<td style="text-align:center;background-image:url(http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom"><h2 style="margin:0px 0px 0px 0px; color:#fff; text-shadow: 1px 0px 2px #000000;"><?= $image_blocks[$i]['title'] ?></h2></td>		
<?php
		} else if ( $type == 'thumbnail_with_fullcontent' ) {
?>
		 <td style="text-align:center;background-image:url(http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="middle">
		 	<div style="color:#fff;height:240px;width:100%;overflow-y: auto;float:left;margin:0px 0px 0px 0px; " class="scrollbar" id="style-8">
        		<div class="force-overflow"></div>
        		<?= $image_blocks[$i]['content'] ?>
			</div>
		</td>
<?php
		} else if ( $type == 'thumbnail_youtube' ) {
?>
		 <td style="text-align:center;height:240px; width:50%; position: relative;" valign="bottom">
			 <a href="<?= $image_blocks[$i]['youtube_link'] ?>" style="width:100%; height: 100%; display: block; position:relative; background:url(http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>">
			 </a>
		</td>
<?php
		} else if ( $type == 'thumbnail_with_halfcontent' ) {
?>
    <td style="text-align:center;height:240px; width:50%;" valign="top"><img src="http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>" width="262" height="140" alt="image" />
		<div style="color:#fff;height:90px;width:100%;overflow-y: auto;float:left;margin:10px 0px 0px 0px; " class="scrollbar" id="style-8">
        	<div class="force-overflow"></div>
			<?= $image_blocks[$i]['content'] ?>
		</div>
	</td>
<?php
		} else if ( $type == 'thumbnail_only' ) {
?>
	<td style="text-align:center;background-image:url(http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom">
	</td>
<?php	
	}
  	if ($i%2 == 1) echo '</tr>';
} 

?>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';margin-top:-40px;">
  <tr>
		<td style="text-align:center;background:#363636;float: left; width:100%;border-radius:10px;" valign="top"><h2 style="margin-top:20px; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;">SPONSORS </h2>
		<table>
			<?php
		for($i=0; $i<count($sponsors); $i++) {
			if ($i%4 == 0) echo '<tr>';
			echo '<td style="width: 25%; border-radius: 30px; valign: top;">
				<img src="http://nozolomusic.com/images/'.$sponsors[$i]['image'].'" style="width: 100%; height: 150px;"/>
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
    <td height="37"><a href="http://www.nozolomusic.com/" target="_blank" style="color:#fff;text-decoration:none;">NOZOLO HOME PAGE</a><br>
      <a href="http://www.nozolomusic.com/#register" target="_blank" style="color:#fff;text-decoration:none;">REGISTER</a> WITH NOZOLO </td>
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;"><a href="#" target="_blank"><img src="http://nozolomusic.com/images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/youtube.png" alt="youtube" style="margin-right:10px;"></a><a href="http://www.nozolomusic.com/" target="_blank"><img src="http://nozolomusic.com/images/home.png" alt="home"></a></td>
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