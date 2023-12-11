const searchOverlay = document.getElementById('search_overlay');
const searchOverlayBackDrop = document.getElementById(
  'search_overlay_backdrop'
);
const overlayTriggerButtons =
  document.querySelectorAll('.header_search');
const closeSearchOverlayButton =
  document.getElementById('close_search');
const bodyElement = document.querySelector('body');
let scrollBarWidth = 0;


function openMenu() {
  searchOverlay.classList.add('show');
  searchOverlayBackDrop.classList.add('show');
  bodyElement.classList.add('overflow-hidden');
  bodyElement.style.paddingRight = `${scrollBarWidth}px`;

  overlayTriggerButtons.forEach((button) => {
    button.removeEventListener('click', openMenu);
  });
  searchOverlayBackDrop.addEventListener('click', closeMenu);
  closeSearchOverlayButton.addEventListener('click', closeMenu);
  window.removeEventListener('keyup', closeMenuOnEscape);
  window.addEventListener('keyup', closeMenuOnEscape);
  document.querySelectorAll('.body, .mobileMenu, .menuButton, .mobileMenuBackdrop, html, #page-menu').forEach(e => e.classList.remove('show'));
}

function closeMenu() {
  searchOverlay.classList.remove('show');
  searchOverlayBackDrop.classList.remove('show');
  bodyElement.classList.remove('overflow-hidden');
  bodyElement.removeAttribute('style');

  overlayTriggerButtons.forEach((button) => {
    button.addEventListener('click', openMenu);
  });
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
  overlayTriggerButtons.forEach((button) => {
    button.addEventListener('click', openMenu);
  });
  window.addEventListener('keyup', closeMenuOnEscape);
}
