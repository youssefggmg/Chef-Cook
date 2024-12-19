<?php
echo "Hello, World!";
include "../config/db.php";
$email = $password ="";
if(isset($_POST['email'])){
    $email = $_POST['email'];
}
if(isset($_POST['password'])){
    $password = $_POST['password'];
}
$sql = "SELECT * FROM user WHERE userEmail = ?";
$stmt = $connection->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$Repose = $stmt->get_result();
$res = $Repose->fetch_assoc();
$userpassword= $res['password'];
if (!$res["userEmail"]) {
    header("location: ../pages/signIn.php?message=" .urldecode("somthing is not correct try again"));
}
elseif ($res["userEmail"]) {
    if (!password_verify($password, $userpassword)) {
        header("location: ../pages/signIn.php?message=" .urldecode("somthing is not correct try again"));
    }
    elseif (password_verify($password, $userpassword)) {
        setcookie("userID",$res["userID"],time()+ 3600, "/");
        if ($res["FK_ROLE_ID"]==1) {
            header("location: ../user/home.php");
        }else{
            header("location: ../admine/home.php");
        }
    }
    
}

?>