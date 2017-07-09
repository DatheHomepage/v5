<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$picturepath="bilder/";
?>
<html>
<head>
<script>
function run_tcp(e,b){
var der=e;
var be=b;
run_scp();
location.href="#bild";
document.getElementById("bild_gross").innerHTML="<table><tr><td style=\"border:8px solid gray;\"><img src='<? echo $picturepath; ?>/"+der+".jpg' width=600 style=\"border:8px solid  white; height:450px;\"><br><div style=\"background-color:white;\"><table><tr><td width=10></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\" onmouseover=\"this.style.cursor='pointer'; \" onclick=\"run_former("+be+");\">zur�ck</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\">|</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_next("+be+");\">weiter</td><td width=50></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\">Galeriebild</td><td width=150 height=50 align=right onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_scp(); location.href='#top';\"><span style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black; text-decoration:underline;\">Schliessen</span></td></tr></table></div></td></tr></table><br><br><br><br><br><br><br><br>";
 //"opacity:0.2; filter:alpha(opacity=20);";
}
function run_scp(){
document.getElementById("bild_gross").innerHTML="";
}


</script>

  
  <link type="text/css" href="../../../dathe-os.css" rel="stylesheet">

  
  <title></title>
</head>


<body style="background-color: transparent;" leftmargin="0" topmargin="0" alink="#000000" link="#000000" vlink="#000000">


<br>


<table style="height: 1241px; margin-left: 29px; width: 644px;" border="0" width="900">


  <tbody>


    <tr>


      <td style="height: 40px; width: 634px;" align="center">
      
      <div class="title">- Baugeschehen -</div>


      </td>


    </tr>


    <tr>


      <td style="height: 1195px; width: 652px;" valign="top">
      
      <div class="teaser">
      
      <div style="text-align: center;">1|<a href="baugeschehen2.php">2|</a><a href="baugeschehen3.php">3</a><br>


      </div>


      
      <div style="text-align: center;"> - Bilder vom
Baugeschehen an unserer Schule -<br>


      </div>


      
      <p class="intro" align="left"><strong>13.10.2009</strong></p>


      
      <p class="intro" align="left">Die Bauarbeiten
sind
(endlich) weitestgehend abgeschlossen. Wir haben eine neue Etage
(Dachgeschoss) mit sch&ouml;nen und modern eingerichteten
Fachr&auml;umen f&uuml;r Kunst und Informatik. Auch der
Innenhof ist
fast fertig und erstrahlt in einem neuen wei&szlig;en Antlitz...</p>


      <br>


      
      <p class="intro" align="left"><strong>Und
so fing alles an...</strong></p>


      
      <p class="intro" align="left"><strong>13.9.2007</strong></p>


      
      <p class="intro" align="left"> Die
Bauarbeiten an unserer Schule gehen, wenn auch langsam, voran. Nachdem
in den letzten Wochen vorwiegend Abbrucharbeiten das Baugeschehen
dominierten, wird nun wieder aufgebaut. Besonders spektakul&auml;r
und eine ingenieurtechnische Herausforderung war der Einbau der Treppen
f&uuml;r den Zugang zu den k&uuml;nftigen
Unterrichtr&auml;umen im Dachgeschoss. <br>


      <br>


Einen anschaulichen Eindruck vermittelt die Fotostrecke! Die
Dachdeckung geht voran, jedoch werden die Fenster nicht mehr in diesem
Jahr gewechselt. Dieses Vorhaben soll in den Ferien 2007 realisiert
werden. Dann ist auch der Einbau der ersten neuen R&auml;ume
vorgesehen. Hoffen wir auf eine termingerechte Fertigstellung der
geplanten Arbeiten, so dass sich die r&auml;umlichen
Rahmenbedingungen an unserer Schule positiv entwickeln k&ouml;nnen.<br>


      <br>
<div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>

      <table class="teaser" bordercolordark="#e8ecf0" bordercolorlight="#666666" color="#0066cc" align="center" border="1" cellpadding="2" cellspacing="0" hspace="10">
        <tbody align="center"><center><table><tr>

<?
// �ffnet ein Unterverzeichnis mit dem Namen "daten"
$verzeichnis = openDir($picturepath);
// Verzeichnis lesen

$anzahl=0;
$zaehl=1;
while ($file = readDir($verzeichnis)) {
 // H�here Verzeichnisse nicht anzeigen!
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
 // Verzeichnis schlie�en
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
 // H�here Verzeichnisse nicht anzeigen!
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

 // Verzeichnis schlie�en
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
      </p>


      
      <p class="intro"><br>


      <strong></strong><br>


Liebe Sch&uuml;lerinnen und Sch&uuml;ler, liebe Eltern, liebe
Kolleginnen und Kollegen, nach einem teilweise staubigen Schulbeginn
auf der Baustelle Dathe-Oberschule ist nun das erste Etappenziel auf
dem Weg zu einem sch&ouml;neren und funktionell besser
ausgestattetem Schulhaus geschafft &ndash; die ersten beiden
Klassenr&auml;ume im Dachgeschoss sind bis auf kleinere
Restarbeiten fertig gestellt.<br>


Zur Bauabnahme am Donnerstag waren Vertreter des
Architekturb&uuml;ros, der Bau ausf&uuml;hrenden Firmen und des
Bezirksamtes im Haus.<br>


      <br>


So stehen in unserem alt-ehrw&uuml;rdigen, in diesem Schuljahr 100
Jahre werdenden Schulhaus nach den Herbstferien zwei moderne
Unterrichtsr&auml;ume mit einem tollen Ausblick auf den Sportplatz
und das k&uuml;nftige Gel&auml;nde des Parks
&bdquo;Wriezener Karree&ldquo; f&uuml;r den allgemeinen
Unterrichtbetrieb zur Verf&uuml;gung.<br>


Als Ausblick im &uuml;bertragenen Sinne werden zum kommenden
Schuljahr zwei weitere und im Jahr 2009 die letzten beiden
R&auml;ume &uuml;bergeben.<br>


      <br>


      </p>


      
      <div align="center"></div>


      <br>


      </div>


      </td>


    </tr>


  
  </tbody>
</table>


</body>
</html>
