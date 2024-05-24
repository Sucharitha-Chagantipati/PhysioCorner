<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   if($_SERVER['REQUEST_METHOD']==='POST'){
    if(isset($_POST['email']) && isset($_POST['password'])){
        $email = $_POST['email'];
        $pass = $_POST['password'];
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

$sql = "SELECT email,passwords from admins where email = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s",$email);
$stmt->execute();
$result = $stmt->get_result();

if($result->num_rows > 0){
$row = $result->fetch_assoc();
   if($pass == $row['passwords']){
    header("location:adminsPage.php");
   }else{
    echo "Check Your Password";
}
}else{
    echo "Only Admins can Login";
}
    }else{
        echo "email and password not provided";
    }
   }
    ?>
</body>
</html>