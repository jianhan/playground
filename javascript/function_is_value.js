console.log((function() {}));

let x;

console.log(x = 100);

console.log("test" === "test1")

console.log(function () {}); // [Function]


const f = function (x) {
    console.warn(x);
};

const f1 = (function (x) {
    console.warn(x);
});

console.log("--",f(5), f1(5), "--")
