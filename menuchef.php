<?php
session_start();
$_SESSION["matiere"]=$_POST["matiere"];
if($_POST["submit1"]){echo "<meta http-equiv='refresh' content='0;URL=resultatChef.php'>";}
if($_POST["submit2"]){echo "<meta http-equiv='refresh' content='0;URL=modifierchef.php'>";}
?>