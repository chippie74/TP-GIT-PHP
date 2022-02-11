<?php
$total=0;
for($num=1;$num<31;$num++){
    $total=$num+$total;
}
echo "Somme des 30 premiers entiers: " . $total;