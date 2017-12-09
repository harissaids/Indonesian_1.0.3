<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: cli.php 2017 harissaids@gmail.com
 * @copyright (c) 2017 Harissaid Alewni http://www.triutama.com
 * @license GNU General Public License, version 2 (GPL-2.0)
 *
 *
 */


if (!defined('IN_PHPBB'))
{
	exit;
}

/**
* DO NOT CHANGE
*/
if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'CLI_CONFIG_CANNOT_CACHED'			=> 'Tetapkan opsi ini jika opsi konfigurasi berubah terlalu sering untuk di-cache secara efisien.',
	'CLI_CONFIG_CURRENT'				=> 'Nilai konfigurasi saat ini, gunakan 0 dan 1 untuk menentukan nilai boolean',
	'CLI_CONFIG_DELETE_SUCCESS'			=> 'Berhasil menghapus konfigurasi %s.',
	'CLI_CONFIG_NEW'					=> 'Nilai konfigurasi baru, gunakan 0 dan 1 untuk menentukan nilai boolean',
	'CLI_CONFIG_NOT_EXISTS'				=> 'Konfigurasi %s tidak ada',
	'CLI_CONFIG_OPTION_NAME'			=> 'Nama opsi konfigurasi',
	'CLI_CONFIG_PRINT_WITHOUT_NEWLINE'	=> 'Atur opsi ini jika nilai yang akan dicetak tanpa baris baru di akhir.',
	'CLI_CONFIG_INCREMENT_BY'			=> 'Jumlah untuk penambahan menurut',
	'CLI_CONFIG_INCREMENT_SUCCESS'		=> 'Berhasil menambahkan konfigurasi %s',
	'CLI_CONFIG_SET_FAILURE'			=> 'Tidak bisa mengatur konfigurasi %s',
	'CLI_CONFIG_SET_SUCCESS'			=> 'Berhasil mengatur konfigurasi %s',

	'CLI_DESCRIPTION_CRON_LIST'					=> 'Mencetak daftar tugas cron yang sudah ada dan yang belum siap.',
	'CLI_DESCRIPTION_CRON_RUN'					=> 'Menjalankan semua tugas cron siap.',
	'CLI_DESCRIPTION_CRON_RUN_ARGUMENT_1'		=> 'Nama tugas yang harus dijalankan',
	'CLI_DESCRIPTION_DB_LIST'					=> 'Daftar semua migrasi yang terinstal dan tersedia.',
	'CLI_DESCRIPTION_DB_MIGRATE'				=> 'Memperbarui database dengan menerapkan migrasi.',
	'CLI_DESCRIPTION_DB_REVERT'					=> 'Memulihkan ke salah satu migrasi.',
	'CLI_DESCRIPTION_DELETE_CONFIG'				=> 'Menghapus opsi konfigurasi',
	'CLI_DESCRIPTION_DISABLE_EXTENSION'			=> 'Nonaktifkan ekstensi yang ditentukan.',
	'CLI_DESCRIPTION_ENABLE_EXTENSION'			=> 'Mengaktifkan ekstensi yang ditentukan.',
	'CLI_DESCRIPTION_FIND_MIGRATIONS'			=> 'Menemukan migrasi yang tidak memiliki tergantungan.',
	'CLI_DESCRIPTION_FIX_LEFT_RIGHT_IDS'		=> 'Memperbaiki struktur dari forum dan modul.',
	'CLI_DESCRIPTION_GET_CONFIG'				=> 'Mendapatkan nilai opsi konfigurasi',
	'CLI_DESCRIPTION_INCREMENT_CONFIG'			=> 'Menambah nilai integer opsi konfigurasi',
	'CLI_DESCRIPTION_LIST_EXTENSIONS'			=> 'Daftar semua ekstensi di database dan pada filesystem.',

	'CLI_DESCRIPTION_OPTION_ENV'				=> 'Nama lingkungan.',
	'CLI_DESCRIPTION_OPTION_SAFE_MODE'			=> 'Jalankan di Safe Mode (tanpa ekstensi).',
	'CLI_DESCRIPTION_OPTION_SHELL'				=> 'Luncurkan shell.',

	'CLI_DESCRIPTION_PURGE_EXTENSION'			=> 'Membersihkan ekstensi yang ditentukan',

	'CLI_DESCRIPTION_REPARSER_LIST'						=> 'Daftar jenis teks yang bisa Reparses.',
	'CLI_DESCRIPTION_REPARSER_AVAILABLE'				=> 'Reparses yang tersedia:',
	'CLI_DESCRIPTION_REPARSER_REPARSE'					=> 'Reparses teks yang tersimpan dengan layanan text_formatter saat ini.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_ARG_1'			=> 'Jenis teks untuk reparse. Tinggalkan kosong untuk reparse semuanya.',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_DRY_RUN'		=> 'Jangan simpan perubahan apapun; cetak saja apa yang akan terjadi',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MIN'	=> 'Data ID terendah untuk diproses',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_MAX'	=> 'Data ID tertinggi intuk diproses',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RANGE_SIZE'	=> 'Perkiraan jumlah record yang akan diproses sekaligus',
	'CLI_DESCRIPTION_REPARSER_REPARSE_OPT_RESUME'		=> 'Mulai reparsing dimana eksekusi terakhir berhenti',

	'CLI_DESCRIPTION_RECALCULATE_EMAIL_HASH'			=> 'Kalkulasi ulang tabel user_email_hash pengguna.',

	'CLI_DESCRIPTION_SET_ATOMIC_CONFIG'					=> 'Menetapkan nilai opsi konfigurasi hanya jika yang lama sama dengan nilai saat ini',
	'CLI_DESCRIPTION_SET_CONFIG'						=> 'Menetapkan nilai opsi konfigurasi',

	'CLI_DESCRIPTION_THUMBNAIL_DELETE'					=> 'Hapus semua thumbnail yang ada.',
	'CLI_DESCRIPTION_THUMBNAIL_GENERATE'				=> 'Buat semua thumbnail yang hilang.',
	'CLI_DESCRIPTION_THUMBNAIL_RECREATE'				=> 'Buat kembali semua thumbnail.',

	'CLI_DESCRIPTION_UPDATE_CHECK'					=> 'Periksa apakah Panel up to date.',
	'CLI_DESCRIPTION_UPDATE_CHECK_ARGUMENT_1'		=> 'Nama ekstensi untuk memeriksa (jika semua, periksa semua ekstensi)',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_CACHE'		=> 'Jalankan perintah cek dengan cache.',
	'CLI_DESCRIPTION_UPDATE_CHECK_OPTION_STABILITY'	=> 'Jalankan perintah dan hanya memeriksa versi stabil atau tidak stabil.',

	'CLI_DESCRIPTION_UPDATE_HASH_BCRYPT'		=> 'Perbarui kata sandi lama hashes menjadi hashed dengan bcrypt.',

	'CLI_ERROR_INVALID_STABILITY' => '"%s" perlu diatur ke "stabil" atau "tidak stabil".',

	'CLI_DESCRIPTION_USER_ACTIVATE'				=> 'Aktifkan (atau nonaktifkan) akun pengguna.',
	'CLI_DESCRIPTION_USER_ACTIVATE_USERNAME'	=> 'Username dari akun untuk mengaktifkan.',
	'CLI_DESCRIPTION_USER_ACTIVATE_DEACTIVATE'	=> 'Nonaktifkan akun pengguna',
	'CLI_DESCRIPTION_USER_ACTIVATE_ACTIVE'		=> 'Pengguna sudah aktif.',
	'CLI_DESCRIPTION_USER_ACTIVATE_INACTIVE'	=> 'Pengguna sudah tidak aktif.',
	'CLI_DESCRIPTION_USER_ADD'					=> 'Tambahkan pengguna baru.',
	'CLI_DESCRIPTION_USER_ADD_OPTION_USERNAME'	=> 'Username pengguna baru',
	'CLI_DESCRIPTION_USER_ADD_OPTION_PASSWORD'	=> 'Kata sandi pengguna baru',
	'CLI_DESCRIPTION_USER_ADD_OPTION_EMAIL'		=> 'Alamat e-mail pengguna baru',
	'CLI_DESCRIPTION_USER_ADD_OPTION_NOTIFY'	=> 'Kirim email aktivasi akun ke pengguna baru (tidak dikirim secara default)',
	'CLI_DESCRIPTION_USER_DELETE'				=> 'Hapus akun pengguna.',
	'CLI_DESCRIPTION_USER_DELETE_USERNAME'		=> 'Username pengguna untuk dihapus',
	'CLI_DESCRIPTION_USER_DELETE_OPTION_POSTS'	=> 'Hapus semua tulisan oleh pengguna. Tanpa pilihan ini, posting pengguna akan dipertahankan.',
	'CLI_DESCRIPTION_USER_RECLEAN'				=> 'Bersihkan kembali nama pengguna.',

	'CLI_EXTENSION_DISABLE_FAILURE'		=> 'Tidak dapat menonaktifkan ekstensi %s',
	'CLI_EXTENSION_DISABLE_SUCCESS'		=> 'Ekstensi yang berhasil dinonaktifkan %s',
	'CLI_EXTENSION_DISABLED'			=> 'Ekstensi %s tidak diaktifkan',
	'CLI_EXTENSION_ENABLE_FAILURE'		=> 'Tidak dapat mengaktifkan ekstensi %s',
	'CLI_EXTENSION_ENABLE_SUCCESS'		=> 'Successfully enabled extension %s',
	'CLI_EXTENSION_ENABLED'				=> 'Ekstensi %s sudah diaktifkan',
	'CLI_EXTENSION_NAME'				=> 'Nama ekstensi',
	'CLI_EXTENSION_PURGE_FAILURE'		=> 'Tidak bisa membersihkan ekstensi %s',
	'CLI_EXTENSION_PURGE_SUCCESS'		=> 'Berhasil membersihkan ekstensi %s',
	'CLI_EXTENSION_UPDATE_FAILURE'		=> 'Tidak dapat memperbarui ekstensi %s',
	'CLI_EXTENSION_UPDATE_SUCCESS'		=> 'Berhasil memperbarui ekstensi %s',
	'CLI_EXTENSION_NOT_FOUND'			=> 'Tidak ada ekstensi yang ditemukan.',
	'CLI_EXTENSIONS_AVAILABLE'			=> 'Tersedia',
	'CLI_EXTENSIONS_DISABLED'			=> 'Non-Aktif',
	'CLI_EXTENSIONS_ENABLED'			=> 'Aktif',

	'CLI_FIXUP_FIX_LEFT_RIGHT_IDS_SUCCESS'		=> 'Berhasil memperbaiki struktur dari forum dan modul.',
	'CLI_FIXUP_RECALCULATE_EMAIL_HASH_SUCCESS'	=> 'Berhasil menghitung ulang semua hash email.',
	'CLI_FIXUP_UPDATE_HASH_BCRYPT_SUCCESS'		=> 'Berhasil memperbarui kata sandi lama hash menjadi bcrypt.',

	'CLI_MIGRATION_NAME'					=> 'Nama migrasi, termasuk namespace (gunakan garis miring ke depan dan bukan garis miring terbalik untuk menghindari masalah).',
	'CLI_MIGRATIONS_AVAILABLE'				=> 'Migrasi yg tersedia',
	'CLI_MIGRATIONS_INSTALLED'				=> 'Migrasi yang terpasang',
	'CLI_MIGRATIONS_ONLY_AVAILABLE'		    => 'Tampilkan hanya Migrasi yang tesedia',
	'CLI_MIGRATIONS_EMPTY'                  => 'Tidak ada Migrasi.',

	'CLI_REPARSER_REPARSE_REPARSING'		=> 'Reparsing %1$s (range %2$d..%3$d)',
	'CLI_REPARSER_REPARSE_REPARSING_START'	=> 'Reparsing %s...',
	'CLI_REPARSER_REPARSE_SUCCESS'			=> 'Reparsing berhasil sukses',

	// In all the case %1$s is the logical name of the file and %2$s the real name on the filesystem
	// eg: big_image.png (2_a51529ae7932008cf8454a95af84cacd) generated.
	'CLI_THUMBNAIL_DELETED'		=> '%1$s (%2$s) terhapus.',
	'CLI_THUMBNAIL_DELETING'	=> 'Menghapus thumbnail',
	'CLI_THUMBNAIL_SKIPPED'		=> '%1$s (%2$s) terlewati.',
	'CLI_THUMBNAIL_GENERATED'	=> '%1$s (%2$s) dibuat.',
	'CLI_THUMBNAIL_GENERATING'	=> 'Membuat thumbnail',
	'CLI_THUMBNAIL_GENERATING_DONE'	=> 'Semua thumbnail telah dibuat.',
	'CLI_THUMBNAIL_DELETING_DONE'	=> 'Semua thumbnail telah dihapus.',

	'CLI_THUMBNAIL_NOTHING_TO_GENERATE'	=> 'tidak ada thumbnails untuk dibuat.',
	'CLI_THUMBNAIL_NOTHING_TO_DELETE'	=> 'tidak ada thumbnails untuk dihapus.',

	'CLI_USER_ADD_SUCCESS'		=> 'Berhasil menambahkan pengguna %s.',
	'CLI_USER_DELETE_CONFIRM'	=> 'Yakin ingin menghapusnya ‘%s’? [y/N]',
	'CLI_USER_RECLEAN_START'	=> 'Membersihkan kembali nama pengguna',
	'CLI_USER_RECLEAN_DONE'		=> [
		0	=> 'Pembersihan ulang selesai. Tidak ada nama pengguna yang perlu dibersihkan.',
		1	=> 'Pembersihan ulang selesai. %d nama pengguna sudah dibersihkan',
		2	=> 'Pembersihan ulang selesai. %d nama pengguna telah dibersihkan.',
	],
));

