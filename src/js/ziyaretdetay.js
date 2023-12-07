import { initMasonry } from './lib/generatemasonry';
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu } from './lib/common.js';

mobileMenu();
initMasonry();
calculateTriangle();
toggleSearchOverlay();
