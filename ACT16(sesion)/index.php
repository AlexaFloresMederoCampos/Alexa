<?php
    
    session_start();
    if(isset($_POST["nombre"]) || isset($_SESSION["nombre"]))
    {
        if(isset($_POST["nombre"]))
        {
            $_SESSION["nombre"]=$_POST["nombre"];
            $_SESSION["apellidos"]=$_POST["apellidos"];
            $_SESSION["grupo"]=$_POST["grupo"];
            $_SESSION["nacimiento"]=$_POST["nacimiento"];
            $_SESSION["correo"]=$_POST["correo"];
            $_SESSION["contra"]=$_POST["contra"];
        }
        echo "<h2> Inicio de sesion </h2>";
        echo "<table border = '1'>";
            echo "<tr>";
                echo "<td>Nombre completo</td>"; 
                echo "<td>" .$_SESSION["nombre"]. " " .$_SESSION["apellidos"]. "</td>"; 
            echo "<tr>";
            echo "<tr>";
                echo "<td>Grupo</td>"; 
                echo "<td>" .$_SESSION["grupo"]. "</td>"; 
            echo "<tr>";
            echo "<tr>";
                echo "<td>Fecha de nacimiento</td>"; 
                echo "<td>" .$_SESSION["nacimiento"]. "</td>"; 
            echo "<tr>";
            echo "<tr>";
                echo "<td>Correo electrónico</td>"; 
                echo "<td>" .$_SESSION["correo"]. "</td>"; 
            echo "<tr>";
        echo "</table>";
        echo '<form action="./cerrarsesion.php" method="POST">';
            echo '<button type="submit" name="cerrar" value="cerrar">Cerrar sesion</button>';
        echo '</form>';
   
    }
    else
    {
        header("location: ./form.php");
    }

    
?>