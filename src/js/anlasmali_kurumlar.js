import GLightbox from 'glightbox';

const inNetworkElems = document.querySelector('.in-network-photos');

inNetworkElems && GLightbox({
    selector: '.in-network-photos a'
});