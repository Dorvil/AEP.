<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>Nome do sistema</title>
</head>
<header class="container" id="cabecalho">
    <ul class="nav justify-content-center">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/Pagina inicial/index.html">Pagina inicial</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Pagina quem somos/quemsomos.html">Quem somos!</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Pagina estudo sobre o tema/sobre.html">Sobre</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="/Pagina de cadastro/cadastro.html">Doações</a>
        </li>
    </ul>
</header>

<body class="container-sm">
    <form action="signup-check.php" method="post">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>

         <?php if (isset($_GET['success'])) { ?>
              <p class="success"><?php echo $_GET['success']; ?></p>
         <?php } ?>
    <div id="cadastro">
        <form method="post" action="">
            <h1>Cadastrar</h1>
            <br>
            <p>
                <label for="nome_cadastro">Seu nome</label>
                <?php if (isset($_GET['name'])) { ?>
               <input id="nome_cadastro" type="text" 
                      name="name" 
                      placeholder="Name"
                      value="<?php echo $_GET['name']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="name" 
                      placeholder="ex: seu nome"><br>
          <?php }?>
            </p>

            <p>
                
                <label>Email</label>
          <?php if (isset($_GET['uname'])) { ?>
               <input type="text" id="email_cadastro"
                      name="uname" 
                      placeholder="User Name"
                      value="<?php echo $_GET['uname']; ?>"><br>
          <?php }else{ ?>
               <input type="text" 
                      name="uname" 
                      placeholder="ex: contato@email.com"><br>
          <?php }?>
            </p>

            <p>

                <label>Sua senha</label>
     	<input type="password" 
                 name="password" id="senha_cadastro" 
                 placeholder="ex:123abc"><br>
            </p>

            <P>
            <label>Repita senha</label>
          <input type="password" 
                 name="re_password" id="senha_cadastro" 
                 placeholder="ex:123abc"><br>
            </P>

            <p id="botaoCadastrar">
                <input type="submit" value="Cadastrar" class="btn btn-success">
            </p>

            <p class="link">
            <button type="submit">Entrar</button>
          <a href="index.php" class="ca">já tem conta?</a>
     </form>
            </p>

        </form>
    </div>
    </div>
    </div>
    <footer>
        <p class="desenvolvido text-center">
            Desenvolvido por Pedro Antonio
        </p>
    </footer>



</body>

</html>