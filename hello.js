"use strict";

const curry = f => (...args) => args.length >= f.length ? f(...args) : curry(f.bind(f, ...args));

const compose = (f, g) => x => f(g(x));

const composeN = (...fns) => (...args) => fns.reverse().reduce((x, f) => f.apply(f, [].concat(x)), args);

setTimeout(function(){window.location='home.php';},5000);
