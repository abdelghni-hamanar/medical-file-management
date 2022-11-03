<?php
    require_once("connect.php");
    require_once("userclass.php");
    require_once("actclass.php");
    require_once("hfileclass.php");
    require_once("vaccinatedclass.php");
    require_once("vaccinclass.php");

    function showusers()
    {
            $dbh = dbconnect();
            $sth = $dbh->prepare('SELECT *  FROM user');
            $sth->execute();
            while($row = $sth->fetch())
            {
                echo "<tr>";
                echo "<td scope='col'>".$row["usercin"]."</td>";
                echo "<td scope='col'>".$row["userfirstname"]."</td>";
                echo "<td scope='col'>".$row["userlastname"]."</td>";
                if($row["usergender"]==2){
                    echo "<td scope='col'><i class='gg-gender-female'></i></td>";
                }
                else { echo "<td scope='col'><i class='gg-gender-male'></i></td>";}
                echo "<td scope='col'>".$row["userbirth"]."</td>";
                echo "<td scope='col'>".$row["usermail"]."</td>";
                echo "<td scrop='col' style='text-align:center'>  <a href='?view=showuser&id=".$row["usercin"]."'><i class='fa-solid fa-id-card-clip text-secondary fa-lg' title='Consulter le profil'></i></a> ";
                if($_SESSION['type']==3){ echo "<a href='?view=updateuser&id=".$row["usercin"]."'><i class='fa-solid fa-user-pen text-info fa-lg' title='Modifier ce compte'></i></a> 
                 <a href='?view=removeuser&id=".$row["usercin"]."'><i class='fa-solid fa-trash-can text-danger fa-lg' title='Supprimer ce compte'></i></a></tr>";
                }echo "</tr>";
            }

    }

    function showhfiles()
    {
            $dbh = dbconnect();
            $sth = $dbh->prepare('SELECT *  FROM hfile');
            $sth->execute();
            while($row = $sth->fetch())
            {   
                echo "<tr>";
                echo "<th scope='col'>".$row["idhfile"]."</th>";
                echo "<th scope='col'>".$row["hfilename"]."</th>";
                echo "<th scope='col'>".$row["hfiledescription"]."</th>";
                echo "<th scope='col' style='width:110px'>".$row["hfilecreated"]."</th>";
                echo "<th scope='col'>".$row["hfilestate"]."</th>";
                echo "<th scope='col' style='width:110px'><a href='?view=showfile&id=".$row["user_usercin"]."'>".$row["user_usercin"]."</a></th>";
                echo "<th scope='col' style='width:110px'><a href='?view=showfile&id=".$row["user_usercin1"]."'>".$row["user_usercin1"]."</a></th>";
                echo "<th scrop='col' style='text-align:center'> <a href='?view=showhfile&id=".$row["idhfile"]."&iduser=".$row["user_usercin"]."'><i class='glyphicon glyphicon-briefcase text-info'></i></a> 
                                        <a href='?view=updatehfile&id=".$row["idhfile"]."'><i class='glyphicon glyphicon-pencil text-warning'></i></a> 
                                        <a href='?view=removehfile&id=".$row["idhfile"]."'><i class='glyphicon glyphicon-remove-sign text-danger'></i></a>";
                echo "</tr>";
                echo "</div>";
                
              echo "</div>";
                
            }
            

    }

    function showvaccins()
    {
            $dbh = dbconnect();
            $sth = $dbh->prepare('SELECT *  FROM vaccination');
            $sth->execute();
            while($row = $sth->fetch())
            {
                echo "<tr>";
                echo "<th scope='col'>".$row["idvaccination"]."</th>";
                echo "<th scope='col'>".$row["label"]."</th>";
                echo "<th scope='col'>".$row["vaccinationdescription"]."</th>";
                if($_SESSION['type']==3){ echo "<th scrop='col' style='width:230px'> <a class='btn btn-warning' href='?view=updatevaccin&id=".$row["idvaccination"]."'><i class='glyphicon glyphicon-pencil'></i> Modifier</a> 
                    <a class='btn btn-danger' href='?view=removevaccin&id=".$row["idvaccination"]."'><i class='fa-solid fa-trash-can'></i> Supprimer</a></th>";
                }
                echo "</tr>";
            }

    }

    function showvacciateds()
    {
            $dbh = dbconnect();
            $sth = $dbh->prepare('SELECT *  FROM vaccinated');
            $sth->execute();
            while($row = $sth->fetch())
            {
                echo "<tr>";
                echo "<th scope='col'>".$row["idvaccinated"]."</th>";
                echo "<th scope='col'>".$row["vaccinationdate"]."</th>";
                echo "<th scope='col'>".$row["user_usercin"]."</th>";
                echo "<th scope='col'>".$row["vaccination_idvaccination"]."</th>";
                echo "</tr>";
            }

    }


    function showhacts()
    {
            $dbh = dbconnect();
            $sth = $dbh->prepare('SELECT *  FROM act');
            $sth->execute();
            while($row = $sth->fetch())
            {
                echo "<tr>";
                echo "<th scope='col'>".$row["idact"]."</th>";
                echo "<th scope='col'>".$row["actcreated"]."</th>";
                echo "<th scope='col'>".$row["actupdated"]."</th>";
                echo "<th scope='col'>".$row["actdescription"]."</th>";
                echo "<th scope='col'>"."<a href='../controller/file_controller.php?id=".$row["idact"]."'>"."<i class='glyphicon glyphicon glyphicon-file'></i>PDF"."</a>"."</th>";
                echo "<th scope='col'>".$row["hfile_idhfile"]."</th>";
                echo "<th scope='col'>".$row["user_usercin"]."</th>";
                echo "<th scrop='col' style='text-align:center'>
                                        <a href='?view=updateact&id=".$row["idact"]."'><i class='glyphicon glyphicon-pencil text-warning'></i></a> 
                                        <a href='?view=removeact&id=".$row["idact"]."'><i class='glyphicon glyphicon-remove-sign text-danger'></i></a></th>";
                echo "</tr>";
            }
    }

    function GetUser($cin){
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM user WHERE usercin=?');
        $sth->bindParam(1, $cin, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch();
}

function GetHfilesuser($cin)
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT *  FROM hfile WHERE user_usercin=?');
    $sth->bindParam(1, $cin, PDO::PARAM_STR);
    $sth->execute();
    while($row = $sth->fetch())
    {
                            echo "<tr>";
                                    echo"<th scope='row'>".$row['idhfile']."</th>";
                                    echo "<td>".$row['hfilename']."</td>";
                                    echo"<td>".$row['hfiledescription']."</td>";
                                    echo"<td>".$row['hfilecreated']."</td>";
                                    echo"<td>".$row['hfileupdated']."</td>";
                                    echo"<td>".$row['hfilestate']."</td>";
                                    echo "<th scrop='col' style='text-align:center'>  <a href='?view=showhfile&id=".$row["idhfile"]."'><i class='glyphicon glyphicon-briefcase text-info'></i></a> 
                                        <a href='?view=updatehfile&id=".$row["idhfile"]."'><i class='glyphicon glyphicon-pencil text-warning'></i></a> 
                                        <a href='?view=removehfile&id=".$row["idhfile"]."'><i class='glyphicon glyphicon-remove-sign text-danger'></i></a>";
                
                            echo "</tr>";
    }
    
                            
}


