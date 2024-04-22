#Soal 2.3

1.Tampilkan produk yang kode awalnya huruf K dan huruf M
SELECT * FROM produk WHERE kode LIKE 'K%' OR kode LIKE 'M%';
Hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM produk WHERE kode LIKE 'K%' OR kode LIKE 'M%';
    +----+------+----------------+------------+------------+------+----------+------+-----------+-----------------+
    | id | kode | nama           | harga_beli | harga_jual | stok | min_stok | foto | deskripsi | jenis_produk_id |
    +----+------+----------------+------------+------------+------+----------+------+-----------+-----------------+
    |  3 | K001 | Kulkas 2 pintu |    3500000 |    4680000 |    6 |        2 |      | NULL      |               1 |
    |  4 | M001 | Meja Makan     |     500000 |     600000 |    4 |        3 | NULL | NULL      |               2 |
    +----+------+----------------+------------+------------+------+----------+------+-----------+-----------------+
    2 rows in set (0,001 sec)


2.Tampilkan produk yang kode awalnya bukan huruf M
SELECT * FROM produk WHERE kode NOT LIKE 'M';
hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM produk WHERE kode NOT LIKE 'M';
    +----+--------+-------------------+------------+------------+------+----------+------------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-----------------+
    | id | kode   | nama              | harga_beli | harga_jual | stok | min_stok | foto                   | deskripsi                                                                                                                                                                                                           | jenis_produk_id |
    +----+--------+-------------------+------------+------------+------+----------+------------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-----------------+
    |  1 | TV01   | Televisi 21 inchs |    3500000 |   50500000 |    5 |        2 |                        |NULL                                                                                                                                                                                                                |               1 |
    |  2 | TV02   | Televisi 40 inch  |    5500000 |    7440000 |    4 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    |  3 | K001   | Kulkas 2 pintu    |    3500000 |    4680000 |    6 |        2 |                        | NULL                                                                                                                                                                                                                |               1 |
    |  4 | M001   | Meja Makan        |     500000 |     600000 |    4 |        3 | NULL                   | NULL                                                                                                                                                                                                                |               2 |
    |  5 | TK01   | Teh Kotak         |       3000 |       3500 |    6 |       10 | foto-5.png             | NULL                                                                                                                                                                                                                |               4 |
    |  6 | PC01   | PC Desktop HP     |    7000000 |    9984000 |    9 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               5 |
    |  7 | TB01   | Teh Botol         |       2000 |       2500 |   53 |       10 | foto-7.jpg             | NULL                                                                                                                                                                                                                |               4 |
    |  8 | AC01   | Notebook Acer S   |    8000000 |   11232000 |    7 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               5 |
    |  9 | LN01   | Notebook Lenovo   |    9000000 |   12480000 |    9 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               5 |
    | 11 | L005   | Laptop Lenovo     |   13000000 |   16000000 |    5 |        2 |                        | NULL                                                                                                                                                                                                                |               1 |
    | 15 | L112   | Kopi              |      20000 |      30000 |   10 |       15 | foto-15.png            | Luwak White Coffee merupakan bubuk biji kopi luwak yang dikombinasikan dengan gurihnya krimer serta manisnya gula. Keharuman kopi serta rasa manisnya yang pas juga membuat popularitas Luwak White Coffee melejit. |               4 |
    | 16 | L113   | Teh Sosro 2       |      10000 |      15000 |   10 |       12 | .png                   | NULL                                                                                                                                                                                                                |               1 |
    | 18 | L0015  | Laptop Asus       |    3000000 |    5000000 |   10 |       20 | foto-65542ffa66604.jpg | NULL                                                                                                                                                                                                                |               1 |
    | 19 | TV0115 | Televisi 22 inc`  |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 20 | TV0116 | Televisi 23 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 21 | TV0117 | Televisi 24 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 22 | TV0118 | Televisi 25 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 24 | TV0120 | Televisi 27 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 25 | TV0121 | Televisi 28 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 26 | TV0122 | Televisi 29 inc   |    3500000 |   50500000 |    5 |        2 | NULL                   | NULL                                                                                                                                                                                                                |               1 |
    | 27 | THP001 | Teh Pucuk         |       4000 |       5000 |   10 |        2 | pucuk.jpg              | Teh pucuk adalah                                                                                                                                                                                                    |               4 |
    | 28 | THP002 | Teh Pucuk2        |       4000 |       5000 |   10 |        2 | pucuk.jpg              | Teh pucuk adalah                                                                                                                                                                                                    |               4 |
    +----+--------+-------------------+------------+------------+------+----------+------------------------+---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------+-----------------+
    22 rows in set (0,001 sec)

3.Tampilkan produk-produk televisi
SELECT * FROM produk WHERE nama LIKE '%Televisi %';
Hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM produk WHERE nama LIKE '%Televisi %';
    +----+--------+-------------------+------------+------------+------+----------+------+-----------+-----------------+
    | id | kode   | nama              | harga_beli | harga_jual | stok | min_stok | foto | deskripsi | jenis_produk_id |
    +----+--------+-------------------+------------+------------+------+----------+------+-----------+-----------------+
    |  1 | TV01   | Televisi 21 inchs |    3500000 |   50500000 |    5 |        2 |      | NULL      |               1 |
    |  2 | TV02   | Televisi 40 inch  |    5500000 |    7440000 |    4 |        2 | NULL | NULL      |               1 |
    | 19 | TV0115 | Televisi 22 inc`  |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 20 | TV0116 | Televisi 23 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 21 | TV0117 | Televisi 24 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 22 | TV0118 | Televisi 25 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 24 | TV0120 | Televisi 27 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 25 | TV0121 | Televisi 28 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    | 26 | TV0122 | Televisi 29 inc   |    3500000 |   50500000 |    5 |        2 | NULL | NULL      |               1 |
    +----+--------+-------------------+------------+------------+------+----------+------+-----------+-----------------+
    9 rows in set (0,001 sec)


