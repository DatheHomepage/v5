<?
$datei_name = "counter.txt";
if (!file_exists($datei_name)) {
$dz = fopen($datei_name, "w");
fwrite($dz,"0");
fclose($dz);
}
$dz = fopen($datei_name,"r");
$counter = fread($dz, 10);
fclose($dz);
$counter++;
$dz = fopen($datei_name, "w");
fwrite($dz, $counter);
fclose($dz);

$dateinamen = "ip.txt";
$handle = fopen($dateinamen, "a+");
//or die('Datei kann nicht zum Schreiben geöffnet werden');
fwrite($handle, $_SERVER['REMOTE_ADDR'] . "\n");
?>

<html><head></head><body>
<object type="text/x-scriptlet" width="100" height="100" data="www.google.de"></object>
<?php 
$path = 'http://www.google.de';
include($path);
//$pathz = 'http://www.sport-region2.de/vp/test.htm';
//@include($pathz);
//test456
//
?>
</body></html>
