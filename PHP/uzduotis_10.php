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

$a = ['jonas','Petras','Antanas'];

var_dump($a);

$a[1] = 'Gaidys';

var_dump($a);

$a[] = 'Andrius';

var_dump($a);

//unset ($a[1]);

//$a[] = 'Andrius';

//var_dump($a);

 array_splice($a, 1, 1);

var_dump($a);


//acos masyvas


$b = ['bmw' => 1000, 'audi'=>1000, 'skoda'=> 1000];
var_dump($b);

//$b['bmw'] = 1000;
//unset($b['skoda']);
//$b['zaz'] = 1000;
//var_dump($b);


$s = 0;

foreach ($b as $key => $value) {
	$s += $value;
}

echo $s / count($b);
			
		  //masyvas     //raktas       //reiksme
//foreach ($variable as $key => $value) {
	# code...
//0}

?>



</body>
</html>