<?php include 'parts/header.php' ?>
<?php 
if($_GET['code']) read($_GET['code']);
function read($code) {
	$con = new mysqli("localhost","root","","p2_shop");
	$sql	= "select * from product where code=$code";
    $result = mysqli_query($con, $sql);
    while($reg = mysqli_fetch_array($result)){
?>
    <section id="produto">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-5">
                    <img src="./img/product/<?php echo $reg['imgSrc'] ?>" alt="<?php echo $reg['altText'] ?>" class="img-fluid w-100 h-auto">
                </div>
                <div class="col-md-6 offset-md-1 d-flex justify-content-center align-items-center">
                    <div class="wrapper">
                        <h1 class="mt-3 mt-sm-0"> <?php echo $reg['title'] ?> </h1>
                        <p class="p-2 pt-4"><?php echo $reg['description'] ?></p>
                        <hr>
                        <label for="quantity">Quantidade:</label>
                        <input type="number" value="1" class="border-0" id="productQuantity" name="quantity"
                            min="1" max="<?php echo $reg['quantity']; ?>">
                            <span id="totalProdutoDetalhe" class="preco small d-block ml-2"><span id="priceProduct"><?php echo $reg['price'] ?></span>R$</span>
                        <div class="text-right">
                            <a id="comprarButton" href="cesta.php?code=<?php echo $reg['code']; ?>" class="btn btn-sm btn-secondary comprar">COMPRAR</a>
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
<?php include 'parts/footer.php' ?>