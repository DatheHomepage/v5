
// die Default-CSS-Datei
defCss="rot.css"; 

// den Wert css wird aus dem Cookie auslesen
function WertHolen() {

	var s =defCss;
	if(document.cookie) {
  		var cString=document.cookie
  		var a = cString.indexOf("css=") + 4;
 	 	cString=cString.substring(a,cString.length);
  		var b = cString.indexOf(";");
  		if (b == -1) b = cString.length;
  		s = cString.substring(0,b);
 	}
 	return s;
}

// wert "styleFile" in ein Cookie schreiben
function cssSetzen(styleFile) { 

   	//Gültigkeit des cookies in Tagen
	var tage=5; 
	var datum = new Date();
   	var bis = datum.getTime() + (tage * 24 * 60 * 60 * 1000);
   	datum.setTime(bis);

   	// Cookie wird gesetzt
   	document.cookie = "css="+styleFile+"; expires=" + datum.toGMTString()+";"; 

   	// Seite wird neu aufgerufen
   	document.location.href=document.location.href;  
}

// CSS-Pfad schreiben
if(document.cookie){  
	var css=WertHolen();
	document.write("<link rel=stylesheet type='text/css' href='"+css+"'>");
} else document.write("<link rel=stylesheet type='text/css' href='"+defCss+"'>");

// paste in html file: <a href="javascript:cssSetzen('meincss.css')">Setze mein CSS </a>
