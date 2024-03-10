// Operator perbandingan digunakan untuk membandingkan dua nilai dan mengembalikan nilai kebenaran (true atau false) berdasarkan hasil perbandingan 
// Operator perbandingan ini sering digunakan dalam struktur pengkondisian seperti if, else if, dan switch, serta dalam penggunaan loop untuk mengatur aliran program berdasarkan hasil perbandingan nilai-nilai tertentu.

// Equal to (==): Memeriksa apakah dua nilai sama, tanpa memeriksa tipe data.
let x = 5;
let y = 5;
let banding = x == y
console.log("apakah x sama dengan y ? " + banding); // Output: true

// Not equal to (!=): Memeriksa apakah dua nilai tidak sama, tanpa memeriksa tipe data.
let a = 5;
let b = 5;
let banding2 = a != b
console.log("apakah x tidak sama dengan y ?" + banding2); // Output: true

// Strict equal to (===): Memeriksa apakah dua nilai sama, termasuk tipe datanya.
let c = 5
// let d = 5  
let d = '5' // membandingkan dengan tipe data nya
let banding3 = c === d
console.log("apakah kedua nilai ini sama ?"+banding3) 

// Strict not equal to (!==): Memeriksa apakah dua nilai tidak sama, termasuk tipe datanya.
let e = 5
let f = 6 
// let f = '5' // membandingkan dengan tipe data nya
let banding4 = e !== f
console.log("apakah kedua nilai ini sama ?"+banding4) 

// Greater than (>): Memeriksa apakah nilai pertama lebih besar dari nilai kedua.
let g = 12
let h = 11
let banding5 = g > h
console.log("apakah g lebih besar dari h ? " + banding5)

// Greater than or equal to (>=): Memeriksa apakah nilai pertama lebih besar atau sama dengan nilai kedua.
let i = 11
let j = 11
let banding6 = i >= j
console.log("apakah i lebih besar sama dengan j ? " + banding6)

// Less than (<): Memeriksa apakah nilai pertama lebih kecil dari nilai kedua.
let k = 10
let l = 11
let banding7 = g < h
console.log("apakah k lebih kecil dari l ? " + banding7)
// Less than or equal to (<=): Memeriksa apakah nilai pertama lebih kecil atau sama dengan nilai kedua.
let m = 10
let n = 11
let banding8 = m <= n
console.log("apakah m lebih kecil sama dengan n ? " + banding8)