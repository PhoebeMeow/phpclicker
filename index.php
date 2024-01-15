<?php
session_start();

if(!isset($_POST['click'])) {
    $_SESSION['clicks'] += 1;
}
if(!isset($_SESSION['clicks'])) {
    $_SESSION['clicks'] = 0;
}

if(!isset($_POST['upgrade1']) && !$_SESSION['clicks'] == 10) {
    echo 'Not enough clicks';
} else if($_SESSION['clicks'] >= 10) {
    $_SESSION['clicks'] += 10;
}

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<form method="post">
    <div class="position-absolute top-50 start-50 translate-middle">
        <input type="image" src="images/PHP_logo.png" height="150" width="150" name="click">
        <input type="button" name="upgrade1" value="Upgrade clicks">
    </div>
</form>

<p id="click-count">Clicks: <?php echo $_SESSION['clicks']; ?></p>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</html>