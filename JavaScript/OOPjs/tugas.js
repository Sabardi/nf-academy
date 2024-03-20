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


class hitungGaji {
    constructor(nama, jabatan, status){
        this.nama = nama
        this.jabatan = jabatan
        this.status = status
    }

    menampilkan(){
        let gajiPokok;

        switch (this.jabatan) {
            case "Manager":
                gajiPokok = 15000000
                break;
            
                case "Asisten Manager":
                gajiPokok = 10000000
                break;

            case "Staff":
                gajiPokok = 5000000
            default:
                gajiPokok = 0
                break;
        }

        document.getElementById("hasil").innerHTML = `
        <tr>
            <td>Total Gaji</td>
            <td>${gajiPokok}</td>
        </tr> 
        `
    }

}

function klik(){
    let klik = new hitungGaji()
    klik.menampilkan(this.jabatan)
}
