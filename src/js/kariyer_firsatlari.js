import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu } from './lib/common.js';

import Tab from 'bootstrap/js/dist/tab';

mobileMenu();
calculateTriangle();
toggleSearchOverlay();

const homeCareersTab = document.getElementById('home-careers-tabs');

homeCareersTab && new Tab(homeCareersTab);
