<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: install.php 2017 harissaids@gmail.com
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

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

// Common installer pages
$lang = array_merge($lang, array(
	'INSTALL_PANEL'	=> 'Panel Instalasi',
	'SELECT_LANG'	=> 'Pilih Bahasa',

	'STAGE_INSTALL'	=> 'Instalasi phpBB',

	// Introduction page
	'INTRODUCTION_TITLE'	=> 'Pendahuluan',
	'INTRODUCTION_BODY'		=> 'Selamat datang di phpBB3!<br /><br />phpBB® adalah solusi panel buletin open source yang paling banyak digunakan di dunia. phpBB3 adalah angsuran terbaru dalam jajaran paket yang dimulai pada tahun 2000. Seperti pendahulunya, phpBB3 kaya fitur, user-friendly, dan didukung sepenuhnya oleh Tim phpBB. phpBB3 sangat meningkatkan pada apa yang membuat phpBB2 populer, dan menambahkan fitur yang biasa diminta yang tidak ada dalam versi sebelumnya. Kami berharap ini melebihi harapan Anda.<br /><br />Sistem instalasi ini akan memandu Anda melalui pemasangan phpBB3, mengupdate ke versi terbaru phpBB3 dari rilis sebelumnya, dan juga mengkonversi ke phpBB3 dari sistem dewan diskusi yang berbeda (termasuk phpBB2). Untuk informasi lebih lanjut, sebaiknya baca <a href="../docs/INSTALL.html"> panduan pemasangan </a>.<br /><br /> Untuk membaca lisensi phpBB3 atau belajar tentang mendapatkan dukungan dan sikap kami di atasnya, silahkan pilih opsi masing-masing dari menu samping. Untuk melanjutkan, silahkan pilih tab yang sesuai di atas. ',

	// Support page
	'SUPPORT_TITLE'		=> 'Dukungan',
	'SUPPORT_BODY'		=> 'Dukungan penuh akan diberikan untuk rilis stabil phpBB3 saat ini, gratis. Ini termasuk: </p> <ul><li>konfigurasi</li><li>konfigurasi</li><li>masalah teknis</li><li> masalah yang berkaitan dengan potensi bug dalam perangkat lunak</li><li>mengupdate dari versi Release Candidate (RC) ke versi stabil terakhir</li><li> mengkonversi dari phpBB 2.0.x menjadi phpBB3</li><li> mengkonversi dari perangkat lunak papan diskusi lainnya ke phpBB3 (lihatlah <a href="https://www.phpbb.com/community/viewforum.php?f=486">Forum Konverter</a>)</li></ul><p> Kami mendorong pengguna masih menjalankan versi beta versi phpBB3 untuk mengganti instalasi mereka dengan salinan terbaru dari versi terbaru.</p><h2>Ekstensi / Gaya</h2><p> Untuk masalah yang berkaitan dengan Ekstensi, silakan posting di  <a href="https://www.phpbb.com/community/viewforum.php?f=451">Forum Ekstensi</a>. <br /> Untuk masalah yang berkaitan dengan gaya, template dan tema, silahkan posting di <a href ="https://www.phpbb.com/community/viewforum.php?f=471">Styles Forum</a>.<br /><br /> Jika pertanyaan Anda terkait dengan paket tertentu, permohonan se posting langsung di topik yang dipersembahkan untuk paket.</p><h2>Mendapatkan Dukungan</h2><p><a href="https://www.phpbb.com/community/viewtopic.php?f=14&amp;t=571070">Paket Selamat Datang phpBB</a><br /><a href="https://www.phpbb.com/support/">Bagian Dukungan</a><br /><a href="https://www.phpbb.com/support/">Panduan Ringkas</a><br /><a href="https://www.phpbb.com/support/docs/en/3.1/ug/quickstart/">Panduan Pemula</a><br /><br />Untuk memastikan Anda selalu mengikuti perkembangan berita dan rilis terbaru, mengapa tidak <a href="https://www.phpbb.com/support/">berlangganan milis kami</a>?<br /><br />',

	// License
	'LICENSE_TITLE'		=> 'General Public License',

	// Install page
	'INSTALL_INTRO'				=> 'Selamat Datang di Instalasi',
	'INSTALL_INTRO_BODY'		=> 'Dengan pilihan ini adalah memungkinkan untuk menginstall phpBB3 ke server anda.</p><p>Untuk memproses, anda membutuhkan pengaturan database. Jika anda tidak mengetahui pengaturan database anda, silahkan hubungi host anda dan tanyakan mereka. Anda tidak akan bisa melanjutkan tanpa pengaturan tersebut. Anda harus:</p>

	<ul>
		<li>Tipe Database - database yang akan anda gunakan.</li>
		<li>Nama host server database atau DSN - alamat dari server database.</li>
		<li>Port Server Database - port dari server database (biasanya tidak dibutuhkan).</li>
		<li>Nama Database - nama database di server tersebut.</li>
		<li>Nama Pengguna dan Kata Sandi Database - masukan untuk mengakses database.</li>
	</ul>

	<p><strong>Catatan:</strong> jika anda menggunakan SQLite untuk instalasi, anda harus memasukkan alamat lengkap ke file database anda pada DSN isian dan biarkan kosong isian untuk nama pengguna dan kata sandinya. Untuk alasan keamanan, anda harus yakin bahwa file database tersebut tidak disimpan di lokasi web yang dapat diakses.</p>

	<p>phpBB3 mendukung beberapa database berikut ini:</p>
	<ul>
		<li>MySQL 3.23 atau di bawahnya (Mendukung MySQLi)</li>
		<li>PostgreSQL 7.3+</li>
		<li>SQLite 2.8.2+</li>
		<li>Firebird 2.0+</li>
		<li>MS SQL Server 2000 atau di bawahnya (langsung ataupun via ODBC)</li>
		<li>MS SQL Server 2005 atau ke atas (asli)</li>
		<li>Oracle</li>
	</ul>

	<p>Hanya database yang didukung pada server anda yang akan ditampilkan.',

	'ACP_LINK'	=> 'Bawa saya ke <a href="%1$s"> ACP</a>',

	'INSTALL_PHPBB_INSTALLED'		=> 'phpBB sudah terinstal.',
	'INSTALL_PHPBB_NOT_INSTALLED'	=> 'phpBB belum terinstal.',
));

