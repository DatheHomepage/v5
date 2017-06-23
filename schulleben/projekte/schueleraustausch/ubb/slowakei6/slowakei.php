<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$picturepath="bilder/";
?>
<html>
<head>



  
  
  <link type="text/css" href="../../../../../dathe-os.css" rel="stylesheet">


  
  
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

      <br>



      
      <p class="teaser">Umwelt baut
Br&uuml;cken? Was soll das bedeuten?<span style="">&nbsp; </span>Nun ja,
das ist ein Kurs, den man in der Oberstufe w&auml;hlen kann, doch was steht hinter
dem imposant klingenden Namen?<br>

      <span style="font-family: &quot;Times New Roman&quot;;"><o:p></o:p></span>

      </p>

      
      <p class="teaser">Br&uuml;cken werden
zwischen Deutschland und der Slowakei gebaut, denn im Rahmen des Kurses findet
ein Austausch mit Sch&uuml;lern aus der der Stadt Poprad statt. Unsere
Austauschpartner haben uns bereits im M&auml;rz in Berlin besucht und waren von der
Gro&szlig;stadt beeindruckt. Viele von ihnen waren noch nie in einer &auml;hnlich gro&szlig;en
Stadt gewesen und dementsprechend erlitten sie einen kleinen Kulturschock als
sie in Berlin ankamen. Nat&uuml;rlich gaben wir uns M&uuml;he das Programm m&ouml;glichst
interessant zu gestalten. Viele von uns waren bei der Kissenschlacht am
Brandenburger Tor dabei, bei der Hunderte ihre Kissen gegeneinander schwangen.
Unter Anderem besuchten wir das Olympiastadium, das Pergamonmuseum und das
Deutsche Theater.<br>

      <span style="font-family: &quot;Times New Roman&quot;;"><o:p></o:p></span>

      </p>

      
      <p class="teaser">Doch der
inhaltliche Kern des Kurses ist die journalistische Bearbeitung eines
Umweltthemas. Dieses Jahr recherchieren wir &uuml;ber die Rieselfelder in
Hobrechtsfelde: Fr&uuml;her wurde diese Fl&auml;che als Entsorgungsst&auml;tte f&uuml;r die
Abw&auml;sser Berlins, heute k&auml;mpft man mit der Schwermetallbelastung im Boden. Bei
unseren Recherchen steht die nachhaltige Bewirtschaftung der Fl&auml;che im
Mittelpunkt und dazu haben wir Zeitungsartikel verfasst oder Vortr&auml;ge gehalten.<o:p></o:p>

      </p>

      
      <p class="teaser">Doch um
&uuml;berhaupt journalistisch Arbeiten zu k&ouml;nnen, haben wir verschieden Workshops
zum Fotografieren und zur Verfassung journalistischer Texte angeboten bekommen.
      <o:p></o:p>

      </p>

      
      <p>Wie in den
vorhergehenden Jahren werden wir mit den Ergebnissen unserer Arbeit an einem
Wettbewerb teilnehmen.<span class="teaser" style="font-family: &quot;Times New Roman&quot;;"><o:p></o:p></span></p>



      
      <p class="teaser">Am 14. 6. 2011 geht es dann endlich in die Slowakei und alle sind schon
sehr auf die Tage bei unseren Freunden in Poprad gespannt.</p>


      <br>


      <br>



      <br>
	  
	  </td>
	  <tr>
	  
	  
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

      



    </tr>



  
  
  </tbody>
</table>



</body>
</html>
