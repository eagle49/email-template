<?php
	// http://prntscr.com/nz72od
	$email_date_title = 'DC Soul 2019 r1';

	// http://prntscr.com/nz72ta
	$support1_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'CecilyMusic.com',
		'link'		=> 'http://cecilymusic.com/'
	];

	// http://prntscr.com/nz72y1
	$support2_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'Dantepope.com',
		'link'		=> 'https://www.dantepope.com/'
	];

	// http://prntscr.com/nz74t4
	$support3_block = [
		'file_name' => 'emailimage1.jpg',
		'title'		=> 'MicahRobinson.com',
		'link'		=> 'https://www.micahrobinsonmusic.com/'
	];

	// http://prntscr.com/nz74yc
	$calendar_block = [
		'title'		=> 'July 2019 CALENDAR',
		'events'	=> [
			'Date - Artist - Venue',
			'Date - Artist - Venue',
			'Date - Artist - Venue',
			'Date - Artist - Venue',
			'Date - Artist - Venue',
		]
	];

	// http://prntscr.com/nz7510
	$spotify_block = [
		'title'		=> 'PLAYLIST',
		'link'		=> 'https://open.spotify.com/playlist/3tEgSJDGXro1blzJ8Z5Yle?si=AEydcSRwTxe-m9jNjy9FLw',
		'image'		=> 'sportify.jpg'
	];

	// http://prntscr.com/nz76a9
	$youtube_block = [
		'image'		   => 'emailimage2.jpg',
		'youtube_link' => 'https://www.youtube.com/embed/ShZ978fBl6Y?controls=0'
	];

	// http://prntscr.com/nz76kt
	$image_block = [
		// block1
		[
			'title'		=> 'Caption',
			'image'		=> 'emailimage2.jpg'
		],
		// block2
		[
			'image'		=> 'emailimage2.jpg',
			'content'	=> 'Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this 	image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image'
		],
		// block3
		[
			'image'		=> 'emailimage3.jpg',
			'content'	=> 'Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this 	image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image Scroll and Read Details on this image'
		],
		// block4
		[
			'image'		=> 'emailimage2.jpg'
		],
		// block5
		[
			'image'		=> 'emailimage2.jpg'
		],
		// block6
		[
			'image'		=> 'emailimage2.jpg'
		],
		// block7
		[
			'image'		=> 'emailimage2.jpg'
		]
	]
	