// Requirements translation
$lang = array_merge($lang, array(
	// Filesystem requirements
	'FILE_NOT_EXISTS'						=> 'File does not exist',
	'FILE_NOT_EXISTS_EXPLAIN'				=> 'To be able to install phpBB the %1$s file needs to exist.',
	'FILE_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s file exist for a better forum user experience.',
	'FILE_NOT_WRITABLE'						=> 'File is not writable',
	'FILE_NOT_WRITABLE_EXPLAIN'				=> 'To be able to install phpBB the %1$s file needs to be writable.',
	'FILE_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s file be writable for a better forum user experience.',

	'DIRECTORY_NOT_EXISTS'						=> 'Directory does not exist',
	'DIRECTORY_NOT_EXISTS_EXPLAIN'				=> 'To be able to install phpBB the %1$s directory needs to exist.',
	'DIRECTORY_NOT_EXISTS_EXPLAIN_OPTIONAL'		=> 'It is recommended that the %1$s directory exist for a better forum user experience.',
	'DIRECTORY_NOT_WRITABLE'					=> 'Directory is not writable',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN'			=> 'To be able to install phpBB the %1$s directory needs to be writable.',
	'DIRECTORY_NOT_WRITABLE_EXPLAIN_OPTIONAL'	=> 'It is recommended that the %1$s directory be writable for a better forum user experience.',

	// Server requirements
	'PHP_VERSION_REQD'					=> 'PHP version',
	'PHP_VERSION_REQD_EXPLAIN'			=> 'phpBB requires PHP version 5.4.0 or higher.',
	'PHP_GETIMAGESIZE_SUPPORT'			=> 'PHP getimagesize() function is required',
	'PHP_GETIMAGESIZE_SUPPORT_EXPLAIN'	=> 'In order for phpBB to function correctly, the getimagesize function needs to be available.',
	'PCRE_UTF_SUPPORT'					=> 'PCRE UTF-8 support',
	'PCRE_UTF_SUPPORT_EXPLAIN'			=> 'phpBB will not run if your PHP installation is not compiled with UTF-8 support in the PCRE extension.',
	'PHP_JSON_SUPPORT'					=> 'PHP JSON support',
	'PHP_JSON_SUPPORT_EXPLAIN'			=> 'In order for phpBB to function correctly, the PHP JSON extension needs to be available.',
	'PHP_XML_SUPPORT'					=> 'PHP XML/DOM support',
	'PHP_XML_SUPPORT_EXPLAIN'			=> 'In order for phpBB to function correctly, the PHP XML/DOM extension needs to be available.',
	'PHP_SUPPORTED_DB'					=> 'Supported databases',
	'PHP_SUPPORTED_DB_EXPLAIN'			=> 'You must have support for at least one compatible database within PHP. If no database modules are shown as available you should contact your hosting provider or review the relevant PHP installation documentation for advice.',

	'RETEST_REQUIREMENTS'	=> 'Retest requirements',

	'STAGE_REQUIREMENTS'	=> 'Check requirements',
));

// General error messages
$lang = array_merge($lang, array(
	'INST_ERR_MISSING_DATA'		=> 'You must fill out all fields in this block.',

	'TIMEOUT_DETECTED_TITLE'	=> 'The installer detected a timeout',
	'TIMEOUT_DETECTED_MESSAGE'	=> 'The installer has detected a timeout, you may try to refresh the page, which may lead to data corruption. We suggest that you either increase your timeout settings or try to use the CLI.',
));

