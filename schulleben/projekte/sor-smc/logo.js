// erstellt von John Fuchs
var bilder=new Array(
	'logo/logo.jpg',
	'logo/logo-i.jpg'
	);
var imganzahl=bilder.length;
var z=0;
function wechseldich(){
if(z==imganzahl)z=0; //z�hler zur�cksetzen
	document.diashow.src=bilder[z];
	setTimeout('wechseldich()',3000); // 3 sekunden
	z++;
}