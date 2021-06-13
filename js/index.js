var modal;

function klikDugme() {
    loginModal.style.display = "block";
}

window.onclick = function (event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

function start() {

    document.getElementById("loginBtn").addEventListener("click", klikDugme);
    modal = document.getElementById("loginModal");
}

window.onload = start;