function getactshfile($id)
{   
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM act LEFT JOIN user ON user.usercin=act.user_usercin WHERE hfile_idhfile=? ORDER BY act.actcreated DESC');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        if(!empty(isset($_GET['iduser']))){
            $iduser=$_GET['iduser'];
        }
        else{
            $iduser=$_GET['id'];
        }
        while( $row = $sth->fetch())
        {
            echo('
            <div class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID acte: '.$row["idact"].'</h5>
                <small>Date de création: '.$row["actcreated"].'</br>Dernière mise à jour:'.$row["actupdated"].'</small>
              </div>
              <p class="mb-1">'.$row["actdescription"].'</p>
              <h5><a class="btn btn-warning text-dark" href="../controller/file_controller.php?id='.$row["idact"].'"><i class="glyphicon glyphicon-download"></i> PDF</a></h5>
              <small>Docteur ID: <a href="dashboard.php?view=showuser&id='.$row["user_usercin"].'">'.$row["user_usercin"].'</a> - Nom et Prénom: '.$row["userfirstname"].' '.$row["userlastname"].'</small>
              <th scrop="col" style="text-align:center">
              <a class="badge bg-danger" href="?view=removeact&id='.$row["idact"].'"><i class="fa-solid fa-trash-can fa-lg"></i> Supprimer</a>
                    <a class="badge bg-success" href="?view=updateact&id='.$row["idact"].'&iduser='.$iduser.'"><i class="fa-solid fa-file-pen fa-lg"></i> Modifier</a> 
                    
            </div>');
        }
        

}
function getactshfileX($id)
{   
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *, COUNT(idact) AS count_total FROM hfile LEFT JOIN user ON hfile.user_usercin1=user.usercin LEFT JOIN act ON hfile.idhfile=act.hfile_idhfile WHERE idhfile=?');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        while( $row = $sth->fetch())
        {
            echo '<div class="panel panel-info">
            <div class="panel-heading">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID du dossier médical <b>'.$row["idhfile"].'</b></h5>
                <small><span class="badge bg-primary rounded-pill ">Nombre d\'actes: '.$row["count_total"].'</span></small>
                </div>
                Créateur du dossier: <a href="dashboard.php?view=showuser&id='.$row["user_usercin"].'"<b>'.$row['userfirstname'].' '.$row['userlastname'].'</a></b></br>
                Date de création: <b>'.$row['hfilecreated'].'</b></br>
                Description du dossier médical: <b>'.$row['hfiledescription'].'</b></br>
                Dernière mise à jour: <b>'.$row['hfileupdated'].'</b></br></br>
                <th scrop="col">
                    <a title="Modifier ce dossier médical" class="badge bg-success" href="?view=updatehfile&id='.$row["idhfile"].'&iduser='.$row["user_usercin"].'"><i class="fa-solid fa-file-pen fa-lg"></i> Modifier</a> 
                    <a title="Supprimer ce dossier médical" class="badge bg-danger" href="?view=removehfile&id='.$row["idhfile"].'"><i class="fa-solid fa-trash-can fa-lg"></i></i> Supprimer</a></br></th>
                
            </div>
            <div class="list-group">';
            getactshfile($id);
            echo '<a  title="Ajouter un acte" href="?view=addact&idhfile='.$id.'"class="btn btn-success text-light"><i class="glyphicon glyphicon-plus fa-lg"></i> Ajouter un acte médical</a></br>';
        }
        
}
function getactshfilesX($id)
{   
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM hfile LEFT JOIN user ON hfile.user_usercin1=user.usercin  WHERE hfile.user_usercin=? ORDER BY hfile.hfilecreated DESC');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        while( $row = $sth->fetch())
        {
            echo '<div class="panel panel-info">
            <div class="panel-heading">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID du dossier médical <b>'.$row["idhfile"].'</b></h5>
                <small><span class="badge bg-primary rounded-pill ">Nombre d\'actes: '.countacts($row['idhfile']).'</span></small>
                </div>
                Créateur du dossier: <a href="dashboard.php?view=showuser&id='.$row["usercin"].'"><b>'.$row['userfirstname'].' '.$row['userlastname'].'</a></b></br>
                Date de création: <b>'.$row['hfilecreated'].'</b></br>
                Dernière mise à jour: <b>'.$row['hfileupdated'].'</b></br>
                Etat du dossier: <b>'.$row['hfilestate'].'</b></br>
                    <a class="badge bg-danger" href="?view=removehfile&id='.$row["idhfile"].'"><i class="fa-solid fa-trash-can fa-lg"></i> Supprimer</a>
                    <a class="badge bg-success" href="?view=updatehfile&id='.$row["idhfile"].'&iduser='.$row["user_usercin"].'"><i class="fa-solid fa-file-pen fa-lg"></i> Modifier</a>
                
            
            </div>
            <div class="list-group">';
            getactshfile($row['idhfile']);
            echo '<a href="?view=addact&idhfile='.$row["idhfile"].'"class="btn btn-success text-light"><i class="glyphicon glyphicon-plus fa-lg"></i> Ajouter un acte médical</a></br></div></div>';
        }
    }
