<?php
session_start();
$a=$_POST["Name"];
$aa=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from users where Name='$a'");
$d=$_POST["User"];
$e=$_POST["Pass"];
$f=$_POST["Email"];
$p2=$_POST["Retype2"];
$p=0;
if($p2=="AMD"){
if(!empty($d) && !empty($e) && !empty($f)){
$h=mysql_query("SELECT * from users where Name!='$a'");
$hh=mysql_num_rows($h);
for($i=0;$i<$hh;$i++){
	$j=mysql_result($h,$i,"UserName");
	if($j==$d){$p++;}
	if($j!=$d){$p=$p;}
	}
	if($p!=0){echo "<meta http-equiv='refresh' content='0;URL=account.php'>";}
	if($p==0){$k=mysql_query("UPDATE `users` SET UserName='$d',Password='$e',Email='$f' WHERE Name='$a'");
			echo "<meta http-equiv='refresh' content='0;URL=logout.php'>";}
	}
	else echo "<a href='account.php'>mish l kill l input m3abeyin</a>";
	}
	
if($p2=="ASD"){
$g=$_POST["Retype"];
if(!empty($d) && !empty($e) && !empty($f) && !empty($g)){
	if($g!=$e){echo "<meta http-equiv='refresh' content='0;URL=account.php'>";}
		else {if($g==$e){$h=mysql_query("SELECT * from users where Name!='$a'");
			$hh=mysql_num_rows($h);
				for($i=0;$i<$hh;$i++){
					$j=mysql_result($h,$i,"UserName");
					if($j==$d){$p++;}
					if($j!=$d){$p=$p;}
					}
						if($p!=0){echo "<meta http-equiv='refresh' content='0;URL=account.php'>";}
						if($p==0){$k=mysql_query("UPDATE `users` SET UserName='$d',Password='$e',Email='$f' WHERE Name='$a'");
								echo "<meta http-equiv='refresh' content='0;URL=logout.php'>";}
					}
				else echo "<meta http-equiv='refresh' content='0;URL=account.php'>";
		}
	}
	else echo "<a href='account.php'>mish l kill l input m3abeyin</a>";
}

?>

