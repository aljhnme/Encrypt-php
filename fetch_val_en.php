<?php

if ($_POST['en'] == 'md5') 
{
	 echo md5($_POST['text_to_en']);
}
if ($_POST['en'] == 'sha') 
{
	 echo sha1($_POST['text_to_en']);
}
if ($_POST['en'] == 'password_hash') 
{
	 echo password_hash($_POST['text_to_en'],PASSWORD_DEFAULT);
}
if ($_POST['en'] == 'crc32') 
{
	echo crc32($_POST['text_to_en']);
}
?>