4.Tampilkan pelanggan mengandung huruf 'SA'
 SELECT * FROM pelanggan WHERE nama LIKE '%SA%';
hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM pelanggan WHERE nama LIKE '%SA%';
    +----+------+-------------+----+-----------+------------+------------------+----------+
    | id | kode | nama        | jk | tmp_lahir | tgl_lahir  | email            | kartu_id |
    +----+------+-------------+----+-----------+------------+------------------+----------+
    |  9 | C009 | Ahmad Hasan | L  | Surabaya  | 1992-10-15 | ahasan@gmail.com |        4 |
    | 10 | C010 | Cassanndra  | P  | Belfast   | 1990-11-20 | casa90@gmail.com |        1 |
    +----+------+-------------+----+-----------+------------+------------------+----------+
    2 rows in set (0,001 sec)


5.Tampilkan pelanggan yang lahirnya bukan di Jakarta dan mengandung huruf ‘yo‘
SELECT * FROM pelanggan WHERE tmp_lahir NOT LIKE 'Jakarta' and  tmp_lahir not LIKE '%yo%';
hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM pelanggan WHERE tmp_lahir NOT LIKE 'Jakarta' and  tmp_lahir not LIKE '%yo%';
    +----+-------+--------------------+----+-----------+------------+----------------------+----------+
    | id | kode  | nama               | jk | tmp_lahir | tgl_lahir  | email                | kartu_id |
    +----+-------+--------------------+----+-----------+------------+----------------------+----------+
    |  1 | C001  | Agung Sedayu Group | L  | Solo      | 2010-01-01 | sedayu@gmail.com     |        1 |
    |  3 | C003  | Sekar Mirah        | P  | Kediri    | 1983-02-20 | mirah@yahoo.com      |        1 |
    |  4 | C004  | Swandaru Geni      | L  | Kediri    | 1981-01-04 | swandaru@yahoo.com   |        4 |
    |  5 | C005  | Pradabashu         | L  | Pati      | 1985-04-02 | prada85@gmail.com    |        2 |
    |  8 | C008  | Andre Haru         | L  | Surabaya  | 1990-07-15 | andre.haru@gmail.com |        4 |
    |  9 | C009  | Ahmad Hasan        | L  | Surabaya  | 1992-10-15 | ahasan@gmail.com     |        4 |
    | 10 | C010  | Cassanndra         | P  | Belfast   | 1990-11-20 | casa90@gmail.com     |        1 |
    | 11 | K0010 | Andi Wijaya        | L  | Tangerang | 2023-11-07 | andi@gmail.com       |        2 |
    +----+-------+--------------------+----+-----------+------------+----------------------+----------+
    8 rows in set (0,001 sec)


6.Tampilkan pelanggan yang karakter huruf ke – 2 nya adalah A
SELECT * FROM pelanggan WHERE SUBSTRING(nama, 2, 1) = 'A';
hasil:
    MariaDB [DB_POST_SIB6]> SELECT * FROM pelanggan WHERE SUBSTRING(nama, 2, 1) = 'A';
    +----+------+--------------+----+------------+------------+------------------+----------+
    | id | kode | nama         | jk | tmp_lahir  | tgl_lahir  | email            | kartu_id |
    +----+------+--------------+----+------------+------------+------------------+----------+
    |  2 | C002 | Pandan Wangi | P  | Yogyakarta | 1950-01-01 | wangi@gmail.com  |        2 |
    |  6 | C006 | Gayatri Dwi  | P  | Jakarta    | 1987-11-28 | gaya87@gmail.com |        1 |
    | 10 | C010 | Cassanndra   | P  | Belfast    | 1990-11-20 | casa90@gmail.com |        1 |
    +----+------+--------------+----+------------+------------+------------------+----------+
    3 rows in set (0,001 sec)

