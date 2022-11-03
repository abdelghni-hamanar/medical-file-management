<?php
require_once('heading_html.php');
require_once("../model/userclass.php");
require_once("../model/connect.php");

?>
<div class="wrapper fadeInDown">
<div class="modal-content">
                <div class="modal-header login-header">
                <h4 class='modal-title'><i class="glyphicon glyphicon-user"></i><b> Chercher des utilisateurs</b></h4>
                </div>
                <div class="modal-body">
                  <form action="" method="POST" enctype="multipart/form-data">
                  <input id="usercin" name="usercin" placeholder="ID de la carte d'identité" required="true" value="<?php if(isset($_POST['usercin'])){echo $_POST["usercin"];} ?>" type="text">
                  <div class="modal-footer">
                  <input class="btn btn-primary text-white btn-md" type="submit" value="Rechercher">
                </div>
                </form>

  <?php
   if(isset($_POST['usercin']))
   {
      $cin = $_POST['usercin'];
      $string = 'SELECT * FROM user WHERE usercin LIKE "%'.$cin.'%";';
      $dbh = dbconnect();
      $sth = $dbh->prepare($string);
      $sth->execute();
      $i=0;
      
            while($row = $sth->fetch())
            {   
               if($i==0){
                  echo "<table class='table table-bordered'>";
                  echo "<thead class='thead-dark'>";
                  echo "<tr>";
                           echo "<th scope='col'>Photo</th>";
                           echo "<th scope='col'>ID</th>";
                           echo "<th scope='col'>Prénom</th>";
                           echo "<th scope='col'>Nom</th>";
                           echo "<th scope='col'>Genre</th>";
                           echo "<th scope='col'>Date de naissance</th>";
                           echo "<th scope='col'>E-mail</th>";
                           echo "<th scope='col'>Options</th>";
                         echo "</tr>";
                       echo "</thead>";
                 echo"<tbody>";
               $i++;
            }
                echo "<tr>";
                echo "<th scope='col'><img id='show-code-thumbnail' class='show-code-thumbnail-dark' style='width:80px' src='Data:image/jpeg;base64,".base64_encode($row['userpicture'])."' /></th>";
                echo "<th scope='col'>".$row["usercin"]."</th>";
                echo "<th scope='col'>".$row["userfirstname"]."</th>";
                echo "<th scope='col'>".$row["userlastname"]."</th>";
                if ($row["usergender"]==1) echo " <th scope='col'><i class='fa-solid fa-mars'></i></th>";
                else{
                  echo "<th scope='col'><i class='fa-solid fa-venus'></i></th>";
                }
                echo "<th scope='col'>".$row["userbirth"]."</th>";
                echo "<th scope='col'>".$row["usermail"]."</th>";
                echo "<th scrop='col' style='text-align:center'>
                                       <a title='Consulter le profil'class='btn btn-success' href='?view=showuser&id=".$row["usercin"]."'><i class='fa-solid fa-id-card-clip fa-lg'></i></a>
                                        <a title='Modifier le compte' class='btn btn-warning' href='?view=updateuser&id=".$row["usercin"]."'><i class='fa-solid fa-user-pen fa-lg'></i></a>
                                        <a title='Supprimer ce compte' class='btn btn-danger' href='?view=removeuser&id=".$row["usercin"]."'><i class='fa-solid fa-trash-can fa-lg'></i></a></th>";
                echo "</tr>";
            }
               echo"</tbody>";
               echo"</table></div>";
               
            $sth->execute();
            if(empty($sth->fetch())){
               echo "<div class='alert alert-primary' role='alert'>";
               echo "Aucun utilisateur trouvé !";
               echo "</div>";
         }
            }
?>
