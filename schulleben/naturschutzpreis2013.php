


<?
$picturepath="naturschutzpreis2013";
?>



  
 
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


      
      <div class="titel">- Berliner Naturschutzpreis-2013</div>
<div class="teaser"> 
      
      
    
            <br>
			<br>
			<div class="teaser">
           Das Dathe-Gymnasium wurde am 05.09.2013 besonders geehrt, denn es hat den Berliner Naturschutzpreis 2013 überreicht bekommen. Im folgenden wird die Urkunde zitiert:<br><br>
		   Das Dathe-Gymnasium gehört zu den Institutionen der Hauptstadt, die sich seit Jahrzehnten mit Ideenreichtum und Beispielkraft dafür einsetzen, junge Menschen für die Natur
		   zu begeistern. Dem Vorbild seines Namensgebers und seines programmatischen Ziel verpflichtet, "weltoffen, respektvoll und aktiv" zu sein, hat es sich durch die naturbezogene
		   Gestaltung der Unterrichtsstunden und zahlreiche Eigenprojekte zur Umweltbindung einen berlinweit geachteten Namen gemacht.<br><br>
		   Gleichsam symbolhaft für das Naturengagement des Dathe-Gymnasiums steht die seit 1957 existierende Biologie-Station, eine in der Hauptstadt einmalige Einrichtung,
		   die wesentlich das Profil der Schule bestimmt und von den Jugendlichen weitgehend selbst betreut wird. Als stadtweit bekannter "grüner Lernort" besitzt sie eine Bedeutung, 
		   die weit über die innerschulischen Belange hinausreicht. Kindergärten, Schulklassen, Studenten und Referendare besuchen dieses Schulprojekt und profitieren von den Erfahrungen, 
		   die am Dathe-Gymnasium gesammelt werden.<br><br>
		   Mit der Verleihung des Naturschutzpreises 2013 an das Dathe-Gymnasium ehrt die Stiftung Naturschutz Berlin eine pädagogische Einrichtung, die seit mehr als einem halben Jahrhundert 
		   besondere Maßstäbe für das schulische Lernen setzt, die ein wirksames Konzept entwickelt hat, junge Menschen für den Natur-, Tier- und Umweltschutz zu motivieren, und mit ihrem 
		   Schulprogramm, ihrer Philosophie auch kommende Generationen zu einem nachhaltigen und solidarischen Lebensstil ermutigt.
		   <br>
		   <br>
		   <a href="http://www.stiftung-naturschutz.de/die-stiftung/naturschutzpreis/" target="_blanc">Hier noch ein Link dazu!</a>
            </div>  
			<br>
			<br>
			
</script>


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
			</td>			
				</tr>


              
             


        
       