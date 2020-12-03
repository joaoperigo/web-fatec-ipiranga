<?php 
//delete one
// function delete($code)
if(isset($_POST['deleteOne'])) {
    $rowId = $_POST['rowId'];
    $con = new mysqli("localhost","root","","p2_shop");
    $sql	= "DELETE from cartProduct where productListId='$rowId'";
    mysqli_query($con, $sql);
    $con->close();
    header("Location:cesta.php");
  }
//delete all
if(isset($_POST['deleteAll'])) {
    session_start();
    $rowId = $_SESSION["sessionId"];
    $con = new mysqli("localhost","root","","p2_shop");
    $sql	= "DELETE from cartProduct where sessionId='$rowId'";
    mysqli_query($con, $sql);
    $con->close();
    header("Location:cesta.php");
  }
?>