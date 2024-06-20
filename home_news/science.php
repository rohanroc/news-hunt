<?php
$url="https://timesofindia.indiatimes.com/rssfeeds/-2128672765.cms";
$feedArr=json_decode(json_encode(simplexml_load_file($url)),true);
if(isset($feedArr['channel'])){
	if(isset($feedArr['channel']['item'])){
		echo "<div class='container'>";
		foreach($feedArr['channel']['item'] as $list){
			echo "<div class='item'>";
				echo "<a href='".$list['link']."' target='_blank'><h2>".$list['title']."</h2></a>";
				echo "<div class='desc'>".$list['description']."</div>";
			echo "</div>";
		}
		echo "</div>";
	}else{
		echo "Invalid Feed Link";
	}
}else{
	echo "Invalid Feed";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="style_news.css">
</head>

<body>

</body>

</html>