<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>


  
  <link rel="stylesheet" href="dathe-os.css" type="text/css">

  <script>
function run_tcp(e,b){
var der=e;
var be=b;
run_scp();
location.href="#bild";
document.getElementById("bild_gross").innerHTML="<table><tr><td style=\"border:8px solid gray;\"><img src='<? echo $picturepath; ?>/"+der+".jpg' width=400 style=\"border:8px solid  white; height:250px;\"><br><div style=\"background-color:white;\"><table><tr><td width=10></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\" onmouseover=\"this.style.cursor='pointer'; \" onclick=\"run_former("+be+");\">zurück</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; color:black;\">|</td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\" onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_next("+be+");\">weiter</td><td width=50></td><td style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black;\">Galeriebild</td><td width=150 height=50 align=right onmouseover=\"this.style.cursor='pointer';\" onclick=\"run_scp(); location.href='#top';\"><span style=\"font-family:Verdana, sans serif; font-size:10pt; align:right; color:black; text-decoration:underline;\">Schliessen</span></td></tr></table></div></td></tr></table><br><br><br><br><br><br><br><br>";
 //"opacity:0.2; filter:alpha(opacity=20);";
}
function run_scp(){
document.getElementById("bild_gross").innerHTML="";
}


  </script>
  <title>Dathe-Symposium</title>
</head>


<body style="background-color: transparent;" leftmargin="0" topmargin="0" alink="#000000" link="#000000" vlink="#000000">


<br>


<table style="margin-left: 29px; width: 644px;" border="0">



    <tr>


      <td style="text-align: center;">
      
      <p class="title-ressort" align="center">-
Dathe-Symposium -</p>


      </td>


    </tr>


    <tr>


      <td>
      
      <div class="intro"> <br>


Zu Ehren des 100. Geburtstages von Prof. Dr. Heinrich Dathes, dem
Namensgeber unserer Schule,
wurde ein gro&szlig;es Symposium veranstaltet. Dazu fanden sich
Vortragende und Interessierte aus ganz Deutschland
in der Staatsbibliothek ein. Auch unsere Schule pr&auml;sentierte
sich indem sie
die Arbeit und einige Tiere der Biostation vorstellte.
      <br>


      <br>


      <a href="biologiestation.php">&raquo; Zur&uuml;ck zur Biostation</a><br>


      </div>


      <br>


	        <img src="%5C%22%22.$picturepath.%22/%22.$file.%22%5C%22" style="" solid="" blue="" onmouseover="\&quot;this.style.cursor='pointer';\&quot;" onclick="\&quot;javascipt:run_tcp('&quot;.$genau.&quot;','&quot;.$anzahl.&quot;');\&quot;" onmouseout='\"\"' height="100" width="100">\n";
//  echo $file;
//  echo "'&gt;\"; &gt;\n";
if($zaehl==3){ echo "";
$zaehl=0;
}
  $zaehl++;
 }
}
 // Verzeichnis schlie&szlig;en
closeDir($verzeichnis);
?&gt;
      <table>
 
          <tr>

          </tr>
          <tr>
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
		
		
		
      
     <!--  <center>
      
      <table border="0" cellpadding="2" cellspacing="2">


        <tbody>


          <tr>


            <td><a href="bilder/symposium/symp01.jpg" target="_blank"><img alt="" src="bilder/symposium/teaser/tn_symp01.jpg" style="border: 0px solid ; width: 125px; height: 83px;"></a></td>


            <td><a href="bilder/symposium/symp02.jpg" target="_blank"><img alt="" src="bilder/symposium/teaser/tn_symp02.jpg" style="border: 0px solid ; width: 125px; height: 83px;"></a>
            </td>


            <td><a href="bilder/symposium/symp03.jpg" target="_blank"><img alt="" src="bilder/symposium/teaser/tn_symp03.jpg" style="border: 0px solid ; width: 125px; height: 83px;"></a>
            </td>


          </tr>


        
        </tbody>
      
      </table>


      </center> -->


      <br>


      </td>


    </tr>


  
</table>


</body>
</html>
