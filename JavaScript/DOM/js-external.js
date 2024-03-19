let frm = document.getElementById("online");
let produkPilihan = ["tv", "ac", "kulkas"];

let pilihanProduk = `<option value="">Pilihan Produk</option>`;

for (let p in produkPilihan){
    pilihanProduk += `<option value="${produkPilihan[p]}">${produkPilihan[p]}</option>`
}

frm.produk.innerHTML = pilihanProduk;
function transaksi(){
    let nama = frm.nama.value;
    let produk = frm.produk.value;
    let jumlah = frm.jumlah.value;

    let harga;

    switch(produk){
        case 'tv':
            harga = 2000000;
            break;
        case 'ac':
            harga = 3000000;
            break;
        case 'kulkas':
            harga = 5000000;
            break;
        default: 
            harga = 0
    }

    let hargaKotor = harga * jumlah
    // diskon 
    let diskon;
    if(produk == 'kulkas' && jumlah >= 3) diskon = 0.3 * hargaKotor;
    else if(produk == 'ac' && jumlah >= 3) diskon = 0.2 * hargaKotor;
    else diskon = 0.1 * hargaKotor;
    swal(`
    Nama Pelanggan : ${nama}
    Produk di beli : ${produk}
    Harga produk : ${harga}
    jumlah produk : ${jumlah}`);
}