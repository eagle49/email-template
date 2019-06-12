<?php
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
			'image'		   => 'emailimage2.jpg',
			'youtube_link' => 'https://www.youtube.com/embed/ShZ978fBl6Y?controls=0'
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
 src: url('../fonts/FuturaPT-Book.woff2') format('woff2'), url('../fonts/FuturaPT-Book.woff') format('woff');
 font-weight: normal;
 font-style: normal;
}
 @font-face {
 font-family: 'Futura PT';
 src: url('../fonts/FuturaPT-Medium.woff2') format('woff2'), url('../fonts/FuturaPT-Medium.woff') format('woff');
 font-weight: 500;
 font-style: normal;
}
table, tr, td {
	font-family: 'Futura PT Book';
}
.scrollbar {
	float: left;
	overflow-y: scroll;
	margin-bottom: 25px;
}
 //*
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
    <td colspan="3" style="text-align:center;"><a href="http://www.nozolo.com/" target="_blank"><img src="http://nozolomusic.com/images/email-logo.jpg" width="539" height="100" style="margin:0px auto" alt="logo" /></a></td>
  </tr>
</table >
<table style="background:#000000; padding:0px 20px 20px 20px; width:690px; font-family: 'Futura PT Book';">
  <tr>
    <td style="color:#fff; font-size:20px; text-align:center;"><?= $email_date_title ?></td>
		<td style="font-size:27px; color:#e9e9e9; text-align:center;">
			<a href="https://www.facebook.com/nozolomusic/" target="_blank"><img src="http://nozolomusic.com/images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="https://twitter.com/NozoloMusic" target="_blank"><img src="http://nozolomusic.com/images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="http://nozolomusic.com/images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/youtube.png" alt="youtube" style="margin-right:5px;"></a> <a href="http://www.nozolo.com/" target="_blank"><img src="http://nozolomusic.com/images/home.png" alt="home"></a>
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
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<a href="<?= $support3_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support3_block['title'] ?></a></p></td>
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
		<iframe src="<?= $image_blocks[$i]['link'] ?>" width="280" height="230" frameborder="0" allowtransparency="true" allow="encrypted-media"></iframe> </td>
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
		 <td style="text-align:center;background-image:url(http://nozolomusic.com/images/<?= $image_blocks[$i]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom">
		 	<iframe width="100%" height="240" src="<?= $image_blocks[$i]['youtube_link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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
    <td style="text-align:center;background:#fff;height:240px; width:100%;border-radius:10px;" valign="top"><h2 style="margin-top:20px; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;">SPONSORS </h2></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#363636; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';">
  <tr style="text-align:center; color:#fff; font-size:32px;" >
    <td height="37"><a href="http://www.nozolo.com/" target="_blank" style="color:#fff;text-decoration:none;">NOZOLO HOME PAGE</a><br>
      <a href="http://www.nozolo.com/#register" target="_blank" style="color:#fff;text-decoration:none;">REGISTER</a> WITH NOZOLO </td>
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;"><a href="#" target="_blank"><img src="http://nozolomusic.com/images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="http://nozolomusic.com/images/youtube.png" alt="youtube" style="margin-right:10px;"></a><a href="http://www.nozolo.com/" target="_blank"><img src="http://nozolomusic.com/images/home.png" alt="home"></a></td>
  </tr>
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;">Copyright 2019 Nozolo Music.  All Rights Reserved.</td>
  </tr>
  </tr>
  
</table>
</div>

</body>
<script>
	$.ajax({
		url: '../mail_send.php',
		method: 'post',
		data: {
			'type': 'send_template',
			'content': $('body').html()
		},
		success: function(resp) {
			console.log(resp);
		}
	})
</script>
</html>