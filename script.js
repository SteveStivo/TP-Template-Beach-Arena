// ------- fonction récupération du numéro de la clé et envoi du contenu à la balise html
const showBeach = (str) => {

    if (str == "") {
        str.getElementById("reponse").innerHTML = "";
        return;
    } else {
    let xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function () {
    if(this.readyState === 4 && this.status === 200) {
    document.getElementById("reponse").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "getuser.php?q="+str, true);
        xmlhttp.send();
    }
}
