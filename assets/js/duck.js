import Duck from './js/duck.js';
const duck = new Duck('Waddles');
duck.quack();

export default class {
    constructor(name) {
        this.name = name;
    }
    quack() {
        console.log(`${this.name} says: Quack!`);
    }
}