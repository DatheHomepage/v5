<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">

<?
$picturepath="bilder/";
?>
<html>
<head>

  <link type="text/css" href="../../../../dathe-os.css" rel="stylesheet">
  <title></title>

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


<body style="background-color: transparent;" leftmargin="0" topmargin="0" alink="#000000" link="#000000" vlink="#000000">

<br>

<table style="height: 1241px; margin-left: 29px; width: 644px;" border="0" width="900">

  <tbody>

    <tr>

      <td height="638" valign="top" width="475">
      <table align="center" cellpadding="5" cellspacing="0" width="99%">

        <tbody>

          <tr>

            <td style="text-align: center;">
          <div class="title"> Der Fachbereich Kunst
l&auml;dt ein:</div>

            </td>

          </tr>

          <tr>

            <td colspan="2" height="88">
            <div class="intro">
            <div class="teaser" style="text-align: center;"><em>09.November
2009</em><span style="text-decoration: underline;"><br>

Projekt: "Domino"-Aktion
zun 20. Jahrestages des Mauerfalls<br>

            <br>

            <br>

            <br>

            </span> </div>

            <span class="teaser">&nbsp;Im
M&auml;rz startete&nbsp;aus Anlass des <span style="font-weight: bold;">20.
Jahrestages des Mauerfalles</span> die Aktion <span style="font-weight: bold;">"Domino"</span> . <br>

Hierbei handelt es
sich um ein bundesweites Kulturprojekt bei dem auch die Klassen 7a, 7b,
8d, und 10d unserer Schule teilnehmen. <br>

            <br>

Nach zahlreichen Bildideen
f&uuml;r die Bemalung der Steine setzten sie ihre 10 besten
Entw&uuml;rfe in die Realit&auml;t um. Dabei wurden 2m x 1,5m
gro&szlig;e Dominosteine an 2 Projekttagen im Juli (08. und
09.07.09) bemalt. <br>

Der <span style="font-weight: bold;">F&ouml;rderverein</span>
unterst&uuml;tzte das
Projekt durch die Finanzierung der Farben, die wir au&szlig;erdem
zu g&uuml;nstigen Konditionen kaufen konnten. <br>

Alle Sch&uuml;ler
standen vor einer f&uuml;r sie neuen Aufgabe, die sie doch mit viel
Freude und Engagement &nbsp;meisterten. <br>

Die&nbsp;bemalten
Dominosteine sollen in einem Buch der Steine aufgenommen werden. <br>

Viel
beachteter H&ouml;hepunkt &nbsp;ist eine rund zwei Kilometer
lange Installation mit mehr als tausend &uuml;bergro&szlig;en,
bunt bemalten Dominosteine, bei der auch die Steine unserer
Sch&uuml;ler "teilnehmen". <br>

Ab dem 07.11.09 entsteht dann die
"Dominogalerie", bei der die Steine den ehemaligen Verlauf der Mauer
zwischen Reichstag, Brandenburger Tor und Potsdamer Platz markieren. <br>

            <span style="font-style: italic;">Am
Abend des 09.11.09 , also dem 20. Jahrestag des Mauerfall, werden alle
Steine zum Einsturz gebracht.</span> </span><br class="teaser">

            <br>

            </div>

            </td>

          </tr>

        </tbody>
      </table>

      <hr color="#000000" size="1">&nbsp;
      <table align="center" cellpadding="5" cellspacing="0" width="99%">

        <tbody>

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
        </tbody>
      </table>

      </td>

    </tr>

  </tbody>
</table>

</body>
</html>
