import 'container';

const elmt: HTMLElement | null = document.querySelector('.box');

if (elmt) {
    elmt.addEventListener('mouseover', (e: MouseEvent) => {
        e.preventDefault();
        elmt.classList.toggle('active');
    });
}
