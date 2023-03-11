function show() {
    var a = document.getElementById("fileToUpload");
    var b = document.getElementById("btphotoupload");
    var c = document.getElementById("btphoto");
    a.style.display = "block";
    a.click();
    b.style.display = "inline";
    c.style.display = "none";

}

function showsig() {
    var d = document.getElementById("fileToUploadsi");
    var e = document.getElementById("signchoose");
    var f = document.getElementById("btnsign");
    d.style.display = "block";
    d.click();
    e.style.display = "inline";
    f.style.display = "none";
}

function validate() {

    let x = document.forms["form"]["h_block"].value;
    let mob_no = document.forms["form"]["mob_no"].value;
    let whats = document.forms["form"]["whats_no"].value;
    let mob_er = document.getElementById("mob");
    let whats_er = document.getElementById("whats");
    let ad_er = document.getElementById("address");
    if (x == "") {
        ad_er.style.display = "inline";
        return false;
    } else if ((mob_no.length > 10) || (mob_no.length < 10)) {
        mob_er.style.display = "inline";
        return false;
    } else if ((whats.length > 10) || (whats.length < 10)) {
        whats_er.style.display = "inline";
        return false;
    }
}