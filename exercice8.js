tab = ["bien", "son", "César", "à", "rendre", "alla", "Jules"];
let phrase = " ";
for (let i = tab.length - 1; i >= 0; i--) {
    phrase = phrase + " " + tab[i]
}
console.log(phrase.trim());


tab = ["bien", "son", "César", "à", "rendre", "alla", "Jules"];
let phrase = ""
for (let i = 0; i < tab.length; i = i + 1) {
    phrase = phrase + " " + tab[i]
}
console.log(phrase.trim())


reversedtab = tab.reverse()
reversedphrase = " ";

for (let i = 0; i < reversedtab.length; i++) {
    reversedphrase += " " + reversedtab[i];
}
console.log(reversedphrase.trim());