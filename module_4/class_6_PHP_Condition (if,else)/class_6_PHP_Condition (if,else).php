<?php
$day = "thusday";
$helfDay = "thusday";
if($day === "Friday" || $day === "Saturday"){
    print("This is Holyday");
}elseif($day === "thusday" && $day === $helfDay){
    echo "This day is helf working day";
}else{
    print("This is working Day");
}


?>
