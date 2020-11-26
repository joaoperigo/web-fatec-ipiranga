
<?php 
// if(session_status() === PHP_SESSION_ACTIVE) {
//     header("Location: login.php");
// }
// else {
//     $clientCode = $_SESSION['code'];
//     $unitPrice = $_SESSION['price'];
// }
session_start();
$productCode = $_GET['code'];
$quantity = $_GET['quantity'];
$clientCode = $_SESSION['code'];
$unitPrice = 33;
$totalPrice = $quantity*$unitPrice;

$con = new mysqli("localhost","root","","p2_shop");
$sql	= "insert into cart(productCode, clientCode, quantity, unitPrice, totalPrice) values('$productCode', '$clientCode', '$quantity', '$unitPrice', '$totalPrice')";
$result = mysqli_query($con, $sql);
$con->close();

$con	=	new mysqli("localhost","root","","p2_shop");
$sql	= "SELECT LAST_INSERT_ID()";
$result = mysqli_query($con, $sql);
if($reg = mysqli_fetch_array($result)){
    session_start();
    $_SESSION["sessionId"] = $reg["sessionId"];
    $_SESSION["clientCode"] 	= $reg["clientCode"];
    $_SESSION["productCode"] 	= $reg["productCode"];
    $_SESSION["unitPrice"] 	= $reg["unitPrice"];
    $_SESSION["totalPrice"] 	= $reg["totalPrice"];
} 
$con->close();

header("Location: cesta.php?code=" . $reg["sessionId"]);
?>