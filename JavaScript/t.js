let pelanggan = "Siti";
let produk = "AC";
let harsat = 0; //di inisiasikan terlebih dahulu agar bisa di panggil

//tv => 3jt, kulkas => 4jt, AC =>5jt

// if(produk == "TV"){
//     harsat = 3000000;
// }
// else if (produk == "Kulkas"){
//     harsat = 4000000;
// } 
// else if (produk == "AC"){
//     harsat = 5000000;
// }
// else{
//     harsat = 0;
// }

switch(produk){
    case 'TV' : harsat = 3000000; break;
    case 'Kulkas' : harsat = 4000000; break;
    case 'AC' : harsat = 5000000; break;
    default: harsat = 0;
}
let jmlBeli = 15;
let bruto = harsat * jmlBeli;
//ternary
let diskon =(produk == 'AC') ? 0.1 * bruto : 0;

console.log("data pembelian")
console.log(pelanggan)
console.log(produk)
console.log(jmlBeli)
console.log(diskon)
// document.write("Data Pembelian" +
// "<br> Pelanggan : " + pelanggan +
// "<br> Produk Pilihan : " + produk +
// "<br> Harga Satuan : " + harsat +
// "<br> Harga Kotor (bruto) : " + bruto +
// "<br> Diskon : " + diskon);
