<?php 
session_start();
require('conexion.php');
        $user = $_POST["user"];
        $pass = $_POST["pass"];

        echo $user, $pass;
        
        $sql="SELECT id_user FROM usuario WHERE nombre = $user AND contra = $pass ";
        $result=$con->query($sql);

        if($result){
            var_dump($result);
            $_SESSION['id_user']=$id_user ;
            header("Location:menu.php");
        }
  

	
?>