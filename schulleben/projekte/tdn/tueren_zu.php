<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?
$picturepath="bilder2/";
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
document.getElementById("bild_gross").innerHTML="<table><tr><td style=\"border:8px solid gray;\"><img src='<? echo $picturepath; ?>/"+der+".jpg' width=600 style=\"border:8px solid  white; height:450px;\"><br><div style=\"background-color:white;\"><table><tr><td width=10></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\" onmouseover=\"this.style.cursor='pointer'; \" onclick=\"run_former("+be+");\">zur�ck</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\">|</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_next("+be+");\">weiter</td><td width=50></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\">Galeriebild</td><td width=150 height=50 align=right onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_scp(); location.href='#top';\"><span style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black; text-decoration:underline;\">Schliessen</span></td></tr></table></div></td></tr></table><br><br><br><br><br><br><br><br>";
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
      
      
      <p class="title-ressort" align="center">-  T�ren zu f�rs Klima  -</p>



      </td>



    </tr>



    <tr>



      <td class="teaser"><br>

      <br>



      
      <p class="teaser">
	  


Unter diesem Motto planen wir � die Sch�ler des Grundkurses Kunst der Dathe-Oberschule Friedrichshain � ein 
Projekt in Kooperation mit der S-Bahn. Am Donnerstag, den 9. Februar 2012, machen wir von 8.30 bis 11.00 Uhr 
sowie von 14.30 bis 17.00 Uhr in einer Aktion auf die Notwendigkeit aufmerksam, die T�ren der S-Bahnwaggons 
bei Aufenthalten in den Bahnh�fen zu schlie�en, um kostbare Energie zu sparen. <br> <br>

Wir sind Sch�ler der Dathe-Oberschule, die sich als Umweltschule versteht. Die Besch�ftigung mit klimarelevanten 
Themen geh�rt zum Alltag an unserer Schule und beschr�nkt sich nicht auf den Unterricht im Fach Biologie. Das Projekt 
in Kooperation mit der S-Bahn war f�r uns interessant, da unsere Schule in der N�he der S-Bahnstationen Warschauer 
Stra�e und Ostkreuz liegt und viele Sch�ler, die unsere Schule besuchen mit der S-Bahn zur Schule fahren und das 
Ph�nomen der ausk�hlenden Waggons von ihrem t�glichen Schulweg kennen. <br> <br>

<b> Worum geht es konkret bei der Aktion? </b> <br> 
An den Bahnh�fen Warschauerstra�e sowie am S-Bahnhof Ostkreuz stehen die T�ren der S-Bahnz�ge oft sehr lang offen, da 
es sich um Umsteigebahnh�fe handelt und die Bahnen auf andere Z�ge warten. Dies hat zur Folge, dass die Wagen ausk�hlen 
und neu aufgeheizt werden m�ssen. Das Aufheizen der Wagen ben�tigt Energie und ist deshalb kosten- und klimarelevant. 
Wir wollen auf den Knopf zum Schlie�en der T�ren im Inneren der S-Bahn aufmerksam machen. Die wenigsten Fahrg�ste wissen, 
dass es diesen Knopf gibt und sind sich dar�ber im klaren, dass sie mit dem Bet�tigen dieses Knopfes der Umwelt etwas 
wirklich Gutes tun k�nnen.  <br>
An diesem Punkt m�chten wir als Sch�ler des Kunst Grundkurses ansetzen. Am 9. Februar verteilen wir, in den Morgenstunden 
und am Nachmittag an den zwei Bahnh�fen, Postkarten, die wir selbst im Kunstunterricht entworfen haben, um auf das Problem 
aufmerksam zu machen. Zus�tzlich werden Sch�ler des Grundkurses in den S-Bahnwagen warten und beim Bet�tigen des Knopfes 
zum Schlie�en der T�ren kleine Aufmerksamkeiten verteilen.  <br> <br>
Dr�cken Sie also den Knopf! Es lohnt sich!<br>
<i> Max Ebert </i> (Sch�ler der Dathe Oberschule)

	  
	  
	  <br>

      

      <br>



      <br>
