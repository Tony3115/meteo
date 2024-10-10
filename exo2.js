let t = prompt('Quelle température fait-il?');

if (t <= 10) {
    console.log("Il faut un manteau");

} else if (t >= 11 && t <= 20) {
    console.log("Il faut un pull");

} else { alert("Il faut un t-shirt"); }