?>
<!DOCTYPE>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Newsletter</title>
<style>
@font-face {
 font-family: 'Futura PT Book';
 src: url('fonts/FuturaPT-Book.woff2') format('woff2'), url('fonts/FuturaPT-Book.woff') format('woff');
 font-weight: normal;
 font-style: normal;
}
 @font-face {
 font-family: 'Futura PT';
 src: url('fonts/FuturaPT-Medium.woff2') format('woff2'), url('fonts/FuturaPT-Medium.woff') format('woff');
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
</style>
</head>
<body style="display:block;width:690px;margin:0px auto;">
<table width="690px" cellpadding="0" cellspacing="0" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';">
  <tr>
    <td colspan="3" style="text-align:center;"><a href="http://www.nozolo.com/" target="_blank"><img src="images/email-logo.jpg" width="539" height="100" style="margin:0px auto" alt="logo" /></a></td>
  </tr>
</table >
<table style="background:#000000; padding:0px 20px 20px 20px; width:690px; font-family: 'Futura PT Book';">
  <tr>
    <td style="color:#fff; font-size:20px; text-align:center;"><?= $email_date_title ?></td>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;"><a href="https://www.facebook.com/nozolomusic/" target="_blank"><img src="images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="https://twitter.com/NozoloMusic" target="_blank"><img src="images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="https://www.instagram.com/nozolomusic/" target="_blank"><img src="images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="images/youtube.png" alt="youtube" style="margin-right:5px;"></a> <a href="http://www.nozolo.com/" target="_blank"><img src="images/home.png" alt="home"></a></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="0" style="background:#000000; padding:20px 20px 20px 20px;">
  <tr>
    <td style="text-align:center;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="images/<?= $support1_block['file_name'] ?>" width="181" height="121" align="image" style="margin:0px 0px 0px 0px;" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support1_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support1_block['title'] ?></a></p></td>
    <td style="text-align:center;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="images/<?= $support2_block['file_name'] ?>" width="181" height="121" align="image" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<?= $support2_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support2_block['title'] ?></a></p></td>
    <td style="text-align:center;"><a href="<a href="<?= $support3_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><img src="images/<?= $support3_block['file_name'] ?>" width="181" height="121" align="image" /></a>
      <p style="margin:0px 0px 0px 0px; color:#fff;"><a href="<a href="<?= $support3_block['link'] ?>" style="margin:0px 0px 0px 0px; color:#fff;" target="_blank"><?= $support3_block['title'] ?></a></p></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';">
  <tr>
    <td valign="top" style="text-align:center; border:1px solid #fff; height:210px" width="50%;"><h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"> <?= $calendar_block['title'] ?></h3>
	<?php
		foreach($calendar_block['events'] as $event) {
			echo '<p style="color:#fff; margin:0px;"><a<a href="#" style="color:#fff;text-decoration:none;" href="#" style="color:#fff;text-decoration:none;">'.$event.'</a></p>';
		}
	?>
    <td valign="top" style="text-align:center; border:1px solid #fff; margin-top:20px;" width="50%;"><h3 style="color:#fff; font-family: 'Futura PT'; font-size:28px; margin-top:20px;margin-bottom:15px;"><?= $spotify_block['title'] ?></h3>
     <a href="<?= $spotify_block['link'] ?>" target="_blank"><img src="images/<?= $spotify_block['image'] ?>" style="display:block; margin:0 auto;"></a></td>
  </tr>
</table>
<table width="690px" cellpadding="0" cellspacing="30" style="background:#000000; padding:20px 20px 20px 20px; font-family: 'Futura PT Book';margin-top:-40px;">
  <tr>
    <td style="text-align:center;background-image:url(images/<?= $image_block[0]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom"><h2 style="margin:0px 0px 0px 0px; color:#fff; text-shadow: 1px 0px 2px #000000;"><?= $image_block[0]['title'] ?></h2></td>
    <td style="text-align:center;background-image:url(images/<?= $image_block[1]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="middle"><div style="color:#fff;height:240px;width:100%;overflow-y: auto;float:left;margin:0px 0px 0px 0px; " class="scrollbar" id="style-8">
        <div class="force-overflow"></div>
        <?= $image_block[1]['content'] ?>
		</div></td>
  </tr>
  <tr>
    <td style="text-align:center;background-image:url(images/<?= $youtube_block['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom"><iframe width="100%" height="240" src="<?= $youtube_block['youtube_link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></td>
    <td style="text-align:center;height:240px; width:50%;" valign="top"><img src="images/<?= $image_block[2]['image'] ?>" width="262" height="140" alt="image" />
      <div style="color:#fff;height:90px;width:100%;overflow-y: auto;float:left;margin:10px 0px 0px 0px; " class="scrollbar" id="style-8">
        <div class="force-overflow"></div>
		<?= $image_block[2]['content'] ?>
		</div></td>
  </tr>
  <tr>
    <td style="text-align:center;background-image:url(images/<?= $image_block[3]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom"></td>
    <td style="text-align:center;background-image:url(images/<?= $image_block[4]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="middle"></td>
  </tr>
  <tr>
    <td style="text-align:center;background-image:url(images/<?= $image_block[5]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="bottom"></td>
    <td style="text-align:center;background-image:url(images/<?= $image_block[6]['image'] ?>); background-repeat:no-repeat;background-size:cover;background-position:center;height:240px; width:50%;" valign="middle"></td>
  </tr>
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
    <td style="font-size:27px; color:#e9e9e9; text-align:center;"><a href="#" target="_blank"><img src="images/facbook.png" alt="facebook" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="images/twitter.png" alt="twitter" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="images/instagram.png" alt="instagram" style="margin-right:10px;"></a><a href="#" target="_blank"><img src="images/youtube.png" alt="youtube" style="margin-right:10px;"></a><a href="http://www.nozolo.com/" target="_blank"><img src="images/home.png" alt="home"></a></td>
  </tr>
  <tr>
    <td style="font-size:27px; color:#e9e9e9; text-align:center;">Copyright 2019 Nozolo Music.  All Rights Reserved.</td>
  </tr>
  </tr>
  
</table>
</body>
</html>