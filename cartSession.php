<?php 
//session_start();
session_start();
if(isset($_SESSION["name"])==false) { 
    header("Location:login.php");
 }
//  else {
//     header("Location:cesta.php");
//  }

//insert value in vars 
$productCode = $_GET['code'];
$quantity = $_GET['quantity'];
$sessionId = $_SESSION["sessionId"];


// insert new product
$con	= new mysqli("localhost","root","","p2_shop");	
$sql	= "insert into cartProduct(sessionId, productCode, productQuantity) values('$sessionId', '$productCode', '$quantity')";
$err = mysqli_query($con, $sql);
$con->close();

header("Location:cesta.php");
?>