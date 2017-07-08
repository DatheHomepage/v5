# Elemente.css

Inhalt
 * Artikel
 * Infobox
 * Überschriften
 * Bilder
 * Archiv
 * Tabellen
 * Form
 * Bildergalerie
 * Horizontales Menü
 
 
#### Artikel
Grün umrandete Box um informationene hervorzuheben.

`.artikel` Hauptklasse  
`.artikel-schatten` Fügt Schatten hinzu  
`.artikel-titel` Titel für Artikel  
`.artikel-bild` Bild für Artikel (wird)

######Beispiel
```
<div class="artikel artikel-schatten">
    <img class="artikel-bild" src="bild.png">
    <div class="artikel-titel">Artikel Titel</div>
    Inhalt
</div>
```

#### Infobox
Box für Seitenleisten

`.infobox` Hauptklasse  
`.infobox-titel` Titel für Infobox  
(Alle Buchstaben werden automatisch groß geschrieben)  

######Beispiel
```
<div class="infobox">
    <div class="infobox-titel">Impressum</div>
    Straße 123
</div>
```