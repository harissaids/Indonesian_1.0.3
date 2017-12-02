<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: bbcode.php 2017 harissaids@gmail.com
 * @copyright (c) 2017 Harissaid Alewni http://www.triutama.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *  
 *
 */


/**
 * DO NOT CHANGE
 */
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

$lang = array_merge($lang, array(
	'HELP_BBCODE_BLOCK_IMAGES'	=> 'Menampilkan Gambar dalam posting',
	'HELP_BBCODE_BLOCK_INTRO'	=> 'Pendahuluan',
	'HELP_BBCODE_BLOCK_LINKS'	=> 'Membuat Tautan',
	'HELP_BBCODE_BLOCK_LISTS'	=> 'Membuat Daftar',
	'HELP_BBCODE_BLOCK_OTHERS'	=> 'Lainnya',
	'HELP_BBCODE_BLOCK_QUOTES'	=> 'Mengutip dan Output Text dengan Lebar tertentu',
	'HELP_BBCODE_BLOCK_TEXT'	=> 'Format Text',

	'HELP_BBCODE_IMAGES_ATTACHMENT_ANSWER'	=> 'Lampiran sekarang bisa ditempatkan di semua bagian pada post dengan menggunakan <strong>[attachment=][/attachment]</strong> BBCode yang baru, jika fungsi lampiran tersebut telah diaktifkan oleh administrator halaman dan jika anda diberikan perizinan yang sesuai untuk membuat lampiran. Di dalam layar posting ada kotak drop-down (masing-masing tombol) untuk menempatkan attachment inline..',
	'HELP_BBCODE_IMAGES_ATTACHMENT_QUESTION'	=> 'Menambahkan lampiran pada post',

	'HELP_BBCODE_IMAGES_BASIC_ANSWER'	=> 'BBCode phpBB memasukkan sebuah tag untuk menyertakan gambar dalam post anda. Dua hal yang paling penting yang perlu diingat untuk menggunakan tag ini adalah: banyak pengguna tidak menyukai terlalu banyak gambar yang ditampilkan di post dan kedua gambar yang anda tampilkan sudah tersedia terlebih dahulu di internet (sebagai contohnya gambar terebut hanya muncul pada kumputer anda, kecuali anda menjalankan sebuah webserver!). Untuk menampilkan sebuah gambar anda harus mengapit URL gambar yang ditujukan dengan tag <strong>[img][/img]</strong>. Sebagai contohnya:<br /><br /><strong>[img]</strong>https://www.phpbb.com/theme/images/logos/blue/160x52.png<strong>[/img]</strong><br /><br />Sebagai catatan, pada bagian URL diatas anda bisa membungkus gambar dengan tag<strong>[url][/url]</strong> jika anda ingin, e.g.<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/img][/url]</strong><br /><br />akan menghasilkan:<br /><br /><a href="http://www.google.com/"><img src="http://www.google.com/intl/en_ALL/images/logo.gif" alt="" /></a>',
	'HELP_BBCODE_IMAGES_BASIC_QUESTION'	=> 'Menambahkan sebuah gambar ke post',

	'HELP_BBCODE_INTRO_BBCODE_ANSWER'	=> 'BBCode adalah implementasi spesial dari HTML. Pada dasarnya, apakah anda bisa/tidak bisa menggunakan BBCode pada post anda dalam forum ditentukan oleh administrator. Sebagai tambahan, anda bisa menonaktifkan BBCode pada setiap halaman post melalui halaman posting itu sendiri. BBCode itu sendiri mempunyai kesamaan dengan HTML, tags ditutup dengan tanda kurung [ dan ] ketimbang &lt; dan &gt; dan memberikan kontrol yang besar melalui apa dan bagaimana ditampilkan. Namun tergantung pada template yang anda gunakan, anda bisa menemukan penambahan BBCode untuk post anda lebih mudah melalui sebuak interface yang bisa diklik di atas area pesan pada halaman posting. Dengan itu juga anda mungkin menemukan panduan berikutnya yang berguna.',
	'HELP_BBCODE_INTRO_BBCODE_QUESTION'	=> 'Apa yang dimaksud dengan BBCode?',

	'HELP_BBCODE_LINKS_BASIC_ANSWER'	=> 'BBCode phpBB menyediakan sejumlah cara untuk membuat URI (Uniform Resource Indicators) yang lebih dikenal dengan URL.<ul><li>Yang pertama adalah penggunaan tag <strong>[url=][/url]</strong>, apapun yang anda letakkan setelah tanda = akan menyebabkan isi tag tersebut berubah menjadi sebuah URL. Sebagi contohnya untuk link ke phpBB.com anda bisa gunakan:<br /><br /><strong>[url=http://www.phpbb.com/]</strong>Visit phpBB!<strong>[/url]</strong><br /><br />Ini akan menghasilkan link berikut ini, <a href="http://www.phpbb.com/">Kunjungi phpBB!</a> Mohon diperhatikan bahwa link terbuka pada jendela yang sama atau jendela baru tergantung pada pengaturan browser pengguna.</li><li>Jika anda ingin URL tersebut ditampilkan sebagai link anda dapat melakukannya dengan mudah menggunakan:<br /><br /><strong>[url]</strong>http://www.phpbb.com/<strong>[/url]</strong><br /><br />Ini akan menghasilkan link berikut ini, <a href="http://www.phpbb.com/">http://www.phpbb.com/</a></li><li>Selain itu, phpBB memiliki sesuatu fitur yang disebut <i>Magic Links</i>, ini akan mengubah secara sintaktis URL menjadi sebuah link tanpa memerlukan tag ataupun awalanhttp://. Sebaga contoh mengetikkan www.phpbb.com pada pesan anda secara otomatis akan menghasilkan <a href="http://www.phpbb.com/">www.phpbb.com</a> pada saat anda melihat pesan tersebut.</li><li>Hal yang sama terjadi pada alamat e-mail, anda dapat menentukan alamat secara lengkap seperti contoh:<br /><br /><strong>[email]</strong>no.one@domain.adr<strong>[/email]</strong><br /><br />yang akan menghasilkan <a href="mailto:no.one@domain.adr">no.one@domain.adr</a> atau anda dapat mengetikkan no.one@domain.adr pada pesan anda dan secara otomatis akan mengubahnya pada saat anda melihat pesan tersebut.</li></ul>Seperti tag BBCode anda bisa membungkus URL disekeliling tag-tag yang lainnya seperti <strong>[img][/img]</strong> (lihat masukan selanjutnya), <strong>[b][/b]</strong>, dsb. Sebagai tag berformat, semuanya tergantung kepada anda untuk mengatur kebenaran urutan buka dan t
utup tag yang mengikuti, sebagai contoh:<br /><br /><strong>[url=http://www.google.com/][img]</strong>http://www.google.com/intl/en_ALL/images/logo.gif<strong>[/url][/img]</strong><br /><br />is <span style="text-decoration: underline">not</span> adalah benar, maka akan membuat post anda terhapus, jadi berhati-hatilah.',
	'HELP_BBCODE_LINKS_BASIC_QUESTION'	=> 'Membuat tautan ke situs lain',


	'HELP_BBCODE_LISTS_ORDERER_ANSWER'	=> 'Tipe kedua dari daftar adalah daftar berurut, yang memberikan kontrol pada output sebelum setiap item. Untuk membuat sebuah daftar yang diurutkan, gunakan <strong>[list=1][/list]</strong>, untuk membuat daftar yang bernomor atau menggunakan alternatif lain <strong>[list=a][/list]</strong> untuk daftar dengan alfabet. Sebagai daftar yang tidak diurutkan, item dispesifikasikan dengan menggunakan <strong>[*]</strong>. Sebagai contoh:<br /><br /><strong>[list=1]</strong><br /><strong>[*]</strong>Pergi ke toko<br /><strong>[*]</strong>Membeli kompupter baru<br /><strong>[*]</strong>Mencaci komputer pada saat rusak<br /><strong>[/list]</strong><br /><br />akan menghasilkan:<ol style="list-style-type: decimal;"><li>Pergi ke toko</li><li>Membeli komputer baru</li><li>Memaki komputer pada saat rusak</li></ol>Sedangkan untuk daftar alfabet anda gunakan:<br /><br /><strong>[list=a]</strong><br /><strong>[*]</strong>Jawaban pertama yang memungkinkan<br /><strong>[*]</strong>Jawaban kedua yang memungkinkan<br /><strong>[*]</strong>Jawaban ketiga yang memungkinkan<br /><strong>[/list]</strong><br /><br />giving<ol style="list-style-type: lower-alpha"><li>Jawaban pertama yang memungkinkan</li><li>Jawaban kedua yang memungkinkan</li><li>Jawaban ketiga yang memungkinkan</li></ol>',
	'HELP_BBCODE_LISTS_ORDERER_QUESTION'	=> 'Membuat sebuah daftar berurut',

	'HELP_BBCODE_LISTS_UNORDERER_ANSWER'	=> 'BBCode mendukung dua tipe daftar, yang diurutkan dan tidak diurutkan. Pada dasarnya keduanya adalah sama seperti kesamaan HTML mereka. Sebuah daftar yang tidak diurutkan menghasilkan setiap item secara sekuen satu dengan yang lainnya memberikan spasi dengan sebuah karakter titik. Untuk membuat daftar yang tidak berurutan anda gunakan <strong>[list][/list]</strong> dan tentukan setiap item dalam daftar tersebut dengan menggunakan <strong>[*]</strong>. Sebagai contohnya untuk mendaftarkan warna favorite anda gunakan:<br /><br /><strong>[list]</strong><br /><strong>[*]</strong>Merah<br /><strong>[*]</strong>Biru<br /><strong>[*]</strong>Kuning<br /><strong>[/list]</strong><br /><br />Ini akan menghasilkan daftar berikut ini:<ul><li>Merah</li><li>Biru</li><li>Kuning</li></ul>',
	'HELP_BBCODE_LISTS_UNORDERER_QUESTION'	=> 'Membuat sebuah daftar tidak berurut',

	'HELP_BBCODE_OTHERS_CUSTOM_ANSWER'	=> 'Jika anda seorang administrator halaman ini dan anda memiliki perizinan yang dibutuhkan, anda bisa menambahkan BBCode yang lain melalui bagian Custom BBCode..',
	'HELP_BBCODE_OTHERS_CUSTOM_QUESTION'	=> 'Bisakah saya membuat tag sendiri?',

	'HELP_BBCODE_QUOTES_CODE_ANSWER'	=> 'Jika anda ingin menampilkan sepenggal kode atau hal lain yang membutuhkan lebar tertentu, contoh: tipe font Courier yang teksnya anda tutup dengan tag <strong>[code][/code]</strong>, contoh:<br /><br /><strong>[code]</strong>echo &quot;Ini adalah kode&quot;;<strong>[/code]</strong><br /><br />Semua format yang digunakan didalam tag <strong>[code][/code]</strong> ditinggalkan pada saat anda melihatnya nanti. PHP syntax akan menerangi yang bisa dipakai menggunakan <strong>[code=php][/code]</strong> dan disarankan pada saat membuat contoh posting kode PHP lebih meningkatkan tempilannya.',
	'HELP_BBCODE_QUOTES_CODE_QUESTION'	=> 'Membuat kode atau ruangan data',

	'HELP_BBCODE_QUOTES_TEXT_ANSWER'	=> 'Ada dua cara untuk memetik teks, dengan ataupun tanpa referensi.<ul><li>Pada saat anda menggunakan fungsi Kutip untuk membalas post pada halaman, anda harus memperhatikan bahwa teks post ditambahkan ke kotak pesan yang ditutup dengan blok <strong>[quote=&quot;&quot;][/quote]</strong>. Metode ini membuat anda mengutip dengan referensi kepada orang atau yang lain yang anda pilih untuk digunakan! Sebagai contohnya untuk mengutip sepenggal kalimat dari Mr. Blobby anda masukkan:<br /><br /><strong>[quote=&quot;Mr. Blobby&quot;]</strong>Teks yang ditulis Mr. Blobby akan menjadi seperti ini<strong>[/quote]</strong><br /><br />Hasil yang diberikan secara otomatis akan menambahkan &quot;Mr. Blobby menulis:&quot; sebelum teks aktualnya. Ingatlah anda <strong>harus</strong> mengikutsertakan tanda kutipan &quot;&quot; disekeliling nama yang anda kutip.</li><li>Cara kedua adalah dengan mengutip sesuatu secara sembarangan. Untuk menggunakan ini, tutuplah semua teks dengan tag <strong>[quote][/quote]</strong>. Pada saat anda melihat pesan tersebut, maka akan ditunjukkan teks yang berada didalam blok kutipan.</li></ul>',
	'HELP_BBCODE_QUOTES_TEXT_QUESTION'	=> 'Memetik teks pada balasan',

	'HELP_BBCODE_TEXT_BASIC_ANSWER'	=> 'BBCode mengeikutsertakan tag yang bisa secara cepat mengganti gaya dasar untuk teks anda. Hal ini dicapai dengan cara berikut: <ul><li>Untuk membuat sepenggal teks tebal tutup dalam <strong>[b][/b]</strong>, e.g. <br /><br /><strong>[b]</strong>Halo<strong>[/b]</strong><br /><br />akan menjadi <strong>Halo</strong></li><li>Untuk garis bawah gunakan <strong>[u][/u]</strong>, sebagi contoh:<br /><br /><strong>[u]</strong>Selamat Pagi<strong>[/u]</strong><br /><br />menjadi <span style="text-decoration: underline">Selamat Pagi</span></li><li>Untuk membuat teks miring gunakan <strong>[i][/i]</strong>, e.g.<br /><br />Ini <strong>[i]</strong>Bagus!<strong>[/i]</strong><br /><br />akan memberikan Ini <i>Bagus!</i></li></ul>',
	'HELP_BBCODE_TEXT_BASIC_QUESTION'	=> 'Bagaiman membuat teks tebal, miring dan bergaris bawah',

	'HELP_BBCODE_TEXT_COLOR_ANSWER'	=> 'Untuk mengganti atau mengubah ukuran teks anda, tag berikut dapat digunakan. Mohon diingat bagaimana hasilnya muncul terganutung pada browser dan sistem yang melihat: <ul><li>Mngubah warna teks ini diperoleh dengan membungkusnya <strong>[color=][/color]</strong>. Anda dapat menentukan apakah jenis warna tersebu dikenali (contohnya. red, blue, yellow, dsb.) atau alternatif triplet heksadesimal, seperti #FFFFFF, #000000. Sebagi contohnya, untuk membuat teks dengan warna merah anda bisa menggunakan:<br /><br /><strong>[color=red]</strong>Halo!<strong>[/color]</strong><br /><br />or<br /><br /><strong>[color=#FF0000]</strong>Halo!<strong>[/color]</strong><br /><br />Keduanya akan menghasilkan <span style="color:red">Halo!</span></li><li>Mengubah ukuran teks diperoleh dengan cara yang sama menggunakan <strong>[size=][/size]</strong>. Tag ini tergantung pada template pengguna yang telah dipilih tetapi format yang disarankan adalah nilai numerik yang menunjukkan ukuran teks dalam persen, dimulai dengan 20 (sangat kecil) sampai ke 200 (sangat besar) secara defaultnya. Sebagai contoh:<br /><br /><strong>[size=30]</strong>KECIL<strong>[/size]</strong><br /><br />biasanya akan menjadi <span style="font-size:30%;">KECIL</span><br /><br />dimana:<br /><br /><strong>[size=200]</strong>BESAR!<strong>[/size]</strong><br /><br />menjadi <span style="font-size:200%;">BESAR!</span></li></ul>',
	'HELP_BBCODE_TEXT_COLOR_QUESTION'	=> 'Bagaimana mengganti warna teks atau ukurannya',

	'HELP_BBCODE_TEXT_COMBINE_ANSWER'	=> 'ya, anda tentu bisa, sebagai contoh untuk mendapatkan perhatian orang lain anda bisa menulis dengan:<br /><br /><strong>[size=200][color=red][b]</strong>LIHAT SAYA!<strong>[/b][/color][/size]</strong><br /><br />ini akan menghasilkan <span style="color:red;font-size:200%;"><strong>LIHAT SAYA!</strong></span><br /><br />Kami tidak menyarankan anda menghasilkan teks yang banyak yang kelihatan seperti ini! Ingatlah, hal tersebut tergantung pada anda, yang mempost, untuk meyakinkan bahwa tag tertutup dengan benar. Sebagai contoh berikut ini adalah yang salah:<br /><br /><strong>[b][u]</strong>Ini salah<strong>[/b][/u]</strong>',
	'HELP_BBCODE_TEXT_COMBINE_QUESTION'	=> 'Bisakah saya menggabungkan tags yang berformat?',
));
