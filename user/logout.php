<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>哔哩哔哩弹幕视频网 - ( ゜- ゜)つロ  乾杯~  - bilibili</title>
	<link rel = "stylesheet" type = "text/css" href = "css/home.css">
</head>
<body>
<?php
	if(isset($_SESSION['user']))
	{
		unset($_SESSION['user']);
		    echo"<script type='text/javascript'>alert('注销成功');history.back(-1);</script>"; 

	}
?> 
</body>
</html>
