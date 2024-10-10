console.log(`Bonjour M Dupont, veuillez vous asseoire`);
console.log(`Bonjour M Guichard, veuillez vous asseoire`);
console.log(`Bonjour M Martin, veuillez vous asseoire`);
console.log(`Bonjour Mme Henri, veuillez vous asseoire`);

function saluer(nom, moment) {
    if (moment === 'jour') {
        console.log(`Bonjour ${nom}, veuillez vous asseoire`);
    } else { console.log(`Bonsoir ${nom}, veuillez vous asseoire`) }
}

function saluer2(nom, moment) {
    console.log(`${moment} ${nom}, veuillez vous asseoire`);
}

saluer2(" M Dupont", "Bonjour");
saluer2(" M Guichard", "Bonsoir");
saluer2(" M Martin", "Bonsoir");
saluer2(" Mme Henri", "Bonsoir");

/*function additionner(a, b) {
    resultat = a + b;
    return resultat;
}*/

function additionner(a, b) {
    return a + b;
}

let r = additionner(5, 2);
console.log(r);