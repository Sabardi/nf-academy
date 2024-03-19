let frm = document.getElementById("form");
let jabatan = ["Manager", "Asisten Manager", "Staff"];
let statusnya = ["Sudah Menikah", "Belom Menikah"]
let opsiJabatan = `<option value="">Pilih Jabatan</option>`;
let opsistatus = `<option value="">Pilih Status</option>`;

for (let p in jabatan){
    opsiJabatan += `<option value="${jabatan[p]}">${jabatan[p]}</option>`
}

for (let l in statusnya){
    opsistatus += `<option value="${statusnya[l]}">${statusnya[l]}</option>`
}

frm.jabatan.innerHTML = opsiJabatan;
frm.status.innerHTML = opsistatus;
function transaksi(){
    let nama = frm.nama.value;
    let produk = frm.jabatan.value;
    let jumlah = frm.status.value;

    let harga;

    switch(jabatan){
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