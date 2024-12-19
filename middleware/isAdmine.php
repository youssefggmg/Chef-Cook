<?php
if(empty($_COOKIE["userID"])){
    header("Location: ../pages/signIn.php?message=" . urlencode("you are not even loged in "));
}
if ($_COOKIE["userID"]!=2) {
    header("Location: ../pages/signIn.php?message=".urldecode("your account can not get to this page "));
}
?>