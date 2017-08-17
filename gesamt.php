<!DOCTYPE HTML>
<html lang="de" xml:lang="de">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width"/>

    <link rel="Stylesheet" href="static/css/indexV5.css" media="screen">
    <link rel="Stylesheet" href="static/css/navbar.css" media="screen">
    <link rel="Stylesheet" href="static/css/elements.css" media="screen">
    <link rel="Stylesheet" href="static/css/formatierungen.css" media="screen">
    <link rel="stylesheet" href="static/css/font-awesome.min.css">

    <link rel="icon" href="/static/bilder/elemente/favicon.ico" type="image/ico" sizes="16x16">

    <script src="static/js/jquery-3.2.1.min.js"></script>
    <script src="static/js/ticker.js"></script>
    <script src="static/js/script.js"></script>
    <script src="static/js/menu.js"></script>

    <script>
        var $buoop = {
            vs: {i: 10, f: -4, o: -4, s: 8, c: -4},
            unsecure: true,
            api: 4,
            text: "<b>Ihr Webbrowser ({brow_name}) ist veraltet.</b> Aktualisieren Sie Ihren Browser für mehr Sicherheit, Komfort und die einwandfreie Nutzung dieser Webseite. <a id=\"buorgul\" href=\"http://browser-update.org/update-browser.html#24:localhost\" target=\"_blank\" rel=\"noopener\">Browser Aktualisieren</a> <a id=\"buorgig\" href=\"\">Ignorieren</a>",
        };

        function $buo_f() {
            var e = document.createElement("script");
            e.src = "//browser-update.org/update.min.js";
            document.body.appendChild(e);
        };
        try {
            document.addEventListener("DOMContentLoaded", $buo_f, false)
        }
        catch (e) {
            window.attachEvent("onload", $buo_f)
        }
    </script>

    <title>Dathe-Gymnasium</title>
</head>

<body>
<div id="wrapper">
    <header id="header">
        <img id="head_bg" src="./static/bilder/elemente/dathe_oben.png" alt="">
    </header>
    <div id="flex-container">
        <a class="navbar-link"><i class="fa fa-th-list fa-4x"></i></a><!-- Für mobile Seite -->
        <nav id="navbar">
            <?php include("menue.php"); ?>
        </nav>

        <section id="inhalt">
            <?php
            $bilder = "";
            $modal_content = "";
            $path = "aktuelles.php";
            foreach ($_GET as $key => $value) {
                if ($key == 'sect') {
                    if ($_GET['sect']) {
                        $path = $_GET['sect'] . ".php";
                        $dir = substr($_GET['sect'], 0, strrpos($_GET['sect'], "/"));
                    }
                }
            }
            $datei = include $path;
            if (!$datei) {
                echo "<h3>Seite nicht gefunden</h3>";
            } else {
                if ($bilder != "") {
                    include("galerie.php");
                    galerie($dir . "/" . $bilder);
                }
            }
            ?>
        </section>

        <section id="sidebar">
            <?php include("infoleiste.php"); ?>
        </section>
    </div>
    <?php
    if ($modal_content != "") {
        echo '
    <div id="modal">
        <div id="modal-content">
            <span id="modal-head"></span>
            <div id="modal-body">
                <span id="modal-close"><i class="fa fa-times" aria-hidden="true"></i></span>
                <?php echo $modal_content; ?>
            </div>
        </div>
    </div>';
    }
    ?>
</div>
</body>

</html>
