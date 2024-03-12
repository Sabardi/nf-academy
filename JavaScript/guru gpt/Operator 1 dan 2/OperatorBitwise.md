Di JavaScript, operator bitwise digunakan untuk melakukan operasi pada level bit dari angka-angka dalam representasi biner. Berikut adalah operator bitwise yang umum digunakan:

1. **AND Bitwise (&)**:
   - Melakukan operasi AND pada setiap bit dari operandnya.
   ```javascript
   var x = 5;  // Representasi biner: 101
   var y = 3;  // Representasi biner: 011
   console.log(x & y); // Output: 1 (101 & 011 = 001)
   ```

2. **OR Bitwise (|)**:
   - Melakukan operasi OR pada setiap bit dari operandnya.
   ```javascript
   var x = 5;  // Representasi biner: 101
   var y = 3;  // Representasi biner: 011
   console.log(x | y); // Output: 7 (101 | 011 = 111)
   ```

3. **XOR Bitwise (^)**:
   - Melakukan operasi XOR (exclusive OR) pada setiap bit dari operandnya.
   ```javascript
   var x = 5;  // Representasi biner: 101
   var y = 3;  // Representasi biner: 011
   console.log(x ^ y); // Output: 6 (101 ^ 011 = 110)
   ```

4. **NOT Bitwise (~)**:
   - Melakukan operasi NOT (negasi) pada setiap bit dari operandnya. Mengubah setiap bit `0` menjadi `1`, dan sebaliknya. Operasi ini juga mengubah tanda dari angka tersebut.
   ```javascript
   var x = 5;  // Representasi biner: 101
   console.log(~x); // Output: -6
   ```

5. **Shift Left (<<)**:
   - Melakukan operasi pergeseran bit ke kiri sebanyak n bit. Bit yang keluar dari sisi kiri akan diabaikan, dan bit kosong di sisi kanan akan diisi dengan nol.
   ```javascript
   var x = 5;  // Representasi biner: 101
   console.log(x << 1); // Output: 10 (101 << 1 = 1010)
   ```

6. **Shift Right (>>)**:
   - Melakukan operasi pergeseran bit ke kanan sebanyak n bit. Bit yang keluar dari sisi kanan akan diabaikan, dan bit kosong di sisi kiri akan diisi dengan nilai bit yang paling kiri sebelum pergeseran (untuk angka positif) atau dengan 1 (untuk angka negatif).
   ```javascript
   var x = 5;  // Representasi biner: 101
   console.log(x >> 1); // Output: 2 (101 >> 1 = 10)
   ```

Operator bitwise digunakan untuk manipulasi data pada tingkat bit, dan sering digunakan dalam optimisasi kode atau dalam kasus-kasus khusus yang memerlukan manipulasi langsung pada representasi biner dari data.