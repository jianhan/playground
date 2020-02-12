const f = function (value) {
    return (function(copy){
        console.log(copy,"****", value)
        return copy === value;
    })(value);
};

const f2 = function (value) {
    return function (copy) {
        return copy === value;
    };
};

console.log(f("test"))
console.log(f2("test")("test1"))

