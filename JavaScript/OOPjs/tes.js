class Employee {
    constructor(nama, jabatan, status) {
        this.nama = nama;
        this.jabatan = jabatan;
        this.status = status;
        this.gajiPokok = this.setGajiPokok();
        this.tunjangan = 0.15 * this.gajiPokok;
        this.bpjs = 0.1 * this.gajiPokok;
        this.keluarga = (this.status === "Sudah Menikah") ? 0.2 * this.gajiPokok : 0;
        this.gajiBersih = (this.gajiPokok + this.tunjangan) - this.bpjs + this.keluarga;
    }

    setGajiPokok() {
        switch (this.jabatan) {
            case "Manager":
                return 15000000;
            case "Asisten Manager":
                return 10000000;
            case "Staff":
                return 5000000;
            default:
                return 0;
        }
    }

    generateSlipGaji() {
        return `
        <table border="1" style="border-collapse: collapse; width: 100%;">
        <thead bgcolor="#B5C0D0">
            <tr>
                <th colspan="2">Slip Gaji</th> 
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Nama</td>
                <td>${this.nama}</td>
            </tr>
            <tr>
                <td>Jabatan</td>
                <td>${this.jabatan}</td>
            </tr>
            <tr>
                <td>Status</td>
                <td>${this.status}</td>
            </tr>
            <tr>
                <td>Gaji Pokok</td>
                <td>${this.gajiPokok.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
            </tr>
            <tr>
                <td>Tunjangan</td>
                <td>${this.tunjangan.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
            </tr>
            <tr>
                <td>Nama</td>
                <td> - ${this.bpjs.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
            </tr>
            <tr>
                <td>Tunjangan keluarga</td>
                <td>${this.keluarga.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
            </tr>
        </tbody>
        <tfoot bgcolor="B5C0D0">
            <tr>
                <td>Gaji bersih</td>
                <td>${this.gajiBersih.toLocaleString("ID", {style: "currency", currency: "IDR"})}</td>
            </tr>
        </tfoot>
        `;
    }
}

function klik() {
    let nama = document.getElementById("nama").value;
    let jabatan = document.getElementById("jabatan").value;
    let status = document.getElementById("status").value;

    let employee = new Employee(nama, jabatan, status);
    let hasil = document.getElementById("hasil");
    hasil.innerHTML = employee.generateSlipGaji();
}


let jabatan = ["Manager", "Asisten Manager", "Staff"];
let statusnya = ["Sudah Menikah", "Belum Menikah"];
let opsiJabatan = `<option value="">Pilih Jabatan</option>`;
let opsistatus = `<option value="">Pilih Status</option>`;

for (let p in jabatan) {
    opsiJabatan += `<option value="${jabatan[p]}">${jabatan[p]}</option>`;
}

for (let l in statusnya) {
    opsistatus += `<option value="${statusnya[l]}">${statusnya[l]}</option>`;
}

document.getElementById("jabatan").innerHTML = opsiJabatan;
document.getElementById("status").innerHTML = opsistatus;