<div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>

      <center><table class="teaser" bordercolordark="#e8ecf0" bordercolorlight="#666666" color="#0066cc" align="center" border="1" cellpadding="2" cellspacing="0" hspace="10">
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
if($zaehl==4){ echo "</tr><tr>";
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

<table> <tr> <td> <div class="teaser"><br>
Das Projekt wurde im Rahmen des Sch�lerwettbewerbs 2012 mit dem Sonderpreis ausgezeichnet.
<br>
<br>
<b>Dathe Sch�ler/innen bekommen 2. Preis f�r Klimaschutzprojekt "T�ren zu"</b>
<center>
      <br>
<div id="media">
            <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="512" height="306" id="csSWF">
                <param name="movie" value="Abendschau_controller.swf" />
                <param name="quality" value="best" />
                <param name="bgcolor" value="#1a1a1a" />
                <param name="allowfullscreen" value="true" />
                <param name="scale" value="showall" />
                <param name="allowscriptaccess" value="always" />
                <param name="flashvars" value="autostart=false&csConfigFile=Abendschau_config.xml&thumb=FirstFrame.png&thumbscale=45&showstartscreen=false&showendscreen=false&color=0x1A1A1A,0x1A1A1A" />
                <!--[if !IE]>-->
                <object type="application/x-shockwave-flash" data="Abendschau_controller.swf" width="512" height="306">
                    <param name="quality" value="best" />
                    <param name="bgcolor" value="#1a1a1a" />
                    <param name="allowfullscreen" value="true" />
                    <param name="scale" value="showall" />
                    <param name="allowscriptaccess" value="always" />
                    <param name="flashvars" value="autostart=false&csConfigFile=Abendschau_config.xml&thumb=FirstFrame.png&thumbscale=45&showstartscreen=false&showendscreen=false&color=0x1A1A1A,0x1A1A1A" />
                <!--<![endif]-->
                    <div id="noUpdate">
                        <p>Zur Aktivierung des hier pr�sentierten Camtasia Studio-Videoinhalts werden JavaScript und die neueste Version des Adobe Flash Players ben�tigt. Falls JavaScript in Ihrem Browser deaktiviert ist, aktivieren Sie es jetzt. Andernfalls laden Sie die neueste Version des kostenlosen Adobe Flash Players herunter. Klicken Sie dazu <a href="http://www.adobe.com/go/getflashplayer">hier</a>.</p>
                    </div>
                <!--[if !IE]>-->
                </object>
                <!--<![endif]-->
            </object>
        </div>
        <!-- Users looking for simple object / embed tags can copy and paste the needed tags below.
        <div id="media">
            <object id="csSWF" classid="clsid:d27cdb6e-ae6d-11cf-96b8-444553540000" width="512" height="306" codebase="http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=9,0,115,0">
                <param name="src" value="Abendschau_controller.swf"/>
                <param name="bgcolor" value="#1a1a1a"/>
                <param name="quality" value="best"/>
                <param name="allowScriptAccess" value="always"/>
                <param name="allowFullScreen" value="true"/>
                <param name="scale" value="showall"/>
                <param name="flashVars" value="autostart=false#&csConfigFile=Abendschau_config.xml&thumb=FirstFrame.png&thumbscale=45&showstartscreen=false&showendscreen=false&color=0x1A1A1A,0x1A1A1A"/>
                <embed name="csSWF" src="Abendschau_controller.swf" width="512" height="306" bgcolor="#1a1a1a" quality="best" allowScriptAccess="always" allowFullScreen="true" scale="showall" flashVars="autostart=false&csConfigFile=Abendschau_config.xml&thumb=FirstFrame.png&thumbscale=45&showstartscreen=false&showendscreen=false&color=0x1A1A1A,0x1A1A1A" pluginspage="http://www.macromedia.com/shockwave/download/index.cgi?P1_Prod_Version=ShockwaveFlash"></embed>
            </object>
        </div>
        -->
<!--
      <object id="MediaPlayer" classid="CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95" codebase=" http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=6,4,5,715" standby="Loading Microsoft Windows Media Player components..." type="application/x-oleobject" height="53" width="150">
      <param name="FileName" value="abendschau.mp4"><param name="TransparentAtStart" value="true"><param name="AutoStart" value="true"><param name="AnimationatStart" value="false">
      <param name="ShowStatusBar" value="true"><param name="ShowControls" value="true"><param name="autoSize" value="false"><param name="displaySize" value="false">
      <param name="ShowAudioControls" value="true"><param name="ShowPositionControls" value="false">
      
      <embed type="application/x-mplayer2" pluginspage=" http://www.microsoft.com/Windows/Downloads/Contents/Products/MediaPlayer/" src="./abendschau.mp4" name="MediaPlayer" transparentatstart="1" autostart="1" animationatstart="0" showcontrols="true" showaudiocontrols="1" showpositioncontrols="0" autosize="0" showstatusbar="1" displaysize="false" height="288" width="512"></object><br>
-->
</center><br>
Klimaprojekt "T�ren zu" vom Februar 2012
 </div></td></tr>


  
  
  </tbody>
</table>
</td></tr>


  
  
  </tbody>
</table>



</body>
</html>
