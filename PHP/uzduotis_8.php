<html>
<head>
	<title>PHP Kursai</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php

$kiek = 7;


for ($skaitliukas=0; $skaitliukas < $kiek ; $skaitliukas++) { 
	echo $skaitliukas.'<br>';
	
}

$m = [1,2,8,4,5];

foreach ($m as $a) {

	echo $a . ' **2 = '.$a**2 . '<br>';
	# code...
}

foreach ($m as $a) {
	if ($a >6) break;//sustabdo
	echo $a . ' **2 = '.$a**2 . '<br>';
	# code...
}

foreach ($m as $a) {
	if ($a >6) continue;//praleidzia
	echo $a . ' **2 = '.$a**2 . '<br>';
	# code...
}

?>



</body>
</html>