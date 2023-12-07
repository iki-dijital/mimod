import Collapse from 'bootstrap/js/dist/collapse';

function resizeMenu(targetElem, factor) {
  document.documentElement.style.setProperty(
    '--mobile-header',
    document.querySelector('.header_sm').clientHeight + 'px'
  );
  targetElem.style.paddingTop = `calc(var(--mobile-header) * ${factor})`;
}

export function mobileMenu() {
  let showMenu = false;
  const mobileMenu = document.querySelector('.mobileMenu');
  const mobileMenuBackdrop = document.querySelector(
    '.mobileMenuBackdrop'
  );
  function toggleMenu(isActive) {
    if (isActive) {
      document
        .querySelectorAll(
          'body, .mobileMenu, .menuButton, .mobileMenuBackdrop, html'
        )
        .forEach((e) => {
          e.classList.add('show');
        });

        document.querySelector('#page-menu')?.classList.remove('show');
    } else {
      document
        .querySelectorAll(
          'body, .mobileMenu, .menuButton, .mobileMenuBackdrop, html'
        )
        .forEach((e) => {
          e.classList.remove('show');
        });
    }
  }

  document
    .querySelector('.menuButton')
    .addEventListener('click', () => {
      showMenu = !showMenu;
      toggleMenu(showMenu);
    });

  mobileMenuBackdrop.addEventListener('click', () => {
    showMenu = false;
    toggleMenu(showMenu);
  });

  new Collapse(mobileMenu.querySelector('#nav-mobile-1'));
  new Collapse(mobileMenu.querySelector('#sub-accordion'));

  window.addEventListener('resize', () =>
    resizeMenu(mobileMenu, 1.5)
  );
  resizeMenu(mobileMenu, 1.5);
}

export function pageMenu() {
  const sideMenu = document.querySelector('aside');
  const pageMenu = document.getElementById('page-menu');
  const pageMenuButton = document.getElementById('page-menu-button');
  const mobileMenuBackdrop = document.querySelector(
    '.mobileMenuBackdrop'
  );

  if (!sideMenu){
    console.log("Girdi")
    return false;
  }

  pageMenu.innerHTML += sideMenu.innerHTML;

  const pageMenuClose = pageMenu.querySelector('#page-menu-close');
  pageMenuClose.addEventListener('click', () => {
    console.log("gird");
    document
      .querySelectorAll('body, #page-menu, .mobileMenuBackdrop, html')
      .forEach((e) => {
        e.classList.remove('show');
      });
  });

  pageMenuButton.addEventListener('click', () => {
    document
      .querySelectorAll('body, #page-menu, .mobileMenuBackdrop, html')
      .forEach((e) => {
        e.classList.add('show');
      });
  });

  

  mobileMenuBackdrop.addEventListener('click', () => {
    document
      .querySelectorAll('body, #page-menu, .mobileMenuBackdrop, html')
      .forEach((e) => {
        e.classList.remove('show');
      });
  });

  window.addEventListener('resize', () => resizeMenu(pageMenu, 1));
  resizeMenu(pageMenu, 1);
}
