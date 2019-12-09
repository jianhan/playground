// function can be treated as any other data type
// - assign to variables
// - pass as parameters
// - return within another function
// - ,etc..
//
// bad example
const hi = name => `Hi ${name}`;

// greeting is the same as greeting2, because in javascript, function is first class
// citizen, one can assign it to variable
const greeting = name => hi(name);
const greeting2 = hi;

// * When a function is defined in such a way that it has a set of parameters, and it just
//   return call another function with the same set of parameters and return it, then it is a
//   sign of redundant.
console.log(hi ,hi('jim'));
