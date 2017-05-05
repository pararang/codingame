<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $n // the number of temperatures to analyse
);
$temps = stream_get_line(STDIN, 256 + 1, "\n"); // the n temperatures expressed as integers ranging from -273 to 5526
$array = explode(" ",$temps);
// var_dump($array);
// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$absPos = $absNeg = [];
foreach($array as $a){
    if($a>0){
        $absPos[] = abs($a);
    } elseif ($a<0){
        $absNeg[] = abs($a);
    } 
     
}

if (count($absPos)>0 && count($absNeg)>0){
    $minPos = min($absPos);
    $minNeg = min($absNeg);
    if($minNeg<$minPos) {
        $min=0-$minNeg;
    } else{
        $min = $minPos;
    }
} elseif (count($absPos)>0 && count($absNeg)==0){
    $minPos = min($absPos);
    $min = $minPos;
} elseif (count($absPos)==0 && count($absNeg)>0){
    $minNeg = min($absNeg);
    $min = 0-$minNeg;
} else {
    $min = 0;
}


// echo $min;
echo("$min\n");
?>
