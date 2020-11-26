<?php fazerLogin(); ?>

<?php
function fazerLogin(){
	if(isset($_POST["login"])){
		$email 	= 	$_POST["email"];
		$password	=	$_POST["password"];
		$con	=	new mysqli("localhost","root","","p2_shop");
		$sql	= "select code,name,email,cpf,telephone from client where email='$email' and password=md5('$password')";
		$result = mysqli_query($con, $sql);
		if($reg = mysqli_fetch_array($result)){
			session_start();
			$_SESSION["code"] = $reg["code"];
			$_SESSION["name"] 	= $reg["name"];
			$_SESSION["email"] 	= $reg["email"];
			$_SESSION["cpf"] 	= $reg["cpf"];
			$_SESSION["telephone"] 	= $reg["telephone"];
			header("location:index.php");
		} else {
			echo "<h5>Usuario ou password invalidos</h5>";	
		}
		$con->close();
	}
}
?>