// Data obtaining translations
$lang = array_merge($lang, array(
	'STAGE_OBTAIN_DATA'	=> 'Set installation data',

	//
	// Admin data
	//
	'STAGE_ADMINISTRATOR'	=> 'Administrator details',

	// Form labels
	'ADMIN_CONFIG'				=> 'Konfigurasi administrator',
	'ADMIN_PASSWORD'			=> 'Kata sandi administrator',
	'ADMIN_PASSWORD_CONFIRM'	=> 'Konfirmasikan kata sandi administrator',
	'ADMIN_PASSWORD_EXPLAIN'	=> 'Silahkan memasukkan kata sandi dengan panjang antara 6 sampai 30 karakter.',
	'ADMIN_USERNAME'			=> 'Nama pengguna administrator',
	'ADMIN_USERNAME_EXPLAIN'	=> 'Silahkan memasukkan nama pengguna dengan panjang antara 6 sampai 20 karakter.',

	// Errors
	'INST_ERR_EMAIL_INVALID'	=> 'Alamat e-mail yang anda masukkan salah.',
	'INST_ERR_PASSWORD_MISMATCH'	=> 'Kata sandi yang dimasukkan tidak cocok.',

	'INST_ERR_PASSWORD_TOO_LONG'	=> 'Kata sandi yang Anda masukkan terlalu panjang. Panjang maksimal adalah 30 karakter.',
	'INST_ERR_PASSWORD_TOO_SHORT'	=> 'Kata sandi yang Anda masukkan terlalu pendek. Panjang minimum adalah 6 karakter.',
	'INST_ERR_USER_TOO_LONG'		=> 'Nama pengguna yang Anda masukkan terlalu panjang. Panjang maksimal adalah 20 karakter.',
	'INST_ERR_USER_TOO_SHORT'		=> 'Nama pengguna yang Anda masukkan terlalu pendek. Panjang minimum adalah 3 karakter.',

	//
	// Board data
	//
	// Form labels
	'BOARD_CONFIG'		=> 'Konfigurasi panel Bulletin',
	'DEFAULT_LANGUAGE'	=> 'Bahasa default',
	'BOARD_NAME'		=> 'Nama Panel',
	'BOARD_DESCRIPTION'	=> 'Penjelasan singkat panel',

	//
	// Database data
	//
	'STAGE_DATABASE'	=> 'Pengaturan database',

	// Form labels
	'DB_CONFIG'				=> 'onfigurasi database',
	'DBMS'					=> 'Tipe database',
	'DB_HOST'					=> 'Nama host server database atau DSN',
	'DB_HOST_EXPLAIN'			=> 'DSN adalah kepanjangan dari Data Source Name dan hanya bertalian untuk instal ODBC. Pada PostgreSQL, gunakan localhost untuk koneksi ke server lokal via soket domain UNIX dan 127.0.0.1 untuk koneksi via TCP. Untuk SQLite, masukkan alamat lengkap ke berkas database anda.',
	'DB_PORT'					=> 'Port server database',
	'DB_PORT_EXPLAIN'			=> 'Biarkan ini kosong kecuali jika anda mengetahui bahwa server tersebut beroperasi pada port non-standard.',
	'DB_PASSWORD'				=> 'Kata sandi database',
	'DB_NAME'					=> 'Nama database name',
	'DB_USERNAME'				=> 'Nama pengguna database',
	'DATABASE_VERSION'		=> 'Versi Database',
	'TABLE_PREFIX'			=> 'Tabel prefix dalam Database',
	'TABLE_PREFIX_EXPLAIN'	=> 'Awalan harus dimulai dengan huruf dan hanya boleh berisi huruf, angka dan garis bawah.',

	// Database options
	'DB_OPTION_MSSQL_ODBC'	=> 'MSSQL Server 2000+ via ODBC',
	'DB_OPTION_MSSQLNATIVE'	=> 'MSSQL Server 2005+ [ Native ]',
	'DB_OPTION_MYSQL'		=> 'MySQL',
	'DB_OPTION_MYSQLI'		=> 'MySQL dengan MySQLi Extension',
	'DB_OPTION_ORACLE'		=> 'Oracle',
	'DB_OPTION_POSTGRES'	=> 'PostgreSQL',
	'DB_OPTION_SQLITE3'		=> 'SQLite 3',

	// Errors
	'INST_ERR_NO_DB'			=> 'Tidak dapat memanggik modul PHP untuk jenis database yang dipilih.',
	'INST_ERR_DB_INVALID_PREFIX'=> 'Awalan yang Anda masukkan tidak valid. Ini harus dimulai dengan sebuah surat dan hanya boleh berisi huruf, angka dan garis bawah.',
	'INST_ERR_PREFIX_TOO_LONG'	=> 'Tabel prefik yang ditentukan terlalu besar. Panjang maksimumnya adalah %d karakter.',
	'INST_ERR_DB_NO_NAME'		=> 'Tidak ada database yang ditentukan.',
	'INST_ERR_DB_FORUM_PATH'	=> 'File database yang anda tentukan dalam susunan direktori halaman anda. Anda harus meletakkan file ini pada lokasi web yang tidak bisa diakses.',
	'INST_ERR_DB_CONNECT'		=> 'Tidak dapat menghubungkan ke database, lihat pesan error di bawah ini.',
	'INST_ERR_DB_NO_WRITABLE'	=> 'Both the database and the directory containing it must be writable.',
	'INST_ERR_DB_NO_ERROR'		=> 'Tidak ada pesan error yang diberikan.',
	'INST_ERR_PREFIX'			=> 'Tabel prefik yang ditentukan sudah ada, silahkan gunakan alternatif lain.',
	'INST_ERR_DB_NO_MYSQLI'		=> 'Versi dari MySQL yang terinstal pada mesin ini tidak cocok dengan pilihan “MySQL dengan Ekstensi MySQLi” yang anda gunakan. Silahkan coba pilihan “MySQL”.',
	'INST_ERR_DB_NO_SQLITE3'	=> 'Versi dari ekstensi SQLite yang anda miliki terlalu lama, harus di upgrade paling tidak ke versi 2.8.2.',
	'INST_ERR_DB_NO_ORACLE'		=> 'Versi dari of Oracle yang diinstal pada mesin ini membutuhkan anda untuk membuat parameter <var>NLS_CHARACTERSET</var> untuk <var>UTF8</var>. Upgrade juga instalasi anda ke versi 9.2+ atau ubah parameternya.',
	'INST_ERR_DB_NO_POSTGRES'	=> 'Database yang anda pilih tidak dibuat dalam coding <var>UNICODE</var> atau <var>UTF8</var>. Cobalah instal dengan database coding <var>UNICODE</var> atau <var>UTF8</var>.',
	'INST_SCHEMA_FILE_NOT_WRITABLE'	=> 'File skema tidak dapat ditulis',

	//
	// Email data
	//
	'EMAIL_CONFIG'	=> 'Konfigurasi E-mail',

	// Package info
	'PACKAGE_VERSION'					=> 'Versi paket terinstal',
	'UPDATE_INCOMPLETE'				=> 'Instalasi phpBB Anda belum diperbarui dengan benar.',
	'UPDATE_INCOMPLETE_MORE'		=> 'Silahkan baca informasi di bawah ini untuk memperbaiki kesalahan ini.',
	'UPDATE_INCOMPLETE_EXPLAIN'		=> '<h1>Update tidak lengkap</h1>

		<p>Kami melihat bahwa update terakhir dari instalasi phpBB Anda belum selesai. Kunjungi <a href="%1$s" title="%1$s">pemutakhiran database</a>, pastikan <em>Update database saja </em> dipilih dan klik <strong>Kirimkan</strong>. Jangan lupa untuk menghapus "install"-direktori setelah Anda memperbarui database dengan sukses.</P>',

	//
	// Server data
	//
	// Form labels
	'UPGRADE_INSTRUCTIONS'         	=> 'Sebuah fitur baru rilis <strong>%1$s</strong> telah tersedia. Silahkan baca <a href="%2$s" title="%2$s"><strong>pengumuman rilis</strong></a> untuk mempelajari apa-apa saja yang ditawarkan, dan cara pembaruannya.',
	'SERVER_CONFIG'				=> 'Konfigurasi server',
	'SCRIPT_PATH'				=> 'Lokasi skrip',
	'SCRIPT_PATH_EXPLAIN'		=> 'Lokasi dimana phpBB ditempatkan relatif ke nama domain, contoh: <samp>/phpBB3</samp>.',
));

