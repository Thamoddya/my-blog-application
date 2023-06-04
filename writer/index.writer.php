<?php
session_start();
if (empty($_SESSION['AuthToken'])) {
    echo "Not a valid User";
    header("Location: ../login.php");
} else {
    echo $_SESSION['AuthToken'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KNOWLEDGE ADDICT - WRITER </title>
    <?php
    include_once "./components/head.imports.php";
    include_once "./components/viewTraffic.component.php";
    ?>
</head>

<body>

</body>

</html>