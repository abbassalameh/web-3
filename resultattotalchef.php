<?php
//include 'choixchef.php';
session_start();
$spec=$_SESSION["spechef"];

include 'connect.php';
$c=mysql_query("SELECT * from matiere where Specialiter='$spec'");
$cc=mysql_num_rows($c);
if($cc==0){echo "<br><a href='choixchef.php'>page not ready</a>";}
else{
		
			//$ff=mysql_result($f,$i,"UserName");
			//$g=mysql_query("SELECT Name from users where UserName='$ff'");
			//$gg=mysql_result
?>
<html>
	<head>
		<title>resultat total chef</title>
	</head>
	<body>
		<table >
			<tr>
				<td align=center>Matiere</td>
				<td align=center>pourcentage</td>
				<td align=center>participation</td>
				<td align=center>Prof</td>
			</tr>
			<?php
			for($i=0;$i<$cc;$i++){
			$d=mysql_result($c,$i,"NomM");
			$dd=mysql_result($c,$i,"CodeM");
				$res=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$dd'");
				$reu=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$dd' && Note>10");
				$res1=mysql_num_rows($res);
				$reu1=mysql_num_rows($reu);
				if(($res1==0)||($reu1==0)){$e="zero%";}
				else {$e=floor(($reu1*100)/$res1) . "%";}
			$h=mysql_result($c,$i,"Prof");
			$f=mysql_query("SELECT DISTINCT UserName FROM note where CMatiere='$dd'");
			$ff=mysql_num_rows($f);
			?>
			
			<tr>
				<td align=center><?php echo $d;?></td>
				<td align=center><?php echo $e;?></td>
				<td align=center><form name="polo" method="POST" action="resultatparetu.php">
				<input type=hidden name="text" value="<?php echo $d;?>">
				<a href="#" onclick="document.forms['<?php echo $i;?>'].submit(); return false;"><?php echo $ff . " etu"?></a>
				</form></td>
				<td><?php echo $h;?>
			</tr>
			<?php }?>
		</table>
		<a href="choixchef.php">home</a>
		<a href="logout.php">logout</a>
	</body>
</html>
<?php }?>