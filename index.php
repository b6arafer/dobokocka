<?php
    include("kocka.php");
    $kocka=new kocka(6);
    $kocka->dobas();
    echo ("$kocka->dobott");
    for($i=0;$i<$kocka->dobott;$i++)
    {
        echo '<img src="potty.jpg"/>';
        echo '</ br>';
        
    }
?>

