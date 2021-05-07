<?php
    if(isset($_POST["reloj"])) //Boton procesar
    {
        echo "<table border=1>";
            echo "<thead>";
                echo "<th colspan=2;><h2>Reloj mundial</h2></th>";
            echo " </thead>";
            
            echo " <tbody>";

                if(isset($_POST["hora"]))
                    {
                        echo "<tr>";
                            date_default_timezone_set("America/Mexico_City");
                            echo "<td>Ciudad de Mexico</td>";
                            echo "<td>";
                                $fechaCdmx=date("h:i A");
                                echo $fechaCdmx;
                            echo "</td>";
                        echo "</tr>";

                    } 

                if(isset($_POST["NY"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("America/New_York");
                        echo "<td>Nueva York</td>";
                        echo "<td>";
                            $fechaNY=date("h:i A");
                            echo $fechaNY;
                        echo "</td>";
                    echo "</tr>";

                } 

                if(isset($_POST["saop"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("America/Sao_Paulo");
                        echo "<td>Sao Paulo</td>";
                        echo "<td>";
                            $fechaSP=date("h:i A");
                            echo $fechaSP;
                        echo "</td>";
                    echo "</tr>";

                } 

                if(isset($_POST["madrid"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("Europe/Madrid");
                            echo "<td>Madrid</td>";
                            echo "<td>";
                                $fechaMadrid=date("h:i A");
                                echo $fechaMadrid;
                            echo "</td>";
                    echo "</tr>";

                }

                if(isset($_POST["paris"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("Europe/Paris");
                            echo "<td>Paris</td>";
                            echo "<td>";
                                $fechaParis=date("h:i A");
                                echo $fechaParis;
                            echo "</td>";
                    echo "</tr>";
                }

                if(isset($_POST["roma"]))
                {
                    echo "<tr>";
                    date_default_timezone_set("Europe/Rome");
                        echo "<td>Roma</td>";
                        echo "<td>";
                            $fechaRoma=date("h:i A");
                            echo $fechaRoma;
                        echo "</td>";
                    echo "</tr>";
                }

                if(isset($_POST["atenas"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("Europe/Athens");
                            echo "<td>Atenas</td>";
                            echo "<td>";
                                $fechaAtenas=date("h:i A");
                                echo $fechaAtenas;
                            echo "</td>";
                    echo "</tr>";
                }

                if(isset($_POST["beijing"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("Asia/Hong_Kong");
                            echo "<td>Beijing</td>";
                            echo "<td>";
                                $fechaBeijing=date("h:i A");
                                echo $fechaBeijing;
                            echo "</td>";
                    echo "</tr>";
                }

                if(isset($_POST["tokio"]))
                {
                    echo "<tr>";
                        date_default_timezone_set("Asia/Tokyo");
                            echo "<td>Tokio</td>";
                            echo "<td>";
                                $fechaTokio=date("h:i A");
                                echo $fechaTokio;
                            echo "</td>";
                    echo "</tr>";
                }

            echo " <tbody>";
        echo "</table>";  
    }
    if(isset($_POST["cumpleanos"])) 
    {
        date_default_timezone_set("America/Mexico_City");
        $fechaIntroducida=$_POST["cumple"];
        $cadenaFecha=explode("-", $fechaIntroducida);
        $contador=0;
        $i=0;
        $anio=0;
        $mes=0;
        $dia=0;
        $anio2Day=0;
        $mes2Day=0;
        $dia2Day=0;


            // guarda año enviado en variable
            if($contador==0)
            {
                $anio=$cadenaFecha[$contador];
                $contador++;
                echo $anio;
                echo "<br>";
            }
            // guarda mes enviado en variable
            if($contador==1)
            {
                $mes=$cadenaFecha[$contador];
                $contador++;
                echo $mes;
                echo "<br>";
            }
            // guarda dia enviado en variable
            if($contador==2)
            {
                $dia=$cadenaFecha[$contador];
                $contador++;
                echo $dia;
                echo "<br>";
            }

            $fechaHoy=date("Y-m-d");
            echo $fechaHoy;
            $cadenaFecha2Day=explode("-", $fechaHoy);
            var_dump ($cadenaFecha2Day);

            // guarda año actual en variable
            if($i==0)
            {
                $anio2Day=$cadenaFecha2Day[$i];
                $i++;
                echo $anio2Day;
                echo "<br>";
            }
            // guarda mes actual en variable
            if($i==1)
            {
                $mes2Day=$cadenaFecha2Day[$i];
                $i++;
                echo $mes2Day;
                echo "<br>";
            }
            // guarda dia actual en variable
            if($i==2)
            {
                $dia2Day=$cadenaFecha2Day[$i];
                $contador++;
                echo $dia2Day;
                echo "<br>";
            }

        

            if(isset($_POST["dias"]))
            {
                echo "dias";
                echo "<br>";
            } 
            if(isset($_POST["horas"]))
            {
                echo "horas";
                echo "<br>";
            }
                    
            if(isset($_POST["min"]))
            {
                echo "min";
                echo "<br>";
            }
                
            if(isset($_POST["finde"]))
            {
                echo "finde";
                echo "<br>";
            }
    }

?>