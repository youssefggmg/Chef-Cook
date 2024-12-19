<?php
echo "in";
include "../config/db.php";
$name = $email = $password = "";
if (isset($_POST["userName"])) {
    $name = $_POST["userName"];
}
if (isset($_POST["email"])) {
    $email = $_POST["email"];
}
if (isset($_POST["password"])) {
    $password = $_POST["password"];
}
echo "1";
$query = "SELECT userEmail from user where userEmail = ?";
$stmt = $connection->prepare($query);
echo "\n 2";
$stmt->bind_param("s", $email);
echo "\n 3";
$stmt->execute();
echo "\n 4";
$result = $stmt->get_result();

if ($result->fetch_array() != false) {
    header("location: ../index.php?message=" . urldecode("this email is allredy used"));
} else {
    $account = "INSERT into `user` (userName,userEmail,password,FK_ROLE_ID) value (?,?,?,1)";
    $stmt = $connection->prepare($account);
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
    $stmt->bind_param("sss", $name, $email, $hashedPassword);
    $stmt->execute();
    if ($connection->connect_error) {
        echo "some thing went wrong";
        header("location : ../index.php?erorrmessage" . $connection->connect_error);
    } else {
        $query = "SELECT userID from user where userEmail = ?";
        $stmt = $connection->prepare($query);
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        $res = $result->fetch_assoc();
        $userID = $res['userID'];
        $connection->close();
        setcookie("userID", $userID, time() + 3600, "/");
        if ($res["FK_ROLE_ID"] = 1) {
            header("location:../user/home.php");
        } else {
            header("location:../admine/home.php");
        }
    }
}
