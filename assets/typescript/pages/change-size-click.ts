import 'container';
// import { toogleClass } from '../components/toggle.ts';
import { toogleClass } from 'toggleClass';

const elmt: HTMLElement | null = document.querySelector('.box');

if (elmt) {
    toogleClass(elmt, 'active')
}