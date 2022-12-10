<?php
	$firstName = $_POST['firstName'];
	$lastName = $_POST['lastName'];
    $middleNmae = $_POST['middleName'];
	$email = $_POST['email'];
	$phoneNumber = $_POST['phoneNumber'];
    $Adress = $_POST['Adress'];
	$Birthday = $_POST['Birthday'];
    $Department = $_POST['Department'];
    $Male = $_POST['Male'];
    $Female = $_POST['Female'];
    $Any= $_POST['OI'];



	$conn = new mysqli('localhost','root','','test');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstName, lastName, Middlename, email, Adress, phoneNumber,Birthday,Department,OI,Male,Female) values(?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssssi", $firstName, $lastName, $middleName, $email, $phoneNumber, $Adress, $Schedule, $Male, $Female, $Not, $Department);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
?>