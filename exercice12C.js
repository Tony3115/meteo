let secondes = 0
let handle = setInterval(function () {
    secondes++;
    console.log("Nombre de secondes écoulées : ", secondes);
    if (secondes === 5) {
        clearInterval(handle);
        console.log("Interval cleared");
    }

}, 1000)

