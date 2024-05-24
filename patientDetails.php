<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php
$host="localhost";
$username="root";
$password="admin@20";
$database = "blog";

$conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Error".$conn->connect_error);
}
// echo "connected";

$sql_retrieve = "SELECT * from patientDetails";
$stmt = $conn->prepare($sql_retrieve);
// $stmt->bind_param("sssi",$name,$position,$contactNumber,$salary);

$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
    echo "<table border='1' class='table mt-5'>";
    echo "<tr class='table-success'><th>Name</th><th>Age</th><th>Condition</th><th>Mobile Number</th></tr>";
   while( $rows = $result->fetch_assoc()){
    echo "<tr><th>".$rows['names']."</th><th>".$rows['age']."</th><th>".$rows['conditions']."</th><th>".$rows['contactNumber']."</th></tr>";
   }
   echo "</table>";
   }else{
    echo "No records";
   }
   
?>
</body>
</html>