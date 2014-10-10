<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$URL='./Wealth-Of-the-Nations-txt.html';
//$URL='../Zekom-Doom-Builder/Doom-specs-1666.txt';
//$URL='./js/three.min.js';

$URL='./ThreeJS-Book-1-2-3.php';
//
//'./Wealth-Of-the-Nations-txt.html'
$NWords=1111;
$book=file_get_contents($URL);
$bookText=substr($book,rand(0,strlen($book)-$NWords),$NWords);

//$bookText
echo $bookText; 


?>

 