function countacts($id){
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT COUNT(*) AS total FROM act WHERE hfile_idhfile= ? LIMIT 1');
        $sth->bindParam(1, $id, PDO::PARAM_STR);
        $sth->execute();
        $user = $sth->fetch();
        return $user['total'];
    }


function feeluser($cin)
{
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM user WHERE usercin=?');
        $sth->bindParam(1, $cin, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch();
        
}


function deleteuser($cin)
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('DELETE FROM user WHERE usercin=?');
    $sth->bindParam(1, $cin, PDO::PARAM_STR);
    $sth->execute();
}

function deletehfile($id)
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('DELETE FROM hfile WHERE idhfile=?');
    $sth->bindParam(1, $id, PDO::PARAM_STR);
    $sth->execute();
}


function deleteact($id)
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('DELETE FROM act WHERE idact=?');
    $sth->bindParam(1, $id, PDO::PARAM_STR);
    $sth->execute();
}

function deletevaccination($id)
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('DELETE FROM vaccination WHERE idvaccination=?');
    $sth->bindParam(1, $id, PDO::PARAM_STR);
    $sth->execute();
}

    
function feelact($id)
{
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM act WHERE idact=?');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
}

function feelvaccin($id)
{
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM vaccination WHERE idvaccination=?');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
}

