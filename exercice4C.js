
let somme = 0
for (let i = 1; i < 100; i = i + 1) {
    if (i % 2 == 0) {
        continue;
    }
    somme = somme + i
}
console.log('somme', somme)