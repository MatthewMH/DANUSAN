![Danusan](https://user-images.githubusercontent.com/79049671/120742295-d0f0cf00-c520-11eb-92e5-3f50aad9ddd9.png)


Anggota Kelompok 16:
1. Matthew Martianus Henry
2. Lee Roy Akbar
3. Amira Nabila Rakhmat
4. Ainun Fadhilah Az Zahida


# Latar Belakang

   Fundraising merupakan proses mempengaruhi masyarakat baik perorangan atau lembaga agar menyalurkan dana, sumber daya non-dana, simpati atau dukungan kepada komunitas. Di perguruan tinggi, banyak mahasiswa yang mulai aktif dalam kegiatan kepanitiaan atau organisasi. Kepanitiaan maupun organisasi di kampus akan mengadakan suatu kegiatan yang terkadang dananya tidak tersedia atau tidak mencukupi. Pemenuhan kebutuhan dana tersebut sering kali dilakukan dengan berjualan makanan kecil (danusan).    
    Pada masyarakat, penggalangan dana biasanya dilakukan untuk kegiatan tertentu. Penggalangan dana di masyarakat pada umumnya lebih kepada sumbangan sukarela, namun tak sedikit pula penggalangan dana untuk acara umum yang biasanya dilakukan dengan danusan. Panitia acara sekolah yang hendak mengadakan suatu kegiatan yang membutuhkan dana, misal perpisahan kelas, outbond, dan lain lain pada umumnya akan melakukan penggalangan dana dengan berjualan makanan kecil pada teman sebayanya. Selain itu, penggalangan dana juga dilakukan untuk memenuhi kebutuhan hidup. Tak sedikit pula orang yang berjualan makanan kecil di kantornya sebagai pekerjaan sampingan.
    Namun, banyak kepanitiaan, organisasi, maupun usaha perorangan yang kurang informasi mengenai distributor makanan danusan baik dari segi harga maupun lokasi distributor. Masalah tersebut yang nantinya akan terselesaikan dengan adanya web Danusan. Pada web ini, baik anggota organisasi, kepanitiaan, usaha sampingan perorangan, dan sebagainya akan dengan mudah menemukan distributor makanan danusan di sekitarnya. 


# Tujuan

1. Mempermudah kontak antara pemilik toko makanan danusan dengan seseorang yang hendak berjualan danusan.
2. Mempermudah seseorang yang hendak danusan dalam mencari toko makanan kecil beserta harga dan lokasi tokonya.
3. Mempermudah pemilik toko makanan danusan untuk mendapatkan pelanggan.



# User Analysis
## User Profil
Target dari aplikasi kita adalah penggalang dana dari berbagai kalangan dan tujuan namun kebingungan mencari toko yang menyediakan berbagai macam makanan kecil untuk dijual. 

## User Story
1. Sebagai seseorang yang ingin danusan, agar dapat menggunakan layanan yang ditawarkan pada web, saya dapat masuk ke web dari landing page dengan menekan tombol Login. Apabila saya belum memiliki akun, saya dapat mendaftarkan diri melalui tombol Sign Up pada landing page. 
2. Sebagai seseorang yang ingin danusan, agar dapat mengetahui lokasi toko yang menjual makanan danusan, saya dapat masuk ke halaman Pilihan Toko untuk melihat toko di sekitar saya yang menjual makanan danusan serta lokasi pengambilan makanan yang saya pesan.
3. Sebagai seseorang yang ingin danusan, agar dapat mengetahui perkiraan modal yang dibutuhkan, saya dapat melihat harga yang tertera pada gambar makanan di masing masing halaman Toko. 
4. Sebagai seseorang yang ingin danusan, agar dapat mengetahui lebih detail mengenai makanan danusan yang akan dibeli, saya dapat mengontak sang pemilik toko untuk mengetahui lebih detail mengenai makanan danusan tersebut.
5. Sebagai seseorang yang ingin danusan, agar dapat mengetahui riwayat transaksi yang telah dilakukan, saya dapat masuk ke halaman Order. 
6. Sebagai seseorang yang ingin danusan, agar dapat menjadikan salah satu toko sebagai langganan, saya dapat menyimpan toko tersebut pada menu Simpanan di halaman Pilihan Toko. 
7. Sebagai seseorang yang ingin danusan atau penjual, agar dapat memastikan akun yang saya miliki tidak dibajak orang lain, saya dapat log out setelah selesai dengan keperluan saya. 



# Lingkungan Pengembangan
1. Hardware
    - Processor: Intel(R) Core(TM) i3-4005U CPU @ 1.70GHz
    - Memory : 4 GB DDR4
    - Storage: 512 GB HDD

2. Software
    - Text Editor : Sublime Text 3 
    - Operating System : Ubuntu 20.04.2.0 LTS (Focal Fossa)
    - Database : PostgreSQL
    - Framework : Laravel

3. More
    - Collaboration Platform: Github, Trello
    - Programming Language : PHP
    - Visual Editing: Figma
    
    
    
# Hasil dan Pembahasan
## Arsitektur Aplikasi
![Arsitektur Aplikasi](https://user-images.githubusercontent.com/63547189/121708574-e9a14c00-cb01-11eb-98a4-9fdbedcd9c9d.png)

## ERD Database
![ERD Database DANUSAN](https://user-images.githubusercontent.com/63547189/121847412-bda8e500-cd12-11eb-8611-21d17e53bcdc.png)

## Class Diagram
![class-diagram](https://user-images.githubusercontent.com/79038435/121805239-93a0e580-cc74-11eb-9243-cdb5390b679b.png)

## Use Case Diagram
![Use Case Diagram DANUSAN](https://user-images.githubusercontent.com/63547189/121763744-98787300-cb68-11eb-931d-3bc12133e4fa.png)

### Use Case Description : Proses Memasukkan Akun
<img width="349" alt="use case loginnnn" src="https://user-images.githubusercontent.com/79049671/121843641-dc0be200-cd0c-11eb-9901-8ff209ac54be.png">

### Use Case Description : Proses Pembelian Danusan
![use case- pembelian](https://user-images.githubusercontent.com/79038435/121857107-72e19a00-cd1f-11eb-8b44-99f6dc8d6f07.png)


### Use Case Description : Proses Melihat Riwayat Transaksi
![diagram-Page-6 (1)](https://user-images.githubusercontent.com/71091549/121614343-a6ef5d80-ca88-11eb-9aae-386c4ef5b7d2.png)

### Use Case Description : Proses Menyimpan Toko
![User Case Description](https://user-images.githubusercontent.com/71091549/121340682-10b51d80-c94a-11eb-96cc-10580bbd0511.png)

### Use Case Description : Proses Sunting Profil
![Use Case Description](https://user-images.githubusercontent.com/63547189/121527487-a8873a00-ca24-11eb-940c-9cf4b1c5ae2a.png)

## Activity Diagram
### Acitivy Diagram : Memasukkan Akun
![activitydiagram (2)](https://user-images.githubusercontent.com/79049671/121781416-cbede880-cbce-11eb-91bf-1a43d6f78952.png)

### Activity Diagram : Pembelian Danusan
![Basdat Tugas Akhir-Activity Diagram Pembelian](https://user-images.githubusercontent.com/79038435/121195507-dd1aba80-c899-11eb-9dfe-831d9a2850f1.png)

### Activity Diagram : Melihat Riwayat Transaksi
![diagram-Page-1 (4)](https://user-images.githubusercontent.com/71091549/120912407-05978e80-c6b9-11eb-9b3f-559631aaadb3.png)

### Activity Diagram : Menyimpan Toko
![diagram-Page-4 (1)](https://user-images.githubusercontent.com/71091549/120912606-da15a380-c6ba-11eb-820b-e6b79ed3217d.png)

### Activity Diagram : Sunting Profil
![image](https://user-images.githubusercontent.com/63547189/121526163-5691e480-ca23-11eb-96a7-865f3d456792.png)

## Test Case
### Positive Case
| No | Scenario | Pre-requisites | Steps | Expected Result | Actual Result | Status |  
| -- | -------- | -------------- | ----- | --------------- | ------------- | ------ |
| 1. | User login dengan akun yang valid | User mengakses web Danusan | User mengakses halaman login, masukkan email dan password yang telah terdaftar, lalu klik Login | Login berhasil dan user diarahkan ke halaman home | As expected | Pass :white_check_mark: |
| 2. | User mendaftarkan email, username, nomor telepon, dan password yang valid saat pendaftaran | User mengakses web Danusan | User mengakses halaman sign up lalu masukkan email, username, nomor telepon, dan password lalu klik sign up | Sign up berhasil dan user diarahkan ke menu login | As expected | Pass :white_check_mark: |
| 3. | User dapat membeli danusan dengan memilih toko, kemudian memilih item danusan dengan jumlah kelipatan 10, lalu mengkonfirmasi pembelian User telah login | User mengakses halaman toko, klik button add to cart untuk memilih item danusan, dan klik button buy jika telah menentukan item dan jumlahnya | Berhasil memproses pembelian | As expected | Pass :white_check_mark:|
| 4. | User dapat melihat riwayat transaksi | User telah login dan telah melakukan pembelian | Pergi ke menu history untuk menampilkan daftar pemesanan | Berhasil menampilkan daftar pemesanan | As expected | Pass :white_check_mark: |
| 5. | User dapat menyimpan toko | User telah login | Pergi ke toko yang ingin di simpan, klik tombol save yang terdapat pada toko | Berhasil menampilkan toko yang telah disimpan | As expected | Pass :white_check_mark: |
| 6. | User dapat menghapus toko dari Simpanan | User telah login dan telah menyimpan setidaknya 1 toko | User mengakses halaman home, memilih salah satu toko yang hendak dihapus dari simpanan, lalu klik tombol delete.  Proses ini hanya dapat dilakukan apabila toko telah disimpan sebelumnya | Berhasil menghapus toko yang telah disimpan dari list simpanan pada halaman Saved| As expected | Pass :white_check_mark: |
| 7. | User dapat melakukan update foto profil dengan menambahkan file berekstensi jpg, jpeg, dan png | User telah login dan telah berada di halaman Sunting Profil | User mengakses halaman home, lalu mengetik tombol edit disebelah username yang tertera pada kiri atas. | Berhasil menambahkan foto profil baru | As expected | Pass :white_check_mark: | 
| 8. | User dapat menggunakan fitur search untuk mencari toko yang ada | User telah login dan berada di halaman home | User mengakses halaman home, lalu mengetikkan nama toko yang diinginkan pada search bar | Berhasil menunjukkan toko yang dimaksud | As expected | Pass ✔ |

## Fitur Utama yang Dikembangkan
| Fitur                  | Fungsi                                                                                         |
| ---------------------- | ---------------------------------------------------------------------------------------------- |
| Fitur Pembelian  Makanan | User dapat memilih toko yang diinginkan dan akan diarahkan ke halaman toko.<br>User juga dapat memilih item danusan pada halaman toko dan menentukan jumlah item<br>danusan yang ingin dibeli  untuk kemudian ditampilkan total harga pembelian|                             
| Fitur Search Toko | User dapat mencari toko berdasarkan keyword kemudian diarahkan ke halaman hasil pencarian<br>dan ditampilkan toko yang dicari atau hasil tidak ditemukan |     
| Fitur Simpanan Toko | User dapat menyimpan toko, menghapus simpanan, dan sewaktu-waktu dapat melihat toko yang<br>disimpan |                
| Fitur Riwayat Transaksi | User dapat melihat riwayat user dalam melakukan transaksi pembelian dan sistem dapat mengupdate<br>status dari transaksi yang dikakukan oleh user |
| Fitur Input Toko | Admin dapat memasukkan toko dan daftar item danusan toko beserta nomor telepon untuk ditampilkan kedalam website |

## Fitur Tambahan
| Fitur                  | Fungsi                                                                                         |
| ---------------------- | ---------------------------------------------------------------------------------------------- |
| Fitur Sign Up          | User dapat membuat aku dengan mendaftarkan username, password, dan nomor telepon |
| Fitur Login            | User dapat masuk ke dalam web aplikasi dan melakukan transaksi dengan mengisi username dan password jika sudah mendaftarkan akun |       
| Fitur Edit Profile     | User dapat mengupload foto profil diri ke dalam website dan mengeditnya |
                                                                                               
## Hasil Implementasi
**1. Landing Page**

![Screenshot from 2021-06-14 13-38-11](https://user-images.githubusercontent.com/63547189/121853481-2d22d280-cd1b-11eb-85ef-0594450d2654.png)

**2. Sign Up**

![Screenshot from 2021-06-14 13-38-24](https://user-images.githubusercontent.com/63547189/121853532-3a3fc180-cd1b-11eb-9f87-c89c8a294349.png)

**3. Login**

![Screenshot from 2021-06-14 13-38-29](https://user-images.githubusercontent.com/63547189/121853565-4592ed00-cd1b-11eb-9a85-77ffa0bf7a9f.png)

**4. Edit Profile**

![Screenshot from 2021-06-14 14-09-32](https://user-images.githubusercontent.com/63547189/121853623-53e10900-cd1b-11eb-8709-30e217b2ed52.png)

**5. Tampilan Toko**

![Screenshot from 2021-06-14 14-26-12](https://user-images.githubusercontent.com/63547189/121854731-bedf0f80-cd1c-11eb-88c4-7490613ff8f9.png)

**6. Proses Pembelian**

![Screenshot from 2021-06-14 14-26-23](https://user-images.githubusercontent.com/63547189/121854791-d3230c80-cd1c-11eb-98e0-b396e2ab36ea.png)

**7. Konfirmasi Pembelian**

![Screenshot from 2021-06-14 14-26-31](https://user-images.githubusercontent.com/63547189/121854853-e3d38280-cd1c-11eb-925a-89282f4ddc12.png)

**8. Riwayat Transaksi**

![Screenshot from 2021-06-14 14-26-38](https://user-images.githubusercontent.com/63547189/121854921-f51c8f00-cd1c-11eb-879b-fbaaa79c02dc.png)

**9. Menu Saved**

![Screenshot from 2021-06-14 14-35-30](https://user-images.githubusercontent.com/63547189/121855691-d79bf500-cd1d-11eb-95ec-b4c5c2328258.png)

**10. Hapus Toko (Asumsi Toko Telah Tersimpan)**

![Screenshot from 2021-06-14 14-27-05](https://user-images.githubusercontent.com/63547189/121855026-14b3b780-cd1d-11eb-820c-41682cec1c62.png)





