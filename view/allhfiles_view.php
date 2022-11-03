<?php
require_once('heading_html.php');
require_once('../model/Services.php');

?>



<h1>Dossiers médicaux</h1>
<div class="wrapper fadeInDown">
<?php if($_SESSION["type"]!=1){ ?>
  <a href="?view=addhfile"><p class="btn btn-success"><i class="glyphicon glyphicon-plus fa-lg"></i><b> Créer un dossier</b></p></a>
<?php } ?>
</br></br></br>
<table class="table">
  
  <div class='modal-header login-header'>
    <h4 class='modal-title'><i class="glyphicon glyphicon-briefcase fa-lg"></i><b> Liste des dossiers médicaux</b></h4>
  </div>
</table>
<table id="example" class="table table-striped" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Titre du dossier médical</th>
      <th scope="col">Description</th>
      <th scope="col">Date de création</th>
      <th scope="col">Statut du dossier</th>
      <th scope="col">Patient</th>
      <th scope="col">Créateur</th>
      <th scope="col">Options</th>
    </tr>
</div>
  </thead>
  <tbody>
      <?php  showhfiles();?>
  </tbody>
</table>
          </tbody>
       </table>
       