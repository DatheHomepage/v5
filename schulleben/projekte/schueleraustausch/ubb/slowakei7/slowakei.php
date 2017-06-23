<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$picturepath="bilder/";
?>
<html>
<head>

  <link type="text/css" href="../../../../../dathe-os.css" rel="stylesheet">
  <title>
</title>
<script>
function run_tcp(e,b){
var der=e;
var be=b;
run_scp();
location.href="#bild";
document.getElementById("bild_gross").innerHTML="<table><tr><td style=\"border:8px solid gray;\"><img src='<? echo $picturepath; ?>/"+der+".jpg' width=600 style=\"border:8px solid  white; height:450px;\"><br><div style=\"background-color:white;\"><table><tr><td width=10></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\" onmouseover=\"this.style.cursor='pointer'; \" onclick=\"run_former("+be+");\">zurück</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\">|</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_next("+be+");\">weiter</td><td width=50></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\">Galeriebild</td><td width=150 height=50 align=right onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_scp(); location.href='#top';\"><span style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black; text-decoration:underline;\">Schliessen</span></td></tr></table></div></td></tr></table><br><br><br><br><br><br><br><br>";
 //"opacity:0.2; filter:alpha(opacity=20);";
}
function run_scp(){
document.getElementById("bild_gross").innerHTML="";
}


</script>


</head>



<body style="background-color: transparent; height: 324px;" leftmargin="0" topmargin="0" alink="#000000" link="#000000" vlink="#000000">

<br>

<table style="margin-left: 29px; width: 644px;" border="0">

  <tbody>

    <tr>

      <td style="text-align: center;">
      <p class="title-ressort" align="center">-
Umwelt baut Br&uuml;cken -</p>

      </td>

    </tr>

    <tr>

      <td class="teaser"><br>

Am 23. August 2011 haben wir,
der Projektkurs &bdquo;Umwelt baut
Br&uuml;cken&ldquo;, den Workshop &bdquo;Junge Reporter
f&uuml;r die Umwelt&ldquo;<span style="">&nbsp;
      </span>besucht.<br>

Geleitet wurde der Workshop von
einer Mitarbeiterin der Jungen Presse Berlin, Josefa Kny und von
J&ouml;rg Welke vom
Unabh&auml;ngigen Institut f&uuml;r Umweltfragen.
W&auml;hrend des Workshops
wurden wichtige Fragen zum Schreiben
eines Artikels gekl&auml;rt, wie zum Beispiel:<br>

      <br>

Welche Quellen sind verl&auml;sslich?<br>

Wie pr&uuml;ft<br>

man Quellen?<br>

Was ist bei der Recherche zu beachten?<br>

Welche
journalistischen Darstellungsformen gibt es?<br>

Wie f&uuml;hrt
man ein Interview?<br>

Welche
Eigenschaften sollte ein guter Artikel haben?<br>

Zu den einzelnen Punkten gab es
&Uuml;bungen. So haben wir zum
Beispiel gruppenweise die verschiedenen Artikelformen untersucht und
mit Partnern
Probeinterviews zum Thema &bdquo;Meine gr&ouml;&szlig;te
Umwelts&uuml;nde&ldquo; durchgef&uuml;hrt. <br>

Zum Schluss
haben wir
Umweltthemen zusammengestellt, um uns
allein oder zu zweit ein Thema und eine journalistische
Darstellungsform
auszusuchen.<br>

Ende September werden wir die
jeweiligen Artikel
fertiggestellt haben und sie dem Workshopteam zuschicken. Mit diesen
Artikeln nehmen wir
an dem internationalen
Wettbewerb <b>Wrigleys-Litter Less Campaign </b>teil, der
sich mit dem
Umweltthema Abfall besch&auml;ftigt.<br>

Wenn ihr Interesse habt, weil
ihr einfach gern
schreibt oder weil euch die Umwelt am Herzen liegt, k&ouml;nnt ihr
die Website <a href="http://www.ufu.de/junge-reporter">www.ufu.de/junge-reporter</a>
besuchen.<br>

Dort findet ihr weitere Informationen zur Teilnahme.
Am 21.09.2011 werden wir einen
weiteren Workshop besuchen.<br>

Dort &uuml;berarbeiten<span style="">&nbsp; </span>wir
unsere Artikel
und sprechen &uuml;ber das Layout. Wir freuen uns schon sehr
darauf, denn der erste
Workshop hat uns viel Spa&szlig; gemacht.<br>
<br>
<a href="UbB Homepage Uebersicht.pdf" target = "_blank">Hier finden Sie einen Bericht über unseren Besuch in der Slowakei</a>

      <br>

      <br>

	  
	  <div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>

      <table class="teaser" bordercolordark="#e8ecf0" bordercolorlight="#666666" color="#0066cc" align="center" border="1" cellpadding="2" cellspacing="0" hspace="10">
        <tbody align="center"><center><table><tr>

<?
// Öffnet ein Unterverzeichnis mit dem Namen "daten"
$verzeichnis = openDir($picturepath);
// Verzeichnis lesen

$anzahl=0;
$zaehl=1;
while ($file = readDir($verzeichnis)) {
 // Höhere Verzeichnisse nicht anzeigen!
 if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file!="teaser") {
 $anzahl++;
 // Link erstellen
 //echo $file;
 $anfang=strpos($file,".");
 $genau=substr($file,0,$anfang);
 //echo $genau;
  echo "<td><img src=\"".$picturepath."/".$file."\" width=100 height=75 style=\"border:2px solid blue;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"javascipt:run_tcp('".$genau."','".$anzahl."');\" onmouseout=\"\">\n</td>";
//  echo $file;
//  echo "'>\"; >\n";
if($zaehl==3){ echo "</tr><tr>";
$zaehl=0;
}
  $zaehl++;
 }
}
 // Verzeichnis schließen
closeDir($verzeichnis);
?>
<script>
var bild_e= new Array(<? echo $anzahl; ?>); 

<?


$verzeichnis = openDir($picturepath);
// Verzeichnis lesen

$zaehl_b=0;
$zaehl=1;
while ($file = readDir($verzeichnis)) {
 // Höhere Verzeichnisse nicht anzeigen!
 if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file != "teaser") {
 $anzahl++;


 // Link erstellen
 //echo $file;
 $anfang=strpos($file,".");
 $genau=substr($file,0,$anfang);
 //echo $genau;
 echo "bild_e[".$zaehl_b."]=\"".$genau."\";\n ";
//  echo "<img src=\"uploads/".$file."\" width=50 height=50 style=\"border:2px solid blue;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"javascipt:run_tcp('".$genau."');\" onmouseout=\"\">\n";
//  echo $file;
//  echo "'>\"; >\n";
 $zaehl_b++;
 }
}

 // Verzeichnis schließen
closeDir($verzeichnis);
 

 ?>


function run_next(e){
var gegenwart=e;
var gewaehlt=e+1;
var bild=bild_e[gewaehlt];
if(gewaehlt>=bild_e.length){
bild=bild_e[bild_e.length-1];
gewaehlt=e;
}
run_tcp(bild,gewaehlt);

}

function run_former(e){
var gegenwart=e;
var gewaehlt=e-1;
var bild=bild_e[gewaehlt];
if(e==0){
bild=bild_e[gegenwart];
gewaehlt=e;
}
run_tcp(bild,gewaehlt);

}


</script>
      <br>

      <br>
	  </td>
	  </tr>
	  </table>
<>
 

</body>
</html>
