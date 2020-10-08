<?php include 'parts/header.php' ?>

<section id="esqueceu">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                  <div class="wrapper border p-5 bg-light">
                    <h1 class="text-center mb-5">Informe seu email</h1>
                    <form class="search-form clearfix w-100 d-flex justify-content-center mx-auto" action="index.html">
                        <input type="email" class="form-control search" placeholder="seu@email.com">
                        <button type="submit" class="btn btn-sm btn-outline-secondary pl-3 pr-3 ml-2" onclick="esqueci();">OK</button>
                    </form>
                  </div>
                </div>
            </div>
        </div>   
</section>

<?php include 'parts/footer.php' ?>