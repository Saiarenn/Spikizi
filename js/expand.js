var coll = document.getElementsByClassName("collapsible");

for (var i = 0; i < coll.length; i++) {
    coll[i].addEventListener("click", function () {

        var content = this.previousElementSibling;
        var icon = this.getElementsByTagName('i')[0];
        var text = this.getElementsByTagName('span')[0];

        if (content.style.maxHeight) {
            icon.style.transform = "rotate(0deg)";
            content.style.maxHeight = null;
            text.innerHTML = "Expand";

        } else {
            icon.style.transform = "rotate(-180deg)";
            content.style.maxHeight = content.scrollHeight + "vw";
            text.innerHTML = "Show Less";
        }
    });
}

var coll2 = document.getElementsByClassName("collapsible2");

for (i = 0; i < coll2.length; i++) {
    coll2[i].addEventListener("click", function () {

        var content = this.nextElementSibling;
        var icon = this.getElementsByTagName('i')[0];

        if (content.style.maxHeight) {
            icon.style.transform = "rotate(0deg)";
            content.style.maxHeight = null;
        } else {
            icon.style.transform = "rotate(-180deg)";
            content.style.maxHeight = content.scrollHeight + "vw";
        }
    });
}