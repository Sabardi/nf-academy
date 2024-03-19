let frm = document.getElementById("online");
let produkPilihan = ["tv", "ac", "kulkas"];

let pilihanProduk = `<option value="">Pilihan Produk</option>`;

for (let p in produkPilihan){
    pilihanProduk += `<option value="${produkPilihan}">${produkPilihan[p]}</option>`
}

frm.produk.innerHTML = pilihanProduk;
function transaksi(){
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = frm.jumlah.value;
}