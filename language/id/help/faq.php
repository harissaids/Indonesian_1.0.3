<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: faq.php 2017 harissaids@gmail.com
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

//** Login and Registration issues ***//
	'HELP_FAQ_BLOCK_LOGIN'	=> 'Masalah Login dan Pendaftaran',
	'HELP_FAQ_LOGIN_REGISTER_QUESTION'	=> 'Kenapa saya harus mendaftar?',
	'HELP_FAQ_LOGIN_REGISTER_ANSWER'	=> 'Sebenarnya tidak harus, tergantung kepada admnistrator halaman apakah anda perlu mendaftar untuk mempostkan pesan. Akan tetapi; pendaftaran akan memberikan anda akses ke fitur tambahan yang tidak tersedia untuk pengguna tamu seperti gambar avatar yang bisa ditentukan sendiri, perpesanan pribadi, mengirim e-mail kepada sahabat, berlangganan grup pengguna, dsb. Hanya membutuhkan beberapa saat untuk pendaftaran sehingga disarankan agar anda mendaftar.',
	'HELP_FAQ_LOGIN_COPPA_QUESTION'	=> 'Apa yang dimaksud dengan COPPA?',
	'HELP_FAQ_LOGIN_COPPA_ANSWER'	=> 'COPPA, atau Child Online Privacy and Protection Act 1998, adalah suatu hukum di Amerika Serikat yang mengharuskan suatu website yang secara potensial bisa mengumpulkan informasi dari yang belum dewasa dibawah umur 13 tahun harus menulis persetujuan orang tua atau metode lain dari persetujuan orang tua yang legal, mengijinkan pengumpulan informasi secara pribadi yang dapat diidentifikasi dari yang bukan untuk dewasa di bawah umur 13 tahun. Jika anda tidak yakin terhadap seseorang yang mencoba mendaftar, atau website yang anda coba daftarkan, silahkan hubungi penasehat hukum untuk mendapatkan bantuan. Mohon dicatat bahwa phpBB Group tidak dapat memberikan saran resmi dan bukan merupakan suatu pusat informasi yang resmi tentang hal tersebut, except as outlined in question “Who do I contact about abusive and/or legal matters related to this board?”.',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_QUESTION'	=> 'Kenapa saya tidak bisa mendaftar?',
	'HELP_FAQ_LOGIN_CANNOT_REGISTER_ANSWER'	=> 'Kemungkinannya adalah pemilik website telah melarang alamat IP anda atau nama pengguna yang anda coba daftarkan. Pemilik website mungkin juga menonaktifkan pendaftaran untuk mencagah datangnya pengunjung yang baru untuk mendaftar. Silahkan hubungi administrator halaman untuk pertolongan.',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_QUESTION'	=> 'Saya sudah mendaftar tetapi tidak bisa masuk!',
	'HELP_FAQ_LOGIN_REGISTER_CONFIRM_ANSWER'	=> 'Pertama, periksa nama pengguna dan kata sandi anda. Jika sudah benar, maka satu dari dua hal bisa terjadi. Jika fasililtas COPPA diaktifkan dan anda ditentukan berumur dibawah 13 tahun pada saat pendaftaran, anda harus mengikuti instruksi yang anda terima. Beberapa halaman juga membutuhkan pendaftaran baru tersebut diaktivasi, dengan anda sendiri atau dengan administrator sebelum anda bisa masuk; informasi ini diberitahukan pada saat pendaftaran. Jika anda dikirim e-mail, ikutilah petunjuk tersebut. Jika anda tidak menerima e-mail, anda harus memberikan alamat e-mail yang benar atau e-mail tersebut telah dimasukkan ke dalam daftar spam. Jika anda yakin alamat e-mail yang anda berikan tersebut benar, silahkan coba hubungi administrator.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_QUESTION'	=> 'Kenapa saya tidak dapat masuk?',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANSWER'	=> 'Ada beberapa alasan mengapa ini terjadi. Pertama, pastikan nama pengguna dan kata sandi anda sudah benar. Jika memang sudah benar, silahkan hubungi pemilik halaman untuk meyakinkan bahwa anda tidak sedang dilarang. Kemungkinan lainnya adalah pemilik website memiliki konfigurasi yang mengakibatkan error, sehingga mereka perlu memperbaikinya.',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_QUESTION'	=> 'Saya sudah mendaftar sebelumnya tetapi tidak bisa masuk?!',
	'HELP_FAQ_LOGIN_CANNOT_LOGIN_ANYMORE_ANSWER'	=> 'Ada kemungkinan Administrtor telah menon-aktifkan atau menghapus akun Anda dengan beberapa alasan, Juga banyak forum yang secara berkala menghapus pengguna yang sudah lama tidak memposting untuk memperkecil ukuran database. Jika ini terjadi, coba untuk mendaftar ulang dan aktif dalam diskusi yang ada.',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_QUESTION'	=> 'Saya kehilangan kata sandi!',
	'HELP_FAQ_LOGIN_LOST_PASSWORD_ANSWER'	=> 'Jangan panik! Ketika kata sandi anda tidak bisa diperoleh kembali, maka dengan mudahnya bisa di reset. Kunjungi halaman masuk dan klik <em>Saya lupa kata sandi</em>. Ikuti instruksinya maka anda bisa masuk lagi secepatnya.',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_QUESTION'	=> 'Kenapa saya dikeluarkan secara otomatis?',
	'HELP_FAQ_LOGIN_AUTO_LOGOUT_ANSWER'	=> 'Jika anda tidak mencentang kotak <em>Biarkan saya masuk secara otomatis</em> pada saat anda masuk, halaman akan tetap memasukkan anda di lain waktu. Hal ini untuk mencegah penyalahgunaan account anda oleh orang lain. Untuk tetap masuk, centang kotak tersebut saat anda masuk. Tidak disarankan jika anda mengakses halaman dari komputer shared, sebagai contoh; perpustakaan, kafe internet, komputer lab univerisitas, dsb. Jika anda tidak melihat checkbox tersebut, itu berarti administrator halaman menonaktifkan fitur tersebut.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_ANSWER'	=> '“Hapus semua cookie halaman” akan menghapus semua cookie yang dibuat oleh phpBB yang berguna untuk membuat anda tetap terhubung dengan halaman. Juga memberikan fungsi seperti membaca track jika diaktifkan oleh pemilik halaman. Jika anda memiliki masalah masuk atau keluar dari halaman, menghapus cookie halaman mungkin dapat membantu.',
	'HELP_FAQ_LOGIN_DELETE_COOKIES_QUESTION'	=> 'Apa kegunaan fitur “Hapus semua cookie halaman”?',

