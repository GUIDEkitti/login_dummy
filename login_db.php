<?php
session_start();
include ('conn.php');

if (isset($_POST['login_INVS'])) {
    $user = $_POST['name'];
    $pass = $_POST['pass'];
    $sql = "SELECT * FROM `user_table` WHERE user_name='$user' ";
    $res = mysqli_query($conn, $sql);

    if ($res->num_rows == 1) {
        $row = $res->fetch_assoc();

        if ($pass == $row['password']) {
            if ($row['permission'] == 1) {
                if ($row['roll'] == 1 || $row['roll'] == 2) {
                    if ($row['roll'] == 2) {
                        //admin
                        $_SESSION['permission'] = $user;
                        $_SESSION['roll'] = 2;
                        echo "<script>window.location.href = 'invs_main.php'</script>";
                    } elseif ($row['roll'] == 1) {
                        //user
                        $_SESSION['permission'] = $user;
                        $_SESSION['roll'] = 1;
                        echo "<script>window.location.href = 'invs_main.php'</script>";
                    }
                } else {
                    echo "$user something wrong about userRoll, please contact admin";
                }
            } else {
                echo "$user is waiting for permission";
            }
        } else {
            echo "Incorrect password";
        }
    } else {
        echo "Incorrect user";
    }
}
?>