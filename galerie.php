<?php
//////////////////////////////////
// Quelltext geschrieben von    //
// Oisín Smith                  //
// 2015                         //
//////////////////////////////////

//Öffnet ein Unterverzeichnis mit dem Namen "daten"
$abs = $dir . "/" . $bilder . "/";
$verzeichnis = openDir($abs);

// Verzeichnis lesen

$anzahl = 0;
$zaehl = 1;
$bilder = Array();
while ($file = readDir($verzeichnis)) {
    // Höhere Verzeichnisse nicht anzeigen!
    if ($file != "." && $file != ".." && $file != "Thumbs.db" && $file != "teaser") {
        $anzahl++;
        // Link erstellen
        $anfang = strpos($file, ".");
        $genau = substr($file, 0, $anfang);
        array_push($bilder, $file); // Array von Bildern

    }
}

closeDir($verzeichnis); /* Verzeichnis schließen */

function js_str($s)
{
    /*return '"' . addcslashes($s, "\0..\37\"\\") . '"';*/
    return '"' . $s . '"';
}

function js_array($array)
{
    $temp = array_map('js_str', $array);
    return '[' . implode(',', $temp) . ']';
}

$out = js_array($bilder);

?>
<script>
    function BilderGalerie() {
        this.bilder = <?php echo $out; ?>; // Fill with PHP
        this.current = 0; //Current Pos
        this.len = this.bilder.length;
        this.zoom = false; //Boolean: Show Thumbnails / Big Image
        this.path = "<?php echo $abs; ?>/";
        BilderGalerie.prototype.next = function () {
            if (this.current < this.len - 1) {
                this.current += 1;
                $("#galerie-big").attr('src', this.path + this.bilder[this.current]);

            }
            //Next Big Image
        };
        BilderGalerie.prototype.prev = function () {
            if (this.current > 0) {
                this.current -= 1;
                $("#galerie-big").attr('src', this.path + this.bilder[this.current]);
            }
        };
        BilderGalerie.prototype.toggleDisplay = function () {
            var cont = "";
            if (this.zoom === true) {
                cont = '<div id="steuerung"><span id="back"><-- Zurück</span> | <span id="close">Schließen</span> | <span id="next">Nächstes --></span></div><div id="inner"><a name="galerie"></a>';

                cont += $.validator.format('<img src="{0}" id="galerie-big"/>',
                    this.path + this.bilder[this.current]);

                cont += "</div>";
                cont += '<div id="steuerung" onmousedown="return false;"><span id="back"><-- Zurück</span> | <spanid="close">Schließen</span> | <span id="next">Nächstes --></span></div>';
                $("#galerie").html(cont); //TODO
                this.zoom = !this.zoom;
            } else {
                cont = '<div id="inner">';
                for (var i in this.bilder) {
                    /*if (i != 0 && i % this.breite == 0) {
                     cont += "<br>";
                     console.log("BR")
                     }*/
                    cont += $.validator.format('<a href="#galerie"><img src="{0}" draggable="false" class="galerie-teaser" id="{1}" width="75" height="75"/></a>', this.path + this.bilder[i], i);

                }


                //console.log(cont);
                cont += "<br>Klicken zum Vergrößern";
                $("#galerie").html(cont);
                //console.log(this.zoom);
                this.zoom = !this.zoom;

            }
            //Toggle size (Thumbnails / Big Image)
        };
    }
    var a = null;
    $(function () {
        console.log("Galerie Initalisiert");

        if ($('#galerie').length) {
            var galerie = new BilderGalerie();
            galerie.toggleDisplay();

            $(document.body).on('click', ".galerie-teaser", function () {
                galerie.current = parseInt(this.id);
                galerie.toggleDisplay();

            });

            $(document.body).on('click', "#back", function () {
                galerie.prev();
            });

            $(document.body).on('click', "#next", function () {
                galerie.next();
            });

            $(document.body).on('click', "#close", function () {
                galerie.toggleDisplay();
            });
        }
    });
</script>