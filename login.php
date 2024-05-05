<?php
session_start();
include "db_conn.php";

function validate($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data; // corrected return statement
}

if(isset($_POST['uname']) && isset($_POST['password'])){

    $uname = validate($_POST['uname']); // corrected variable name
    $pass = validate($_POST['password']);

    if(empty($uname)) {
        header("location: index.php?error=User Name is required");
        exit();
    }
    else if (empty($pass)){
        header("location: index.php?error=password is required");
        exit();
    }    

    $sql = "SELECT * FROM users2 WHERE user_name='$uname' AND password='$pass'"; // corrected variable name

    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        echo "It queried it!";
        header("location: home.php");
        exit();   
    }    
    else{
        header("location: index.php?error=Incorrect user Name or Password");
        exit();
    }
}
else{
    header("location: index.php");
    exit();
}
?>
