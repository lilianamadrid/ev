
<?php
 require('conexion.php');

 $sqlb = "SELECT AVG(cont) as promedio , SUM(cont) as suma FROM cajero;";
 $result = $con->query($sqlb);
 $rowb = $result->fetch_assoc();
 $su= $rowb["suma"];

 function promedioCajero($id_cajero, $numB){
    require('conexion.php');
     $sql= "SELECT cont  FROM cajero WHERE id_cajero = $id_cajero";
     $result= $con->query($sql);
     $rowb = $result->fetch_assoc();
     $num = $rowb['cont'];
     $proC =  $num/$numB;
     echo " Promedio de trasacciones: </p>". $proC ."  Número de usuarios:</P> " . $num ;
 }
function menor(){
    require('conexion.php');
    $sql="SELECT id_cajero FROM cajero WHERE cont IN (SELECT MIN(cont) FROM cajero); ";
     
    $result= $con->query($sql);
     $rowb = $result->fetch_assoc();
     $num = $rowb ['id_cajero'];
    echo " El cajero número: ". $num ;
}

function mayor(){
    require('conexion.php');
    $sql="SELECT id_cajero FROM cajero WHERE cont IN (SELECT MAX(cont) FROM cajero); ";
     $result= $con->query($sql);
     $rowb = $result->fetch_assoc();
     $num = $rowb['id_cajero'];
     echo " El cajero número: ". $num ;
}
function nombre($id_user){
    require('conexion.php');
    $sql="SELECT nombre FROM usuario WHERE id_user=$id_user";
    $result= $con->query($sql);
    $rowb = $result->fetch_assoc();
    $nom = $rowb['nombre'];
     return $nom;
}

function monto($id_user){
    require('conexion.php');
    $sql="SELECT monto FROM usuario WHERE id_user=$id_user";
    $result= $con->query($sql);
    $rowb = $result->fetch_assoc();
    $mon = $rowb['monto'];
     return $mon;
}

?>
<html>
    <head>
    <title>Evaluación</title>
    <link rel="icon" type="image/png" href="imagenes/money.png" >
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <header class="centro-flex">
            <div class=" rem5 flex head-d">
               <div class=" flex logo"> 
                    <img  src="imagenes/banco.png" alt="">
                   
                </div> 
               <div><img src="imagenes/user.png" alt="" class="img"><?php $id= 2; echo nombre($id);?></div>
               <div><img src="imagenes/pig.png" alt="" class="img"> monto total: <?php  echo monto($id);?> </div>
               <a href="cerrar.php">Cerrar seción</a>
            </div>   
        </header>
       
        <main class="flex rem5">
            <div   class="">
               
                <form action="funcion.php"  method="post" class="form1"> 
                   <h2>Cajero 1  </h2>
                    <input type="radio" name="accion" value="deposito">Deposito
                    <input type="radio" name="accion" value="retiro"> Retiro
                    <input type="number" name="cantidad"> 
                     <input type="number" id="cajero1" name="cajero" value="1">
                    <input type="submit"   value="Enviar">
                </form>
                <div class="info">
                    <?php
                    $id_cajero = "1";
                    promedioCajero($id_cajero, $su); 
                    ?> 
                </div>
            </div>
            <div  class=" ">
                <form action="funcion.php" method="post" class="form2 "> 
                <h2>Cajero 2</h2>
                <input type="radio" name="accion" value="deposito">Deposito
                    <input type="radio" name="accion" value="retiro"> Retiro
                    <input type="int" name="Cantidad"> 
                    <input type="submit">
                </form>
                <div class="info">
                    <?php
                    $id_cajero = "2";
                    promedioCajero($id_cajero, $su); 
                    ?> 
                </div>
            </div>

            <div class=" ">
                <form action="funcion.php" method="post" class="form3"> 
                <h2>Cajero 3</h2>
                <input type="radio" name="accion" value="deposito">Deposito
                    <input type="radio" name="accion" value="retiro"> Retiro
                    <input type="int" name="Cantidad"> 
                    <input type="submit">
                </form>
                <div class="info">
                    <?php
                    $id_cajero = "3";
                    promedioCajero($id_cajero, $su); 
                    ?> 
                </div>
            </div>
        </main>

        <div class="  rem5 ">
            <h2>Datos del Banco</h2>
            <div class="flex div-ge">   
                <div class=" banco">
                    <p><img src="imagenes/users.png" alt="" class="img"> Número tota de clientes que visitaron el banco: <?php echo  $rowb["suma"];?></p>
                    <p><img src="imagenes/average.png" alt="" class="img"> El promedio de trasacciones del banco:  <?php echo  $rowb["promedio"];?></p>
                </div>
                <div class="banco">
                    <p> <img src="imagenes/menor2.png" alt="" class="img"> Menor número de trasacciones: <?php menor();?></p>
                    
                    <p><img src="imagenes/mayor.png" alt="" class="img"> Maroy número de trasacciones: <?php mayor();?></p>
                </div>
            </div>
      </div>
        <footer class="rem5">
            <p>Todos los derechos reservados</p>
        </footer>
        <script src="https://kit.fontawesome.com/7a45ef996c.js" crossorigin="anonymous"></script>

        <script>
function confirmar()
{
	if(confirm("Deseas realizar otra trasacción?"))
	{
		return true;
	}
	return false;
}
</script>

    </body>
</html>