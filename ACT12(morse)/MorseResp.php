<?php
    $abecedario=["A", "B", "C", "D", "E", 
                 "F", "G", "H", "I", "J", 
                 "K", "L", "M", "N", "O", 
                 "P", "Q", "R", "S", "T", 
                 "U", "V", "W", "X", "Y", "Z",
                 "1", "2", "3", "4", "5", 
                 "6", "7", "8", "9", "0",
                 ".", ",", "?", '"', "   ", " "];
   
    $morse=[".-", "-...", "-.-.", "-..", ".", 
            "..-.", "--.", "....", "..", ".---", 
            "-.-", ".-..", "--", "-.", "---", 
            ".--.", "--.-", ".-.", "...", "-", 
            "..-", "...-", ".--", "-..-", "-.--", "--..",
            ".----", "..---", "...--", "....-", ".....",
            "-....", "--...", "---..", "----.","-----",
            ".-.-.-", "-.-.--", "..--..", ".-..-.", "   ", " "];
    //guarda la peticion
    $textoE=$_POST['texto'];
    //la vuelve mayuscula
    $textoEm=strtoupper($textoE);
    // separa el texto por caracteres
    $separadoE= str_split($textoEm); 
    //guarda la peticion
    $textoM=$_POST['texto'];
    //separa por cada letra morse(espacio entre cada una)
    $separadoM= explode(" ", $textoM); 


    $i=0;
    $j=0;
    $k=0;
   
    
    // condicional de español a morse 
    if($_POST["traduccion"] == "espmor")
    {
        // da el texto que introdujo el usuario
        echo "<h1>";
        echo "Tu texto a traducir es: ";
        echo "</h1>";
        echo $textoEm;

        echo "<h1>";
        echo "Tu texto traducido es: ";
        echo "</h1>";
        // recorre el texto introducido por caracteres
        for($i=0; $i < count($separadoE); $i++)
        {
           // recorre el abecedario
            for($j=0; $j < count($abecedario); $j++)
            {
                //encuentra coincidencias entre el abecedario y el texto
                if($abecedario[$j] == $separadoE[$i])
                {
                    // escribe las coincidencias traducidas
                    echo $morse[$j];
                    echo " ";
                }
            }
            // intento de poner los espacios :((
            if($separadoE[$i] == " ")
                echo "   ";
        }
    }
    // condicional de morse a español
    elseif($_POST["traduccion"] == "moresp")
    {
        echo "<h1>";
        echo "Tu texto a traducir es: ";
        echo "</h1>";
        echo $textoM;

        echo "<h1>";
        echo "Tu texto traducido es: ";
        echo "</h1>";
        // recorre el texto dado
        for($i=0; $i < count($separadoM); $i++)
        {
            // recorre abecedario morse
            for($j=0; $j < count($morse); $j++)
            {
            // encuentra coincidencias entre el abecedario morse y el texto
            if($morse[$j] == $separadoM[$i])
                {
                    // imprime coincidencias en el otro abecedario
                    echo $abecedario[$j];
                }
            }
            // intento de diagonales :(((
            if($separadoM[$i] == " ")
                echo "/";

        }
    }


?>