// Additional help for commands.
$lang = array_merge($lang, array(
	'CLI_HELP_CRON_RUN'			=> $lang['CLI_DESCRIPTION_CRON_RUN'] . ' Opsional Anda dapat menentukan nama tugas cron untuk menjalankan hanya tugas cron yang ditentukan.',
	'CLI_HELP_USER_ACTIVATE'	=> 'Mengaktifkan akun pengguna, atau nonaktifkan akun menggunakan opsi <info> - nonaktifkan </info>. Untuk secara opsional kirim email aktivasi ke pengguna, gunakan opsi <info> - kirim email </info>.',
	'CLI_HELP_USER_ADD'			=> 'Perintah <info>%command.name%</info>  menambahkan pengguna baru: Jika perintah ini dijalankan tanpa opsi, Anda akan diminta memasukkannya. Untuk secara opsional mengirim email ke pengguna baru, gunakan opsi <info> - kirim email </info>. ',
	'CLI_HELP_USER_RECLEAN'		=> 'Kembali bersih nama pengguna akan memeriksa semua nama pengguna yang tersimpan dan memastikan versi bersih juga disimpan. Nama pengguna yang dibersihkan adalah bentuk tidak peka huruf besar, NFC dinormalisasi dan diubah menjadi ASCII.',
));
