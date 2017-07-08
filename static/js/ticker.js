/* Freienticker von Oisin Smith */
$("document").ready(function(){
    var ferien = "Sommerferien";
    var abgelaufen_text = "Ferien!";
    var datum = new Date("7/19/2017"); // Ami format MM/TT/JJJJ


    var ticker = $("#ticker");
    var _sekunde = 1000;
    var _minute = _sekunde * 60;
    var _stunde = _minute * 60;
    var _tag = _stunde * 24;
    var timer;
    var text = "";

    function update() {
        var now = new Date();
        var restlich = datum - now;
        if (restlich < 0) {
            clearInterval(timer);
            ticker.html(abgelaufen_text);
            return;
        }
        var tage = Math.floor(restlich / _tag);
        var stunden = Math.floor((restlich % _tag) / _stunde);
        var minuten = Math.floor((restlich % _stunde) / _minute);
        var sekunden = Math.floor((restlich % _minute) / _sekunde);

        text = tage + " Tage, " + stunden + " Stunden, " + minuten + " Minuten, " + sekunden + " Sekunden bis zu den " + ferien;
        ticker.html(text);
    }

    timer = setInterval(update, 1000);
});