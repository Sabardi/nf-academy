// Membuat array dengan elemen-elemen tertentu:
let number = [1,2,3,4,5]
let abjad = ['a','b','c','d']
let mixedarray = [1, 'hallo',true, {name : 'jhon'}]

console.log(number)
number.forEach(function (number) {
    console.log(number)
})

console.log(abjad)
abjad.forEach(function (abjad) {
    console.log(abjad)
})

console.log(mixedarray)
mixedarray.forEach(function (mixedarray) {
    console.log(mixedarray)
})

// Membuat array kosong dan menambahkan elemen ke dalamnya:
console.log("Membuat array kosong dan menambahkan elemen ke dalamnya:");

let myArray = [];
myArray.push('First element',1);
myArray.push('Second element');

console.log(myArray)

// Membuat array dengan panjang tertentu tetapi belum diisi:
console.log("Membuat array dengan panjang tertentu tetapi belum diisi:")

let arrayWithLength = new Array(5); // Membuat array dengan panjang 5 tetapi belum diisi
console.log(arrayWithLength)

// Membuat array menggunakan konstruktor Array:
console.log("Membuat array menggunakan konstruktor Array")
// let colors = new Array('Red', 'Green', 'Blue');
// console.log(colors)

// Membuat array dengan metode Array.from():
let rangeArray = Array.from({ length: 5 }, (_, index) => index + 1); // Membuat array dengan rentang angka 1-5
console.log(rangeArray)

// di pilih sesuai dengan yg kamu mengerti sayang
