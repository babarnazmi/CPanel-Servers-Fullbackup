<?php

//CONFIG SECTION
/*******************************************************/
$email_notify = 'your_email@domain.com'; // Email address for backup notification
$backupexpireindays=21; //3 weeks expire time in days, 21 days = 7*24*60

$cpservers = array(

	# Array of CPanel Servers, FTP Host, CPanel userid, CPanel Password, FTP Host, FTP userid, FTP Password

	array("Domain"=>"domain1.com", "CPanel_user"=>"user", "CPanel_pass"=>"pass", "FTPhost"=>"ftpserver.com", "FTPuser"=>"user1", "FTPpass"=>'pass1'),
	array("Domain"=>"domain2.com", "CPanel_user"=>"user", "CPanel_pass"=>"pass", "FTPhost"=>"ftpserver.com", "FTPuser"=>"user2", "FTPpass"=>"pass2"),
	array("Domain"=>"domain3.com", "CPanel_user"=>"user", "CPanel_pass"=>"pass", "FTPhost"=>"ftpserver.com", "FTPuser"=>"user3", "FTPpass"=>"pass3"),

);

//END OF CONFIG SECTION
/*******************************************************/

?>