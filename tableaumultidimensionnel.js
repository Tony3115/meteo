let tab2D = [
    [1, 2, 3],
    [4, 5],
];

console.log(tab2D[0][0])
console.log(tab2D[1][1])

let tab2D = [
    [1, 2, 3],
    [4, 5],
];

for (let i = 0; i < tab2D.length; i++) {
    for (let j = 0; j < tab2D[i].length; j++) {
        console.log(tab2D[i][j]);
    }
    console.log('---')
}


for (let i = 0; i < tab2D.length; i++) {
    console.log(tab2D[i])
}


let tab2D = [
    [1, 2, 3],
    [4, 5],
];

for (let tableau1D of tab2D) {
    for (let item of tableau1D) {
        console.log(item);
    }
    console.log('---')
}