<?php 
   session_start();
   if (!isset($_SESSION['username']) && !isset($_SESSION['id'])) {   ?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Finca Don Pedro</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="icon" href="img/logo.png">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<div class="contenedor">
    <form action="php/check-login.php" method="POST">
        <h1 class="title">Iniciar Sesion</h1>
			  <label class="username" id="username">
            <i class="fa-solid fa-user"></i>
            <input placeholder="Usuario" type="text" id="username" name="username" maxlength="10" required>
        </label>
        <label class="password" id="password">
            <i class="fa-solid fa-lock"></i>
            <input placeholder="Contraseña" type="password" id="password" name="password" required>
        </label>
        <label for="role">
            <select class="selector" name="role" required>
				<option selected required>Nivel</option>
                <option value="user">Usuario</option>
                <option value="admin">Administrador</option>
            </select>
        </label>
        <button class="button">Entrar</button>
        <br>
        <img class="logologin" src="img/logo.jpg" alt="">
    </form>
    </div>
    
    <script src="main.js"></script>
</body>
</html>
</body>
</html>
<?php }else{
	header("Location: home.php");
} ?>