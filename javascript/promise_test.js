function addTwoNumber(a, b) {
    return new Promise(function(resolve, reject) {
        if(isNaN(a) || isNaN(b)) {
            reject("A:"+a+" or B:"+b+" is not a number");
        }

        resolve(a + b);
    });
}

function increment(a) {
    return new Promise(function(resolve, reject) {
        if(isNaN(a)) {
            reject("A:"+a+" is not a number");
        }

        resolve(a + 1);
    });
}

function inc(a) {
    console.log("inc value "+ a)
    return a + 1;
}

function double(a) {
    console.log("double value "+ a)
    return a * 2;
}

function trippleErr(a) {
    throw new Error("number is not valid");
}

addTwoNumber(1,2)
    .then(inc)
    .then(double)
    .then(trippleErr)
    .then(r => console.log("Final value is :" + r))
    .catch(err => console.warn("err: " + err))
