let selectHeader = document.querySelector(".navbar");

window.addEventListener('scroll',(event) => {
    if (window.scrollY > 15) {
        selectHeader.classList.add('bg-navbar')
    } else {
        selectHeader.classList.remove('bg-navbar')
    }
});

