<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<meta charset = "utf-8" />
		<link rel = "stylesheet" type = "text/css" href = "index.css" />
		<script type="text/javascript" src = "index.js"></script>
	</head>
	<body onload = "place()">
		<section class = "mainFrame">
        
    <link href="index.css" rel="stylesheet" type="text/css" />
<img id="banner" src="dorms/DORM.png" />

<section class = "Top">
    
	<section class = "up">
	</section>
	<section class = "down">
					<text class = "nav"><a href = "sign_up.php">SIGN UP</a></text>
					<text class = "nav"><a href = "sign_in.php">SIGN IN </a>|</text>
					<text class = "nav"><a href = "gen_announcement.php">ANNOUNCEMENT </a>|</text>
					<text class = "nav"><a href = "index.php">HOME </a>|</text>
	</section>
</section>
<section class = "Bottom">
<?php
		$mens="Mens";
		$womens="Womens";
		$new="New";
		$ih="Ih";
		$ati="Ati";
		$acci="Acci";
		$mareha="Mareha";
		$foreha="Foreha";
		$newforeha="Newforeha";
		$vetmed="Vetmed";
	?>
	
    <a href='DormInfo.php?dorm=<?php echo $mens?>' method='post'><img src = "dorms/mens-dorm.jpg" class = "img" id = "i1" /></a>
	<a href='DormInfo.php?dorm=<?php echo $womens?>' method='post'><img src = "dorms/womens-dorm.jpg" class = "img" id = "i2" /></a>
	<a href='DormInfo.php?dorm=<?php echo $ih?>' method='post'><img src = "dorms/ih.jpg" class = "img" id = "i3" /></a>
	<a href='DormInfo.php?dorm=<?php echo $acci?>' method='post'><img src = "dorms/acci-upper.jpg" class = "img" id = "i4" /></a>
	<a href='DormInfo.php?dorm=<?php echo $foreha?>' method='post'><img src = "dorms/foreha.jpg" class = "img" id = "i5" /></a>
	<a href='DormInfo.php?dorm=<?php echo $mareha?>' method='post'><img src = "dorms/mareha.jpg" class = "img" id = "i6" /></a>
	<a href='DormInfo.php?dorm=<?php echo $new?>' method='post'><img src = "dorms/new-dorm-2.jpg" class = "img" id = "i7" /></a>
	<a href='DormInfo.php?dorm=<?php echo $newforeha?>' method='post'><img src = "dorms/new-foreha-sign.jpg" class = "img" id = "i8" /></a>
	<a href='DormInfo.php?dorm=<?php echo $vetmed?>' method='post'><img src = "dorms/vetmed-dorm-sign.jpg" class = "img" id = "i9" /></a>
	
	<img src = "extras/left.png" id = "b1" class = "Button" onclick = "moveLeft()" />
	<img src = "extras/right.png" class = "Button" id = "b2" onclick = "moveRight()" />
</section>