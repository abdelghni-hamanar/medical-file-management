<?php
require_once('heading_html.php');
require_once('../model/Services.php');
$row = feelhfile($_GET['id']);

?>




<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-briefcase"></i><b> Créer un dossier médical</b></h4>
                </div>
                <div class="modal-body">
                        <form action="../controller/updatehfile_controller.php" method="POST">
                           <input id="idhfile" name="idhfile" placeholder="Titre du dossier médical" required="true" <?php echo "value='".$row['idhfile']."'"; ?> type="hidden">
                           <input id="hfilename" name="hfilename" placeholder="Titre du dossier médical" required="true" <?php echo "value='".$row['hfilename']."'"; ?> type="text">
                           <textarea id="hfiledesc" name="hfiledesc" placeholder="Description" required="true"  rows="4" cols="50"><?php echo $row['hfiledescription']; ?></textarea>
                           <input id="hfilest" name="hfilest" placeholder="Ouvert, en cours, suspendu, ..." required="true" <?php echo "value='".$row['hfilestate']."'"; ?> type="text">
                           <?php
                           if(!empty(isset($_GET["iduser"]))){
                            echo '<input id="iduser" name="usercin" required="true" value="'.$row['user_usercin'].'" type="hidden">';
                           }
                           ?>
                           <input id="iduser" name="usercin" placeholder="Code carte d'identité" required="true" <?php echo "value='".$row['user_usercin']."'" ?> type="hidden">

                    </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Modifier le dossier"/>

                </div>
                </form> 
            </div>
</div>