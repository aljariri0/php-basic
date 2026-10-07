<?php 

function what_season($temp) {

if ($temp < 20) {

return "Winter";
}

else if ($temp) {

return "Is is Summertime";

}

}

$season = (int) readline("Enter a temp? ");

print(what_season($season));

?>