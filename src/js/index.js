import { fadeSlide } from './lib/fadeslide.js';
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu } from './lib/common.js';

import BlazeSlider from 'blaze-slider';
import Tab from 'bootstrap/js/dist/tab';

mobileMenu();
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
      slidesToShow: 5,
      enableAutoplay: true,
      autoplayInterval: 4000,
    },
    '(max-width: 1399px)': {
      slidesToShow: 5,
      slideGap: '24px',
    },
    '(max-width: 1199px)': {
      slidesToShow: 4,
      slideGap: '12px',
    },
    '(max-width: 767px)': {
      slidesToShow: 3,
      slideGap: '12px',
    },
    '(max-width: 500px)': {
      slidesToShow: 2,
      slideGap: '12px',
    }
  });
  papersNavNext.addEventListener('click', () =>
    homePapersSlider.next()
  );
  papersNavPrev.addEventListener('click', () =>
    homePapersSlider.prev()
  );
}

const eventsBlaze = document.getElementById('home-events-blaze');
const eventsNavNext = document.querySelector('.events-nav .next');
const eventsNavPrev = document.querySelector('.events-nav .prev');

if (eventsBlaze) {
  const homeEventsSlider = new BlazeSlider(eventsBlaze, {
    all: {
      slideGap: '24px',
      slidesToShow: 7.5,
      enableAutoplay: true,
      autoplayInterval: 3000,
    },
    '(max-width: 1399px)': {
      slidesToShow: 5,
      slideGap: '24px',
    },
    '(max-width: 1199px)': {
      slidesToShow: 4,
      slideGap: '12px',
    },
    '(max-width: 767px)': {
      slidesToShow: 3,
      slideGap: '12px',
    },
    '(max-width: 500px)': {
      slidesToShow: 2,
      slideGap: '12px',
    }
  });
  eventsNavNext.addEventListener('click', () =>
    homeEventsSlider.next()
  );
  eventsNavPrev.addEventListener('click', () =>
    homeEventsSlider.prev()
  );
}

const homeCareersTab = document.getElementById('home-careers-tabs');

homeCareersTab && new Tab(homeCareersTab);
