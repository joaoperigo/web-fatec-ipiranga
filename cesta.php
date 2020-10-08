<?php include 'parts/header.php' ?>

<section id="cesta">
      <div class="container">
        <div class="row">
            <div class="col-12">
            <table class="table table-bordered">
              <thead>
                <tr>
                  <th scope="col">Item</th>
                  <th scope="col">Quantidade</th>
                  <th scope="col">Valor</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Produto 1</th>
                  <td>4x</td>
                  <td>50,00R$</td>
                </tr>
                <tr>
                  <th scope="row">Produto 2</th>
                  <td>1x</td>
                  <td>10,00R$</td>
                </tr>
                <tr>
                  <th scope="row">Produto 3</th>
                  <td>2x</td>
                  <td>99,99R$</td>
                </tr>
              </tbody>
            </table>
            <h2 class="border-bottom p-0 pt-2 pb-2 clearfix">
              <span class="float-left">Total</span>
              <span class="float-right">159,99R$</span>
            </h2>
            <a href="cesta.php" class="btn btn-sm btn-outline-secondary ml-2">LIMPAR CESTA</a>
            <a href="cesta.php" class="btn btn-sm btn-secondary ml-2">FINALIZAR</a>
            </div>
        </div>
      </div>
    </section>

<?php include 'parts/footer.php' ?>