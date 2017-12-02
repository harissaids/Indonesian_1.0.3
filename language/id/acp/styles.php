<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: style.php 2017 harissaids@gmail.com
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

$lang = array_merge($lang, array(
	'ACP_STYLES_EXPLAIN'	=> 'Di sini anda dapat mengatur semua gaya-gaya yang tersedia pada halaman anda. Sebuah gaya terdiri dari template, thema dan imageset. Anda bisa mengubah gaya-gaya yang sudah ada, menghapus, menonaktifkan, mengaktifkan, membuat atapun mengimport yang baru. Anda juga bisa melihat gaya tersebut dengan fungsi priview. Gaya yang digunakan sekarang ini diperlihatkan dengan tanda bintang (*). Di halaman ini juga ditampilkan total dari jumlah pengguna untuk setiap gaya, dan mohon dicatat bahwa pengesampingan gaya pengguna tidak akan direfleksikan di sini.',

	'CANNOT_BE_INSTALLED'			=> 'Tidak dapat diinstal',
	'CONFIRM_UNINSTALL_STYLES'		=> 'Apakah Anda yakin ingin mengunisntal gaya yang diplih',
	'COPYRIGHT'						=> 'Copyright',

	'DEACTIVATE_DEFAULT'		=> 'Anda tidak dapat menonaktifkan gaya ini.',
	'DELETE_FROM_FS'			=> 'Hapus dari sistem file',
	'DELETE_STYLE_FILES_FAILED'	=> 'Error menghapus file gaya dari "%s".',
	'DELETE_STYLE_FILES_SUCCESS'	=> 'Gaya file dari "%s" telah dihapus.',
	'DETAILS'					=> 'Keterangan',

	'INHERITING_FROM'			=> 'berasal dari',
	'INSTALL_STYLE'				=> 'Instal gaya',
	'INSTALL_STYLES'			=> 'Instal gaya',
	'INSTALL_STYLES_EXPLAIN'		=> 'Di sini anda dapat menginstal gaya baru dan gaya jika sesuai dengan elemen gaya. Jika anda sudah memiliki elemen gaya yang diinstal, maka tidak akan ditulis ulang lagi. Beberapa gaya membutukan elmemen yang sudah ada sebelumnya diinstal. Jika anda mencoba menginstall sebuah gaya namun tidak memiliki elemen yang dibutuhkan, maka anda akan diberitahukan.',

	'INVALID_STYLE_ID'			=> 'ID Gaya tidak valid.',

	'NO_MATCHING_STYLES_FOUND'	=> 'Gaya tidak cocok dengan pencarian Anda.',
	'NO_UNINSTALLED_STYLE'		=> 'Tidak ada gaya yang diuninstal.',

	'PURGED_CACHE'				=> 'Cache telah dibersihkan.',

	'REQUIRES_STYLE'			=> 'Gaya ini memerlukan gaya "%s" untuk diinstal.',

	'STYLE_ACTIVATE'			=> 'Aktifkan',
	'STYLE_ACTIVE'				=> 'Aktif',
	'STYLE_DEACTIVATE'			=> 'Nonaktifkan',
	'STYLE_DEFAULT'				=> 'Jadikan gaya default',
	'STYLE_DEFAULT_CHANGE_INACTIVE'	=> 'Anda haru smengaktifkan gaya sebelum menjadikannya gaya default.',
	'STYLE_ERR_INVALID_PARENT'	=> 'Gaya utama tidak valid.',
	'STYLE_ERR_STYLE_NAME'		=> 'Anda harus memberikan sebuah nama untuk gaya ini.',
	'STYLE_ERR_NAME_EXIST'		=> 'Gaya dengan nama tersebut sudah ada.',
	'STYLE_INSTALLED'			=> 'Gaya "%s" telah terinstal.',
	'STYLE_INSTALLED_RETURN_INSTALLED_STYLES'	=> 'Kembali ke daftar gaya yang terinstal',
	'STYLE_INSTALLED_RETURN_UNINSTALLED_STYLES'	=> 'Instal gaya lainnya',
	'STYLE_NAME'				=> 'Nama gaya',
	'STYLE_NAME_RESERVED'		=> 'Gaya "%s" tidak dapat diinstal, sebab nama tersebuttelah disimpan.',
	'STYLE_NOT_INSTALLED'		=> 'Gaya "%s" tidak terinstal.',
	'STYLE_PATH'				=> 'Path Gaya path',
	'STYLE_UNINSTALL'			=> 'Uninstall',
	'STYLE_UNINSTALL_DEPENDENT'	=> 'Gaya "%s" tidak dapat diinstal karena ada satu atau lebih cabang gaya.',
	'STYLE_UNINSTALLED'			=> 'Gaya "%s" berhasil di uninstal.',
	'STYLE_USED_BY'				=> 'Digunakan oleh (termasuk robot)',
	'STYLE_VERSION'				=> 'Versi Gaya',

	'UNINSTALL_DEFAULT'		=> 'Anda tidak dapat mengunistal gaya default.',

	'BROWSE_STYLES_DATABASE'	=> 'Kunjungi database gaya/tema',
));
