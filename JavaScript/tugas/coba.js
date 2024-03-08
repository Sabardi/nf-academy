/* Diketahui: 
pegawai: Ridwan  
jabatan: manager 
status: menikah  
Tugas:  

Cetak Data Pegawai berbentuk tabel: 
Judul Kolom gunakan thead 
Data2 gunakan tbody  
Nama Pegawai, Jabatan, Status,  
Gaji Pokok(if): Manager=>15 jt, Asisten Manager=>10 jt, Staff=>5 jt  
Tunjangan Jabatan: 15% dari gapok 
BPJS: 10% dari gapok 
Tunjangan Keluarga (ternary): dilihat dari status yg sudah menikah =>20% dari gapok 
Total Gaji: jumlahlahkan seluruh element gaji (gunakan tfoot) */

// inisiasi variabel nya
let nama = "Ridwan" 
let jabatan = "Manager"
let status = "menikah"
let gaji_pokok , tunjangan, bpjs, keluarga

// inisiasi pekerjaannya jika gaji nya tsb 
if(jabatan == "Manager"){
    gaji_pokok = 15000000
}else if(jabatan == "Asisten Manager"){
    gaji_pokok = 10000000
}else if(jabatan == "Staff"){
    gaji_pokok = 5000000
}

// hitung tunjangan 
console.log("gaji pokok = " +gaji_pokok)
tunjangan = 0.15 * gaji_pokok
console.log("tunjangan " + tunjangan)

// hasil sebelum potong bpjs 
let hasil = gaji_pokok + tunjangan
console.log("befor potong bpjs = " + hasil)
// hitung bjs
bpjs = 0.1*gaji_pokok
console.log("bpjs = " + bpjs)

let hitung = hasil - bpjs
console.log("upter potong bpjs = " + hitung)


// jika menikah/keluarga
keluarga = (status == "menikah") ? 0.2 * gaji_pokok:0
console.log("tunjangan keluarga = " + keluarga)

// gaji pokok dan tunjangan di tambah dengan tunjangan keluarga
let gaji_bersih = keluarga + hitung
console.log("gaji bersih = "+ gaji_bersih)