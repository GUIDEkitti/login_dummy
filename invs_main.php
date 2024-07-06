<?php
session_start();
if (!isset($_SESSION['permission'])) {
    header('location: login.php');
}
$roll = $_SESSION['roll'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/" />
    <link rel="stylesheet" href="InsertTable.css">
</head>

<body>
    <nav class="tab">
        <?php
        if ($roll == 2) {
            echo '
            <button class="tablinks" onclick="openContent(event, "transactionTable")">admin</button>
            ';
        }
        ?>
        <button class="tablinks" onclick="openContent(event, 'subjectTable')">user</button>
    </nav>
</body>

</html>