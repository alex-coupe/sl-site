$(document).ready(function() {

    let textWrapper = document.querySelector('.ml3');
    if (textWrapper !== null) {
        textWrapper.innerHTML = textWrapper.textContent.replace(/([^\x00-\x80]|\w)/g, "<span class='letter'>$&</span>");

        anime.timeline({ loop: true })
            .add({
                targets: '.ml3 .letter',
                opacity: [0, 1],
                easing: "easeInOutQuad",
                duration: 2250,
                delay: function(el, i) {
                    return 150 * (i + 1)
                }
            }).add({
                targets: '.ml3',
                opacity: 0,
                duration: 1000,
                easing: "easeOutExpo",
                delay: 5000
            });
    }

    // document ready  
});