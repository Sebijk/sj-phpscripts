<?php

if($_GET['show']=="credits") {
phpcredits();
exit;
}

$PHP_VERSION = phpversion(); 
$GATEWAY_INTERFACE = GETENV('GATEWAY_INTERFACE');
$SERVER_NAME = GETENV('SERVER_NAME');
$SERVER_SOFTWARE = GETENV('SERVER_SOFTWARE');
$SERVER_PROTOCOL = GETENV('SERVER_PROTOCOL');
$REQUEST_METHOD = GETENV('REQUEST_METHOD');
$QUERY_STRING = GETENV('QUERY_STRING');
$DOCUMENT_ROOT = GETENV('DOCUMENT_ROOT');

$HTTP_ACCEPT = GETENV('HTTP_ACCEPT');
$HTTP_ACCEPT_CHARSET = GETENV('HTTP_ACCEPT_CHARSET');
$HTTP_ACCEPT_ENCODING = GETENV('HTTP_ACCEPT_ENCODING');
$HTTP_ACCEPT_LANGUAGE = GETENV('HTTP_ACCEPT_LANGUAGE');
$HTTP_COOKIE = GETENV('HTTP_COOKIE');
$HTTP_ENCODING = GETENV('HTTP_ENCODING');
$HTTP_KEEP_ALIVE = GETENV('HTTP_KEEP_ALIVE');
$HTTP_CONNECTION = GETENV('HTTP_CONNECTION');
$HTTP_HOST = GETENV('HTTP_HOST');
$HTTP_REFERER = GETENV('HTTP_REFERER');
$HTTP_USER_AGENT = GETENV('HTTP_USER_AGENT');

$PATH = GETENV('PATH');
$PWD = GETENV('PWD');
$INFODIR = GETENV('INFODIR');
$APACHE_PATH = GETENV('_');
$REMOTE_ADDR = GETENV('REMOTE_ADDR');
$REMOTE_PORT = GETENV('REMOTE_PORT');
$REMOTE_USER = GETENV('REMOTE_USER');
$AUTH_TYPE = GETENV('AUTH_TYPE');

$SCRIPT_FILENAME = GETENV('SCRIPT_FILENAME');
$SERVER_ADDR = GETENV('SERVER_ADDR');
$SERVER_ADMIN = GETENV('SERVER_ADMIN');
$SERVER_PORT = GETENV('SERVER_PORT');
$SERVER_SIGNATURE = GETENV('SERVER_SIGNATURE');
$PATH_TRANSLATED = $_SERVER['PATH_TRANSLATED'];
$SCRIPT_NAME = GETENV('SCRIPT_NAME');
$REQUEST_URI = GETENV('REQUEST_URI');

$SERVER_ARRAYS = print_r($_SERVER, true);
$SERVER_ARRAYS = nl2br($SERVER_ARRAYS);
$GET_ARRAYS = print_r($_GET, true);
$GET_ARRAYS = nl2br($GET_ARRAYS);
$ENV_ARRAYS = print_r($_ENV, true);
$ENV_ARRAYS = nl2br($ENV_ARRAYS);
$REQUEST_ARRAYS = print_r($_REQUEST, true);
$REQUEST_ARRAYS = nl2br($REQUEST_ARRAYS);
$POST_ARRAYS = print_r($_POST, true);
$POST_ARRAYS = nl2br($POST_ARRAYS);
$COOKIE_ARRAYS = print_r($_COOKIE, true);
$COOKIE_ARRAYS = nl2br($COOKIE_ARRAYS);

$PHP_MODULES = get_loaded_extensions();
if(function_exists('gd_info')) $gd_info = gd_info();

// Magic Quotes
if (get_magic_quotes_runtime()) $magic_quotes_runtime = "on";
else $magic_quotes_runtime = "off";

if (get_magic_quotes_gpc()) $magic_quotes_gpc = "on";
else $magic_quotes_gpc = "off";

if (get_cfg_var('magic_quotes_sybase') != '') $magic_quotes_sybase = "off";
else $magic_quotes_sybase = "on";

// Extension Dir
if (get_cfg_var('extension_dir') == '') $extension_dir = "<i>no value</i>";
else $extension_dir = get_cfg_var('extension_dir');

