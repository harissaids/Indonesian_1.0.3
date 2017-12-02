<?php
/**
 *
 * VigLink extension for the phpBB Forum Software package.
 *
 * @copyright (c) 2014 phpBB Limited <https://www.phpbb.com>
 * @license GNU General Public License, version 2 (GPL-2.0)
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
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ACP_VIGLINK_SETTINGS'			=> 'Pengaturan VigLink',
	'ACP_VIGLINK_SETTINGS_EXPLAIN'	=> 'VigLink adalah layanan pihak ketiga yang secara diam-diam membuat mometise tautan yang diposting olrh pengguna diforum Anda tanpa mengganggu kenyamanan pengguna. Saat pengguna mengklik tautan outbound Anda menuju produk atau layanan dan membeli sesuatu, Pedagang atau layanan tersebut membayar komisi VigLink, yang sebagiannya didonasikan ke proyek phpBB. Dengan memilih untuk mengaktifkan VigLink dan mendonasikannya ke proyek phpBB, Anda telah mendukung Organisasi Open Source kami dan kami mendapat keamanan finansial untuk tetap berjalan.',
	'ACP_VIGLINK_SETTINGS_CHANGE'	=> 'Anda dapat merubah pengaturan ini kapan saja dipanel “<a href="%1$s">Pengaturan VigLink</a>”.',
	'ACP_VIGLINK_SUPPORT_EXPLAIN'	=> 'Anda tidak lagi dialihkan ke halaman ini setelah mengambil opsi pilihan dibawah ini, dengan mengklik tombol Submit.',
	'ACP_VIGLINK_ENABLE'			=> 'Aktifkan VigLink',
	'ACP_VIGLINK_ENABLE_EXPLAIN'	=> 'Aktifkan layanan VigLink.',
	'ACP_VIGLINK_EARNINGS'			=> 'Kliam pendapatan Anda(optional)',
	'ACP_VIGLINK_EARNINGS_EXPLAIN'  => 'Anda dapat mengklaim pemasukkan Anda dengan mendaftar untuk akun VigLink Convert .',
	'ACP_VIGLINK_DISABLED_PHPBB'	=> 'Layanan VigLink telah dinon-aktifkan oleh phpBB.',
	'ACP_VIGLINK_CLAIM'				=> 'Klaim Pendapatan Anda',
	'ACP_VIGLINK_CLAIM_EXPLAIN'		=> 'Anda dapat mengklaim penghasilan forum anda dari tautan yang di monetise oleh VigLink, tanpa mendonasikan pendapatan tersebut untuk project phpBB. Untuk mengelola pengaturan akun daftar untuk akun “VigLink Convert” dengan mengklik “Convert account”.',
	'ACP_VIGLINK_CONVERT_ACCOUNT'	=> 'Konversi Akun',
	'ACP_VIGLINK_NO_CONVERT_LINK'	=> 'Akun Convert VigLink tidak dapat dihubungkan.'
));
