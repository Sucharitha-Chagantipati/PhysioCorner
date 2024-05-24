<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Admins Page</title>
</head>
<body>
   <!-- staff management, details of patients, messages of patients, appointments -->
     <!-- 1. staff management -->
     <div class="container mt-5">
     <h4 class='text-center p-2'>Staff Members
      <a href="staff.php"><button class="btn btn-success">Click To see</button></a>
     </h4>
     <h4 class='text-center p-2'>Patient Details
      <a href="patientDetails.php"><button class="btn btn-success">Click To see</button></a>
     </h4>
     <h4 class='text-center p-2'>Patient Messages
      <a href="patientMessages.php"><button class="btn btn-success">Click To see</button></a>
     </h4>
     <h4 class='text-center p-2'>Appointments
      <a href="appointments.php"><button class="btn btn-success">Click To see</button></a>
     </h4>

     </div>

    <?php
    $host="localhost";
    $username="root";
    $password="admin@20";
    $database = "blog";
    
    $conn = new mysqli($host,$username,$password,$database);
    
    if($conn->connect_error){
        die("Error".$conn->connect_error);
    }
    // echo "Connected";
    


    

    ?>
</body>
</html>