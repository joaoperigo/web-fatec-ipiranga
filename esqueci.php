<?php include 'parts/header.php' ?>

<section id="esqueceu">
        <div class="container">
            <div class="row pt-5 pb-5">
                <div class="col-md-6 offset-md-3 d-flex justify-content-center align-items-center">
                  <div class="wrapper border p-5 bg-light">
                    <h1 class="text-center mb-5">Informe seu email</h1>
                    <form class="search-form clearfix w-100 d-flex justify-content-center mx-auto" action="esqueci.php" method="post">
                        <input type="email" id="emailEsqueci" 
                        name="email" class="form-control search" placeholder="seu@email.com">
                        <button name="send" type="submit" class="btn btn-sm btn-outline-secondary pl-3 pr-3 ml-2" onclick="seVazio();">OK</button>
                    </form>
                    <?php
                        if(isset($_POST["send"])){
                        //search for email in DB
                        $email 	= 	$_POST["email"];
                        $con	=	new mysqli("localhost","root","","p2_shop");
                        $sql	= "select email, password from client where email='$email'";
                        $result = mysqli_query($con, $sql);
                        if($reg = mysqli_fetch_array($result)){
                          $to = "to:" . $email;
                          $subject = 'Cara cade meu email??';
                          $message = md5($reg['password']);
                          $header = "MIME-Version: 1.0\r\n";
                          $header .= "from: Lojinha<fatecpwAds2016@outlook.com>";

                          mail($to, $subject, $message, $header);
                          // header location nao funcionava por causa de algo na linha 94 do header.php;
                          echo '<p class="text-center pt-3 text-success">Enviamos o email!.</p>';
                          } 
                          else { ?>
                              <p class="text-center pt-3 text-danger">Não encontramos este email.</p>
                              <?php } 
                          } ?>
 
                  </div>
                </div>
            </div>
        </div>   
</section>

<?php include 'parts/footer.php' ?>