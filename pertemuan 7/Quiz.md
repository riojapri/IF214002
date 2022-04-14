# pemodelan Data Histori

# quiz
## Pemanfaat data histori 
contoh data histrori terkhir dibeli di aplikasi 
## Tabel terkhir di beli 
||mobil|
|---|---|
|PK|ID|
||nama_mobil|
||type_mobil|

||buyer|
|---|---|
|PK|ID|
||Nama_mobil|

||Histori Beli|
|---|---|
|PK|ID|
|PK|TANGGAL_BELI
||type_mobil|

sql
CREATE TABLE

```python
print("Quiz Pertemuan 7")
print("Terakhir beli")
CREATE TABLE Id_buyer(
   id_buyer INT,
   Name_mobil VARCHAR(100) NOT NULL,
   type_mobil VARCHAR(40) NOT NULL,
   submission_date DATE,
   PRIMARY KEY ( id_buyer )
);
