<?php
/**
 * Bildergalerie
 *
 * Erzeugt eine Bildergalerie aus den Bilder in dem spezifiziertem Pfad
 * $erlaubte_formate enthält alle Dateiendungen die erkannt werden sollen
 *
 */
$bilder_js = "";
function galerie($abs_path)
{
    global $bilder_js;
    $erlaubte_formate = array('.png', '.jpg');

    $bilder_arr = array();
    if ($handle = opendir($abs_path)) {
        while (false !== ($datei = readdir($handle))) {
            if (!in_array($datei, array('.', '..')) && $pos = strrpos($datei, '.')) {
                $dateiendung = substr($datei, $pos);
                if (in_array($dateiendung, $erlaubte_formate)) {
                    array_push($bilder_arr, $abs_path . '/' . $datei); // Array von Bildern
                }
            }
        }
    }
    closeDir($handle);
    $bilder_html = "";
    foreach($bilder_arr as $key => $bild){
        $bilder_html .= "<img src='$bild' id='$key' class='galerie-teaser'>";
        $bilder_js .= "'$bild',";
    }
    $html_vorlage = "<div id='galerie-open'>
                        <div id='galerie-steuerung'>
                            <span id='back' class='maus-hand'><i class='fa fa-arrow-left'></i> Zurück</span><span id='close' class='maus-hand'>Schließen</span><span id='next' class='maus-hand'>Nächstes <i class='fa fa-arrow-right'></i></span>
                        </div>
                        <div id='galerie-inner'>
                            <img src='' id='galerie-big' class='bild-mittig'/>
                        </div>
                     </div>
                     <div id='galerie-closed'>
                         <div>Klicken zum vergrößern</div>
                         <div id='galerie-teaser'>
                            $bilder_html
                         </div>
                     </div>";
?>

<script>
    function BilderGalerie() {
        this.bilder = [<?php echo $bilder_js; ?>];
        this.current = 0; //Current Pos
        this.len = this.bilder.length;
        this.zoom = true; //Boolean: Show Thumbnails / Big Image
        BilderGalerie.prototype.next = function () {
            if (this.current < this.len - 1) {
                this.current += 1;
                $("#galerie-big").attr('src', this.bilder[this.current]);
            }
            //Next Big Image
        };
        BilderGalerie.prototype.prev = function () {
            if (this.current > 0) {
                this.current -= 1;
                $("#galerie-big").attr('src', this.bilder[this.current]);
            }
        };
        BilderGalerie.prototype.toggleDisplay = function () {
            this.zoom = !this.zoom;
            if (this.zoom === true) {
                $("#galerie-open").show();
                $("#galerie-closed").hide();
                $("#galerie-big").attr('src', this.bilder[this.current]);
            } else {
                $("#galerie-closed").show();
                $("#galerie-open").hide();
            }
            //Toggle size (Thumbnails / Big Image)
        };
    }

    $(function () {
         galerie_div = $('#galerie');
        if (galerie_div.length) {
            galerie_div.html(`<?php echo $html_vorlage ?>`);
            var galerie = new BilderGalerie();
            galerie.toggleDisplay();

            $(".galerie-teaser").click(function () {
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
<?php } ?>