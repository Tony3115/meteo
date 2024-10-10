tab2D = [
    ["Tom", "Olive", "Dracula"],
    [1, 5, 33, 17, 45, 78],
    ["Pomme", "Cerise", 44, "Ciel"],
];

for (let i = 0; i < tab2D.length; i++) {
    for (let j = 0; j < tab2D[i].length; j++) {
        console.log(tab2D[i][j]);
    }
    console.log("---");
}

tab2D = [
    ["Tom", "Olive", "Dracula"],
    [1, 5, 33, 17, 45, 78],
    ["Pomme", "Cerise", 44, "Ciel"],
];

for (let i in tab2D) {
    for (let j in tab2D[i]) {
        console.log(tab2D[i][j]);
    }
    console.log("---");
}