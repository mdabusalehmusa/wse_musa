<?php
//Loop
//Do while loop
function result_shit ($bangla, $english, $arabic, $math){
    $fullMark = $bangla + $english + $arabic + $math;
    
    if($fullMark <= 129){
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And you are fall");

    }elseif($fullMark <= 199){
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And you are pass");

    }elseif($fullMark <= 299){
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And your great is B");

    }elseif($fullMark <= 349){
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And your great is A");

    }elseif($fullMark > 349 || $fullMark < 400){
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And your great is A");

    }else{
        print('Bangla =' . $bangla . '</br>' . "English = " . $english . '</br>' . "Arabic = " . $arabic . '</br>' . "Math = " . $math . "</br>" . "Your full mark = " . $fullMark . ", And your great is empathy");

    }
    
}

echo result_shit(52,36,47,51);




?>
