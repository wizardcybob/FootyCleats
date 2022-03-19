///////////////////////////////
//RECUPERER LE PRIX DU PANIER//
///////////////////////////////

// faudra faire un if pour vérifier si les élements son présents dans la page ou pas pour pas qu'il y ait d'erreur sur les autres pages
let panier = document.getElementsByClassName('panier_info');
let cleat_prix = document.querySelectorAll('.panier_info_item_info_prix');

let tab = [];
for (let i = 0; i < cleat_prix.length; i++) { // tant qu'il y a de thèmes de carte on fait cette boucle
    tab.push(cleat_prix[i].innerText);
}

// console.table(tab);

var total = 0;

for (let i = 0; i < tab.length; i++) {
    // tab[0] = tab[0].replace(',', '.');
    // tab[1] = tab[1].replace(',', '.'); //remplace les , d'un texte en .
    //let total = parseFloat(tab[0]) + parseFloat(tab[1]); //parseFloat pcq c'est une string qu'on veut en chiffre
    tab[i] = tab[i].replace(',', '.');
    total = total + parseFloat(tab[i]);
}

let prix_panier = document.querySelector(".prix_panier");
if (prix_panier != null) {
    prix_panier.innerText = total;
}
