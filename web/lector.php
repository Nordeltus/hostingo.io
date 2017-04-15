<?php
function showFiles($path,$folder){
    $dir = opendir($path);
    $files = array();
    while ($current = readdir($dir)){
        if( $current != "." && $current != "..") {
            if(is_dir($path.$current)) {
            	if($folder){
            		if($current != 'web')
                		$files[] = $current;
            	}
            	else
                showFiles($path.$current.'/');
            }
            else {
            	if(!$folder)
                	$files[] = $current;
            }
        }
    }
    $path=str_replace('../','',$path);
    if(!$folder)
	    //echo '<h1 class="not-found">hostingo ('.count($files).')</h1>';

        echo '<input type="hidden" value="'.$path.'" id="htt"/><span class="tit"><a href="http://hostingo.io/'.$path.'" target="_blank">hostingo.io/'.$path.'</a></span><ul class="listarch">';
    else
	    echo '<h1 class="not-found">'.$path.'</h1>';
    for($i=0; $i<count( $files ); $i++){
    	if($files[$i] != '.htaccess'){
           	if(!$folder){
       			//echo '<h2 class="not-found"><a style="color: inherit;text-decoration: inherit;" href="'.$files[$i].'" target="_blank">'.$files[$i]." (".date("d/m/Y H:i:s", filectime($files[$i])).")</a></h2>";
                echo '<li><a class="link" href="/'.$path.'/'.$files[$i].'" target="_blank"><span class="txtlink">'.$files[$i].'</span></a></li>';
    		}else{
       			echo '<h2 class="not-found"><a style="color: inherit;text-decoration: inherit;" href="'.$files[$i].'" target="_blank">'.$files[$i]." - ".date("d/m/Y H:i:s", filectime($files[$i]))."</a></h2>";
    		}
    	}
    }
    echo '</ul>';
}

    $_GET['folder']=empty($_GET['folder']) ? null : $_GET['folder'];
    $_GET['path_local']=empty($_GET['path_local']) ? null : $_GET['path_local'];


	if($_GET['folder']=='True')
		$folder=true;
	else
		$folder=false;


    if($_GET['path_local']=='True')
		$carpeta='/home/hostingo/public_html/';
	else if($_GET['q'])
        $carpeta='..'.$_GET['q'];
    else
        $carpeta='../'.str_replace('/','',explode('hostingo.io', $_SERVER['HTTP_REFERER'])[1]);
	if(is_dir($carpeta)){
		showFiles($carpeta,$folder);
	}
?>