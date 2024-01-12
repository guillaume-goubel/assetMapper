export function toogleClass(element: HTMLElement, className: string) {
    
    element.addEventListener('click', (e: MouseEvent) => {
        e.preventDefault();
        element.classList.toggle(className);
        console.log('toggleClass');
    });

}