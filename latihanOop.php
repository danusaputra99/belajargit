<?php
Class ganjilgenap{
    function cari ($angka){
        return ($angka%2==0)?"genap":"ganjil";
        if($angka%2==0){
            return "genap";
        }else{
            return "ga=ganjil";
        }
    }
}
$cariangka = new ganjilgenap;
$angka=18;
echo"$angka termasuk bilangan".$cariangka->cari($angka);
?>