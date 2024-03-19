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
function hitung(){
    let nama = frm.nama.value;
    let jabatan = frm.jabatan.value;
    let status = frm.status.value;
    let gaji_pokok , tunjangan, bpjs, keluarga ,gajibersih

    // inisiasi pekerjaannya jika gaji nya tsb 
    if(jabatan == "Manager"){
        gaji_pokok = 15000000
        tunjangan = 0.15 * gaji_pokok
        bpjs = 0.1 * gaji_pokok
        gajibersih = (gaji_pokok + tunjangan) - bpjs

    }else if(jabatan == "Asisten Manager"){
        gaji_pokok = 10000000
        tunjangan = 0.15 * gaji_pokok
        bpjs = 0.1 * gaji_pokok
        gajibersih = (gaji_pokok + tunjangan) - bpjs

    }else if(jabatan == "Staff"){
        gaji_pokok = 5000000
        tunjangan = 0.15 * gaji_pokok
        bpjs = 0.1 * gaji_pokok
        gajibersih = (gaji_pokok + tunjangan) - bpjs

    }else{
        alert("Di pilih Dulu")
        gaji_pokok = 0
        tunjangan = 0.15 * gaji_pokok
        bpjs = 0.1 * gaji_pokok
        gajibersih = (gaji_pokok + tunjangan) - bpjs
    }

// jika menikah/keluarga
keluarga = (status == "Sudah Menikah") ? 0.2 * gaji_pokok:0
let totalGaji= gajibersih + keluarga
    // let potongBpjs = totalGaji - bpjs
// hasil
let hasil = document.getElementById("hasil");
hasil.innerHTML = `
<table border="1" style="border-collapse: collapse; width: 100%;">
<thead bgcolor="#B5C0D0">
    <tr>
        <th colspan="2">Cetak Data Pegawai</th> 
    </tr>
</thead>
<tbody>
    <tr>
        <td>Nama</td>
        <td>${nama}</td>
    </tr>
    <tr>
        <td>Jabatan</td>
        <td>${jabatan}</td>
    </tr>
    <tr>
        <td>Status</td>
        <td>${status}</td>
    </tr>
    <tr>
        <td>Gaji Pokok</td>
        <td>${gaji_pokok.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
    </tr>
    <tr>
        <td>Tunjangan</td>
        <td>${tunjangan.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
    </tr>
    <tr>
        <td>Nama</td>
        <td> - ${bpjs.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
    </tr>
    <tr>
        <td>Tunjangan keluarga</td>
        <td>${keluarga.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
    </tr>

</tbody>
<tfoot bgcolor="B5C0D0">
    <tr>
        <td>Gaji bersih</td>
        <td>${totalGaji.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
    </tr>
</tfoot>
`


swal(`
    Nama  : ${nama}
    Jabatan : ${jabatan}
    status  : ${status}
    gaji pokok : ${gaji_pokok.toLocaleString("ID", {style: "currency", currency: "IDR"})}
    Tunjangan jabatan : ${tunjangan.toLocaleString("ID", {style: "currency", currency: "IDR"})}
    Potongan BPJS : ${bpjs.toLocaleString("ID", {style: "currency", currency: "IDR"})}
    Tunjangan keluarga : ${keluarga.toLocaleString("ID", {style: "currency", currency: "IDR"})}
    gaji bersih : ${totalGaji.toLocaleString("ID", {style: "currency", currency: "IDR"})}
    `);
}


