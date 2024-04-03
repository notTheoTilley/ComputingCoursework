document.addEventListener("DOMContentLoaded", function() {
    fetch("adminnavbar.html")
    .then(response => response.text())
    .then(data => {
        document.getElementById("navbar").innerHTML = data;
    });
});