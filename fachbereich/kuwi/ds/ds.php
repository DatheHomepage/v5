



 
            <div class="titel" >-&nbsp;Darstellendes Spiel - </div>

            
            <div class="teaser">&nbsp;<br>

Seit vielen Jahren
wird bei uns das Fach "Darstellendes Spiel" angeboten. Mit viel Elan
und Einsatz f&uuml;hren die beiden unterrichtenden Lehrerinnen Frau
Knybba und Frau Deutsch ihre Kurse immer wieder zu sehr gelungenen
Ergebnissen in Form von Auff&uuml;hrungen. <br>

&nbsp; <br><br><br></div>

&nbsp;
 <hr color="#000000" size="1"><br> 

			
<div class="teaser"	<b> DS - Aufführung 2012</b><br>

Im zweiten Jahr der Oberstufe steht die Erarbeitung eines Projektes im
Mittelpunkt der Arbeit.
Der eine Kurs wählte als Grundlage dafür einen Roman, der als Impuls für
die Szenenfindung diente: Das Auto als Objekt der Begierde wurde dabei kritisch beleuchtet.
Der andere Kurs beschäftigt sich mit der Problematik der Organspende und
päsentierte eine Reihe eindrucksvoller Szenen zu diesem Thema. Die
Spielfläche wurde erstmals auch auf die Straße verlegt.<br>

<img src="./fachbereich/kuwi/ds/bilder/ds_02.jpg"><br>
<b>Szene aus: Das Leben ist (k)ein Autohof</b><br>
<img src="./fachbereich/kuwi/ds/bilder/ds_01.jpg"><br>
<b>Szene aus: Menschen auf Raten</b>


<br> 
 <hr color="#000000" size="1"><br>           

			 <b>DS Auff&uuml;hrung 2011... Klappe die zweite </b><br>
           <a href="./fachbereich/kuwi/ds/bilder/t_P1020566.jpg">
			<img style="border: 0px solid ; width: 100px; height: 74px; float: left;" alt="" 
			src="./fachbereich/kuwi/ds/bilder/t_P1020566.jpg" hspace="10"></a>
			<span class="intro">Die
			Inszenierung des zweiten Kurses aus dem 12. Jahrgang 2010/11 ist eine Kriminalgeschichte, 
			die mit viel Humor zeigt, dass das Offensichtliche - die L&ouml;sung des Tatbestandes - leic
			ht &uuml;bersehen wird.</span>

            <br><br><br><br>
			         <b>DS Auff&uuml;hrung 2011... "Der Heiratsantrag" - Eine Auff&uuml;hrung des
DS-Kurses Klasse 12 </b><br>

            Die DS-Auff&uuml;hrung des 12. Jahrganges 2011 ist eine bemerkenswerte 
			Inszenierung in Bezug auf die gew&auml;hlten B&uuml;hnenformen: 
			Das Publikum sitzt auf Drehst&uuml;hlen und Hockern und dreht sich beim Wechsel 
			der Szenen zwischen zwei B&uuml;hnenr&auml;umen hin und her. Auf der einen B&uuml;hne 
			wird die Geschichte menschlicher Unzul&auml;nglichkeiten erz&auml;hlt, die sich um die 
			Verheiratung einer russischen Gutsbesitzertochter rankt, auf der anderen B&uuml;hne haben 
			die Spieler und Spielerinnen eindringliche Szenen als Ausdruck der inneren Befindlichkeiten 
			der Figuren entwickelt. Anschlie&szlig;end konnte man sich an einer Vielzahl erheiternder Abwandlungen
			des eigentlichen Themas des St&uuml;ckes erfreuen: der Streit zwischen den Geschlechtern.
			<br><br>
<hr style="margin: 1px;" color="#29528c" size="1">
<br><br>

            <b>DS Auff&uuml;hrung 2009...
"Les Femmes" - Eine Auff&uuml;hrung des DS-Kurses Klasse 12 </b><br>

            <br>

"7 Frauen. Ein toter &nbsp;Mann. Eine abgeriegelte Villa. <br>

Doch wer
ist die M&ouml;rderin?"<br>

Unter der Leitung von Frau Knybba entstand eine witzige, spannende und
fesselnde Krimikom&ouml;die. Die sieben Darstellerinnen haben viel
Zeit investiert, ge&uuml;bt, gebastelt und viel Liebe zum Detail
entwickelt, um dem Publikum eine einzigartige Inszenierung zu
pr&auml;sentieren.<br>

            <br>

zu sehen waren:<br>

die Hausherrin Gaby (Linda Krohn)<br>

die ungl&uuml;ckliche Augustine (Henriette Artz)<br>

die &uuml;berm&uuml;tige Catherine (Julia Hempel) <br>

die hinterfragende Susanne (Leyla Dibowski)<br>

die elegante Pirette (Celia Brodhagen)<br>

die aufreizende Louise (Stephanie Graetz)<br>

und die dicke Chanel (Anne Grytz)<br>

            <br>

Zusammen bildeten die Spielerinnen ein
herrliches Ensemble, das vor Energie nur so spr&uuml;hte<br>

und auf der B&uuml;hne mit viel Witz und Charme begeisterte. <br>

            <strong>Herzlichen Gl&uuml;ckwunsch!</strong><br>

            <br>

   

           

                  <script>
var bild_e= new Array(<? echo $anzahl; ?>); <?
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
// echo "<img src=\"uploads/".$file."\" width=50 height=50 style=\"border:2px solid blue;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"javascipt:run_tcp('".$genau."');\" onmouseout=\"\">\n";
// echo $file;
// echo "'>\"; >\n";
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

