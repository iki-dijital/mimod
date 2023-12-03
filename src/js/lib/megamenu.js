export function calculateTriangle() {
  const headerContainer = document.querySelector(
    '.header_lg .container'
  );
  const megaMenuParent = document.querySelector('.has-mega-menu');
  const megaMenuSelector = document.querySelector('.has-mega-menu a');
  const megaMenuArrow = document.querySelector(
    '.mega-menu .triangle'
  );

  function calculatePosition() {
    const megaMenuSelectorPosition =
      megaMenuSelector.getBoundingClientRect();
    megaMenuArrow.style.left = `calc(${
      megaMenuSelectorPosition.x
    }px - var(--container-margin) + ${
      megaMenuArrow.offsetWidth / 4
    }px)`;
  }

  calculatePosition();
  window.addEventListener('resize', calculatePosition);
}
