document.addEventListener("DOMContentLoaded", function() {
    fetch("usernavbar.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;
    });
});
