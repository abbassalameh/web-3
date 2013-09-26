<?php
include 'choixchef.php';
$a=$_SESSION["matiere"];
$b=mysql_connect("localhost","root","salameh");
$c=mysql_select_db("projet2");
$d=mysql_query("SELECT DISTINCT UserName from note where CMatiere='$a'");
$e=mysql_num_rows($d);
$count=0;
?>
<html>
	<head>
		<title>resultatChef</title>
	</head>
	<body>
		<table>
			<tr>
				<td>Name</td>
				<td>Pourcentage</td>
				<td>nb Examen</td>
			</tr>
			<?php for($i=0;$i<$e;$i++){
			
				$f=mysql_result($d,$i,"UserName");
				$dd=mysql_query("SELECT Note from note where CMatiere='$a' && UserName='$f'");
				$g=mysql_num_rows($dd);
				
				//$h=mysql_result($d,$i,"Date");
				//$time=mysql_result($d,$i,"time");
				$j=mysql_query("SELECT Name from users where UserName='$f'");
				$k=mysql_result($j,0,"Name");
				$mq=mysql_query("SELECT Note from note where CMatiere='$a' && UserName='$f'");
				$mq1=mysql_query("SELECT Note from note where Cmatiere='$a' && Username='$f' && note>10");
				$mnr=mysql_num_rows($mq);
				$mnr1=mysql_num_rows($mq1);
				if(($mnr==0)||($mnr1==0)){$rt="zero%";}
						  else {$rt=floor(($mnr1*100)/$mnr) . "%";}
						  $count=$i+1;
			?>
			<tr>
				<td><?php echo $k;?></td>
				<td align=center><?php echo $rt;?></td>
				<td align=center><form action="resultatmatiereparetu.php" method="POST">
				<input type=hidden name="name" value="<?php echo $f;?>">
				<a href="#" onclick="document.forms['<?php echo $count;?>'].submit();return false;"><?php echo $g;?></a></form></td>
			</tr>
			<?php } ?>
			<tr>
				<td>P.reussis:</td>
				<td align=center><?php $reu=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$a' && Note>10");
						  $res=mysql_query("SELECT Note FROM `note` WHERE CMatiere='$a'");
						  $reu1=mysql_num_rows($reu);
						  $res1=mysql_num_rows($res);
						  if(($res1==0)||($reu1==0)){echo "zero%";}
						  else {$pour=floor(($reu1*100)/$res1);
						  echo $pour . "%";}
						 ?>
				</td>
		</table>
	</body>
</html>