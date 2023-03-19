<?php
      $Research_Title = $_POST['Research_Title'];
      $Research_Code = $_POST['Research_Code'];
      $Faculty_name = $_POST['Faculty_name'];
      $Email_address = $_POST['Email_address'];
      $description = $_POST['description'];
    //database connection
    $conn = new mysqli('localhost','root','','faculty1');
    if($conn->connect_error){
        die("Connection Failed :" .$conn->connect_error);
    }else{$stmt = $conn->prepare("insert into faculty(Research_Title, Research_Code, Faculty_name, Email_address,description) values(?, ?, ?, ?, ?)");
		$stmt->bind_param("sisss", $Research_Title, $Research_Code, $Faculty_name, $Email_address, $description );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}

?>