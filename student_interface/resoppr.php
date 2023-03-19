<?php 
$localhost = "localhost:3306"; #localhost
$dbusername = "root"; #username of phpmyadmin
$dbpassword = "";  #password of phpmyadmin
$dbname = "faculty1";  #database name
 
#connection string
$conn = mysqli_connect($localhost,$dbusername,$dbpassword,$dbname);

$query = " select * from faculty ";
$result = mysqli_query($conn,$query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" a href="CSS/bootstrap.css"/>
    <title>View Records</title>
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
                                <td> Research_Title</td>
                                <td> Research_Code</td>
                                <td> Faculty_name </td>
                                <td> Email_address</td>
                                <td> description</td>
                                
                                
                            </tr>

                            <?php 
                                    
                                    while($row=mysqli_fetch_assoc($result))
                                    {
                                        $Research_Title= $row['Research_Title'];
                                        $Research_Code = $row['Research_Code'];
                                        $Faculty_name = $row['Faculty_name'];
										$Email_address = $row['Email_address'];
                                        $description = $row['description'];
                                        
                            ?>
                                    <tr>
                                        <td><?php echo $Research_Title?></td>
                                        <td><?php echo $Research_Code ?></td>
                                        <td><?php echo $Faculty_name ?></td>
                                        <td><?php echo $Email_address ?></td>
                                        <td><?php echo $description ?></td>
                                        
                                        
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