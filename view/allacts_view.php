<?php
require_once('heading_html.php');
require_once('../model/Services.php');

?>




<h1>Actes sur les dossiers médicaux</h1>
<div class="wrapper fadeInDown">
  
  <a href="?view=addact"><p class="btn btn-success"><i class="glyphicon glyphicon-plus"></i><b> Ajouter un acte</b></p></a>
</br></br></br>
<table class="table">
  <div class='modal-header login-header'>
    <h4 class='modal-title'><i class="fa-solid fa-notes-medical"></i><b> Liste de tous les actes</b></h4>
  </div>
</table>
<table id="example" class="table table-striped" style="width:100%">
  <thead class="thead-dark">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Date de création</th>
      <th scope="col">Dernière mise à jour</th>
      <th scope="col">Description</th>
      <th scope="col">Fichier PDF</th>
      <th scope="col">ID dossier médical</th>
      <th scope="col">Docteur</th>
      <th scope="col">Options</th>
    </tr>
  </thead>
  <tbody>
      <?php  showhacts();?>
    
    
  </tbody>
</table>
          </tbody>
       </table>