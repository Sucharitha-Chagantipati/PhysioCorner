<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   if($_SERVER['REQUEST_METHOD'] === 'POST'){
    if(isset($_POST['name']) && isset($_POST['condition']) && isset($_POST['age']) && isset($_POST['number']) ){
        $name = $_POST['name'];
        $condition = $_POST['condition'];
        $age = $_POST['age'];
        $number = $_POST['number'];
        // check whether the email and passwords matches;
        $host="localhost";
        $username="root";
        $password="admin@20";
        $database = "blog";

     $conn = new mysqli($host,$username,$password,$database);

if($conn->connect_error){
    die("Error".$conn->connect_error);
}
 // echo "Connected";

 $sql = "INSERT INTO patientDetails(names,age,conditions,contactNumber) values(?,?,?,?)";
 $stmt = $conn->prepare($sql);
 $stmt->bind_param("siss",$name,$age,$condition,$number);
 if($stmt->execute()){
    echo "Inserted Successfully";
    header("location:index.php");
 }else{
    echo "error in process";
 }
 $stmt->close();
 $conn->close();

} else{
    echo "error in isset";
}
   }else{
    echo "error in post";
   }
    ?>
</body>
</html>