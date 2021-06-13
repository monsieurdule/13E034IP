function generateForm() {

    var cnt = parseInt(document.getElementById("brDana").value);
    document.getElementById("form-content").innerHTML = "";

    for (var i = 0; i < cnt; i++) {

        document.getElementById("form-content").innerHTML += "<label for=\"date\">Radni dan:</label><br><input type=\"date\" id=\"birthday " +
            cnt + " \" name=\"birthday\"><br><label for=\"nhours\">Broj sati:</label><br><input type=\"text\" id=\"nhours " +
            cnt + "\" name=\"nhours\"><br><br><input type=\"submit\" id=\"submit" + cnt + "\">"

    }

}