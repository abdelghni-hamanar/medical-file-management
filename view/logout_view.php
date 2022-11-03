<?php
require("heading_html.php");
require("../model/login_model.php");
logout();
header ("Refresh: 5;URL=login_view.php");
?>

<link href="../public/css/style1.css" rel="stylesheet">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon --></br></br>
    <div class="fadeIn first">
        <p><a href="login_view.php" class="text-success">Déconnecté avec succès.</a></p>
        <p><a href="login_view.php" class="text-success">Au revoir, à la prochaine.</a></p>
        </br>
        </br>
    </div>


  </div>
</div>
