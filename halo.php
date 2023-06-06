<?php

/**
 * Template Name: home
 */
?>
<?php get_header(); ?>

<section id="aturan-layanan">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <p>Persetujuan Tingkat Layanan / Service Level Agreement (SLA) ini hanya berlaku antar PT. Sentra Vidya Utama untuk selanjutnya disebut “SEVIMA” dengan customer PT. Sentra Vidya Utama, untuk selanjutnya disebut “PELANGGAN”. SLA ini disediakan untuk layanan Sevima Platform tanpa adanya biaya tambahan dengan catatan dan ketentuan yang berlaku. Adapun aturan layanan yang digunakan sesuai dengan yang telah dituliskan disini.</p>
        <table class="table-sla">
          <tbody>
            <tr>
              <td><b>Layanan Ditanggung</b></td>
              <td><b>Waktu Jaminan</b></td>
            </tr>
            <tr>
              <td><b>Performa Aplikasi</b></td>
              <td><b>&gt;= 99% per bulan,</b>
                <p></p>
                <p><span style="font-weight: 400;">maksimal waktu downtime (7 jam 12 menit) di luar waktu maintenance sistem yang meliputi update dan upgrade sistem.</span></p>
                <p><span style="font-weight: 400;">Apabila terjadi update dan upgrade sistem, SEVIMA akan memberikan informasi paling lambat H-2 sebelum kegiatan tersebut dilakukan.</span></p>
              </td>
            </tr>
          </tbody>
        </table>
        <p><span style="font-weight: 400;">Sevima memberikan jaminan dan bertanggung jawab kepada performa aplikasi Sevima Platform. Apabila Sevima tidak dapat memenuhi jaminan tersebut, maka Sevima akan memberikan Kompensasi bagi pelanggan yaitu voucher potongan tagihan sebesar 10% untuk pembayaran bulan berikutnya.</span></p>
        <h2><b>Pengertian Istilah</b></h2>
        <p><span style="font-weight: 400;">Istilah berikut berlaku untuk SLA:</span></p>
        <ol style="padding-left:2rem">
          <li style="font-weight: 400;" aria-level="1"><b>Layanan Ditanggung </b><span style="font-weight: 400;">adalah jenis layanan pada aplikasi Sevima Platform yang dijamin oleh SEVIMA.</span></li>
          <li style="font-weight: 400;" aria-level="1"><b>Waktu Jaminan </b><span style="font-weight: 400;">adalah jaminan yang diberikan oleh SEVIMA yang dihitung dalam kurun waktu satu bulan.</span></li>
          <li style="font-weight: 400;" aria-level="1"><b>Kompensasi </b><span style="font-weight: 400;">adalah ganti rugi maksimal yang dapat diberikan oleh SEVIMA atas kegagalan jaminan pada jenis Layanan yang Ditanggung oleh SEVIMA.</span></li>
          <li style="font-weight: 400;" aria-level="1"><b>Layanan <strong>Sevima Platform </strong></b><span style="font-weight: 400;">adalah jenis layanan pada aplikasi Sevima Platform diberikan oleh SEVIMA kepada PELANGGAN.</span><span style="font-weight: 400;"><br>
            </span></li>
          <li style="font-weight: 400;" aria-level="1"><b>Surat Hasil Analisa </b><span style="font-weight: 400;">adalah surat yang berisikan hasil analisis struktur database aplikasi Siakad sebelumnya dan informasi lama waktu integrasi yang akan dijalankan.</span></li>
        </ol>
        <h2><b>Layanan Sevima Platform </b></h2>
        <p>&nbsp;</p>
        <h3><b>1. Instalasi</b></h3>
        <p>Instalasi didefinisikan sebagai proses pekerjaan teknis termasuk konfigurasi akses Web Service, konfigurasi sistem, hingga memastikan sistem dapat diakses melalui internet. Proses instalasi hingga sistem dapat dionlinekan atau diakses <strong>tanpa integrasi data </strong>membutuhkan waktu maksimal 3 (tiga) hari kerja setelah tanda tangan Perjanjian Kerjasama Layanan Sevima Platform dan dipastikan sistem dapat diakses 24/7.</p>
        <h3><b>2. Migrasi</b></h3>
        <p><span style="font-weight: 400;">Migrasi didefinisikan sebagai proses transfer data. Sevima memberikan 3 (tiga) pilihan sumber data yang dapat dipindahkan, yaitu :</span></p><br>
        <p><strong>A. Siakad Data Prefill PDDikti<br>
          </strong><span style="font-weight: 400;">Proses migrasi dengan sumber Data Prefill PDDikti dilakukan maksimal 3 (tiga) hari kerja setelah akun PDDikti diberikan kepada pihak Sevima. Perguruan Tinggi harus menghentikan aktivitas di PDDikti Feeder dan wajib melakukan </span><i><span style="font-weight: 400;">sync </span></i><span style="font-weight: 400;">data ke PDDikti sebelum proses migrasi data dilakukan.</span></p><br>
        <p><strong>B. Data sesuai template Excel Sevima<br>
          </strong>Proses migrasi dengan sumber data template Excel Sevima dilakukan maksimal 7 (Tujuh) hari kerja terhitung sejak dijadwalkannya waktu mulai migrasi oleh tim Teknis Sevima disertai dengan surat pemberitahuan yang akan disampaikan oleh Sevima. Seluruh data yang akan dimigrasi dikirimkan kepada Sevima dengan dilakukan bertahap maksimal 2 (dua) kali.</p><br>
        <p><strong>C. Database aplikasi sebelumnya<br>
          </strong>Proses migrasi dengan sumber data database aplikasi sebelumnya memerlukan waktu tambahan maksimal 7 (tujuh) hari kerja untuk proses analisis struktur tabel database. <span style="font-weight: 400;">Sevima akan memberikan hasil analisis database dan informasi lama waktu migrasi melalui Surat Hasil Analisa yang ditandatangani oleh kedua belah pihak berdasarkan hasil dari analisa struktur database yang telah dilakukan oleh Sevima.</span></p><br>
        <p><span style="font-weight: 400;">Proses analisis database dikenakan biaya sebesar Rp. 3.000.000,- (Tiga Juta Rupiah) untuk 1 (satu) database, biaya ini berlaku kelipatan jika database yang dianalisis lebih dari 1 (satu).</span></p>
        <p><span style="font-weight: 400;">Data awal yang dapat dimigrasikan untuk produk Sevima Platform, meliputi:</span></p>
        <table class="table-sla">
          <tbody>
            <tr>
              <td>
                <ol style="padding:10px; margin-bottom:0px !important">
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Mahasiswa</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Pegawai</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Dosen Wali</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Mata Kuliah</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Kurikulum</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Nilai Pindahan</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Perwalian atau status semester</span></li>
                </ol>
              </td>
              <td>
                <ol style="padding:10px; margin-buttom:0px !important">
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Kelas</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">KRS</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Nilai mahasiswa</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Skripsi</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Yudisium atau Kelulusan</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Tagihan</span></li>
                  <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Tarif tagihan</span></li>
                </ol>
              </td>
            </tr>
          </tbody>
        </table>
        <p>Penyerahan data dapat dilakukan bertahap maksimal 2 (dua) kali dalam kurun waktu tersebut dan harus disertai dengan berita acara serah terima. Jika penyerahan data melebihi waktu yang telah ditentukan, maka pelanggan akan dikenakan biaya sebesar Rp. 3.000.000,- (tiga juta rupiah) dan waktu analisa database akan disesuaikan kembali sesuai dengan jadwal yang akan diberikan oleh tim Sevima.</p><br>
        <p>Setelah proses migrasi data selesai dilakukan, Sevima akan memberikan laporan hasil migrasi data dan pelanggan wajib melakukan validasi. Sevima menjamin perbaikan data tanpa adanya biaya tambahan jika pelanggan menyerahkan kembali hasil validasi maksimal 1 (satu) minggu dari tanggal diberikannya laporan hasil migrasi data.</p><br>
        <p>Setelah dilakukan penyesuaian hasil validasi data, proses serah terima data akan dilakukan Sevima kepada Perguruan Tinggi. Jika selama masa validasi tidak ada sanggahan dari pelanggan, maka proses migrasi dianggap valid tanpa melalui proses serah terima data.</p><br>
        <p>Apabila terdapat permintaan penambahan data selain yang sudah ditentukan, pelanggan akan dikenakan biaya tambahan sebesar Rp 100,- (seratus rupiah) per <em>record.</em></p>
        <h3><b>3. Server Cloud Feeder</b></h3>
        <p>Sevima memberikan fasilitas instalasi server dan menyediakan server berbasis cloud untuk PDDIKTI Neo Feeder bagi pengguna Sevima Platform. Penyediaan server didefinisikan sebagai pelayanan server selama 24 jam di luar dengan manajemen data feeder tersebut.</p>
        <h3><b>4. Backup &amp; Restore</b></h3>
        <p>Sevima memberikan fasilitas perawatan data dengan melakukan backup secara berkala sebanyak 3 (tiga) kali sehari, menyimpan backup data harian selama 90 (sembilan puluh) hari ke belakang dan akan menghapusnya secara otomatis apabila data backup lebih dari 90 (sembilan puluh) hari kalender.</p><br>
        <p><span style="font-weight: 400;">Database hasil proses backup harian disimpan pada </span><i><span style="font-weight: 400;">hard disk</span></i><span style="font-weight: 400;"> server Sevima Platform yang berbeda dengan server klien dan hanya dapat diakses oleh Sevima.</span></p><br>

        <p><span style="font-weight: 400;">Sevima memberikan fasilitas restoring data jika terjadi kerusakan server yang diakibatkan oleh kerusakan </span><i><span style="font-weight: 400;">hard disk</span></i><span style="font-weight: 400;"> atau </span><i><span style="font-weight: 400;">operating system</span></i><span style="font-weight: 400;"> sehingga mengakibatkan kerusakan data. Sevima akan melakukan restoring data terbaru yaitu data backup terdekat. Waktu yang dibutuhkan untuk melakukan restore data maksimal 4 (empat) jam.</span></p>


        <h3><b>5.<i> Life</i></b><b>Time </b><b><i>Update</i></b></h3>
        <p><span style="font-weight: 400;">Pembaruan aplikasi / Update meliputi keamanan sistem, perbaikan performa, perbaikan </span><i><span style="font-weight: 400;">bug</span></i><span style="font-weight: 400;">, penambahan fitur baru serta mengakomodasi kebijakan yang berubah (bukan dari internal Perguruan Tinggi) atas dasar Peratuan Pemerintah (Permen) yang dikeluarkan Menteri Pendidikan dan Kebudayaan (Mendikbud). Sevima akan memberikan informasi maksimal H-1 sebelum dilakukan proses </span><i><span style="font-weight: 400;">update system</span></i><span style="font-weight: 400;">. Sevima memberikan fasilitas </span><i><span style="font-weight: 400;">upgrade system </span></i><span style="font-weight: 400;">ke versi yang terbaru sesuai dengan kesepakatan yang telah disetujui oleh Pelanggan. Pelanggan wajib menerima dan mengikuti perubahan pada aplikasi yang dilakukan oleh Sevima yang merupakan pengembangan untuk kebutuhan sistem internal atau eksternal dan/atau perubahan yang mengakomodasi kebijakan Peraturan Pemerintah.</span></p>
        <h3><b>6. Tahapan Persiapan Implementasi</b></h3>
        <p><span style="font-weight: 400;">Sevima berkomitmen untuk memberikan panduan persiapan implementasi dan kegiatan pelatihan demi kelancaran implementasi aplikasi Sevima Platform dengan tahapan persiapan implementasi sebagai berikut :</span></p><br>
        <p><strong>A. Pembuatan Media Koordinasi<br>
          </strong><span style="font-weight: 400;">Sevima menyediakan grup koordinasi dengan menggunakan fasilitas aplikasi Whatsapp sebagai media koordinasi awal persiapan implementasi sistem. Grup&nbsp; ini bersifat sementara waktu dan ditentukan masa kadaluarsanya saat koordinasi awal telah dilakukan. Jika telah memasuki masa kadaluarsa, untuk berikutnya support penggunaan aplikasi menggunakan media online Live chat.</span></p><br>
        <p><strong>B. Setting Up Aplikasi<br>
          </strong><span style="font-weight: 400;">Sevima akan mengaktifkan aplikasi menggunakan domain fasilitas dari Sevima. Domain tersebut akan selalu aktif dan dapat digunakan untuk mengakses sistem. Jika Perguruan Tinggi telah memiliki domain sendiri, maka dapat dibuatkan sub domain untuk mengakses ke aplikasi dengan detail konfigurasi yang diberikan oleh tim Sevima.</span></p><br>
        <p><strong>C. Pelaksanaan Survei dan Technical Meeting<br>
          </strong><span style="font-weight: 400;">Sevima akan melakukan koordinasi bersama tim Perguruan Tinggi untuk membahas detail kendala yang dialami, penentuan </span><i><span style="font-weight: 400;">action plan</span></i><span style="font-weight: 400;"> serta menentukan kesepakatan </span><i><span style="font-weight: 400;">timeline</span></i><span style="font-weight: 400;"> kegiatan selama masa persiapan implementasi. Selain itu, juga akan dilakukan penentuan tim implementasi dari Perguruan Tinggi. Laporan implementasi aplikasi merupakan laporan hasil capaian berdasarkan kegiatan yang dilakukan dan atau data yang ada pada aplikasi yang disepakati oleh Sevima dan Perguruan Tinggi.&nbsp;</span></p><br>
        <p><strong>D. Pemindahan Data Awal<br>
          </strong><span style="font-weight: 400;">Sevima menjamin aplikasi dapat digunakan menggunakan data awal yang telah disepakati. Pemindahan data mengacu pada poin no.2 (Dua) pada SLA ini.</span></p><br>
        <p><strong>E. Pelatihan<br>
          </strong><span style="font-weight: 400;">Sevima memberikan pelatihan penggunaan aplikasi kepada semua pelanggan untuk menjamin pengguna dapat mengoperasikan aplikasi sebelum implementasi, dengan ketentuan sebagai berikut :</span></p>
        <ol style="padding-left: 2rem;">
          <li style="font-weight: 400;" aria-level="3"><span style="font-weight: 400;">Durasi pelatihan dan jumlah sesi yang akan didapatkan berbeda untuk tiap-tiap paket langganan sesuai yang tercantum pada pada kontrak kerja.</span></li>
          <li style="font-weight: 400;" aria-level="3"><span style="font-weight: 400;">Waktu dan peserta pelatihan ditetapkan sesuai dengan jadwal yang telah disepakati oleh kedua belah pihak dan tercantum pada surat atau undangan resmi yang dikirimkan oleh Sevima kepada Perguruan Tinggi.</span></li>
          <li style="font-weight: 400;" aria-level="3"><span style="font-weight: 400;">Sevima memberikan kesempatan penjadwalan ulang pelatihan maksimal H-2 di hari kerja dari jadwal yang sudah disepakati sebelumnya.</span></li>
          <li style="font-weight: 400;" aria-level="3"><span style="font-weight: 400;">Apabila peserta pelatihan tidak hadir maka sesi pelatihan dinyatakan hangus.</span></li>
        </ol>
        <p>&nbsp;</p>
        <p><b>7. Support</b></p>
        <p><span style="font-weight: 400;">Sevima menjamin memberikan pelayanan pengaduan berkaitan dengan kendala- kendala yang dialami pelanggan selama menggunakan aplikasi, seperti:</span></p><br>
        <p><i><span style="font-weight: 400;">A. Bug system</span></i></p><br>
        <p><i><span style="font-weight: 400;">B. Error system</span></i></p><br>
        <p><span style="font-weight: 400;">C. Alamat Aplikasi (subdomain Sevima Platform dan Akreditasi Cloud) yang tidak dapat diakses disebabkan oleh gangguan teknis.</span></p><br>
        <p><span style="font-weight: 400;">Segala bentuk aduan dapat dilaporkan melalui :</span></p>
        <p><i><span style="font-weight: 400;">a. Online helpdesk</span></i><span style="font-weight: 400;"> yang sudah tersedia pada Layanan Sevima Platform .&nbsp;</span></p><br>
        <p><span style="font-weight: 400;">Layanan penggunaan aplikasi tersebut diperuntukkan kepada manajemen perguruan tinggi dengan waktu layanan sebagai berikut:</span></p><br>
        <ul style="padding-left: 2rem ;">
          <li style="font-weight: 400;" aria-level="2"><span style="font-weight: 400;">Senin – Jumat pukul 07.30 WIB – 21.00 WIB, </span>Sabtu – Minggu pukul 08.30 WIB – 16.30 WIB</li>
          <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Waktu di atas tidak berlaku jika libur nasional atau libur hari raya. Untuk aduan dengan kasus yang memerlukan pemeriksaan lanjutan akan dibuatkan tiket oleh tim support Sevima. Perkembangan atau penyelesaian tiket akan disampaikan melalui email ke alamat email yang telah yang telah diisikan oleh pengguna.</span></li>
        </ul>
        <h2><b>Permintaan Klaim</b></h2>
        <p>Dalam rangka memenuhi persyaratan untuk melakukan klaim terhadap kegagalan pemenuhan SLA terkait performa aplikasi, pelanggan harus tidak memiliki tunggakan tagihan pada saat masalah terjadi dan masalah yang diklaim murni karena kegagalan Sevima dalam memberikan layanan. Pelanggan bertanggung jawab dalam mendokumentasikan dan menyerahkan semua bukti (<em>email, screenshot, chat</em>, dll) dari masalah yang terjadi.</p><br>
        <p><span style="font-weight: 400;">Setiap permintaan klaim harus diterima oleh Sevima maksimal dalam waktu 5 (lima) hari kerja setelah terjadinya permasalahan tersebut dan akan direspon dengan mengirimkan email kurang dari 3 (tiga) hari kerja. Pengajuan klaim hanya dapat diajukan oleh admin perguruan tinggi dengan diketahui pimpinan dan harus divalidasi oleh Sevima menggunakan format standar dari Sevima. Jika tidak disetujui dalam pengajuan permintaan klaim akan mengakibatkan hilangnya klaim yang diajukan. Klaim dikirimkan melalui email ditujukan ke alamat</span><span style="font-weight: 400;">&nbsp;</span><a href="mailto:finance@sevima.co.id"><span style="font-weight: 400;">finance@sevima.co.id</span></a>.</p><br>
        <p>Setiap klaim akan dimasukkan ke dalam tagihan pelanggan dalam waktu 1 (satu) siklus penagihan setelah Sevima menyetujui permintaan klaim pelanggan dengan mengirimkan jawaban atas klaim yang diajukan pelanggan.</p>
        <h2><b>Batas Maksimal Permintaan Klaim</b></h2>
        <p>Tanpa mengabaikan apapun dalam SLA ini, <strong>klaim yang sama </strong>tidak boleh tumpang tindih. Jika dalam 1 (satu) bulan ada lebih dari 1 (satu) klaim yang sama, maka hanya 1 (satu) klaim yang diakui. Untuk klaim yang berbeda maka klaim akan diakumulasikan. Sevima akan menjadi satu-satunya arbiter dalam menentukan persetujuan permintaan klaim.</p>
        <h2><b>Pengecualian</b></h2>
        <p><span style="font-weight: 400;">Sevima tidak bertanggung jawab sehubungan dengan adanya kegagalan atau kekurangan dari layanan Sevima Platform yang disebabkan oleh:</span></p>
        <ol style="padding-left: 2rem;">
          <li>Kondisi di luar kendali kami yang diakibatkan langsung atau tidak langsung dari tindakan badan pemerintah, perang, terorisme, sabotase, pemberontakan, embargo, mogok atau gangguan aktivitas buruh lainya, gangguan transportasi, gangguan telekomunikasi atau layanan pihak ketiga bencana alam atau bencana, kebakaran, banjir, kekurangan daya listrik, gangguan dalam kemampuan untuk mendapatkan perangkat lunak dan perangkat keras dari pihak ketiga, atau keadaan lain di luar kendali kami untuk menyediakan SLA ini.</li>
          <li>Kegagalan data atau sirkuit telekomunikasi yang disebabkan oleh jaringan yang rusak oleh penyedia layanan telekomunikasi.</li>
          <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Keamanan Jaringan atau Internet pelanggan termasuk virus, penolakan layanan atau penyalahgunaan layanan baik yang disetujui/tidak disetujui oleh pengguna.</span></li>
          <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">DNS dan masalah email di luar kendali Sevima, kegagalan/kerusakan peralatan merupakan tanggung jawab pelanggan sendiri.</span></li>
          <li style="font-weight: 400;" aria-level="1"><span style="font-weight: 400;">Tindakan kelalaian pelanggan atau orang lain yang terkait baik disetujui/tidak disetujui oleh pelanggan, setiap kelalaian, kesalahan yang disengaja, pelanggaran dari syarat dan ketentuan yang diberikan Sevima.</span></li>
        </ol>
        <p>&nbsp;</p>
        <p style="text-align: right;"><b>Surabaya, 23 Mei 2023</b></p>
        <p style="text-align: right;"><strong>PT Sentra Vidya Utama</strong></p>
      </div>
    </div>
  </div>
</section>


<?php
get_footer();
?>