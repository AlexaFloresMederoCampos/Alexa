<?php
    $opciones=["Primero"=>"A",
                 "Segundo"=>"B", 
                 "Tercero"=>"C",
                 "Cuarto"=>"D"];
    $i=0;
    $a=0;
    $b=0;
    $c=0;
    $d=0;

    $respuestas=[$_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"], $_POST["p7"], $_POST["p8"], $_POST["p9"], $_POST["p10"]];
    for($i=0; $i < count($respuestas); $i++)
    {
        if($respuestas[$i]==$opciones["Primero"])
        {
            $a++;
        }
        if($respuestas[$i]==$opciones["Segundo"])
        {
            $b++;
        }if($respuestas[$i]==$opciones["Tercero"])
        {
            $c++;
        }if($respuestas[$i]==$opciones["Cuarto"])
        {
            $d++;
        }
    }
    //condiciones para solo una respuesta > como condicion
    if($a>$b && $a>$c && $a>$d)
        echo "<h1>";
        echo "Felicidades eres un:"; 
        echo "</h1>";
        echo "<h2>";
        echo "Taco al pastor";
        echo "</h2>";
    else if($b>$a && $b>$c && $b>$d)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco de suadero";
        echo "</h2>";
    else if($c>$a && $c>$b && $c>$d)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco de barbacoa";
        echo "</h2>";
    else if($d>$a && $d>$b && $d>$c)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco Lagunero";
        echo "</h2>";
    //condiciones para dos variables iuales
    else if($a==$b && $a>$c && $a>$d)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "<Taco campechano";
        echo"</h2>";
    else if($b==$c && $b>$a && $b>$d)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco de carnitas";
        echo "</h2>";
    else if($c==$d && $c>$a && $c>$b)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco bell";
        echo "</h2>";
    else if($a==$d && $a>$c && $a>$b)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco light";
        echo "</h2>";
    else if($a==$c && $a>$b && $a>$d)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco placero";
        echo "</h2>";
    else if($b==$d && $b>$c && $b>$a)
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco de mixiote";
        echo "</h2>";
    //ninguna de las anteriores
    else
        echo "<h1>";
        echo "Felicidades eres un:" ;
        echo "</h1>";
        echo "<h2>";
        echo "Taco de sal";
        echo "</h2>";   
    
?>