<?php 
mkdir("nahid");
if(file_exists("nahidhk.json")){
  echo $filesize("nahidhk.json");
}else{
  echo "file not found ";
}
?>
