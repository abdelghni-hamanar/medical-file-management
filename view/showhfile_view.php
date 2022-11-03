<?php
   require_once("../model/Services.php");
   $id = $_GET['id'];
   $row = GetUser($_GET['iduser']);
?>

<div class="col-md-3">
   <div class="profile-img">
      <img id="show-code-thumbnail" class="show-code-thumbnail-dark" src="data:image/jpeg;base64,<?php echo base64_encode($row['userpicture']);?>" />
   </div>
</div>
<div class="row">
   <div class="col-md-3">
      <label>ID carte d'identité</label>
   </div>
   <div class="col-md-6">
      <p><a href="?view=showuser&id=<?php echo $row['usercin']; ?>"><?php echo $row['usercin'];?></a></p>                                             
   </div>
</div>
<div class="row">
   <div class="col-md-3">
      <label>Nom</label>
   </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['userfirstname']." ".$row['userlastname'];  ?></p>
                                            </div>
</div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Email</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['usermail']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Téléphone</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['userphone']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Genre</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if($row["usergender"]==2){
                                                                echo "Female";
                                                        }
                                                        else {echo "Male"; }?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Statut familial</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php switch ($row["userstatut"]){
                                                            default  : echo "?"; break;
                                                            case 1 : echo "Célibataire"; break;
                                                            case 2 : echo "Marié(e)"; break;
                                                            case 3 : echo "Divorcé(e)"; break;
                                                            }
                                                        ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Adresse</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['useradress']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Ville</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['usercity']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Etat du compte</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php  if($row['userstate']==0){echo "<span class='text-success'>Compte actif</span>";}
                                                        else{echo "<span class='text-warning'>Compte désactivé</span>";}
                                                ?> </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Type</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p>
                                                <?php
                                            switch ($row['usertype']) {
                                                case 1:
                                                    echo "Patient";
                                                    break;
                                                case 2:
                                                    echo "Doctor";
                                                    break;
                                                case 3:
                                                    echo "Moderateur";
                                                    break;
                                            }

                                        ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Date de création</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['usercreated']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Dernière mise à jour</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['userupdated']; ?></p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>Dernier accès</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php if($row['useraccess']==NULL){echo"Jamais";}
                                                        else{echo $row['useraccess'];}
                                                ?></p>
                                            </div>
                                        </div>
<?php
   getactshfileX($id);
?>

