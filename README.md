# Lab7Web
untuk memenuhi tugas pemrograman web2
https://github.com/Dian-collab/Lab7Web/blob/579130e61929186425c25cd95de7a2639c6cd072/Screenshot%202025-03-17%20204725.png
Halaman ini menampilkan bahwa instalasi CodeIgniter sudah berhasil dan server web http://localhost/lab_11_php_ci4/public/ dapat menjalankan aplikasi CodeIgniter.
https://github.com/Dian-collab/Lab7Web/blob/8716d16e024977afff0324a39804f8a5879ac64f/Screenshot%202025-03-17%20204948.png
pada saat melakukan perinta php spark dapat dijalankan dan mengenali instalasi CodeIgniter
https://github.com/Dian-collab/Lab7Web/blob/34dcc5a4ea8f9d9048b7551d8d6ca19dbc6cbd5a/Screenshot%202025-03-17%20205012.png
Penggunaan CLI ini sangat membantu dalam otomatisasi tugas-tugas umum dan pengelolaan proyek CodeIgniter.
https://github.com/Dian-collab/Lab7Web/blob/4c7a7382d8e9adadb710578a5a264adeec186305/Screenshot%202025-03-17%20205839.png
Gambar ini memberikan informasi penting tentang konfigurasi route dalam aplikasi CodeIgniter 4 
https://github.com/Dian-collab/Lab7Web/blob/99f6b225811a13039e6705b26dbeb4a1ac0b32f9/Screenshot%202025-03-31%20221957.png
Kehadiran pesan ini menunjukkan bahwa ada sesuatu yang salah dengan aplikasi dan tidak dapat menyelesaikan permintaan saat ini.
https://github.com/Dian-collab/Lab7Web/blob/23bbc5f63cb1638a85a452799a7dcf621c3654c4/Screenshot%202025-03-31%20234515.png
 Ini adalah tampilan sederhana dari sebuah halaman web,halaman web yang diakses melalui server lokal (localhost) pada port 8080, dan halaman ini menampilkan konten atau judul "Ini Halaman About".
 https://github.com/Dian-collab/Lab7Web/blob/03274d6716f309e11bbfe36c00183abe86afd61a/Screenshot%202025-03-31%20235121.png
 CodeIgniter secara bawaan memiliki fitur yang disebut "Auto Routing". Fitur ini memungkinkan untuk mengakses method (fungsi) di dalam Controller tanpa harus mendefinisikannya secara eksplisit di dalam file konfigurasi routing.Jika nilai variabelnya true maka fitur AutoRouting aktif,dan jika nilai variabelnya false maka fitur AutoRouting di nonaktifkan dengan begitu kita harus mendefinisikan setiap route secara lebih eksplisit. Pada gambar diatas,meskipun mengubah nilai variabel menjadi False,kita tetap bisa mengakses halaman karna route sudah dijelaskan secara eksplisit.
 https://github.com/Dian-collab/Lab7Web/blob/6e1c9493bdebb54378768b7f91e545326708a99a/Screenshot%202025-03-31%20235228.png
 Gambar ini adalah contoh dasar bagaimana Controller dalam framework CodeIgniter 4 menangani permintaan web dan menghasilkan respons yang ditampilkan kepada pengguna di browser.Hal ini mengilustrasikan konsep dasar Model-View-Controller (MVC) di mana Controller bertindak sebagai perantara antara model (data) dan view (tampilan), meskipun dalam contoh sederhana ini, Controller langsung menghasilkan output tanpa melibatkan model atau view terpisah.
 https://github.com/Dian-collab/Lab7Web/blob/34fdbbb58bc0f792f80dd304ac5aaae8c44922b4/Screenshot%202025-03-31%20235306.png
 Gambar ini menunjukkan contoh lain dari bagaimana Controller dalam CodeIgniter 4 menangani permintaan web. Kali ini, URL /about telah dipetakan ke method about() di dalam Controller Page, dan output dari method tersebut adalah teks "Ini Halaman About" yang terlihat di browser. Ini semakin memperkuat pemahaman tentang bagaimana URL terhubung ke logika aplikasi melalui Controller dalam framework MVC.
 https://github.com/Dian-collab/Lab7Web/blob/30d8b458196acc4827c4bef0a4e8b27896e8f351/Screenshot%202025-04-01%20001820.png
 Gambar ini menunjukkan evolusi dalam cara aplikasi CodeIgniter menghasilkan output untuk halaman /about. Alih-alih menggunakan echo langsung dari Controller, aplikasi sekarang menggunakan mekanisme View untuk memisahkan logika aplikasi (di Controller) dari presentasi (di View). Ini adalah praktik terbaik dalam pengembangan web karena meningkatkan organisasi kode, pemeliharaan, dan fleksibilitas desain. Terdapat juga kesalahan ketik ("abot" dan "abaut" seharusnya "about") dalam data yang dikirimkan dari Controller ke View.
 https://github.com/Dian-collab/Lab7Web/blob/43e897b417d6d401630a175ff150cf0dcae0d887/Screenshot%202025-04-01%20014530.png
 Gambar ini adalah contoh yang lebih lengkap dari arsitektur MVC dalam CodeIgniter. Controller (page.php) berinteraksi dengan Model (meskipun tidak terlihat di sini, Model akan bertanggung jawab atas pengambilan data yang lebih kompleks), mengirimkan data ke View (about.php, header.php, footer.php), dan View menggunakan data tersebut serta styling dari CSS (style.css) untuk menghasilkan tampilan halaman web yang interaktif dan menarik bagi pengguna. Adanya layout umum (header dan footer) menunjukkan praktik yang baik dalam membangun antarmuka web yang konsisten.



