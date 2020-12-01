<?php fazerLogin(); ?>

<?php
function fazerLogin(){
	if(isset($_POST["login"])){
		$email 	= 	$_POST["email"];
		$password	=	$_POST["password"];
		$con	=	new mysqli("localhost","root","","p2_shop");
		//Client
		$sql	= "select code,name,email,cpf,telephone from client where email='$email' and password=md5('$password')";
		$result = mysqli_query($con, $sql);
		if($reg = mysqli_fetch_array($result)){
			session_start();
			$_SESSION["clientCode"] = $reg["code"];
			$_SESSION["name"] 	= $reg["name"];
			$_SESSION["email"] 	= $reg["email"];
			$_SESSION["cpf"] 	= $reg["cpf"];
			$_SESSION["telephone"] 	= $reg["telephone"];
			header("location:index.php");
		} else {
			echo "<h5>Usuario ou password invalidos</h5>";	
		}
		$con->close();
		
		//sessionID Cart
		$sessionClientCode = $_SESSION['clientCode'];
		$con	=	new mysqli("localhost","root","","p2_shop");
		$sql	= "insert into cart(clientCode) values('$sessionClientCode')";
		mysqli_query($con, $sql); 
		$id = mysqli_insert_id($con); //record sessionId!!
		// if($reg2 = mysqli_fetch_array($err)) {};
		$con->close();

		//$sql2	= "select sessionId from cart where sessionId=LAST_INSERT_ID()"; //seleciona tabela recem criada
		//session
		$con	=	new mysqli("localhost","root","","p2_shop");
		$sql	= "select sessionId from cart where sessionId='$id'";
		$err = mysqli_query($con, $sql); 
		if($reg2 = mysqli_fetch_array($err)){
			session_start();
			$_SESSION["sessionId"] = $reg2["sessionId"];
		}
		$con->close();
	} 
}
?>