//** User Preferences and settings **//
	'HELP_FAQ_BLOCK_USERSETTINGS'	=> 'Preferensi Pengguna dan Pengaturan',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_QUESTION'	=> 'Bagaimana cara mengubah pengaturanku',
	'HELP_FAQ_USERSETTINGS_CHANGE_SETTINGS_ANSWER'	=> 'Jika anda seorang pengguna yang sudah terdaftar, semua pengaturan anda tersimpan di database halaman. Untuk mengubahnya, kunjungi Papan Pengaturan Pengguna anda; sebuah link biasanya ditemukan pada bagian atas halaman. Sistem ini mengijinkan anda untuk mengubah semua pengaturan dan preferensi anda.',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_QUESTION'	=> 'Bagaimana membuat agar nama pengguna saya tidak tercantum di daftar online pengguna?',
	'HELP_FAQ_USERSETTINGS_HIDE_ONLINE_ANSWER'	=> 'Di dalam Papan Pengaturan Pengguna anda, di bagian “Preferensi Halaman”, anda akan menemukan pilihan <em>Sembunyikan status online</em>. Dengan mengaktifkan pilihan ini menjadi <samp>Ya</samp> maka anda hanya akan ditampilkan untuk administrator, moderator dan anda sendiri. Anda akan dihitung sebagai pengguna tersembunyi.',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_QUESTION'	=> 'Penanggalannya tidak tepat!',
	'HELP_FAQ_USERSETTINGS_TIMEZONE_ANSWER'	=> 'Ada kemungkinan penganggalan tersebut ditampilkan dari zona waktu yang berbeda dengan tempat anda sekarang. Jika ini adalah permasalahannya, kunjungi Papan Pengaturan Pengguna anda dan ubah zona waktu anda untuk menyamakan dengan zona waktu daerah tertentu, seperti London, Paris, New York, Sydney, dsb. Mohon dicatat bahwa dengan mengubah zona waktu, seperti kebanyakan pengaturan yang lainnya, hanya dapat dilakukan oleh pengguna yang terdaftar. Jika anda tidak terdaftar, maka sekarang ini adalah waktu yang tepat untuk melakukan pendaftaran.',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_QUESTION'	=> 'Saya ubah zona waktunya tetapi waktunya masih tetap salah!',
	'HELP_FAQ_USERSETTINGS_SERVERTIME_ANSWER'	=> 'Jika anda yakin telah mengatur zona waktu dan Summer Time/DST dengan benar dan masih salah, maka waktu yang tersimpan di server adalah salah. Silahkan beritahukan administrator untuk memperbaiki masalah ini.',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_QUESTION'	=> 'Bahasaku tidak ada dalam daftar list!',
	'HELP_FAQ_USERSETTINGS_LANGUAGE_ANSWER'	=> 'Salah satunya adalah administrator belum menginstal bahasa anda atau tak satupun orang menterjemahkan bahasa halaman ke dalam bahasa anda. Silahkan coba hubungi administrator halaman jika mereka bisa menginstal paket bahasa yang anda perlukan. Jika paket bahasa tidak ada, silahkan membuat terjemahan yang baru. Untuk informasi lebih lanjut dapat ditemukan pada webiste phpBB (lihat link pada bagian bawah halaman)',
	'HELP_FAQ_USERSETTINGS_AVATAR_QUESTION'	=> 'Gambar apakah yang ada disebelah nama pengguna saya?',
	'HELP_FAQ_USERSETTINGS_AVATAR_ANSWER'	=> 'Ada dua gambar yang bisa anda tampilkan dibawah nama pengguna anda pada saat melihat post. Tergantung pada gaya yang digunakan, gambar pertama mungkin adalah gambar yang diasosiasikan dengan gambar ranking anda, biasanya dalam bentuk bintang, blok atau titik, yang menggambarkan berapa banyak post yang anda buat di halaman. Yang kedua adalah, biasanya gambar yang lebih besar, yang lebih dikenal sebagai avatar dan biasanya unik dan berbeda dengan yang lain. Hal tersebut tergantung pada administrator halaman untuk mengaktifkan avatar dan memilih cara bagaimana avatar tersedia. Jika anda tidak bisa memakai avatar, silahkan hubungi administrator halaman dan tanyakan tentang alasan mereka.',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_QUESTION'	=> 'Apa yang harus saya lakukan untuk menampilkan Avatar?',
	'HELP_FAQ_USERSETTINGS_AVATAR_DISPLAY_ANSWER'	=> 'Di Panel Pengaturan Pengguna anda, di “Profil” Anda dapat menambahkan Avatar dengan empat metode berikut: Gravatar, Galeri, Remote atau Unggah. Opsi tersebut tergantung dari pihak Administrator forum untuk menyediakan atau tidak fitur Avatar tersebut dan memilihkan metode agar fitur Avatar dapat tersedia. Apabila Anda tidak dapat menggunakan Avatar, hubungi administrator forum.',
	'HELP_FAQ_USERSETTINGS_RANK_QUESTION'	=> 'Apa ranking saya dan bagaimana saya mengubahnya?',
	'HELP_FAQ_USERSETTINGS_RANK_ANSWER'	=> 'Ranking yang tampak di bawah nama pengguna anda menunjukkan jumlah post yang sudah anda buat atau mengidentifikasikan pengguna tertentu, contohnya moderator dan administrator. Secara umum, anda tidak dapat mengubah kalimat dari semua ranking halaman karena hal tersebut diatur oleh administrator halaman. Dimohon untuk tidak menyalahgunakan halaman dengan membuat post yang tidak perlu untuk menaikkan ranking anda. Kebanyakan halaman tidak bisa mentolerir hal ini dan moderator ataupun administrator akan dengan mudah menurunkan jumlah post anda.',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_QUESTION'	=> 'Pada saat saya mengklik link e-mail pengguna, halaman meminta saya untuk masuk?',
	'HELP_FAQ_USERSETTINGS_EMAIL_LOGIN_ANSWER'	=> 'Hanya pengguna yang terdafar bisa mengirimkan e-mail kepada pengguna yang lain melalui halaman e-mail yang sudah dibuat, tetapi jika administrator mengaktifkan fitur ini. Hal ini dilakukan untuk mencagah penyalahgunaan sistem e-mail pengguna anonim.',

