<?php
    if(isset($_POST["reloj"])) 
    {
        echo "<table border=1>";
            echo "<thead>";
                echo "<th colspan=2><h2>Reloj mundial</h2></th>";
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
        $diasFinMes=0;
        $diasMeses=0;
        $diasCumpleAHoy=0;
        $diasFaltantes=0;
        $horasFaltantes=0;
        $minutosFaltantes=0;
        // correspondencia n dias en n mes 
        //lugar    0     1    2    3   4     5    6    7    8    9   10   11   12
        $diasAnio=["0","31","28","31","30","31","30","31","31","30","31","30","31"];
           $meses=["0","01","02","03","04","05","06","07","08","09","10","11","12"];


            // guarda año enviado en variable
            if($contador==0)
            {
                $anio=$cadenaFecha[$contador];
                $contador++;
                /*echo $anio;
                echo "<br>";*/
            }
            // guarda mes enviado en variable
            if($contador==1)
            {
                $mes=$cadenaFecha[$contador];
                $contador++;
                /*echo $mes;
                echo "<br>";*/
            }
            // guarda dia enviado en variable
            if($contador==2)
            {
                $dia=$cadenaFecha[$contador];
                $contador++;
                /*echo $dia;
                echo "<br>";*/
            }

            $fechaHoy=date("Y-m-d");

            $cadenaFecha2Day=explode("-", $fechaHoy);

            // guarda año actual en variable
            if($i==0)
            {
                $anio2Day=$cadenaFecha2Day[$i];
                $i++;
                /*echo $anio2Day;
                echo "<br>";*/
            }
            // guarda mes actual en variable
            if($i==1)
            {
                $mes2Day=$cadenaFecha2Day[$i];
                $i++;
                /*echo $mes2Day;
                echo "<br>";*/
            }
            // guarda dia actual en variable
            if($i==2)
            {
                $dia2Day=$cadenaFecha2Day[$i];
                $contador++;
                /*echo $dia2Day;
                echo "<br>";*/
            }

            //guarda el mes del cumpleaños en numero
            for($i=0; $i<count($meses); $i++)
            {
                if($meses[$i] == $mes)
                {
                    $mesCumple=$i;
                    /*echo "mes " .$i; 
                    echo "<br>";*/
                }
            }
        
            // diferencia entre el dia de cumpleaños y el dia de hoy
            // para que no salgan numeros negativos
            if($dia2Day>$dia)
            {
                $diferenciaDias=$dia2Day-$dia;
            }
            elseif($dia>$dia2Day)
            {
                $diferenciaDias=$dia-$dia2Day;
            }
            +$diferenciaDias;
            /*echo "diferencia de dia " .$diferenciaDias;
            echo "<br>";*/

            // resta los dias totales que tiene el mes en el que cumplen años menos el dia del cumpleaños 
            $diasFinMes=$diasAnio[$mesCumple]-$dia;
            /*echo "dias fin de mes " .$diasFinMes;
            echo "<br>";*/

            // suma los dias totales de los meses entre el mes del cumpleaños y el mes de ese momento 
            for($i=$mesCumple+1; $i<$mes2Day; $i++)
            {
                $diasMeses+=$diasAnio[$i];
                /*echo "diasMeses " .$diasMeses;
                echo "<br>";*/
            }

            // la idea es 365 dias del año - dias transcurridos desde el dia del cumpleaños... 
            // a el dia de hoy = dias restantes hasta el proximo cumpleaños.
            // suma los dias de los meses entre el mes de cumpleaños y el mes...
            // actual mas los dias transcurridos de el mes actual mas los dias... 
            // desde el dia del cumpleaños hasta el fin de ese mes.
            $diasCumpleAHoy=$diasMeses+$dia2Day+$diasFinMes;
            /*echo "dias cumple a hoy " .$diasCumpleAHoy;
            echo "<br>";*/
            $diasFaltantes=365-$diasCumpleAHoy;
            /*echo "dias faltantes" .$diasFaltantes;*/
        
            echo "<table border=1>";
            echo "<thead>";
                echo "<tr>";
                    echo "<th>Cumpleaños</th>";
                    echo "<th>".$fechaIntroducida."</th>";
                echo "</tr>";
            echo " </thead>";
            
            echo " <tbody>";
                if(isset($_POST["dias"]))
                {
                    echo "<tr>";
                        echo "<td>";
                            echo "Dias Faltantes: ";
                        echo "</td>";
                        echo "<td>";
                            echo $diasFaltantes;
                        echo "</td>";
                    echo "<tr>";

                } 
                if(isset($_POST["horas"]))
                {
                    $horasFaltantes=$diasFaltantes*24;
                    echo "<tr>";
                        echo "<td>";
                            echo "Horas Faltantes: ";
                        echo "</td>";
                        echo "<td>";
                            echo $horasFaltantes;
                        echo "</td>";
                    echo "<tr>";
                }
                        
                if(isset($_POST["min"]))
                {
                    $minutosFaltantes=($diasFaltantes*24)*60;
                    echo "<tr>";
                        echo "<td>";
                            echo "Minutos Faltantes: ";
                        echo "</td>";
                        echo "<td>";
                            echo $minutosFaltantes;
                        echo "</td>";
                    echo "<tr>";
                }
                    
                if(isset($_POST["finde"]))
                {
                    echo "<tr>";
                        echo "<td>";
                            echo "Fin de semana";
                        echo "</td>";
                        echo "<td>";
                            echo "No le supe :(";
                        echo "</d>";
                    echo "<tr>";
                }
            echo " </tbody>";
            
    }

?>