<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <title>Sentencias Basicas - Login</title>
</head>
<body>
    <header>
        <?php include("./header.php") ?>
    </header>
    <main>
        <h2>Login</h2>
        <form action="respuesta.php" method="post">
            <label for="mail">Email</label>
            <input type="text" id="mail" name="mail">
            <br>
            <label for="pass">Password</label>
            <input type="password" id="pass" name="pass">
            <br>
            <input type="submit" value="Login">
        </form>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>
</html>