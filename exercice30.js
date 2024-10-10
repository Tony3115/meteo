function trouverMax(liste) {
    if (liste.length === 0) {
        return "Liste vide non triable";
    }

    let max = liste[0];

    for (let i = 1; i < liste.length; i++) {
        if (liste[i] > max) {
            max = liste[i];
        }
    }

    return max;
}

let liste = [65, 14, 22, 1, 10, 9, 18, 71, 56];
console.log("L'élément le plus grand est : " + trouverMax(liste));

let Vide = [];
console.log(trouverMax(Vide));

