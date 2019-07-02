
<?php  
$url="https://admiring-engelbart-adafff.netlify.com/"; // url de la pagina que queremos obtener  
$url_content = '';  
$file = @fopen($url, 'r');  
if($file){  
  while(!feof($file)) {  
    $url_content .= @fgets($file, 4096);  
  }  
  fclose ($file);  
}  
?>  
