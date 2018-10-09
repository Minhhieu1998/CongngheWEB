
<?php
 
$fileList = glob('result/*.txt');
foreach($fileList as $filename){
	list($filename) = explode("/", $filename);
    //Use the is_file function to make sure that it is not a directory.
    if(is_file($filename)){
        echo $filename, '<br>'; 

    }   
}