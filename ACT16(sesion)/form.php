
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mi form</title>
</head>
<body>
    <?php
        session_start();
        if(isset($_SESSION["msj"]))
        {
            header("location: ./index.php");
        }
        echo '<form action="./index.php" method="POST">';
            echo '<fieldset style="width=300">';
                echo '<legend> <h1>Inicio de sesion</h1></legend>';
                echo 'Nombre: <input type="text" name="nombre">';
                echo '<br><br>';
                echo 'Apellidos: <input type="text" name="apellidos">';
                echo '<br><br>';
                echo 'Grupo: <input type="text" name="grupo">';
                echo '<br><br>';
                echo 'Fecha de nacimiento: <input type="date" name="nacimiento">';
                echo '<br><br>';
                echo 'Correo electronico: <input type="mail" name="correo">';
                echo '<br><br>';
                echo 'Contraseña: <input type="text" name="contra">';
                echo '<button type="submit" name="ingresar" value="ingresar">Ingresar</button>';
            echo '</fieldset>';
        echo '</form>';
    ?>
    
</body>
</html>