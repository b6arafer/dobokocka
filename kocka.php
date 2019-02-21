<?php

class kocka {
    var $dobott;
    var $oldalszam;
    
    function __construct($oldalszam) 
    {
        $this->oldalszam=$oldalszam;
    }
    
    
    
    function dobas()
    {
	return rand(1,$this->oldalszam);
    }
    
    
}
?>