// Default database schema entries...
$lang = array_merge($lang, array(
	'CONFIG_BOARD_EMAIL_SIG'		=> 'Terima kasih, Manajemen',
	'CONFIG_SITE_DESC'				=> 'Teks singkat untuk menjelaskan forum anda',
	'CONFIG_SITENAME'				=> 'domainanda.com',

	'DEFAULT_INSTALL_POST'			=> 'Ini adalah post percontohan pada instalsi phpBB3 anda. Sepertinya semua berjalan lancar. Anda bisa menghapus post ini jika diingini dan melanjutkan pengaturan halaman anda. Selama proses instalasi, kategori dan forum pertama anda diberikan sekumpulan perizinan untuk pengguna yang sudah dikenal seperti administrators, bots, global moderator, tamu, pengguna terdaftar dan pengguna terdaftar COPPA. Jika anda memilih untuk menghapus kategori dan forum pertama anda, jangan lupa untuk memberikan perizinan untuk semua grup pengguna untuk semua kategori dan forum yang sudah dibuat. Disarankan agar mengganti nama kategori dan forum pertama anda dan menyalin perizinannya pada saat membuat kategori dan forum yang baru. Selamat bersenang-senang!',

	'FORUMS_FIRST_CATEGORY'			=> 'Kategori pertama anda',
	'FORUMS_TEST_FORUM_DESC'		=> 'Penjelasan tentang forum pertama anda.',
	'FORUMS_TEST_FORUM_TITLE'		=> 'Forum pertama anda',

	'RANKS_SITE_ADMIN_TITLE'		=> 'Site Admin',
	'REPORT_WAREZ'					=> 'Posting tersebut mengandung link ke perangkat lunak ilegal ataupun bajakan.',
	'REPORT_SPAM'					=> 'Posting yand dilaporkan hanya mempunyai tujuan untuk mengiklankan sebuah website atau produk lain.',
	'REPORT_OFF_TOPIC'				=> 'Posting yand dilaporkan diluar dari pembicaraan topik.',
	'REPORT_OTHER'					=> 'Posting yand dilaporkan tidak cocok di kategori manapun, mohon gunakan isian untuk informasi lebih jelas.',

	'SMILIES_ARROW'					=> 'Panah',
	'SMILIES_CONFUSED'				=> 'Bingung',
	'SMILIES_COOL'					=> 'Keren',
	'SMILIES_CRYING'				=> 'Menangis atau Sangat Sedih',
	'SMILIES_EMARRASSED'			=> 'Bingung',
	'SMILIES_EVIL'					=> 'Jahat atau Sangat Marah',
	'SMILIES_EXCLAMATION'			=> 'Seruan',
	'SMILIES_GEEK'					=> 'Canggung',
	'SMILIES_IDEA'					=> 'Ide',
	'SMILIES_LAUGHING'				=> 'Tertawa',
	'SMILIES_MAD'					=> 'Marah',
	'SMILIES_MR_GREEN'				=> 'Mr. Green',
	'SMILIES_NEUTRAL'				=> 'Netral',
	'SMILIES_QUESTION'				=> 'Bertanya',
	'SMILIES_RAZZ'					=> 'Razz',
	'SMILIES_ROLLING_EYES'			=> 'Rolling Eyes',
	'SMILIES_SAD'					=> 'Sad',
	'SMILIES_SHOCKED'				=> 'Terkejut',
	'SMILIES_SMILE'					=> 'Senyum',
	'SMILIES_SURPRISED'				=> 'Kejutan',
	'SMILIES_TWISTED_EVIL'			=> 'Setan Belit',
	'SMILIES_UBER_GEEK'				=> 'Sangat Canggung',
	'SMILIES_VERY_HAPPY'			=> 'Sangat Senang',
	'SMILIES_WINK'					=> 'Berkedip',

	'TOPICS_TOPIC_TITLE'			=> 'Selamat datang di phpBB3',
));

// Common navigation items' translation
$lang = array_merge($lang, array(
	'MENU_OVERVIEW'		=> 'Ikhtisar',
	'MENU_INTRO'		=> 'Pendahuluan',
	'MENU_LICENSE'		=> 'Lisensi',
	'MENU_SUPPORT'		=> 'Dukungan',
));

// Task names
$lang = array_merge($lang, array(
	// Install filesystem
	'TASK_CREATE_CONFIG_FILE'	=> 'Membuat file konfigurasi',

	// Install database
	'TASK_ADD_CONFIG_SETTINGS'			=> 'Menambahkan  pengaturan konfigurasi',
	'TASK_ADD_DEFAULT_DATA'				=> 'Menambahkan pengaturan default ke database',
	'TASK_CREATE_DATABASE_SCHEMA_FILE'	=> 'Membuat file skema database',
	'TASK_SETUP_DATABASE'				=> 'Menyiapkan database',
	'TASK_CREATE_TABLES'				=> 'Membuat tabel',

	// Install data
	'TASK_ADD_BOTS'				=> 'Mendaftarkan bot',
	'TASK_ADD_LANGUAGES'		=> 'Menginstal bahasa yang tersedia',
	'TASK_ADD_MODULES'			=> 'Memasang modul',
	'TASK_CREATE_SEARCH_INDEX'	=> 'Membuat indeks pencarian',

	// Install finish tasks
	'TASK_INSTALL_EXTENSIONS'	=> 'Memasang ekstensi paket',
	'TASK_NOTIFY_USER'			=> 'Mengirimkan e-mail pemberitahuan',
	'TASK_POPULATE_MIGRATIONS'	=> 'Mengisi migrasi',

	// Installer general progress messages
	'INSTALLER_FINISHED'	=> 'Berhasil meyelesaikan Instalasi',
));

// Installer's general messages
$lang = array_merge($lang, array(
	'MODULE_NOT_FOUND'				=> 'Modul tidak ditemukan',
	'MODULE_NOT_FOUND_DESCRIPTION'	=> 'Modul tidak dapat ditemukan karena layanan, %s , tidak terdefinisi.',

	'TASK_NOT_FOUND'				=> 'Tugas tidak ditemukan',
	'TASK_NOT_FOUND_DESCRIPTION'	=> 'Tugas tidak dapat ditemukan karena layanan, %s, tidak terdefinisi.',

	'SKIP_MODULE'	=> 'Skip “%s” module',
	'SKIP_TASK'		=> 'Skip “%s” task',

	'TASK_SERVICE_INSTALLER_MISSING'	=> 'Semua layanan tugas installer seharusnya dimulai “installer”',
	'TASK_CLASS_NOT_FOUND'				=> 'Installer definisi tugas layanan tidak valid Nama layanan “%1$s” , yang diharapkan adalah “%2$s” . Untuk informasi lebih lanjut silahkan lihat dokumentasi task_interface.',

	'INSTALLER_CONFIG_NOT_WRITABLE'	=> 'installer file konfigurasi tidak dapat ditulis.',
));

