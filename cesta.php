<?php include 'parts/header.php' ?>

<?php 
//session_start();

//create vars
$productCode = $_GET['code'];
$title;
$imgSrc;
$altText;
$unitPrice=33.00;

//select values from product table quantity and price to add in cart session
// $con = new mysqli("localhost","root","","p2_shop");
// $sql	= "select * from product where code=$productCode";
// $result = mysqli_query($con, $sql);
// while($reg = mysqli_fetch_array($result)){
//   $title = $reg['title'];
//   $imgSrc = $reg['imgSrc'];
//   $altText = $reg['altText'];
//   $unitPrice = $reg['price'];
// } //close loop
// $con->close();

//insert value in vars 
$productCode = $_GET['code'];
$quantity = $_GET['quantity'];
$clientCode = $_SESSION['code'];
$totalPrice = $quantity*$unitPrice;

// insert the values in the cart
// $con = new mysqli("localhost","root","","p2_shop");
// $sql	= "insert into cart(productCode, clientCode, quantity, unitPrice, totalPrice) values('$productCode', '$clientCode', '$quantity', '$unitPrice', '$totalPrice')";
// $result = mysqli_query($con, $sql);
// $con->close();

//
// $con	=	new mysqli("localhost","root","","p2_shop");
// $sql	= "SELECT sessionId from cart where sessionId=LAST_INSERT_ID()";
// $result = mysqli_query($con, $sql);
// if($reg = mysqli_fetch_array($result)){
//     //session_start();
//     $_SESSION["sessionId"] = $reg["sessionId"];
//     $_SESSION["clientCode"] 	= $reg["clientCode"];
//     $_SESSION["productCode"] 	= $reg["productCode"];
//     $_SESSION["unitPrice"] 	= $reg["unitPrice"];
//     $_SESSION["totalPrice"] 	= $reg["totalPrice"];
// } 
// $con->close();


if($_GET['code']) read($_GET['code']);
function read($code) {
	$con = new mysqli("localhost","root","","p2_shop");
  $sql	= "select * from cart where sessionId=$code";
  $result = mysqli_query($con, $sql);
?>
<section id="cesta">
      <div class="container">
        <div class="row">
            <div class="col-12 col-md-9">
              <table class="table table-bordered text-center table-cesta">
                <thead>
                  <tr>
                    <th scope="col">deleta</th>
                    <th scope="col">foto</th>
                    <th scope="col">nome</th>
                    <th scope="col">quantidade</th>
                    <th scope="col">Valor</th>
                  </tr>
                </thead>
                <tbody>
                <!-- loop -->
                <?php while($reg = mysqli_fetch_array($result)) { ?>
                  <tr>
                    <td><a href="">x</a></td>
                    <td class="th-img-cesta"><img src="./img/product/<?php echo $imgSrc ?>" alt="<?php echo $altText ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto"></td>
                    <td scope="row" ><?php echo $title ?></td>
                    <td><?php echo $reg['quantity'] ?></td>
                    <td><?php echo $reg['unitPrice'] ?>R$</td>
                  </tr>
                  <!-- loop -->
                  <tfoot>
                    <tr>
                     
                      <td ><a href="cesta.php" class="btn btn-sm text-lowercase">limpar cesta</a></td>
                    </tr>
                  </tfoot>

                </tbody>
              </table>
            </div>
            <div class="col-12 col-md-3">
              <div class="card">
                <div class="card-body">
                  <h2>TOTAL</h2>
                  <p class="card-text"><?php echo $reg['totalPrice'] ?>R$</p>
                  <a href="cesta.php" class="btn btn-sm btn-secondary ml-2">FINALIZAR</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <?php    
                      } //close loop
                      $con->close();
                    }	
                  ?>
<?php 
include 'parts/footer.php' ?>