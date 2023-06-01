
## function move_uploaded_file()
pada kesempatan kali ini gw buat sebuah web CRUD dasar lagi nih..

tapi bukan hanya CRUD dasar seperti sebelumnya disini gw menggunakan sebuah fungsi yang namanya move_uploaded_file()

Function move_uploaded_file() digunakan untuk memindahkan file yang diunggah ke tujuan baru (misal folder img yang sudah disediakan)
lebih lanjut baca [disini.](https://www.w3schools.com/php/func_filesystem_move_uploaded_file.asp)

yup ini untuk memindahkan file hasil inputan kita ke dalam file tujuan yang udah kita sediakan. bisa disebut direktori kita gitu ..

btw ini projek gw gunain buat sertivikasi JWD dari kominfo pada tanggal 21 Juli 2022, bikinya cuma satu hari jadi simpel aja 

## Cara Penggunaan

untuk menggunakan move_uploaded_file()
ada babaerapa yang harus kita harus persiapkan dulu nih sobat 

### 1. tambahin enceteyepe pada form kita
```
<form method="POST" enctype="multipart/form-data">
...
</form>
```
### 2. Ada beberapa parameter yang harus kita ambil
```
    $nama_cover = $_FILES['cover']['name'];
    $source = $_FILES['cover']['tmp_name'];
    $folder = './assets/img/';
```
  a. $nama_cover = $_FILES['cover']['name']; ngambil nama file dengan atribut 'name' dari file yang bernama 'cover' (sesuai name yang diberikan pada input) dan disimpan pada variabel yang bernama $nama_cover
  b. $source = $_FILES['cover']['tmp_name']; ngambil lokasi sementara file (temporary) dari file yang bernama 'cover' dan di simpan pada variabel yang bernama $source
  c. $folder = './assets/img/'; lokasi tujuan temen temen mau menyimpan file yang sudah diinput pada contoh ini adalah assets lalu img
  
 ### 3. Eksekusi bintang utama 
 ```
   move_uploaded_file($source, $folder . $nama_cover);
 ```
 ada 3 parameter untuk menggunakan function ini yaitu temporary, folder yang di tuju, nama file.

tinggal temen temen masukin variabel yang udah diambil sebelumnya 
jadi deh..




Interface Utama
![Screenshot 2023-01-28 082723](https://user-images.githubusercontent.com/94840764/215234939-9cabba85-8d6a-4ec3-a184-46178627c5a0.png)
Interface Tambah
![Screenshot 2023-01-28 082840](https://user-images.githubusercontent.com/94840764/215234941-be72622d-cf05-418b-aaf0-e40793e80cff.png)
Interface Lihat dan Edit
![Screenshot 2023-01-28 082920](https://user-images.githubusercontent.com/94840764/215234938-604ca695-0251-4214-a7e0-f31647ae3bb5.png)
