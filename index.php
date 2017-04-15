<?php
include("web/geoiploc.php");
include("web/lang.php");
function random(){
	return strtolower(substr(md5(microtime(true)), 0,6));
}
function carpeta(){
	$rand=random();
	if(is_dir($rand))
		$rand=random();
	else
		return $rand;
}
$carpeta=carpeta();
$url='http://hostingo.io/';
$nombre='hostingo.io';
?><!DOCTYPE html>
<html lang="<?=$code_lang;?>-<?=$code;?>">
<head>
<meta content="width=device-width,initial-scale=1.0,maximum-scale=1.0,user-scalable=0" name="viewport"/>
<link rel="shortcut icon" href="web/favicon.ico" type="image/x-icon"/>
<link rel="apple-touch-icon-precomposed" sizes="57x57" href="web/favicon/apple-touch-icon-57x57.png" />
<link rel="apple-touch-icon-precomposed" sizes="114x114" href="web/favicon/apple-touch-icon-114x114.png" />
<link rel="apple-touch-icon-precomposed" sizes="72x72" href="web/favicon/apple-touch-icon-72x72.png" />
<link rel="apple-touch-icon-precomposed" sizes="144x144" href="web/favicon/apple-touch-icon-144x144.png" />
<link rel="apple-touch-icon-precomposed" sizes="60x60" href="web/favicon/apple-touch-icon-60x60.png" />
<link rel="apple-touch-icon-precomposed" sizes="120x120" href="web/favicon/apple-touch-icon-120x120.png" />
<link rel="apple-touch-icon-precomposed" sizes="76x76" href="web/favicon/apple-touch-icon-76x76.png" />
<link rel="apple-touch-icon-precomposed" sizes="152x152" href="web/favicon/apple-touch-icon-152x152.png" />
<link rel="icon" type="image/png" href="web/favicon/favicon-196x196.png" sizes="196x196" />
<link rel="icon" type="image/png" href="web/favicon/favicon-96x96.png" sizes="96x96" />
<link rel="icon" type="image/png" href="web/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="web/favicon/favicon-16x16.png" sizes="16x16" />
<link rel="icon" type="image/png" href="web/favicon/favicon-128.png" sizes="128x128" />
<meta name="application-name" content="&nbsp;"/>
<meta name="msapplication-TileColor" content="#f4432b" />
<meta name="msapplication-TileImage" content="web/favicon/mstile-144x144.png" />
<meta name="msapplication-square70x70logo" content="web/favicon/mstile-70x70.png" />
<meta name="msapplication-square150x150logo" content="web/favicon/mstile-150x150.png" />
<meta name="msapplication-wide310x150logo" content="web/favicon/mstile-310x150.png" />
<meta name="msapplication-square310x310logo" content="web/favicon/mstile-310x310.png" />
<!-- METAS -->
<meta name="description" content="<?=$lang[$code_lang]['text17'];?>"/>
<!-- FACEBOOK -->
<meta property="og:title" content="<?=$nombre;?>"/>
<meta property="og:site_name" content="<?=$nombre;?>"/>
<meta property="og:description" content="<?=$lang[$code_lang]['text17'];?>"/>
<meta property="og:locale" content="es_LA"/>
<meta property="og:type" content="website"/>
<meta property="og:url" content="<?=$url;?>"/>
<meta property="og:image" content="<?=$url;?>web/img/pub_01.png"/>
<meta property="og:image:url" content="<?=$url;?>web/img/pub_01.png"/>
<!--
<meta property="og:image" content="http://i.imgur.com/Bj5Uq7J.gif"/>
<meta property="og:image:url" content="http://i.imgur.com/Bj5Uq7J.gif"/>
-->
<meta property="fb:app_id" content="1592224177724737"/>
<meta name="medium" content="image"/>
<!-- OTROS -->
<title>hostingo.io</title>
<base href="<?=$url;?>" />
<link rel="stylesheet" type="text/css" href="web/css/linearicons.css"/>
<link rel="stylesheet" type="text/css" href="web/css/dropzone.css"/>
<link rel="stylesheet" type="text/css" href="web/css/index.css"/>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-72162148-8', 'auto');
  ga('send', 'pageview');

