

<?php

echo "abc".'<br>';

echo "abc\x61".'<br>';

$x = 'labas rytas';
echo "Laikastris raso: $x".'<br>';
echo "Laikastris raso: {$x}";

$t = <<<gay
labas rytas!
stai ir as. 
gay;

echo $t;

?>

