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
           echo "<table border=1>";

             echo "<thead>";
                echo "<tr>";
                    echo "<th colspan='4' rowspan='2'>";
                        echo"<br><br>";
                        echo "Solicitud de ingreso a la Universidad";
                        echo"<br><br>";
                    echo"</th>";
                echo "</tr>";
             echo "</thead>";

             echo "<tbody>";
                echo "<tr>";
                    echo "<td>";
                        echo $_POST["ApP"];
                    echo "</td>";
                    echo "<td>";
                        echo $_POST["ApM"];
                    echo "</td>";
                    echo "<td colspan='2'>";
                        echo $_POST["Nombre"];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                        echo "<strong><u>Apellido paterno</strong></u>";
                    echo "</td>";
                    echo "<td>";
                       echo "<strong><u>Apellido materno</strong></u>";
                    echo "</td>";
                    echo "<td colspan='2'>";
                        echo "<strong><u>Nombre(s)</strong></u>";
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td>";
                        echo "<strong><u>Sexo: </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["sexo"];
                    echo "</td>";
                    echo "<td>";
                        echo "<strong><u>Edad: </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["edad"];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2'>";
                        echo  $_POST["mail"];
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["tel"];
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["cel"];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2'>";
                        echo "<strong><u>Correo electrónico </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo  "<strong><u>Teléfono </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo "<strong><u>Celular </strong></u>";
                    echo "</td>";
                echo "</tr>";
                
                echo "<tr>";
                    echo "<td>";
                        echo "<strong><u>Escuela de procedencia: </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["escuela"];
                    echo "</td>";
                    echo "<td>";
                        echo "<strong><u>Promedio: </strong></u>";
                    echo "</td>";
                    echo "<td>";
                        echo  $_POST["prom"];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2'>";
                        echo "<strong><u>Primera opción:</strong></u>";
                    echo "</td>";
                    echo "<td colspan='2'>";
                        echo  $_POST["op1"];
                    echo "</td>";
                echo "</tr>";

                echo "<tr>";
                    echo "<td colspan='2'>";
                        echo "<strong><u>Segunda opción:</strong></u>";
                    echo "</td>";
                    echo "<td colspan='2'>";
                        echo  $_POST["op2"];
                    echo "</td>";                
                echo "</tr>";


             echo "</tbody>";

             echo "</table>";

        ?>
    </body>
    </html>
    
    