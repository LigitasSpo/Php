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

$skaitliukas = 0;
$kiek = 7;

while ($skaitliukas < $kiek) {

	echo ++$skaitliukas . '<br>';

}


$skaitliukas = 0;
do {

	echo ++$skaitliukas . '<br>';

} while ($skaitliukas < $kiek);
	# code...


echo "baigta";

?>



</body>
</html>