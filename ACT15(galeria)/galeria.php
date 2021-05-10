<?php
    if (isset($_FILES["img"]))
    {
        $autor=(isset($_POST["autor"]) && $_POST["autor"]!="") ? $_POST["autor"]:"Sin autor";
        $anio=(isset($_POST["anio"]) && $_POST["anio"]!="") ? $_POST["anio"]:"Sin año";
        $nombre=$_POST["nombre"];

        $imagen= $_FILES["img"]["tmp_name"];
        $nombreImg= $_FILES["img"]["name"];
        $extension=pathinfo($nombreImg,PATHINFO_EXTENSION);
            
            if($extension=="jpg" || $extension=="jpeg" || $extension=="png")
            {
                // nombre preestablecido
                rename($imagen, './statics/'.$nombreImg."$".$autor."$".$anio."$." .pathinfo($nombreImg,PATHINFO_EXTENSION));
                
                echo "<h1>Tu imagen se cargó correctamente en tu galeria</h1>";

                echo "<form action='./galeria.php' method='POST'>";
                    echo "<button type='submit'>Ver galería</button>";
                echo"</form>"; 
            }
            else
            {
                echo "<h1>No se pudo cargar tu obra, extension no permitida</h1>"; 
                
                echo "<form action='./galeria.html' method='POST'>";
                    echo "<button type='submit'>";
                    echo "Regresar";
                    echo "</button>";
                echo "</form>";
                
            }
            
    }
    
    else
    {
      
            //guarda ruta de la carpeta
            $archivo=NULL;
            $rutaACarpeta="./statics";
            $carpeta= opendir($rutaACarpeta);
            $archivos = array();
            $hay_archivos=true;
            $hayImg=0;
            $datosSeparados=array();

            while($hay_archivos)
            {
                $archivo = readdir($carpeta);
                if($archivo !== false)
                {
                    if($archivo !="." && $archivo !="..")
                        {
                            $hayImg++;
                            $extensionArch=pathinfo($archivo, PATHINFO_EXTENSION);
                            if($extensionArch=="jpg" || $extensionArch=="jpeg" || $extensionArch=="png")
                            {
                                array_push($archivos, $archivo);  
                            } 
                        }
                }
                else
                {
                    $hay_archivos=false;
                }
            }

            if($hayImg > 0)
            {
             
                echo "<table border='1'>";
                    echo "<tr>";
                    foreach($archivos as $llave => $value)
                    {
                        
                        echo "<td>";
                            echo "<img src='./statics/" .$value. "'width=500 height=500>";
                            $datosSeparados=explode( "&", $value);
                            var_dump($datosSeparados);
                            echo "<ul>";
                                echo "<li>";
                                    echo "Nombre de la pintura: ";
                                    echo $datosSeparados['0'];
                                echo "</li>";
                                echo "<li>";
                                    echo "Nombre del autor: ";
                                    /*if($datosSeparados[1] == NULL)
                                    {
                                        echo "SIN AUTOR";
                                    }
                                    else
                                    {*/
                                        echo $datosSeparados['1'];
                                    //}
                                echo "</li>";
                                echo "<li>";
                                    echo "Año: ";
                                    /*if($newAño == NULL)
                                    {
                                        echo "SIN AÑO";
                                    }
                                    else
                                    {*/
                                        echo $datosSeparados['2'];
                                    //}
                                    
                                echo "</li>";
                            echo "</ul>";
                            
                        echo "</td>";
                    }
                    echo "<tr>";

                echo "</table>";
            }
    
    /*else
    {
        echo "<h1>TU GALERÍA DE ARTE NO TIENE NINGUNA IMAGEN</h1>";
    }*/
    
    closedir($carpeta);
    echo "<form action='./galeria.html' method='POST'>";
        echo "<button type='submit'>";
        echo "Subir obra a mi galería";
        echo "</button>";
    echo "</form>";
           
    }
?>