// CLI messages
$lang = array_merge($lang, array(
	'CLI_INSTALL_BOARD'				=> 'Pasang phpBB',
	'CLI_UPDATE_BOARD'				=> 'Perbarui phpBB',
	'CLI_INSTALL_SHOW_CONFIG'		=> 'Tampilkan konfigurasi yang akan digunakan',
	'CLI_INSTALL_VALIDATE_CONFIG'	=> 'Validasi file konfigurasi',
	'CLI_CONFIG_FILE'				=> 'Config file yang akan digunakan',
	'MISSING_FILE'					=> 'Tidak dapat mengakses file %1$s',
	'MISSING_DATA'					=> 'File konfigurasi tidak memiliki data atau mungkin berisi pengaturan yang tidak benar.',
	'INVALID_YAML_FILE'				=> 'Tidak bisa mengurai file YAML %1$s',
	'CONFIGURATION_VALID'			=> 'File konfigurasi valid',
));

// Common updater messages
$lang = array_merge($lang, array(
	'UPDATE_INSTALLATION'			=> 'Perbarui intalasi phpBB',
    'UPDATE_INSTALLATION_EXPLAIN'   => 'Dengan opsi ini, Anda dapat memperbarui instalasi phpBB Anda ke versi terbaru. <br /> <br /> Selama proses semua file Anda akan diperiksa integritasnya. Anda dapat meninjau semua perbedaan dan file sebelum update. Pembaruan file itu sendiri dapat dilakukan dengan dua cara yang berbeda.</P><h2>Update Manual</h2><p>Dengan Pembaruan ini hanya mendownload file perubahan pribadi Anda untuk memastikan Anda tidak kehilangan modifikasi file yang mungkin telah Anda lakukan. Setelah Anda mendownload paket ini, Anda perlu mengunggah file secara manual ke posisi yang benar di bawah direktori root phpBB Anda. Setelah selesai, Anda dapat melakukan tahap pemeriksaan file lagi untuk mengetahui apakah Anda memindahkan file ke lokasi yang benar.</P><h2>Pembaruan Otomatis dengan FTP</h2><p> Metode ini serupa dengan yang pertama. satu tapi tanpa perlu mendownload file yang telah diubah dan mengunggahnya sendiri. Ini akan dilakukan untuk Anda. Untuk menggunakan metode ini Anda perlu mengetahui rincian login FTP Anda karena Anda akan dimintai untuknya. Setelah selesai Anda akan diarahkan ke file check lagi untuk memastikan semuanya terupdate dengan benar.<br /><br />',
    'UPDATE_INSTRUCTIONS'			=> '

		<h1>Pengumuman Rilis</h1>

		<p>Silahkan baca pengumuman rilis untuk versi terbaru sebelum anda melanjutkan proses pembaruan anda, hal tersebut mungkin mengandung informasi yang penting. Juga mengandung link download lengkap sesuai dengan log perubahannya.</p>

		<br />

		<h1>Bagaimana membarui instalasi anda dengan Paket Pembaruan Otomatis</h1>

		<p>Cara yang disarankan untuk memperbarui instalasi anda yang dijelaskan di sini hanya berguna untuk automatic update package. Anda juga bisa memperbarui instalasi anda dengan metode yang diberikan pada dokument INSTALL.html document. Tahap-tahap untuk memperbarui phpBB3 secara otomatis adalah:</p>

		<ul style="margin-left: 20px; font-size: 1.1em;">
			<li>Kunjungi <a href="https://www.phpbb.com/downloads/" title="https://www.phpbb.com/downloads/">Halaman Unduhan di phpBB.com</a>dan download arsip "Automatic Update Package".<br /><br /></li>
			<li>Buka/unpack file arsip.<br /><br /></li>
			<li>Upload folder install dan vendor yang yang sudah dibuka/unpack seluruhnya ke direktori root phpBB anda (dimana file config.php ditempatkan).<br /><br /></li>
		</ul>

		<p>Setelah diupload halaman anda akan menjadi offline untuk pengguna biasa yang disebabkan oleh adanya direktori install yang anda upload.<br /><br />
		<strong><a href="%1$s" title="%1s">Mulailah proses pembaruan sekarang dengan mengarahkan browser anda ke folder install</a>.</strong><br />
		<br />
		Untuk selanjutnya anda akan dibimbing selama proses pembaruan. Anda akan segera diberitahu jika pembaruan tersebut sudah selesai.
		</p>
	',
));

// Updater forms
$lang = array_merge($lang, array(
	// Updater types
	'UPDATE_TYPE'			=> 'Tipe pembaruan yang akan dilaksanakan',

	'UPDATE_TYPE_ALL'		=> 'Pembaruan filesystem dan database',
	'UPDATE_TYPE_DB_ONLY'	=> 'Hanya pembaruan database',

	// File updater methods
	'UPDATE_FILE_METHOD_TITLE'		=> 'File updater methods',

	'UPDATE_FILE_METHOD'			=> 'Metode updater file',
	'UPDATE_FILE_METHOD_DOWNLOAD'	=> 'Download file yang dimodifikasi dalam arsip',
	'UPDATE_FILE_METHOD_FTP'		=> 'Perbarui file melalui FTP (Otomatis)',
	'UPDATE_FILE_METHOD_FILESYSTEM'	=> 'Perbarui file melalui akses file langsung (Otomatis)',

	// File updater archives
	'SELECT_DOWNLOAD_FORMAT'	=> 'Pilih format arsip download',

	// FTP settings
	'FTP_SETTINGS'					=> 'Pengaturan FTP',
));

