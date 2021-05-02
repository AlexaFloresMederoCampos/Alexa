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

    if($a>$b && $a>$c && $a>$d)
        echo "Taco al pastor";
    else if($b>$a && $b>$c && $b>$d)
        echo "Taco de suadero";
    else if($c>$a && $c>$b && $c>$d)
        echo "Taco de barbacoa";
    else if($d>$a && $d>$b && $d>$c)
        echo "Taco Lagunero";

    else if($a==$b && $a>$c && $a>$d)
        echo "Taco campechano";
    else if($b==$c && $b>$a && $b>$d)
        echo "Taco de carnitas";
    else if($c==$d && $c>$a && $c>$b)
        echo "Taco bell";
    else if($a==$d && $a>$c && $a>$b)
        echo "Taco light";
    else if($a==$c && $a>$b && $a>$d)
        echo "Taco placero";
    else if($b==$d && $b>$c && $b>$a)
        echo "Taco de mixiote";
    else
        echo "Taco de sal";   
    
?>