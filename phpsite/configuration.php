<?php
class JConfig {
/* Site Settings */
var $offline = '0';
var $offline_message = 'Site şu anda güncellenmektedir.<br />Lütfen daha sonra tekrar deneyiniz!';
var $sitename = 'Bilge Gümrük Müşavirlik Hizmetleri';
var $editor = 'tinymce';
var $list_limit = '20';
var $legacy = '0';
/* Debug Settings */
var $debug = '0';
var $debug_lang = '0';
/* Database Settings */
var $dbtype = 'mysql';
var $host = 'mysql5.sadecehosting.com';
var $user = 'bilgeuser1';
var $password = 'Bilge2011Bilge';
var $db = 'bilgegumruk';
var $dbprefix = 'jos_';
/* Server Settings */
var $live_site = '';
var $secret = 'jJ1bVmt0Y6FMapE7';
var $gzip = '0';
var $error_reporting = '-1';
var $helpurl = 'http://help.jt.gen.tr';
var $xmlrpc_server = '0';
var $ftp_host = '127.0.0.1';
var $ftp_port = '21';
var $ftp_user = '';
var $ftp_pass = '';
var $ftp_root = '';
var $ftp_enable = '0';
var $force_ssl = '0';
/* Locale Settings */
var $offset = '0';
var $offset_user = '0';
/* Mail Settings */
var $mailer = 'mail';
var $mailfrom = 'simplex@fotohobi.net';
var $fromname = 'Bilge Gümrük Müşavirlik Hizmetleri';
var $sendmail = '/usr/sbin/sendmail';
var $smtpauth = '0';
var $smtpsecure = 'none';
var $smtpport = '25';
var $smtpuser = '';
var $smtppass = '';
var $smtphost = 'localhost';
/* Cache Settings */
var $caching = '0';
var $cachetime = '15';
var $cache_handler = 'file';
/* Meta Settings */
var $MetaDesc = 'Joomla - devingen portal motoru ve içerik yönetim sistemi';
var $MetaKeys = 'Joomla, joomla, Joomla! Türkiye';
var $MetaTitle = '1';
var $MetaAuthor = '1';
/* SEO Settings */
var $sef           = '0';
var $sef_rewrite   = '0';
var $sef_suffix    = '0';
/* Feed Settings */
var $feed_limit   = 10;
var $feed_email   = 'author';
var $log_path = '/vhosts/bilgegumruk.com/http/logs';
var $tmp_path = '/vhosts/bilgegumruk.com/http/tmp';
/* Session Setting */
var $lifetime = '15';
var $session_handler = 'database';
}
?>