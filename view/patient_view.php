<?php
require_once('heading_html.php');
require_once('../model/Services.php');
$row;
if(isset($_SESSION["mail"]))
{
    $row = showprofileP($_SESSION["mail"]);
}

if(isset($_GET["id"]))
{
    $row = showprofileP($_GET["id"]);
}

?>
        <link href='https://css.gg/gender-female.css' rel='stylesheet'>
        <link href='https://css.gg/gender-male.css' rel='stylesheet'>
<div class="container emp-profile">
            <form method="post">
                <div class="row">
                    <div class="col-md-2">
                        <div class="profile-img">
                            <img id="show-code-thumbnail" class="show-code-thumbnail-dark" src="data:image/jpeg;base64,<?php echo base64_encode($row['userpicture']);?>" />
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="profile-head">
                                    <h5>
                                        <?php echo $row['userfirstname']." ".$row['userlastname']; ?>
                                    </h5>
                                    <h6>
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
                                    </h6>
                        </div>
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item active">
                                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><i class='glyphicon glyphicon-info-sign text-primary'></i> A propos  </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><i class='glyphicon glyphicon-briefcase text-primary'></i> Dossiers médicaux</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-1">
                        <!-- vide -->
                    </div>
                    <div class="col-md-10">
                        <div class="tab-content profile-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                        <div class="row">
                                            <div class="col-md-3">
                                                <label>ID carte d'identité</label>
                                            </div>
                                            <div class="col-md-6">
                                                <p><?php echo $row['usercin']; ?></p>
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
                            </div>
                            <div class="tab-pane fade timeline" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            <?php 
                                if(isset($_SESSION["mail"]))
                                {
                                    $row = showhfilex($_SESSION["mail"]);
                                }

                                if(isset($_GET["id"]))
                                {
                                    $row = showhfilex($_GET["id"]);
                                }
                            ?>
                            </div>
                        </div>
                        </div>
                        </div>
                    </div>
                    
                </div>
            </form>   
        </div>