<?php
require_once('../model/Services.php');

    deletevaccination($_GET['id']);
?>
<div class="alert alert-success" role="alert">
    <h4><i class="fa-solid fa-circle-check"></i>  Vaccin supprimé avec succès!</h4></br>
    <a class="btn btn-success"href="<?php echo $_SERVER['HTTP_REFERER']; ?>"><i class="fa-solid fa-circle-arrow-left"></i> Retour</a>
</div>