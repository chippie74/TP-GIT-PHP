<?php

function calculBC($AB,$AC){

   $BC=sqrt($AB**2+$AC**2);
   return $BC;
}
$BC=calculBC(10,15);

echo "Longueur BC :" . $BC . "<br>";

?>

<?php
for($numb=0;$numb<26;$numb++){
    echo $numb. "<br>";
}
