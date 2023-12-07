import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu, pageMenu } from './lib/common.js';

mobileMenu();
pageMenu();
calculateTriangle();
toggleSearchOverlay();