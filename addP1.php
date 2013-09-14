<?php
session_start();
$a=$_SESSION["matiere"];
$b=mysql_connect("localhost","root","salameh");
$c=mysql_select_db("projet2");
$d=mysql_query("SELECT * from question where CMatiere='$a'");
$e=mysql_num_rows($d);
$ee=$a . "-" . $e;
$g=$_POST["text"];
$h=$_POST["text1"];
$i=$_POST["text2"];
$j=$_POST["text3"];
$k=$_POST["diff"];
$f=mysql_query("INSERT INTO question VALUES ('$g','$h','$i','$j','$k','$a','$ee')");
echo "<meta http-equiv='refresh' content='0;URL=choixprof.php'>";
?>