<?php
session_start();
include "db_conn.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']);

    if (empty($uname) || empty($pass)) {
        header("Location: index.php?error=Username and Password are required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

       
            if (password_verify($pass, $row['password'])) {
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: home.php");
                exit();
            } else {
                header("Location: index.php?error=Incorrect Password");
                exit();
            }
        } else {
            header("Location: index.php?error=Incorrect Username");
            exit();
        }
    }
} else {
    header("Location: index.php");
    exit();
}
?>
