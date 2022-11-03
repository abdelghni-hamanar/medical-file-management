<?php
    require_once("../model/userclass.php");
    require_once("../model/connect.php");

    $cin = $_POST['usercin'];
    if(!empty($cin))
    {
        $dbh = dbconnect();
        $sth = $dbh->prepare('SELECT *  FROM user WHERE usercin=?');
        $sth->bindParam(1, $cin, PDO::PARAM_STR);
        $sth->execute();
        $row = $sth->fetch();
        if(!empty($row))
        {
            $postdata = http_build_query(
                $row
            );
            $opts = array('http' =>
                array(
                    'method' => 'POST',
                    'header' => 'Content-type: application/x-www-form-urlencoded',
                    'content' => $postdata
                )
            );
            $context = stream_context_create($opts);
            $result = file_get_contents('http://localhost/ck2/view/updateuser_view.php', false, $context);
            echo $result;
        }
        else
        {
            echo 'user not mutch';
        }
    }
    


?>