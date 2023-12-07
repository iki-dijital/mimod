import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu } from './lib/common.js';

import GLightbox from 'glightbox';

mobileMenu();
calculateTriangle();
toggleSearchOverlay();

const inNetworkElems = document.querySelector('.in-network-photos');

inNetworkElems &&
  GLightbox({
    selector: '.in-network-photos a',
  });
