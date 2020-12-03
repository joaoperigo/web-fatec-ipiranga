<?php include 'parts/header.php' ?>
<?php 
//if isset false with no session use this values bellow
$code=0; //bool for decide if update or create
$name='';
$email='';
$cpf='';
$telephone='';
$editYourData = '';
$buttonText = 'Cadastrar';
//if for user
if(isset($_POST['editUser'])) {
    $code = $_SESSION['code'];
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    $cpf = $_SESSION['cpf'];
    $telephone = $_SESSION['telephone'];
    $editYourData = '<h2>Olá ' . $name . '.</h2> ';
    $editYourData .= '<p>Insira seus dados novos</p>';
    $buttonText = 'Mudar';
  }
?>

    <section id="cadastro">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <?php echo $editYourData; ?> 
            <form class="clearfix" action="cadastro.php" method="post">
              <div class="form-group">
                <label for="nome">Nome</label>
                <input type="text" class="form-control" id="nome" placeholder="Seu nome" size="60" maxlength="55" value="<?php echo $name ?>" name="name" required>
              </div>
              <div class="form-group">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="email" placeholder="seu@email.com" size="60" maxlength="55" value="<?php echo $email ?>" name="email" required>
              </div>
              <?php if($code==0) { ?>
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Senha" size="60" maxlength="55" name="password" required>
                </div>
                <div class="form-group col-md-6">
                  <label for="passwordRepete">Repetir Senha</label>
                  <input type="password" class="form-control" id="passwordRepete" placeholder="Senha" size="60" maxlength="55"  required>
                </div>
              </div>
              <?php } ?>
              <div class="form-group">
                <label for="cpf">CPF</label>
                <input type="text" class="form-control" id="cpf" placeholder="00.000.000.00" size="60" maxlength="55" value="<?php echo $cpf ?>" name="cpf" required>
              </div>
              <div class="form-group">
                <label for="telefone">Telefone</label>
                <input type="text" class="form-control" id="telefone" placeholder="xx xx xxxxx xxxx" size="60" maxlength="55" value="<?php echo $telephone ?>" name="telephone" required>
              </div>
              <button class="btn btn-sm btn-outline-secondary float-right" onclick="validar();" name="create"><?php echo $buttonText ?></button>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include 'parts/footer.php' ?>


<?php 

if(isset($_POST["create"]) && $code==0) create(); 
if(isset($_POST["create"]) && $code!=0) update();

function create(){ 
  $name 	= $_POST["name"];
  $email	= $_POST["email"];
  $password	= $_POST["password"];
  $cpf	= $_POST["cpf"];
  $telephone	= $_POST["telephone"];

  //check if email exists - select email from product where email='$email'    if(mysqli_fetch_array($result)!=0)
  $con	= new mysqli("localhost","root","","p2_shop");	
  $sql	= "select email from client where email='$email'";
  $err = mysqli_query($con, $sql);
  if(mysqli_num_rows($err)!=0) {
    echo "<script>alert('usar outro email')</script>";
    $con->close();
    exit;
  }
  else $con->close();

  //Know can insert
  $con	= new mysqli("localhost","root","","p2_shop");	
  $sql	= "insert into client(name, email, password, cpf, telephone) values('$name', '$email', md5('$password'), '$cpf', '$telephone')";
  $err = mysqli_query($con, $sql);
  $con->close();
  echo "<script>alert('Bem vindo " . $name . "!')</script>";
}

function update(){

  $code 	= $_POST["code"];
  $name 	= $_POST["name"];
  $email	= $_POST["email"];
  $cpf	= $_POST["cpf"];
  $telephone	= $_POST["telephone"];

  $con	= new mysqli("localhost","root","","p2_shop");	
  $sql	= "update client set name='$name', email='$email',  cpf='$cpf', telephone='$telephone' where code=$code";
  $err = mysqli_query($con, $sql);
  //echo "<script>alert('Registro inserido')</script>";
  $con->close();
}

?>