<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: permissions_phpbb.php 2017 harissaids@gmail.com
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

/**
*	EXTENSION-DEVELOPERS PLEASE NOTE
*
*	You are able to put your permission sets into your extension.
*	The permissions logic should be added via the 'core.permissions' event.
*	You can easily add new permission categories, types and permissions, by
*	simply merging them into the respective arrays.
*	The respective language strings should be added into a language file, that
*	start with 'permissions_', so they are automatically loaded within the ACP.
*/

$lang = array_merge($lang, array(
	'ACL_CAT_ACTIONS'		=> 'Tindakan',
	'ACL_CAT_CONTENT'		=> 'Konten',
	'ACL_CAT_FORUMS'		=> 'Forum',
	'ACL_CAT_MISC'			=> 'Lain',
	'ACL_CAT_PERMISSIONS'	=> 'Perizinan',
	'ACL_CAT_PM'			=> 'Pesan pribadi',
	'ACL_CAT_POLLS'			=> 'Pemungutan suara',
	'ACL_CAT_POST'			=> 'Posting',
	'ACL_CAT_POST_ACTIONS'	=> 'Tindakan post',
	'ACL_CAT_POSTING'		=> 'Posting',
	'ACL_CAT_PROFILE'		=> 'Profil',
	'ACL_CAT_SETTINGS'		=> 'Pengaturan',
	'ACL_CAT_TOPIC_ACTIONS'	=> 'Tindakan topik',
	'ACL_CAT_USER_GROUP'	=> 'Pengguna &amp; Grup',
));

// User Permissions
$lang = array_merge($lang, array(
	'ACL_U_VIEWPROFILE'	=> 'Dapat melihat profil, daftar anggota dan daftar online',
	'ACL_U_CHGNAME'		=> 'Dapat mengganti nama pengguna',
	'ACL_U_CHGPASSWD'	=> 'Dapat mengubah kata sandi',
	'ACL_U_CHGEMAIL'	=> 'Dapat mengubah alamat e-mail',
	'ACL_U_CHGAVATAR'	=> 'Dapat mengubah avatar',
	'ACL_U_CHGGRP'		=> 'Dapat mengubah grup default pengguna',
	'ACL_U_CHGPROFILEINFO'	=> 'Dapat mengubah bidang profil informasi',

	'ACL_U_ATTACH'		=> 'Dapat melampirkan file',
	'ACL_U_DOWNLOAD'	=> 'Dapat mendownload file',
	'ACL_U_SAVEDRAFTS'	=> 'Dapat menyimpan naskah',
	'ACL_U_CHGCENSORS'	=> 'Dapat menonaktifkan sensor kata',
	'ACL_U_SIG'			=> 'Dapat menggunakan tanda tangan',

	'ACL_U_SENDPM'		=> 'Dapat mengirim pesan pribadi',
	'ACL_U_MASSPM'		=> 'Dapat mengirim pesan ke beberapa pengguna',
	'ACL_U_MASSPM_GROUP'=> 'Dapat mengirim [esan ke grup',
	'ACL_U_READPM'		=> 'Dapat membaca pesan pribadi',
	'ACL_U_PM_EDIT'		=> 'Dapat mengedit pesan pribadi sendiri',
	'ACL_U_PM_DELETE'	=> 'Dapat menghapus pesan pribadi dari folder pribadi',
	'ACL_U_PM_FORWARD'	=> 'Dapat meneruskan pesan pribadi',
	'ACL_U_PM_EMAILPM'	=> 'Dapat mengemail pesan pribadi',
	'ACL_U_PM_PRINTPM'	=> 'Dapat mencetak pesan pribadi',
	'ACL_U_PM_ATTACH'	=> 'Dapat melampirkan file dalam pesan pribadi',
	'ACL_U_PM_DOWNLOAD'	=> 'Dapat mengunduh file dalam pesan prbadi',
	'ACL_U_PM_BBCODE'	=> 'Dapat menggunakan BBcode dalam pesan pribadi',
	'ACL_U_PM_SMILIES'	=> 'Dapat menggunakan smille dalam pesan pribadi',
	'ACL_U_PM_IMG'		=> 'Dapat menggunakan [img] BBcode dalam pesan pribadi',
	'ACL_U_PM_FLASH'	=> 'Dapat menggunakan tag [flas] BBcode dalam pesan pribadi',

	'ACL_U_SENDEMAIL'	=> 'Dapat mengirim email',
	'ACL_U_SENDIM'		=> 'Dapat mengirim pesan instant',
	'ACL_U_IGNOREFLOOD'	=> 'Dapat mengabaikan flood limit',
	'ACL_U_HIDEONLINE'	=> 'Dapat menyembunyikan status online',
	'ACL_U_VIEWONLINE'	=> 'Dapat melihat pengguna yang online',
	'ACL_U_SEARCH'		=> 'Dapat mencari di panel',
));

