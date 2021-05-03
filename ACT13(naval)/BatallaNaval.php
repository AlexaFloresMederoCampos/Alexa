<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
<body>
    <form action="./BatallaNaval.php" method="POST">
        <?php
            echo "<h1>Batalla Naval</h1>";
            $fila=13;
            $tamc=40;
            $i=0;
            $j=0;

            $coordenadasX= [" ", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $coordenadasY= [" ","1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"];

            echo "<table border=1>";

                // tabla vacía
                echo "<tr>";
                // para fila de coordenadas en x
                for($i=0; $i<=$fila; $i++)
                    {
                        echo "<td>";
                            echo $coordenadasX[$i];  
                        echo "</td>";
                    }
                echo "</tr>";
                
                // este for hace las filas de la tabla
                for($i=0; $i<$fila; $i++)
                {   
                    echo "<tr>";
                        echo "<td>";
                            // escribe coordenadas en y cada vez que hay una nueva linea
                            echo $coordenadasY[$i+1];
                        echo "</td>";
                    // este for hace cada casilla
                    for($j=0; $j<$fila; $j++)
                    {                        
                        echo "<td>";
                            echo '<img src="./agua.jpeg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';  
                        echo "</td>";
                    }
                    echo "</tr>";
                }
            echo "</table>";
           
            echo "<br><br>";
            echo "<label for='coordX'>";
                echo "Coordenada en X (letra): <input type='text' name='coordX' required>";
            echo "</label>";
            echo "<label for='coordY'>";
                echo "Coordenada en Y (numero) : <input type='text' name='coordY' required>";
            echo "</label>";

            echo "<button type='submit' name='disparo'>Dispara</button>";
        
            
        ?>
    </form>
    
</body>
</html>