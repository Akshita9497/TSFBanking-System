<?php
	$servername = 'localhost';
	$user = 'task_2';
	$pass = 'Axita@1997';
	$dbname = 'bank';

	$conn = mysqli_connect($servername,$user,$pass,$dbname);

	if(!$conn){
		die("Could Not Connect to the database".mysqli_connect_error());
	}

	$sql = "INSERT INTO users(id,name,email,credits)
			VALUES('1','Akshita','axitapatel1997@gmail.com','5000'),
				  ('2','Parth','part2506@gmail.com','6000'),
			  	  ('3','Vaibhavi','vaibhavi0312@gmail.com','1000'),
				  ('4','Pratik','pratik800@gmail.com','3500'),
				  ('5','Pihu','pihu123@gmail.com','4500'),
				  ('6','Rutv','rutv88@gmail.com','6200'),
				  ('7','Priyank','priyankpatel004@gmail.com','3000'),
				  ('8','Trupti','tupti165@gmail.com','1200'),
				  ('9','Mayur','mayur9100@gmail.com','1700'),
				  ('10','Namrata','namrata387@gmail.com','1900')";
		
	if($conn->query($sql) === TRUE){
		echo "New Record Create Successfully.";
	}
	else{
		echo "Error!!!".$sql."<br>".$conn->error;
	}
	$conn->close();
?>