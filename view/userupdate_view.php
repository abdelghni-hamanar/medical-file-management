<?php
require_once('heading_html.php');
require_once('../model/Services.php');

$row = feeluser($_GET['id']);
?>

<div class="wrapper fadeInDown">
<div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-user"></i><b> Mettre à jour le profil d'un utilisateur</b></h4>
                </div>
                <div class="modal-body">
                  <form action="../controller/updateuser_controller.php" method="POST" enctype="multipart/form-data">
                  <input id="userid" name="id" type="hidden" value="<?php echo $_GET["id"]; ?>">
                  <input id="userfirstname" name="userfirstname" placeholder="Prénom" required="true" <?php echo "value='".$row['userfirstname']."'" ?> type="text">
                  <input id="userlastname" name="userlastname" placeholder="Nom" required="true" <?php echo "value='".$row['userlastname']."'" ?> type="text">
                  <div class="input-group" style="height:50px">
                  <div class="form-group">
                        <div class="inputGroupContainer">
                           <div class="input-group">
                              <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                 <select class="form-control" name="usergender" style="height:50px">
                                    <option value="" disabled selected>Genre</option>   
                                    <option <?php if($row['usergender']==1){ echo "selected";}  ?> value="1">Male</option>
                                    <option <?php if($row['usergender']==2){ echo "selected";} ?> value="2">Female</option>
                                 </select>
                              </div>
                     </div></div></div>
                  <input id="userbirth" name="userbirth" placeholder="Date de naissance" required="true" <?php echo "value='".$row['userbirth']."'" ?> type="date">
                  <div class="form-group">
                              <input type="file" name="image"/>
                              <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> <! - 64 MB's worth in bytes →
                  </div>
                  <input id="usermail" name="usermail" placeholder="E-mail" required="true" <?php echo "value='".$row['usermail']."'" ?> type="text">
                  <div class="input-group" style="height:50px">
                     <div class="inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                           <select class="form-control" name="users" style="height:50px">
                              <option value="" disabled selected>Statut familial</option>
                              <option <?php if($row['userstatut']==1){ echo "selected";}  ?> value="1">Célibataire</option>
                              <option <?php if($row['userstatut']==2){ echo "selected";}  ?> value="2">Marié(e)</option>
                              <option <?php if($row['userstatut']==3){ echo "selected";}  ?> value="3">Divorcé(e)</option>
                              <option <?php if($row['userstatut']==4){ echo "selected";}  ?> value="4">Veuf(ve)</option>
                           </select>                 
                        </div>
                     </div>
                  </div>
                  <input id="usera" name="usera" placeholder="Adresse" required="true" <?php echo "value='".$row['useradress']."'" ?> type="text">
                  <input id="usercity" name="usercity" placeholder="Ville" required="true" <?php echo "value='".$row['usercity']."'" ?> type="text">
                  <input id="userphone" name="userphone" placeholder="Téléphone" required="true" <?php echo "value='".$row['userphone']."'" ?> type="text">
                  <div class="input-group" style="height:50px">
                     <div class="inputGroupContainer">
                        <div class="input-group" >
                           <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                              <select class="form-control" name="usert" style="height:50px">
                                 <option value="" disabled selected>Type d'utilisateur</option>
                                 <option <?php if($row['usertype']==1){ echo "selected";}  ?>  value="1">Patient</option>
                                 <option <?php if($row['usertype']==2){ echo "selected";}  ?> value="2">Docteur</option>
                                 <option <?php if($row['usertype']==3){ echo "selected";}  ?> value="3">Modérateur</option>
                              </select>
                        </div>
                     </div>
                  </div>
               </div></div>
               <div class="modal-footer">
                  <input class="btn btn-primary btn-md" type="submit" value="Modifier utilisateur"/>
                  
                </div>
                </form> 
            </div>
</div>