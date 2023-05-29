<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/resultadoCss.css">
</head>
<body>

<a href="Web.html"><button>Atras</button></a>
    <div class="resultado">
    <?php
    $nombre_pokemon=$_GET['pname'];
    include 'databaseOpen.php'; 
    $sql="SELECT eb.numero_pokedex ,eb.ps ,eb.ataque ,eb.defensa ,eb.especial ,eb.velocidad ,p.nombre,t.tipo
    from estadisticas_base eb ,pokemon p,pokemon_tipo pt,tipo t
    where eb.numero_pokedex =p.numero_pokedex 
    AND p.numero_pokedex=pt.numero_pokedex
    AND pt.id_tipo=t.id_tipo
    AND p.nombre = '". $nombre_pokemon . "'";
    $resultado=mysqli_query($mysqli,$sql);
    while ($fila = mysqli_fetch_assoc($resultado)) {
        echo " Nombre:". $fila["nombre"]."<br>"."Ps: " . $fila["ps"] ."<br>". " Ataque: " . $fila["ataque"] ."<br>"."Defensa:". $fila["defensa"] .
        "<br>"." Especial:". $fila["especial"] ."<br>"." Velocidad:". $fila["velocidad"] ."<br>"."Tipo :".$fila["tipo"]."<br>" ;
      }

    include'databaseClose.php';

    ?>
    </div>
</body>
</html>