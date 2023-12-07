import { initMasonry } from './lib/generatemasonry';
import { calculateTriangle } from './lib/megamenu.js';
import { toggleSearchOverlay } from './lib/searchoverlay.js';
import { mobileMenu } from './lib/common.js';

import GLightbox from 'glightbox';

initMasonry();
mobileMenu();
calculateTriangle();
toggleSearchOverlay();

const videoGallery = document.querySelector('.video-gallery');

videoGallery &&
  new GLightbox(videoGallery, {
    plyr: {
      config: {
        ratio: '16:9',
        muted: false,
        youtube: {
          noCookie: true,
          rel: 0,
          showinfo: 0,
          iv_load_policy: 3,
        },
      },
    },
  });
