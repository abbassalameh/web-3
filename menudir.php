<?php
session_start();
$_SESSION["spec"]=$_POST["specialiter"];
if($_POST["submit1"]){echo "<meta http-equiv='refresh' content='0;URL=resultatMdir.php'>";}
if($_POST["submit2"]){echo "<meta http-equiv='refresh' content='0;URL=modifierMdir.php'>";}
?>