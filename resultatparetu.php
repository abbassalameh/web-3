<?php
session_start();
echo "<p style='font-size:35;color:red'>" . $_POST["text"] . "</p><br>";
$code=$_POST["text"];
$a=mysql_connect("localhost","root","salameh");
$b=mysql_select_db("projet2");
$c=mysql_query("SELECT * from matiere where CodeM='$code'");
$h=mysql_query("SELECT DISTINCT UserName FROM note where CMatiere='$code'");
$cc=mysql_num_rows($h);
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
			</tr>
			<?php for($i=0;$i<$cc;$i++){
				$f=mysql_result($c,$i,"UserName");
				$g=mysql_query("SELECT Name from users where UserName='$f'");
				$gg=mysql_result($g,0,"Name");
				$res=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$code'");
				$reu=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$code' && Note>10");
				$reu1=mysql_num_rows($reu);
				$res1=mysql_num_rows($res);
				if(($res1==0)||($reu1==0)){$e="zero%";}
				else {$e=($reu1*100)/$res1 . "%";}
				?>
			<tr>
				<td><?php echo $gg;?></td>
				<td><?php echo $e;?></td>
			</tr>
		<?php }echo "aaa";?>
		</table>
	</body>
</html>