let json = {
    nom: "Dupont",
    prenom: "Jean",
    age: 34,
    diplome: ["Brevet", "Bac E", "Ingénieur"],
    parler: function () { console.log("Bonjour") },
    rire() { console.log("Je ris") }
}

//ajouter une propriété//
json["pays"] = "France";
delete json.pays;
console.log(json);


let employe1 = {
    nom: "Dupont",
    prenom: "Jean",
    age: 34,
    diplome: ["Brevet", "Bac E", "Ingénieur"],
    ecoles: [{
        nomEcole: "college Jules Verne",
        ville: "Thion"
    },
    {
        nomEcole: "lycée Thiers",
        ville: "Marseille"

    }],
    parler: function () { console.log("Bonjour") },
    rire() { console.log("Je ris") }
}

console.log(employe1.ecoles[0].nomEcole)

let commande = [

    { article: "alarme", prix: 400, quantite: 1, discount: 10 },
    { article: "camera", prix: 350, quantite: 1 },
]

let total = 0

for (i = 0; i < commande.length; i++) {
    let prix = commande[i]["prix"]
    let quantite = commande[i]["quantite"]
    let discount = commande[i]["discount"]
    if (commande[i]["discount"] != undefined) {
        discount = 1 - commande[i]["discount"] / 100
    } else {
        discount = 1
    }
    total = total + prix * quantite * discount
}

console.log(total)