function feelhfile($id)
{
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM hfile WHERE idhfile=?');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        return $sth->fetch();
}

function getuservaccins($cin)
{
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT vaccinated.vaccinationdate, vaccination.label, idvaccinated from vaccinated LEFT JOIN vaccination ON vaccinated.vaccination_idvaccination=vaccination.idvaccination WHERE vaccinated.user_usercin = ? ORDER BY vaccinated.vaccinationdate DESC');
        $sth->bindParam(1, $cin, PDO::PARAM_INT);
        $sth->execute();
            while($row =  $sth->fetch())
            {
                echo '<div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="d-flex w-100 justify-content-between">
                            ID vaccination: '.$row["idvaccinated"].'
                            </div>
                        </div>
                        <div class="list-group-item list-group-item-action" aria-current="true">
                            <div class="d-flex w-100 justify-content-between">
                            <p class="mb-1">'.$row["label"].'</p>
                            <small>Date de vaccination: '.$row["vaccinationdate"].'</br></small>
                            </div>
                        </div>
                    </div>
                ';
            }
}

function getcountusers(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM user LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}
function getcounthfiles(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM hfile LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}
function getcountacts(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM act LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}
function getcountvaccins(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM vaccination LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}
function getcountvaccinated(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM vaccinated LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}
function getcountdoctors(){
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT COUNT(*) FROM user WHERE usertype=2 LIMIT 1');
    $sth->execute();
    $count = $sth->fetch();
    return $count['COUNT(*)'];
}

