<?php
/*
##     ## ######## ##    ##  #######  ##    ##  #######   ######
 ##   ##  ##       ###   ## ##     ## ###   ## ##     ## ##    ##
  ## ##   ##       ####  ## ##     ## ####  ## ##     ## ##
   ###    ######   ## ## ## ##     ## ## ## ## ##     ##  ######
  ## ##   ##       ##  #### ##     ## ##  #### ##     ##       ##
 ##   ##  ##       ##   ### ##     ## ##   ### ##     ## ##    ##
##     ## ######## ##    ##  #######  ##    ##  #######   ######


XenonOS is a fork of the oneye project.
XenonOS Copyright © 2019 Trinity (touhouboi@protonmail.com)

Original Copyright
------------------------------------------
https://oneye-project.org
Copyright © 2005 - 2010 eyeos Team (team@eyeos.org)
             since 2010 Lars Knickrehm (mail@lars-sh.de)

*/

/*
	XenonOS Main Configuration file.
*/

// File Paths
define('XENONOS_ROOT', '.');
define('REAL_XENONOS_ROOT', 'system');
define('SYSTEM_DIR', 'system');
define('KERNEL_DIR', 'kernel');
define('SERVICE_DIR', 'services');
define('LIB_DIR', 'lib');
define('APP_DIR', 'apps');
define('USERS_DIR', 'users');
define('CONF_USER_DIR', 'conf');
define('FILES_USER_DIR', 'files');
define('TMP_USER_DIR', 'tmp');
define('SHARE_USER_DIR', 'share');
define('PUBLIC_USER_DIR', 'public');
define('THEMES_DIR', APP_DIR . '/eyeX/themes');
define('THEME_CONF_DIR', 'conf');
define('SYSTEM_CONF_DIR', 'conf');
define('APP_CONF_SHARE', 'share');
define('EXTERN_DIR', 'extern');
define('TRASH_USER_DIR', 'trash');
define('ACCOUNT_DIR', 'accounts');
define('GROUPS_DIR', 'groups');
define('FILES_GROUP_DIR', 'files');
define('CONF_GROUP_DIR', 'conf');
define('LOG_DIR', 'logs');
define('XENONOS_TMP_DIR', 'tmp');

// XenonOS file extensions
define('XENONOS_INFO_EXT', 'eyeInfo');
define('XENONOS_FILE_EXT', 'eyeFile');
define('EYEOS_LINK_EXT', 'eyeLink');
define('EYE_CODE_EXTENSION', '.xecode');
define('EYEOS_TRASH_EXT', 'eyeTrash');

// vfs and um modules
define('VFS_MODULE', 'virtual');
define('UM_MODULE', 'xenonos');

// define root account
define('REAL_ROOTUSER', 'root');

// XenonOS Version
define('XENONOS_VERSION',' 1.0.1alpha');
define('KE_KERNEL_VERSION', '1.0.1alpha');
define('KE_KERNEL_HASH', '3C281DF7E1D12CA3F98F40C862F7238A5B551E2DCCF51590C2A5C2C5943D240E'); // SHA256 Hash of "kernel.xecode"

// Define XenonOS Dialog Types
define('EYEDIALOG_TYPE_OPENFILE', 0);
define('EYEDIALOG_TYPE_SAVEFILE', 1);
define('EYEDIALOG_TYPE_SELECTFOLDER', 2);

// DEPRECATED
define('CHECK_MOBILE', 0);

// User Management: LDAP
define('LDAP_DN', 'uid=%0,ou=People,o=localhost');
define('LDAP_SERVER', 'localhost');

// Extras
define('XML_COMPAT', 1);
define('XML_PARSER', 'pure');
define('ACL_SUPPORT', 1);
define('TIMEZONE', 'UTC'); // It must be a valid timezone identifier: http://www.php.net/manual/en/timezones.php
?>
