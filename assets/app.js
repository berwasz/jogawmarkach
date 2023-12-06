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

const $ = require('jquery');
// this "modifies" the jquery module: adding behavior to it
// the bootstrap module doesn't export/return anything
require('bootstrap');

// chowanie strzałek w karuzeli z instrukcją do aplikacji efitness//

const myCarousel = document.getElementById('carousel')

myCarousel.addEventListener('slid.bs.carousel', evt => {
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

//grafik//

document.addEventListener('DOMContentLoaded', function() {
    var calendarEl = document.getElementById('calendar');

    var calendar = new FullCalendar.Calendar(calendarEl, {
        plugins: [
            interactionPlugin,
            dayGridPlugin
        ],
        themeSystem: 'bootstrap5',
        headerToolbar: {
            start: 'title',
            center: 'dayGridMonth,dayGridWeek',
            end: 'today prev,next'
        },
        initialView: 'dayGridMonth',
        initialDate: new Date(),
        eventColor: '#f8cd96',
        locale: 'plLocale',
        firstDay: 1,

        events: [
            {
                title: 'Joga',
                start: '2023-12-02T10:00:00',
                end: '2023-12-02T10:55:00',

            },
            {
                title: 'Joga',
                start: '2023-12-05T20:00:00',
                end: '2023-12-05T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-07T20:00:00',
                end: '2023-12-07T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-09T10:00:00',
                end: '2023-12-09T10:55:00'
            },
            {
                title: 'Pilates',
                start: '2023-12-09T11:00:00',
                end: '2023-12-09T11:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-12T20:00:00',
                end: '2023-12-12T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-14T20:00:00',
                end: '2023-12-14T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-16T10:00:00',
                end: '2023-12-16T10:55:00'
            },
            {
                title: 'Pilates',
                start: '2023-12-16T11:00:00',
                end: '2023-12-16T11:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-19T20:00:00',
                end: '2023-12-19T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-21T20:00:00',
                end: '2023-12-21T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-23T10:00:00',
                end: '2023-12-23T10:55:00'
            },
            {
                title: 'Pilates',
                start: '2023-12-23T11:00:00',
                end: '2023-12-23T11:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-28T20:00:00',
                end: '2023-12-28T20:55:00'
            },
            {
                title: 'Joga',
                start: '2023-12-30T10:00:00',
                end: '2023-12-30T10:55:00'
            },
            {
                title: 'Pilates',
                start: '2023-12-30T11:00:00',
                end: '2023-12-30T11:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-02T20:00:00',
                end: '2024-01-02T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-04T20:00:00',
                end: '2024-01-04T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-09T20:00:00',
                end: '2024-01-09T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-11T20:00:00',
                end: '2024-01-11T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-16T20:00:00',
                end: '2024-01-16T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-18T20:00:00',
                end: '2024-01-18T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-23T20:00:00',
                end: '2024-01-23T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-25T20:00:00',
                end: '2024-01-25T20:55:00'
            },
            {
                title: 'Joga',
                start: '2024-01-30T20:00:00',
                end: '2024-01-30T20:55:00'
            },
        ],
        eventDisplay: 'block',
        eventOrder: 'start,title',
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