// Requirements messages
$lang = array_merge($lang, array(
	'UPDATE_FILES_NOT_FOUND'	=> 'Tidak ada direktori update yang valid ditemukan, pastikan Anda mengupload file yang relevan.',

	'NO_UPDATE_FILES_UP_TO_DATE'	=> 'Versi anda sudah terbarukan. Tidak perlu untuk melakukan pembaruan. Jika anda ingin membuat sebuah pemeriksaan integritas pada file anda, silahkan upload file pembaruan yang benar.',
	'OLD_UPDATE_FILES'		=> 'File-file pembaruan sudah usang. File pembaruan yang ditemukan adalah untuk pembaruan dari phpBB %1$s ke phpBB %2$s tetapi versi terbaru dari phpBB adalah %3$s.',
	'INCOMPATIBLE_UPDATE_FILES'		=> 'File-file update yang ditemukan tidak cocok dengan versi yang anda instal. Versi yang anda instal adalah %1$s dan file pembaruannya untuk pembaruan phpBB %2$s ke %3$s.',
));

// Update files
$lang = array_merge($lang, array(
	'STAGE_UPDATE_FILES'		=> 'Perbarui file',

	// Check files
	'UPDATE_CHECK_FILES'	=> 'Periksa file yang akan diupdate',

	// Update file differ
	'FILE_DIFFER_ERROR_FILE_CANNOT_BE_READ'	=> 'File berbeda gagal dibuka %s.',

	'UPDATE_FILE_DIFF'		=> 'File berubah',
	'ALL_FILES_DIFFED'		=> 'Semua file yang dimodifikasi telah dibedakan.',

	// File status
	'UPDATE_CONTINUE_FILE_UPDATE'	=> 'Update files',

	'DOWNLOAD'							=> 'Download',
	'DOWNLOAD_CONFLICTS'				=> 'Download merge conflicts archive',
	'DOWNLOAD_CONFLICTS_EXPLAIN'		=> 'Search for &lt;&lt;&lt; to spot conflicts',
	'DOWNLOAD_UPDATE_METHOD'			=> 'Download modified files archive',
	'DOWNLOAD_UPDATE_METHOD_EXPLAIN'	=> 'Once downloaded you should unpack the archive. You will find the modified files you need to upload to your phpBB root directory within it. Please upload the files to their respective locations then. After you have uploaded all files, you may continue with the update process.',

	'FILE_ALREADY_UP_TO_DATE'		=> 'File sudah yang terbarukan.',
	'FILE_USED'						=> 'Informasi yang digunakan dari',			// Single file
	'FILES_CONFLICT'				=> 'File-file konflik',
	'FILES_CONFLICT_EXPLAIN'		=> 'File berikut dimodifikasi dan bukan sebagai file asli dari versi yang lama. phpBB menentukan bahwa file-file ini menimbulkan konflik jika dicoba digabungkan. Silahkan diperiksa konflik tersebut dan cobalah menyelesaikan secara manual atau lanjutkan pembaruan dengan memilih metode penggabungan yang dikehendaki. Jika anda menyelesaikan konflik tersebut secara manual, silahkan periksa file-file tersebut kembali setelah anda memodifikasinya. Anda juga boleh memilih metode yang dikehendaki untuk menggabungkan setiap file. Yang pertama akan menghasilkan sebuah file dimana baris konflik dari file lama anda akan dihapus, sedangkan metode yang lain akan menghilangkan perubahan dari file yang baru.',
	'FILES_DELETED'					=> 'File dihapus',
	'FILES_DELETED_EXPLAIN'			=> 'File berikut tidak ditemukan di versi yang baru. File ini harus dihapus dari instalasi anda.',
	'FILES_MODIFIED'				=> 'File-file yang dimodifikasi',
	'FILES_MODIFIED_EXPLAIN'		=> 'File-file berikut dimodifikasi yang tidak menunjukkan file-file asli anda dari versi yang lama. File yang diperbarui akan digabungkan antara modifikasi anda dan file yang baru.',
	'FILES_NEW'						=> 'File-file baru',
	'FILES_NEW_EXPLAIN'				=> 'File-file berikut tidak ada lagi pada instalasi anda. File-file ini akan ditambahkan ke pada instalasi anda.',
	'FILES_NEW_CONFLICT'			=> 'File-file konflik yang baru',
	'FILES_NEW_CONFLICT_EXPLAIN'	=> 'File-file berikut ini baru pada versi terakhir anda, akan tetapi sudah ada nama file yang sama pada lokasi yang sama. File-file ini akan ditulis ulang menjadi file yang baru.',
	'FILES_NOT_MODIFIED'			=> 'Bukan file-file yang dimodifikasi',
	'FILES_NOT_MODIFIED_EXPLAIN'	=> 'File-file berikut ini tidak dimodifikasi dan merupakan file phpBB yang asli dari versi yang ingin anda perbarui.',
	'FILES_UP_TO_DATE'				=> 'Sudah merupakan file-file yang terbarukan',
	'FILES_UP_TO_DATE_EXPLAIN'		=> 'File-file berikut ini sudah merupakan file-file yang terbarukan tidak memerlukan pembaruan.',
	'FILES_VERSION'					=> 'Versi file',
	'TOGGLE_DISPLAY'				=> 'Lihat/Sembunyi daftar file',

	// File updater
	'UPDATE_UPDATING_FILES'	=> 'Updating files',

	'UPDATE_FILE_UPDATER_HAS_FAILED'	=> 'File updater “%1$s“ has failed. The installer will try to fallback to “%2$s“.',
	'UPDATE_FILE_UPDATERS_HAVE_FAILED'	=> 'The file updater failed. No further fallback methods are available.',

	'UPDATE_CONTINUE_UPDATE_PROCESS'	=> 'Continue update process',
	'UPDATE_RECHECK_UPDATE_FILES'		=> 'Check files again',
));

// Update database
$lang = array_merge($lang, array(
	'STAGE_UPDATE_DATABASE'		=> 'Update database',

	'INLINE_UPDATE_SUCCESSFUL'		=> 'The database update was successful.',

	'TASK_UPDATE_EXTENSIONS'	=> 'Updating extensions',
));

