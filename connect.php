<?php
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $number = $_POST['number'];
    $email = $_POST['email'];
    $currentAddress = $_POST['currentAddress'];
    $batch = $_POST['batch'];
    $date = $_POST['date'];
    $card = $_POST['card'];
    $cardDetails = $_POST['cardDetails'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $Bankname = $_POST['Bankname'];
    $IFSCcode = $_POST['IFSCcode'];
    $psw = $_POST['psw'];

    //Database Connection//
    $conn = new mysqli('localhost','root','','yogaform');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into registration(firstname, middlename, lastname, age, gender, number, email, currentAddress, batch, date, card, cardDetails, month, year, Bankname, IFSCcode, psw ) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		$stmt->bind_param("sssisisssssssisss", $firstname,$middlename, $lastname,$age, $gender,$number, $email,$currentAddress, $batch, $date, $card, $cardDetails, $month, $year, $Bankname, $IFSCcode, $psw, );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
    }  
?>
