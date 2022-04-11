// start splide
new Splide('.splide', {
    type: 'loop',
    autoWidth: true,
    focus: 'center',
}).mount();
new Splide('.shot', {
    type: 'loop',
    autoWidth: true,
    focus: 'center',
}).mount();
// end splide
window.onload = function () {
    window.onscroll = function() {
        // start nav
        var navbar = document.getElementById('navbar-xj');
        if (document.scrollingElement.scrollTop >= 50) {
            navbar.style.position = 'fixed';
            navbar.style.background = '#0e0f1f';
            navbar.style.zIndex = '9999999999';
        }
        if(document.scrollingElement.scrollTop <= 50) {
            navbar.style.position = 'absolute';
            navbar.style.background = 'transparent';
        }
        // end nav
        // start function run
        var Nar = document.getElementsByClassName('nar')[0];

        if (Nar.hasAttribute('id')) {
            if (document.scrollingElement.scrollTop >= 200) {
                // start function run
                var num1 = document.getElementById('run1'),
                    num2 = document.getElementById('run2'),
                    num3 = document.getElementById('run3'),
                    num4 = document.getElementById('run4');

                function anmatedCounter(element, start, end, duration) {
                    var rang = end - start,
                        current = start,
                        increment = 0;
                    if (end > start) {
                        increment = 1;
                    } else {
                        increment = -1;
                    }
                    var timer = setInterval(function () {
                        current += increment;
                        element.textContent = current;
                        if (current == end) {
                            clearInterval(timer);
                        }
                    }, duration);
                }
                anmatedCounter(num1, 0, 2000, 1);
                anmatedCounter(num2, 0, 1500, 6);
                anmatedCounter(num3, 0, 500, 15);
                anmatedCounter(num4, 0, 300, 25);
            }
            if (document.scrollingElement.scrollTop >= 200) {
                Nar.removeAttribute('id');
            }
        } // close function run
    }
}
var img1 = document.getElementById('img1'),
    img2 = document.getElementById('img2'),
    img3 = document.getElementById('img3'),
    click1 = document.getElementById('click1'),
    click2 = document.getElementById('click2'),
    click3 = document.getElementById('click3');

click1.onclick = function () {
    img1.style.visibility = 'visible';
    img2.style.visibility = 'hidden';
    img3.style.visibility = 'hidden';
}
click2.onclick = function() {
    img1.style.visibility = 'hidden';
    img3.style.visibility = 'hidden';
    img2.style.visibility = 'visible';

}
click3.onclick = function () {
    img1.style.visibility = 'hidden';
    img2.style.visibility = 'hidden';
    img3.style.visibility = 'visible';
}