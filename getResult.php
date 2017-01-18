<?php



$filename = './wordsToCheck.txt';


while(filesize($filename)!= 0){
    
}


    $filepath = './results.txt';
               
    $datei = fopen($filepath, "a+");   // Datei öffnen
    $content = file($filepath );
    $results = urldecode(unserialize($content[0]));
    
    echo json_encode($results);

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

