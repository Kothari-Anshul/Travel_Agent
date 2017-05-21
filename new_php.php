<!DOCTYPE html>
<html>
<head>
	<style>
	@keyframes example{
		0% {color: #0044cc;}
		25% {color:#004de6;}
		50% {color: #4d88ff;}
		75% {color:#80aaff;}
		100% {color: #99bbff;}
		
	}
	.ani{
	animation-name:example;
	animation-duration:2s;
	animation-iteration-count:infinite;
	}
	</style>
</head>
<body>
<?php 
	$name = " ";
	$password = " ";
	$country = " ";
	$country = " ";
	$mobile = " ";
	$email = " ";
	
	$servername = "localhost";
	$password = "anshul@96";
	$user = "root";
	$name = $_POST["name"];
	$password = $_POST["password"]; 
	$country = $_POST["country"];
	$mobile = $_POST["mobile"]; 
	$email = $_POST["email"];

	
	$database = "vintage_data";

	$conn = new mysqli($servername,$user,$password,$database);

	// check conncetion
	if($conn->connect_error){
		die("Conncetion Erro" . $conn->connect_error);
	}else{
		echo "Conncetion Successful";
	}

	// $insert = "insert into query_form (name,password , country,mobile,email)
	// values ('$name','$password','$country','$mobile','$email')";

	//if($conn->query($insert) === true){
	// echo "<h1 class='ani'>Thank You for your response we will get back to you soon!</h1>";
	//}else{
	// echo "<h1 class='ani'>Sorry failed to submit your response</h1>" . $conn->error;
	//}

?>

</body>
</html>