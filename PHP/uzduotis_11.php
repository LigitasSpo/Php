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

$m = [

	[
		'vardas' => 'Jonas',
		'lytis' => 'Vyras',
		'amzius' => 23,
		'patiekalas' => 'Sriuba'
	],

	[
		'vardas' => 'Agne',
		'lytis' => 'Moteris',
		'amzius' => 28,
		'patiekalas' => 'Cepelinai'
	],
	[
		'vardas' => 'Tadas',
		'lytis' => 'Vyras',
		'amzius' => 18,
		'patiekalas' => 'Kotletai'
	],

	[
		'vardas' => 'Juozas',
		'lytis' => 'Vyras',
		'amzius' => 63,
		'patiekalas' => 'Blynai'
	],

	[
		'vardas' => 'Titas',
		'lytis' => 'Vyras',
		'amzius' => 21,
		'patiekalas' => 'Koldunai'
	],


	[
		'vardas' => 'Samanta',
		'lytis' => 'Vyras',
		'amzius' => 22,
		'patiekalas' => 'Zuvis'
	]


];

?>



<div class="test">




<table>

	<tr>
		<th>Nr</th>
		<th>Vardas</th>
		<th>Lytis</th>
		<th>Amzius</th>
		<th>Patiekalas</th>

	</tr>
	<?php
	$n = 0;
	foreach ($m as $darb) {
		?>
		<tr>
			<td>
				<?php 
				echo ++$n . '.';
				?>

			</td>
			<td>
				<?php 
				echo $darb['vardas'];
				?>
			</td>
			<td>
				<?php 
				echo $darb['lytis'];
				?>

			</td>
			<td>
				<?php 
				echo $darb['amzius'];
				?>
			</td>

			<td>
				<?php 
				echo $darb['patiekalas'];
				?>
			</td>
		</tr>
		<?php
	}

	?>





	<?php

	//istraukti kiekviena masive esanti skaiciu ir sudeti su praitu

	//gauta skaiciu padalinti su count comanda ir gauti vidurki

	$a = [3,6,8,4,2,3,6,5,4];

	$x = 0;
	foreach ($a as $value) {
		
		$x += $value
	}

	echo $x count($a);

	?>

</table>

	
</div>

</body>
</html>