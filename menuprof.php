<?php
session_start();
$_SESSION["matiere"]=$_POST["matiere"];
if($_POST["submit1"]){echo "<meta http-equiv='refresh' content='0;URL=modifierP.php'>";}
if($_POST["submit2"]){echo "<meta http-equiv='refresh' content='0;URL=resultatP.php'>";}
if($_POST["submit3"]){echo "<meta http-equiv='refresh' content='0;URL=ADDP.php'>";}
?>
