import Masonry from 'masonry-layout';
import GLightbox from 'glightbox';

function generateMasonry(gridParent) {
  new Masonry(gridParent, {
    itemSelector: '.grid_item',
    columnWidth: '.grid-sizer',
    gutter: 24,
  });

  new GLightbox({});
}

export function initMasonry() {
    const masonryGrid = document.querySelector('.masonry-grid');
    if (masonryGrid) {
      generateMasonry(masonryGrid);
      window.addEventListener('resize', generateMasonry);
    }
  }