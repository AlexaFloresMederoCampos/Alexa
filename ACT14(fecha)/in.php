<?php
if(isset($_POST["enviar"])) //Boton procesar
{
    echo "<table border=1;>";
echo "<thead>";
            //titulo de la tabla
             echo "<th colspan=2;><h1><strong>Reloj mundial</strong></h1></th>";
           echo " </thead>";
           echo " <tbody>";
    if(isset($_POST["ny"]))
    {
        echo "<td colspan=1;>NewYork</td>";
        echo "<td colspan=1;> lol </td>";
    } 
    if(isset($_POST["sp"]))
    {
        //echo $_POST["sp"];
        echo "<tr>";
        echo "<td colspan=1;>Sao Paolo</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    } 
    if(isset($_POST["md"]))
    {
        //echo $_POST["md"];
        echo "<tr>";
        echo "<td colspan=1;>Madrid</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    }
    if(isset($_POST["pr"]))
    {
       // echo $_POST["pr"];
       echo "<tr>";
       echo "<td colspan=1;>Paris</td>";
       echo "<td colspan=1;> lol </td>";
       echo "</tr>";
    }
    if(isset($_POST["rm"]))
    {
        //echo $_POST["rm"];
        echo "<tr>";
        echo "<td colspan=1;>Roma</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    }
    if(isset($_POST["at"]))
    {
        //echo $_POST["at"];
        echo "<tr>";
        echo "<td colspan=1;>Atenas</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    }
    if(isset($_POST["bj"]))
    {
        //echo $_POST["bj"];
        echo "<tr>";
        echo "<td colspan=1;>Bejin</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    }
    if(isset($_POST["tk"]))
    {
        //echo $_POST["tk"];
        echo "<tr>";
        echo "<td colspan=1;>Tokio</td>";
        echo "<td colspan=1;> lol </td>";
        echo "</tr>";
    }
        echo "</table>";  
}
if(isset($_POST["enviar2"])) //Boton procesar
{
    if(isset($_POST["dias"]))
    {
        echo "dias";
        echo "<br>";
    } 
    if(isset($_POST["horas"]))
        echo "horas";
        echo "<br>";
         
    if(isset($_POST["min"]))
        echo "min";
        echo "<br>";
     
    if(isset($_POST["fin"]))
        echo "fin";
        echo "<br>";
}
//}

?>