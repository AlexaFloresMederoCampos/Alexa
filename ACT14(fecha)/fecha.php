<?php

    $hora;
    $cumple;

    if(isset($_POST["reloj"]) && isset($_POST["hora"]) && isset($_POST["paises"]))
    {
        $hora=$_POST["hora"];
        echo $hora;    
        echo "hola";
    }
    else
    {
        if(isset($_POST["cumpleanos"]) && isset($_POST["cumple"]) && isset($_POST["proxC"]))  
        {
            $cumple=$_POST["cumple"];
            echo $cumple;
            echo "cumple";    
        }
    }    
    
    
?>