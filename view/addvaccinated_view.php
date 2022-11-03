<?php
require_once('heading_html.php');



?>




<div class="wrapper fadeInDown">
<table class="table">
          <tbody>
              <h1><i class="glyphicon glyphicon-plus"></i><b> Vacciner un patient</b></h1>
             <tr>
                <td colspan="1">
                   <form action="../controller/addvaccinated_controller.php" method="POST" class="well form-horizontal">
                      <fieldset>
                         <div class="form-group">
                            <label class="col-md-4 control-label">CIN patient</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="user_usercin" name="user_usercin" placeholder="CIN Patient" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                         <div class="form-group">
                            <label class="col-md-4 control-label">ID Vaccin</label>
                            <div class="col-md-8 inputGroupContainer">
                               <div class="input-group"><span class="input-group-addon"><i class="glyphicon glyphicon-file"></i></span><input id="vaccination_idvaccination" name="vaccination_idvaccination" placeholder="ID Vaccin" class="form-control" required="true" value="" type="text"></div>
                            </div>
                         </div>
                      </fieldset>
                      <div class="input-group"><span class="input-group-addon"><input class="add-project" type="submit" value="Ajouter vaccination"></span></div>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>