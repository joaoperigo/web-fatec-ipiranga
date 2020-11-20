<?php include 'parts/header.php' ?>

<section id="cadastro">
      <div class="container">
        <div class="row">
          <div class="col-md-6 p-md-5 mb-5 mb-sm-0">
            <h1 class="mb-5 text-center">Já tenho cadastro</h1>
            <form class="clearfix" action="validate.php" method="post">
              <div class="form-group">
                <label for="emailLogin">Email</label>
                <input type="email" class="form-control" id="emailLogin" aria-describedby="emailHelp" placeholder="seu@mail.com" name="email" required>
              </div>
              <div class="form-group">
                <label for="passwordLogin">Senha</label>
                <input type="password" class="form-control" id="passwordLogin" placeholder="Senha" name="password" required>
              </div>
              <button type="submit" class="btn btn-sm btn-outline-secondary float-right" name="login">Login</button>
            </form>
            <hr>
            <a href="esqueci.php" class="text-lowercase">Esqueceu sua senha?</a>
          </div>
          <div class="col-md-6 d-flex align-items-center border-left p-md-5">
            <div class="wrapper text-center w-100">
              <h2>Ainda não tenho cadastro.</h2>
              <a href="cadastro.php" class="mt-4 btn btn-sm btn-outline-secondary">Criar conta</a>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php include 'parts/footer.php' ?>