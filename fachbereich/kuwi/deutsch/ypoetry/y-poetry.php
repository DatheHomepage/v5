<?
$picturepath="bilder/";
?>
<html>
<head>

  <link type="text/css" href="dathe-os.css" rel="stylesheet">
  <title>y-poetry</title>

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


<body topmargin="0" leftmargin="0" style="background-color: transparent;" alink="#000000" link="#000000" vlink="#000000">

<br>

<table style="margin-left: 29px; width: 644px;" border="0">

  <tbody>

    <tr>

      <td style="text-align: center;">
      <div class="title" align="center">- Y-Poetry -</div>

      </td>

    </tr>

    <tr>

      <td>
      <div class="teaser">Die
Fahrt im Rahmen des Poesiewettbewerbs hat die 4 ausgezeichneten
Sch&uuml;lerinnen
nicht nur an besondere Orte der Stadt Amsterdam gef&uuml;hrt - wie
den Empfangssaal
des Rathauses, das Goethe-Institut und die beeindruckende
Zentralbibliothek sondern hat
ihnen auch
zahlreiche Begegnungen mit den anderen Wettbewerbsteilnehmern aus
Amsterdam,
Antwerpen und London erm&ouml;glicht. Die Jugendlichen erlebten
sich in der kurzen
Zeit von nicht einmal 3 Tagen gegenseitig als au&szlig;erordentlich
zugewandt und
kommunikativ. Dass die Poesie im Leben aller Anwesenden eine besondere
Rolle
spielt, verstand sich a priori als Selbstverst&auml;ndlichkeit. Wir
freuen uns, dass
Rika Marie Ghulam &nbsp; beim
Finale mit ihrem
Gedicht &bdquo;Morgen Nacht&ldquo; den dritten Preis gewonnen
hat.<br>

      <br>

Schon im Mittelalter haben sich
Dichter zum Wettstreit zusammengefunden. So
&auml;hnlich ging es vielleicht bei der Poesieshow am letzten
Freitag im
Theater an der Parkaue zu, als die besten Gedichte ermittelt wurden -
mit
dem Ausblick, sich auch noch dem letzten Wettstreit beim
internationalen
Finale in Amsterdam zu stellen. Im Folgenden finden sich die drei
ausgezeichneten Gedichte. Ein vierter Preis wurde f&uuml;r den
besten Vortrag
vergeben. <br>

      <br>

      <table>

        <tbody>

          <tr>

            <td class="teaser">
Franziska Dr&auml;ger: Worte <br>

            <br>

Meine Gedanken, als k&ouml;nnte ich sie alle in Worte fassen<br>

sie als schimmernden Glanz durch die Welt schicken. <br>

Sprache, eine Br&uuml;cke in der Stadt, in den Gassen, <br>

man &ouml;ffnet ein Fenster, versucht nicht zu ersticken <br>

in der Flut der Worte. <br>

            <br>

Doch ich schau ihr ins Angesicht <br>

eine Verbindung zur Stadt, zu Leiden <br>

Schritt f&uuml;r Schritt legt sich die Gischt. <br>

W&auml;ren Worte nicht meine Sprache heute <br>

w&auml;re mir viel entgangen. <br>

            <br>

Ich liebe dich, sagtest du <br>

und ich sagte <br>

Ich liebe Worte. <br>

            <br>

            <br>

Rika Marie Ghulam: Morgen Nacht <br>

            <br>

Rauschen, rattern, klingeln, knattern <br>

h&ouml;rt man hier, alles wird anders <br>

            <br>

Sonne aus, Mond an, Farben verschluckt <br>

Licht im Zimmer, pfeifen <br>

Die klare, frische Luft, alles fliegt <br>

Alles wird gleich, f&uuml;gt sich <br>

            <br>

Die Zeit steht still, nichts <br>

Wie im Wasser, in der Tiefe <br>

Wie in Zeitlupe beginnt es wieder <br>

Rot, Orange, Rosa, Violett, Blau, <br>

als alles erwacht <br>

            <br>

            <br>

Xena Hauptmann: Tr&uuml;bes Morgengrauen <br>

            <br>

Ein wirres Lachen, <br>

kriecht durch die Nacht, <br>

die weinend im Zwielicht versinkt. <br>

            <br>

Der graue Tag, <br>

&ouml;ffnet den Rachen <br>

lacht &uuml;ber ein trauriges Kind. <br>

            <br>

Nebelwellen, <br>

kalt und feucht, <br>

w&auml;lzen durch tr&uuml;ben Morgen <br>

            <br>

bringen feuchtkalt die Angst zur&uuml;ck <br>

und altbekannte Sorgen. <br>

            </td>

            <td>
            <img src="amsterdam.jpg" height="200" width="300"><br>

            <br>

            </td>

          </tr>

        </tbody>
      </table>
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
      </div>

      </td>

    </tr>

  </tbody>
</table>

</body>
</html>
