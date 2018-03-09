<?php

	$a = [3,6,8,4,2,3,6,5,4];


	function generateRandomString($length = 9) {
    $characters = '0123456789';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

	function skait ($a){

		$x = 0;
//istraukti kiekviena masive esanti skaiciu ir sudeti su praitu
		foreach ($a as $value) {
		
		$x += $value;
//gauta skaiciu padalinti su count comanda ir gauti vidurki
		return $x / count($a);
	}

}
echo skait($a) . '<br>';
echo skait ([1,6,8,4,3,6]). '<br>';

?>