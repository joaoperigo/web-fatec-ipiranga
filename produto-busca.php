<?php include 'parts/header.php' ?>
<?php 
    if(isset($_POST["searchBt"])){
        $title = $_POST["title"];
        read($title);
    }	
    function read($search) {
        $con = new mysqli("localhost","root","","p2_shop");
        $sql	=  "select * from product where title like '%$search%' order by title";
        $resultado = mysqli_query($con, $sql);

?>
<section id="busca">
        <div class="container">
        <h1>Pesquisa por: <strong>Seu produto</strong></h1>
            <div class="row pt-0 pt-sm-5 pb-5">
            <?php while($reg = mysqli_fetch_array($resultado)){ ?>
                    <div class="col-md-4 mb-5">
                        <div class="card mb-4">
                        <a href="produto-detalhe.php">
                            <img src="./img/product/<?php echo $reg['imgSrc'] ?>" alt="<?php echo $reg['altText'] ?>" class="bd-placeholder-img card-img-top" width="100%" height="auto">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title"> <?php echo $reg['title'] ?> </h2>
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
                <?php } //close loop ?>
            </div>
        </div>
    </section>
<?php
        $con->close();
    }	
?>
<?php include 'parts/footer.php' ?>