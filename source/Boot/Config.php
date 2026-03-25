<?php
/**
 * DATABASE
 */
if (strpos($_SERVER['HTTP_HOST'], "localhost")) {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "****");
    define("CONF_DB_PASS", "");
    define("CONF_DB_NAME", "****");
} else {
    define("CONF_DB_HOST", "localhost");
    define("CONF_DB_USER", "****");
    define("CONF_DB_PASS", "****");
    define("CONF_DB_NAME", "****");
}

/**
 * PROJECT URLs
 */
define("CONF_URL_BASE", "https://www.jjsports.com.br");
define("CONF_URL_TEST", "https://www.localhost/jjsports");

/**
 * SITE
 */
define("CONF_SITE_NAME", "JJ Sports");
define("CONF_SITE_TITLE", "Formando Atletas");
define("CONF_SITE_DESC", "A JJ Sports Academy é uma agência de consultoria esportiva especializada em preparar jovens atletas que desejam
ingressar nos programas esportivos em universidades de outros países.");
define("CONF_SITE_LANG", "pt_BR");
define("CONF_SITE_DOMAIN", "jjsports.com.br");
define("CONF_SITE_ADDR_STREET", "Rua 3");
define("CONF_SITE_ADDR_NUMBER", "3100");
define("CONF_SITE_ADDR_COMPLEMENT", "Centro");
define("CONF_SITE_ADDR_CITY", "Rio Claro");
define("CONF_SITE_ADDR_STATE", "SP");
define("CONF_SITE_ADDR_ZIPCODE", "13504-091");

/**
 * SOCIAL
 */

define("CONF_SOCIAL_FACEBOOK_APP", "");
define("CONF_SOCIAL_FACEBOOK_PAGE", "jjsportsacademyfb");
define("CONF_SOCIAL_FACEBOOK_AUTHOR", "jjsportsacademyfb");
define("CONF_SOCIAL_INSTAGRAM_PAGE", "jjsportsacademy");

/**
 * DATES
 */
define("CONF_DATE_BR", "d/m/Y H:i:s");
define("CONF_DATE_APP", "Y-m-d H:i:s");

/**
 * PASSWORD
 */
define("CONF_PASSWD_MIN_LEN", 8);
define("CONF_PASSWD_MAX_LEN", 40);
define("CONF_PASSWD_ALGO", PASSWORD_DEFAULT);
define("CONF_PASSWD_OPTION", ["cost" => 10]);

/**
 * VIEW
 */
define("CONF_VIEW_PATH", __DIR__ . "/../../shared/views");
define("CONF_VIEW_EXT", "php");
define("CONF_VIEW_THEME", "jjsportsweb");
define("CONF_VIEW_ADMIN", "jjsportsadm");

/**
 * UPLOAD
 */
define("CONF_UPLOAD_DIR", "storage");
define("CONF_UPLOAD_IMAGE_DIR", "images");
define("CONF_UPLOAD_FILE_DIR", "files");
define("CONF_UPLOAD_MEDIA_DIR", "medias");

/**
 * IMAGES
 */
define("CONF_IMAGE_CACHE", CONF_UPLOAD_DIR . "/" . CONF_UPLOAD_IMAGE_DIR . "/cache");
define("CONF_IMAGE_SIZE", 2000);
define("CONF_IMAGE_QUALITY", ["jpg" => 75, "png" => 5]);

/**
 * MAIL
 */
define("CONF_MAIL_HOST", "smtp.sendgrid.net");
define("CONF_MAIL_PORT", "587");
define("CONF_MAIL_USER", "apikey");
define("CONF_MAIL_PASS", "");
define("CONF_MAIL_SENDER", ["name" => "JJ Sports Academy", "address" => "xxx@xxx.com.br"]);
define("CONF_MAIL_SUPPORT", "xxx@xxx.com.br");
define("CONF_MAIL_OPTION_LANG", "br");
define("CONF_MAIL_OPTION_HTML", true);
define("CONF_MAIL_OPTION_AUTH", true);
define("CONF_MAIL_OPTION_SECURE", "tls");
define("CONF_MAIL_OPTION_CHARSET", "utf-8");