<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Batalla Naval</title>
</head>
<body>
    
        <?php
            
            $fila=13;
            $tamc=40;
            $i=0;
            $j=0;
            $k=1;
            $vidas=8;
            $randomX;
            $randomY;
 

            echo "<h1>Batalla Naval</h1>";
            echo "<br><br>";
            echo "<h2>Vidas:</h2>";


            echo "<br>";
            for($i = 1; $i <= $vidas; $i++){
            
                echo "<img src='https://e1.pngegg.com/pngimages/929/425/png-clipart-minecon-1-minecraft-minecraft-raw-meat.png' width='20px' height='20px'>";
            }

            $coordenadasX= [" ", "A", "B", "C", "D", "E", "F", "G", "H", "I", "J", "K", "L", "M"];
            $coordenadasY= [" ","1", "2", "3", "4", "5", "6", "7", "8", "9", "10", "11", "12", "13"];

            

            
            // checa si existe post de coordenadas
             if(isset($_POST["coordX"]) && isset($_POST["coordY"]) && isset($_POST["disparo"]))
             {     
                    $barcoX=$_POST['barcoX'];
                    $barcoY=$_POST['barcoY'];
                    $corX=$_POST["coordX"];
                    $corY=$_POST["coordY"];
                    echo $barcoX;
                    echo "<br>";
                    echo $barcoY;
                    $coordenadas="$corX$corY";
                    echo "<br>";
                    echo "C: " .$coordenadas;
        
                    //tabla cuando ya entran los datos
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
                            // mis x son mis y y mis y son mis x 
                                if($coordenadasX[$j+1]==$corX && $coordenadasY[$i+1]==$corY)
                                {
                                    
                                    if($corX == $barcoX && $corY == $barcoY)
                                    {
                                        echo '<img src="./fuego.jpeg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                                        //aqui array push, llenar arreglos, comparar
                                    }
                                    else
                                    {
                                        echo '<img src="./incorrecto.jpeg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                                    }
                                    
                                }
                                else
                                    echo '<img src="./agua.jpeg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">'; 

                            echo "</td>";
                        }
                        echo "</tr>";
                    }
                echo "</table>";
             }
             
             else
             {
                $randomX=rand(1, 13);
                $randomY=rand(1, 13);
                $barcoX=$coordenadasX[$randomX];
                $barcoY=$coordenadasY[$randomY];

                echo "X: " .$barcoX;
                echo "<br>";
                echo "Y: " .$barcoY;
                echo "<br>";

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
             }
             
           
            //formulario
            echo '<form action="./BatallaNaval.php" method="POST">';
            echo "<br><br>";
            echo "<label for='coordX'>";
                echo "Coordenada en X (letra): <input type='text' name='coordX' required>";
            echo "</label>";
            echo "<label for='coordY'>";
                echo "Coordenada en Y (numero) : <input type='text' name='coordY' required>";
            echo "</label>";
            echo "<button type='submit' name='disparo'>Dispara</button>";

            echo "<input type='hidden' name='barcoX' value='$barcoX'>";
            echo "<input type='hidden' name='barcoY' value='$barcoY'>";
            

            //arraypush para rellenar el arreglo vacío
           /* $arreglo=array();
            array_push($arreglo, $coordenadas)
            foreach($arreglo as $llave => $valor)
            {
                echo $valor;
                echo "<br>";
            }*/

            echo '</form>';
            



        ?>

</body>
</html>