// Forum Permissions
$lang = array_merge($lang, array(
	'ACL_F_LIST'		=> 'Dapat melihat forum',
	'ACL_F_READ'		=> 'Dapat membaca forum',
	'ACL_F_SEARCH'		=> 'Dapat mencari forum',
	'ACL_F_SUBSCRIBE'	=> 'Dapat berlangganan forum',
	'ACL_F_PRINT'		=> 'Dapat mencetak topik',
	'ACL_F_EMAIL'		=> 'Dapat mengemail topik',
	'ACL_F_BUMP'		=> 'Dapat menggeser topik',
	'ACL_F_USER_LOCK'	=> 'Dapat mengunci topik yg dibuatnya',
	'ACL_F_DOWNLOAD'	=> 'Dapat mendgunduh file',
	'ACL_F_REPORT'		=> 'Dapat melaporkan posting',

	'ACL_F_POST'		=> 'Dapat membuat topik baru',
	'ACL_F_STICKY'		=> 'Dapat memposting Sticky',
	'ACL_F_ANNOUNCE'	=> 'Dapat membuat pengumuman',
	'ACL_F_ANNOUNCE_GLOBAL'	=> 'Dapat membuat pengumuman umum',
	'ACL_F_REPLY'		=> 'Dapat membalas topik',
	'ACL_F_EDIT'		=> 'Dapat mengubah posting sendiri',
	'ACL_F_DELETE'		=> 'Dapat menghapus permanen postingannya',
	'ACL_F_SOFTDELETE'	=> 'Dapat menghapus-soft posting<br /><em>Moderator, yang mempunyai izin persetujuan posting, dapat memulihkan posting yang dihapus-soft.</em>',
	'ACL_F_IGNOREFLOOD' => 'Dapat mengabaikan flood limit',
	'ACL_F_POSTCOUNT'	=> 'Kenaikan penghitung post<br /><em>Mohon dicatat bahwa pengaturan ini hanya akan bekerja pada post baru.</em>',
	'ACL_F_NOAPPROVE'	=> 'Dapat memposting tanpa persetujuan',

	'ACL_F_ATTACH'		=> 'Dapat melampirkan file',
	'ACL_F_ICONS'		=> 'Dapat menggunakan ikon topik/posting',
	'ACL_F_BBCODE'		=> 'Dapat menggunakan BBCode',
	'ACL_F_FLASH'		=> 'Dapat menggunakan [flash] BBCode tag',
	'ACL_F_IMG'			=> 'Dapat menggunakan [img] BBCode tag',
	'ACL_F_SIGS'		=> 'Dapat menggunakan signatures',
	'ACL_F_SMILIES'		=> 'Dapat menggunakan smilies',

	'ACL_F_POLL'		=> 'Dapat membuat polls',
	'ACL_F_VOTE'		=> 'Dapat mengukiti polling',
	'ACL_F_VOTECHG'		=> 'Dapat mengubah polling yang ada',
));

// Moderator Permissions
$lang = array_merge($lang, array(
	'ACL_M_EDIT'		=> 'Dapat edit posting',
	'ACL_M_DELETE'		=> 'Dapat permanently delete posting',
	'ACL_M_SOFTDELETE'	=> 'Dapat soft delete posting<br /><em>Moderator, yang mempunyai izin persetujuan posting, dapat memulihkan posting yang dihapus-soft.</em>',
	'ACL_M_APPROVE'		=> 'Dapat approve and restore posting',
	'ACL_M_REPORT'		=> 'Dapat close and delete reports',
	'ACL_M_CHGPOSTER'	=> 'Dapat change post author',

	'ACL_M_MOVE'	=> 'Dapat memindahkan topik',
	'ACL_M_LOCK'	=> 'Dapat mengunci topik',
	'ACL_M_SPLIT'	=> 'Dapat membagi topik',
	'ACL_M_MERGE'	=> 'Dapat menggabungkan topik',

	'ACL_M_INFO'		=> 'Dapat melihat rincian posting',
	'ACL_M_WARN'		=> 'Dapat mengeluarkan peringatan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_PM_REPORT'	=> 'Dapat menutup dan menghapus laporan pesan pribadi<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', // This moderator setting is only global (and not local)
	'ACL_M_BAN'			=> 'Dapat mengelola larangan<br /><em>Pengaturan ini hanya diberikan secara global. Bukan berdasarkan atas forum.</em>', // This moderator setting is only global (and not local)
));

