<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./estilos.css">
    <?php
        if (!isset($mail)){
            $mail = "";
        }
        if ($mail == ""){
            echo "<title>Sentencias Basicas - No Registrado</title>";
        }else{
            echo "<title>Sentencias Basicas - ".$mail."</title>";
        }
    ?>
</head>
<body>
    <header>
        <?php include("./header.php") ?>
    </header>
    <main>
        <h2>Home</h2>
        <?php echo "<br><p>Aqui va el contenido principal con echo</p>"; ?>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum similique ducimus, voluptate doloribus aspernatur eos nesciunt quia facilis! Incidunt debitis adipisci nihil recusandae voluptatibus dolores eaque at iste assumenda aliquam.</p>
        <?php print("<br><p>Aqui termina el contenido principal con print</p><br><br>"); ?>

        <?php include("./variables.php") ?>

        <a href="index.php?lang=es">Español</a><br>
        <a href="index.php?lang=en">Ingles</a>
        <!--Agregar Condicional para decidir idioma del texto-->
        <!--Asi se recibe una variable por la barra de direcciones: $_GET["nombreDeLaVariable"]-->
        <?php
            if (isset($_GET["lang"])){
                $language = $_GET["lang"];
            }else{
                $language = "en";
            }
            if ($language == "es"){
                include("./contenidoCastellano.php");
            }else{
                include("./contenidoIngles.php"); 
            };
        ?>
    </main>
    <footer>
        <?php include("./footer.php") ?>
    </footer>
</body>
</html>