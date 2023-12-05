import { generateAccordion } from "./lib/generateaccordion.js";
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';

calculateTriangle();
toggleSearchOverlay();
generateAccordion('templateAccordion');