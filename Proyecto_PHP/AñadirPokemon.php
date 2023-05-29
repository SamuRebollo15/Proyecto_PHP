<!DOCTYPE html>
<html>

<head>
    <title>Insertar Pokemon</title>
    <link rel="stylesheet" href="css/añadir.css">
</head>

<body >
<a href="Form_añadir.php"><button>Atras</button></a>
    <br>
    <img src="images/logo_pokemon.png" alt="Loguito" ></img>
    <br>
    <div class="resultado">
    <?php

    include 'databaseOpen.php';

    $numero_pokedex = htmlentities($_GET['num_pokedex']);
    $nombre = htmlentities($_GET['pname']);
    $altura = htmlentities($_GET['Altura']);
    $peso = htmlentities($_GET['Peso']);

    $sql = 'INSERT INTO pokemon VALUES(' . $numero_pokedex . ', "' . $nombre . '", ' . $altura . ', ' . $peso . ')';

    $resultado = mysqli_query($mysqli, $sql);
    if ($resultado) {
        echo "<h2>Inserción correcta</h2>";
    } else {
        echo "<h2>Inserción incorrecta</h2>";
    }

    $sql = "SELECT * FROM pokemon WHERE numero_pokedex=" . $numero_pokedex;
    $resultado_annadir=mysqli_query($mysqli,$sql);
    while ($fila = mysqli_fetch_assoc($resultado_annadir)) {
        echo " Numero Pokedex:". $fila["numero_pokedex"]."<br>"."Nombre:". $fila["nombre"]."<br>"."Peso:". $fila["peso"]."<br>"."Altura:". $fila["altura"]."<br>";
      }

      
    
    include "databaseClose.php";
    ?>

    </div>
   


</body>

</html>