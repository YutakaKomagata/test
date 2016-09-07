<?php
	$msg = "<p>ぼくはカエルです<br n/p>";
	$msg .= "<p>よろしくね<br n/p>";
	$age = 10;
	$age ="<p>僕は{$age}才なんだよ<br n/p>";
	$mission = <<<EOFF
		<h2>学習内容</h2>
		<ul>
			<li>PHP</li>
			<li>MySQL</li>
		</ul>
EOFF;
?>

<!DOCTYPE html>
<html>
<head>
	<title>始めようphp</title>
	<meta charset="utf-8">
</head>
<body>
<h1>PHPの基本</h1>

<?php echo $msg;?>

<p>PHPを覚えるぞ</p>

<?php 
	echo $age;
	echo $mission;
?>

</body>
</html>