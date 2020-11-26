<?php
	if(isset($_POST["more"])){
		$con = new mysqli("localhost","root","","p2_shop");
		$sql = "select * from product where featured=0 order by title";
		$res = mysqli_query($con,$sql);
        while($reg = mysqli_fetch_array($res)){ ?>
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
                                    <a href="produto-detalhe.php?code=<?php echo $reg['code'];  ?>" class="btn btn-sm btn-secondary comprar">Comprar</a>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
		<?php }
		$con->close();
	}
?>