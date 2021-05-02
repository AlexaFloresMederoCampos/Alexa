<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // i para repetir las filas horizontales
        $i=1;
        // col para las celdas 
        $col=1;
        // el tamaño va a ser el doble del que le pidas 
        $var=13;
        // con esta variable se arregla las dobles casillas
        $tam=$var/2;
        //tamaño de celda/img 
        $tamc=40;

        //inicio tabla
        echo "<table border = 1 >";
        // repetir las filas 


        for($i=1; $i<=$tam; $i++)
        {
            echo "<tr>";
                // para repetir celdas 
                for($col=1; $col<=$tam ; $col++)
                {
                    echo "<td>";
                    echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                    echo "</td>";
                    echo "<td>";
                    echo '<img src="./negro.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';                    echo "</td>";
                }
                // si no es multiplo de 2 agrega una celda (horizontal)
                if($tam%2 !=0)
                {
                    echo "<td>";
                    echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                    echo "</td>";
                }
           
            echo "</tr>";
            echo "<tr>";
                    for($col=1; $col<=$tam ; $col++)
                    {
                        echo "<td>";
                        echo '<img src="./negro.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';                    echo "</td>";
                        echo "</td>";
                        echo "<td>";
                        echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
                        echo "</td>";
                    }
                    // si no es multiplo de 2 agrega una celda (horizontal)
                    if($tam%2 !=0)
                    {
                        echo "<td>";
                        echo '<img src="./negro.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';                    echo "</td>";
                        echo "</td>";
                    }
            echo "</tr>";
       }
       // si no es multiplo de dos agrega una fila
       if($tam%2 != 0)
       {
           echo "<tr>";
           for($col=1; $col<=$tam ; $col++)
           {
               echo "<td>";
               echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
               echo "</td>";
               echo "<td>";
               echo '<img src="./negro.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';                    echo "</td>";
           }
             // si no es multiplo de 2 agrega una celda (horizontal)
            if($tam%2 != 0)
           {
               echo "<td>";
               echo '<img src="./blanco.jpg" width="'.$tamc.'" height="'.$tamc.'" alt="Mi blanco">';
               echo "</td>";
           }
           echo "</tr>";
       }

        echo "</table>";
    ?>
</body>
</html>