// Open Base Dir check
if (get_cfg_var('open_basedir') == '') $open_basedir = "<i>no value</i>";
else $open_basedir = get_cfg_var('open_basedir');

// Safe Mode
if (get_cfg_var('safe_mode') == '') $safe_mode = "off";
else $safe_mode = "on";

// Include Path
if (get_cfg_var('include_path') == '') $include_path = "<i>no value</i>";
else $include_path = get_cfg_var('include_path');

// Disable Functions
if (get_cfg_var('disable_functions') == '') $disable_functions = "<i>no value</i>";
else $disable_functions = get_cfg_var('disable_functions');

// Sendmail path
if (get_cfg_var('sendmail_path') == '') $sendmail_path = "<i>no value</i>";
else $sendmail_path = get_cfg_var('sendmail_path');



 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "DTD/xhtml1-transitional.dtd">
<html><head>
<style type="text/css">
body {background-color: #ffffff; color: #000000;}
body, td, th, h1, h2 {font-family: sans-serif;}
pre {margin: 0px; font-family: monospace;}
a:link {color: #000099; text-decoration: none; background-color: #ffffff;}
a:hover {text-decoration: underline;}
table {border-collapse: collapse;}
.center {text-align: center;}
.center table { margin-left: auto; margin-right: auto; text-align: left;}
.center th { text-align: center !important; }
td, th { border: 1px solid #000000; font-size: 75%; vertical-align: baseline;}
h1 {font-size: 150%;}
h2 {font-size: 125%;}
.p {text-align: left;}
.e {background-color: #ccccff; font-weight: bold; color: #000000;}
.h {background-color: #9999cc; font-weight: bold; color: #000000;}
.v {background-color: #cccccc; color: #000000;}
.vr {background-color: #cccccc; text-align: right; color: #000000;}
img {float: right; border: 0px;}
hr {width: 600px; background-color: #cccccc; border: 0px; height: 1px; color: #000000;}
</style>
<title>PHP-Informationen by Sebijk</title>
<meta name="ROBOTS" content="NOINDEX,FOLLOW,NOARCHIVE" />
</head>
<body><div class="center">
<table border="0" cellpadding="3" width="600">
<tr class="h"><td>
<h1 class="p">PHP Version <?php echo $PHP_VERSION; ?></h1>
</td></tr>
</table><br />

<table border="0" cellpadding="3" width="600">
<tr class="h"><td>
<h2 class="p"><center>Script ist noch in Entwicklung, später werden aber noch mehr Infos angezeigt.</center></h2>
</td></tr>
</table><br />

<h6>Tja, und wer jetzt meint, dass man mit deaktiveren phpinfo(); den Server sicherer machen könnte, der irrt sich.</h6>

<table border="0" cellpadding="3" width="600">
<tbody><tr><td class="e">System </td><td class="v"><?php echo php_uname(); ?></td></tr>
</tbody></table><br />

<hr>
<h1><a href="<?php echo $SCRIPT_NAME; ?>?show=credits">PHP Credits</a></h1>
<hr>

<h2><a name="module_apache2handler">Server Infos</a></h2>
<table border="0" cellpadding="3" width="600">
<tr><td class="e">Server Version </td><td class="v"><?php echo $SERVER_SOFTWARE; ?></td></tr>
</table><br />


<hr />
<h1>Configuration</h1>
<h2>PHP Core</h2>
<h2>Kurze Ausgabe</h2>
<table border="0" cellpadding="2" width="600">
<tr class="h"><th>Directive</th><th>Value</th></tr>
<tr><td class="e">disable_functions</td><td class="v"><?php echo $disable_functions; ?></td></tr>
<tr><td class="e">extension_dir</td><td class="v"><?php echo $extension_dir; ?></td></tr>
<tr><td class="e">include_path</td><td class="v"><?php echo $include_path; ?></td></tr>
<tr><td class="e">magic_quotes_gpc</td><td class="v"><?php echo $magic_quotes_gpc; ?></td></tr>
<tr><td class="e">magic_quotes_runtime</td><td class="v"><?php echo $magic_quotes_runtime; ?></td></tr>
<tr><td class="e">magic_quotes_sybase</td><td class="v"><?php echo $magic_quotes_sybase; ?></td></tr>
<tr><td class="e">open_basedir</td><td class="v"><?php echo $open_basedir; ?></td></tr>
<tr><td class="e">safe_mode</td><td class="v"><?php echo $safe_mode; ?></td></tr>
<tr><td class="e">sendmail_path</td><td class="v"><?php echo $sendmail_path; ?></td></tr>
</table><br />
<h2>Komplette Ausgabe</h2>
<table border="0" cellpadding="2" width="600">
<tr class="h"><th>Directive</th><th>Local Value</th><th>Master Value</th></tr>
<?php
$ausgabe = ini_get_all();
foreach ($ausgabe as $ausgabe_key => $ausgabe_arr) {
    echo '<tr><td class="e">'.$ausgabe_key.'</td><td class="v">'.$ausgabe_arr['local_value'].'</td><td class="v">'.$ausgabe_arr['global_value'].'</td></tr>';
} ?>
</table><br />


<h2>Apache Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">HTTP_HOST </td><td class="v"><?php echo $HTTP_HOST; ?></td></tr>
<tr><td class="e">HTTP_USER_AGENT </td><td class="v"><?php echo $HTTP_USER_AGENT; ?></td></tr>
<tr><td class="e">HTTP_ACCEPT </td><td class="v"><?php echo $HTTP_ACCEPT; ?></td></tr>

<tr><td class="e">HTTP_ACCEPT_LANGUAGE </td><td class="v"><?php echo $HTTP_ACCEPT_LANGUAGE; ?></td></tr>
<tr><td class="e">HTTP_ACCEPT_ENCODING </td><td class="v"><?php echo $HTTP_ACCEPT_ENCODING; ?></td></tr>
<tr><td class="e">HTTP_ACCEPT_CHARSET </td><td class="v"><?php echo $HTTP_ACCEPT_CHARSET; ?></td></tr>
<tr><td class="e">HTTP_KEEP_ALIVE </td><td class="v"><?php echo $HTTP_KEEP_ALIVE; ?> </td></tr>
<tr><td class="e">HTTP_CONNECTION </td><td class="v"><?php echo $HTTP_CONNECTION; ?></td></tr>
<tr><td class="e">HTTP_REFERER </td><td class="v"><?php echo $HTTP_REFERER; ?></td></tr>

<tr><td class="e">HTTP_COOKIE </td><td class="v"><?php echo $HTTP_COOKE; ?></td></tr>
<tr><td class="e">PATH </td><td class="v"><?php echo $PATH; ?></td></tr>
<tr><td class="e">SERVER_SIGNATURE </td><td class="v"><?php echo $SERVER_SIGNATURE; ?></td></tr>
<tr><td class="e">SERVER_SOFTWARE </td><td class="v"><?php echo $SERVER_SOFTWARE; ?></td></tr>
<tr><td class="e">SERVER_NAME </td><td class="v"><?php echo $SERVER_NAME; ?></td></tr>

<tr><td class="e">SERVER_ADDR </td><td class="v"><?php echo $SERVER_ADDR; ?></td></tr>
<tr><td class="e">SERVER_PORT </td><td class="v"><?php echo $SERVER_PORT; ?></td></tr>
<tr><td class="e">REMOTE_ADDR </td><td class="v"><?php echo $REMOTE_ADDR; ?></td></tr>
<tr><td class="e">DOCUMENT_ROOT </td><td class="v"><?php echo $DOCUMENT_ROOT; ?></td></tr>
<tr><td class="e">SERVER_ADMIN </td><td class="v"><?php echo $SERVER_ADMIN; ?></td></tr>
<tr><td class="e">SCRIPT_FILENAME </td><td class="v"><?php echo $SCRIPT_FILENAME; ?></td></tr>

<tr><td class="e">REMOTE_PORT </td><td class="v"><?php echo $REMOTE_PORT; ?> </td></tr>
<tr><td class="e">REMOTE_USER </td><td class="v"><?php echo $REMOTE_USER; ?></td></tr>
<tr><td class="e">AUTH_TYPE </td><td class="v"><?php echo $AUTH_TYPE; ?></td></tr>
<tr><td class="e">GATEWAY_INTERFACE </td><td class="v"><?php echo $GATEWAY_INTERFACE; ?></td></tr>
<tr><td class="e">SERVER_PROTOCOL </td><td class="v"><?php echo $SERVER_PROTOCOL; ?></td></tr>
<tr><td class="e">REQUEST_METHOD </td><td class="v"><?php echo $REQUEST_METHOD; ?></td></tr>

<tr><td class="e">QUERY_STRING </td><td class="v"><?php echo $QUERY_STRING; ?></td></tr>
<tr><td class="e">REQUEST_URI </td><td class="v"><?php echo $REQUEST_URI; ?></td></tr>
<tr><td class="e">SCRIPT_NAME </td><td class="v"><?php echo $SCRIPT_NAME; ?></td></tr>
</table><br />
<h2>HTTP Headers Information</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th colspan="2">HTTP Request Headers</th></tr>
<tr><td class="e">HTTP Request </td><td class="v"><?php echo $HTTP_REQUEST; ?></td></tr>

<tr><td class="e">Host </td><td class="v"><?php echo $HTTP_HOST; ?></td></tr>
<tr><td class="e">User-Agent </td><td class="v"><?php echo $HTTP_USER_AGENT; ?></td></tr>
<tr><td class="e">Accept </td><td class="v"><?php echo $HTTP_ACCEPT; ?></td></tr>
<tr><td class="e">Accept-Language </td><td class="v"><?php echo $HTTP_ACCEPT_LANGUAGE; ?></td></tr>
<tr><td class="e">Accept-Encoding </td><td class="v"><?php echo $HTTP_ACCEPT_ENCODING; ?></td></tr>
<tr><td class="e">Accept-Charset </td><td class="v"><?php echo $HTTP_ACCEPT_CHARSET; ?></td></tr>

<tr><td class="e">Keep-Alive </td><td class="v"><?php echo $HTTP_KEEP_ALIVE; ?></td></tr>
<tr><td class="e">Connection </td><td class="v"><?php echo $HTTP_CONNECTION; ?></td></tr>
<tr><td class="e">Referer </td><td class="v"><?php echo $HTTP_REFERER; ?></td></tr>
<tr><td class="e">Cookie </td><td class="v"><?php echo $HTTP_COOKE; ?></td></tr>
<tr><td class="e">Authorization </td><td class="v"><?php echo $AUTH_TYPE; ?></td></tr>
</table><br />

<?php if($PHP_MODULES) { ?>
<h2>Installierte Module</h2>
<table border="0" cellpadding="3" width="600">
<tbody><tr class="h"><th>Modulname</th></tr>
<?php
while(list($key, $val) = each($PHP_MODULES)) {
  echo '<tr><td>' . $val . '</td></tr>';
}
?>
</tbody></table><br />

 <?php } ?>
<?php if($gd_info) { ?>
<h2>gd</h2>
<table border="0" cellpadding="3" width="600">
<?php foreach($gd_info as $gd_key => $gd_value) {
echo '<tr><td class="e">'.$gd_key.'</td><td class="v">'.$gd_value.'</td></tr>';
} ?>
 </table><br />
<?php } ?>


<h2>Environment</h2>
<table border="0" cellpadding="3" width="600">
<tr class="h"><th>Variable</th><th>Value</th></tr>
<tr><td class="e">PATH </td><td class="v"><?php echo $PATH; ?></td></tr>
<tr><td class="e">PWD </td><td class="v"><?php echo $PWD; ?></td></tr>
<tr><td class="e">_ </td><td class="v"><?php echo $APACHE_PATH; ?></td></tr>
</table><br />
<h2>PHP Variables</h2><br />
<?php
echo "<a name=\"server_variables\"><h2>_SERVER Variables</h2></a><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $SERVER_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
echo "<a name=\"get_variables\"><h2>_GET Variables</h2></a><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $GET_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
echo "<a name=\"env_variables\"><h2>_ENV Variables</h2></a><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $ENV_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
echo "<h2>_REQUEST Variables</h2><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $REQUEST_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
echo "<h2>_POST Variables</h2><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $POST_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
echo "<h2>_COOKIE Variables</h2><br />";
echo "<table border=\"0\" cellpadding=\"3\" width=\"600\">";
echo "<tr><td class=\"v\">";
echo $COOKIE_ARRAYS;
echo "</td></tr>";
echo "</table><br />";
?>

</div></body></html>
