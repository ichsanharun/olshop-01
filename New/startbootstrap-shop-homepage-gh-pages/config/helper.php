<?php
function formatnomor($angka)
    {
     if($angka){
         $jadi = number_format($angka,0,',','.');
         return $jadi;
        }
    }
 ?>
