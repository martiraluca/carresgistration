<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h1> Am reusit !!! </h1>
<?php  
$serverName= "localhost";
$userName = "root";
$password= "";
$dbName = "admin";

$conn = new mysqli($serverName,$userName, $password, $dbName);
if($conn->connect_error){
	die ("connection failed".$conn->connect_error);
}
$query= mysqli_query($conn, 'SELECT* FORM masini')
?>

<table id ="masini">
<tr>
<th>id</th>
<th>First Name</th>
<th>Last name</th>
<th>Car brand</th>
<th>car model</th>
<th>manufactured</th>
<th>color</th>
<th>fuel</th>
</tr>

<?php
while($row=mysqli_fetch_array($query)){
	echo "<tr>";
	echo"<td>".$row['id']."</td>";
	echo"<td>".$row['prenume']."</td>";
	echo"<td>".$row['nume']."</td>";
	echo"<td>".$row['marca']."</td>";
	echo"<td>".$row['model']."</td>";
	echo"<td>".$row['an']."</td>";
	echo"<td>".$row['culoare']."</td>";
	echo"<td>".$row['combustibil']."</td>";
	echo"</tr>";
}
//mysqli_start_close($stmt);
mysqli_close($conn);
//header('location:cars.php');
?>
</table>
</body>
</html>