<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: extentions.php 2017 harissaids@gmail.com
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
	'EXTENSION'					=> 'Ekstensi',
	'EXTENSIONS'				=> 'Ekstensi',
	'EXTENSIONS_ADMIN'			=> 'Pengelolaan Ekstensi',
	'EXTENSIONS_EXPLAIN'		=> 'Pengelolaan Ekstensi adalah alat di Board phpBB Anda yang memungkinkan Anda mengelola semua status ekstensi Anda dan melihat informasi tentangnya.',
	'EXTENSION_INVALID_LIST'	=> 'The “%s” extension is not valid.<br />%s<br /><br />',
	'EXTENSION_NOT_AVAILABLE'	=> 'Ekstensi yang dipilih tidak tersedia untuk board ini, verifikasi versi phpBB dan PHP Anda yang diizinkan (lihat halaman rinciannya).',
	'EXTENSION_DIR_INVALID'		=> 'Ekstensi yang dipilih memiliki struktur direktori yang tidak valid dan tidak dapat diaktifkan.',
	'EXTENSION_NOT_ENABLEABLE'	=> 'Ekstensi yang dipilih tidak dapat diaktifkan, mohon verifikasi persyaratan ekstensi.',
	'EXTENSION_NOT_INSTALLED'	=> 'Ekstensi %s tidak tersedia. Harap periksa apakah Anda telah menginstalnya dengan benar.',

	'DETAILS'				=> 'Rincian',

	'EXTENSIONS_DISABLED'	=> 'Non-Aktifkan Ekstensi',
	'EXTENSIONS_ENABLED'	=> 'Aktifkan Ekstensi',

	'EXTENSION_DELETE_DATA'	=> 'Hapus data',
	'EXTENSION_DISABLE'		=> 'Non-Aktif',
	'EXTENSION_ENABLE'		=> 'Aktif',

	'EXTENSION_DELETE_DATA_EXPLAIN'	=> 'Menghapus data ekstensi menghapus semua data dan setelannya. File ekstensi dipertahankan sehingga bisa diaktifkan kembali.',
	'EXTENSION_DISABLE_EXPLAIN'		=> 'Menonaktifkan ekstensi menyimpan file, data dan pengaturannya namun menghapus semua fungsionalitas yang ditambahkan oleh ekstensi.',
	'EXTENSION_ENABLE_EXPLAIN'		=> 'Mengaktifkan ekstensi memungkinkan Anda menggunakannya di Board Anda.',

	'EXTENSION_DELETE_DATA_IN_PROGRESS'	=> 'Saat ini sedang dihapus data Ekstensi. Harap tidak menutup, meninggalkan atau merefresh halaman ini hingga selesai.',
	'EXTENSION_DISABLE_IN_PROGRESS'	=> 'Ekstensi saat ini sedang dinon-aktifkan. Harap tidak menutup, meninggalkan atau merefresh halaman ini hingga selesai.',
	'EXTENSION_ENABLE_IN_PROGRESS'	=> 'Ekstensi saat ini sedang diaktifkan. Harap tidak menutup, meninggalkan atau merefresh halaman ini hingga selesai.',

	'EXTENSION_DELETE_DATA_SUCCESS'	=> 'Data ekstensi telah berhasil dihapus',
	'EXTENSION_DISABLE_SUCCESS'		=> 'Ekstensi telah berhasil dinon-aktifkan',
	'EXTENSION_ENABLE_SUCCESS'		=> 'Ekstensi telah berhasil diaktifkan',

	'EXTENSION_NAME'			=> 'Nama Ekstensi',
	'EXTENSION_ACTIONS'			=> 'Tindakan',
	'EXTENSION_OPTIONS'			=> 'Opsi',
	'EXTENSION_INSTALL_HEADLINE'=> 'Menginstalkan Ekstensi',
	'EXTENSION_INSTALL_EXPLAIN'	=> '<ol>
			<li>Unduh ekstensi dari database ekstensi phpBB</li>
			<li>Unzip ekstensi dan upload ke direktori <samp> ext/ </samp> Board phpBB Anda</li>
			<li>Aktifkan ekstensi, di sini, di pengelola Ekstensi</li>

		</ol>',
	'EXTENSION_UPDATE_HEADLINE'	=> 'Memperbarui ekstensi',
	'EXTENSION_UPDATE_EXPLAIN'	=> '<ol>
			<li>Nonaktifkan ekstensi</li>
			<li>Hapus file ekstensi dari filesystem</li>
			<li>Unggah file baru</li>
			<li>Aktifkan ekstensi</li>
		</ol>',
	'EXTENSION_REMOVE_HEADLINE'	=> 'Sepenuhnya menghapus ekstensi dari Board Anda',
	'EXTENSION_REMOVE_EXPLAIN'	=> '<ol>
			<li>Nonaktifkan ekstensi</li>
			<li>Hapus data ekstensi</li>
			<li>Hapus file ekstensi dari filesystem</li>
		</ol>',

	'EXTENSION_DELETE_DATA_CONFIRM'	=> 'Apakah Anda yakin ingin menghapus data yang terkait dengan “%s”? Ini akan menghapus semua datanya dan setelannya dan tidak dapat dibatalkan.!',
	'EXTENSION_DISABLE_CONFIRM'		=> 'Yakin ingin menonaktifkan ekstensi “%s”?',
	'EXTENSION_ENABLE_CONFIRM'		=> 'Anda yakin ingin mengaktifkan ekstensi “%s”?',
	'EXTENSION_FORCE_UNSTABLE_CONFIRM'	=> 'Apakah Anda yakin ingin memaksakan penggunaan versi yang tidak stabil?',

	'RETURN_TO_EXTENSION_LIST'	=> 'Kembali ke daftar ekstensi',

	'EXT_DETAILS'			=> 'Detail Ekstensi',
	'DISPLAY_NAME'			=> 'Nama tampilan',
	'CLEAN_NAME'			=> 'Bersihkan nama',
	'TYPE'					=> 'Tipe',
	'DESCRIPTION'			=> 'Deskrisi',
	'VERSION'				=> 'Versi',
	'HOMEPAGE'				=> 'Situs',
	'PATH'					=> 'Direktori',
	'TIME'					=> 'Waktu Rilis',
	'LICENSE'				=> 'Lisensi',

	'REQUIREMENTS'			=> 'Persyaratan',
	'PHPBB_VERSION'			=> 'Versi phpBB',
	'PHP_VERSION'			=> 'PHP Version',
	'AUTHOR_INFORMATION'	=> 'Informasi penulis',
	'AUTHOR_NAME'			=> 'Nama',
	'AUTHOR_EMAIL'			=> 'Email',
	'AUTHOR_HOMEPAGE'		=> 'Situs',
	'AUTHOR_ROLE'			=> 'Peran',

	'NOT_UP_TO_DATE'		=> '%s tidak up to date',
	'UP_TO_DATE'			=> '%s sudah up to date',
	'ANNOUNCEMENT_TOPIC'	=> 'Pengumuman rilis',
	'DOWNLOAD_LATEST'		=> 'Versi Unggahan',
	'NO_VERSIONCHECK'		=> 'Tidak ada versi yang memeriksa informasi yang diberikan.',

	'VERSIONCHECK_FORCE_UPDATE_ALL'		=> 'Periksa kembali semua versi',
	'FORCE_UNSTABLE'					=> 'Selalu periksa versi yang tidak stabil',
	'EXTENSIONS_VERSION_CHECK_SETTINGS'	=> 'Setelan pemeriksaan versi',

	'BROWSE_EXTENSIONS_DATABASE'		=> 'Jelajahi database ekstensi',

	'META_FIELD_NOT_SET'	=> 'Bidang meta yang diperlukan %s belum ditetapkan.',
	'META_FIELD_INVALID'	=> 'Bidang meta %s tidak valid.',
));
