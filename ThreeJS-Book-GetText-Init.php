<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$URL='./Zekom-Github-Page.php';
//$URL='../Zekom-Doom-Builder/Doom-specs-1666.txt';
//$URL='./js/three.min.js';

//$URL='./ThreeJS-Book-1-2-3.php';
//
//$URL='./Wealth-Of-the-Nations-txt.html';

$NWords=777;
$book=file_get_contents($URL);

$bookText=substr($book,rand(0,strlen($book)-$NWords),$NWords);

//PHP Manual : http://php.net/manual/en/function.str-replace.php
        
$stringSpecial = array(chr(0),chr(1),chr(2),chr(3),chr(4),chr(5),chr(6),
    chr(7),chr(8),chr(9),chr(10),chr(11),chr(12),chr(13),chr(14),chr(15),chr(16),
     chr(17),chr(18),chr(19),chr(20),chr(21),chr(22),chr(23),chr(24),chr(25),chr(26),
     chr(27),chr(28),chr(29),chr(30),chr(34),chr(39),'<','>','$','/','(',')','[',']','{','}','\\n');

$stringReplace  = array('!0!','!1!','!2!','!3!','!4!','!5!','!6!',
        '!7!','!8!','!9!','!10!','!11!','!12!',
    '!13!','!14!','!15!','!16!','!17!','!18!',
    '!19!','!20!','!21!','!22!','!23!','!24!','!25!',
    '!26!','!27!','!28!','!29!','!30!','!34!','!39!',
    '---','---','---','---','---','---','---','---','---','---','Newline');


$output  = str_replace($stringSpecial,$stringReplace, $bookText);

//PHP Manual : http://php.net/manual/en/function.htmlspecialchars.php

//$output = htmlspecialchars($bookText, ENT_QUOTES);

//for( $i=0; $i< strlen($output);$i+=100 )
//{
//    echo "'".substr($output,$i,100)."'+"; 
//}
//echo "'".substr($output,$i+100,strlen($output)-$i-101)."'";

echo "'".$output."'";
?>

 
