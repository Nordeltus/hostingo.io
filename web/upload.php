<?php
include("geoiploc.php");
function carpeta_amigable($url) {
	$url = strtolower($url);
	$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
	$repl = array('a', 'e', 'i', 'o', 'u', 'n');
	$url = str_replace ($find, $repl, $url);
	$find = array(' ', '&', '\r\n', '\n', '+'); 
	$url = str_replace ($find, '-', $url);
	$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	$repl = array('', '', '');
	$url = preg_replace ($find, $repl, $url);
	return $url;
}
$carpeta='../'.carpeta_amigable($_POST['carpeta']);
if($carpeta && $carpeta !='web'){
	if(!is_dir($carpeta))
		mkdir($carpeta);

	$htaccess='.htaccess';
	$htaccess_data='
	DirectoryIndex index.html
	ErrorDocument 404 /404.html
	ErrorDocument 403 /403'.($code_lang!='es' ? ('_'.$code_lang) : '').'.html
	<FilesMatch "\.(php)$">
   ForceType application/octet-stream
   Header set Content-Disposition attachment
</FilesMatch>';
	if(!is_file($carpeta.'/'.$htaccess)){
		$fopen=fopen($carpeta.'/'.$htaccess,'a');
		fwrite($fopen, $htaccess_data);
		fclose($fopen);
	}



	foreach ($_FILES as $key => $val) {
		if($_FILES[$key]['name']!='.htaccess'){
			$file=$carpeta.'/'.$_FILES[$key]['name'];
			if(is_file($file)){
				unlink($file);
			}
			copy($_FILES[$key]['tmp_name'],$file);
		}

	}
}
?>