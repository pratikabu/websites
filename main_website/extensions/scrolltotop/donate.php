<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<?php
	$paypalLink = "https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=pratikabu@gmail.com&currency_code=USD&item_name=Contribution%20for%20Scroll%20To%20Top.";
	$mozillaLink = "http://addons.mozilla.org/en-US/firefox/addon/scroll-to-top/developers";
	$donateUrl = $paypalLink;
	$paypalName = "PayPal";
	$mozillaName = "Mozilla";
	//$firefoxFound = isset($_SERVER['HTTP_USER_AGENT']) && strlen(strstr($_SERVER['HTTP_USER_AGENT'],"Firefox"));
	$firefoxFound = True;
	//if($firefoxFound > 0) {
		$donateUrl = $mozillaLink;
	//}
	
	function printAltUrl() {
		global $firefoxFound, $paypalLink, $mozillaLink;
		if($firefoxFound) {
			print_r($paypalLink);
		} else {
			print_r($mozillaLink);
		}
	}
	
	function printAltName() {
		global $firefoxFound, $paypalName, $mozillaName;
		if($firefoxFound) {
			print_r($paypalName);
		} else {
			print_r($mozillaName);
		}
	}
	
	function printDonationName() {
		global $firefoxFound, $paypalName, $mozillaName;
		if($firefoxFound) {
			print_r($mozillaName);
		} else {
			print_r($paypalName);
		}
	}
?>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<meta http-equiv="refresh" content="5;URL='<?php print_r($donateUrl); ?>'">
		<title>Thank You - Pratik Soni</title>
		<link rel="shortcut icon" href="../../res/favicon.ico">
		<link rel="stylesheet" href="../../res/stylesheet.css">
		<link rel="stylesheet" href="res/stt.css">
		
		<script type="text/javascript">

			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-10242165-9']);
			_gaq.push(['_trackPageview']);

			(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
			})();

		</script>
	</head>
	
	<body class="zeroMargin">
		<div id="mainDiv" align="center" class="mainContent" style="width: 100%; padding-top: 10px; margin-top: 20px;">
			<div align="center" class="tableClass documentContent" style="width: 800px;">
				<div style="margin-bottom: 15px; margin-top: 15px;">
					Thank you.<br/>
					Redirecting to <a href="<?php print_r($donateUrl); ?>">donation page</a> using <?php printDonationName(); ?>.
				</div>
				<div style="margin-bottom: 15px;"><img src="res/loader.gif" /></div>
				<div style="margin-bottom: 15px; font-size: 12px;">
					Once redirected to <a href="<?php print_r($donateUrl); ?>">donate page</a>, click on Contribute link to donate. See screenshot below.
				</div>
				<div style="margin-bottom: 15px;"><img src="res/firefox_donate.png" /></div>
				<div style="margin-bottom: 15px; margin-top: 15px; font-size: 10px;">
					<a href="<?php print_r($donateUrl); ?>">Click here</a> if it does not redirects within 5 seconds.
				</div>
				<div style="margin-bottom: 15px; margin-top: 15px; display: none;">
					Alternatively donate using <a href="<?php printAltUrl(); ?>"><?php printAltName(); ?></a>.
				</div>
			</div>
		</div>
	</body>
</html>