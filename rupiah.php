<?php 


function rupiah($angka){
    $hasil = "Rp ". number_format($angka, '3', '.', '.');
    return $hasil;
}



?>