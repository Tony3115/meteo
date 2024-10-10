let nb_mystere = Math.round(Math.random() * 100)
let input

while (true) {
    input = prompt('Entrez un nombre entre 0 et 100');
    let guess = parseInt(input);

    if (guess < nb_mystere) {
        console.log("Le nombre mystère est plus grand");
    } else if (guess > nb_mystere) {
        console.log("Le nombre mystère est plus petit");
    } else {
        console.log("C'est gagné")
        break;
    }
}