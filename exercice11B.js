let panier = [
    { produit: "pomme", puht: 1.2, quantite: 5 },
    { produit: "chocolat", puht: 2.5, quantite: 2 },
    { produit: "raisin", puht: 1.7, quantite: 3 },
];

let totalcumul = 0

for (let i = 0; i < panier.length; i++) {
    let totalProduit = panier[i].puht * panier[i].quantite;
    totalcumul += totalProduit;
    console.log(` ${panier[i].produit}, ${panier[i].puht}, ${panier[i].quantite}`);
}
console.log("total du panier", totalcumul);