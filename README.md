# LATIHAN7DPBO2022
Repository ini bertujuan untuk memenuhi tugas latihan 7 pada mata kuliah Desain Pemograman Berorientasi Objek. 

------------------

- Nama : Sabian Annaya Havid
- Program Studi/Kelas : Ilmu Komputer/C2
- NIM : 2005021

*Saya Sabian Annaya Havid mengerjakan Latihan 5 dalam mata kuliah Desain Pemograman Berorientasi Objek untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.*

------------------
## Penjelasan/Konsep program

1. tombol Add berfungsi untuk menambahkan data.
Dapat dilakukan dengan cara membuat terlebih dahulu fungsi yang memasukan data ke dalam database SQL, karena add berupa tombol maka dapat dipanggil pada index.php dengan cara if(isset($_POST[nama button]) nama fungsi;

2. tombol Hapus berfungsi untuk menghapus data.
Dapat dilakukan dengan cara membuat fungsi delete, namun kali ini menggunakan get untuk mendapatkan lokasi record yang dihapus.
3. tombol Selesai berfungsi untuk mengubah status task menjadi selesai.
Dapat dilakukan dengan cara membuat fungsi selesai, dengan get untuk mendapatkan lokasi record yang diubah.

*bonus*
4. Buat tombol Subject yang berfungsi untuk mengurutkan tampilan data sesuai subject secara ascending.
5. Buat tombol Priority yang berfungsi untuk mengurutkan tampilan data sesuai priority secara ascending.
6. Buat tombol Deadline yang berfungsi untuk mengurutkan tampilan data sesuai deadline secara ascending.
7. Buat tombol Status yang berfungsi untuk mengurutkan tampilan data sesuai status secara ascending.

Jawaban 4-7
Dapat dilakukan dengan cara mengassign "a href" pada tiap judul tabel sehingga link berubah menjadi index.php/(nama kode) = (isi kode).
Lalu gunakan fungsi $_GET[nama kode] untuk mendapatkan isi kode yang nantinya dapat menjadi penentu atribut mana yang ingin diurutkan
  
9. Buat tombol Reset yang berfungsi untuk mengembalikan sesuai urutan awal data.
Dapat dilakukan dengan cara menambahkan "a href reset" yang nantinya akan meredirect ke link awal, yaitu index.php.

------------------
## Hasil menjalankan program

### Initial/Tampilan Awal

![Screenshot 2022-04-06 21 23 52](https://user-images.githubusercontent.com/99664611/161999950-0f8aa328-b0c9-4296-9858-56ae9c082530.png)


### Add
![Screenshot 2022-04-06 21 24 52](https://user-images.githubusercontent.com/99664611/161999976-dda0c9a0-8244-41cb-b33c-8b58e198c3ae.png)
![Screenshot 2022-04-06 21 26 03](https://user-images.githubusercontent.com/99664611/162000047-87c3d4a3-e5de-43a4-ab17-3acb7630eae7.png)



### Delete
![Screenshot 2022-04-06 21 26 05](https://user-images.githubusercontent.com/99664611/162000073-5627e629-3434-4061-a375-554f330e0e7f.png)


### Selesai
![Screenshot 2022-04-06 21 27 10](https://user-images.githubusercontent.com/99664611/162000115-6433a085-ca15-4fb6-b2cd-14e53f9ed6f3.png)



### Sort
![Screenshot 2022-04-06 21 37 38](https://user-images.githubusercontent.com/99664611/162000227-70faeca0-2b03-4fa9-ae9e-0fbec184c670.png)

### Reset  
![Screenshot 2022-04-06 21 37 52](https://user-images.githubusercontent.com/99664611/162000297-c4b1c2a0-10cb-4947-894e-787b62c1940e.png)
