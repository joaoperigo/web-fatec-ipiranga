<?php include 'parts/header.php' ?>

    <section id="vitrine">
        <div class="container">
            <div class="row pt-5 pb-5">
                <?php for ($i = 1; $i <= 10; $i++) { ?>
                    <div class="col-md-4 mb-5">
                        <div class="card mb-4">
                        <a href="produto-detalhe.php">
                            <img src="http://placekitten.com/750/510" alt="Produto" class="bd-placeholder-img card-img-top" width="100%" height="auto">
                        </a>
                        <div class="card-body">
                            <h2 class="card-title">Meu produto</h2>
                            <p class="card-text pt-2 pb-4 pr-2 pl-2">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
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