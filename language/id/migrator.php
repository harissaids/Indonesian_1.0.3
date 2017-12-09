<?php
/**
 *
 * Install [Bahasa Indonesia]
 * @package language
 * @version $Id: migrator.php 2017 harissaids@gmail.com
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
	'CONFIG_NOT_EXIST'					=> 'Pengaturan konfigurasi "%s" tidak ditemukan.',

	'GROUP_NOT_EXIST'					=> 'Grup "%s" tidak ditemukan.',

	'MIGRATION_APPLY_DEPENDENCIES'		=> 'Terapkan dependesi  %s.',
	'MIGRATION_DATA_DONE'				=> 'Data terinstal: %1$s; waktu: %2$.2f detik',
	'MIGRATION_DATA_IN_PROGRESS'		=> 'Menginstal data: %1$s; waktu: %2$.2f detik',
	'MIGRATION_DATA_RUNNING'			=> 'Menginstal data: %s.',
	'MIGRATION_EFFECTIVELY_INSTALLED'	=> 'Migrasi telah terinstal ecfektif(lewatkan): %s',
	'MIGRATION_EXCEPTION_ERROR'			=> 'telah terjadi kesalahan dalam proses. Data dikembalikan seperti sebelum terjadi kesalahan, periksa dan cek kembali panel.',
	'MIGRATION_NOT_FULFILLABLE'			=> 'The migration "%1$s" is not fulfillable, missing migration "%2$s".',
	'MIGRATION_NOT_INSTALLED'			=> 'The migration "%s" is not installed.',
	'MIGRATION_NOT_VALID'				=> '%s is not a valid migration.',
	'MIGRATION_SCHEMA_DONE'				=> 'Installed Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_IN_PROGRESS'		=> 'Installing Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_SCHEMA_RUNNING'			=> 'Installing Schema: %s.',

	'MIGRATION_REVERT_DATA_DONE'		=> 'Mengembalikan data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_IN_PROGRESS'	=> 'Mengembalikan data: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_DATA_RUNNING'		=> 'mengembalikan data: %s.',
	'MIGRATION_REVERT_SCHEMA_DONE'		=> 'Skema telah dikembalikan: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_IN_PROGRESS'	=> 'Reverting Schema: %1$s; Time: %2$.2f seconds',
	'MIGRATION_REVERT_SCHEMA_RUNNING'	=> 'Reverting Schema: %s.',

	'MIGRATION_INVALID_DATA_MISSING_CONDITION'		=> 'A migration is invalid. An if statement helper is missing a condition.',
	'MIGRATION_INVALID_DATA_MISSING_STEP'			=> 'A migration is invalid. An if statement helper is missing a valid call to a migration step.',
	'MIGRATION_INVALID_DATA_CUSTOM_NOT_CALLABLE'	=> 'A migration is invalid. A custom callable function could not be called.',
	'MIGRATION_INVALID_DATA_UNKNOWN_TYPE'			=> 'A migration is invalid. An unknown migration tool type was encountered.',
	'MIGRATION_INVALID_DATA_UNDEFINED_TOOL'			=> 'A migration is invalid. An undefined migration tool was encountered.',
	'MIGRATION_INVALID_DATA_UNDEFINED_METHOD'		=> 'A migration is invalid. An undefined migration tool method was encountered.',

	'MODULE_ERROR'						=> 'An error occurred while creating a module: %s',
	'MODULE_EXISTS'						=> 'A module already exists: %s',
	'MODULE_EXIST_MULTIPLE'				=> 'Several modules with the given parent module langname already exist: %s. Try using before/after keys to clarify the module placement.',
	'MODULE_INFO_FILE_NOT_EXIST'		=> 'A required module info file is missing: %2$s',
	'MODULE_NOT_EXIST'					=> 'A required module does not exist: %s',

	'PARENT_MODULE_FIND_ERROR'			=> 'Unable to determine the parent module identifier: %s',
	'PERMISSION_NOT_EXIST'				=> 'The permission setting "%s" unexpectedly does not exist.',

	'ROLE_NOT_EXIST'					=> 'The permission role "%s" unexpectedly does not exist.',
));
