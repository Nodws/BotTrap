<?
$data = "\n".$_SERVER[REMOTE_ADDR]. ' deny';
$fp = fopen('blacklist.txt', 'a'); //make sure has write permisions
fwrite($fp, $data);
?>
Get Dunked