//** Posting issues **//
	'HELP_FAQ_BLOCK_POSTING'	=> 'Masalah Posting',
	'HELP_FAQ_POSTING_BUMP_QUESTION'	=> 'Bagaimana saya menggeser topik saya?',
	'HELP_FAQ_POSTING_BUMP_ANSWER'	=> 'Dengan mengklik link “Geser topik” pada saat anda melihat topik tersebut, anda bisa “menggeser” topik pada bagian atas forum di halaman pertama. Akan tetapi, jika anda tidak melihatnya, maka penggeseran topik tidak diaktifkan atau selang waktu untuk menggeser topik tersebut belum tercapai. Juga memungkinkan untuk menggeser topik secara mudah dengan membalas topiknya, akan tetapi, yakinkan untuk mengikuti peraturan halaman pada saat melakukannya.',

	'HELP_FAQ_POSTING_CREATE_QUESTION'	=> 'Bagaimana membuat topik baru dan membalas posting?',
	'HELP_FAQ_POSTING_CREATE_ANSWER'	=> 'Untuk membuat posting baru di forum, pilih "Topik baru". Untuk membalas posting di topik, Klik "Balas". Anda harus tedaftar sebelum memposting. Daftar perizinan Anda berada disebelah kiri bawah setiap halaman forum topik. misal: Anda dapat membuat topik baru, Anda dapat melampirkan file dalam posting, dst.',

	'HELP_FAQ_POSTING_DRAFT_QUESTION'	=> 'Apa kegunaan tombol "Simpan" pada posting topik?',
	'HELP_FAQ_POSTING_DRAFT_ANSWER'	=> 'Tombol memungkinkan Anda untuk menyimpan sepenggal pesan untuk dilengkapi dan diajukan pada waktu yang akan datang. Untuk membuka pesan yang telah disimpan. Untuk membuka naskah yang disimpan, kinjungi Panel Pengaturan Pengguna.',

	'HELP_FAQ_POSTING_EDIT_DELETE_QUESTION'	=> 'Bagaimana mengubah atau menghapus sebuah post?',
	'HELP_FAQ_POSTING_EDIT_DELETE_ANSWER'	=> 'Anda hanya bisa mengubah dan menghapus post anda, kecuali anda adalah seorang administrator halaman atapun moderator. Anda dapat mengubah sebuah post dengan mengklik tombol ubah untuk post yang relevan, terkadang hanya bisa dalam waktu yang terbatas setelah post tersebut dibuat. Jika seseorang sudah membalas post tersebut, anda akan menemukan kotak kecil berisi teks yang ditampilkan di bawah post pada saat anda kembali ke topik, yang akan ditampilkan daftar jumlah anda mengubah post tersebut beserta waktu dan tanggalnya. Ini hanya muncul apabila seseorang sudah membuat balasan, tetapi tidak akan muncul jika moderator ataupun administrator mengubah post tersebut, meskipun mereka mungkin meninggalkan sepenggal catatan mengapa mereka mengubah post tersebut. Mohon dicatat bahwa pengguna biasa tidak dapat menghapus post setelah seseorang membuat balasan.',

	'HELP_FAQ_POSTING_FORUM_RESTRICTED_QUESTION'	=> 'Kenapa saya tidak dapat mengakses sebuah forum?',
	'HELP_FAQ_POSTING_FORUM_RESTRICTED_ANSWER'	=> 'Beberap forum mungkin hanya terbatas untuk pengguna ataupun grup tertentu. Untuk melihat, membaca, membuat post atau melakukan tindakan lain yang mungkin anda butuhkan untuk perijinan yang spesial, hubungi moderator administrator halaman untuk mendapatkan akses.',

	'HELP_FAQ_POSTING_NO_ATTACHMENTS_QUESTION'	=> 'Kenapa saya tidak bisa menambahkan lampiran?',
	'HELP_FAQ_POSTING_NO_ATTACHMENTS_ANSWER'	=> 'Perijinan lampiran diberikan per forum, per grup, atau per basis pengguna. Administrator mungkin tidak mengijinkan lampiran ditambahkan untuk forum tertentu yang anda posting, atau mungkin hanya beberapa grup yang bisa mempostkan lampiran. Hubungi administrator halaman jika anda tidak yakin kenapa anda tidak dapat menambahkan lampiran.',

	'HELP_FAQ_POSTING_POLL_ADD_QUESTION'	=> 'Mengapa saya tidak dapat menambah pilihan pemungutan suara yang lain?',
	'HELP_FAQ_POSTING_POLL_ADD_ANSWER'	=> 'Batas untuk pemungutan suara tersebut diatur oleh administrator halaman. Jika anda rasa ingin menambahkan pilihan yang lain untuk pemungutan suara anda melebihi jumlah pilihan yang diijinkan, silahkan hubungi administrator halaman.',

	'HELP_FAQ_POSTING_POLL_CREATE_QUESTION'	=> 'Bagaimana saya membuat pemungutan suara?',
	'HELP_FAQ_POSTING_POLL_CREATE_ANSWER'	=> 'Pada saat anda membuat topik baru ataupun mengubah post pertama pada topik, kliklah tab “Penciptaan Pemungutan Suara” di bawah halaman posting; jika anda tidak melihat tab tersebut, maka anda tidak memiliki perijinan untuk membuat pemungutan suara. Masukkan sebuah judul dan paling sedikit dua pilihan pada isian yang sesuai, yakinkan bahwa setiap pilihan dipisahkan oleh baris baru pada area teks. Anda juga dapat memasukkan sejumlah pilihan yang bisa dipilih oleh pengguna selama pemungutan suara pada “Pilihan per pengguna”, batas waktu dalam hari untuk pemungutan suara (0 untuk waktu yang tidak terbatas) dan terakhir adalah pilihan untuk pengguna apakah bisa mengubah suara mereka.',

	'HELP_FAQ_POSTING_POLL_EDIT_QUESTION'	=> 'Bagaimana mengubah atau menghapus sebuah pemungutan suara?',
	'HELP_FAQ_POSTING_POLL_EDIT_ANSWER'	=> 'Seperti pada post, pemungutan suara hanya dapat diubah oleh pembuatnya, moderator ataupun administrator. Untuk mengubah pemungutan suara, klik ubah post pertama pada topik; post tersebut memiliki hubungan dengan pemungutan suara. Jika tidak satu orangpun memberikan suaranya, pengguna dapat menghapus pemungutan suara atau mengubah pemungutan suara tersebut. Akan tetapi, jika pengguna sudah memberikan suaranya, hanya administrator ataupun moderator yang bisa mengubah ataupun menghapus post tersebut. Ini mencegah agar pemungutan suara tersebut tidak diubah di tengah perjalanan.',

	'HELP_FAQ_POSTING_QUEUE_QUESTION'	=> 'Kenapa post saya perlu disetujui?',
	'HELP_FAQ_POSTING_QUEUE_ANSWER'	=> 'Administrator halaman bisa memutuskan post dalam forum yang anda posting tersebut yang membutuhkan pemeriksaan sebelum diperlihatkan. Administrator juga mungkin telah menempatkan anda pada suatu grup pengguna yang membutuhkan pemeriksaan sebelum post tersebut ditampilkan. Silahkan hubungi administrator halaman untuk informasi lebih lanjut.',

	'HELP_FAQ_POSTING_REPORT_QUESTION'	=> 'Bagaimana saya bisa melaporkan posting ke moderator?',
	'HELP_FAQ_POSTING_REPORT_ANSWER'	=> 'Jika administrator halaman mengaktifkan fasilitas tersebut, anda akan melihat tombol untuk melaporkan post di sebelah post yang ingin anda laporankan. Dengan mengkliknya, maka akan membawa anda pada tahap yang diperlukan untuk melaporkan post tersebut.',

	'HELP_FAQ_POSTING_SIGNATURE_QUESTION'	=> 'Bagaimana menambahkan tanda tangan di post saya sendiri?',
	'HELP_FAQ_POSTING_SIGNATURE_ANSWER'	=> 'Untuk menambahkan tanda tangan pada post anda, anda harus membuatnya terlebih dahulu melalui Papan Pengaturan Pengguna. Setelah dibuat, anda bisa mencentang kotak <em>Tampilkan tanda tangan</em> pada halaman posting untuk menambahkan tanda tangan anda. Anda juga bisa menambahkan tanda tangan untuk semua post anda dengan mencentang tombol radio yang berhubungan pada profil anda. Jika anda melakukan hal tersebut, anda masih bisa mengembalikan tanda tangan yang ditambahkan ke dalam post dengan tidak mencentang kotak tambahkan tanda tangan pada halaman posting.',

	'HELP_FAQ_POSTING_WARNING_QUESTION'	=> 'Kenapa saya mendapatkan peringatan?',
	'HELP_FAQ_POSTING_WARNING_ANSWER'	=> 'Setiap administrator halaman memiliki pengaturannya masing-masing untuk situs mereka. Jika anda sudah melanggar peraturan, maka anda akan diberikan peringatan. Silahkan dicatat bahwa hal tersebut adalah keputusan administrator halaman, dan phpBB Group tidak terlibat dengan peringatan yang diberikan situs tersebut. Hubungi administrator halaman jika anda tidak yakin tentang peringatan anda tersebut.',


