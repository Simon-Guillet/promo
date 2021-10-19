function lightbox(n) {
    var lightbox = document.getElementById("lightbox");

    if (lightbox.className === "lightbox") {
        lightbox.className += " afficher";
    } else {
        lightbox.className = "lightbox";
    }
    lightbox.innerHTML = "<img id=\"image\" src=\"assets/img/cartes/"+n+".png\" alt=\"Delphine\">\n" +
        "            <div class=\"close\" onclick=\"lightbox()\"><i class=\"fa fa-close\"></i></div>"
}