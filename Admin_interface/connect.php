<?php
      $Faculty_name = $_POST['Faculty_name'];
      $Faculty_email = $_POST['Faculty_email'];
      $Password = $_POST['Password'];
    //database connection

    $conn = new mysqli('localhost','root','','facultyinfo');
    if($conn->connect_error){
        die("Connection Failed :" .$conn->connect_error);
    }else{$stmt = $conn->prepare("insert into registration(Faculty_name, Faculty_email,Password) values(?, ?, ?)");
		$stmt->bind_param("sss", $Faculty_name, $Faculty_email, $Password );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}

?>