</script>
</head>
<body>
<div id="general">
	<div id="subir">
		<!--<a href="http://hostingo.io"><img src="web/img/logo.png" alt="hostingo.io"/></a>-->
		<div class="fd"></div>
		<div class="centrado">
		<form action="web/upload.php" method="POST" class="dropzone" id="mydz">
		<input type="hidden" value="<?=$carpeta;?>" name="carpeta" />
		</form>
		<p class="link"><?=$lang[$code_lang]['text1'];?> <a href="http://hostingo.io/<?=$carpeta;?>" target="_blank">hostingo.io/<?=$carpeta;?></a></p>
		</div>
		<a class="linkfixed" href="#quesomos"><?=$lang[$code_lang]['text2'];?></a>
	</div>
	<div id="quesomos">
		<div class="mit">
			<div class="centrado">
				<!--<h1><?=$lang[$code_lang]['text16'];?></h1>-->
				<h1><img src="web/img/logo.png" alt="hostingo.io - <?=$lang[$code_lang]['text16'];?>" style="max-width:210px"/></h1>
				<p><?=$lang[$code_lang]['text17'];?></p>
				<hr/>
				<div class="pasos">
					<div class="paso">
						<span>1</span>
						<p><?=$lang[$code_lang]['text13'];?></p>
					</div>
					<div class="paso">
						<span>2</span>
						<p><?=$lang[$code_lang]['text14'];?></p>
					</div>
					<div class="paso">
						<span>3</span>
						<p><?=$lang[$code_lang]['text15'];?><br/><a href="http://hostingo.io/<?=$carpeta;?>" target="_blank">hostingo.io/<?=$carpeta;?></a></p>
					</div>
				</div>
			</div>
		</div>
		<div class="mit">
			<div class="centrado">
				<div class="carac">
					<div class="caracmin">
						<span class="lnr lnr-cloud"></span>
						<strong>50MB</strong>
					</div>
					<div class="caracmin">
						<span class="lnr lnr-clock"></span>
						<strong>72 hs</strong>
					</div>
					<div class="caracmin">
						<span class="lnr lnr-flag"></span>
						<strong><?=$lang[$code_lang]['text18'];?></strong>
					</div>
				</div>
			</div>
		</div>
		<a class="linkfixed" href="#subir"><span class="lnr lnr-chevron-up"></span></a>
	</div>
	<div id="contacto">
		<div class="centrado">
			<form onsubmit="return send();" method="POST">
				<div id="mensaje_enviado" style="display: none"><?=$lang[$code_lang]['text9'];?></div>
				<h1><?=$lang[$code_lang]['text10'];?></h1>
				<label for="nombre"><?=$lang[$code_lang]['text8'];?></label>
				<input id="nombre" type="text" name="nombre" placeholder="<?=$lang[$code_lang]['text11'];?>" required/>
				<label for="email"><?=$lang[$code_lang]['text7'];?></label>
				<input id="email" type="email" name="email" placeholder="<?=$lang[$code_lang]['text12'];?>" required/>
				<label for="mensaje"><?=$lang[$code_lang]['text6'];?></label>
				<textarea id="mensaje" name="mensaje" placeholder="<?=$lang[$code_lang]['text4'];?>"></textarea>
				<button type="submit"><?=$lang[$code_lang]['text5'];?></button>
			</form>
		</div>
		<a class="linkfixed" href="#subir"><span class="lnr lnr-chevron-up"></span></a>
	</div>
</div>
<?if($code_lang=='en'){?>
<style type="text/css">
.carac .caracmin:nth-child(1) strong:before{content:'Disk space'}
.carac .caracmin:nth-child(2) strong:before{content:'Auto destroy'}
.carac .caracmin:nth-child(3) strong:before{content:'No signup'}
</style>
<?}?>
<script type="text/javascript" src="web/js/dropzone.js?z"></script>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<script type="text/javascript">
function empty (mixedVar) {
  var undef
  var key
  var i
  var len
  var emptyValues = [undef, null, false, 0, '', '0']
  for (i = 0, len = emptyValues.length; i < len; i++) {
    if (mixedVar === emptyValues[i]) {
      return true
    }
  }
  if (typeof mixedVar === 'object') {
    for (key in mixedVar) {
      if (mixedVar.hasOwnProperty(key)) {
        return false
      }
    }
    return true
  }
  return false
}
Dropzone.options.mydz={dictDefaultMessage:'<span class="lnr lnr-cloud-upload"></span> <?=$lang[$code_lang]['text3'];?>'};


$('a').click(function(){$('html,body').animate({scrollTop:$($(this).attr('href')).offset().top},1000);return false;});
function send(){
	if(empty($('input[name=nombre]').val()))
		$('input[name=nombre]').focus();
	else if(empty($('input[name=email]').val()))
		$('input[name=email]').focus();
	else if(empty($('input[name=mensaje]').val()))
		$('input[name=mensaje]').focus();
	$.post({
		url:'web/contacto.php',
		data:'nombre='+$('input[name=nombre]').val()+'&mensaje='+$('textarea[name=mensaje]').val()+'&email='+$('input[name=email]').val(),
		success: function(){
			$('#mensaje_enviado').slideDown('fast');
			$('input[name=nombre]').val('');
			$('textarea[name=mensaje]').val('<?=$lang[$code_lang]['text4'];?>');
			$('input[name=email]').val('');
		}
	});
	return false;
}
</script>
</body>
</html>