<?php include 'parts/header.php' ?>

<section id="busca">
        <div class="container">
        <h1>Pesquisa por: <strong>Seu produto</strong></h1>
            <div class="row pt-0 pt-sm-5 pb-5">
            <?php for ($i = 1; $i <= 4; $i++) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="card mb-4">
                        <a href="produto-detalhe.php">
                            <img src="http://placekitten.com/600/510" alt="Produto" class="bd-placeholder-img card-img-top" width="100%" height="auto">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">Meu produto</h2>
                            <hr>
                            <div class="d-flex justify-content-between align-items-center">
                            <span class="preco">50,00R$</span>
                            <div class="btn-group">
                                <!-- <button type="button" class="btn btn-sm btn-outline-secondary">View</button> -->
                                <a href="produto-detalhe.php" class="btn btn-sm btn-outline-secondary comprar">Comprar</a>
                            </div>
                            
                            </div>
                        </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>

<?php include 'parts/footer.php' ?>