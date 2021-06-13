function generateForm() {

    var cnt = parseInt(document.getElementById("brDana").value);
    document.getElementById("form-content").innerHTML = "";

    for (var i = 0; i < cnt; i++) {
        document.getElementById("form-content").innerHTML
            += "<label for=\"date\">Radni dan " + (i + 1) + ". praznika:</label><br><input type=\"date\" id=\"birthday " +
            cnt + " \" name=\"birthday\"><br><label for=\"nhours\">Broj sati:</label><br><input type=\"text\" id=\"nhours " +
            cnt + "\" name=\"nhours\"><br><br>"
    }
    document.getElementById("form-content").innerHTML += "<button type=\"submit\" onclick=\"submitForm()\"> Submit </button>";

}

function submitForm() {

    //dohvatanje php-a i  ubacivanje u bazu

    window.location.href = "file:///C:/wamp64/www/13E034IP/html/medic.html";//redirect na drugu stranicu

}