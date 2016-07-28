
function changeImage() {
    var image = document.getElementById('img');
    if (image.src.match("1")) {
        image.src = "images/2.png";
    } else {
        image.src = "images/1.png";
    }
}