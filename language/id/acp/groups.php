<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: groups.php 2017 harissaids@gmail.com
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
	'ACP_GROUPS_MANAGE_EXPLAIN'		=> 'Di halaman ini anda dapat mengatur semua grup pengguna. Anda bisa menghapus, membuat dan mengubah grup yang sudah ada. Untuk selanjutnya anda bisa memilih pemimpin grup, membuka, menyembunyikan dan menutup grup serta menentukan nama grup dan gambarannya.',
	'ADD_GROUP_CATEGORY'			=> 'Tambah kategori',
	'ADD_USERS'						=> 'Tambahkan pengguna',
	'ADD_USERS_EXPLAIN'				=> 'Di sini anda dapat menambahkan pengguna yang baru ke grup. Anda bisa menentukan apakah grup ini menjadi grup default pengguna tersebut. Sebagi tambahan, anda juga dapat memilih mereka sebagai pemimpin grup. Silahkan masukkan setiap nama pengguna di baris baru.',

	'COPY_PERMISSIONS'				=> 'Salin perizinan dari',
	'COPY_PERMISSIONS_EXPLAIN'		=> 'Grup tersebut akan memiliki perizinan yang sama dengan grup yang disalin.',
	'CREATE_GROUP'					=> 'Buat grup baru',

	'GROUPS_NO_MEMBERS'				=> 'Grup ini belum memiliki anggota',
	'GROUPS_NO_MODS'				=> 'Belum ada pemimpin grup yang dipilih',

	'GROUP_APPROVE'					=> 'Ijinkan anggota',
	'GROUP_APPROVED'				=> 'Anggota diizinkan',
	'GROUP_AVATAR'					=> 'Avatar grup',
	'GROUP_AVATAR_EXPLAIN'			=> 'Gambar ini akan ditampilkan di Papan Pengaturan Grup.',
	'GROUP_CATEGORY_NAME'			=> 'Nama katagori',
	'GROUP_CLOSED'					=> 'Tertutup',
	'GROUP_COLOR'					=> 'Warna grup',
	'GROUP_COLOR_EXPLAIN'			=> 'Tentukan warna anggota yang akan ditampilkan, biarkan kosong untuk defaultnya.',
	'GROUP_CONFIRM_ADD_USERS'		=> array(
		1	=> 'Apakah anda yakin ingin menambahkan pengguna %2$s ke grup tersebut?',
		2	=> 'Apakah anda yakin ingin menambahkan pengguna %2$s ke grup tersebut?',
	),
	'GROUP_CREATED'					=> 'Grup telah berhasil dibuat.',
	'GROUP_DEFAULT'					=> 'Buat default grup ke anggota',
	'GROUP_DEFS_UPDATED'			=> 'Grup default dibuat untuk semua anggota yang dipilih.',
	'GROUP_DELETE'					=> 'Singkirkan anggota dari grup',
	'GROUP_DELETED'					=> 'Grup dihapus dan grup default pengguna berhasil dibuat.',
	'GROUP_DEMOTE'					=> 'Turunkan pangkat pimpinan',
	'GROUP_DESC'					=> 'Gambaran grup',
	'GROUP_DETAILS'					=> 'Keterangan grup',
	'GROUP_EDIT_EXPLAIN'			=> 'Di sini anda dapat mengubah grup yang sudah ada. Anda bisa mengubah nama grup terebut, gambaran dan tipe grup (terbuka, tertutup, dsb.). Anda juga dapat membuat pilihan grup tertentu seperti pewarnaan, ranking, dsb. Perubahan yang dibuat di sini akan mengesampingkan pengaturan yang dibuat oleh pengguna. Mohon diingat bahwa anggota grup dapat juga mengesampingkan avatar grup, kecuali anda membuat perizinan yang sesuai untuk pengguna.',
	'GROUP_ERR_USERS_EXIST'			=> 'Pengguna yang ditentukan sudah menjadi anggota grup tersebut.',
	'GROUP_FOUNDER_MANAGE'			=> 'Hanya pendiri yang mengatur',
	'GROUP_FOUNDER_MANAGE_EXPLAIN'	=> 'Manajemen hanya dibatasi untuk pendiri saja. Pengguna yang memiliki perizinan grup masih dapat melihat grup ini sama seperti anggota yang ada di grup ini.',
	'GROUP_HIDDEN'					=> 'Tersembunyi',
	'GROUP_LANG'					=> 'Bahasa grup',
	'GROUP_LEAD'					=> 'Pemimpin-pemimpin grup',
	'GROUP_LEADERS_ADDED'			=> 'Pemimpin yang baru telah berhasil ditambahkan ke grup.',
	'GROUP_LEGEND'					=> 'Tampilkan grup di daftar grup',
	'GROUP_LIST'					=> 'Daftar anggota',
	'GROUP_LIST_EXPLAIN'			=> 'Daftar lengkap keanggotaan pengguna dari grup ditampilkan di sini. Anda dapat menghapus dan menambah anggota (kecuali di grup-grup yang spesial).',
	'GROUP_MEMBERS'					=> 'Anggota grup',
	'GROUP_MEMBERS_EXPLAIN'			=> 'Daftar lengkap dari semua anggota grup ditampilkan di sini, termasuk bagian pengaturan pimpinan, anggota dan penundaan anggota. Di sini juga anda dapat mengatur semua aspek keanggotaan dari grup ini dan peranannya masing-masing. Untuk menyingkirkan pemimpin grup, lebih baik menggunakan pilihan Turunkan pangkat pimpinan daripada menghapus pimpinan tersebut dan gunakan juga Promosikan untuk membuat pimpinan yang baru.',
	'GROUP_MESSAGE_LIMIT'			=> 'Batas pesan pribadi grup per folder',
	'GROUP_MESSAGE_LIMIT_EXPLAIN'	=> 'Pengaturan ini akan mengesampingkan batas pesan pengguna. Nilai 0 berarti batas pesan default pengguna tersebut akan digunakan.',
	'GROUP_MODS_ADDED'				=> 'Pemimping grup yang baru telah berhasil dibuat.',
	'GROUP_MODS_DEMOTED'			=> 'Pemimping grup telah berhasil diturunkan.',
	'GROUP_MODS_PROMOTED'			=> 'Pemimping grup telah berhasil dipromosikan.',
	'GROUP_NAME'					=> 'Nama grup',
	'GROUP_NAME_TAKEN'				=> 'Nama grup yang anda masukkan sudah digunakan, silahkan gunakan nama lain.',
	'GROUP_OPEN'					=> 'Terbuka',
	'GROUP_PENDING'					=> 'Keanggotaan yang tertunda',
	'GROUP_MAX_RECIPIENTS'			=> 'Jumlah maksimum yang diizinkan untuk penerima per pesan pribadi',
	'GROUP_MAX_RECIPIENTS_EXPLAIN'	=> 'Jumlah maksimum yang diizinkan untuk penerima untuk pesan pribadi. Nilai 0 berarti pengaturan halaman yang digunakan.',
	'GROUP_OPTIONS_SAVE'			=> 'Pilihan grup menyeluruh',
	'GROUP_PROMOTE'					=> 'Promosikan ke pemimpin grup',
	'GROUP_RANK'					=> 'Ranking Grup',
	'GROUP_RECEIVE_PM'				=> 'Grup dapat menerima pesan pribadi',
	'GROUP_RECEIVE_PM_EXPLAIN'		=> 'Mohon diingat bahwa grup yang tersembunyi tidak dapat dikirimi pesan bagaimanapun juga.',
	'GROUP_REQUEST'					=> 'Permohonan grup',
	'GROUP_SETTINGS_SAVE'			=> 'Pengaturan keseluruhan grup',
	'GROUP_SKIP_AUTH'				=> 'Bebaskan pemimpin grup dari perizinan',
	'GROUP_SKIP_AUTH_EXPLAIN'		=> 'Jika diaktifkan maka pemimpin grup tidak lagi memiliki perizinan dari grup.',
	'GROUP_SPECIAL'					=> 'Pre-defined',
	'GROUP_TEAMPAGE'				=> 'Menampilkan grup dalam teampage',
	'GROUP_TYPE'					=> 'Tipe grup',
	'GROUP_TYPE_EXPLAIN'			=> 'Halaman ini menentukan pengguna yang bisa bergabung atau melihat grup ini.',
	'GROUP_UPDATED'					=> 'Preferensi grup telah berhasil diperbarui.',

	'GROUP_USERS_ADDED'				=> 'Pengguna baru telah berhasil ditambahkan ke grup.',
	'GROUP_USERS_EXIST'				=> 'Pengguna yang dipilih sudah menjadi anggota grup.',
	'GROUP_USERS_REMOVE'			=> 'Pengguna telah disingkirkan dari grup dan grup default barunya telah berhasil dibuat.',

	'LEGEND_EXPLAIN'				=> 'Ini adalah grup yang ditampilkan dalam keterangan grup:',
	'LEGEND_SETTINGS'				=> 'Pengaturan legend',
	'LEGEND_SORT_GROUPNAME'			=> 'Sortir berdasarkan nama grup',
	'LEGEND_SORT_GROUPNAME_EXPLAIN'	=> 'Urutan dibawah diabaikan bila opsi ini diaktifkan.',

	'MANAGE_LEGEND'			=> 'Atur grup legend',
	'MANAGE_TEAMPAGE'		=> 'Atur teampage',
	'MAKE_DEFAULT_FOR_ALL'	=> 'Buat grup default untuk setiap anggota',
	'MEMBERS'				=> 'Anggota',

	'NO_GROUP'					=> 'Belum ada grup yang ditentukan.',
	'NO_GROUPS_ADDED'			=> 'Belum ada grup yang ditambah.',
	'NO_GROUPS_CREATED'			=> 'Belum ada grup yang dibuat.',
	'NO_PERMISSIONS'			=> 'Jangan salin perizinan',
	'NO_USERS'					=> 'Anda belum memasukkan anggota apupun.',
	'NO_USERS_ADDED'			=> 'Belum ada pengguna yang ditambahkan ke grup.',
	'NO_VALID_USERS'			=> 'Anda belum memasukkan pengguna yang dipilih.',

	'PENDING_MEMBERS'			=> 'Pending',

	'SELECT_GROUP'				=> 'Select a group',
	'SPECIAL_GROUPS'			=> 'Grup yang sudah dikenal',
	'SPECIAL_GROUPS_EXPLAIN'	=> 'Grup yang sudah dikenal merupakan grup yang spesial, grup ini tidak dapat dihapus atau dimodifikasi. Akan tetapi anda masih dapat menambahkan dan mengubah pengaturan dasarnya.',

	'TEAMPAGE'					=> 'Teampage',
	'TEAMPAGE_DISP_ALL'			=> 'Semua anggota',
	'TEAMPAGE_DISP_DEFAULT'		=> 'Hanya default grup pengguna',
	'TEAMPAGE_DISP_FIRST'		=> 'Hanya keanggotaan pertama',
	'TEAMPAGE_EXPLAIN'			=> 'Ini adalah group yang ditampilkan dalam teampage:',
	'TEAMPAGE_FORUMS'			=> 'Tampilkan forum yang di moderasi',
	'TEAMPAGE_FORUMS_EXPLAIN'	=> 'Jika YA, Moderator mendapatkan daftar dengan forum yang mereka moderasi. Ini dapat menyebabkan database sangat intenst untuk forum yang besar.',
	'TEAMPAGE_MEMBERSHIPS'		=> 'Menampilkan keanggotaan pengguna',
	'TEAMPAGE_SETTINGS'			=> 'Pengaturan teampage',
	'TOTAL_MEMBERS'				=> 'Total Anggota',

	'USERS_APPROVED'				=> 'Pengguna telah berhasil disetujui.',
	'USER_DEFAULT'					=> 'Default pengguna',
	'USER_DEF_GROUPS'				=> 'Pengguna grup yang ditentukan',
	'USER_DEF_GROUPS_EXPLAIN'		=> 'Ini adalah grup yang anda buat ataupun admin halaman yang lain. Anda dapat mengatur keanggotaan sama seperti mengubah ataupun menghapus grup tersebut.',
	'USER_GROUP_DEFAULT'			=> 'Buat sebagai grup default',
	'USER_GROUP_DEFAULT_EXPLAIN'	=> 'Pilihan ya akan membuat grup ini menjadi grup defaultnya untuk pengguna yang ditambahkan.',
	'USER_GROUP_LEADER'				=> 'Buat sebagi pemimpin grup',
));
