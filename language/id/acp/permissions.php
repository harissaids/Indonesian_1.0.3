<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: permissions.php 2017 harissaids@gmail.com
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
	'ACP_PERMISSIONS_EXPLAIN'	=> '
		<p>perizinan merupakan butir yang paling tinggi dan dibagi atas empat kelompok utama sebagai berikut:</p>

		<h2>Perizinan Global</h2>
		<p>perizinan ini digunakan untuk mengatur akses untuk tingkat global dan dipergunakan pada seluruh halaman. perizinan ini dibagi atas perizinan Pengguna, perizinan Grup, perizinan Administrator dan perizinan Moderator Global.</p>

		<h2>Perizinan Dasar Forum</h2>
		<p>perizinan ini digunakan untuk mengatur akses untuk setiap dasar forum. perizinan ini dibagi atas perizinan Forum, perizinan Moderator Forum, perizinan Forum Pengguna dan perizinan Forum Grup.</p>

		<h2>Peran perizinan</h2>
		<p>perizinan ini digunakan untuk membuat sekumpulan perizinan yang berbeda untuk tipe perizinan yang berbeda yang nantinya diberikan pada sebuah dasar peranan. Peranan default harus melindungi administrator halaman besar dan kecil, meskipun dalam setiap empat bagian besar tersebut, anda dapat menambahkan, mengubah dan menghapus peranan yang anda lihat pantas.</p>

		<h2>Mask perizinan</h2>
		<p>perizinan ini digunakan untuk melihat efektifitas peijinan yang diberikan kepada Pengguna, Moderator (Lokal dan Global), Administrator ataupun Forum.</p>
	
		<br />

		<p>Untuk informasi lebih lajut mengenai pengaturan perizinan pada halaman phpBB3 anda, silahkan lihat <a href="http://www.phpbb.com/support/documentation/3.0/quickstart/quick_permissions.html">Bab 1.5 dari Panduan Permulaan Cepat</a>.</p>
	',

	'ACL_NEVER'				=> 'Tidak pernah',
	'ACL_SET'				=> 'Pengaturan perizinan',
	'ACL_SET_EXPLAIN'		=> 'perizinan didasarkan pada sitem sederhana <samp>YA</samp>/<samp>TIDAK</samp>. Setting an option to <samp>NEVER</samp> for a user or usergroup overrides any other value assigned to it. If you do not wish to assign a value for an option for this user or group select <samp>NO</samp>. If values are assigned for this option elsewhere they will be used in preference, else <samp>NEVER</samp> is assumed. All objects marked (with the checkbox in front of them) will copy the permission set you defined.',
	'ACL_SETTING'			=> 'Pengaturan',

	'ACL_TYPE_A_'			=> 'perizinan administrasi',
	'ACL_TYPE_F_'			=> 'perizinan forum',
	'ACL_TYPE_M_'			=> 'perizinan moderasi',
	'ACL_TYPE_U_'			=> 'perizinan pengguna',

	'ACL_TYPE_GLOBAL_A_'	=> 'perizinan forum',
	'ACL_TYPE_GLOBAL_U_'	=> 'perizinan-perizinan pengguna',
	'ACL_TYPE_GLOBAL_M_'	=> 'perizinan-Perizinan Global Moderator',
	'ACL_TYPE_LOCAL_M_'		=> 'perizinan-perizinan Moderator Forum',
	'ACL_TYPE_LOCAL_F_'		=> 'perizinan-perizinan Form',

	'ACL_NO'				=> 'Tidak',
	'ACL_VIEW'				=> 'Melihat perizinan',
	'ACL_VIEW_EXPLAIN'		=> 'Di sini anda dapat melihat perizinan yang efektif yang dimiliki pengguna atau grup. Kotak merah menunjukkan bahwa pengguna/grup tidak memiliki perizinan, sedangkan kotak hijau menunjukkan pengguna/grup memiliki perizinan.',
	'ACL_YES'				=> 'Ya',

	'ACP_ADMINISTRATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perizinan administrator kepada pengguna ataupun grup. Semua pengguna dengan perizinan administrator bisa melihat papan pengaturan administrator.',
	'ACP_FORUM_MODERATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perizinan sebagai moderator forum kepada pengguna ataupun grup. Untuk memberikan akses pengguna ke forum, menentukan sebagai perizinan moderasi global atau sebagai perizinan administrasi silahkan menggunakan halaman yang tepat please use the appropriate page.',
	'ACP_FORUM_PERMISSIONS_EXPLAIN'				=> 'Di sini anda dapat melakukan perubahan kepada pengguna ataupun grup agar dapat mengakses forum tertentu. Untuk memberikan perizinan moderator atau administrator silahkan menggunakan halaman lain.',
	'ACP_FORUM_PERMISSIONS_COPY_EXPLAIN'		=> 'Di sini anda dapat menyalin perizinan forum dari satu forum yang satu ke forum atau beberapa forum yang lain.',
	'ACP_GLOBAL_MODERATORS_EXPLAIN'				=> 'Di sini anda dapat memberikan perizinan moderator global kepada pengguna ataupun grup. Moderator ini sama halnya seperti moderator biasa tetapi mereka memiliki akses ke semua forum halaman.',
	'ACP_GROUPS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat memberikan perizinan forum kepada anggota.',
	'ACP_GROUPS_PERMISSIONS_EXPLAIN'			=> 'Di sini anda dapat memberikan Perizinan Global kepada grup - perizinan pengguna, perizinan moderator global dan perizinan administrator. perizinan pengguna mengikutsertakan kemampuan seperti penggunaan avatar, mengirim pesan pribadi, dan sebagainya; perizinan moderator global seperti menyetujui post, mengatur topik, mengatur larangan, dan sebagainya dan terakhir perizinan administrator seperti mengubah perizinan, menentukan  tambahan BBCode, mengatur forum dan sebagainya. perizinan pengguna seharusnya jarang dilakukan, cara yang lebih baik adalah dengan mengelompokkna pengguna dalam suatu grup dan memberikan perizinan grup tersebut.',
    'ACP_ADMIN_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan untuk perizinan administrasi. Peranan adalah perizinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini perizinannya juga akan ikut berubah.',
    'ACP_FORUM_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan dan perizinan forum. Peranan adalah perizinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perizinannya juga akan ikut berubah.',
    'ACP_MOD_ROLES_EXPLAIN'						=> 'Di sini anda dapat mengatur peranan untuk perizinan moderasi. Peranan adalah perizinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perizinannya juga akan ikut berubah.',
    'ACP_USER_ROLES_EXPLAIN'					=> 'Di sini anda dapat mengatur peranan untuk perizinan pengguna. Peranan adalah perizinan yang efektif, jika anda merubah sebuah peranan, maka item-item yang diberikan peranan ini, perizinannya juga akan ikut berubah.',
	'ACP_USERS_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat memberikan perizinan forum kepada pengguna.',
	'ACP_USERS_PERMISSIONS_EXPLAIN'				=> 'Di sini anda dapat memberikan Perizinan Global kepada pengguna - perizinan pengguna, perizinan moderator global dan perizinan administrator. perizinan pengguna mengikutsertakan kemampuan seperti penggunaan avatar, mengirim pesan pribadi, dan sebagainya; perizinan moderator global seperti menyetujui post, mengatur topik, mengatur larangan, dan sebagainya dan terakhir perizinan administrator seperti mengubah perizinan, menentukan  tambahan BBCode, mengatur forum dan sebagainya. To alter these settings for large numbers of users the Group permissions system is the preferred method. perizinan pengguna seharusnya jarang dilakukan, cara yang lebih baik adalah dengan mengelompokkna pengguna dalam suatu grup dan memberikan perizinan grup tersebut.',
	'ACP_VIEW_ADMIN_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat melihat perizinan efektif administrasi yang diberikan kepada pengguna/grup.',
	'ACP_VIEW_GLOBAL_MOD_PERMISSIONS_EXPLAIN'	=> 'Di sini anda dapat melihat perizinan moderasi global yang diberikan kepada pengguna/grup yang dipilih.',
	'ACP_VIEW_FORUM_PERMISSIONS_EXPLAIN'		=> 'Di sini anda dapat melihat perizinan forum yang diberikan kepada pengguna/grup dan forum.',
	'ACP_VIEW_FORUM_MOD_PERMISSIONS_EXPLAIN'	=> 'Di sini anda dapat melihat perizinan forum moderasi yang diberikan kepada pengguna/grup dan forum.',
	'ACP_VIEW_USER_PERMISSIONS_EXPLAIN'			=> 'Di sini anda dapat melihat perizinan efektif pengguna yang diberikan kepada pengguna/grup.',

	'ADD_GROUPS'				=> 'Tambahkan grup',
	'ADD_PERMISSIONS'			=> 'Tambahkan perizinan',
	'ADD_USERS'					=> 'Tambahkan pengguna',
	'ADVANCED_PERMISSIONS'		=> 'perizinan Lanjutan',
	'ALL_GROUPS'				=> 'Pilih semua grup',
	'ALL_NEVER'					=> 'Semua <samp>JANGAN</samp>',
	'ALL_NO'					=> 'Semua <samp>TIDAK</samp>',
	'ALL_USERS'					=> 'Pilih semua pengguna',
	'ALL_YES'					=> 'Semua <samp>YA</samp>',
	'APPLY_ALL_PERMISSIONS'		=> 'Terapkan semua perizinan',
	'APPLY_PERMISSIONS'			=> 'Terapkan perizinan',
	'APPLY_PERMISSIONS_EXPLAIN'	=> 'perizinan dan peran ditentukan untuk item ini akan akan selalu diterapkan ke item ini dan semua item yang dicek.',
	'AUTH_UPDATED'				=> 'perizinan telah diperbarui.',

	'COPY_PERMISSIONS_CONFIRM'				=> 'Apakah anda yakin ingin melanjutkan operasi ini? Mohon diperhatikan bahwa tindakan ini akan menimpa semua setiap perizinan yang sudah ada untuk target yang terpilih.',
	'COPY_PERMISSIONS_FORUM_FROM_EXPLAIN'	=> 'Forum sumber yang anda ingin salin perizinannya dari.',
	'COPY_PERMISSIONS_FORUM_TO_EXPLAIN'		=> 'Forum tujuan yang anda ingin salin perizinannya ke.',
	'COPY_PERMISSIONS_FROM'					=> 'Salin perizinan dari',
	'COPY_PERMISSIONS_TO'					=> 'Pergunakan perizinan ke',

	'CREATE_ROLE'				=> 'Ciptakan peranan',
	'CREATE_ROLE_FROM'			=> 'Gunakan pengaturan dari…',
	'CUSTOM'					=> 'Custom…',

	'DEFAULT'					=> 'Default',
	'DELETE_ROLE'				=> 'Hapus peranan',
	'DELETE_ROLE_CONFIRM'		=> 'Apakah anda yakin ingin menyingkirkan peranan ini? Item-item yang memilik peranan ini <strong>tidak</strong> akan kehilangan pengaturan perizinannya.',
	'DISPLAY_ROLE_ITEMS'		=> 'Lihat item menggunakan peranan ini',

	'EDIT_PERMISSIONS'			=> 'Ubah perizinan',
	'EDIT_ROLE'					=> 'Ubah peranan',

	'GROUPS_NOT_ASSIGNED'		=> 'Tidak ada grup yang diberikan kepada grup ini',

	'LOOK_UP_GROUP'				=> 'Cari grup pengguna',
	'LOOK_UP_USER'				=> 'Cari pengguna',

	'MANAGE_GROUPS'		=> 'Atur grup',
	'MANAGE_USERS'		=> 'Atur pengguna',

	'NO_AUTH_SETTING_FOUND'		=> 'Pengaturan perizinan belum ditentukan.',
	'NO_ROLE_ASSIGNED'			=> 'Tidak ada peranan yang diberikan…',
	'NO_ROLE_ASSIGNED_EXPLAIN'	=> 'Mengubah pengaturan ini tidak akan mengubah perizinan. Jika anda ingin menyingkirkan atau tidak membuat perizinan anda harus menggunakan link “<samp>TIDAK</samp> Semua”.',
	'NO_ROLE_AVAILABLE'			=> 'Tidak ada peranan yang tersedia',
	'NO_ROLE_NAME_SPECIFIED'	=> 'Silahkan berikan nama peranan tersebut.',
	'NO_ROLE_SELECTED'			=> 'Peranan tidak dapat ditemukan.',
	'NO_USER_GROUP_SELECTED'	=> 'Anda belum memilih pengguna ataupun grup.',

	'ONLY_FORUM_DEFINED'	=> 'Anda hanya menentukan forum pada pilihan anda. Silahkan juga pilih paling tidak satu pengguna ataupun grup.',

	'PERMISSION_APPLIED_TO_ALL'		=> 'perizinan dan peranan juga akan diterapkan pada semua objek yang dipilih',
	'PLUS_SUBFORUMS'				=> '+Subforum',

	'REMOVE_PERMISSIONS'			=> 'Singkirkan perizinan',
	'REMOVE_ROLE'					=> 'Singkirkan peranan',
	'RESULTING_PERMISSION'			=> 'Hasil perizinan',
	'ROLE'							=> 'Peranan',
	'ROLE_ADD_SUCCESS'				=> 'Peranan telah berhasil ditambahkan.',
	'ROLE_ASSIGNED_TO'				=> 'Pengguna/grup diserahkan ke %s',
	'ROLE_DELETED'					=> 'Peranan berhasil disingkirkan.',
	'ROLE_DESCRIPTION'				=> 'Keterangan peran',

	'ROLE_ADMIN_FORUM'			=> 'Admin Forum',
	'ROLE_ADMIN_FULL'			=> 'Admin Penuh',
	'ROLE_ADMIN_STANDARD'		=> 'Admin Standar',
	'ROLE_ADMIN_USERGROUP'		=> 'Admin Pengguna dan Grup',
	'ROLE_FORUM_BOT'			=> 'Akses Bot',
	'ROLE_FORUM_FULL'			=> 'Akses Penuh',
	'ROLE_FORUM_LIMITED'		=> 'Akses Terbatas',
	'ROLE_FORUM_LIMITED_POLLS'	=> 'Akses Terbatas + Pemungutan Suara',
	'ROLE_FORUM_NOACCESS'		=> 'Tidak ada akses',
	'ROLE_FORUM_ONQUEUE'		=> 'Pada Antrian Moderasi',
	'ROLE_FORUM_POLLS'			=> 'Akses Standart + Pemungutan Suara',
	'ROLE_FORUM_READONLY'		=> 'Hanya Akses Baca',
	'ROLE_FORUM_STANDARD'		=> 'Akses Standar',
	'ROLE_FORUM_NEW_MEMBER'		=> 'Pengguna Baru Terdaftar',
	'ROLE_MOD_FULL'				=> 'Moderator Penuh',
	'ROLE_MOD_QUEUE'			=> 'Moderator Antrian',
	'ROLE_MOD_SIMPLE'			=> 'Moderator Sederhana',
	'ROLE_MOD_STANDARD'			=> 'Moderator Standar',
	'ROLE_USER_FULL'			=> 'Semua Fitur',
	'ROLE_USER_LIMITED'			=> 'Fitur Terbatas',
	'ROLE_USER_NOAVATAR'		=> 'Tidak Ada Avatar',
	'ROLE_USER_NOPM'			=> 'Tidak Ada Pesan Pribadi ',
	'ROLE_USER_STANDARD'		=> 'Fitur Standar',
	'ROLE_USER_NEW_MEMBER'		=> 'Pengguna Baru Terdartar',

	'ROLE_DESCRIPTION_ADMIN_FORUM'			=> 'Bisa mengakses pengaturan forum dan perizinan forum.',
	'ROLE_DESCRIPTION_ADMIN_FULL'			=> 'Memiliki akses ke semua fungsis administrasi dari halaman ini.<br />Tidak disarankan.',
	'ROLE_DESCRIPTION_ADMIN_STANDARD'		=> 'Memiliki akses hampir ke semua fitur administrasi tetapi tidak menggunakan alat-alat yang berhubungan dengan sistem.',
	'ROLE_DESCRIPTION_ADMIN_USERGROUP'		=> 'Mampu mengatur grup dan pengguna: Dapat mengubah perizinan, pengaturan, mengatur larangan, dan mengatur ranking.',
	'ROLE_DESCRIPTION_FORUM_BOT'			=> 'Peran ini disarankan untuk bot dan spider.',
	'ROLE_DESCRIPTION_FORUM_FULL'			=> 'Bisa menggunkan semua fitur forum, termasuk membuat post pengumuman dan sticky. Juga mampu untuk mengabaikan batas flood.<br />Tidak disarankan untuk pengguna normal.',
	'ROLE_DESCRIPTION_FORUM_LIMITED'		=> 'Bisa menggunakan beberapa fitur forum, tetapi tidak dapat melampirkan file ataupun menggunkan ikon post.',
	'ROLE_DESCRIPTION_FORUM_LIMITED_POLLS'	=> 'Seperti halnya Akses Terbatas, tetapi bisa membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_NOACCESS'		=> 'Tidak bisa melihat ataupun mengakses forum.',
	'ROLE_DESCRIPTION_FORUM_ONQUEUE'		=> 'Bisa menggunakan kebanyakan fitur forum termasuk lampiran, tetapi post dan topik harus disetujui oleh seorang moderator.',
	'ROLE_DESCRIPTION_FORUM_POLLS'			=> 'Seperti Akses Standar tetapi juga bisa membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_READONLY'		=> 'Bisa membaca forum, tetapi tidak bisa membuar topik ataupun membalas post.',
	'ROLE_DESCRIPTION_FORUM_STANDARD'		=> 'Bisa menggunakan kebanyakan fitur forum termasuk lampiran dan menghapus topik sendiri, tetapi tidak dapat menutup topiknya sendiri, dan tidak dapat membuat pemungutan suara.',
	'ROLE_DESCRIPTION_FORUM_NEW_MEMBER'		=> 'Sebuah peran untuk anggota spesial dari grup pengguna baru terdaftar; <samp>TIDAK AKAN</samp> memiliki perizinan fitur pengunci untuk pengguna baru.',
	'ROLE_DESCRIPTION_MOD_FULL'				=> 'Bisa menggunakan semua fitur moderasi, termasuk larangan.',
	'ROLE_DESCRIPTION_MOD_QUEUE'			=> 'Bisa menggunakan Antrian Moderasi untuk mensahkan dan mengubah post, namun hanya itu saja dan tidak ada yang lain.',
	'ROLE_DESCRIPTION_MOD_SIMPLE'			=> 'Hanya bisa menggunakan alat-alat dasar topik. Tidak dapat mengirimkan peringatan atau menggunakan antrian moderasi.',
	'ROLE_DESCRIPTION_MOD_STANDARD'			=> 'Bisa menggunakan kebanyakan alat-alat moderasi, tetapi tidak dapat melarang pengguna ataupun mengubah pengarang post.',
	'ROLE_DESCRIPTION_USER_FULL'			=> 'Bisa menggunakan semua fitur forum yang tersedia untuk pengguna, termasuk mengubah nama pengguna ataupun mengabaikan batas flood.<br />Tidak disarankan.',
	'ROLE_DESCRIPTION_USER_LIMITED'			=> 'Bisa mengakses beberap fitur pengguna. Lampiran, e-mail, ataupun pesan singkat tidak diizinkan.',
	'ROLE_DESCRIPTION_USER_NOAVATAR'		=> 'Memiliki sekumpulan fitur-fitur terbatas dan tidak diizinkan untuk menggunakan fitur avatar.',
	'ROLE_DESCRIPTION_USER_NOPM'			=> 'Memiliki sekumpulan fitur-fitur terbatas dan tidak diizinkan untuk menggunakan perpesanan pribadi.',
	'ROLE_DESCRIPTION_USER_STANDARD'		=> 'Bisa mengakses hampir semua fitur pengguna. Tidak bisa mengganti nama pengguna ataupun mengabaikan batas flood, sebagai contohnya.',
	'ROLE_DESCRIPTION_USER_NEW_MEMBER'		=> 'Sebuah peran untuk anggota spesial dari grup pengguna baru terdaftar; <samp>TIDAK AKAN</samp> memiliki perizinan fitur pengunci untuk pengguna baru.',

	'ROLE_DESCRIPTION_EXPLAIN'		=> 'Anda dapat memasukkan penjelasan singkat mengenai peranan apa yang dilakukan ataupun kegunaan dari peran tersebut. Teks yang anda berikan di sini akan ditampilkan di halaman perizinan juga.',
	'ROLE_DESCRIPTION_LONG'			=> 'Karakter keterangan peran terlalu panjang, silahkan batasi sampai 4000 karakter.',
	'ROLE_DETAILS'					=> 'Keterangan peran',
	'ROLE_EDIT_SUCCESS'				=> 'Peran telah berhasil diubah.',
	'ROLE_NAME'						=> 'Nama peran',
	'ROLE_NAME_ALREADY_EXIST'		=> 'Sebuah nama peran <strong>%s</strong> sudah ada untuk tipe perizinan yang ditentukan.',
	'ROLE_NOT_ASSIGNED'				=> 'Peranan belum diberikan.',

	'SELECTED_FORUM_NOT_EXIST'		=> 'Forum yang dipilih tidak ada.',
	'SELECTED_GROUP_NOT_EXIST'		=> 'Grup yang dipilih tidak ada.',
	'SELECTED_USER_NOT_EXIST'		=> 'Pengguna yang dipilih tidak ada.',
	'SELECT_FORUM_SUBFORUM_EXPLAIN'	=> 'Forum yang anda pilih di sini akan mengikutsertakan semua subforum ke dalam pilihan.',
	'SELECT_ROLE'					=> 'Pilih peran…',
	'SELECT_TYPE'					=> 'Pilih tipe',
	'SET_PERMISSIONS'				=> 'Buat perizinan',
	'SET_ROLE_PERMISSIONS'			=> 'Buat peran perizinan',
	'SET_USERS_PERMISSIONS'			=> 'Buat perizinan pengguna',
	'SET_USERS_FORUM_PERMISSIONS'	=> 'Buat perizinan forum pengguna',

	'TRACE_DEFAULT'					=> 'Secara defaultnya setiap perizinan adalah <samp>TIDAK</samp> (unset). Sehingga perizinan tersebut dapat dikesampingkan oleh pengaturan yang lain.',
	'TRACE_FOR'						=> 'Lacak',
	'TRACE_GLOBAL_SETTING'			=> '%s (global)',
	'TRACE_GROUP_NEVER_TOTAL_NEVER'	=> 'perizinan grup ini dibuat menjadi <samp>JANGAN</samp> seperti total hasil sehingga hasil yang lama tetap tersimpan.',
	'TRACE_GROUP_NEVER_TOTAL_NEVER_LOCAL'	=> 'perizinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> seperti total hasil sehingga hasil yang lama tetap tersimpan.',
	'TRACE_GROUP_NEVER_TOTAL_NO'	=> 'perizinan grup ini dibuat menjadi <samp>JANGAN</samp> yang akan menjadi nilai total baru karena belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_NO_LOCAL'	=> 'perizinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang akan menjadi nilai total baru karena belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_NEVER_TOTAL_YES'	=> 'perizinan grup ini dibuat menjadi <samp>JANGAN</samp> yang akan menuliskan ulang total <samp>YA</samp> menjadi <samp>JANGAN</samp> untuk pengguna ini.',
	'TRACE_GROUP_NEVER_TOTAL_YES_LOCAL'	=> 'perizinan grup untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang akan menuliskan ulang total <samp>YA</samp> menjadi <samp>JANGAN</samp> untuk pengguna ini.',
	'TRACE_GROUP_NO'				=> 'perizinannya adalah <samp>TIDAK</samp> untuk grup ini sehingga nilai total yang lama masih tersimpan.',
	'TRACE_GROUP_NO_LOCAL'			=> 'perizinannya adalah <samp>TIDAK</samp> untuk grup dalam forum ini sehingga nilai total yang lama masih tersimpan.',
	'TRACE_GROUP_YES_TOTAL_NEVER'	=> 'perizinan grup ini dibuat menjadi <samp>YA</samp> tetapi <samp>JANGAN</samp> dapat dituliskan ulang.',
	'TRACE_GROUP_YES_TOTAL_NEVER_LOCAL'	=> 'perizinan grup utnuk forum ini dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> dapat dituliskan ulang.',
	'TRACE_GROUP_YES_TOTAL_NO'		=> 'perizinan grup ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total baru karena nilainya belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_YES_TOTAL_NO_LOCAL'	=> 'perizinan grup untuk forum ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total baru karena nilainya belum dibuat (buat menjadi <samp>TIDAK</samp>).',
	'TRACE_GROUP_YES_TOTAL_YES'		=> 'perizinan grup ini dibuat menjadi <samp>YA</samp> dan perizinan total sudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya tersimpan.',
	'TRACE_GROUP_YES_TOTAL_YES_LOCAL'	=> 'perizinan grup untuk forum ini dibuat menjadi <samp>YA</samp> dan perizinan total sudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya tersimpan.',
	'TRACE_PERMISSION'				=> 'Lacak perizinan - %s',
	'TRACE_RESULT'					=> 'Lacak hasil',
	'TRACE_SETTING'					=> 'Lacak pengaturan',

	'TRACE_USER_GLOBAL_YES_TOTAL_YES'		=> 'Perizinan pengguna forum mandiri mengevaluasikan ke <samp>YA</samp> tetapi perizinan totalnya seudah dibuat menjadi <samp>YA</samp>, sehingga hasil totalnya masih tersimpan. %sLacak Perizinan Global%s',
	'TRACE_USER_GLOBAL_YES_TOTAL_NEVER'		=> 'Perizinan pengguna forum mandiri mengevaluasikan ke <samp>YA</samp> yang akan menulisi hasil lokal sekarang <samp>NEVER</samp>. %sLacak Perizinan Global%s',
	'TRACE_USER_GLOBAL_NEVER_TOTAL_KEPT'	=> 'Perizinan pengguna forum mandiri mengevaluasikan ke <samp>JANGAN</samp> yang tidak akan mempengaruhi perizinan lokal. %sLacak Perizinan Global%s',

	'TRACE_USER_FOUNDER'					=> 'Pengguna memiliki kumpulan tipe pendiri, oleh karena itu perizinan admin dibuat menjadi <samp>YA</samp> secara defaultnya.',
	'TRACE_USER_KEPT'						=> 'perizinan pengguna adalah <samp>TIDAK</samp> sehingga nilai hasil total yang lama tersimpan.',
	'TRACE_USER_KEPT_LOCAL'					=> 'perizinan pengguna untuk forum ini adalah <samp>TIDAK</samp> sehingga nilai hasil total yang lama tersimpan.',
	'TRACE_USER_NEVER_TOTAL_NEVER'			=> 'perizinan pengguna dibuat menjadi <samp>JANGAN</samp> dan nilai totalnya dibuat menjadi <samp>JANGAN</samp>, sehingga tidak ada yang diubah.',
	'TRACE_USER_NEVER_TOTAL_NEVER_LOCAL'	=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> dan nilai totalnya dibuat menjadi <samp>JANGAN</samp>, sehingga tidak ada yang diubah.',
	'TRACE_USER_NEVER_TOTAL_NO'				=> 'perizinan pengguna ibuat menjadi <samp>JANGAN</samp> yang menjadi nilai total karena dibuat menjadi TIDAK.',
	'TRACE_USER_NEVER_TOTAL_NO_LOCAL'		=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> yang menjadi nilai total karena dibuat menjadi TIDAK.',
	'TRACE_USER_NEVER_TOTAL_YES'			=> 'perizinan pengguna dibuat menjadi <samp>JANGAN</samp> dan akan menulisi data sebelumnya <samp>YA</samp>.',
	'TRACE_USER_NEVER_TOTAL_YES_LOCAL'		=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>JANGAN</samp> dan akan menulisi data sebelumnya <samp>YA</samp>.',
	'TRACE_USER_NO_TOTAL_NO'				=> 'perizinan pengguna adalah <samp>TIDAK</samp> dan nilai totalnya dibuat menjadi TIDAK sehingga defaultnya menjadi <samp>JANGAN</samp>.',
	'TRACE_USER_NO_TOTAL_NO_LOCAL'			=> 'perizinan pengguna untuk forum ini adalah <samp>TIDAK</samp> dan nilai totalnya dibuat menjadi TIDAK sehingga defaultnya menjadi <samp>JANGAN</samp>.',
	'TRACE_USER_YES_TOTAL_NEVER'			=> 'perizinan pengguna dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> tidak dapat ditulisi.',
	'TRACE_USER_YES_TOTAL_NEVER_LOCAL'		=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> tetapi totalnya <samp>JANGAN</samp> tidak dapat ditulisi.',
	'TRACE_USER_YES_TOTAL_NO'				=> 'perizinan pengguna dibuat menjadi <samp>YA</samp> yang menjadi nilai total karena dibuat menjadi <samp>TIDAK</samp>.',
	'TRACE_USER_YES_TOTAL_NO_LOCAL'			=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> yang menjadi nilai total karena dibuat menjadi <samp>TIDAK</samp>.',
	'TRACE_USER_YES_TOTAL_YES'				=> 'perizinan pengguna dibuat mnjadi <samp>YA</samp> dan nilai totalnya dibaut menjadi <samp>YA</samp>, sehingga tidak ada yang berubah.',
	'TRACE_USER_YES_TOTAL_YES_LOCAL'		=> 'perizinan pengguna untuk forum ini dibuat menjadi <samp>YA</samp> dan nilai totalnya dibaut menjadi <samp>YA</samp>, sehingga tidak ada yang berubah.',
	'TRACE_WHO'								=> 'Siapa',
	'TRACE_TOTAL'							=> 'Total',

	'USERS_NOT_ASSIGNED'			=> 'Tidak ada pengguna yang dibarikan peranan ini',
	'USER_IS_MEMBER_OF_DEFAULT'		=> 'adalah anggota dari grup yang tidak didefenisikan berikut ini',
	'USER_IS_MEMBER_OF_CUSTOM'		=> 'adalah anggota dari grup yang tidak didefenisikan berikut ini',

	'VIEW_ASSIGNED_ITEMS'	=> 'Lihat item yang diberikan',
	'VIEW_LOCAL_PERMS'		=> 'perizinan-perizinan lokal',
	'VIEW_GLOBAL_PERMS'		=> 'perizinan-Perizinan Global',
	'VIEW_PERMISSIONS'		=> 'Lihat perizinan',

	'WRONG_PERMISSION_TYPE'				=> 'Tipe perijian yang dipilih salah.',
	'WRONG_PERMISSION_SETTING_FORMAT'	=> 'Format pengaturan perizinan salah, phpBB tidak dapat memprosesnya dengan baik.',
));
