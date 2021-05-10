<?php
    session_start();
    header("location: ./form.php");
    if(isset($_SESSION["nombre"]))
    {
        session_unset();
        session_destroy();
    }
?>