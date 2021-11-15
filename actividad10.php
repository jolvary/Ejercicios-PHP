<?php 

$a = 5; 
$a--;             	// Resta 1 a $a 
echo "$a<br>";    	// Muestra 4 

$a = 5; 
--$a;             	// Resta 1 a $a 
echo "$a<br>";    	// Muestra 4 

$a = 5; 
echo --$a; 		// Resta 1 a $a y lo muestra por pantalla
echo "<br>";  

$a = 5; 
echo $a--; 		// Primero muestra un 5 y luego resta 1 a $a 
echo $a;          	// Muestra 4 
echo "<br>";  


$a = 5; 
$b = --$a;        	// Resta 1 a $a y después se asigna a $b 
echo "<br>";  

$a = 5; 
$b = $a--;        	// $a se asigna a $b ($b valdrá 5)  
echo $b;         	// Muestra 5 
echo "<br>";  
 
$a = 5; 
$b = $a-- + $a--;  
echo $a;        	// Muestra 3 
echo $b;        	// Muestra 9 
echo "<br>";  


$a = 5; 
$b = $a-- + --$a;  
echo $a;        	// Muestra 3 
echo "<br>";  
echo $b;        	// Muestra 8 
echo "<br>";  


?>
