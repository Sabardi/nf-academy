function dataperson() {
    let form = document.getElementById("frm")
    let nama = form.nama.value
    let pekerjaan = form.pekerjaan.value
    let hobi = form.hoby.value
    
    let input = "Nama  " + nama + "<br> pekerjaan sebagai " + pekerjaan + "<br> hoby " + hobi;
    let noinput = "maaf nama yang anda inputkan belom terisi";
    let hasil = (nama && pekerjaan && hobi != '') ? input : noinput;
            // let hasil = (siswa && kelas !="") ? input:noinput;
            document.getElementById("hasil").innerHTML = hasil

    //ubahlah kode 
    // isian nama 
    // isian pekerjaan
    // isian hobi
    // let input = document.write(`Nama saya adalah ${nama} dan pekerjaan saya adalah ${pekerjaan} saya hoby nya ${Hobby}`)
    
}