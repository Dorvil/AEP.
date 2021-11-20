<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
.div {
	
	
  padding: 10px;
  width: 200px;
  height: 200px;
  text-align: justify;
}
</style>
</head>
<body>
<div >
     <form action="login.php" method="post">
     	<h2>LOGIN</h2>
     	<?php if (isset($_GET['erro'])) { ?>
     		<p class="erro"><?php echo $_GET['erro']; ?></p>
     	<?php } ?>
     	<label>Seu Email</label>
     	<input type="email" name="uname" placeholder="ex: contato@email.com"><br>

     	<label>Sua senha</label>
     	<input type="password" name="password" placeholder="ex:123abc"><br>

     	<button type="submit">Login</button>
          <a href="signup.php" class="ca">Criar uma conta</a>
     </form>
	 </div>
</body>
</html>