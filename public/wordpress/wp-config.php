<?php
// set global configurations
define('WP_HOME','http://' . $_SERVER['SERVER_NAME']);
define('WP_SITEURL','http://' . $_SERVER['SERVER_NAME'] . '/wp');

define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');

define('DB_USER', 'root');
define('DB_PASSWORD', 'root');
define('DB_HOST', 'localhost');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

define('AUTH_KEY',         '%dm||n^YP3g]#<tCPEl$Ka=OAOq:z)mc7:F$XI sGcpt{CA;.O< 5yMXj7tza!fV');
define('SECURE_AUTH_KEY',  ';h]%q1L~Vrz+U:^pLZK{wC,Lq5|. a|}C.X}}NO]E;?k!hSOD7D]{jRDe|Ld.zFd');
define('LOGGED_IN_KEY',    '$)zl{ Fk.$LrQGSr>l81$FoU~+b}HUj@HUSE_%:>Rle6oU=nU?)Ph&{#bD==xM9U');
define('NONCE_KEY',        '!G52Tj.oU^8r:8C0@S=7]f+`]`$7+fe6^voE{h.s#;>uc*BJh@[7{H,+}|ECZN}0');
define('AUTH_SALT',        '.Pm3a,alAk>)k2P>hSamuS|*GzV!-,HG21BdWmc>fx7ew+TK0dH-_$HwVo-IkTdA');
define('SECURE_AUTH_SALT', 'P7gyZQwjy3%a<NH&;LhT:@!$6cU`62yZ#?gF}=rwO~QQq!4&owhIyb{#wNZ>-]*$');
define('LOGGED_IN_SALT',   '_z(WhaTo>0j;l$iKY/]31se@NxhAM:O|u+zgzmLi6%+Q.Wr_(<NcMy<lB{E,d}1e');
define('NONCE_SALT',       '#DXP4}|lD]WnV$0?qNGrM+{Sl7ctBr/^>j?:.PSD.;OU1[d8.3Bqlqb-:3yWMS^S');

$table_prefix  = 'wp_';

define('WPLANG', '');

// load site-specific configurations
require_once dirname($_SERVER['DOCUMENT_ROOT']) . '/' . $_SERVER['SERVER_NAME'] . '/wp-config.php';