// Converter
$lang = array_merge($lang, array(
	// Common converter messages
	'CONVERT_NOT_EXIST'			=> 'The specified convertor does not exist.',
	'DEV_NO_TEST_FILE'			=> 'No value has been specified for the test_file variable in the convertor. If you are a user of this convertor, you should not be seeing this error, please report this message to the convertor author. If you are a convertor author, you must specify the name of a file which exists in the source board to allow the path to it to be verified.',
	'COULD_NOT_FIND_PATH'		=> 'Could not find path to your former board. Please check your settings and try again.<br />» %s was specified as the source path.',
	'CONFIG_PHPBB_EMPTY'		=> 'The phpBB3 config variable for “%s” is empty.',

	'MAKE_FOLDER_WRITABLE'			=> 'Mohon diperiksa apakah folder tersebut ada dan bisa ditulis oleh lalu coba lagi:<br />»<strong>%s</strong>.',
	'MAKE_FOLDERS_WRITABLE'			=> 'Mohon diperiksa apakah folder-folder tersebut tersebut ada dan bisa ditulis oleh lalu coba lagi:<br />»<strong>%s</strong>.',

	'INSTALL_TEST'				=> 'Coba lagi',

	'NO_TABLES_FOUND'			=> 'No tables found.',
	'TABLES_MISSING'			=> 'Could not find these tables<br />» <strong>%s</strong>.',
	'CHECK_TABLE_PREFIX'		=> 'Please check your table prefix and try again.',

	// Conversion in progress
	'CONTINUE_CONVERT'			=> 'Lanjutkan konversi',
	'CONTINUE_CONVERT_BODY'		=> 'Percobaan konversi sebelumnya telah ditentukan. Sekarang anda dapat memilih antara memulai konversi yang baru atau melanjutkan konversi.',
	'CONVERT_NEW_CONVERSION'	=> 'Konversi baru',
	'CONTINUE_OLD_CONVERSION'	=> 'Lanjutkan konversi yang dimulai sebelumnya',

	// Start conversion
	'SUB_INTRO'					=> 'Pengenalan',
	'CONVERT_INTRO'				=> 'Selamat datang di phpBB Unified Convertor Framework',
	'CONVERT_INTRO_BODY'		=> 'Di sini anda dapat mengimport data dari sistem halaman lain yang sudah terinstal. Daftar berikut menunjukkan modul yang sudah tersedia. Jika tidak ada konvertor yang ditampilkan pada daftar ini yang bisa dikonversikan, silahkan lihat website kami untuk modul konversi lebih lanjut yang bisa didownload.',
	'AVAILABLE_CONVERTORS'		=> 'Konvertor yang tersedia',
	'NO_CONVERTORS'					=> 'Tidak ada konvertor yang tersedia.',
	'CONVERT_OPTIONS'			=> 'Pilihan-pilihan',
	'SOFTWARE'					=> 'Perangkat Lunak Halaman',
	'VERSION'					=> 'Versi',
	'CONVERT'					=> 'Konversikan',

	// Settings
	'STAGE_SETTINGS'			=> 'Pengaturan',
	'TABLE_PREFIX_SAME'			=> 'Prefik tabel harus digunakan oleh perangkat lunak yang anda konversikan.<br />» Prefik tabel yang ditentukan adalah %s.',
	'DEFAULT_PREFIX_IS'			=> 'Konvertor tidak dapat menemukan tabel dengan prefix yang ditentukan. Please make sure you have entered the correct details for the board you are converting from. The default table prefix for %1$s is <strong>%2$s</strong>.',
	'SPECIFY_OPTIONS'			=> 'Tentukan pilihan konversi',
	'FORUM_PATH'				=> 'Path halaman',
	'FORUM_PATH_EXPLAIN'		=> 'Ini adalah path <strong>relative</strong> di disk ke halaman terdahulu anda dari <strong>root instalasi phpBB ini</strong>.',
	'REFRESH_PAGE'				=> 'Refresh halaman untuk melanjutkan konversi',
	'REFRESH_PAGE_EXPLAIN'		=> 'Jika dipilih ya, konvertor akan melakukan refresh halaman untuk melanjutkan konversi setelah suatu tahap diselesaikan. Jika ini merupakan konversi pertama anda, untuk tujuan percobaan dan menentukan beberapa kesalahan nantinya, kami menyarankan untuk membuat ini menjadi Tidak.',

	// Conversion
	'STAGE_IN_PROGRESS'			=> 'Konversi sedang dalam progres',

	'AUTHOR_NOTES'				=> 'Catatan pengarang<br />» %s',
	'STARTING_CONVERT'			=> 'Memulai proses konversi',
	'CONFIG_CONVERT'			=> 'Mengkonversikan konfigurasi',
	'DONE'						=> 'Selesai',
	'PREPROCESS_STEP'				=> 'Mengeksekusi fungsi/query pra-proses',
	'FILLING_TABLE'				=> 'Tabel isian <strong>%s</strong>',
	'FILLING_TABLES'			=> 'Tabel-tabel isian',
	'DB_ERR_INSERT'				=> 'Error pada saat memproses query <code>INSERT</code>.',
	'DB_ERR_LAST'				=> 'Error pada saat memproses query <var>query_last</var>.',
	'DB_ERR_QUERY_FIRST'		=> 'Error pada saat mengeksekusi <var>query_first</var>.',
	'DB_ERR_QUERY_FIRST_TABLE'	=> 'Error pada saat mengeksekusi <var>query_first</var>, %s (“%s”).',
	'DB_ERR_SELECT'				=> 'Error pada saat menjalankan query <code>SELECT</code>.',
	'STEP_PERCENT_COMPLETED'	=> 'Tahap <strong>%d</strong> dari <strong>%d</strong>',
	'FINAL_STEP'				=> 'Langkah terakhir proses',
	'SYNC_FORUMS'				=> 'Memulai menyinkronisasi forum',
	'SYNC_POST_COUNT'			=> 'Menyinkronisasi post_counts',
	'SYNC_POST_COUNT_ID'		=> 'Menyinkronisasi post_counts dari <var>masukan</var> %1$s ke %2$s.',
	'SYNC_TOPICS'				=> 'Memulai menyinkron topik',
	'SYNC_TOPIC_ID'				=> 'Menyinkron topik dari <var>topic_id</var> %1$s ke %2$s.',
	'PROCESS_LAST'					=> 'Memproses pernyataan terakhir',
	'UPDATE_TOPICS_POSTED'		=> 'Menggenerasikan topik yang dipost',
	'UPDATE_TOPICS_POSTED_ERR'	=> 'Sebuah error terjadi pada saat menggenerasikan informasi topik yang dipost. Anda masih dapat mencoba tahap ini pada Papan Pengaturan Pengguna setelah proses konversi selesai.',
	'CONTINUE_LAST'				=> 'Lanjutkan pernyataan terakhir',
	'CLEAN_VERIFY'				=> 'Membersihakn dan memverifikasi struktur terakhir',
	'NOT_UNDERSTAND'				=> 'Tidak dapat dimengerti %s #%d, tabel %s (“%s”)',
	'NAMING_CONFLICT'				=> 'Konflik penamaan: %s dan %s adalah sama-sama alias<br /><br />%s',

	// Finish conversion
	'CONVERT_COMPLETE'			=> 'Konversi selesai',
	'CONVERT_COMPLETE_EXPLAIN'	=> 'Sekarang anda telah berhasil mengkonversikan halaman anada menjadi phpBB 3.0. Sekarang anda bisa masuk <a href="../">mengakses halaman</a>. Mohon diperiksa apakah pengaturan yang ditransfer sudah benar sebelum mengaktifkan halaman anda dengan menghapus direktori instal. Ingatlah bahwa bantuan untuk menggunakan phpBB tersedia online melalui <a href="http://www.phpbb.com/support/documentation/3.0/">Documentation</a> and the <a href="http://www.phpbb.com/community/viewforum.php?f=46">support forums</a>.',

	'CONV_ERROR_ATTACH_FTP_DIR'			=> 'FTP upload untuk lampiran diaktifkan pada halaman yang lama. Silahkan nonaktifkan pilihan FTP upload dan periksa direktori upload yang ditentukan sudah benar, lalu salin semua file lampiran ke direktori web yang bisa diakses. Lakukan restart konvertor setelah anda selesai melakukannya.',
	'CONV_ERROR_CONFIG_EMPTY'			=> 'Tidak ada informasi konfigurasi yang tersedia untuk konversi tersebut.',
	'CONV_ERROR_FORUM_ACCESS'			=> 'Tidak bisa mengakses informasi.',
	'CONV_ERROR_GET_CATEGORIES'			=> 'Tidak bisa mendapatkan kategori.',
	'CONV_ERROR_GET_CONFIG'				=> 'Tidak bisa mendapatkan kembali konfigurasi halaman.',
	'CONV_ERROR_COULD_NOT_READ'			=> 'Tidak bisa mengakses/membaca “%s”.',
	'CONV_ERROR_GROUP_ACCESS'			=> 'Tidak bisa mendapatkan informasi otentifikasi grup.',
	'CONV_ERROR_INCONSISTENT_GROUPS'	=> 'Tabel grup yang tidak tetap dideteksi di add_bots() - anda harus menambahkan semua grup spesial jika anda melakukannya secara manual.',
	'CONV_ERROR_INSERT_BOT'				=> 'Tidak dapat memasukkan bot ke tabel pengguna.',
	'CONV_ERROR_INSERT_BOTGROUP'		=> 'Tidak dapat memasukkan bot ke tabel bot.',
	'CONV_ERROR_INSERT_USER_GROUP'		=> 'Tidak dapat memasukkan pengguna ke table user_group.',
	'CONV_ERROR_MESSAGE_PARSER'			=> 'Pemisah pesan error',
	'CONV_ERROR_NO_AVATAR_PATH'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'avatar_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_FORUM_PATH'			=> 'Lokasi relatif ke sumber halaman belum ditentukan.',
	'CONV_ERROR_NO_GALLERY_PATH'		=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'avatar_gallery_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_GROUP'				=> 'Grup “%1$s” tidak ditemukan di %2$s.',
	'CONV_ERROR_NO_RANKS_PATH'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'ranks_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_SMILIES_PATH'		=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'smilies_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_NO_UPLOAD_DIR'			=> 'Catatan untuk pengembang: anda harus menentukan $convertor[\'upload_path\'] untuk digunakan sebagai %s.',
	'CONV_ERROR_PERM_SETTING'			=> 'Tidak dapat memasukkan/memperbaharui pengaturan perizinan.',
	'CONV_ERROR_PM_COUNT'				=> 'Tidak dapat memilih folder penghitungan pesan pribadi.',
	'CONV_ERROR_REPLACE_CATEGORY'		=> 'Tidak dapat memasukkan forum baru yang menggantikan kategori yang lama.',
	'CONV_ERROR_REPLACE_FORUM'			=> 'Tidak dapat memasukkan forum baru yang menggantikan forum yang lama.',
	'CONV_ERROR_USER_ACCESS'			=> 'Tidak dapat mengambil informasi otentifikasi pengguna.',
	'CONV_ERROR_WRONG_GROUP'			=> 'Grup “%1$s” yang ditentukan dalam %2$s salah.',
	'CONV_OPTIONS_BODY'					=> 'Halaman ini mengumpulkan data yang dibuthkan untuk mengakses ke sumber halaman. Masukkan keterangan database Masukkan keterangan database halaman anda yang terdahulu; konverter tidak akan mengubah apapun dalam database yang diberikan di bawah ini. Sumbar halaman seharusnya dinonaktifkan untuk mengijinkan konversi yang konsisten.',
	'CONV_SAVED_MESSAGES'				=> 'Pesan yang disimpan',

	'PRE_CONVERT_COMPLETE'			=> 'Semua tahap pra-konversi sudah berhasil diselesaikan. Sekarang anda boleh memulai proses konversi aktualnya. Mohon dicatat bahwa anda harus melakukannya secara manual dan mengatur beberapa hal. Setelah konversi, silahkan periksa perizinan yang diberikan, bangun kembali indeks pencarian anda yang tidak dikonversikan dan periksa file-file tersalin dengan benar, sebagai contoh avatar dan tanda Smiley.',
));
