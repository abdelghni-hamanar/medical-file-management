<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if (isset($_GET['action'])) {
        $a=$_GET["action"];
        switch ($a){
            case "home": header('Location: view/dashboard.php');
            case "login": header('Location: view/login_view.php');
            case "logout": header('Location: view/logout_view.php');
            case "dashboard": header('Location: view/dashboard.php');

        }    
    }
    else{
        header('Location: view/login_view.php');
    }
    ?>
</body>
</html>