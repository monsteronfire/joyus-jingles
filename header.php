<!DOCTYPE html>
<?php
$shareLink = "https://www.facebook.com/dialog/feed?app_id=559199460838925&link=http://www.wearevlt.com/Joyus&picture=http://www.wearevlt.com/Joyus/css/img/img-holder-dino.jpg&name=".urlencode("VLT | Joy-us Jingles")."&description=".urlencode("I've created my own Christmas tune with Joyus Jingles! Come join the fun and make some noise with VLT this Christmas.")."&redirect_uri=http://www.wearevlt.com/Joyus/closewindow.html";

$twitterLink = "http://twitter.com/share?url=http://www.wearevlt.com/Joyus/&text=".urlencode("I've created my own Christmas tune with Joyus Jingles! Come join the fun and make some noise with VLT this Christmas");
?>
<html manifest="joyus.appcache">
<head>
	<meta charset="utf-8">
	<meta name="google" content="notranslate">
	<meta http-equiv="Content-Language" content="en" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta content="width=device-width, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0" name="viewport">
	<meta name="description" content="">
	<title>VLT | Joy-us Jingles</title>
	<link href="http://www.wearevlt.com/Joyus/css/img/img-holder-dino.jpg" rel="image_src"/>
	<link rel="shortcut icon" href="icon.ico" />
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script type="text/javascript">
	
	 var viewportwidth;
	 var viewportheight;

	 // the more standards compliant browsers (mozilla/netscape/opera/IE7) use window.innerWidth and window.innerHeight

	 if (typeof window.innerWidth != 'undefined')
	 {
	      viewportwidth = window.innerWidth,
	      viewportheight = window.innerHeight
	 }

	// IE6 in standards compliant mode (i.e. with a valid doctype as the first line in the document)

	 else if (typeof document.documentElement != 'undefined'
	     && typeof document.documentElement.clientWidth !=
	     'undefined' && document.documentElement.clientWidth != 0)
	 {
	       viewportwidth = document.documentElement.clientWidth,
	       viewportheight = document.documentElement.clientHeight
	 }

	 // older versions of IE

	 else
	 {
	       viewportwidth = document.getElementsByTagName('body')[0].clientWidth,
	       viewportheight = document.getElementsByTagName('body')[0].clientHeight
	 }	
	 
	 var midLeft = (viewportwidth/2) - 490;
	 var midTop = (viewportheight/2) - 250;
	 
	 var midLeft2 = (viewportwidth/2) - 240;
	 var midTop2 = (viewportheight/2) - 140;	 
	 
	 if(midLeft<0) {
	 	midLeft = 0;
	 }
	 
	 if(midTop<0) {
	 	midTop = 0;
	 }
	
	function initiateDashboardShare() {
		window.open("<?php echo $shareLink; ?>", "shareWindow", "width=980,height=500,left="+midLeft+",top="+midTop);
	}	
	
	function initiateTwitterShare() {
		window.open("<?php echo $twitterLink; ?>", "tweetWindow", "width=480,height=280,left="+midLeft2+",top="+midTop2);
	}
	</script>
</head>

<body>
	<!--
<a onclick="document.getElementById('background_audio').muted = true;">toggle sound</a>

<a href="#noscroll" id="mute">toggle sound</a>
-->
	<div class="main-wrapper">
		<div class="header-wrapper">
			<div class="header-content">
				<div class="main-logo">
					<a href="index.php"></a>
				</div><!--.main-logo-->

				<ul class="social-bar-top">
					<li class="social-fb"><a href="javascript:initiateDashboardShare();"></a></li>
					<li class="social-twitter"><a href="javascript:initiateTwitterShare();"></a></li>
				</ul>
			</div><!--.header-content-->
		</div><!--.header-wrapper-->