function getvaccinslabel()
{
    $dbh = dbconnect();
    $sth = $dbh->prepare('SELECT * FROM vaccination');
    $sth->execute();
    while( $row =$sth->fetch())
    {
        echo "<option value='".$row['idvaccination']."'>".$row['label']."</option>";
    }
}

    function showprofileP($cin)
    {
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM user WHERE usercin=?');
        $sth->bindParam(1, $cin, PDO::PARAM_STR);
        $sth->execute();
        return $sth->fetch();


    }

    

    function  showhfileP($cin)
    {
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM hfile WHERE user_usercin=?');
        $sth->bindParam(1, $cin, PDO::PARAM_STR);
        $sth->execute();
        $i = 0;

        
        while($row = $sth->fetch())
            {   
                if($i==0){
                    echo "<table class='table table-bordered'>";
                    echo "<thead class='thead-dark'>";
                    echo "<tr>";
                             echo "<th scope='col'>ID</th>";
                             echo "<th scope='col'>Nom </th>";
                             echo "<th scope='col'>Description</th>";
                             echo "<th scope='col'>Date Creation</th>";
                             echo "<th scope='col'>state</th>";
                             echo "<th scope='col'>Cin Creation</th>";
                             echo "<th scope='col'>Cin Createur</th>";
                           echo "</tr>";
                         echo "</thead>";
                   echo"<tbody>";
                 $i++;
              }
                echo "<tr>";
                echo "<th scope='col'>".$row["idhfile"]."</th>";
                echo "<th scope='col'>".$row["hfilename"]."</th>";
                echo "<th scope='col'>".$row["hfiledescription"]."</th>";
                echo "<th scope='col' style='width:110px'>".$row["hfilecreated"]."</th>";
                echo "<th scope='col'>".$row["hfilestate"]."</th>";
                echo "<th scope='col' style='width:110px'><a href='?view=showfile&id=".$row["user_usercin"]."'>".$row["user_usercin"]."</a></th>";
                echo "<th scope='col' style='width:110px'><a href='?view=showfile&id=".$row["user_usercin1"]."'>".$row["user_usercin1"]."</a></th>";
                echo "</tr>";
                echo "</div>";
                
              echo "</div>";
                
            }
            echo"</tbody>";
            echo"<tbody>";
    }

    function showhfilex($cin)
    {
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT * FROM hfile LEFT JOIN user ON hfile.user_usercin1=user.usercin  WHERE hfile.user_usercin=? ORDER BY hfile.hfilecreated DESC');
        $sth->bindParam(1, $cin, PDO::PARAM_INT);
        $sth->execute();
        while( $row = $sth->fetch())
        {
            echo '<div class="panel panel-info">
            <div class="panel-heading">
                <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID du dossier médical <b>'.$row["idhfile"].'</b></h5>
                <small><span class="badge bg-primary rounded-pill ">Nombre d\'actes: '.countacts($row['idhfile']).'</span></small>
                </div>
                Créateur du dossier: ID: <b>'.$row["usercin"].'</b>- Nom et prénom: <b>'.$row['userfirstname'].' '.$row['userlastname'].'</b></br>
                Date de création: <b>'.$row['hfilecreated'].'</b></br>
                Dernière mise à jour: <b>'.$row['hfileupdated'].'</b></br>
                Etat du dossier: <b>'.$row['hfilestate'].'</b></br>
                </div>
                <div class="list-group">';
                getactspttient($row['idhfile']);
                
            
        }
    }


    function getactspttient($id)
    {
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM act LEFT JOIN user ON user.usercin=act.user_usercin WHERE hfile_idhfile=? ORDER BY act.actcreated DESC');
        $sth->bindParam(1, $id, PDO::PARAM_INT);
        $sth->execute();
        if(!empty(isset($_SESSION["mail"]))){
            $iduser=$_SESSION["mail"];
        }
        else{
            $iduser=$_GET['id'];
        }
        while( $row = $sth->fetch())
        {
            echo('
            <div class="list-group-item list-group-item-action" aria-current="true">
              <div class="d-flex w-100 justify-content-between">
                <h5 class="mb-1">ID acte: '.$row["idact"].'</h5>
                <small>Date de création: '.$row["actcreated"].'</br>Dernière mise à jour:'.$row["actupdated"].'</small>
              </div>
              <p class="mb-1">'.$row["actdescription"].'</p>
              <h5><a class="btn btn-warning text-dark" href="../controller/file_controller.php?id='.$row["idact"].'"><i class="glyphicon glyphicon-download"></i> PDF</a></h5>
              <small>Docteur ID: '.$row["user_usercin"].' - Nom et Prénom: '.$row["userfirstname"].' '.$row["userlastname"].'</small>
              <th scrop="col" style="text-align:center">
            </div>');
        }
        echo"</div></div>";
    }


?>