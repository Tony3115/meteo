let devise = 'Dollars'
if (devise == 'Dollars') {
    console.log('vous payer en dollars');
} else if (devise == 'Euro') {
    console.log('vous payer en euros');
} else if (devise == 'Yuan') {
    console.log('Vous payer en yuan');
} else {
    console.log('Aucune devise validé')
}



let devise = 'Dollars'
switch (devise) {
    case 'Dollars':
        console.log('vous payer en dollars')
        break;
    case 'Euro':
        console.log('vous payer en euros')
        break;
    case 'Yuan':
        console.log('vous payer en yuan')
        break;
    default:
        console.log('Aucune devise validé')
        break;
}