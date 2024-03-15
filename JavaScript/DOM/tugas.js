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
    let nama = document.getElementById('nama').value;
    let pekerjaan = document.getElementById('pekerjaan').value;
    let hobby = document.getElementById('hoby').value;
    let  input = `Nama: ${nama} <br> Pekerjaan: ${pekerjaan} <br> Hobby: ${hobby}`

    let noinput = "maaf anda harus menginputkan data nya";
    let hasil = (nama && pekerjaan && hobby != '') ? input : noinput;
    document.getElementById("hasil").innerHTML = hasil
}
