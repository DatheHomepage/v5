<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$picturepath="bilder/";
?>
<html>
<head>


  <link type="text/css" href="../../../dathe-os.css" rel="stylesheet">
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

      <td style="height: 40px; width: 634px;" align="center">
      <div class="title">-&Eacute;change Narbonne -
Berlin 2008 -</div>

      </td>

    </tr>

    <tr>

      <td style="height: 1195px; width: 652px;" valign="top">
      <div class="teaser"><br>

Nachdem die franz&ouml;sischen
Sch&uuml;ler uns Anfang des Jahres f&uuml;r eine Woche besucht
haben,
folgte unser R&uuml;cktausch Ende September diesen Jahres. Die
Reise
ging in das kleine St&auml;dtchen Narbonne, das im S&uuml;den
Frankreichs liegt. Obwohl wir 4 Stunden auf unser Flugzeug warten und
anschlie&szlig;ende 6 Stunden Anreise in Kauf nehmen mussten, stieg
unsere Vorfreude von Minute zu Minute.<br>

      <br>

Alle Erwartungen wurden bei unserer Ankunft voll und ganz
erf&uuml;llt:
ein gl&uuml;ckliches Wiedersehen mit unseren Austauschpartnern!<br>

Nach dem ersten Abend in den Gastfamilie trafen wir uns am
n&auml;chsten Morgen zum gemeinsamen Fr&uuml;hst&uuml;cken
mit
anschlie&szlig;endem Stadtrundgang. Die Stadt faszinierte durch die
zahlreichen alten Geb&auml;ude im r&ouml;mischen Stil. Es gab
enge
Gassen, bebaute Br&uuml;cken, einen gro&szlig;en Marktplatz und
einen
gro&szlig;en Fluss mitten durch die Stadt.<br>

      <br>

In den folgenden Tagen erkundeten wir dann den Hafen in
Port-La-Nouvelle, die Grotte von Limousis und viele andere Orte.<br>

Jeden Tag stand etwas anderes auf dem Plan, dabei hatten wir auch mit
unseren Austauschpartnern sehr viel Spa&szlig;.<br>

      <br>

Es wurde auch ein gesamter Tag in der Austauschschule verbracht. Man
nahm am Unterricht, der Pause und dem Mittagessen in der Cafeteria der
Schule teil.<br>

      <br>

Das Wochenende und die Nachmittage konnten frei gestaltet werden. Auch
hierbei fand viel in der deutsch-franz&ouml;sischen Gruppe statt,
was
uns allen eine gro&szlig;e Freude bereitete. Vor allem die
Abschlussfeier am letzten Abend weckte in allen den Wunsch auf ein
Wiedersehen.<br>

      <br>

Somit fiel uns der Abschied nach einer Woche voller Kultur,
Spa&szlig;
und deutschfranz&ouml;sischer Freundschaft nat&uuml;rlich sehr
schwer.
Es flossen viele Tr&auml;nen und Versprechungen zum Wiedersehen
wurden
gegeben.<br>

      <br>

Der R&uuml;ckflug verlief reibungslos. Aufgrund einer
z&uuml;gigen
Busfahrt hatten wir sogar noch einen kurzen Aufenthalt in Barcelona. Um
20Uhr wurden wir dann herzlich von unseren Familien am Flughafen
Berlin-Sch&ouml;nefeld in Empfang genommen.<br>

      <br>

Julia Draeger/ Paula Basler<br>

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
            <br>

          </tr>
        </tbody>
      </table>

      </div>
      </td>
    </tr>
  </tbody>
</table>
</body>
</html>
