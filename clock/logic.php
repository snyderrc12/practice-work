<?php


# Set the timezone
# Substitute in your own timezone; Ref: http://us3.php.net/manual/en/timezones.php
date_default_timezone_set('America/New_York');

# Get the time... This will be used to display the time on the page
# g = 12-hour format of an hour without leading zeros
# : = Just a colon
# i = Minutes with leading zeros
# a = Lowercase am or pm
$time = date('g:ia');

# Figure out what the hour is using the 'G' format: 24-hour format of an hour w/o leading zeros
$hour = date('G');








# Morning: Between 5 and 11 (i.e. 5am to 10:59am)
if($hour >= 5 AND $hour < 11) {
	$image = 'php-morning.png';
	$class = 'morning';
}
# Afternoon: Between 11 and 16 (i.e 11am and 3:59pm)
elseif($hour >= 11 AND $hour < 16) {
	$image = 'php-afternoon.png';
	$class = 'afternoon';
}
# Evening: Between 16 and 20 (i.e 4pm and 7:59pm)
elseif($hour >= 16 AND $hour < 20) {
	$image = 'php-evening.png';
	$class = 'evening';
}
# Night: Anything after 20 (i.e after 8pm)
else {
	$image = 'php-night.png';
	$class = 'night';
}








?>