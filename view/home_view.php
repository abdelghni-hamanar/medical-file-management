<?php

require_once("../controller/home_controller.php");
require_once("../model/services.php");


if($_SESSION["type"]!=1){
?>
<h1>Gestionnaire des dossiers médicaux en ligne</h1>
            <div class="modal-header login-header">
                <h4 class='modal-title'><i class="fa-solid fa-magnifying-glass"></i><b> Chercher des utilisateurs</b></h4>
                </div>
                <div class="modal-body">
                    <form action="?view=usersearch" method="POST" enctype="multipart/form-data">
                    <input id="usercin" name="usercin" placeholder="ID de la carte d'identité" required="true" value="<?php if(isset($_POST['usercin'])){echo $_POST["usercin"];} ?>" type="text">
                    </form>
                </div>
<table class="table">
  <div class='modal-header login-header'>
    <h4 class='modal-title'><i class="glyphicon glyphicon glyphicon-tasks"></i><b> Statistiques</b></h4>
  </div>
</table>

<div class="card-columns">
    <div class="card text-white bg-dark mb-3" >
    <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcountusers();?></div>
                    <div class="card-text">Utilisateurs</div>
                </div>
                <script src="https://kit.fontawesome.com/ff1226bb3a.js" crossorigin="anonymous"></script>
                <a href="?view=users"><div class="icon-circle bg-white-50 text-white"><i class='fas fa-user fa-4x'></i></div></a>
            </div>
        </div>
        </div>
    <div class="card text-white bg-primary mb-3" >
    <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcountvaccins();?></div>
                    <div class="card-text">Vaccins</div>
                </div>
                <a href="?view=vaccin"><div class="icon-circle bg-white-50 text-white"><i class='fas fa-syringe fa-4x'></i></div></a>
            </div>
        </div>
    </div>
    <div class="card text-white bg-success mb-3" >
    <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcounthfiles();?></div>
                    <div class="card-text">Dossiers médicaux</div>
                </div>
                <a href="?view=allhfiles"><div class="icon-circle bg-white-50 text-white"><i class="fa-solid fa-book-medical fa-4x"></i></div></a>
            </div>
        </div>
    </div>
    <div class="card text-white bg-info mb-3" >
        <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcountdoctors();?></div>
                    <div class="card-text">Docteurs</div>
                </div>
                <div class="icon-circle bg-white-50 text-white"><i class="fa-solid fa-user-doctor fa-4x"></i></div>
            </div>
        </div>
    </div>
    <div class="card text-white bg-danger mb-3" >
    <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcountacts();?></div>
                    <div class="card-text">Actes</div>
                </div>
                <a href="?view=allacts"><div class="icon-circle bg-white-50 text-white"><i class="fa-solid fa-file-medical fa-4x"></i></div></a>
            </div>
        </div>
    </div>
    <div class="card text-white bg-warning mb-3" >
    <div class="card-body px-4">
            <div class="d-flex justify-content-between align-items-center mb-2">
                <div class="me-2">
                    <div class="display-3 text-white"><?php echo getcountvaccinated();?></div>
                    <div class="card-text">Vaccinations</div>
                </div>
                <div class="icon-circle bg-white-50 text-white"><i class='fas fa-syringe fa-4x'></i></div>
            </div>
        </div>
    </div>
    
</div><div style="height:200px"></div>

<?php } ?>
<?php 

    if($_SESSION["type"]==1)
    {
       include_once("patient_view.php");
    }
    
    
?>
