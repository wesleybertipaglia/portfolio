const toTopButton = document.getElementById("button-to-top");
window.onscroll = function() {scrollFunction()}
        
function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        toTopButton.style.display = "block"
    } else {
        toTopButton.style.display = "none"
    }
}

function topFunction() {
    window.scroll({top: 0, left: 0, behavior: 'smooth'})
}
