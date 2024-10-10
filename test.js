let tab = ['Jean', 'Dupont', 45];

for (let i = 0; i < tab.length; i++) {
    tab[i] += 'OK';
    console.log(tab[i]);
}

for (let i = 0; i < tab.length; i++) {
    console.log(tab[i]);
}

for (let item of tab) {
    console.log(item);
}

let fruits = ["Banane", "Orange", "Pomme", "Poire", "Cerise", "Ananas"];
let sousTableau = fruits.slice(1, 3);
console.log(sousTableau);
