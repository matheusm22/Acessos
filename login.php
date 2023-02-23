<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="download.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
<style>
    #entrar{
        width: 29%;
        padding-left: 20px;
    }
</style>
    <title>Login</title>
</head>
<body>
   
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://media.gazetadopovo.com.br/2022/09/02161842/econet-660x372.jpg"
          class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="funclogin.php" method="POST">
        <h3>Bem-vindo!!!</h3>

          <!-- Email input -->
          <div class="form-outline mb-4">
            <input type="text" id="form1Example13" class="form-control form-control-lg" name="user"/>
            <label class="form-label" for="form1Example13" >Usuário</label>
          </div>

          <!-- Password input -->
          <div class="form-outline mb-4">
            <input type="password" id="form1Example23"  name="senha"  class="form-control form-control-lg" />
            <label class="form-label" for="form1Example23">Senha</label>
           </div>
    
            <a href="cadastro.php"  class="btn btn-outline-info" role="button" aria-pressed="true">Registrar-se?</a>
          </div>

         

          <!-- Submit button -->
          <button type="submit" class="btn btn-outline-primary" name="submit" id="entrar">Entrar</button>
        </form>
      </div>
    </div>
  </div>
</section>

</body>
</html>