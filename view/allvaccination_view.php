<?php
require_once('heading_html.php');
require_once('../model/Services.php');

?>




<div class="wrapper fadeInDown">
  <h1>Vaccins</h1>
  <?php if($_SESSION['type']==3){ ?>
  <a href="?view=addvaccin"><p class="btn btn-success"><i class="glyphicon glyphicon-plus"></i><b> Ajouter un vaccin</b></p></a>
<?php }?>
</br></br></br>
<table class="table">
  <tbody>
      <div class='modal-header login-header'>
                  <h4 class='modal-title'><i class="glyphicon glyphicon-user"></i><b> Liste des vaccins</b></h4>
      </div>
      <table id="example" class="table table-striped" style="width:100%">
        <thead class="thead-dark">
          <tr>
      <th scope="col">ID</th>
      <th scope="col">Libellé</th>
      <th scope="col">Description</th>
      <?php if($_SESSION['type']==3){ ?> <th scope="col">Options</th><?php } ?>
    </tr>
  </thead>
  <tbody>
      <?php  showvaccins();?>
    
    
  </tbody>
</table>
          </tbody>
       </table>