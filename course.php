<?php
include('header.php');
$filename_raw = trim($_REQUEST['c']);
if($filename_raw){
$filename = $filename_raw.'.php';
if (file_exists($filename)) {
    include($filename);
} else {
    include('php.php');
}
}else{
    include('php.php');
}
include('footer.php');