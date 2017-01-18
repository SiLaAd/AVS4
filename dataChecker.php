
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//TODO
include './levi.php';

$filename = './wordsToCheck.txt';

if(file_exists($filename)){
    echo "Datei existiert";
    
    $filepath = './';
    
    $tempString = fread(fopen($filepath ."wordsToCheck.txt", 'r'), filesize($filepath ."wordsToCheck.txt"));
            $words[] = unserialize($tempString);
    
            levenshteins($words);
} else {
    echo "Datei existiert nicht";
}