import { fadeSlide } from './lib/fadeslide.js';
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';

import BlazeSlider from 'blaze-slider';
import Tab from 'bootstrap/js/dist/tab';

calculateTriangle();
toggleSearchOverlay();

/** @type {import('./lib/fadeslide.js').FadeSlideConf} */
fadeSlide('banner-fade', { nav: true, delay: 3000, loop: true });

const papersBlaze = document.getElementById('home-papers-blaze');
const papersNavNext = document.querySelector('.paper-nav .next');
const papersNavPrev = document.querySelector('.paper-nav .prev');

if (papersBlaze) {
  const homePapersSlider = new BlazeSlider(papersBlaze, {
    all: {
      slideGap: '24px',
      slidesToShow: 4.90,
      enableAutoplay: true,
      autoplayInterval: 4000
    },
  });
  papersNavNext.addEventListener('click', () =>
    homePapersSlider.next()
  );
  papersNavPrev.addEventListener('click', () =>
    homePapersSlider.prev()
  );
}


const eventsBlaze = document.getElementById("home-events-blaze");
const eventsNavNext = document.querySelector(".events-nav .next");
const eventsNavPrev = document.querySelector(".events-nav .prev");

if (eventsBlaze) {
    const homeEventsSlider = new BlazeSlider(eventsBlaze, {
        all: {
        slideGap: "24px",
        slidesToShow: 7.5,
        /* enableAutoplay: true,
        autoplayInterval: 3000 */
        },
    });
    eventsNavNext.addEventListener("click", () =>
        homeEventsSlider.next()
    );
    eventsNavPrev.addEventListener("click", () =>
        homeEventsSlider.prev()
    );
}

const homeCareersTab = document.getElementById('home-careers-tabs');

homeCareersTab && new Tab(homeCareersTab);

