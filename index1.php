<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	echo "hello world";
	

	$nr1=5;
	$nr2=7;
	$suma=$nr1+$nr2;
	$nr=rand(1,100);
	echo "<br>"."suma este".$suma."<br>";
	for($i=1;$i<=10;$i++){
		echo $i." ";"<br>";
	}
	for ($i=100; $i>=0 ; $i--) { 
			
			if ($i%2==0) echo $i." ";
		}
    if($nr1>$nr2){
    	echo "nr cel mai mare este".$nr1;
    } else if ($nr1<$nr2){
    	echo"nr cel mai mare este".$nr2;
    }else{
    	echo "nr sunt egale";
    }



	?>
</body>
</html>