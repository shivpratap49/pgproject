function validate() {

    let exam = document.forms["form"]["exam_name"].value;
    let advt = document.forms["form"]["advt_no"].value;
    let board = document.forms["form"]["board_name"].value;
    let mob_er = document.getElementById("name");
    let whats_er = document.getElementById("advt_no");
    let ad_er = document.getElementById("board");
    if (exam == "") {
        ad_er.style.display = "inline";
        return false;
    } else if (advt=="") {
        mob_er.style.display = "inline";
        return false;
    } else if (board=="") {
        whats_er.style.display = "inline";
        return false;
    }
}