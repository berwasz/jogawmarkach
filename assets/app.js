/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you import will output into a single css file (app.css in this case)
import './styles/app.css';

import * as FullCalendar from "@fullcalendar/core";
import plLocale from '@fullcalendar/core/locales/pl';
import interactionPlugin from '@fullcalendar/interaction';
import dayGridPlugin from '@fullcalendar/daygrid';
import googleCalendarPlugin from '@fullcalendar/google-calendar';

import AOS from 'aos';
import 'aos/dist/aos.css';


const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

import * as bootstrap from 'bootstrap'

// animacje podczas scrolowania
AOS.init({
    duration: 800,
    easing: 'linear',
    offset: 120,
    once: false
});

// preloader
document.onreadystatechange = function () {
    if(document.readyState !== 'complete') {
        document.querySelector('body').style.visibility = 'hidden';
        document.querySelector('.loader-container').style.visibility = 'visible';
    } else {
        document.querySelector('.loader-container').style.display = 'none';
        document.querySelector('body').style.visibility = 'visible';
    }
};


// chowanie strzałek w karuzeli z instrukcją do aplikacji efitness//
var myCarousel = document.querySelector('#rejestracja')
var carousel = new bootstrap.Carousel(myCarousel, {
  
})

myCarousel.addEventListener('slid.bs.carousel', evt => {
    checkitem();
});

$(function () {
    checkitem();
});

function checkitem() {
    var $this = $('#rejestracja');
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

//grafik//


document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [
            interactionPlugin,
            dayGridPlugin,
            googleCalendarPlugin
        ],
        googleCalendarApiKey: 'AIzaSyDP243XC-h9sBXUny4AvExzpfkg2jD7VTA',
        themeSystem: 'bootstrap5',
        headerToolbar: {
            start: 'title',
            center: 'dayGridMonth,dayGridWeek',
            end: 'today prev,next'
        },
        initialView: 'dayGridMonth',
        initialDate: new Date(),
        eventColor: '#8b4513',
        locale: 'plLocale',
        firstDay: 1,

        eventSources: [
            {
                googleCalendarId: 'c1a7a01732723dd8dfb15b01594dd5e7e068f81b3e3d662d8fda6a77e0459ac1@group.calendar.google.com',
            },
            {

            },
        ],
        eventClick: function(info) {
            info.jsEvent.preventDefault(); // don't let the browser navigate
        },
        eventDisplay: 'block',
        eventOrder: 'start,title,description',
        eventTimeFormat:
            {
                hour: '2-digit',
                minute: '2-digit',
                meridiem: false,
                hour12: false
            },
        displayEventEnd: false,
        buttonText: {
            today : 'Dziś',
            month: 'miesiąc',
            week: 'tydzień',
            day: 'dzień',
            list: 'lista'
        },
        buttonHints: {
            prev: 'Poprzedni $0',
            next: 'Następny $0',
            today: 'Dziś',
            month: 'widok miesiąca',
            week: 'widok tygodnia'
        }

    });

    calendar.render();
});

//zdjęcie o mmnie

