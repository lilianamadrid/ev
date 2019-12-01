<?php
 require('conexion.php');

 $accion = $_POST['accion'];
 $cantidad = $_POST['cantidad'];
 $id_user=2;
 $cont1=0;
 $bandera="false";
 
        $sql = "SELECT monto FROM usuario WHERE id_user = $id_user ";
        $result = $con->query($sql);
        $row = $result->fetch_assoc();
        $monto =$row["monto"];
        if($accion =="deposito"){
        $monto = $monto+$cantidad;
      }else if($accion =="retiro"){
        $monto = $monto-$cantidad;
      }
      $sqlM="UPDATE usuario SET monto=' $monto' WHERE id_user = $id_user " ;
      if($con->query($sqlM)=== true){
        alert(" ");
      }


    
 
   
   // el promedio general de los tres
  
    

//promedio de los 


    


     
 

?>