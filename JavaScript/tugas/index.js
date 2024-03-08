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
let gaji_pokok

// inisiasi pekerjaannya jika gaji nya tsb 
if(jabatan == "Manager"){
    gaji_pokok = 15000000
}else if(jabatan == "Asisten Manager"){
    gaji_pokok = 10000000
    console.log ("gaji nya : " + gaji_pokok)
}else if(jabatan == "Staff"){
    gaji_pokok = 5000000
    console.log ("gaji nya : " + gaji_pokok)
}

console.log("Data Pegawai")
// inisiasi tunjangan 15%
let tunjangan_jabatan = 0.15* gaji_pokok
// inisiasi bpjs 10%
let bpjs = 0.1* gaji_pokok
let total = tunjangan_jabatan + bpjs + gaji_pokok
// jika menikah/keluarga
let keluarga = (status == "menikah") ? 0.2 * gaji_pokok:0
console.log("total : "+ total)
let hslnikah = tunjangan_jabatan + bpjs + keluarga + gaji_pokok
console.log("total gaji : "+ hslnikah)