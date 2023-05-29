<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>

<HEAD>
  <TITLE> Formulario Insertar </TITLE>
  <link rel="stylesheet" href="css/FormularioAñadir.css">
  

</HEAD>

<BODY>
<a href="Main.html"><button>Atras</button></a>
    <br>
    <img src="images/logo_pokemon.png" alt="Loguito" ></img>
    <br>
    <form class="formulario" action="AñadirPokemon.php">
        <label  for="num_pokedex">Numero pokedex</label><br>
        <input type="number" id="num_pokedex" name="num_pokedex"value="152"></input><br>
        <label  for="nombre">Nombre</label><br>
        <input type="text" id="pname" name="pname"></input><br>
        <label  for="Peso">Peso</label><br>
        <input type="number" id="Peso" name="Peso"></input><br>
        <label  for="Altura">Altura</label><br>
        <input type="number" id="Altura" name="Altura"></input><br>
        <input class="boton" type="submit" value="Enviar"></input>
    </form>

</BODY>

</HTML>