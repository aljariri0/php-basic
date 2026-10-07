<?php 

function check($n1, $n2) {

if (($n1 + $n2) == 30) {
    return $n1 + $n2;
}

else {

return "false";

}

}

$n1 = (int) readline("Enter a number1: ");
$n2 = (int) readline("Enter a number2: ");

print(check($n1, $n2));

?>