/* $(window).resize(function () {
    var width = $(window).width();
    if (width < 768) {
        $("#omnie").html("<div class=\"card rounded-0 bg-transparent border-0\">\n" +
            "                    <div class=\"row g-0\">\n" +
            "                        <div class=\"col-md-6\">\n" +

            "                                <img class=\"img-fluid\" src=\"img/kasia_omnie_800x800.webp\">\n" +

            "                        </div>\n" +
            "                        <div class=\"col-md-6\">\n" +
            "                            <div class=\"card-body\">\n" +
            "                                <h5 class=\"display-4\">O MNIE</h5>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Instruktor fitness. Katarzyna Latek. Instruktorka pilates, entuzjastka jogi i strechingu, pasjonatka wielu form ćwiczeń z zakresu body&mind.</p>\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "                </div>");
    } else {
        $("#omnie").html("<div id=\"gradient\" class=\"card text-bg-dark border-0 rounded-0\">\n" +

            "                        <img class=\"img-fluid\" src=\"img/kasia_omnie_1600x1000.webp\">\n" +

            "                    <div class=\"col-md-5 card-img-overlay d-flex flex-column p-0\">\n" +
            "                    <div style=\"background-color: rgba(0,0,0,.3); border-radius: 0 0 10px 0\" class=\"p-3\">\n" +
            "                        <h5 class=\"display-4\">O MNIE</h5>\n" +
            "                        <p class=\"lead\" style=\"text-indent: 2rem\">Instruktor fitness. Katarzyna Latek. Instruktorka pilates, entuzjastka jogi i strechingu, pasjonatka wielu form ćwiczeń z zakresu body&mind.</p>\n" +
            "                    </div>\n" +
            "                    </div>\n" +
            "                </div>");
    }
});
$(window).trigger('resize');

//zdjęcie do jogi
$(window).resize(function () {
    var width = $(window).width();
    if (width < 768) {
        $("#oferta").html("<div class=\"card rounded-0 bg-transparent border-0\">\n" +
            "                    <div class=\"row g-0\">\n" +
            "                        <div class=\"col-md-6\">\n" +

            "                                <img class=\"img-fluid\" src=\"img/pexels-lucas-pezeta-9351349_800x800.webp\">\n" +

            "                        </div>\n" +
            "                        <div class=\"col-md-6\">\n" +
            "                            <div class=\"card-body\">\n" +
            "                                <h5 class=\"display-4\">JOGA</h5>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "                </div>");
    } else {
        $("#oferta").html("<div id=\"gradient\" class=\"card text-bg-dark border-0 rounded-0\">\n" +

            "                        <img class=\"img-fluid\" src=\"img/pexels-lucas-pezeta-9351349_1600x1000.webp\">\n" +

            "                    <div style='margin-left: 50%' class=\"col-md-6 card-img-overlay d-flex flex-column p-0\">\n" +
            "                    <div style=\"background-color: rgba(0,0,0,.3); border-radius: 0 0 0 10px\" class=\"p-3\">\n" +
            "                        <h5 class=\"display-4\">JOGA</h5>\n" +
            "                        <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>\n" +
            "                        <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>\n" +
            "                        <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>\n" +
            "                    </div>\n" +
            "                    </div>\n" +
            "                </div>");
    }
});
$(window).trigger('resize');

//zdjęcie do pilatesu
$(window).resize(function () {
    var width = $(window).width();
    if (width < 768) {
        $("#oferta-pilates").html("<div class=\"card rounded-0 bg-transparent border-0\">\n" +
            "                    <div class=\"row g-0\">\n" +
            "                        <div class=\"col-md-6\">\n" +

            "                                <img class=\"img-fluid\" src=\"img/pexels-andrea-piacquadio-868483_800x800.webp\">\n" +

            "                        </div>\n" +
            "                        <div class=\"col-md-6\">\n" +
            "                            <div class=\"card-body\">\n" +
            "                                <h5 class=\"display-4\">PILATES</h5>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>\n" +
            "                                <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>\n" +
            "                            </div>\n" +
            "                        </div>\n" +
            "                    </div>\n" +
            "                </div>");
    } else {
        $("#oferta-pilates").html("<div id=\"gradient\" class=\"card text-bg-dark border-0 rounded-0\">\n" +

            "                        <img class=\"img-fluid\" src=\"img/pexels-andrea-piacquadio-868483_1600x1000.webp\">\n" +

            "                    <div class=\"col-md-6 card-img-overlay d-flex flex-column justify-content-end p-0\">\n" +
                "                    <div style=\"background-color: rgba(0,0,0,.3); border-radius: 0 10px 0 0\" class=\"p-3\">\n" +
                "                        <h5 class=\"display-4\">PILATES</h5>\n" +
                "                        <p class=\"lead\" style=\"text-indent: 2rem\">Pilates wielu osobom kojarzy się głównie z maszynami. Tak, istnieje pilates na maszynach (reformer, cadillac, beczka, krzesło), ale to także – a właściwie przede wszystkim – system ćwiczeń na macie, czasem z drobnymi przyrządami.</p>\n" +
                "                        <p class=\"lead\" style=\"text-indent: 2rem\">Większość ćwiczeń opiera się na ciężarze własnego ciała i zakłada wzmocnienie mięśni core, czyli całego centrum ciała – brzucha, pleców, mięśni głębokich. A to poprawia postawę i wzmacnia kręgosłup, o korzyściach dla sylwetki nie wspominając. Pilates poprawia też gibkość, elastyczność i mobilność.</p>\n" +
                "                        <p class=\"lead\" style=\"text-indent: 2rem\">Nie ma znaczenia czy masz doświadczenie z pilatesem, czy dopiero chcesz spróbować. Zapraszam wszystkich!</p>\n" +
                "                    </div>\n" +
            "                    </div>\n" +
            "                </div>");
    }
});
$(window).trigger('resize'); */

/* button go to top */

//Get the button
let mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function () {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 600 ||
    document.documentElement.scrollTop > 600
  ) {
    mybutton.style.display = "block";
  } else {
    mybutton.style.display = "none";
  }
}
// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

function backToTop() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}


/* zmiana wyglądu toggle buttona */


	$('#nav-icon3').on('click', function() {
		$(this).toggleClass('open');
    });

    $('.nav-link').on('click', () => {
        $('#navbarNav').removeClass('show');
        $('#nav-icon3').removeClass('open');
    })



