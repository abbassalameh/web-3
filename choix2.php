<?php
session_start();
$a=$_POST["matiere"];
$_SESSION["matiere"]=$a;
if($_POST["submit1"]){echo "<meta http-equiv='refresh' content='0;URL=examen.php'>";}
if($_POST["submit2"]){echo "<meta http-equiv='refresh' content='0;URL=resultatt.php'>";}
?>