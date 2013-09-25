<?php
session_start();
echo "<p style='font-size:35;color:red'>" . $_POST["text"] . "</p><br>";
$NomM=$_POST["text"];
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from matiere where NomM='$NomM'");
$code=mysql_result($c,0,"CodeM");
$h=mysql_query("SELECT DISTINCT UserName FROM note where CMatiere='$code'");
$cc=mysql_num_rows($h);
$count=0;
?>
<html>
	<head>
		<title>resultat par etudiant</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Nom Etu</td>
				<td align=center>% note</td>
				<td>Nb examen</td>
			</tr>
			<?php for($i=0;$i<$cc;$i++){
				$f=mysql_result($h,$i,"UserName");
				$g=mysql_query("SELECT Name from users where UserName='$f'");
				$gg=mysql_result($g,0,"Name");
				$res=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$code' && UserName='$f'");
				$reu=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$code' && Note>10 && UserName='$f'");
				$reu1=mysql_num_rows($reu);
				$res1=mysql_num_rows($res);
				if(($res1==0)||($reu1==0)){$e="zero%";}
				else {$e=floor(($reu1*100)/$res1) . "%";}
				$nb=mysql_query("SELECT * from note where UserName='$f' && CMatiere='$code'");
				$nb1=mysql_num_rows($nb);
				$count++;
				?>
			<tr>
				<td><?php echo $gg;?></td>
				<td align=center><?php echo $e;?></td>
				<td align=center><?php echo $nb1;?></td>
			</tr>
		<?php }?>
		</table>
		<a href="choixchef.php">home</a>
		<a href="logout.php">logout</a>
	</body>
</html>