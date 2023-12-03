const searchOverlay = document.getElementById('search_overlay');
const searchOverlayBackDrop = document.getElementById('search_overlay_backdrop');
const overlayTriggerButton = document.getElementById('header_search');
const closeSearchOverlayButton = document.getElementById('close_search');
const bodyElement = document.querySelector('body');
let scrollBarWidth = 0;

function getScrollBarWidth() {
  scrollBarWidth =
    document.documentElement.scrollWidth -
    document.documentElement.clientWidth;
}

function openMenu() {
  searchOverlay.classList.add('show');
  searchOverlayBackDrop.classList.add('show');
  bodyElement.classList.add('overflow-hidden');
  bodyElement.style.paddingRight = `${scrollBarWidth}px`;

  overlayTriggerButton.removeEventListener('click', openMenu);
  searchOverlayBackDrop.addEventListener('click', closeMenu);
  closeSearchOverlayButton.addEventListener('click', closeMenu);
  window.removeEventListener('keyup', closeMenuOnEscape);
  window.addEventListener('keyup', closeMenuOnEscape);
}

function closeMenu() {
  searchOverlay.classList.remove('show');
  searchOverlayBackDrop.classList.remove('show');
  bodyElement.classList.remove('overflow-hidden');
  bodyElement.removeAttribute('style');

  overlayTriggerButton.addEventListener('click', openMenu);
  searchOverlayBackDrop.removeEventListener('click', closeMenu);
  closeSearchOverlayButton.removeEventListener('click', closeMenu);
  window.removeEventListener('keyup', closeMenuOnEscape);
}

function closeMenuOnEscape(e) {
  if (e.key === 'Escape') {
    closeMenu();
  }
}

export function toggleSearchOverlay() {
  overlayTriggerButton.addEventListener('click', openMenu);
  window.addEventListener('keyup', closeMenuOnEscape);
  window.addEventListener('resize', getScrollBarWidth);

  getScrollBarWidth();
}