#Soal 2.4

1.Tampilkan 2 data produk termahal
SELECT *FROM produk ORDER BY harga_beli DESC LIMIT 2;
hasil:
    MariaDB [DB_POST_SIB6]> SELECT *FROM produk ORDER BY harga_beli DESC LIMIT 2;
    +----+------+-----------------+------------+------------+------+----------+------+-----------+-----------------+
    | id | kode | nama            | harga_beli | harga_jual | stok | min_stok | foto | deskripsi | jenis_produk_id |
    +----+------+-----------------+------------+------------+------+----------+------+-----------+-----------------+
    | 11 | L005 | Laptop Lenovo   |   13000000 |   16000000 |    5 |        2 |      | NULL      |               1 |
    |  9 | LN01 | Notebook Lenovo |    9000000 |   12480000 |    9 |        2 | NULL | NULL      |               5 |
    +----+------+-----------------+------------+------------+------+----------+------+-----------+-----------------+
    2 rows in set (0,001 sec)


2.Tampilkan produk yang paling murah
SELECT *FROM produk ORDER BY harga_beli ASC limit 1;
hasil:
    MariaDB [DB_POST_SIB6]> SELECT *FROM produk ORDER BY harga_beli ASC limit 1;
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    | id | kode | nama      | harga_beli | harga_jual | stok | min_stok | foto       | deskripsi | jenis_produk_id |
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    |  7 | TB01 | Teh Botol |       2000 |       2500 |   53 |       10 | foto-7.jpg | NULL      |               4 |
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    1 row in set (0,001 sec)

3.Tampilkan produk yang stoknya paling banyak
SELECT *FROM produk ORDER BY stok DESC limit 1;
hasil:
    MariaDB [DB_POST_SIB6]> SELECT *FROM produk ORDER BY stok DESC limit 1;
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    | id | kode | nama      | harga_beli | harga_jual | stok | min_stok | foto       | deskripsi | jenis_produk_id |
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    |  7 | TB01 | Teh Botol |       2000 |       2500 |   53 |       10 | foto-7.jpg | NULL      |               4 |
    +----+------+-----------+------------+------------+------+----------+------------+-----------+-----------------+
    1 row in set (0,001 sec)

4.Tampilkan dua produk yang stoknya paling sedikit
SELECT *FROM produk ORDER BY stok ASC limit 2;
hasil:
    MariaDB [DB_POST_SIB6]> SELECT *FROM produk ORDER BY stok ASC limit 2;
    +----+------+------------------+------------+------------+------+----------+------+-----------+-----------------+
    | id | kode | nama             | harga_beli | harga_jual | stok | min_stok | foto | deskripsi | jenis_produk_id |
    +----+------+------------------+------------+------------+------+----------+------+-----------+-----------------+
    |  2 | TV02 | Televisi 40 inch |    5500000 |    7440000 |    4 |        2 | NULL | NULL      |               1 |
    |  4 | M001 | Meja Makan       |     500000 |     600000 |    4 |        3 | NULL | NULL      |               2 |
    +----+------+------------------+------------+------------+------+----------+------+-----------+-----------------+
    2 rows in set (0,001 sec)

5.Tampilkan pelanggan yang paling muda
SELECT *FROM pelanggan ORDER BY tgl_lahir ASC
hasil:



6.Tampilkan pelanggan yang paling tua
SELECT *FROM pelanggan ORDER BY tgl_lahir ASC;
hasil:
    MariaDB [DB_POST_SIB6]> SELECT *FROM pelanggan ORDER BY tgl_lahir ASC limit 1;
    +----+------+--------------+----+------------+------------+-----------------+----------+
    | id | kode | nama         | jk | tmp_lahir  | tgl_lahir  | email           | kartu_id |
    +----+------+--------------+----+------------+------------+-----------------+----------+
    |  2 | C002 | Pandan Wangi | P  | Yogyakarta | 1950-01-01 | wangi@gmail.com |        2 |
    +----+------+--------------+----+------------+------------+-----------------+----------+


SELECT *FROM pelanggan ORDER BY tgl_lahir DESC
hasil:
MariaDB [DB_POST_SIB6]> SELECT *FROM pelanggan ORDER BY tgl_lahir DESC limit 1;
+----+-------+------+----+-----------+------------+---------------+----------+
| id | kode  | nama | jk | tmp_lahir | tgl_lahir  | email         | kartu_id |
+----+-------+------+----+-----------+------------+---------------+----------+
| 12 | K0011 | Ira  | P  | Jakarta   | 2023-11-07 | ira@gmail.com |        4 |
+----+-------+------+----+-----------+------------+---------------+----------+

