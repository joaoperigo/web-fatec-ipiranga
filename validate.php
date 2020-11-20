<?php fazerLogin(); ?>

<?php
function fazerLogin(){
	if(isset($_POST["login"])){
		$email 	= 	$_POST["email"];
		$password	=	$_POST["password"];
		$con	=	new mysqli("localhost","root","","p2_shop");
		$sql	= "select code,name,email from client where email='$email' and password=md5('$password')";
		$resultado = mysqli_query($con, $sql);
		if($reg = mysqli_fetch_array($resultado)){
			session_start();
			$_SESSION["code"] = $reg["code"];
			$_SESSION["name"] 	= $reg["name"];
			$_SESSION["email"] 	= $reg["email"];
			header("location:index.php");
		} else {
			echo "<h5>Usuario ou password invalidos</h5>";	
		}
		$con->close();
	}
}
?>