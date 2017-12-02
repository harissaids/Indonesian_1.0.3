<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: plupload.php 2017 harissaids@gmail.com
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
	'PLUPLOAD_ADD_FILES'		=> 'Tambah File',
	'PLUPLOAD_ADD_FILES_TO_QUEUE'	=> 'Tambahkan file dalam antrian dan tekan tombol Start.',
	'PLUPLOAD_ALREADY_QUEUED'	=> '%s Sudah ada dalam antrian.',
	'PLUPLOAD_CLOSE'			=> 'Tutup',
	'PLUPLOAD_DRAG'				=> 'Tarik file ke area ini.',
	'PLUPLOAD_DUPLICATE_ERROR'	=> 'Error Duplicate file error.',
	'PLUPLOAD_DRAG_TEXTAREA'	=> 'Anda juga dapat melampirkan file dengan cara drag and drop ke dalam kotak pesan.',
	'PLUPLOAD_ERR_INPUT'		=> 'Gagal membuka input stream.',
	'PLUPLOAD_ERR_MOVE_UPLOADED'	=> 'Gagal memindahkan file yang di unggah.',
	'PLUPLOAD_ERR_OUTPUT'		=> 'Gagal membuka output stream.',
	'PLUPLOAD_ERR_FILE_TOO_LARGE'	=> 'File teralu besar:',
	'PLUPLOAD_ERR_FILE_COUNT'	=> 'Error count File.',
	'PLUPLOAD_ERR_FILE_INVALID_EXT'	=> 'Ekstensi file tidak valid:',
	'PLUPLOAD_ERR_RUNTIME_MEMORY'	=> 'Memori yang tersedia tidak cukup.',
	'PLUPLOAD_ERR_UPLOAD_URL'	=> 'URL file yang akan diunggah salah atau tidak ada.',
	'PLUPLOAD_EXTENSION_ERROR'	=> 'Ekstensi file error.',
	'PLUPLOAD_FILE'				=> 'File: %s',
	'PLUPLOAD_FILE_DETAILS'		=> 'File: %s, Ukuran: %d, Ukuran maks file: %d',
	'PLUPLOAD_FILENAME'			=> 'Nama file',
	'PLUPLOAD_FILES_QUEUED'		=> '%d file dalam antrian',
	'PLUPLOAD_GENERIC_ERROR'	=> 'Generic error.',
	'PLUPLOAD_HTTP_ERROR'		=> 'HTTP error.',
	'PLUPLOAD_IMAGE_FORMAT'		=> 'Format file gambar tidak mendukung atau salah.',
	'PLUPLOAD_INIT_ERROR'		=> 'Init error.',
	'PLUPLOAD_IO_ERROR'			=> 'IO error.',
	'PLUPLOAD_NOT_APPLICABLE'	=> 'N/A',
	'PLUPLOAD_SECURITY_ERROR'	=> 'Error keamanan.',
	'PLUPLOAD_SELECT_FILES'		=> 'Pilih file',
	'PLUPLOAD_SIZE'				=> 'Ukuran',
	'PLUPLOAD_SIZE_ERROR'		=> 'Ukuran file error.',
	'PLUPLOAD_STATUS'			=> 'Status',
	'PLUPLOAD_START_UPLOAD'		=> 'Mulai menguggah',
	'PLUPLOAD_START_CURRENT_UPLOAD'	=> 'Memulai antrian unggahan',
	'PLUPLOAD_STOP_UPLOAD'		=> 'Berhenti mengunggah',
	'PLUPLOAD_STOP_CURRENT_UPLOAD'	=> 'Hentikan unggahan ini',
	// Note: This string is formatted independently by plupload and so does not
	// use the same formatting rules as normal phpBB translation strings
	'PLUPLOAD_UPLOADED'			=> 'Terunggah %d/%d file',
));
