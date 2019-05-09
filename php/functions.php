<?php
 echo strlen("Hello World");

 echo substr("hello world",2,3);

 echo str_replace("world","there","hello world");

 echo trim("hello world","d");

 echo strtolower("HELLO WORLD");

 echo strtoupper("helloworld");

 $txt="john,ben,johny";

 $array=explode(',',$txt);

 var_dump(implode(',',$array));

 if(is_array($txt)){
 	echo "variable is an array";
 }
 else{
 	echo "variable is not an array";
 }
 $dollarname="Raj";

 function hellointern($dollarname){
 	global $dollarname;
 	echo "hello ".$dollarname;

 }
 hellointern("john");
 echo $dollarname;




?>