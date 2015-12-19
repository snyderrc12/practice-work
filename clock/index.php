<!DOCTYPE HTML>
<html>
<head>

	<title>What time is it?</title>

	<link rel="stylesheet" type="text/css" href="styles.css">
	<?php require 'logic.php'; ?>

</head>

<body class="<?php echo $class?>">

	<h1>It is <?php echo $time?></h1>
	<img src='http://thewc.co.s3.amazonaws.com/challenges/<?php echo $image?>' alt='Scene'>

</body>

</html>