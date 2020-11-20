<?php include 'parts/header.php' ?>
<?php 
listing();
function listing() {
	$con = new mysqli("localhost","root","","p2_shop");
	$sql = "select * from product order by title";
	$resultado = mysqli_query($con, $sql);
?>
	<?php	//echo '<tr><td>'. $reg['code'] . '</td><td>'. $reg['title'] . '</td><td>'. $reg['price'] .'</td><td>'. $reg['quantity'] .'</td><td>' . $reg['category'] . '</td><td><a href="index.php?code=' . $reg['code'] . '">Edit</a></td></tr>'; ?>

    <section id="vitrine">
        <div class="container">
            <div class="row pt-5 pb-5">
                <?php while($reg = mysqli_fetch_array($resultado)) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="card mb-4">
                        <a href="produto-detalhe.php">
                            <img src="./img/product/<?php echo $reg['imgSrc'] ?>" alt="<?php echo $reg['altText'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title"><?php echo $reg['title'] ?> </h2>
                            <p class="card-text pt-2 pb-4 pr-2 pl-2"><?php echo $reg['description'] ?></p>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="preco"><?php echo $reg['price'] ?>R$</span>
                                <div class="btn-group">
                                    <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                                    <a href="produto-detalhe.php" class="btn btn-sm btn-outline-secondary comprar">Comprar</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
            <?php    } //close loop
                $con->close();
            }	
            ?>
            </div>
        </div>
    </section>

<?php include 'parts/footer.php' ?>