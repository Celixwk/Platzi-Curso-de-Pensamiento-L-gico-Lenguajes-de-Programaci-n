let numeros = [5, 10, 15, 60, 8];

let tamaño = numeros.length;

let Maxnumero = numeros[0];
let Minnumero = numeros[0];

for(let i=0; i<tamaño; i++){
  if(Maxnumero < numeros[i]){
    Maxnumero = numeros[i];
  }
}

for (let i = 0; i < tamaño; i++) { 
  if (Minnumero > numeros[i]) {
    Minnumero = numeros[i];
  }
}

console.log("El numero mas alto es: " + Maxnumero)
console.log("El numero mas bajo es: " + Minnumero)

let maximo = Math.max(5, 10, 15, 60, 8);
let minimo = Math.min(5, 10, 15, 60, 8);


console.log(maximo);
console.log(minimo);