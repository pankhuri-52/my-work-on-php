<?php
   $carcompanies=array("Volvo","BMW","Mercadise");
   var_dump($carcompanies);

   //indexed arrays
   $carcompany[0]="volvo";
   $carcompany[1]="bmw";
   $carcompany[2]="mercadise";
   var_dump($carcompany);

   echo count($carcompany);

   $arraylength=count($carcompanies);
   for($x=0;$x<$arraylength;$x++){
   	echo $carcompanies[$x]."<br>";
 }
   	//Associative array

  
  $age=array("Peter"=>35,"Ben"=>37,"Joe"=>43);
  var_dump($age);
  echo "age of peter is ".$age['Peter'];

  foreach($age as $key=> $value){
  	echo " key ".$key." Value ".$value;
  }

  //Multidimensional array

  $internships=array(
  	array('operations',4000,'6months'),
  	array('Marketing',6000,'7months'),
  	array('Developer',9000,'8months')
  );
  var_dump($internships[0][0]);
  var_dump($internships[0][1]);
  var_dump($internships[0][2]);

  for($row=0;$row<3;$row++){
  	echo  "internship".$row."<br>";
  	for($col=0;$col<3;$col++){
  		echo $internships[$row][$col];
  	}
  }
?>