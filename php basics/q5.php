<?php 

function is_mulitple_3($n1) {

if ($n1 % 3 == 0) {
    return "Yes";
}

else {

return "No";

}

}

$n1 = (int) readline("Enter a number: ");

print(is_mulitple_3($n1));

?>

