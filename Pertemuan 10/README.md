## Tugas
- Buat infografik / cheatsheet dari perintah-perintah MySQL di atas (boleh yang mau pake PostgreSQL)
- Buat query untuk mencari penduduk berusia diatas 25 tahun yang berada di kabupaten 3204 dari [data ini](https://github.com/Nurkholis070401/IF214002/blob/main/Pertemuan%2010/penduduk.sql)
- Nilai tambah, untuk yang menambahkan perintah-perintah MySQL lainnya.

-------

SQL CHEAT SHEET
--------
|SQL Options|
|---|
|READ_COMMITTED_SNAPSHOT/OFF|
|ANSI_NULLS /OFF|
|ANSI_PADDING/OFF|
|ANSI_WARNINGS/OFF|
|ARITHABORT/OFF|
|CONCAT_NULL_YIELDS_NULL/OFF|
|QUOTED_IDENTIFIER/OFF|
|NUMERIC_ROUNDABORT /OFF|
|RECURSIVE_TRIGGERS /OFF|

|QUERYING DATA FROM A TABLE|
|---|
|**SELECT c1, c2 FROM t;**
Query data in columns c1, c2 from a table|
|**SELECT * FROM t;**
Query all rows and columns from a table|
|**SELECT c1, c2 FROM t WHERE condition;** 
Query data and filter rows with a condition|
|**SELECT DISTINCT c1 FROM t WHERE condition;** 
Query distinct rows from a table|
|**SELECT c1, c2 FROM t ORDER BY c1 ASC [DESC];** 
Sort the result set in ascending or descending order|
|**SELECT c1, c2 FROM t ORDER BY c1 LIMIT n OFFSET offset;**
Skip offset of rows and return the next n rows|
|**SELECT c1, aggregate(c2) FROM t GROUP BY c1;**
Group rows using an aggregate function|
|**SELECT c1, aggregate(c2) FROM t GROUP BY c1 HAVING condition;**
Filter groups using HAVING clause|

# **_SQL languages_**

---

**DDL** adalah nama pendek dari Data Definition Language, yang berhubungan dengan skema dan deskripsi basis data, tentang bagaimana data harus berada dalam basis data.

**DML** adalah nama pendek dari Bahasa Manipulasi Data yang berhubungan dengan manipulasi data, dan termasuk pernyataan SQL yang paling umum seperti SELECT, INSERT, UPDATE, DELETE dll, dan digunakan untuk menyimpan, memodifikasi, mengambil, menghapus dan memperbarui data dalam database.

**DCL** adalah nama pendek dari Bahasa Kontrol Data yang mencakup perintah seperti GRANT, dan sebagian besar berkaitan dengan hak, izin, dan kontrol lain dari sistem basis data.

---

## Datatypes

**text types**

|Data Type|Description|
|---|---|
|CHAR(size)|Memegang string panjang tetap (dapat berisi huruf, angka, dan karakter khusus). Ukuran tetap ditentukan dalam tanda kurung. Dapat menyimpan hingga 255 karakter|
|VARCHAR(size)|Memegang string panjang variabel (dapat berisi huruf, angka, dan karakter khusus). Ukuran maksimum ditentukan dalam tanda kurung. Dapat menyimpan hingga 255 karakter. Catatan: Jika Anda memasukkan nilai yang lebih besar dari 255, itu akan dikonversi menjadi tipe TEXT|
|TINYTEXT|Memegang string dengan panjang maksimum 255 karakter|
|TEXT|Memegang string dengan panjang maksimum 65.535 karakter|
|BLOB|Untuk BLOB (Objek Besar Biner). Menampung hingga 65.535 byte data|
|MEDIUMTEXT|Memegang string dengan panjang maksimum 16.777.215 karakter|
|MEDIUMBLOB|Untuk BLOB (Objek Besar Biner). Menampung hingga 16.777.215 byte data|
|LONGTEXT|Memegang string dengan panjang maksimum 4.294.967.295 karakter|
|LONGBLOB|Untuk BLOB (Objek Besar Biner). Menampung hingga 4.294.967.295 byte data|
|ENUM(x,y,z,etc.)|Memungkinkan Anda memasukkan daftar nilai yang mungkin. Anda dapat membuat daftar hingga 65535 nilai dalam daftar ENUM. Jika nilai yang dimasukkan tidak ada dalam daftar, nilai kosong akan dimasukkan.Catatan: Nilai diurutkan dalam urutan yang Anda masukkan.Anda memasukkan nilai yang mungkin dalam format ini: ENUM('X','Y' ,'Z')|
|SET|Mirip dengan ENUM kecuali bahwa SET dapat berisi hingga 64 item daftar dan dapat menyimpan lebih dari satu pilihan|

**Number types**
|Data Types|Description|
|---|---|
|TINYINT(size)|-128 hingga 127 normal. 0 hingga 255 UNSIGNED**. Jumlah digit maksimum dapat ditentukan dalam tanda kurung|
|SMALLINT(size)|-32768 hingga 32767 normal. 0 hingga 65535 TANPA TANDATANGANI*. Jumlah digit maksimum dapat ditentukan dalam tanda kurung|
|MEDIUMINT(size)| -8388608 hingga 8388607 normal. 0 hingga 16777215 TANPA TANDATANGANI*. Jumlah digit maksimum dapat ditentukan dalam tanda kurung|
|INT(size)| -2147483648 hingga 2147483647 normal. 0 hingga 4294967295 TIDAK DITANDA TANGANI*. Jumlah digit maksimum dapat ditentukan dalam tanda kurung|
|BIGINT(size)| -9223372036854775808 hingga 9223372036854775807 normal. 0 hingga 18446744073709551615 TIDAK DITANDA TANGANI*. Jumlah digit maksimum dapat ditentukan dalam tanda kurung|
|FLOAT(size,d)| Angka kecil dengan titik desimal mengambang. Jumlah digit maksimum dapat ditentukan dalam parameter ukuran. Jumlah maksimum digit di sebelah kanan titik desimal ditentukan dalam parameter d|
|DOUBLE(size,d)| Angka besar dengan titik desimal mengambang. Jumlah digit maksimum dapat ditentukan dalam parameter ukuran. Jumlah maksimum digit di sebelah kanan titik desimal ditentukan dalam parameter d|
|DECIMAL(size,d)| DOUBLE disimpan sebagai string , memungkinkan untuk titik desimal tetap. Jumlah digit maksimum dapat ditentukan dalam parameter ukuran. Jumlah maksimum digit di sebelah kanan titik desimal ditentukan dalam parameter d|

**Date Types**
|Data Types|Description|
|---|---|
|DATE()| Sebuah tanggal. Format: YYYY-MM-DDCatatan: Rentang yang didukung adalah dari '1000-01-01' hingga '9999-12-31'|
|DATETIME()| *Kombinasi tanggal dan waktu. Format: YYYY-MM-DD HH:MI:SSCatatan: Rentang yang didukung adalah dari '1000-01-01 00:00:00' hingga '9999-12-31 23:59:59'|
|TIMESTAMP()| *Stempel waktu. Nilai TIMESTAMP disimpan sebagai jumlah detik sejak zaman Unix (‘1970-01-01 00:00:00’ UTC). Format: YYYY-MM-DD HH:MI:SSCatatan: Rentang yang didukung adalah dari '1970-01-01 00:00:01' UTC hingga '2038-01-09 03:14:07' UTC|
|TIME()| Suatu waktu. Format: HH:MI:SSCatatan: Rentang yang didukung adalah dari '-838:59:59' hingga '838:59:59'|
|YEAR()| Setahun dalam format dua digit atau empat digit.Catatan: Nilai yang diizinkan dalam format empat digit: 1901 hingga 2155. Nilai yang diizinkan dalam format dua digit: 70 hingga 69, mewakili tahun dari 1970 hingga 2069|

# Database
Create
```sql
create database dbname;
```
Drop
```sql
drop database dbname;
```

# Table
Check if not exit and create
```sql
IF OBJECT_ID('tbl_kunde', N'U') is not null
	drop table tbl_kunde;
GO
create table tbl_kunde (
  id_kunde int not null primary key,
  fi_moral_nr int,
  name varchar(25) not null,
  vorname varchar not null,
  wohnort varchar
);
GO
```

# Alter Table
Primary Key
```sql
ALTER TABLE tbl_kunde ADD PRIMARY KEY (id_kunde);
```
Foreign Key
```sql
ALTER TABLE tbl_kunde ADD CONSTRAINT FK_fi_moral_nr FOREIGN KEY (fi_moral_nr)
  REFERENCES tkey_moral
  ON UPDATE CASCADE
  ON DELETE SET NULL;
```
Constraint
```sql
ALTER TABLE tkey_moral ADD CONSTRAINT PK_id_moral_nr PRIMARY KEY (id_moral_nr);
ALTER TABLE tbl_kunde ADD CONSTRAINT FK_fi_moral_nr FOREIGN KEY (fi_moral_nr)
  REFERENCES tkey_moral
  ON UPDATE CASCADE
  ON DELETE SET NULL;
```
# Insert
Selected fields
```sql
insert into tkey_moral (id_moral_nr, moral_bez) values (1, 'gut'), (2, 'schlecht'), (3, 'schlecht');
```

All fields
```sql
INSERT INTO tbl_kunde VALUES (3838,1,'Meier','Laura','Waldibrücke')
```
# Update
Update by condition
```sql
update tbl_kunde set name = 'Menzer' where name = 'Waltenspühl-Menzer'
update tass_police set praem_stufe = 101 where praem_stufe = 108
```
# Delete
All
```sql
delete from tbl_kunde
```
Condition
```sql
delete from tkey_moral where id_moral_nr = 4
delete from tbl_kunde where vorname = 'Peter' and name = 'Fischer' or vorname = 'Martin' and name = 'Müller'
```

# Index
Create
```sql
create unique index ix_kund_name on tbl_kunde (name)
```
Disable
```sql
alter index ix_kund_name on tbl_kunde disable
```
Rebuild
```sql
alter index ix_kund_name on tbl_kunde rebuild
```
Reorganize
```sql
alter index ix_kund_name on tbl_kunde reorganize
```
Drop
```sql
drop index ix_kund_name on tbl_kunde
```
Alter
```sql
drop index ix_kund_name on tbl_kunde
```

#Type
create
```sql
create type tp_moralisches from numeric(9,0)
```

#Login
change password
```sql
alter login stud23 with password = 'hello' old_password = 'pass_wd23'
```

#User
create
```sql
create user romulus from login romulus
```
drop
```sql
drop user romulus
```
#About Joins
![sql join summary](http://i.stack.imgur.com/hzl8e.png)
```sql
SELECT customers.id, customers.name, items.name, customers.state 
FROM customers, items
WHERE customers.id=seller_id
ORDER BY customers.id
```
**Join tables** -> Joining two tables together in a query output. The third line is important because it shows how the two tables are related (in this case it is their key values).   

```sql
SELECT customers.name, items.name FROM customers
LEFT OUTER JOIN items ON customers.id=seller_id
```
**LEFT/RIGHT OUTER JOIN** -> Takes the table left of the word 'LEFT' or 'RIGHT' (in this case customers) and joins it regardless of whether it has any values or not. So the above statement shows all users/customers, even if they aren't selling anything.  

#Select with Subqueries 
Select max and min values
```sql
select dt_stueck_titel as Titel, dt_zeit as Zeit
from tbl_stueck
where dt_zeit = (select max(dt_zeit) from tbl_stueck)
or dt_zeit = (select min(dt_zeit) from tbl_stueck)
order by dt_zeit;
```
Select with query in condition
```sql
select dt_stueck_titel as Titel, dt_zeit as Zeit
from tbl_stueck
where dt_zeit between (select avg(dt_zeit) from tbl_stueck)*0.9
and (select avg(dt_zeit) from tbl_stueck)*1.1
order by dt_zeit;
```
Select query as value
```sql
select dt_stueck_titel as Titel,
dt_zeit/(select avg(dt_zeit) from tbl_stueck)*100 as Zeit
from tbl_stueck
where dt_stueck_titel = 'You Shook Me'
```
![image](https://user-images.githubusercontent.com/100669802/169086959-003cb986-9688-4fda-b6f7-a6dfab0df3d0.png)


## Tugas 
## ``Query data Penduduk``
### Cari Data umur penduduk di kabupaten 3204

```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp, gender, tanggal_lahir, ijazah_terakhir, pekerjaan, penghasilan_bulanan, TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) AS umur FROM penduduk
WHERE TIMESTAMPDIFF(YEAR, tanggal_lahir, CURDATE()) > 25 AND kode_kabupaten='3204';
```
### Cari Data umur penduduk di kabupaten 3204 pake SUM()
```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp, gender, tanggal_lahir, ijazah_terakhir, pekerjaan, penghasilan_bulanan, SUM(CURRENT_DATE - tanggal_lahir) AS umur FROM penduduk
GROUP BY id
HAVING SUM(tanggal_lahir) < 1997 AND kode_kabupaten='3204';
```

### Sorting Nama Penduduk

```python
SELECT * FROM penduduk 
ORDER BY nama_lengkap;
```
### sort 2 kolom

```python
SELECT *
 FROM penduduk
 ORDER BY nama_lengkap ASC, gender DESC;
 ```
 
### Sort data umur Penduduk Lebih 25 tahun di ``Data Penduduk``

```python
SELECT id, nama_lengkap, kode_kabupaten, nomor_hp,gender,ijazah_terakhir, pekerjaan, penghasilan_bulanan , SUM(tanggal_lahir) FROM penduduk
GROUP BY nama_lengkap
HAVING SUM(tanggal_lahir)<1997;
```
