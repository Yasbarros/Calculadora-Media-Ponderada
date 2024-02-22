<?php
$n=5;
$d= [1.01,1.01,1.01,1.4,2.4];
//$dias= array([]);
$time=0;

//function minimoDias($duracao){
    //for($i=0;$i<=3;$i++){
        //if($duracao[$i]<=3){
        //    $dias = $dias + $duracao[$i];
      //  }
    //    return $dias;       
  //  }
//
//}



//function minimoDias(array $duracao):float{
  //  $s= array_sum($duracao);
    //$t= $s/3;
    //for($s=0;$s<=3;$s++){
      //  $dias +=$s;
    //}
    //return $dias;
    //}     for($i==0;$i<=$duracao;$i++){

          //if($s<=3){

        //}

        //for($i==0;$i<=$s;$i++){
          //  if($s/3<=3){
            //$dias=array[$i];
            //}    $resultado = count($dias);
            


 //*   function minimoDias(array $duracao):float{
//        $s = array_sum($duracao); //6,83
  //      echo $s;
        
    //    function dias( array $dias):int{
      //      for($s=0;$s<=3;$s++){
        //        $dias= array_push($s);
          //      echo $dias;
            //}
//            return $dias;
  ///      }
     //   dias();
   // }

   // minimoDias($d);


function minimosDias(array $duracoes): float{
    $dias=0;
    for($i=1;$i<=$duracoes[$i];$i++){
        $dias++;
        echo $dias;
    }
    return $dias;
}
minimosDias($d);