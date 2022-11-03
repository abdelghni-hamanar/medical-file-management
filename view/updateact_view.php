<?php
require_once('heading_html.php');
require_once('../model/Services.php');

$row = feelact($_GET['id']);
?>

<div class="wrapper fadeInDown">
       <div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-briefcase"></i><b> Modifier un acte</b></h4>
                </div>
                <div class="modal-body">
                        <form action="../controller/updateact_controller.php" method="POST" enctype="multipart/form-data">
                        <input id="idact" name="idact"  required="true" <?php echo "value='".$row['idact']."'" ?> type="text" >
                        <textarea id="actdesc" name="actdesc" placeholder="Description" required="true" <?php echo "value='".$row['actdescription']."'" ?> rows="4" cols="50"><?php echo $row['actdescription']; ?></textarea>
                         <div class="form-group">
                              <input type="file" name="pdf_file" id="pdf_file" accept=".pdf"/>
                              <input type="hidden" name="MAX_FILE_SIZE" value="67108864"/> <! - 64 MB's worth in bytes →
                              </div>
                            </div>
                            <?php
                                if(!empty(isset($_GET["id"]))){
                                    echo '<input id="idhfile" name="idhfile" required="true" value="'.$row['hfile_idhfile'].'" type="hidden">
                                          <input id="usercin" name="usercin" required="true" value="'.$row['user_usercin'].'" type="hidden"/>';
                                }
                                else{
                           ?>
                              <input id="idhfile" name="idhfile" placeholder="ID du dossier médical" required="true" <?php echo "value='".$row['hfile_idhfile']."'" ?> type="text">
                              <input id="usercin" name="usercin" placeholder="Cin d'utilisateur" required="true" <?php echo "value='".$row['user_usercin']."'" ?> type="hidden">
                            <?php
                                }
                            ?>
                        
               </div>
                <div class="modal-footer">
                <input class="btn btn-primary btn-md" type="submit" value="Modifier l'acte"/>
                   </form>
                </td>
             </tr>
          </tbody>
       </table>