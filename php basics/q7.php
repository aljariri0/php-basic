<?php 

function max_number(array $n) {

$max = $n[0];


for($i = 0; $i < count($n); $i++)
{

if ($n[$i] > $max) {

$max = $n[$i];

}


}


return $max;
}

$n = [1,5,9];

print(max_number($n));

?>

