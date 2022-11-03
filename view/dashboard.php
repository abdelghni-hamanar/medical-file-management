<?php
require_once('heading_html.php');
if(!isset($_SESSION["mail"])){
session_start();}
if(!empty(isset($_SESSION["mail"])) && !empty(isset($_SESSION["type"])) ){
?>
<body class="home">
    <div class="container-fluid display-table">
        <div class="row display-table-row">
            <div class="col-md-2 col-sm-1 hidden-xs display-table-cell v-align box" id="navigation">
                <div class="logo">
                <a hef="dashboard.php?view=home"><img src="../public/images/logo.png" alt="Logo" style="height:150px; width:147px"></a>
                </div>
                <div class="navi">
                    <ul>
                        <li class="active"><?php if($_SESSION["type"]!=1){echo ("<a href='?view=home'>");}else{echo ("<a href=''>");} ?><i class="fa fa-home" aria-hidden="true"></i><span class="hidden-xs hidden-sm"><?php if($_SESSION["type"]!=1){echo "Accueil";}else{echo "Profil";} ?></span></a></li>
                        <?php if($_SESSION["type"]!=1){ ?>
                        <li><a href="?view=users"><i class="fa fa-tasks" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Utilisateurs</span></a></li>
                        <?php } ?>
                        <?php if($_SESSION["type"]!=1){ ?>
                        <li><a href="?view=allhfiles"><i class="fa fa-bar-chart" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Dossiers médicaux</span></a></li>
                        <?php } ?>
                        <?php if($_SESSION["type"]!=1){ ?>
                        <li><a href="?view=allacts"><i class="fa fa-user" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Actes</span></a></li>
                        <?php } ?>
                        <?php if($_SESSION["type"]!=1){ ?>
                        <li><a href="?view=vaccin"><i class="fa fa-calendar" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Vaccin</span></a></li>
                        <?php } ?>
                        <?php if($_SESSION["type"]!=1){ ?>
                        <li><a href="?view=param"><i class="fa fa-cog" aria-hidden="true"></i><span class="hidden-xs hidden-sm">Paramètres</span></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <div class="col-md-10 col-sm-11 display-table-cell v-align">
                <div class="row">
                    <header>
                        <div class="col-md-7">
                            <nav class="navbar-default pull-left">
                                <div class="navbar-header">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="offcanvas" data-target="#side-menu" aria-expanded="false">
                                        <span class="sr-only">Afficher la navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                            </nav>
                            <div class="search hidden-xs hidden-sm">
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="header-rightside">
                                <ul class="list-inline header-top pull-right">
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="data:image/jpeg;base64,<?php echo base64_encode($_SESSION['picture']);?>" alt="user">
                                            <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <div class="navbar-content">
                                                    <div class="divider"></div>
                                                    <span><h4><b><i class="fa-solid fa-id-card"></i></br><?php echo $_SESSION["lname"]." ".$_SESSION["fname"]; ?></h4></b></span>
                                                    <p class="text-muted small">
                                                        <h5><b><?php echo $_SESSION["mail"]; ?></b></h5>
                                                    </p>
                                                    <div class="divider"></div>
                                                    <?php if($_SESSION["type"]!=1){ ?>
                                                    <a href="?view=showuser&id=<?php echo $_SESSION["mail"];?>" class="btn btn-warning text-dark"><i class="fa-solid fa-id-card-clip fa-lg text-dark"></i><b> Mon profil</b></a>
                                                    <?php } ?>
                                                    <?php if($_SESSION["type"]==1){ ?>
                                                        <a href="?view=patient&id=<?php echo $_SESSION["mail"];?>" class="btn btn-warning text-dark"><i class="fa-solid fa-id-card-clip fa-lg text-dark"></i><b> Mon profil</b></a>   
                                                     <?php  } ?>   
                                                    <div class="divider"></div>
                                                    <a href="logout_view.php" class="btn btn-success text-dark"><i class="fa-solid fa-arrow-right-from-bracket"></i><b> Déconnexion</b></a>
                                                </div>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </header>
                </div>
                <div class="user-dashboard">
                    
                        <div class="sales">
                        <div class="container">
                        <?php 

                            if (isset($_GET['view'])) {
                                $a=$_GET["view"];
                                switch ($a){
                                    default : require_once("home_view.php"); break;
                                    case "home" : require_once("home_view.php"); break;
                                    case "users": require_once("allusers_view.php"); break;
                                    case "showuser": require_once("profil_view.php");break;
                                    case "adduser": require_once("adduser_view.php");break;
                                    case "updateuser": require_once("userupdate_view.php");break;
                                    case "usersearch": require_once("user_search_view.php");break;
                                    case "removeuser": require_once("removeuser_view.php");break;
                                    case "patient": require_once("patient_view.php");break;
                                    
                                    case "allhfiles": require_once("allhfiles_view.php");break;
                                    case "addhfile": require_once("addhfile_view.php");break;
                                    case "updatehfile": require_once("updatehfile_view.php");break;
                                    case "showhfile": require_once("showhfile_view.php");break;
                                    case "removehfile": require_once("removehfile_view.php");break;

                                    case "allacts": require_once("allacts_view.php");break;
                                    case "addact": require_once("addact_view.php");break;
                                    case "updateact": require_once("updateact_view.php");break;
                                    case "removeact": require_once("removeact_view.php");break;
                                    
                                    case "vaccin": require_once("allvaccination_view.php");break;
                                    case "addvaccin": require_once("addvaccination_view.php");break;
                                    case "vaccinate": require_once("vaccinated_view.php");break;
                                    case "updatevaccin": require_once("updatevaccination_view.php");break;
                                    case "removevaccin": require_once("removevaccin_view.php");break;

                                }   
                            }
                            else{
                                require_once("home_view.php");
                            }
                            
                        ?>
    </div>
</div>
<!--
                        </div>
                        <h1>Hello, JS</h1>
                    <div class="row">
                        <div class="col-md-5 col-sm-5 col-xs-12 gutter">
                            
                            <div class="sales">
                                <h2>Your Sale</h2>

                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-7 col-xs-12 gutter">

                            <div class="sales report">
                                <h2>Report</h2>
                                <div class="btn-group">
                                    <button class="btn btn-secondary btn-lg dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <span>Period:</span> Last Year
                                    </button>
                                    <div class="dropdown-menu">
                                        <a href="#">2012</a>
                                        <a href="#">2014</a>
                                        <a href="#">2015</a>
                                        <a href="#">2016</a>
                                    </div>//-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

    </div>
</body>
<?php
}
else{
    header('Location: login_view.php');
}
?>