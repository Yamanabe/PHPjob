function changeLang() {
    var langValue = document.getElementById("select_lang").value;
    var lang = document.getElementById("lang");
    var jpn = lang.rows[0];
    var en = lang.rows[1];

    if (langValue == "全て表示") {
        jpn.style.display = "block";
        en.style.display = "block";
    } else if (langValue == "日本語") {
        jpn.style.display = "block";
        en.style.display = "none";
    } else if (langValue == "English") {
        jpn.style.display = "none";
        en.style.display = "block";
    }
}