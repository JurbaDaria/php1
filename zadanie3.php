<?php
$adaos = 7;
    $pret = 120;
    do{
		$pret=$pret + $adaos;
		$adaos++;
    }
    while( $adaos < 10 );
    echo ("<br />Новая цена товара будет -- $pret" );
?>
