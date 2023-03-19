<?php
     // $Name = $_POST['Name'];
      $Email_address = $_POST['Email_address'];
      $Registration_Number = $_POST['Registration_Number'];
      $Reseach_Code = $_POST['Reseach_Code'];
    //database connection
    $conn = new mysqli('localhost','root','','faculty1');
    if($conn->connect_error){
        die("Connection Failed :" .$conn->connect_error);
    }else{$stmt = $conn->prepare("insert into studentapply( Email_address,Registration_Number, Reseach_Code) values( ?, ?, ?)");
		$stmt->bind_param("ssi", $Email_address, $Registration_Number, $Reseach_Code );
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();

	}

?>