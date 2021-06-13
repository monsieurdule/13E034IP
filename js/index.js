var modal = document.getElementById("loginModal");
var btn = document.getElementById("loginBtn");

btn.onclick = function() {
    loginModal.style.display = "block";
}

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}