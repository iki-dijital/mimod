import Collapse from 'bootstrap/js/dist/collapse';

/**
 * 
 * @param {string} getParent 
 */
export function generateAccordion(getParent) {
  const accordionParent = document.getElementById(
    `${getParent}`
  );

  accordionParent && new Collapse(accordionParent);
}