// Admin Permissions
$lang = array_merge($lang, array(
	'ACL_A_BOARD'		=> 'Dapat mengubah pengaturan halaman/memeriksa pembaruan',
	'ACL_A_SERVER'		=> 'Dapat mengubah pengaturan server/komunikasi',
	'ACL_A_JABBER'		=> 'Dapat mengubah pengaturan Jabber',
	'ACL_A_PHPINFO'		=> 'Dapat melihat pengaturan php',

	'ACL_A_FORUM'		=> 'Dapat mengelola forum',
	'ACL_A_FORUMADD'	=> 'Dapat menambah forum',
	'ACL_A_FORUMDEL'	=> 'Dapat menghapus forum',
	'ACL_A_PRUNE'		=> 'Dapat membersihkan forum',

	'ACL_A_ICONS'		=> 'Dapat mengubah icon dan smilies topik/posting',
	'ACL_A_WORDS'		=> 'Dapat mengubah sensor kata',
	'ACL_A_BBCODE'		=> 'Dapat menentukan tag BBCode',
	'ACL_A_ATTACH'		=> 'Dapat mengubah pengaturan yang terkait dengan lampiran',

	'ACL_A_USER'		=> 'Dapat mengelola pengguna<br /><em>Ini termasuk juga melihat browser agent pengguna di daftar online.</em>',
	'ACL_A_USERDEL'		=> 'Dapat menghapus/membersihkan pengguna',
	'ACL_A_GROUP'		=> 'Dapat mengelola grup',
	'ACL_A_GROUPADD'	=> 'Dapat menambah grup baru',
	'ACL_A_GROUPDEL'	=> 'Dapat manghapus grup',
	'ACL_A_RANKS'		=> 'Dapat mengelola ranking',
	'ACL_A_PROFILE'		=> 'Dapat mengelola bidang kostum profil',
	'ACL_A_NAMES'		=> 'Dapat mengelola nama yang tidak diizinkan',
	'ACL_A_BAN'			=> 'Dapat mengelola larangan',

	'ACL_A_VIEWAUTH'	=> 'Dapat melihat masking perizinan',
	'ACL_A_AUTHGROUPS'	=> 'Dapat mengubah perizinan untuk grup perorangan',
	'ACL_A_AUTHUSERS'	=> 'Dapat mengubah perizinan untuk pengguna perorangan',
	'ACL_A_FAUTH'		=> 'Dapat mengubah forum perizinan class',
	'ACL_A_MAUTH'		=> 'Dapat mengubah kelas perizinan moderator',
	'ACL_A_AAUTH'		=> 'Dapat mengubah kelas perizinan admin',
	'ACL_A_UAUTH'		=> 'Dapat mengubah kelas perizinan pengguna',
	'ACL_A_ROLES'		=> 'Dapat manage roles',
	'ACL_A_SWITCHPERM'	=> 'Dapat menggunakan perizinan pengguna lain',

	'ACL_A_STYLES'		=> 'Dapat mengelola styles',
	'ACL_A_EXTENSIONS'	=> 'Dapat mengelola ektensi',
	'ACL_A_VIEWLOGS'	=> 'Dapat melihat log',
	'ACL_A_CLEARLOGS'	=> 'Dapat membersihkan log',
	'ACL_A_MODULES'		=> 'Dapat mengelola modul',
	'ACL_A_LANGUAGE'	=> 'Dapat mengelola paket bahasa',
	'ACL_A_EMAIL'		=> 'Dapat mengirim email massa',
	'ACL_A_BOTS'		=> 'Dapat mengelola bot',
	'ACL_A_REASONS'		=> 'Dapat mengelola laporan/alasan penolakan',
	'ACL_A_BACKUP'		=> 'Dapat backup/memulihkan database',
	'ACL_A_SEARCH'		=> 'Dapat mengelola pencarian backends dan pengaturan',
));
