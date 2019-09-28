<?php //php 7.0.8

   function primeNumber($limit){
     
  for($x=1;$x<=$limit;$x++){//numbers to be checked
      $counter=0;
     
      for($i=1;$i<=$x;$i++){//divisible factors
              if($x % $i==0){
                  
                   $counter++;         
                }
            
            }
      if($counter==2){
      echo $x."is Prime Number"; 
       echo "/n";
      }
    
    }

}
primeNumber(100);
    
?>