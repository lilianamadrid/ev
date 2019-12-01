<?php
	require('conexion.php');
	
	session_start();
	
	if(isset($_SESSION["id_user"])){
		header("Location:menu.php");
	}
	
	if(!empty($_POST))
	{
        $usuario=$_POST['user'];
        $password=$_POST['pass'];
        echo$usuario, $password;
		$sql="SELECT id_user FROM usuario WHERE nombre = $usuario AND contra= $password;";
		$result=$con->query($sql);
	    $row = $result->fetch_assoc();
		$id=$row['id_user'];
		echo $row;
		if($result) {
			$_SESSION['id_user'] = $id;
			header("Location: menu.php");
			} else {
			$error = "El nombre o contraseña son incorrectos";
		}
	}
?>
<html>
	<head>
	<title>Evaluación</title>
    <link rel="icon" type="image/png" href="imagenes/money.png" >
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
	</head>
	
	<body class="flex login rem5">
        <div class=" rem5">
            <img src="imagenes/banco.png" alt="">
            <form action="<?php $_SERVER['PHP_SELF']; ?>"method="POST" > 
            <div><label>Usuario:</label>
            <input id="user" name="user" type="text" ></div>
		
            <div><label>Password:</label>
            <input id="pass" name="pass" type="password"></div>
		
			<div><input name="login" type="submit" value="login"></div> 
        </form> 
        <?php
           
        ?>
        </div>
        
	
	</body>
</html>
