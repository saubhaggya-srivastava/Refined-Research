<?php 
$localhost = "localhost:3306"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "faculty1";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

$query = " select * from studentapply";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Applied Students</title>
    <style>
table, th, td {
  border: 1px solid black;
}
        </style>
</head>
<body class="bg-dark">

        <div class="container">
            <div class="row">
                <div class="col m-auto">
                    <div class="card mt-5">
                        <table class="table table-bordered">
                            <tr>
                                <td> Email_address </td>
                                <td> Registration_Number</td>
                                <td> Reseach_Code </td>
                                
                                
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Email_address= $row['Email_address'];
                                        $Registration_Number = $row['Registration_Number'];
                                        $Reseach_Code  = $row['Reseach_Code'];
									
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $Email_address?></td>
                                        <td><?php echo $Registration_Number?></td>
                                        <td><?php echo $Reseach_Code?></td>
                                        
                                        
                                        
                                    </tr>        
                                   
                            <?php 
                                    }  
                            ?>                                                                    
                                   

                        </table>
                        <br>
                        <br>
                        <button type="button" onclick="window.location.href='index.html'">Back to Dashboard</button>
                    </div>
                </div>
            </div>
        </div>
    
</body>
</html>