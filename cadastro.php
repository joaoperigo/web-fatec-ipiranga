<?php include 'parts/header.php' ?>


    <section id="cadastro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <form class="clearfix" action="index.php">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome" size="60" maxlength="55" required>
              </div>
              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="seu@email.com" size="60" maxlength="55" required>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Senha" size="60" maxlength="55" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="passwordRepete">Repetir Senha</label>
                  <input type="password" class="form-control" id="passwordRepete" placeholder="Senha" size="60" maxlength="55" required>
                </div>
              </div>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="00.000.000.00" size="60" maxlength="55" required>
              </div>
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" placeholder="xx xx xxxxx xxxx" size="60" maxlength="55" required>
              </div>
              <button class="btn btn-sm btn-outline-secondary float-right" onclick="validar();">Cadastrar</button>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include 'parts/footer.php' ?>