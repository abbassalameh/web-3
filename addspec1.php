<?php
$a=strtoupper($_POST["nomS"]);
$b=$_POST["nomC"];
$aa=$_POST["user"];
$bb=$_POST["pass"];
$re=$_POST["retype"];
$p=0;
$pp=0;
$l=0;
$ll==0;
include 'connect.php';
$f=mysql_query("SELECT * from specialiter");
$ff=mysql_query("SELECT * from users");
$gg=mysql_num_rows($ff);
$g=mysql_num_rows($f);
if(!empty($a) && !empty($b) && !empty($aa) && !empty($bb) && !empty($re)){

for($i=0;$i<$g;$i++){
	$h=mysql_result($f,$i,"NomS");
	$hh=mysql_result($f,$i,"NomChef");
	if($a==$h){$p++;}
	if($b==$hh){$pp++;}
	}
for($i=0;$i<$gg;$i++){
	$k=mysql_result($ff,$i,"Name");
	$kk=mysql_result($ff,$i,"Username");
	if($k==$b){$l++;}
	if($kk==$aa){$ll++;}
}
	if(($p!=0)||($pp!=0)||($l!=0)||($ll!=0)){echo "<meta http-equiv='refresh' content='0;URL=addspec.php'>";}
	if(($p==0)&&($pp==0)&&($l==0)&&($ll==0)){$c=mysql_query("INSERT INTO `specialiter`(`NomS`, `NomChef`) VALUES ('$a','$aa')");
						$cc=mysql_query("INSERT INTO `users`(`Name`, `UserName`, `Password`, `Specialiter`, `Position`)
								VALUES ('$b','$aa','$bb','$a','chef')");
							echo "<meta http-equiv='refresh' content='0;URL=choixdirecteur.php'>";
							}}
		else echo "<a href='addspec.php'>mish l kill ma3abeyin</a>";
	?>
