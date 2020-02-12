let arr1 = [1,2,3];
let arr2 = [1,2,3];

console.log(arr2 === arr1); // fales

let fn1 = () => {};

let fn2 = () => {};


console.log(fn1 === fn2); // false

let fn3 = fn1;

console.log(fn3 === fn1); // true

console.log((function () {})());

