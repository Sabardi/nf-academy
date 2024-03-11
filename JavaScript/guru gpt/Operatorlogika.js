// operator logika digunakan untuk mengevaluasi ekspresi kebenaran (true/false)

// Operator && (AND)
// akan bernilai true jika kedua nilai nya bernilai true. Jika salah satu nya atau keduanya false, hasilnya akan false.

let a = true;
let b = false;
console.log(a && b); // Output: false

// Operator || (OR)
// akan bernilai true jika salah satu operand atau keduanya bernilai true. 
// Jika kedua operand adalah false, hasilnya akan false.

let c = true
let d = false
console.log(c || d); // Output: true

// Mengubah nilai operand menjadi kebalikannya. Jika operand awalnya true, 
// maka setelah menggunakan operator !, nilainya menjadi false, dan sebaliknya.

let e = false
let f = true
console.log(!e); // Output: true
console.log(!f); // Output: true