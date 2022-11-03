<?php
require_once('heading_html.php');



?>
<div class="wrapper fadeInDown">
<div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-user"></i><b> Ajouter un utilisateur</b></h4>
                </div>
                <div class="modal-body">
                  <form action="../controller/adduser_controller.php" method="POST" enctype="multipart/form-data">
                  <input id="usercin" name="usercin" placeholder="ID de la carte d'identité" required="true" value="" type="text">
                  <input id="userpassword" name="userpassword" placeholder="Mot de passe" required="true" value="" type="password">
                  <input id="userfirstname" name="userfirstname" placeholder="Prénom" required="true" value="" type="text">
                  <input id="userlastname" name="userlastname" placeholder="Nom" required="true" value="" type="text">
                  <div class="input-group" style="height:50px">
                  <div class="form-group">
                        <div class="inputGroupContainer">
                           <div class="input-group">
                              <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                                 <select class="form-control" name="usergender" style="height:50px">
                                    <option value="" disabled selected>Genre</option>   
                                    <option value="1">Male</option>
                                    <option value="2">Female</option>
                                 </select>
                              </div>
                     </div></div></div>
                  <input id="userbirth" name="userbirth" placeholder="Date de naissance" required="true" value="" type="date">
                  <div class="form-group">
                              <input type="file" name="image"/>
                              <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> <! - 64 MB's worth in bytes →
                  </div>
                  
                  <input id="usermail" name="usermail" placeholder="E-mail" required="true" value="" type="text">
                  <div class="input-group" style="height:50px">
                     <div class="inputGroupContainer">
                     <div class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
                           <select class="form-control" name="users" style="height:50px">
                              <option value="" disabled selected>Statut familial</option>
                              <option value="1">Célibataire</option>
                              <option value="2">Marié(e)</option>
                              <option value="3">Divorcé(e)</option>
                              <option value="4">Veuf(ve)</option>
                           </select>                 
                        </div>
                     </div>
                  </div>
                  <input id="usera" name="usera" placeholder="Adresse" required="true" value="" type="text">
                  <input id="usercity" name="usercity" placeholder="Ville" required="true" value="" type="text">
                  <input id="userphone" name="userphone" placeholder="Téléphone" required="true" value="" type="text">
                  <div class="input-group" style="height:50px">
                     <div class="inputGroupContainer">
                        <div class="input-group" >
                           <span class="input-group-addon" style="max-width: 100%;"><i class="glyphicon glyphicon-list"></i></span>
                              <select class="form-control" name="usert" style="height:50px">
                                 <option value="" disabled selected>Type d'utilisateur</option>
                                 <option value="1">Patient</option>
                                 <option value="2">Docteur</option>
                                 <option value="3">Modérateur</option>
                              </select>
                        </div>
                     </div>
                  </div>
               </div></div>
               <div class="modal-footer">
                  <input class="btn btn-primary btn-md" type="submit" value="Créer le compte utilisateur"/>
                </div>
                </form> 
            </div>
</div>