//** Formating and Topic Types **//
	'HELP_FAQ_BLOCK_FORMATTING'	=> 'Format dan tipe Topik',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_QUESTION'	=> 'Apa yang dimaksud dengan pengumuman?',
	'HELP_FAQ_FORMATTING_ANNOUNCEMENT_ANSWER'	=> 'Pengumuman sering mengandung informasi yang penting untuk forum yang sedang anda baca dan anda harus membacanya sebisa mungkin. Pengumuan ditampilkan pada bagian atas halaman forum yang dipostkan. Sebagai pengumuman global, perijinan pengumuman diberikan oleh administrator halaman.',

	'HELP_FAQ_FORMATTING_BBOCDE_QUESTION'	=> 'Apa yang dimaksud dengan BBCode?',
	'HELP_FAQ_FORMATTING_BBOCDE_ANSWER'	=> 'BBCode adalah sebuah implementasi HTLM, yang menawarkan pengaturan format besar untuk objek yang berbeda pada sebuah post. Penggunaan BBCode diberikan oleh administrator, namun hal tersebut juga bisa dinonaktifkan per dasar post dari halaman posting. BBCode itu sendiri serupa dengan gaya HTML, tetapi tag ditutup dengan tanda kurung kotak [ dan ] yang lebih baik dari penggunaan &lt; dan &gt;. Untuk informasi lebih lanjut tentang BBCode lihat panduan yang bisa diakses dari halaman posting.',

	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_QUESTION'	=> 'Apa yang dimaksud pengumuman global?',
	'HELP_FAQ_FORMATTING_GLOBAL_ANNOUNCE_ANSWER'	=> 'Pengumuman global mengandung informasi penting dan anda seharusnya membacanya sebisa mungkin. Pengumuman tersebut akan muncul pada setiap forum dan dalam Papan Pengaturan Pengguna anda. Perijinan pengumuman gobal diberikan oleh administrator halaman.',

	'HELP_FAQ_FORMATTING_HTML_QUESTION'	=> 'Bisakah saya menggunakan HTML?',
	'HELP_FAQ_FORMATTING_HTML_ANSWER'	=> 'Tidak. Tidak mungkin untuk mempost HTML pada halaman ini yang di render sebagai HTML. Kebanyakan format yang bisa dipakai menggunakan HTML justru bisa diaplikasikan menggunakan BBCode.',

	'HELP_FAQ_FORMATTING_ICONS_QUESTION'	=> 'Apa yang dimaksud dengan ikon topik?',
	'HELP_FAQ_FORMATTING_ICONS_ANSWER'	=> 'Ikon topik adalah gambar yang dipilih penulis yang berhubungan dengan post yang menggambarkan isinya. Kemampuan untuk menggunakan ikon topik tergantung pada perijinan yang diatur oleh administrator halaman.',

	'HELP_FAQ_FORMATTING_IMAGES_QUESTION'	=> 'Bisakah saya mempost gambar?',
	'HELP_FAQ_FORMATTING_IMAGES_ANSWER'	=> 'Ya, gambar bisa ditampilkan pada post anda. Jika administrator mengijinkan lampiran, anda dapat mengupload gambar ke halaman. Akan tetapi, anda harus memberikan link ke gambar yang disimpan ke web server yang bisa diakses oleh publik, contohnya http://www.example.com/my-picture.gif. Anda tidak bisa memberikan link gambar yang tersimpan di PC anda (kecuali komputer tersebut merupakan server yang bisa diakses oleh publik) ataupun gambar yang disimpan dengan secara mekanisme otentifikasi, seperti contoh. hotmail atau mailbox yahoo, situs yang dilindungi kata sandi, dsb. Untuk menampilkan gambar gunakan tag [img] BBCode.',

	'HELP_FAQ_FORMATTING_LOCKED_QUESTION'	=> 'Apa yang dimaksud dengan topik dikunci?',
	'HELP_FAQ_FORMATTING_LOCKED_ANSWER'	=> 'Topik dikunci adalah topik yang tidak bisa dibalas oleh pengguna dan yang mengandung semua pemungutan suara yang dikandungnya secara otomatis akan diakhiri. Topik mungkin dikunci untuk beberapa alasan dan di atur oleh moderator forum ataupun administrator halaman. Anda juga bisa mengunci topik anda sendiri tergantung atas perijinan yang diberikan oleh administrator halaman.',

	'HELP_FAQ_FORMATTING_SMILIES_QUESTION'	=> 'Apa yang dimaksud tanda Smilies?',
	'HELP_FAQ_FORMATTING_SMILIES_ANSWER'	=> 'Smilies, or Emoticons, adalah gambar kecil yang bisa digunakan untuk menyatakan perasaan menggunakan kode singkat, sebagai contoh :) yang menunjukkan kegembiraan, sementara :( menggambarkan kesedihan. Daftar lengkap dari emoticon dapat dilihat pada halaman posting. Cobalah untuk tidak berlebihan menggunakan tanda senyuman, akan tetapi, sebagaimana tanda tersebut secara cepat menterjemahkan post yang tidak terbaca dan moderator bisa mengubahnya ataupun menyingkirkan keseluruhan post. Administrator halaman juga memiliki batas pengaturan jumlah senyuman yang bisa digunakan dalam post.',

	'HELP_FAQ_FORMATTING_STICKIES_QUESTION'	=> 'Apa yang dimaksud dengan topik sticky?',
	'HELP_FAQ_FORMATTING_STICKIES_ANSWER'	=> 'Topik sticky yang berada dalam forum ditampilkan di bawah pengumuman dan hanya pada halaman pertama. Terkadang sangat penting sehingga anda harus membacanya sebisa mungkin. Seperti pengumuman dan pengumuman global, perijinan topik sticky diberikan oleh administrator halaman.',

	'HELP_FAQ_BLOCK_GROUPS'	=> 'Tingkat Pengguna dan Grup',

	'HELP_FAQ_GROUPS_ADMINISTRATORS_QUESTION'	=> 'Apa yang dimaksud dengan Administrator?',
	'HELP_FAQ_GROUPS_ADMINISTRATORS_ANSWER'	=> 'Administrator merupakan anggota dengan tingkat tertinggi yang mengatur keseluruhan halaman. Anggota ini dapat mengatur semua segi dari pengoperasian halaman termasuk perijinan, melarang pengguna, membuat grup pengguna ataupun moderator, dsb., tergantung atas pendiri halaman dan perijinan yang diberikan administrator yang lain. Anggota ini juga memiliki kemampuan moderator penuh pada setiap forum tergantung atas pengaturan yang diberikan pendiri halaman.',

	'HELP_FAQ_GROUPS_COLORS_QUESTION'	=> 'Mengapa beberapa grup pengguna menggunakan warna yang berbeda?',
	'HELP_FAQ_GROUPS_COLORS_ANSWER'	=> 'Administrator halaman mungkin memberikan warna kepada anggota dari grup pengguna untuk mempermudah pengenalan anggota dari grup tersebut.',

	'HELP_FAQ_GROUPS_DEFAULT_QUESTION'	=> 'Apa yang dimaksud dengan “Grup default pengguna”?',
	'HELP_FAQ_GROUPS_DEFAULT_ANSWER'	=> 'Jika anda merupakan anggota dari beberapa grup pengguna, maka grup default anda ditentukan oleh warna grup dan ranking grup yang seharusnya muncul untuk anda sebagai defaultnya. Administrator halaman mungkin memberikan perijinan untuk mengubah grup default anda melalui Panel Pengaturan Pengguna.',

	'HELP_FAQ_GROUPS_MODERATORS_QUESTION'	=> 'Apa yang dimaksud dengan Moderator?',
	'HELP_FAQ_GROUPS_MODERATORS_ANSWER'	=> 'Moderator adalah individu (atau grup individu) yang menjaga forum setiap hari. Mereka memiliki wewenang untuk mengubah atau menghapus dan mengunci post, membuka, memindahkan, menghapus dan memisahkan topik di forum yang mereka moderasi. Secara umum, moderator hadir untuk mencegah pengguna supaya pembicaraan tidak keluar dari topik atau materi yang bersifat penghinaan ataupun penyerangan.',

	'HELP_FAQ_GROUPS_TEAM_QUESTION'	=> 'Apa yang dimaksud dengan link “Team”?',
	'HELP_FAQ_GROUPS_TEAM_ANSWER'	=> 'Halaman ini akan menampilkan daftar dari staf halaman, termasuk administrator halaman dan moderator dengan keterangan lain seperti forum yang mereka moderasi',

	'HELP_FAQ_GROUPS_USERGROUPS_QUESTION'	=> 'Apa yang dimaksud grup pengguna?',
	'HELP_FAQ_GROUPS_USERGROUPS_ANSWER'		=> 'Grup pengguna adalah grup dari pengguna yang membagi komunitas menjadi bagian yang bisa diatur oleh administrator halaman. Setiap pengguna bisa memiliki beberapa grup dan setiap grup dapat diberikan perijinan individu. Hal ini memberikan kemudahan bagi administrator untuk mengubah perijinan untuk banyak pengguna sekaligus, seperti mengubah perijinan moderator atau memberikan akses pengguna ke forum pribadi.',

	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_QUESTION'	=> 'Apa yang maksud dengan grup pengguna dan bagaimana saya bergabung?',
	'HELP_FAQ_GROUPS_USERGROUPS_JOIN_ANSWER'	=> 'Anda bisa melihat semua grup pengguna melalui link “Grup pengguna” di dalam Papan Pengaturan Pengguna anda. Jika anda ingin bergabung dengan salah satunya, laksanakan dengan mengklik tombol yang yang tepat. Bagaimanpun juga tidak semua pengguna memiliki akses yang terbuka. Beberapa membutuhkan persetujuan bergabung, beberapa mungkin tertutup dan beberapa mungkin memiliki keanggotaan yang tersembunyi. Jika grup tersebut terbuka, anda dapat bergabung dengan mengklik tombol yang sesuai. Jika sebuah grup membutuhkan persetujuan untuk bergabung, anda bisa memohon bergabung dengan mengklik tombol yang sesuai. Pemimpin grup akan menyetujui permohonan anda dan mungkin bertanya kenapa anda ingin bergabung dengan grup tersebut. Dimohon untuk tidak mengganggu pemimpin grup jika mereka menolak permohonan anda; mereka pasti memiliki alasan terhadap hal tersebut.',

	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_QUESTION'	=> 'Bagaimana saya bisa menjadi pemimpin grup?',
	'HELP_FAQ_GROUPS_USERGROUPS_LEAD_ANSWER'	=> 'Seorang pemimpin grup biasanya ditetapkan pada saat awal grup pengguna diciptakan oleh administrator halaman. Jika anda berniat untuk membuat grup pengguna, hal yang pertama anda lakukan adalah menghubungi administrator; cobalah untuk mengirim pesan pribadi.',

	'HELP_FAQ_BLOCK_PMS'	=> 'Pesan Pribadi',

	'HELP_FAQ_PMS_CANNOT_SEND_QUESTION'	=> 'Saya tidak dapat mengirim pesan pribadi!',
	'HELP_FAQ_PMS_CANNOT_SEND_ANSWER'	=> 'Ada tiga alasan untuk hal tersebut; anda belum terdaftar atau masuk, administrator halaman telah menonaktifkan pesan pribadi untuk keseluruhan halaman, atau administrator halaman mencegah anda untuk mengirimkan pesan. Hubungi administrator halaman untuk informasi lebih lanjut.',

	'HELP_FAQ_PMS_SPAM_QUESTION'	=> 'Saya telah menerima spam atau e-mail penghinaan dari seseorang pada halaman ini!',
	'HELP_FAQ_PMS_SPAM_ANSWER'	=> 'Kami mohon maaf atas hal tersebut. Bentuk fitur e-mail pada halaman ini memiliki penjagaan untuk mencoba dan melacak pengguna yang mengirimkan post, jadi silahkan hubungi administrator halaman dengan salinan lengkap e-mail yang anda terima. Sangat penting untuk mengikutsertakan judul yang mengandung keterangan dari pengguna yang mengirimkan e-mail tersebut. Administrator halaman selanjutnya dapat mengambil tindakan.',

	'HELP_FAQ_PMS_UNWANTED_QUESTION'	=> 'Saya selalu menerima pesan yang tidak diinginkan!',
	'HELP_FAQ_PMS_UNWANTED_ANSWER'	=> 'Anda bisa memblokir pengguna mengirim pesan pribadi kepada anda dengan menggunakan peraturan pesan dalam Papan Pengaturan Pengguna. Jika anda menerima pesan pribadi yang berisi penghinaan dari pengguna tertentu, silahkan beritahukan administrator halaman; mereka memiliki kuasa untuk mencegah pengguna mengirimkan pesan pribadi.',


	'HELP_FAQ_BLOCK_FRIENDS'	=> 'Teman dan Lawan',

	'HELP_FAQ_FRIENDS_BASIC_QUESTION'	=> 'Apa yang dimaksud dengan daftar Teman dan Lawan saya',
	'HELP_FAQ_FRIENDS_BASIC_ANSWER'	=> 'Anda bisa menggunakan daftar ini untuk mengatur anggota lain. Anggota yang ditambahkan ke daftar teman anda akan ditampilkan di dalam Papan Pengaturan Pengguna agar diketahui secara cepat status online dan mengirim pesan pribadi kepada mereka. Tergantung atas template yang digunakan, post-post dari teman anda juga akan dihurufterangi. Jika anda menambahkan pengguna ke daftar lawan anda, semua post dari mereka akan disembunyikan secara default.',

	'HELP_FAQ_FRIENDS_MANAGE_QUESTION'	=> 'Bagaiaman saya menambahkan/menyingkirkan pengguna dari daftar Teman dan Lawan?',
	'HELP_FAQ_FRIENDS_MANAGE_ANSWER'	=> 'Anda dapat menambahkan pengguna ke dalam daftar dengan dua cara. Pada setiap profil pengguna, ada sebuah link untuk menambahkan mereka ke dalam daftar Teman dan Lawan anda. Selain itu, dari Papan Pengaturan Pengguna, anda secara langsung dapat menambahkan dengan memasukkan nama anggota mereka. Anda juga dapat menyingkirkan pengguna dari daftar dengan menggunakan halaman yang sama.',

	'HELP_FAQ_BLOCK_SEARCH'	=> 'Pencarian Forum',

	'HELP_FAQ_SEARCH_FORUM_QUESTION'	=> 'Bagaimana saya mencari forum?',
	'HELP_FAQ_SEARCH_FORUM_ANSWER'	=> 'Masukkan syarat pencarian di kotak pencarian yang terdapat pada halaman indeks, forum ataupun halaman topik. Pencarian tingkat lanjut dapat diakses dengan mengklik link “Pencarian Tingkat Lanjut” yang tersedia pada semua halaman forum. Akses pencarian bisa tergantung atas gaya yang digunakan.',

	'HELP_FAQ_SEARCH_NO_RESULT_QUESTION'	=> 'Kenapa pencarian saya tidak mendapatkan hasil?',
	'HELP_FAQ_SEARCH_NO_RESULT_ANSWER'	=> 'Pencarian anda kemungkinan terlalu samar dan mengikutsertakan istilah-istilah yang umum yang tidak diindeks oleh phpBB3. Silahkan untuk lebih spesifik dan gunakanlah pilihan yang tersedia di dalam pencarian tingkat lanjut tersebut.',

	'HELP_FAQ_SEARCH_BLANK_QUESTION'	=> 'Kenapa pencarian saya menghasilkan halaman kosong!?',
	'HELP_FAQ_SEARCH_BLANK_ANSWER'	=> 'Pencarian anda terlalu banyak hasilnya untuk ditanggulangi oleh webserver. Gunakan “Pencarian tingkat lanjut” dan lebih spesifik dalam menggunakan istilah dan forum yang anda cari.',

	'HELP_FAQ_SEARCH_MEMBERS_QUESTION'	=> 'Bagaimana mencari anggota?',
	'HELP_FAQ_SEARCH_MEMBERS_ANSWER'	=> 'Kunjungi halaman “Daftar anggota” dan klik link “Cari anggota”.',


	'HELP_FAQ_SEARCH_OWN_QUESTION'	=> 'Bagaiman mencari post dan topik saya sendiri?',
	'HELP_FAQ_SEARCH_OWN_ANSWER'	=> 'Post anda dapat dilihat kembali dengan mengklik “Cari post pengguna” dalam Papan Pengaturan Pengguna atau pada halaman profil anda. Untuk mencari topik anda sendiri, gunakan pencarian tingkat lanjut dan isikan berbagai macam pilihan lain yang sesuai.',

	'HELP_FAQ_BLOCK_BOOKMARKS'	=> 'Berlangganan Topik dan Penunjuk Halaman',

	'HELP_FAQ_BOOKMARKS_DIFFERENCE_QUESTION'	=> 'Apa perbedaan antara penunjuk halaman dan berlangganan?',
	'HELP_FAQ_BOOKMARKS_DIFFERENCE_ANSWER'	=> 'In phpBB 3.0, Penunjuk halaman topik berkerja seperti penunjuk halaman di browser. Anda tidak diberitahukan saar ada pembaruan. di phpBB 3.1, Penunjuk halaman seperti berlangganan sebuah topik. Anda diberitahu jika topik yang dipilih ada perubahan. Akan tetapi, dengan berlangganan akan memberitahukan anda apabila ada pembaruan pada topik atau forum melalui cara dan metode yang anda pilih di  Panel Pengaturan Penguna, dibawah “Preferensi Halaman”.',

	'HELP_FAQ_BOOKMARKS_REMOVE_QUESTION'	=> 'Bagaimana untuk berhenti berlangganan?',
	'HELP_FAQ_BOOKMARKS_REMOVE_ANSWER'	=> 'Untuk berhenti berlangganan, silahkan kunjungi Papan Pengaturan Pengguna dan ikuti link ke bagian langganan anda.',

	'HELP_FAQ_BOOKMARKS_FORUM_QUESTION'	=> 'Bagaimana saya berlangganan forum?',
	'HELP_FAQ_BOOKMARKS_FORUM_ANSWER'	=> 'Untuk berlangganan forum yang spesifik, klik link “Berlangganan forum” pada halaman forum, yang bearada dibawah halaman forum.',

	'HELP_FAQ_BOOKMARKS_TOPIC_QUESTION'	=> 'How do I bookmark or subscribe to specific topics?',
	'HELP_FAQ_BOOKMARKS_TOPIC_ANSWER'	=> 'Anda dapat menambahkan ke buku petunjuk atau berlangganan spesifik topik dengan megklik tautan yang ada di menu "Alat Topik", Alat tersebut dapat dengan mudah ditemukan berada diatas dan bawah sebuah topik.<br />Membalas topik dengan “Beritahu saya saat ada posting balasan” memilih option checked juga sama dengan berlanggan topik tersebut.',

	'HELP_FAQ_BLOCK_ATTACHMENTS'	=> 'Lampiran',

	'HELP_FAQ_ATTACHMENTS_ALLOWED_QUESTION'	=> 'Lampiran seperti apa yang diijinkan pada halaman?',
	'HELP_FAQ_ATTACHMENTS_ALLOWED_ANSWER'	=> 'Setiap halaman bisa mengijinkan ataupun tidak untuk tipe lampiran tertentu. Jika anda tidak yakin dengan apa yang diijinkan untuk diupload, silahkan hubungi administrator halaman untuk mendapatkan bantuan.',

	'HELP_FAQ_ATTACHMENTS_OWN_QUESTION'	=> 'Dimana saya bisa menemukan semua lampiran saya?',
	'HELP_FAQ_ATTACHMENTS_OWN_ANSWER'	=> 'Untuk mencari lampiran yang sudah anda upload, silahkan kunjungi Papan Pengaturan Pengguna dan ikuti link ke bagian lampiran',


	'HELP_FAQ_BLOCK_ISSUES'	=> 'Masalah phpBB',

	'HELP_FAQ_ISSUES_ADMIN_QUESTION'	=> 'Bagaimana saya menghubungi Admin Halaman?',
	'HELP_FAQ_ISSUES_ADMIN_ANSWER'	=> 'Semua pengguna dapat menggunakan fitur "Kontak kami", jika opsi tersebut diaktifkan oleh Administrator halaman.<br />Anggota forum juga dapat menggunakan tautan "Team Link".',

	'HELP_FAQ_ISSUES_FEATURE_QUESTION'	=> 'Kenapa fitur X tidak tersedia?',
	'HELP_FAQ_ISSUES_FEATURE_ANSWER'	=> 'Perangkat lunak ini (dengan bentuk yang tidak dimodifikasi) dibuat, dikeluarkan dan merupakan hak cipta dari <a href="http://www.phpbb.com/">phpBB Group</a>. Dibuat tersedia di bawah naungan GNU General Public License dan bisa disebarkan secara bebas. Silahkan lihat link untuk lebih jelasnya.',

	'HELP_FAQ_ISSUES_LEGAL_QUESTION'	=> 'Siapa yang saya hubungi tentang penghinaan dan/atau permasalahan hukum pada halaman ini?',
	'HELP_FAQ_ISSUES_LEGAL_ANSWER'	=> 'Semua administrator yang terdaftar pada halaman “Team” merupakan orang yang tepat untuk dihubungi tentang keluhan anda tersebut. Jika hal tersebut masih tidak mendapatkan respon anda harus menghubungi pemilik dari domain (lakukan <a href="http://www.google.com/search?q=whois">whois lookup</a>) atau, jika ini berjalan pada layanan gratis (contohnya Yahoo!, free.fr, f2s.com, dsb.), managemen atau departemen yang berhubungan dengan layanan tersebut. Silahkan dicatat bahwa phpBB Group <strong>tidak bertanggung jawab</strong> atas bagaimana, dimana dan siapa yang menggunakan forum ini. Jangan menghubungi phpBB Group mengenai segala sesuatu yang berhubungan dengan permasalahan hukum (penghentian, tanggung jawab, fitnah, dsb.) <strong>tidak berhubungan langsung</strong> ke website phpBB.com ataupun perangkat lunak phpBB itu sendiri. Jika anda mengirim e-mail kepada phpBB Group <strong>tentang pihak ketiga</strong> penggunaan perangkat lunak ini maka mungkin anda menerima respon yang singkat atau tidak sama sekali.',

	'HELP_FAQ_ISSUES_WHOIS_PHPBB_QUESTION'	=> 'Siapa yang menulis halaman buletin ini?',
	'HELP_FAQ_ISSUES_WHOIS_PHPBB_ANSWER'	=> 'Perangkat lunak ini (dengan bentuk yang tidak dimodifikasi) dibuat, dikeluarkan dan merupakan hak cipta dari <a href="http://www.phpbb.com/">phpBB Group</a>. Dibuat tersedia di bawah naungan GNU General Public License dan bisa disebarkan secara bebas. Silahkan lihat link untuk lebih jelasnya.',




));
