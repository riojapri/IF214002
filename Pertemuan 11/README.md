## DDL
```sql
CREATE TABLE IF NOT EXISTS public.admin
(
    id_admin integer NOT NULL,
    nama_admin character(50) COLLATE pg_catalog."default" NOT NULL,
    no_tlp character(13) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT admin_pkey PRIMARY KEY (id_admin)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.admin
    OWNER to postgres;
```
```sql
CREATE TABLE IF NOT EXISTS public.kelas_motor
(
    id_kelas integer NOT NULL,
    nama_kelas character varying(20) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT kelas_motor_pkey PRIMARY KEY (id_kelas),
    CONSTRAINT id_kelas UNIQUE (id_kelas)
        INCLUDE(nama_kelas)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.kelas_motor
    OWNER to postgres;
```
```sql
CREATE TABLE IF NOT EXISTS public.peserta
(
    id_peserta integer NOT NULL,
    nama_peserta character(50) COLLATE pg_catalog."default" NOT NULL,
    no_tlp_peserta character(13) COLLATE pg_catalog."default" NOT NULL,
    CONSTRAINT peserta_pkey PRIMARY KEY (id_peserta)
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.peserta
    OWNER to postgres;
```
```sql
CREATE TABLE IF NOT EXISTS public.biaya_daftar
(
    id_biaya integer NOT NULL,
    id_kelas integer NOT NULL,
    biaya integer NOT NULL,
    CONSTRAINT biaya_daftar_pkey PRIMARY KEY (id_biaya),
    CONSTRAINT id_kelas FOREIGN KEY (id_kelas)
        REFERENCES public.kelas_motor (id_kelas) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.biaya_daftar
    OWNER to postgres;
```
```sql
CREATE TABLE IF NOT EXISTS public.register
(
    id_register integer NOT NULL,
    id_admin integer NOT NULL,
    id_peserta integer NOT NULL,
    id_kelas integer NOT NULL,
    id_biaya integer NOT NULL,
    CONSTRAINT register_pkey PRIMARY KEY (id_register),
    CONSTRAINT id_admin FOREIGN KEY (id_admin)
        REFERENCES public.admin (id_admin) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT id_biaya FOREIGN KEY (id_biaya)
        REFERENCES public.biaya_daftar (id_biaya) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT id_kelas FOREIGN KEY (id_kelas)
        REFERENCES public.kelas_motor (id_kelas) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID,
    CONSTRAINT id_peserta FOREIGN KEY (id_peserta)
        REFERENCES public.peserta (id_peserta) MATCH SIMPLE
        ON UPDATE NO ACTION
        ON DELETE NO ACTION
        NOT VALID
)

TABLESPACE pg_default;

ALTER TABLE IF EXISTS public.register
    OWNER to postgres;
```

## DML
```sql
INSERT INTO public.admin(
	id_admin, nama_admin, no_tlp)
	VALUES (1, 'Rio Jep', '082666441069'),(2, 'BME', '082666441067');
```
```sql
INSERT INTO public.kelas_motor(
	id_kelas, nama_kelas)
	VALUES (1, 'Bebek 115cc STD'),(2, 'Matic FFA'),(3, 'OMR RX KING 200 cc');
```
```sql
INSERT INTO public.peserta(
	id_peserta, nama_peserta, no_tlp_peserta)
	VALUES (1, 'BME Motor Sport', '089977554326'),(2, 'Morena', '089977554328'),(3, 'JWS Product', '089977554326');
```
```sql
INSERT INTO public.biaya_daftar (id_biaya,id_kelas,biaya) VALUES
	 (1,1,500000),
	 (2,2,700000),
	 (3,3,550000);
```
```sql
INSERT INTO public.register (id_register,id_admin,id_peserta,id_kelas,id_biaya) VALUES
	 (1,1,1,1,1),
	 (2,1,2,2,2),
	 (3,1,3,3,3);
```

## DQL
SELECT
	register.id_register,
	admin.nama_admin,
	peserta.nama_peserta,
    kelas_motor.nama_kelas,
    biaya_daftar.biaya
FROM
	register
INNER JOIN admin 
    ON register.id_admin = admin.id_admin
INNER JOIN peserta
    on register.id_peserta = peserta.id_peserta
inner JOIN kelas_motor
    on register.id_kelas = kelas_motor.id_kelas
INNER JOIN biaya_daftar
    on register.id_biaya = biaya_daftar.id_biaya
ORDER BY register
