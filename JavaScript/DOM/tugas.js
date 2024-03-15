// function dataperson() {
//     // let form = document.getElementById("frm")
//     // let nama = form.nama.value

//     //ubahlah kode 
//     // isian nama 
//     // isian pekerjaan
//     // isian hobi

//     let nama = document.getElementById("Nama").value
//     let pekerjaan = document.getElementById("Pekerjaan").value
//     let Hobby = document.getElementById("Hobby").value    
//     let output = getElementById("hasil").value
//     output.innerHTML = `Nama saya adalah ${nama} dan pekerjaan saya adalah ${pekerjaan} saya hoby nya ${Hobby}`
//     // let input = document.write(`Nama saya adalah ${nama} dan pekerjaan saya adalah ${pekerjaan} saya hoby nya ${Hobby}`)
    
// }


function dataperson() {
    var nama = document.getElementById('nama').value;
    var pekerjaan = document.getElementById('pekerjaan').value;
    var hobby = document.getElementById('hoby').value;

    var hasil = document.getElementById('hasil');
    hasil.innerHTML = `Nama: ${nama}, Pekerjaan: ${pekerjaan}, Hobby: ${hobby}`;
}
