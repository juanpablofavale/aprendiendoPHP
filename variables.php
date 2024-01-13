<?php
    $numero = 1;
    print("<p>numero = $numero</p>"); #Reemplaza la variable por el valor de la misma
    print('<p>numero = $numero</p>'); #No Reemplaza la variable por el valor de la misma

    // Concatenar textos y variables
    $nombre = "Juan Pablo";
    $apellido = "Favale";

    $saludoNombre = '<br><p class="saludo">Hola '.$nombre.'!</p>';
    echo $saludoNombre;

    $saludoNombreYApellido = '<br><p class="saludo">Hola '.$nombre.' '.$apellido.'!</p>';
    echo $saludoNombreYApellido;

    $lineas = <<< EOT
        <br>
        <h2>Subtitulo de prueba con EOT</h2>
        <p>Parrafo de prueba con EOT</p>
        <br>
    EOT;

    echo $lineas;

    //Utilizacion de constantes
    define("PI", 3.1415);
    echo PI;
    echo "<p>El valor de la constante PI es: ".PI."</p><br>";
    /*
        Se pueden usar constantes en archivos a parte tanto para resguardar datos como para manejar
        y renderizar solo la informacion necesaria. Un buen ejemplo de esto seria el manejo del lenguaje
        de un sitio al que con dos archivos con las constantes con los textos en dichos lenguajes
        y con una sentencia if podriamos incluir el archivo del lenguaje correspondiente.
    */

    //Matrices
    echo "<h3>Matrices</h3>";

    //Asignacion Mixta
    $numeros[1] = 10;
    $numeros[] = 20;

    //Asignacion Explicita
    $numeros[3] = 30;
    $numeros[4] = 40;
    
    //Asignacion Implicita
    $numeros[] = 50;
    $numeros[] = 60;

    echo "<p>1: $numeros[1], 2: $numeros[2], 3: $numeros[3], 4: $numeros[4], 5: $numeros[5], 6: $numeros[6]</p><br>";

    //Creando matriz con metodo array
    echo "<h3>Matrices con metodo array</h3>";

    $letras = array("a","s","d","f");
    
    echo "<p>$letras[0], $letras[1], $letras[2], $letras[3]</p><br>";

    //Creando matriz inicializando el primer elemento con metodo array
    $letras2 = array(2 => "j","k","l","m");

    echo "<p>$letras2[2], $letras2[3], $letras2[4], $letras2[5]</p><br>";

    //Creando matriz con diferentes tipos de datos
    echo "<h3>Matriz con diferentes tipos de datos</h3>";

    $persona[0] = "juan";
    $persona[1] = "favale";
    $persona[2] = "32978623";

    echo "<p>$persona[0] $persona[1] tiene dni con numero $persona[2]</p><br>";
    
    //Creando matriz con indices alfanumericos
    echo "<h3>Matriz con indices alfanumericos</h3>";

    $persona2["nombre"] = "juan";
    $persona2["apellido"] = "favale";
    $persona2["dni"] = "32978623";
    
    echo "<p>".$persona2["nombre"]." ".$persona2["apellido"]." tiene dni con numero ".$persona2["dni"]."</p><br>";
?>