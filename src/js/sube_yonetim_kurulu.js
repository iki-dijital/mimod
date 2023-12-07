import { generateAccordion } from './lib/generateaccordion.js';
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu, pageMenu } from './lib/common.js';

mobileMenu();
pageMenu();
calculateTriangle();
toggleSearchOverlay();
generateAccordion('templateAccordion');
