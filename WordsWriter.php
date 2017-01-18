<?php

if (isset($_GET['wordSend'])) {
    $words = json_decode($_GET['wordSend']);
    
    $filepath = './';
     $datei = fopen($filepath . "wordsToCheck.txt", "w");
        
        fwrite($datei, serialize($words));
     
        fclose($datei);
      
        echo "fertig".$_SERVER['SERVER_ADDR'];
}



/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

