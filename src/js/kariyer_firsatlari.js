import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';

import Tab from 'bootstrap/js/dist/tab';

calculateTriangle();
toggleSearchOverlay();

const homeCareersTab = document.getElementById('home-careers-tabs');

homeCareersTab && new Tab(homeCareersTab);
