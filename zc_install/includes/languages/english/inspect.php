<?php
/**
 * @package Installer
 * @access private
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: inspect.php 3794 2006-06-18 08:07:28Z drbyte $
 */
/**
 * defining language components for the page
 */
  
  define('TEXT_PAGE_HEADING', 'Zen Cart&trade; Setup - System Inspection');
  define('INSTALL_BUTTON', ' Install '); // this comes before TEXT_MAIN
  define('UPGRADE_BUTTON', 'Upgrade Cfg Files'); // this comes before TEXT_MAIN
  define('DB_UPGRADE_BUTTON', 'Database Upgrade'); // this comes before TEXT_MAIN
  define('REFRESH_BUTTON', 'Re-Check');
//Button meanings: (to be made into help-text for future version):
// "Install" = make new configure.php files, regardless of existing contents.  Load new database by dropping old tables.
// "Upgrade" = read old configure.php files, and write new ones using new structure. Upgrade database, instead of wiping and new install
// "Database Upgrade" = don't write the configure.php files -- simply jump to the database-upgrade page. Only displayed if detected database version is new enough to not require configure.php file updates.

  define('TEXT_MAIN', 'Take a moment to check whether your webserver supports the features required for Zen Cart&trade; to operate. &nbsp;Please resolve any errors or warnings before continuing. &nbsp;Then click on <em>'.INSTALL_BUTTON.'&nbsp;</em> to continue.');
  define('SYSTEM_INSPECTION_RESULTS', 'System Inspection Results');
  define('OTHER_INFORMATION', 'Other System Information (For Reference Only)');
  define('OTHER_INFORMATION_DESCRIPTION', 'The following info does not necessarily indicate any problem or configuration issue. It is simply for the sake of displaying it in an easy-to-find location.');

  define('NOT_EXIST','NOT FOUND');
  define('WRITABLE','Writeable');
  define('UNWRITABLE',"<span class='errors'>Unwriteable</span>");
  define('UNKNOWN','Unknown');
  define('ON','ON');
  define('OFF','OFF');
  define('OK','OK');

  define('UPGRADE_DETECTION','Upgrade Mode Available');
  define('LABEL_PREVIOUS_INSTALL_FOUND','Previous Zen Cart Installation Found');
  define('LABEL_PREVIOUS_VERSION_NUMBER','Database appears to be Zen Cart v%s');
  define('LABEL_PREVIOUS_VERSION_NUMBER_UNKNOWN','<em>However, the version level of your database cannot be determined, usually resulting from wrong table prefixes, or other database settings mismatches. <br /><br />CAUTION: Only use the Upgrade option if you are sure your configure.php settings are correct.</em>');

  define('DISPLAY_PHP_INFO','PHP Info link: ');
  define('VIEW_PHP_INFO_LINK_TEXT','View PHPINFO for your server');
  define('LABEL_WEBSERVER','Webserver');
  define('LABEL_MYSQL_AVAILABLE','MySQL Support');
  define('LABEL_MYSQL_VER','MySQL Version');
  define('LABEL_DB_PRIVS','Database Privileges');
  define('LABEL_POSTGRES_AVAILABLE','PostgreSQL Support');
  define('LABEL_PHP_VER','PHP Version');
  define('LABEL_PHP_OS','PHP O/S');
  define('LABEL_REGISTER_GLOBALS','Register Globals');
  define('LABEL_SET_TIME_LIMIT','PHP Max Execution Time per page');
  define('LABEL_DISABLED_FUNCTIONS','Disabled PHP Functions');
  define('LABEL_SAFE_MODE','PHP Safe Mode');
  define('LABEL_CURRENT_CACHE_PATH','Current SQL Cache Folder');
  define('LABEL_SUGGESTED_CACHE_PATH','Suggested SQL Cache Folder');
  define('LABEL_HTTP_HOST','HTTP Host');
  define('LABEL_PATH_TRANLSATED','Path_Translated');
  define('LABEL_PHP_API_MODE','PHP API Mode');
  define('LABEL_PHP_MODULES','PHP Modules Active');
  define('LABEL_PHP_EXT_SESSIONS','PHP Sessions Support');
  define('LABEL_PHP_SESSION_AUTOSTART','PHP Session.AutoStart');
  define('LABEL_PHP_EXT_SAVE_PATH','PHP Session.Save_Path');
  define('LABEL_PHP_EXT_FTP','PHP FTP Support');
  define('LABEL_PHP_EXT_CURL','PHP cURL Support');
  define('LABEL_PHP_MAG_QT_RUN','PHP magic_quotes_runtime setting');
  define('LABEL_PHP_EXT_GD','PHP GD Support');
  define('LABEL_GD_VER','GD Version');
  define('LABEL_PHP_EXT_OPENSSL','PHP OpenSSL Support');
  define('LABEL_PHP_UPLOAD_STATUS','PHP Upload Support');
  define('LABEL_PHP_EXT_PFPRO','PHP Payflow Pro Support');
  define('LABEL_PHP_EXT_ZLIB','PHP ZLIB Compression Support');
  define('LABEL_PHP_SESSION_TRANS_SID','PHP session.use_trans_sid');
  define('LABEL_DISK_FREE_SPACE','Server Free Disk Space');
  define('LABEL_XML_SUPPORT','PHP XML Support');
  define('LABEL_OPEN_BASEDIR','PHP open_basedir restrictions');
  define('LABEL_UPLOAD_TMP_DIR','PHP Upload TMP dir');
  define('LABEL_SENDMAIL_FROM','PHP sendmail \'from\'');
  define('LABEL_SENDMAIL_PATH','PHP sendmail path');
  define('LABEL_SMTP_MAIL','PHP SMTP destination');
  define('LABEL_INCLUDE_PATH','PHP include_path');

  define('LABEL_CRITICAL','Critical Items');
  define('LABEL_RECOMMENDED','Recommended Items');
  define('LABEL_OPTIONAL','Optional Items');

  define('LABEL_EXPLAIN','&nbsp;Click here for more info');
  define('LABEL_FOLDER_PERMISSIONS','File and Folder Permissions');
  define('LABEL_WRITABLE_FOLDER_INFO','In order for many Zen Cart&trade; administrative and day-to-day functions to work properly,
You need to mark several files/folders "Writeable".  The following is a list of folders which need to be "read-write", 
along with recommended CHMOD settings. Please correct these settings before continuing installation. 
Refresh this page in your browser to re-check settings.<br /><br />Some hosts may not allow you to set CHMOD 777, but only 666. Start with the higher setting first, and switch to lower values if required.');


?>