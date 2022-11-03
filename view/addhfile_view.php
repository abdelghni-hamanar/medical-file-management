<?php
require_once('heading_html.php');



?>




<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-briefcase"></i><b> Créer un dossier médical</b></h4>
                </div>
                <div class="modal-body">
                        <form action="../controller/addhfile_controller.php" method="POST">
                           <input id="hfilename" name="hfilename" placeholder="Titre du dossier médical" required="true" value="" type="text">
                           <textarea id="hfiledesc" name="hfiledesc" placeholder="Description" required="true" value="" rows="4" cols="50"></textarea>
                           <input id="hfilest" name="hfilest" placeholder="Ouvert, en cours, suspendu, ..." required="true" value="" type="text">
                           <?php
                                if(!empty(isset($_GET["iduser"]))){
                                    echo '<input id="iduser" name="usercin" required="true" value="'.$_GET["iduser"].'" type="hidden">';
                                }
                                else{
                           ?>
                           <input id="iduser" name="usercin" placeholder="Code carte d'identité" required="true" value="" type="text">
                            <?php
                                }
                            ?>
                    </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Créer le dossier"/>

                </div>
                </form> 
            </div>
</div>