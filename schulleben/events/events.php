<?
$picturepath="bilder";
?>
<html>
<head>

  <link type="text/css" href="../../dathe-os.css" rel="stylesheet">
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


<body topmargin="0" leftmargin="0" style="background-color: transparent;" alink="#000000" link="#000000" vlink="#000000">

<br>

<table class="tabinhalt">

  <tbody>

    <tr>

      <td style="text-align: center;">
      <div class="title" align="center">-
Events -</div>

      </td>

    </tr>
	 <tr>
      <td>
	  <div class="teaser">
	  <br>
	  <strong>Fr�hlingskonzert 2014</strong><br>
	  Es ist soooooo sch�n, dass wir, in dieser stressigen Zeit,<br>
	  mittels unserer Fr�hlingskonzerte mal einfach so musikalisch entf�hrt werden und<br>
	  unsere Gedanken von den Korrekturstapeln und den anderen Dingen, die da so warten, wegbekommen.<br>
	  Liebe Musiklehrkr�fte, vielen Dank f�r die Anstrengungen, die Sie f�r die Schulgemeinschaft unternommen haben.<br>
	  Wir haben uns gut unterhalten gef�hlt und erfreuten uns an den musikalischen Geschenken, <br> 
	  die uns unsere Sch�ler/innen gegeben haben. <br>
	  Schulze (Schulleiterin)<br>
      </div>
		<br>
		<br>
		<div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>
		</td>
		</tr>
		<tr>
		<td>
		<img src="../../teaser/soko14_1klein.jpg">
		<img src="../../teaser/soko14_2klein.jpg">
		<img src="../../teaser/soko14_3klein.jpg">
      <br>
      <br>
      </div>
      </td>  
	</td>
	</tr>	
	
	 <tr>
      <td>
	  <div class="teaser">
	  <br>
	  <strong>Weihnachtskonzert 2013</strong><br>
	  Das Weihnachtskonzert war wie jedes Jahr ein voller Erfolg.<br> An zwei Terminen haben die Sch�lerinnen und Sch�ler unserer Schule <br>
	  ihr musikalisches K�nnen auf der B�hne gezeigt.<br>
	  </div>
	  <br>
		<br>
	  <div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>
	</td>
	</tr>
	<tr>
	<td>
        
		<img src="./bilder_normal/wk13_1.jpg">
		<img src="./bilder_normal/wk13_2.jpg">
		<img src="./bilder_normal/wk13_3.jpg">
		      <br>
      <br>
      </div>
      </td>
    </tr>
	  
	  
    <tr>

      <td>
      <div class="teaser">
	  <strong>Tag der offenen T�r 2013</strong><br>
	  Und wieder einmal �ffnete die Dathe-Oberschule anl�sslich des allj�hrlichen Tages der offenen T�r ihre Pforten.<br>
	  Wieder einmal war ein gro�er Andrang an Besuchern zu verzeichnen. Die Schule bedankt sich bei allen Beteiligten.<br>
	  Eindr�cke vermitteln die folgenden Bilder;<br>
	  <br>
	  <br>
	  </div>
	  
	  <div align="center" style="position:relative; top:0px; left:0px; margin-left: auto; margin-right: auto;" id="bild_gross"></div>
	</td>
	</tr>
	<tr>
	<td>
        
		<img src="./bilder/tdoT04klein.jpg">
		<img src="./bilder/tdoT06klein.jpg">
		<img src="./bilder/tdoT07klein.jpg">
		      <br>
      <br>
      </div>
	  
	  </td>
	  </tr>
	  
	  


  </tbody>
</table>

</body>
</html>
