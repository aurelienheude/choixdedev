<?php 
session_start();

if($_SESSION['id'] != 1)
{
    header("Location: ../deconnexion.php");
}
?>