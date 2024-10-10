//avec une fonction anonyme
setTimeout(function () {
    console.log("Je me suis declenché");
}, 1000)

//avec une fonction nommée
function test() {
    setTimeout(test, 1000)
    console.log("test");
}

test();

let handle = setInterval(function () {
    console.log("Declenchement à intervalle réguliers");
}, 1000)

setTimeout(function () {
    clearInterval(handle);
    console.log("Interval cleared");
}, 5000);