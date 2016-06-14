<?php
$post = $_POST;
$str="";
foreach ($post as $key => $value) {
  $str .="&".$key."=".$value;
}
$bh = mb_substr(md5(time() * mt_rand(1,99999)) , 0 , 10);
touch("./c/".$bh.".js");
$url="http://127.0.0.1/weather-plug-in-test/demo.html?".$str;
$connect="!function(){function lload(f){if(document.readyState=='complete'){f()}else{setTimeout(f,10)}}document.write('<script type=\"text/javascript\" id=\"".$bh."\"><\/script>');lload(function(){var g1=document.getElementById(''),g0=document.createElement('iframe');var g=document.getElementById('".$bh."');g0.style.zIndex=99999;g0.style.width='150px';g0.style.height='80px';g0.style.border='0';g0.frameBorder='0';g0.allowTransparency=true;g0.scrolling='no';g0.src='".$url."';if(g1){g1.appendChild(g0)}else{g.parentNode.insertBefore(g0,g)}})}();";
$fh = fopen("./c/".$bh.".js", "a");
fwrite($fh, $connect);
fclose($fh);
echo $bh;
