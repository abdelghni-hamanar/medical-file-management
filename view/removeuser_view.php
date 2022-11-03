<?php
require_once('../model/Services.php');

deleteuser($_GET['id']);
?>

<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Utilisateur supprimé!</strong> Opération terminée avec succès
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>

<?php
require_once("allusers_view.php");

?>
