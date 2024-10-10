
function calculerIMC(poids, taille) {
    return poids / (taille * taille);
}
let poids = prompt("Entrez votre poids en kilogrammes :"));
let taille = prompt("Entrez votre taille en mètres :"));

let imc = calculerIMC(poids, taille);
let imcArrondi = Math.round(imc);

console.log("Votre IMC est : " + imcArrondi);
