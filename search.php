<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
</head>
<body>
<div class = "title">
		<div class="title_head">
			<div class = "titleSecond">
				<div class = "title_left">
					<img src = "img/robet.png">
				</div>
			</div>
		</div>
</div>
<div class = "bili"><img src = "img/bili.png"></div>
<div class = "word_login">
	<div class = "word_login_center">
		<hr style="float:left;width:45%;"/>
		<font style="float:left;">搜索</font>
		<hr style="float:left;width:45%;"/>
</div>
<?php
 	header("Content-type: text/html; charset=utf-8");
 	include"user/final.php";
 	$searchs = $_POST['search_box'];
 	$sql = "SELECT * FROM movie WHERE title  like '%$searchs%'";
	$res = $dbh->prepare($sql);
	$res->execute();
	$result = $res->fetchall(PDO::FETCH_ASSOC);
	 ?>
<div class = "movie_search">
	<?php
	foreach ($result as $key => $value) { ?>
			<form method="post" action="play/player.php" >
				<button type="submit"   background-image:url=(<?php echo $value['pic_site']; ?>)><?php echo $value["title"]; ?></button>
				<input type = "hidden" value=" <?php echo $value["site"]; ?>" name = site>
			</form>
	<?php } ?>
</div>
