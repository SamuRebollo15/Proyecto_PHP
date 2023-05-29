<!DOCTYPE html>
<html>

<head>
    <title>Insertar Pokemon</title>
    <link rel="stylesheet" href="css/borrar.css">
</head>

<body >
<a href="Form_Borrar.php"><button>Atras</button></a>
    <br>
    <img src="images/logo_pokemon.png" alt="Loguito" ></img>
    <br>
    <div class="resultado">
    <?php

    include 'databaseOpen.php';

    
    $pokedex = htmlentities($_GET['pkx']);
    
    $sql= "DELETE FROM estadisticas_base WHERE numero_pokedex ='". $pokedex . "'"; 

    
    $resultado=mysqli_query($mysqli,$sql);

    $sql= "DELETE FROM pokemon WHERE numero_pokedex ='". $pokedex . "'"; 

    
    $resultado2=mysqli_query($mysqli,$sql);

    if($resultado2){
        echo "<h2>Eliminación correcta</h2>";
        echo "<h2>Adios"." ".":("."</h2>";
	} else {
		echo "<h2>Eliminación incorrecta</h2>";
	}
    
    include 'databaseClose.php';


    ?>

    </div>
   


</body>

</html>