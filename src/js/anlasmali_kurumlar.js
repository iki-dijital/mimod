import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';

import GLightbox from 'glightbox';

calculateTriangle();
toggleSearchOverlay();

const inNetworkElems = document.querySelector('.in-network-photos');

inNetworkElems &&
  GLightbox({
    selector: '.in-network-photos a',
  });
