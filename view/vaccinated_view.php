<?php
 require_once('heading_html.php');
 require_once('../model/Services.php');

$id = $_GET['id'];

?>


<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-plus"></i><b> Vacciner </b></h4>
                </div>
                <div class="modal-body">
                <form action="../controller/vaccinted_controller.php" method="POST" class="well form-horizontal">
                <div class="input-group" style="height:50px">
                     <div class="inputGroupContainer">
                     <div class="input-group">
                           <input id="userid" name="usercin" type="hidden" value="<?php echo $_GET["id"]; ?>">
                           <select class="form-control" name="idvaccination" style="height:50px">
                              <option value="" disabled selected>Choisissez un vaccin</option>
                              <?php getvaccinslabel(); ?>
                           </select>                 
                        </div>
                     </div>
                  </div>
                </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Vacciner"/></div>
                </form>