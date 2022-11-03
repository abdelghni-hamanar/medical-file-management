<?php
require_once('heading_html.php');
require_once('../model/Services.php');

?>

        <link href='https://css.gg/gender-female.css' rel='stylesheet'>
        <link href='https://css.gg/gender-male.css' rel='stylesheet'>
<div class="wrapper fadeInDown">
  <h1>Utilisateurs</h1>
  <?php if($_SESSION["type"]!=1){ ?>
    <a href="?view=adduser"><p class="btn btn-success"><i class="glyphicon glyphicon-plus"></i><b> Ajouter un utilisateur</b></p></a>
    <?php } ?>
    <a href="?view=usersearch"><p class="btn btn-success"><i class="fa-solid fa-magnifying-glass"></i><b> Chercher un utilisateur</b></p></a>
  </br></br></br>
<table class="table">
  <div class='modal-header login-header'>
    <h4 class='modal-title'><i class="fa-solid fa-users"></i><b> Liste des utilisateurs</b></h4>
  </div>
</table>
<table id="example" class="table table-striped" style="width:100%">
  <thead class="thead-dark">
    <tr>
            <th scope="col">ID</th>
            <th scope="col">Prénom</th>
            <th scope="col">Nom</th>
            <th scope="col">Genre</th>
            <th scope="col">Date de naissance</th>
            <th scope="col">E-mail</th>
            <th scope="col">Options</th>
          </tr>
        </thead>
  <tbody>
      <?php  showusers();?>
    
    
  </tbody>
</table>
          </tbody>
       </table>