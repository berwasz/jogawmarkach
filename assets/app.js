/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// chowanie strzałek w karuzeli z instrukcją do aplikacji efitness//

const myCarousel = document.getElementById('carousel')

myCarousel.addEventListener('slid.bs.carousel', function () {
    checkitem();
});

$(document).ready(function () {
    checkitem();
});

function checkitem() {
    var $this = $('#carousel');
    if($('.carousel-inner .carousel-item:first').hasClass('active')) {
        $this.children('.carousel-control-prev').hide();
        $this.children('.carousel-control-next').show();
    } else if($('.carousel-inner .carousel-item:last').hasClass('active')) {
        $this.children('.carousel-control-prev').show();
        $this.children('.carousel-control-next').hide();
    } else {
        $this.children('.carousel-control-prev').show();
        $this.children('.carousel-control-next').show();
    }
}

// koniec //

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';


