<?php
require_once('heading_html.php');



?>

<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-briefcase"></i><b> Ajouter un acte</b></h4>
                </div>
                <div class="modal-body">
                        <form action="../controller/addact_controller.php" method="POST" enctype="multipart/form-data">
                        <textarea id="actdesc" name="actdesc" placeholder="Description" required="true" value="" rows="4" cols="50"></textarea>
                         <div class="form-group">
                              <input type="file" name="pdf_file" id="pdf_file" accept=".pdf"/>
                              <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> <! - 64 MB's worth in bytes →
                              </div>
                            </div>
                            <?php
                                if(!empty(isset($_GET["idhfile"]))){
                                    echo '<input id="idhfile" name="idhfile" required="true" value="'.$_GET["idhfile"].'" type="hidden">';
                                }
                                else{
                           ?>
                              <input id="idhfile" name="idhfile" required="true" value="" type="text">
                            <?php
                                }
                            ?>
                        
               </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Ajouter l'acte"/>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>