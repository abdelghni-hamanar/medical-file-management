<?php
require("heading_html.php");
require("../controller/login_controller.php");
if(!empty(isset($_SESSION["logged"]))){
  if($_SESSION["logged"]==1){
    header('Location: ../view/dashboard.php');
  }
}
    ?>
    <link href="../public/css/style1.css" rel="stylesheet">
    <div class="wrapper fadeInDown">
      <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon --></br></br>
        <div class="fadeIn first">
            <i class="fa fa-user fa-5x" aria-hidden="true" id="icon"></i>
        </div>
        <?php
        if(!empty(isset($_SESSION["logged"]))){
          if($_SESSION["logged"]==0){
            echo"Identifiant ou mot de passe incorrect, veuillez réessayer";
          }
        }
        ?>
        <!-- Login Form --></br></br></br>
        <form action="../controller/login_controller.php" method="POST">
          <input type="text" id="login" class="fadeIn second" name="mail" placeholder="ID">
          <input type="password" id="password" class="fadeIn third" name="password" placeholder="Mot de passe">
          <input type="submit" class="fadeIn fourth" value="Se connecter">
        </form>
        
        <!-- Remind Passowrd -->
        <div id="formFooter">
          <a class="underlineHover" href="#">Mot de passe oublié?</a>
        </div>
      </div>
    </div>
<?php
?>