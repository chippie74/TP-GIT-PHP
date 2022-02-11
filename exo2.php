<?php

function calculBC($AB,$AC){

   $BC=sqrt($AB**2+$AC**2);
   return $BC;
}
$BC=calculBC(10,15);

echo "Longueur BC :" . $BC;
