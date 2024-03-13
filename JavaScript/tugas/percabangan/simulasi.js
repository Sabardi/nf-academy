// inisiasi
let nama = "Ridwan" 
let jabatan = "Manager"
let status = "menikah"
let gaji_pokok

// perhitungan persen nya 
// let persentase = 10/100 hitungangan persen

if(jabatan == "Manager"){
    // inisiasi gaji nya
    gaji_pokok = 15000000
}else if(jabatan == "Asisten Manager"){
    gaji_pokok = 10000000
}else if(jabatan == "Staff"){
    gaji_pokok = 5000000
}

// console.log(gaji_pokok)
// inisiasi tunjangan 15
let tunjangan_jabatan = 0.15* gaji_pokok
let bpjs = 0.1* gaji_pokok
let total = tunjangan_jabatan + bpjs + gaji_pokok
console.log("total : "+ total)




