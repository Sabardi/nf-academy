let Hari = 10;
let NamaHari;

switch (Hari) {
    case 1:
        NamaHari = "senin"
        break;
    case 2:
        NamaHari = "selasa"
        break;
    case 3:
        NamaHari = "rabu"
        break;
    case 4:
        NamaHari = "kamis"
        break;
    case 5:
        NamaHari = "jumat"
        break;
    case 6:
        NamaHari = "sabtu"
        break;
    case 7:
        NamaHari = "minggu"
        break;
    case 2:
        NamaHari = "selasa"
        break;

    default:
        NamaHari = "tidak ada di kalender";
        break;
}

console.log("Hari ini "+ NamaHari +" bertepatan dengan tanggal "+ Hari)