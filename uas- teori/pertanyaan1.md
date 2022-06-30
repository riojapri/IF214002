## ERD
![erd dragbike](https://user-images.githubusercontent.com/80973244/175459185-8421c57f-572e-4596-a365-905232266123.png)
## admin
![Screenshot (691)](https://user-images.githubusercontent.com/80973244/175460019-1f36d881-ee6b-4b4c-9366-582227776770.png)
## biaya_daftar
![Screenshot (692)](https://user-images.githubusercontent.com/80973244/175460026-3b88d18c-22da-49be-bed2-7f6c2e96b8e2.png)
## kelas_motor
![Screenshot (695)](https://user-images.githubusercontent.com/80973244/175460030-04121401-7914-4858-b51d-4067ba0e4f1a.png)
## register
![Screenshot (697)](https://user-images.githubusercontent.com/80973244/175460033-d2f0a52b-05c5-49f9-8c8f-16cd4f6e8a20.png)
## peserta
![Screenshot (696)](https://user-images.githubusercontent.com/80973244/175460034-be77a297-1687-443e-9c8c-5286e71afe52.png)


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
