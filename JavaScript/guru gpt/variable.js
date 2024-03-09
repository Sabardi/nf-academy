// variable 1
let nama = "sabardi"
let alamat = "bagu"
let umur = 24
console.log("Nama saya = "+ nama)
console.log("alamat saya = "+ alamat)
console.log("umur saya = "+ umur)

console.log("==== String interpolas ====")
// String interpolation adalah teknik dalam pemrograman di mana nilai variabel dimasukkan ke dalam sebuah string. Ini memungkinkan kita untuk membuat string yang lebih dinamis dengan menyertakan nilai variabel di dalamnya, tanpa harus menggunakan operasi konkatenasi atau metode lain untuk menggabungkan string dan nilai variabel.
// untuk membuat ini tanda ini(``) dia berada di atas ctrl Tab 

// Penggunaan Backticks (`) - Template Literals
let info = `nama sy ${nama} saya tinggal di ${alamat} dan saya berusia ${umur}`;
console.log(info)

//  Metode concat():
let informasi = "nama saya ".concat(nama, " saya tinggal di ", alamat, " saya berumur ", umur, " Tahun")
console.log(informasi)

// Metode + (Concatenation)
// cara seperti biasa untuk pemanggilan pada umum nya 
// seperti di atas pada baris ke 2 sampai 7 