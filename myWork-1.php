<?php

//1st Conditional Statement.
$a = 5;
$b = 10;
$c = 15;

echo $a>$b && $a>$c ? "Large Number is= $a" : ($b>$a && $b>$c ? "Large Number is= $b" : "Large Number is= $c");
echo "<br>";


//2nd Conditional Statement.
$w = 44;
$x = 12;
$y = 33;
$z = 22;

$large = $w>$x && $w>$y && $w>$z ? "Larger Number is = $w" : ($x>$w && $x>$y && $x>$z ? "Larger Number is = $x" : ($y>$w && $y>$x && $y>$z ? "Larger Number is = $y" : "Larger Number is = $z"));

echo $large;
echo "<br>";

//1st Pattern.
$k = 5;
for($i=1; $i<=$k; $i++){
    for($j = 1; $j<= $i; $j++){
        echo "* ";
    }
    echo "<br>";
}

//2nd Pattern.
$n = 5;
for($i=1; $i<=$n; $i++){
    for($g=$n-1; $g>=$i; $g--){
        echo "&nbsp;";
    }
    for($h=1; $h<=$i; $h++){
        echo "*     &nbsp;";
    }
    echo "<br>";
}


?>