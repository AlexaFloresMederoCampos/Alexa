<?php
    // arreglo con opciones existentes en el formulario
    $opciones=["Primero"=>"A",
                 "Segundo"=>"B", 
                 "Tercero"=>"C",
                 "Cuarto"=>"D"];
    
    // variables de control
    $i=0;
    $a=0;
    $b=0;
    $c=0;
    $d=0;

    // arreglo con respuestas del formulario    
    $respuestas=[$_POST["p1"], $_POST["p2"], $_POST["p3"], $_POST["p4"], $_POST["p5"], $_POST["p6"], $_POST["p7"], $_POST["p8"], $_POST["p9"], $_POST["p10"]];
    
    // for para recorrer el arreglo con respuestas y determinar las veces que aparece cada una
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

    // condiciones a cumplir
    // condiciones respuesta + veces que las demas
    if($a>$b && $a>$c && $a>$d)
        echo "Felicidades eres un: Taco al pastor";
    else if($b>$a && $b>$c && $b>$d)
        echo "Felicidades eres un: Taco de suadero";
    else if($c>$a && $c>$b && $c>$d)
        echo "Felicidades eres un: Taco de barbacoa";
    else if($d>$a && $d>$b && $d>$c)
        echo "Felicidades eres un: Taco Lagunero";
    // condiciones 2 respuestas = n veces
    else if($a==$b && $a>$c && $a>$d)
        echo "Felicidades eres un: Taco campechano";
    else if($b==$c && $b>$a && $b>$d)
        echo "Felicidades eres un: Taco de carnitas";
    else if($c==$d && $c>$a && $c>$b)
        echo "Felicidades eres un: Taco bell";
    else if($a==$d && $a>$c && $a>$b)
        echo "Felicidades eres un: Taco light";
    else if($a==$c && $a>$b && $a>$d)
        echo "Felicidades eres un: Taco placero";
    else if($b==$d && $b>$c && $b>$a)
        echo "Felicidades eres un: Taco de mixiote";
    // condicion ninguna de las anteriores
    else
        echo "Felicidades eres un: Taco de sal";   
    
?>