<?php 

function is_inclusive($n1) {

if (20 <= $n1 && $n1 <= 50) {
    return "Yes";
}

else {

return "No";

}

}

$n1 = (int) readline("Enter a number: ");

print(is_inclusive($n1));

?>

