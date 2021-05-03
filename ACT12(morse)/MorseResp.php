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
    
    $textoE=$_POST['texto'];
    $textoEm=strtoupper($textoE);
    $separadoE= str_split($textoEm); 
    $textoM=$_POST['texto'];
    $separadoM= explode(" ", $textoM); 


    $i=0;
    $j=0;
    $k=0;
   
    
    // condicionales de español a morse o de morse a español
    if($_POST["traduccion"] == "espmor")
    {
        echo "<h1>";
        echo "Tu texto a traducir es: ";
        echo "</h1>";
        echo $textoEm;

        echo "<h1>";
        echo "Tu texto traducido es: ";
        echo "</h1>";
        for($i=0; $i < count($separadoE); $i++)
        {
            for($j=0; $j < count($abecedario); $j++)
            {
                if($abecedario[$j] == $separadoE[$i])
                {
                    echo $morse[$j];
                    echo " ";
                }
            }
            if($separadoE[$i] == " ")
                echo "   ";
    }
    }

    elseif($_POST["traduccion"] == "moresp")
    {
        echo "<h1>";
        echo "Tu texto a traducir es: ";
        echo "</h1>";
        echo $textoM;

        echo "<h1>";
        echo "Tu texto traducido es: ";
        echo "</h1>";
        for($i=0; $i < count($separadoM); $i++)
        {
            for($j=0; $j < count($morse); $j++)
            {
                if($morse[$j] == $separadoM[$i])
                {
                    echo $abecedario[$j];
                }
            }
            if($separadoM[$i] == " ")
                echo "/";

        }
    }


?>