let carros,frutas, trocador= new Array();
carros = ["Corsa","Vectra","Fiat","Golf","Gol","Lang-Houver","Palio","Celta"];
frutas = ["Maçã","Banana","Pêra","Uva","Abacate","Maracujá","Laranja","Limão"]


   trocador=carros;
   carros=frutas;
   frutas=trocador;

console.log(trocador)