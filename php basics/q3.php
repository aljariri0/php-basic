<?php 

function sum($n1, $n2) {

if ($n1 == $n2) {

return $n1 * 3;
}

else {

return $n1 + $n2;

}

}

$n1 = (int) readline("Enter a number1: ");
$n2 = (int) readline("Enter a number2: ");

print(sum($n1, $n2));

?>