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

$a = 1;
$b = 2;
$c = $a + $b;
echo $c.'<br>';
echo $c *3 . '<br>';

$x = 1;

$x = $x + 5;

echo $x . '<br>';

$x1 = 5;
$x2 = '5';

$z = $x1 == $x2;

var_dump($z);

$a = 6 > 5;
$b = 8 > 7;
var_dump($a && $b);


$a = true; $b = true; $c = false;

var_dump($a && $b && !$c);



$a = 5;

switch ($a) {
	case 1: echo "vienas"; break;
	case 2: echo "du"; break;
	case 3: echo "trys"; break;
	default: echo "kitas atvejis";

}

?>



</body>
</html>