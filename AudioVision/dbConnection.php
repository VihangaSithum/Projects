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
	$w1742102_hdMake = filter_input(INPUT_POST, 'makeNum');
	$w1742102_hdModel = filter_input(INPUT_POST, 'model');


//Insert execution
$sql = "INSERT INTO w1742102_device (w1742102_deviceCatalogId, w1742102_deviceCatalogName, w1742102_deviceDescrip,w1742102_availabilityStatus) VALUES ('$w1742102_deviceCatalogId', '$w1742102_deviceCatalogName', '$w1742102_deviceDescrip','$w1742102_availabilityStatus')";

$sql2 = "INSERT INTO w1742102_HearingDevice (w1742102_deviceCatalogId, w1742102_hdMake, w1742102_hdModel) VALUES ('$w1742102_deviceCatalogId', '$w1742102_hdMake', '$w1742102_hdModel')";


if ($conn->query($sql2)){
	echo "New record is inserted sucessfully";
}


if ($conn->query($sql)){
	echo "New record is inserted sucessfully";
}
else{
	echo "Error: ". $sql ." ". $conn->error;
}
mysqli_close($conn)

?>