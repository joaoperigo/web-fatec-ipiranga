<?php include 'parts/header.php' ?>

<?php 

$totalPrice=0;
if($_SESSION["sessionId"]) read($_SESSION["sessionId"]);
function read($code) {
  $sessionId=$_SESSION["sessionId"];
	$con = new mysqli("localhost","root","","p2_shop");
  $sql	= "SELECT p.title, p.imgSrc, p.altText, p.price, cp.productquantity From product p, cartProduct cp where cp.productcode=p.code and cp.sessionId='$sessionId'";
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
                <?php while($reg = mysqli_fetch_array($result)) { 
                  global $totalPrice;
                  $totalPrice = $totalPrice + ($reg['productquantity'] * $reg['price']);
                  ?>
                  <tr>
                    <td><a href="">x</a></td>
                    <td class="th-img-cesta"><img src="./img/product/<?php echo $reg['imgSrc'] ?>" alt="<?php echo $reg['altText'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto"></td>
                    <td scope="row" ><?php echo $reg['title'] ?></td>
                    <td><?php echo $reg['productquantity'] ?></td>
                    <td><?php echo $reg['price'] ?>R$</td>
                  </tr>
                <?php } ?>
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
                  <p class="card-text"><?php echo $totalPrice ?>R$</p>
                  <a href="cesta.php" class="btn btn-sm btn-secondary ml-2">FINALIZAR</a>
                </div>
              </div>
            </div>
        </div>
      </div>
    </section>
    <?php    
                      
                      $con->close();
                    }	
                  ?>
<?php 
include 'parts/footer.php' ?>