<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: posting.php 2017 harissaids@gmail.com
 * @author 2017 Harissaid Alweni http://www.triutama.com
 * @copyright (c) phpBB Limited <https://www.phpbb.com>
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
	'ADD_ATTACHMENT'			=> 'Upload lampiran',
	'ADD_ATTACHMENT_EXPLAIN'	=> 'Masukkan beberapa perincian di bawah ini apabila anda ingin melampirkan satu file atau lebih.',
	'ADD_FILE'					=> 'Lampirkan file',
	'ADD_POLL'					=> 'Pemungutan suara',
	'ADD_POLL_EXPLAIN'			=> 'Kosongkan isian ini apabila anda tidak ingin menambahan pemungutan suara ataupun topik anda.',
	'ALREADY_DELETED'			=> 'Maaf, pesan ini sadah dihapus.',
	'ATTACH_DISK_FULL'			=> 'Tidak cukup ruang disk kosong untuk memasang lampiran ini.',
	'ATTACH_QUOTA_REACHED'		=> 'Maaf, jatah lampiran halaman sudah tercapai.',
	'ATTACH_SIG'				=> 'Lampirkan tanda tangan (tanda tangan dapat diubah lewat Papan Pengaturan Pengguna (PPP)',

	'BBCODE_A_HELP'				=> 'Inline uploaded attachment: [attachment=]filename.ext[/attachment]',
	'BBCODE_B_HELP'				=> 'Tulisan tebal: [b]teks[/b]',
	'BBCODE_C_HELP'				=> 'Tampilan kode: [code]kode[/code]',
	'BBCODE_D_HELP'				=> 'Flash: [flash=lebar,tinggi]http://url[/flash]',
	'BBCODE_F_HELP'				=> 'Ukuran huruf: [size=85]teks kecil[/size]',
	'BBCODE_IS_OFF'				=> '%sBBCode%s <em>Mati</em>',
	'BBCODE_IS_ON'				=> '%sBBCode%s <em>Hidup</em>',
	'BBCODE_I_HELP'				=> 'Tulisan miring: [i]teks[/i]',
	'BBCODE_L_HELP'				=> 'Daftar: [list]teks[/list]',
	'BBCODE_LISTITEM_HELP'		=> 'Daftar item: [*]teks[/*]',
	'BBCODE_O_HELP'				=> 'Daftar yang diurutkan: [list=]teks[/list]',
	'BBCODE_P_HELP'				=> 'Masukkan gambar: [img]http://image_url[/img]',
	'BBCODE_Q_HELP'				=> 'Kutip teks: [quote]text[/quote]',
	'BBCODE_S_HELP'				=> 'Warna huruf: [color=red]text[/color]  Tips: anda dapat menggunakan color=#FF0000',
	'BBCODE_U_HELP'				=> 'Huruf bergaris bawah: [u]text[/u]',
	'BBCODE_W_HELP'				=> 'Masukkan URL: [url]http://url[/url] or [url=http://url]URL text[/url]',
	'BBCODE_Y_HELP'				=> 'Daftar: tambah element daftar',
	'BUMP_ERROR'				=> 'Anda tidak dapat menggeser topik ini sebagimana adanya setelah pos terakhir.',

	'CANNOT_DELETE_REPLIED'		=> 'Maaf anda hanya dapat menghapus pos yang belum dibalas.',
	'CANNOT_EDIT_POST_LOCKED'	=> 'Pos ini sudah dikunci. Anda tidak lagi bisa mengubahnya.',
	'CANNOT_EDIT_TIME'			=> 'Anda tidak dapat lagi mengubah ataupun menghapus pos ini.',
	'CANNOT_POST_ANNOUNCE'		=> 'Maaf, anda tidak dapat memposkan pengumuman.',
	'CANNOT_POST_STICKY'		=> 'Maaf, anda tidak dapat melekatkan topik.',
	'CHANGE_TOPIC_TO'			=> 'Ubah jenis topik ke',
	'CHARS_POST_CONTAINS'		=> array(
		1	=> 'Pesan Anda berisikan %1$d karakter.',
		2	=> 'Pesan Anda berisikan %1$d karakter.',
	),
	'CHARS_SIG_CONTAINS'		=> array(
		1	=> 'Tanda-tangan Anda berisikan %1$d karakter.',
		2	=> 'Tanda-tangan Anda berisikan %1$d karakter.',
	),
	'CLOSE_TAGS'				=> 'Tutup kartu',
	'CURRENT_TOPIC'				=> 'Topik sekarang',

	'DELETE_FILE'				=> 'Hapus file',
	'DELETE_MESSAGE'			=> 'Hapus pesan',
	'DELETE_MESSAGE_CONFIRM'	=> 'Apakah anda yakin ingin menghapus pesan ini?',
	'DELETE_OWN_POSTS'			=> 'Maaf, anda hanya dapat menghapus pos anda sendiri.',
	'DELETE_PERMANENTLY'		=> 'Hapus permanen',
	'DELETE_POST_CONFIRM'		=> 'Apakah anda yakin ingin menghapus post ini?',
	'DELETE_POST_PERMANENTLY_CONFIRM'	=> 'Apakah Anda yakin ingin menghapus <strong>permanent</strong> posting ini?',
	'DELETE_POST_PERMANENTLY'	=> array(
		1	=> 'Hapus posting ini hingga tidak dapat dipulihkan kembali',
		2	=> 'Hapus posting ini %1d hingga tidak dapat dipulihkan kembali',
	),
	'DELETE_POSTS_CONFIRM'		=> 'Apakah Anda yakin untuk menghapus posting ini?',
	'DELETE_POSTS_PERMANENTLY_CONFIRM'	=> 'Apakah Anda yakin ingin menghapus <strong>permanen</strong> posting ini?',
	'DELETE_REASON'				=> 'Alasan penghapusan',
	'DELETE_REASON_EXPLAIN'		=> 'Alasan penhapusan tersebut dapat dilihat oleh Moderator.',
	'DELETE_POST_WARN'			=> 'Hapus posting ini',
	'DELETE_TOPIC_CONFIRM'		=> 'Apaka Anda yakin ingin Topik dihapus?',
	'DELETE_TOPIC_PERMANENTLY'	=> array(
		1	=> 'Hapus permanen topik ini hingga tidak dapat dipulihkan ',
		2	=> 'Hapus permanen  %1$d topik hingga tidak dapat dipulihkan',
	),
	'DELETE_TOPIC_PERMANENTLY_CONFIRM'	=> 'Yakin ingin <strong> menghapus </strong> permanen ini secara permanen?',
	'DELETE_TOPICS_CONFIRM'		=> 'Yakin ingin menghapus topik ini?',
	'DELETE_TOPICS_PERMANENTLY_CONFIRM'	=> 'Yakin ingin <strong> menghapus </strong> permanen ini secara permanen?',
	'DISABLE_BBCODE'			=> 'Non-Aktifkan BBCode',
	'DISABLE_MAGIC_URL'			=> 'Jangan secara otomatis mengurai URL',
	'DISABLE_SMILIES'			=> 'Non-Aktifkan smilies',
	'DISALLOWED_CONTENT'		=> 'Upload ditolak karena file yang diunggah diidentifikasi sebagai vektor serangan yang mungkin.',
	'DISALLOWED_EXTENSION'		=> 'Ekstensi %s tidak diperbolehkan.',

	'DRAFT_LOADED'				=> 'Naskah dimuat ke dalam post, anda boleh menyelesaikan post anda sekarang.<br />Naskah anda akan segera dihapus setelah post diajukan.',
	'DRAFT_LOADED_PM'			=> 'Naskah dimuat ke dalam pesan, anda boleh menyelesaikan post anda sekarang.<br />Naskah anda akan segera dihapus setelah pesan pribadi diajukan.',
	'DRAFT_SAVED'				=> 'Naskah berhasil disimpan.',
	'DRAFT_TITLE'				=> 'Judul naskah',

	'EDIT_REASON'				=> 'Alasan untuk mengubah post',
	'EMPTY_FILEUPLOAD'			=> 'File yang diupload kosong.',
	'EMPTY_MESSAGE'				=> 'Anda harus memasukkan pesan ketika memposting.',
	'EMPTY_REMOTE_DATA'			=> 'File tidak dapat diupload, silahkan upload file tersebut secara manual.',

	'FLASH_IS_OFF'				=> '[flash] <em>mati</em>',
	'FLASH_IS_ON'				=> '[flash] <em>hidup</em>',
	'FLOOD_ERROR'				=> 'Anda tidak dapat membuat post yang lain secepat ini sebelum post anda yang lama diselesaikan.',
	'FONT_COLOR'				=> 'Warna huruf',
	'FONT_COLOR_HIDE'			=> 'Sembunyikan warna huruf',
	'FONT_HUGE'					=> 'Sangat besar',
	'FONT_LARGE'				=> 'Besar',
	'FONT_NORMAL'				=> 'Normal',
	'FONT_SIZE'					=> 'Besar huruf',
	'FONT_SMALL'				=> 'Kecil',
	'FONT_TINY'					=> 'Sangat kecil',

	'GENERAL_UPLOAD_ERROR'		=> 'Tidak dapat mengunggah lampiran ke %s.',

	'IMAGES_ARE_OFF'			=> '[img] adalah <em>OFF</em>',
	'IMAGES_ARE_ON'				=> '[img] adalah <em>ON</em>',
	'INVALID_FILENAME'			=> '%s adalah nama ekstensi file yg tidak valid.',

	'LOAD'						=> 'Memuat',
	'LOAD_DRAFT'				=> 'Memuat Draft',
	'LOAD_DRAFT_EXPLAIN'		=> 'Disini Anda dapat memilih draft yang disimpan untuk dilanjutkan penulisan. Posting Anda saat ini akan dihentikan, Semua isi posting saat ini akan dihapus. Lihat, ubah dan hapus drafts di Panel Pengaturan Pengguna Anda.',
	'LOGIN_EXPLAIN_BUMP'		=> 'Anda harus masuk untuk dapat menggeser Topik dalam forum ini.',
	'LOGIN_EXPLAIN_DELETE'		=> 'Anda harus masuk untuk dapat menghapus posting dalam forum ini.',
	'LOGIN_EXPLAIN_POST'		=> 'Anda harus masuk untuk dapat memposting di forum ini.',
	'LOGIN_EXPLAIN_QUOTE'		=> 'Anda harus masuk untuk dapat mengutip posting dalam forum ini.',
	'LOGIN_EXPLAIN_REPLY'		=> 'Anda harus masuk untuk dapat membalas Topik dalam forum ini.',

	'MAX_FONT_SIZE_EXCEEDED'	=> 'Anda dapat menggunakan font dengan ukuran maksimal %d.',
	'MAX_FLASH_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Anda hanya boleh menggunakan file Flash dengan tinggi %d pixel.',
		2	=> 'Anda hanya boleh menggunakan file Flash dengan tinggi %d pixels.',
	),
	'MAX_FLASH_WIDTH_EXCEEDED'	=> array(
		1	=> 'Anda hanya boleh menggunakan file Flash dengan lebar %d pixel.',
		2	=> 'Anda hanya boleh menggunakan file Flash dengan lebar %d pixel.',
	),
	'MAX_IMG_HEIGHT_EXCEEDED'	=> array(
		1	=> 'Anda hanya boleh menggunakan Gambar dengan tingi %1$d pixel.',
		2	=> 'Anda hanya boleh menggunakan Gambar dengan tinggi %1$d pixels.',
	),
	'MAX_IMG_WIDTH_EXCEEDED'	=> array(
		1	=> 'Anda hanya boleh menggunakan Gambar dengan lebar %d pixel.',
		2	=> 'Anda hanya boleh menggunakan Gambar dengan lebar lebar %d pixel.',
	),

	'MESSAGE_BODY_EXPLAIN'		=> array(
		0	=> '', // zero means no limit, so we don't view a message here.
		1	=> 'Masukan pesan Anda disini, isi hanya diperbolehkan sebanyak <strong>%d</strong> huruf.',
		2	=> 'Masukan pesan Anda disini, isi hanya diperbolehkan sebanyak <strong>%d</strong> huruf.'
	),
	'MESSAGE_DELETED'			=> 'Pesan ini telah berhasil dihapus.',
	'MORE_SMILIES'				=> 'Lihat smilies lainnya',

	'NOTIFY_REPLY'				=> 'Beritahu saya jika balasan di telah posting',
	'NOT_UPLOADED'				=> 'File tidak dapat diunggah.',
	'NO_DELETE_POLL_OPTIONS'	=> 'Tidak dapat menghapus opsi polling yang ada.',
	'NO_PM_ICON'				=> 'Ikon PM tidak ada',
	'NO_POLL_TITLE'				=> 'Anda harus memasukan Judul Polling.',
	'NO_POST'					=> 'Posting yang dimaksud tidak ada.',
	'NO_POST_MODE'				=> 'Tidak ada posting yang dimaksud.',
	'NO_TEMP_DIR'				=> 'Folder sementara tisak ditemukan atau tidak dapat diakses.',

	'PARTIAL_UPLOAD'			=> 'Hanya sebagian file yang terunggah.',
	'PHP_UPLOAD_STOPPED'		=> 'Ekstensi PHP menghentikan unggahan file.',
	'PHP_SIZE_NA'				=> 'Ukuran file lampiran terlalu besar.<br />Tidak dapat memastikan ukuran maksimum yang didefinisikan oleh PHP di file php.ini.',
	'PHP_SIZE_OVERRUN'			=> 'Ukuran file lampiran terlalu besar, batas maksimum file uang akan diunggah adalah %1$d %2$s.<br />Harap diingat bahwa pengaturan ini ada di pengaturan php.ini dan tidak dapat ubah .',
	'PLACE_INLINE'				=> 'Tempatkan dibaris',
	'POLL_DELETE'				=> 'Hapus Polling',
	'POLL_FOR'					=> 'Jalankan Polling sampai',
	'POLL_FOR_EXPLAIN'			=> 'Masukan 0 untuk tanpa batas waktu.',
	'POLL_MAX_OPTIONS'			=> 'Pengaturan per pengguna',
	'POLL_MAX_OPTIONS_EXPLAIN'	=> 'ini adalah aturan yang mengatur berapa kali pengguna dapat memilih dalam sebuah polling.',
	'POLL_OPTIONS'				=> 'Aturan Polling',
	'POLL_OPTIONS_EXPLAIN'		=> array(
		1	=> 'Tambahkan setiap opsi disetiap baris baru. Anda dapat memasukkan <strong>%d</strong> opsi.',
		2	=> 'Tambahkan setiap opsi disetiap baris baru. Anda dapat memasukkan sampai <strong>%d</strong> opsi.',
	),
	'POLL_OPTIONS_EDIT_EXPLAIN'		=> array(
		1	=> 'Tambahkan setiap opsi disetiap baris baru. Anda dapat memasukkan <strong>%d</strong> opsi. Apabila Anda menghapus atau menambahkan opsi maka hasil polling sebelumnya akan di reset.',
		2	=> 'Tambahkan setiap opsi disetiap baris baru. Anda dapat memasukkan sampai <strong>%d</strong> opsi. Apabila Anda menghapus atau menambahkan opsi maka hasil polling sebelumnya akan di reset.',
	),
	'POLL_QUESTION'				=> 'Pertanyaan Polling',
	'POLL_TITLE_TOO_LONG'		=> 'Judul polling harus berisi kurang dari 100 karakter.',
	'POLL_TITLE_COMP_TOO_LONG'	=> 'Ukuran test yang diparsing pada judul terlalu besar, pertimbakangkan menghapus BBCodes atau smilies.',
	'POLL_VOTE_CHANGE'			=> 'Izinkan memilih ulang',
	'POLL_VOTE_CHANGE_EXPLAIN'	=> 'Apabila aktif maka pengguna dapat mengubah pilihan sebelumnya.',
	'POSTED_ATTACHMENTS'		=> 'Lampiran terposting',
	'POST_APPROVAL_NOTIFY'		=> 'Anda akan di beritahu jika posting Anda disetujui.',
	'POST_CONFIRMATION'			=> 'Posting konfirmasi',
	'POST_CONFIRM_EXPLAIN'		=> 'Untuk mencegah posting otomatis, Anda diharuskan untuk memasukkan kode konfirmasi. Anda dapat melihat kode yang tampil dibawah . Apabila Anda tidak dapat melihat dengan jelas atau kesulitan dalam membaca kode ini, Harap hubungi %sBoard Administrator%s.',
	'POST_DELETED'				=> 'Posting ini telah berhasil dihapus.',
	'POST_EDITED'				=> 'Posting ini telah berhadil diedit.',
	'POST_EDITED_MOD'			=> 'Posting ini telah berhasil diedit, Namun dibutuhkan persetujuan dari moderator sebelum dapat dilihat oleh publik.',
	'POST_GLOBAL'				=> 'Global',
	'POST_ICON'					=> 'Ikon Posting',
	'POST_NORMAL'				=> 'Normal',
	'POST_REVIEW'				=> 'Tinjauan post',
	'POST_REVIEW_EDIT'			=> 'Tinjauan post',
	'POST_REVIEW_EDIT_EXPLAIN'	=> 'Posting ini sudah diubah oleh pengguna lain ketika anda mengubahnya. Anda bisa meninjau versi post sekarang dan atur pengubahan anda.',
	'POST_REVIEW_EXPLAIN'		=> 'Paling sedikitnya satu post telah dibuat di topik ini. Anda boleh meninjau pesan anda.',
	'POST_STORED'				=> 'Pesan ini telah berhasil dipostkan.',
	'POST_STORED_MOD'			=> 'Pesan ini telah berhasil diajukan, namun masih membutuhkan persetujuan dari moderator sebelum dipublikasikan.',
	'POST_TOPIC_AS'				=> 'Posting topik sebagai',
	'PROGRESS_BAR'				=> 'Tingkat kemajuan',

	'QUOTE_DEPTH_EXCEEDED'		=> array(
		1	=> 'Anda hanya boleh menggunakan %d kutipan dengan yang lainnya.',
		2	=> 'Anda hanya boleh menggunakan %d kutipan dengan yang lainnya.',
	),
	'QUOTE_NO_NESTING'			=> 'Anda tidak boleh memasukkan tanda kutip satu sama lain.',

	'REMOTE_UPLOAD_TIMEOUT'		=> 'File yang ditentukan tidak dapat diunggah karena permintaan habis waktunya.',
	'SAVE'						=> 'Simpan',
	'SAVE_DATE'					=> 'Disimpan di',
	'SAVE_DRAFT'				=> 'Simpan Naskah',
	'SAVE_DRAFT_CONFIRM'		=> 'Mohon dicatat bahwa naskah-naskah yang disimpan hanya termasuk subjek dan isi pesan, sedangkan unsur yang lain akan disingkirkan. Apakah anda ingin menyimpan naskah anda sekarang?',
	'SMILIES'					=> 'Tanda Smiley',
	'SMILIES_ARE_OFF'			=> 'Tanda-tanda Smiley <em>MATI</em>',
	'SMILIES_ARE_ON'			=> 'Tanda-tanda Smiley <em>HIDUP</em>',
	'STICKY_ANNOUNCE_TIME_LIMIT'=> 'Batas waktu pelekatan/pengumuman',
	'STICK_TOPIC_FOR'			=> 'Sticky topik untuk',
	'STICK_TOPIC_FOR_EXPLAIN'	=> 'Masukkan angka 0 atau biarkan kosong untuk tidak mengakhiri Sticky/Pengumuman.',
	'STYLES_TIP'				=> 'Tip: Gaya bahasa dapat digunakan secara cepat untuk teks yang dipilih.',

	'TOO_FEW_CHARS'				=> 'Pesan anda mengandung karakter yang terlalu sedikit.',
	'TOO_FEW_CHARS_LIMIT'		=> array(
		1	=> 'Sedikitnya pesan Anda berisi %1$d karakter.',
		2	=> 'Sedikitnya pesan Anda berisi %1$d karakter.',
	),
	'TOO_FEW_POLL_OPTIONS'		=> 'Anda harus memasukkan paling sedikitnya dua pilihan pemungutan suara.',
	'TOO_MANY_ATTACHMENTS'		=> 'Tidah dapat menambahkan lapiran yang lain, batas maksimumnya adalah %d.',
	'TOO_MANY_CHARS'			=> 'Pesan anda mengandung karakter yang teralalu banyak.',
	'TOO_MANY_CHARS_LIMIT'		=> array(
		2	=> 'Jumlah maksimum yg diperbolehkan %1$d karakter.',
	),
	'TOO_MANY_POLL_OPTIONS'		=> 'Anda telah mencoba memasukkan pilihan-pilihan pemungutan suara yang cukup banyak.',
	'TOO_MANY_SMILIES'			=> 'Pesan anda mengandung tanda Smiley yang terlalu banyak. Jumlah maksimum tanda Smiley yang diizinkan adalah %d.',
	'TOO_MANY_URLS'				=> 'Pesan anda mengandung URL yang terlalu banyak. Jumlah maksimum URL yang diizinkan adalah %d.',
	'TOO_MANY_USER_OPTIONS'		=> 'Anda tidak boleh menentukan pilihan yang lebih banyak daripada pilihan pemungutan suara yang ada.',
	'TOPIC_BUMPED'				=> 'Topik telah berhasil digeser.',

	'UNAUTHORISED_BBCODE'		=> 'Anda tidak boleh menggunakan beberapa BBCodes: %s.',
	'UNGLOBALISE_EXPLAIN'		=> 'Untuk mengganti topik ini yang telah diubah dari topik global menjadi topik normal, anda perlu memilih forum yang anda inginkan untuk menampilkan topik ini.',
	'UNSUPPORTED_CHARACTERS_MESSAGE'	=> 'Pesan Anda mengandung jenis karakter yang tidak didukung:<br />%s',
	'UNSUPPORTED_CHARACTERS_SUBJECT'	=> 'Subjek Anda mengandung jenis karakter yang tidak didukung:<br />%s',
	'UPDATE_COMMENT'			=> 'Perbaharui komentar',
	'URL_INVALID'				=> 'URL yang anda masukkan salah.',
	'URL_NOT_FOUND'				=> 'File yang ditentukan tidak dapat ditemukan.',
	'URL_IS_OFF'				=> '[url] <em>MATI</em>',
	'URL_IS_ON'					=> '[url] <em>HIDUP</em>',
	'USER_CANNOT_BUMP'			=> 'Anda tidak dapat menggeser topik-topik di forum ini.',
	'USER_CANNOT_DELETE'		=> 'Anda tidak dapat menghapus post-post difoum ini.',
	'USER_CANNOT_EDIT'			=> 'Anda tidak dapat mengubah post di forum ini.',
	'USER_CANNOT_REPLY'			=> 'Anda tidak dapat membalas di forum ini.',
	'USER_CANNOT_FORUM_POST'	=> 'Anda tidak dapat melakukan kegiatan post di forum ini karena tipe forum ini tidak mendukung untuk itu.',

	'VIEW_MESSAGE'				=> '%sLihat pesan yang anda ajukan%s',
	'VIEW_PRIVATE_MESSAGE'		=> '%sLihat pesan pribadi yang anda ajukan%s',

	'WRONG_FILESIZE'			=> 'Ukuran file terlalu besar, ukuran maksimum yang diizinkan adalah %1$d %2$s.',
	'WRONG_SIZE'				=> 'Ukuran lebar gambar yang paling kecil harus %1$s piksel dengan tinggi %2$s piksel dan ukuran lebar gambar paling besar adalah %3$s piksel dengan tinggi %4$a. Ukuran lebar gambar yang diajukan adalah %5$s piksel dengan tinggi %6$s piksel.',
));
