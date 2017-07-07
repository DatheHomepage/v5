//document.write("hallo");

// TODO Rewrite

function setcountdown(theyear, themonth, theday, thehour, themin, thesec) {
    var yr = theyear;
    var mo = themonth;
    var da = theday;
    var hr = thehour;
    var min = themin;
    var sec = thesec
}

// Einsetzen: Ferien
var ferien = "Sommerferien";
// Variablen konfigurieren
var countdownwidth = '125px';
var countdownheight = '35px';
var countdownbgcolor = '';
var opentags = '<font class="intro">';
var closetags = '</font>';
var montharray = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
var crosscount = '';

function start_countdown() {
    if (document.layers)
        document.countdownnsmain.visibility = "show";
    else if (document.all || document.getElementById)
        crosscount = document.getElementById && !document.all ? document.getElementById("countdownie") : countdownie
    countdown()
}

function countdown() {
    var today = new Date();
    var todayy = today.getYear();
    if (todayy < 1000)
        todayy += 1900;
    var todaym = today.getMonth();
    var todayd = today.getDate();
    var todayh = today.getHours();
    var todaymin = today.getMinutes();
    var todaysec = today.getSeconds();
    var todaystring = montharray[todaym] + " " + todayd + ", " + todayy + " " + todayh + ":" + todaymin + ":" + todaysec;
    futurestring = montharray[mo - 1] + " " + da + ", " + yr + " " + hr + ":" + min + ":" + sec;
    dd = Date.parse(futurestring) - Date.parse(todaystring);
    dday = Math.floor(dd / (60 * 60 * 1000 * 24) * 1);
    dhour = Math.floor((dd % (60 * 60 * 1000 * 24)) / (60 * 60 * 1000) * 1);
    dmin = Math.floor(((dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) / (60 * 1000) * 1);
    dsec = Math.floor((((dd % (60 * 60 * 1000 * 24)) % (60 * 60 * 1000)) % (60 * 1000)) / 1000 * 1);
//if on day of ferien
    if (dday <= 0 && dhour <= 0 && dmin <= 0 && dsec <= 1 && todayd === da) {
        if (document.layers) {
            document.countdownnsmain.document.countdownnssub.document.write(opentags + message_on_ferien + closetags);
            document.countdownnsmain.document.countdownnssub.document.close()
        }
        else if (document.all || document.getElementById)
            crosscount.innerHTML = opentags + message_on_ferien + closetags;
        return
    }
// Sofern der Tag der Ferien verpasst ist... gibt Meldung aus:
    else if (dday <= -1) {
        if (document.layers) {
            document.countdownnsmain.document.countdownnssub.document.write(opentags + "Wir wünschen schöne und erholsame Ferien. Bis bald. " + closetags)
            document.countdownnsmain.document.countdownnssub.document.close()
        }
        else if (document.all || document.getElementById)
            crosscount.innerHTML = opentags + "Wir wünschen schöne und erholsame Ferien. Bis bald. " + closetags;
        return
    }
// ...andernfalls
    else {
        if (document.layers) {
            document.countdownnsmain.document.countdownnssub.document.write("" + opentags + dday + "Tage, " + dhour + " Stunden, " + dmin + " Minuten, und " + dsec + " Sekunden " + ferien + closetags)
            document.countdownnsmain.document.countdownnssub.document.close()
        }
        else if (document.all || document.getElementById)
            crosscount.innerHTML = "" + opentags + dday + " Tag(e), " + dhour + " Stunden, " + dmin + " Minuten und " + dsec + " Sekunden bis zu den " + ferien + "." + closetags
    }
    setTimeout("countdown()", 1000)
}

function main() {

// Nullzeit: Countdown läuft hinaus auf den Jahr, Monat, Tag, Stunde, Minuten, Sekunden:
    setcountdown(2017, 7, 19, 15, 15, 0);

    if (document.all || document.getElementById) {
        document.write('<span id="countdownie" style="width:' + countdownwidth + '; background-color:' + countdownbgcolor + '"></span>')
    }

    window.onload = start_countdown

}                    