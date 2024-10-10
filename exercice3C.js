let devise = prompt("Quelle devise utilisez - vous ?");
devise = devise.trim();
devise = devise.toLowerCase()
switch (devise) {
    case 'dollars':
        devise = devise.toLowerCase()
        console.log('vous payer en dollars')
        break;
    case 'euro':
        devise = devise.toLowerCase()
        console.log('vous payer en euros')
        break;
    case 'yuan':
        devise = devise.toLowerCase()
        console.log('vous payer en yuan')
        break;
    default:
        console.log('Aucune devise validé')
        break;
}