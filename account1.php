<?php
session_start();
$a=$_SESSION["user"];
$aa=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from users where UserName='$a'");
$d=$_POST["User"];
$e=$_POST["Pass"];
$f=$_POST["Email"];
$g=$_POST["Retype"];
if(!empty($d) && !empty($e) && !empty($g) && !empty($f)){


