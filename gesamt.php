<!DOCTYPE HTML>
<html lang="de" xml:lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width" />

    <link rel="Stylesheet" href="static/css/indexV5.css" media="screen">
    <link rel="Stylesheet" href="static/css/einzel.css" media="screen">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">

    <link rel="icon" href="favicon.ico" type="image/ico" sizes="16x16">

    <script src="static/js/jquery-2.2.1.min.js"></script>
    <script src="static/js/jquery.validate.min.js"></script>
    <script src="static/js/offcanvas.js"></script>
    <script src="static/js/ticker@navbar.js"></script>
    <script src="static/js/script.js"></script>
    <script src="static/js/modal.js"></script>
    <script src="static/menu/menu.js"></script>

    <title>Dathe-Gymnasium</title>
</head>

<body>

    <div id="wrapper">
        <div id="header">
            <img id="head_bg" src="./static/bilder/elemente/dathe_oben.png" alt="">
        </div>
        <div class="container">
            <a class="navbar-link"><i class="fa fa-th-list fa-4x"></i></a>
            <!-- Für mobile Seite -->
            <nav id="navbar">
                <?php include ("static/menu/menue.php"); ?>
            </nav>

            <div id="main">
                <?php
                $bilder = "";
                $path = "aktuelles.php";
                foreach($_GET as $key => $value){ 
                    if($key == 'sect') {
                        if($_GET['sect'] ) {
                            $path=$_GET['sect'].".php";
                            $dir = substr($_GET['sect'], 0, strrpos($_GET['sect'], "/")); 
                        }
                        else {
                            $path="aktuelles.php";
                        }
                    }
                }
                include $path;
                if ($bilder != ""){
                    include("galerie.php");
                }
            ?>
            </div>

            <div id="sidebar">
                <?php include ("infoleiste.php");?>
            </div>
            <!--<div id="footer"> Footer</div>-->
        </div>
        <div id="modal">
            <div id="modal-content">
                <span id="modal-head"></span>
                <div id="modal-body">
                    <span id="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span>
                    <?php echo $modal_content; ?>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
