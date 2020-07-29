<?php
	$host = 'localhost';
	$username = 'root';
	$password = '';
	$dbname = 'audiovizzion_db';

	$conn = new mysqli($host, $username, $password, $dbname);

	if ($conn -> connect_error){
		die("Connection failed : ". $conn->connect_error);
	}

	echo "Connected to the database successfully";


	$w1742102_deviceCatalogId = filter_input(INPUT_POST, 'catalogId');
	$w1742102_deviceCatalogName = filter_input(INPUT_POST, 'name');
	$w1742102_deviceDescrip = filter_input(INPUT_POST, 'description');
	$w1742102_availabilityStatus = filter_input(INPUT_POST, 'availability');

	$w1742102_deviceCatalogId = filter_input(INPUT_POST, 'catalogId');
	$w1742102_lensVisionType = filter_input(INPUT_POST, 'visionType');
	$w1742102_lensTint = filter_input(INPUT_POST, 'tint');
	$w1742102_lensThinnessLevel = filter_input(INPUT_POST, 'thinnes');
	$w1742102_frBrand = filter_input(INPUT_POST, 'brand');
	$w1742102_frModel = filter_input(INPUT_POST, 'frModel');


//Insert execution
$sql = "INSERT INTO w1742102_device (w1742102_deviceCatalogId, w1742102_deviceCatalogName, w1742102_deviceDescrip,w1742102_availabilityStatus) VALUES ('$w1742102_deviceCatalogId', '$w1742102_deviceCatalogName', '$w1742102_deviceDescrip', '$w1742102_availabilityStatus');";

$sql2 = "INSERT INTO w1742102_visualdevicelensframe (w1742102_deviceCatalogId, w1742102_lensVisionType, w1742102_lensTint, w1742102_lensThinnessLevel, w1742102_frBrand, w1742102_frModel) VALUES ('$w1742102_deviceCatalogId', '$w1742102_lensVisionType', '$w1742102_lensTint', '$w1742102_lensThinnessLevel', '$w1742102_frBrand', '$w1742102_frModel');";


if ($conn->query($sql2)){
	echo "New record is inserted sucessfully";
}


if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
}
else{
	echo "Error: ". $sql2 ." ". $conn->error;
}
mysqli_close($conn)

?>